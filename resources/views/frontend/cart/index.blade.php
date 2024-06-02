@extends('layouts.frontend')
@section('content')
    <div class="cart-main-container shop-bg" >
        <div class="cart-area">
            <div class="container">
                <div class="woocommerce-breadcrumb mtb-15">
                    <div class="menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a href="cart.html">cart</a></li>
                        </ul>
                    </div>
                </div>

                <div class="account-title mtb-20 text-center">
                    <h1>Cart</h1>
                </div>

                <div id="Card">
                    <card-products name="cart"></card-products>
                </div>


            </div>
        </div>
    </div>
@endsection
