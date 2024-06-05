<?php

namespace App\Modules\PurchageManagement\PurchaseOrder\Actions;

use Carbon\Carbon;

class Store
{
    static $model = \App\Modules\PurchageManagement\PurchaseOrder\Models\Model::class;
    static $purchaseOrderProductsModel = \App\Modules\PurchageManagement\PurchaseOrder\Models\PurchaseOrderProductsModel::class;
    static $purchaseOrderChargeModel = \App\Modules\PurchageManagement\PurchaseOrder\Models\PurchaseChargeModel::class;
    /**
     * stock management model
     */
    static $producStockModel = \App\Modules\StockManagement\ProductStock\Models\Model::class;

    public static function execute($request)
    {
        try {

            $requestData = $request->validated();
            $subTotal = 0;
            if ($purchaseOrder = self::$model::query()->create($requestData)) {

                foreach ($requestData['products'] as $key => $product) {

                    $purchaseOrderProducts = self::$purchaseOrderProductsModel::create([
                        "purchase_order_id" => $purchaseOrder->id,
                        "product_id" => $product->id,
                        "purchase_price" => $product->price,
                        "discount" => $product->dicount ?? 0,
                        "qty" => $product->qty,
                        "discount_type" => $product->discount_type,
                        "subtotal" => $product->price * $product->qty,
                        "total" => ($product->price * $product->qty) - $product->dicount,
                    ]);

                    $purchaseOrderCharge = self::$purchaseOrderChargeModel::create([
                        "purchase_order_id" => $purchaseOrder->id,
                        "purchase_order_product_id" => $purchaseOrderProducts->id,
                        "vat_id" => 1, //vat id kmne pabo
                        "vat_group_id" => null,
                        "amount" => $product->price * 2 / 100,
                    ]);

                    $purchaseOrderProducts->total += $purchaseOrderCharge->amount;
                    $purchaseOrderProducts->save();
                    $subTotal +=  $purchaseOrderProducts->total;

                    $producStock =  self::$producStockModel::create([
                        "date" => Carbon::now()->toDateString(),
                        "stock_type" => 'purchase',
                        "product_id" => $product->id,
                        "qty" => $purchaseOrderProducts->qty,
                        "bill_receipt_no" => $purchaseOrder->reference,
                        "purchase_order_id" => $purchaseOrder->id,
                    ]);

                    $producStock->save();
                }

                $purchaseOrder->subtotal = $subTotal;
                $purchaseOrder->total = $subTotal - $purchaseOrder->discount_on_all;
                $purchaseOrder->save();


                return messageResponse('Item added successfully', $purchaseOrder, 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
