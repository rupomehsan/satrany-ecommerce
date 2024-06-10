<?php

namespace App\Modules\SalesManagement\SalesEcommerceOrder\Actions;

class Store
{
    static $model = \App\Modules\SalesManagement\SalesEcommerceOrder\Models\Model::class;
    static $ProductModel = \App\Modules\ProductManagement\Product\Models\Model::class;
    static $OrderProductsModel = \App\Modules\SalesManagement\SalesEcommerceOrder\Models\SalesEcommerceOrderProductModel::class;
    static $CartModel = \App\Modules\Cart\Models\Model::class;

    public static function execute()
    {
        try {

            // dd(request()->all());

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $sessionId = $_SESSION['sessionId'] ?? session_id();
            $orderData = request()->all();
            $orderData['session_id'] = $sessionId;
            $orderData['order_status'] = 'pending';


            $cardItems = self::$CartModel::query()->where('session_id', $sessionId)->get();

            if (count($cardItems) == 0) {
                return messageResponse('Cart is empty', 500, 'server_error');
            }


            if ($order = self::$model::query()->create($orderData)) {
                if ($cardItems) {
                    $orderTotal = 0;
                    foreach ($cardItems as $item) {
                        $product = self::$ProductModel::find($item->product_id);
                        $productInfo = [
                            'sales_ecommerce_order_id' => $order->id,
                            'product_id' => $item->product_id,
                            'product_price' => $product->price,
                            'qty' => $item->quantity,
                            'subtotal' => $product->price * $item->quantity,
                        ];
                        self::$OrderProductsModel::create($productInfo);
                        $orderTotal += $product->price * $item->quantity;
                    }
                    $order->subtotal = $orderTotal;
                    $order->total = $orderTotal + $order->delivery_charge;
                    $order->save();

                    self::$CartModel::query()->where('session_id', $sessionId)->delete();
                }
                return messageResponse('Order Successfully complete', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error', []);
        }
    }
}
