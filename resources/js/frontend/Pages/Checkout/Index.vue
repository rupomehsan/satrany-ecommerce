<template>
    <div class="main-container">
        <div class="container">
            <div class="menu mtb-15">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
            <div class="checkout-title text-center mtb-20">
                <h1>Checkout</h1>
            </div>

            <div class="checkout-area">
                <!-- <div class="returning-customer-area p-20 mb-20">
                    <div class="returning-customer mb-10">
                        <i class="fa fa-book"></i>
                        <span>Returning customer?</span>
                        <span
                            class="login-form-click"
                            @click="show_login_form = !show_login_form"
                            >Click here to login</span
                        >
                    </div>
                    <div
                        class="login-form account-form p-20 clear bg-fff box-shadow"
                        :class="show_login_form ? 'd-block' : 'd-none'"
                    >
                        <p>
                            If you have shopped with us before, please enter
                            your details in the boxes below. If you are a new
                            customer please proceed to the Billing &amp;
                            Shipping section.
                        </p>
                        <form action="#">
                            <span class="form-row-first">
                                <b>Username or email <span>*</span></b>
                                <input type="text" />
                            </span>
                            <span class="form-row-last">
                                <b>password <span>*</span></b>
                                <input type="password" />
                            </span>
                            <div class="login-button">
                                <button>Login</button>
                                <input type="checkbox" />
                                <b>Remember me </b>
                                <a href="#">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                </div> -->

                <div class="coupon-code-area p-20 mb-20">
                    <div class="returning-customer mb-10">
                        <i class="fa fa-book"></i>
                        <span>Have a coupon?</span>
                        <span
                            class="code"
                            @click="show_coupon_form = !show_coupon_form"
                            >Click here to enter your code</span
                        >
                    </div>
                    <div
                        class="code-form account-form p-20 clear box-shadow bg-fff"
                        :class="show_coupon_form ? 'd-block' : 'd-none'"
                    >
                        <form action="#">
                            <span class="form-row-first">
                                <input type="text" placeholder="Coupon Code" />
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
                                <h3>Order details</h3>
                            </div>
                            <div class="customer-details-form clear">
                                <form @submit.prevent="submitHandler">
                                    <input
                                        type="hidden"
                                        name="delivery_charge"
                                        :value="delivery_charge"
                                    />
                                    <span class="form-row-first my-2">
                                        <b
                                            >First Name
                                            <span class="required">*</span></b
                                        >
                                        <input
                                            type="text"
                                            name="first_name"
                                            required
                                        />
                                    </span>
                                    <span class="form-row-last my-2">
                                        <b
                                            >Last Name
                                            <span class="required">*</span></b
                                        >
                                        <input
                                            type="text"
                                            name="last_name"
                                            required
                                        />
                                    </span>

                                    <span class="form-row-first my-2">
                                        <b
                                            >Email Address
                                            <span class="required">*</span></b
                                        >
                                        <input
                                            type="email"
                                            name="email"
                                            required
                                        />
                                    </span>
                                    <span class="form-row-last my-2">
                                        <b
                                            >Phone
                                            <span class="required">*</span></b
                                        >
                                        <input
                                            type="number"
                                            name="phone"
                                            required
                                        />
                                    </span>
                                    <div class="additional-information my-2">
                                        <b
                                            >Address
                                            <span class="required">*</span></b
                                        >
                                        <textarea
                                            name="address"
                                            id="#"
                                            cols="20"
                                            rows="5"
                                            placeholder="Street address"
                                            required
                                        ></textarea>
                                    </div>

                                    <div class="additional-information my-3">
                                        <b>Order Notes</b>
                                        <textarea
                                            name="order_notes"
                                            id="#"
                                            cols="30"
                                            rows="20"
                                            placeholder="Notes about your order, e.g. special notes for delivery."
                                            required
                                        ></textarea>
                                    </div>
                                    <strong class="show-password"
                                        ><input
                                            type="checkbox"
                                            v-model="is_create_account"
                                        />
                                        Want to Create an account?</strong
                                    >
                                    <div
                                        class="account-password"
                                        :class="
                                            is_create_account
                                                ? 'd-block'
                                                : 'd-none'
                                        "
                                    >
                                        <p>
                                            Create an account by entering the
                                            information below. If you are a
                                            returning customer please login at
                                            the top of the page
                                        </p>
                                        <span>
                                            <b
                                                >Account password
                                                <span class="required"
                                                    >*</span
                                                ></b
                                            >
                                            <input
                                                class="mb-2"
                                                type="password"
                                                placeholder="password"
                                            />
                                        </span>
                                    </div>
                                    <div class="floatright">
                                        <input
                                            class="button"
                                            value="Place to order"
                                            type="submit"
                                        />
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
                                    <tbody>
                                        <tr>
                                            <th class="product-name">
                                                Product
                                            </th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr
                                            class="cart_item"
                                            v-for="cart in all_cart_data"
                                            :key="i"
                                        >
                                            <td class="product-name">
                                                {{ cart.product?.title }}
                                                <strong class="product-quantity"
                                                    >x
                                                    {{ cart.quantity }}</strong
                                                >
                                            </td>
                                            <td class="product-total">
                                                <span
                                                    >{{
                                                        cart.quantity *
                                                        cart.product?.current_price
                                                    }}
                                                    ৳</span
                                                >
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td>
                                                <strong
                                                    ><span
                                                        >{{
                                                            total_cart_price
                                                        }}
                                                        ৳</span
                                                    ></strong
                                                >
                                            </td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>Delivery Charge</th>
                                            <td>
                                                <strong
                                                    ><span
                                                        >{{
                                                            delivery_charge
                                                        }}
                                                        ৳</span
                                                    ></strong
                                                >
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong
                                                    ><span
                                                        >{{
                                                            total_cart_price +
                                                            Number(
                                                                delivery_charge
                                                            )
                                                        }}
                                                        ৳</span
                                                    ></strong
                                                >
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
</template>
<script>
import { common_page_store } from "../../Shared/Store/index";
import { mapActions, mapState } from "pinia";
export default {
    data: () => ({
        cartItems: [],
        delivery_charge: 50,
        show_login_form: false,
        show_coupon_form: false,
        is_create_account: false,
    }),
    created: async function () {
        this.delivery_charge =
            new URLSearchParams(window.location.search).get(
                "delivery_charge"
            ) ?? 50;


    },
    methods: {
        ...mapActions(common_page_store, {
            get_all_cart_data: "get_all_cart_data",
        }),
        submitHandler: async function ($event) {
            let formData = new FormData($event.target);
            let response = await axios.post(
                "sales-ecommerce-orders/store",
                formData
            );

            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                await this.get_all_cart_data();
                window.location.href = "/";
            }
        },
    },
    computed: {
        ...mapState(common_page_store, {
            all_cart_data: "all_cart_data",
            total_cart_price: "total_cart_price",
        }),
    },
};
</script>
<style lang="scss" scoped></style>
