<template>
    <Head title="Cart Page"></Head>
    <div class="cart-main-container shop-bg">
        <div class="cart-area">
            <div class="container">
                <div class="woocommerce-breadcrumb mtb-15">
                    <div class="menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="active">
                                <a href="cart">cart</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="account-title mtb-20 text-center">
                    <h1>Cart</h1>
                </div>

                <div class="row justify-content-end">
                    <div class="col-md-8">
                        <div class="cart-table mb-50 bg-fff">
                            <form @submit.prevent="submitHandler">
                                <div class="table-content table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">
                                                    Action
                                                </th>
                                                <th class="product-thumbnail">
                                                    Image
                                                </th>
                                                <th class="product-name">
                                                    Product
                                                </th>
                                                <th class="product-price">
                                                    Price
                                                </th>
                                                <th class="product-quantity">
                                                    Quantity
                                                </th>
                                                <th class="product-subtotal">
                                                    Total
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                class="cart-item"
                                                v-for="cart in all_cart_data"
                                                :key="cart.id"
                                            >
                                                <td class="product-remove">
                                                    <a
                                                        @click="
                                                            removeFromCart(
                                                                cart.id
                                                            )
                                                        "
                                                        role="button"
                                                        class="remove"
                                                        title="Remove this item"
                                                        >X</a
                                                    >
                                                </td>
                                                <td class="product-thumbnail">
                                                    <Link
                                                        :href="`product-details/${cart.product?.slug}`"
                                                    >
                                                        <img
                                                            :src="cart.product?.images.length ? cart.product?.images[0].url : 'dummy.png'"
                                                            alt=""
                                                        />
                                                    </Link>
                                                </td>
                                                <td class="product-name">
                                                    <Link
                                                        :href="`product-details/${cart.product?.slug}`"
                                                    >
                                                        {{
                                                            cart.product?.title
                                                        }}
                                                    </Link>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amounte"
                                                        >{{
                                                            cart.product
                                                                ?.current_price
                                                        }}
                                                        ৳</span
                                                    >
                                                </td>
                                                <td class="product-quantity">
                                                    <input
                                                        :value="cart.quantity"
                                                        min="1"
                                                        type="number"
                                                        :name="`cart[${cart.id}]`"
                                                    />
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="sub-total">{{
                                                        cart.product
                                                            ?.current_price *
                                                        cart.quantity
                                                    }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    v-if="
                                                        all_cart_data.length > 0
                                                    "
                                                    colspan="6"
                                                    class="actions clear"
                                                >
                                                    <div
                                                        class="floatright mb-10"
                                                    >
                                                        <input
                                                            class="button"
                                                            name="update_cart"
                                                            value="Update Cart"
                                                            type="submit"
                                                        />
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="table-content table-responsive mb-30">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Subtotal</strong></td>
                                        <td>
                                            <b>{{ total_cart_price }} ৳</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Delivery Charge</strong>
                                            <select
                                                name=""
                                                id=""
                                                v-model="delivery_charge"
                                                class="mx-1"
                                            >
                                                <option value="50">
                                                    Inside Dhaka
                                                </option>
                                                <option value="150">
                                                    Outside Dhaka
                                                </option>
                                            </select>
                                        </td>
                                        <td>
                                            <b>{{ delivery_charge }} ৳</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <td>
                                            <b
                                                >{{
                                                    total_cart_price +
                                                    Number(delivery_charge)
                                                }}
                                                ৳</b
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="simple-product-form contuct-form mb-30">
                            <Link :href="`checkout?delivery_charge=${delivery_charge}`">
                                <button>Proceed to Checkout</button>
                            </Link>
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
    props: {
        user_carts: {
            type: Object,
            required: true,
        },
    },
    data: () => ({
        cartItems: [],
        delivery_charge: 50,
    }),

    methods: {
        ...mapActions(common_page_store, {
            get_all_cart_data: "get_all_cart_data",
            remove_cart_item: "remove_cart_item",
        }),
        submitHandler: async function ($event) {
            let formData = new FormData($event.target);
            let response = await axios.post("cart-update", formData);

            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                await this.get_all_cart_data();
            }
        },

        removeFromCart: async function (cartId) {
            let response = await this.remove_cart_item(cartId);
            if (response.data.status == "success") {
                window.s_alert(response.data.message);
                await this.get_all_cart_data();
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
