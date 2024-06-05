<?php

namespace App\Modules\UserManagement\User\Actions\Employee;



class Update
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;
    static $userAddressModel = \App\Modules\UserManagement\User\Models\UserAddressModel::class;
    static $userSupplierInfoModel = \App\Modules\UserManagement\User\Models\UserSupplierInformationModel::class;

    static $userShow = \App\Modules\UserManagement\User\Actions\Customer\Show::class;
    static $userAddressContactPersonModel = \App\Modules\UserManagement\User\Models\UserAddressContactPersonModel::class;

    public static function execute($request, $id)
    {
        try {


            $requestData = $request->validated();
            unset($requestData['confirmed']);
            if (!$userData = self::$model::find($id)) {
                return messageResponse('Data not found...', [], 404, 'error');
            }

            $additionalValidationData = [];
            if (!$request->customer_type_id) {
                $additionalValidationData[] = 'customer_type_id';
                $response = additionalValidation($additionalValidationData);
                if ($response) {
                    return $response;
                }
            }

            $userData->update($requestData);

            //store data
            if ($userData = self::$model::create($requestData)) {
                $userCustomerInfoData = self::$userSupplierInfoModel::where('user_id', $id)->first();
                $userCustomerInfoData->update([
                    'user_id' => $userData->id,
                    'retailer_type_id' => $request->retailer_type_id,
                    'retailer_id' => $request->supplier_id,
                    'alt_email' => $request->alt_email,
                    'alt_mobile_number' => $request->alt_mobile_number,
                ]);
                if ($request->has('userAddress')) {
                    $existingAddressIds = $userData->user_address()->pluck('id')->toArray();
                    $newAddressIds = [];
                    $userAddressContactPersons = [];

                    foreach ($request->userAddress as $address) {
                        $address = (object) $address;
                        $addressData = [
                            'user_id' => $userData->id,
                            'is_shipping' => $address->is_shipping,
                            'is_billing' => $address->is_billing,
                            'address_types' => $address->address_types,
                            'address' => $address->address,
                            'country_id' => $address->country_id,
                            'state_division_id' => $address->state_division_id,
                            'division_id' => $address->division_id,
                            'district_id' => $address->district_id,
                            'thana_id' => $address->thana_id,
                            'city_id' => $address->city_id,
                            'zip_code' => $address->zip_code,
                            'is_present_address' => $address->is_present_address,
                            'is_permanent_address' => $address->is_permanent_address,
                        ];

                        if (isset($address->id) && in_array($address->id, $existingAddressIds)) {
                            $userAddress = self::$userAddressModel::find($address->id);
                            $userAddress->update($addressData);
                            $newAddressIds[] = $userAddress->id;
                        } else {
                            $userAddress = self::$userAddressModel::create($addressData);
                            $newAddressIds[] = $userAddress->id;
                        }

                        if (isset($address->contact_persons)) {
                            foreach ($address->contact_persons as $contactPerson) {
                                $contactPerson = (object) $contactPerson;
                                $contactPersonData = [
                                    'user_id' => $userData->id,
                                    'user_address_id' => $userAddress->id,
                                    'name' => $contactPerson->name,
                                    'phone_number' => $contactPerson->phone_number,
                                    'email' => $contactPerson->email,
                                ];

                                if (isset($contactPerson->id)) {
                                    $userAddressContactPerson = self::$userAddressContactPersonModel::find($contactPerson->id);
                                    $userAddressContactPerson->update($contactPersonData);
                                } else {
                                    $userAddressContactPersons[] = $contactPersonData;
                                }
                            }
                        }
                    }

                    if (!empty($userAddressContactPersons)) {
                        self::$userAddressContactPersonModel::insert($userAddressContactPersons);
                    }

                    $addressesToDelete = array_diff($existingAddressIds, $newAddressIds);
                    self::$userAddressModel::destroy($addressesToDelete);
                }
                return self::$userShow::execute($userData->slug);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
