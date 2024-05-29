@extends('layouts.frontend')
@section('content')
<div class="main-container">
    <div class="container">
        <div class="menu  mtb-15">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="checkout.html">Checkout</a></li>
            </ul>
        </div>
        <div class="checkout-title text-center mtb-20">
            <h1>Checkout</h1>
        </div>

        <div class="checkout-area">
            <div class="returning-customer-area p-20 mb-20">
                <div class="returning-customer mb-10">
                    <i class="fa fa-book"></i>
                    <span>Returning customer?</span>
                    <span class="login-form-click">Click here to login</span>
                </div>
                <div class="login-form account-form p-20 clear bg-fff box-shadow">
                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section.</p>
                    <form action="#">
                        <span class="form-row-first">
                            <b>Username or email <span>*</span></b>
                            <input type="text">
                        </span>
                        <span class="form-row-last">
                            <b>password <span>*</span></b>
                            <input type="password">
                        </span>
                        <div class="login-button">
                            <button>Login</button>
                            <input type="checkbox">
                            <b>Remember me </b>
                            <a href="#">Lost your password?</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="coupon-code-area p-20 mb-20">
                <div class="returning-customer mb-10">
                    <i class="fa fa-book"></i>
                    <span>Have a coupon?</span>
                    <span class="code">Click here to enter your code</span>
                </div>
                <div class="code-form account-form p-20 clear box-shadow bg-fff">
                    <form action="#">
                        <span class="form-row-first">
                            <input type="text" placeholder="Coupon Code">
                        </span>
                        <span class="form-row-last login-button">
                            <button>Apply Coupon</button>
                        </span>
                    </form>
                </div>
            </div>
        </div>

        <div class="customer-details-area">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout-order-area mb-35 p-3">
                        <div class="order-title pb-10 mb-20 text-uppercase">
                            <h3>Order  details</h3>
                        </div>
                        <div class="customer-details-form  clear">
                            <form action="#">
                                <span class="form-row-first">
                                    <b>First Name <span class="required">*</span></b>
                                    <input type="text">
                                </span>
                                <span class="form-row-last">
                                    <b>Last Name <span class="required">*</span></b>
                                    <input type="text">
                                </span>
                                <span>
                                    <b>Company Name </b>
                                    <input type="text">
                                </span>
                                <span class="form-row-first">
                                    <b>Email Address <span class="required">*</span></b>
                                    <input type="email">
                                </span>
                                <span class="form-row-last">
                                    <b>Phone <span class="required">*</span></b>
                                    <input type="number">
                                </span>
                                <div class="additional-information">
                                    <b>Address <span class="required">*</span></b>
                                    <textarea  name="#" id="#" cols="20" rows="5" placeholder="Street address"></textarea>
                                </div>
                                <strong class="show-password"><input type="checkbox" > Want to Create an account?</strong>
                                <div class="account-password">
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page</p>
                                    <span>
                                        <b>Account password <span class="required">*</span></b>
                                        <input type="password" placeholder="password">
                                    </span>
                                </div>
                                <div class="additional-information mb-50">

                                    <b>Order Notes</b>
                                    <textarea name="#" id="#" cols="30" rows="20" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-order-area mb-35 p-3">
                        <div class="order-title pb-10 mb-20 text-uppercase">
                            <h3>Your order</h3>
                        </div>
                        <div class="order_review table-responsive">
                            <table>
                                <tbody><tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                                </tbody><tbody>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            Lorem nec augue
                                            <strong class="product-quantity">x 1</strong>
                                        </td>
                                        <td class="product-total">
                                            <span>$ 220.00</span>
                                        </td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            Adipiscing cursus eu
                                            <strong class="product-quantity">x 1</strong>
                                        </td>
                                        <td class="product-total">
                                            <span>$300.00</span>
                                        </td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            Cras nec nisl ut erat
                                            <strong class="product-quantity">x 48</strong></td>
                                        <td class="product-total">
                                            <span>$ 9,600.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td>
                                            <strong><span>$ 10,120.00</span></strong>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong><span>$ 10,120.00</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>
@endsection
