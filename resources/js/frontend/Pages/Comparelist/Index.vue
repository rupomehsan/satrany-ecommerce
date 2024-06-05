<template>
    <div class="cart-main-container shop-bg">
        <div class="cart-area pb-3">
            <div class="container">
                <div class="woocommerce-breadcrumb mtb-15">
                    <div class="menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">
                                <a href="wishlist.html">Compare list</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="account-title mtb-20 text-center">
                    <h1>Compare list</h1>
                </div>

                <div class="cart-table mb-50 bg-fff">
                    <form action="#">
                        <div class="table-content table-responsive text-center">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-remove">No</th>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">
                                            Product Name
                                        </th>
                                        <th class="product-price">
                                            Unit Price
                                        </th>
                                        <th class="product-quantity">
                                            Stock Status
                                        </th>
                                        <th class="product-subtotal">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="cart-item"
                                        v-for="(item, index) in compareItems"
                                    >
                                        <td>{{ index + 1 }}</td>
                                        <td
                                            class="product-thumbnail product-thumbnail-img hidden-sm hidden-xs"
                                        >
                                            <Link
                                                :href="`product-details/${item.slug}`"
                                            >
                                                <img
                                                    src="{{ asset('frontend') }}/assets/images/cart/1.jpg"
                                                    alt=""
                                                />
                                            </Link>
                                        </td>
                                        <td class="product-name">
                                            <a
                                                href="`product-details/${item.slug}`"
                                                >{{ item.product?.title }}
                                            </a>
                                        </td>
                                        <td class="product-price">
                                            <span class="amounte"
                                                >{{
                                                    item.product
                                                        ?.customer_sales_price
                                                }}
                                                <!-- <del>$350.000</del> -->
                                            </span>
                                        </td>
                                        <td class="product-quantity">
                                            <span>In Stock</span>
                                        </td>
                                        <td class="product-subtotal">
                                            <div
                                                class="coupon text-center product-remove"
                                            >
                                                <!-- <input
                                                    class="button"
                                                    name="apply_coupon"
                                                    value="Add To Cart"
                                                    type="submit"
                                                /> -->
                                                <a
                                                    href="#"
                                                    @click.prevent="
                                                        removeFromCompare(
                                                            item.id
                                                        )
                                                    "
                                                    class="remove"
                                                    title="Remove this item"
                                                    >x</a
                                                >
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data: () => ({
        compareItems: [],
    }),
    created: async function () {
        await this.get_all_compare_data();
    },
    methods: {
        get_all_compare_data: async function () {
            let response = await axios.get("get-all-compare-list?get_all=true");
            if (response.data.status === "success") {
                this.compareItems = response.data.data;
            }
        },
        removeFromCompare: async function (compareId) {
            let response = await axios.delete(
                `remove-compare-item/${compareId}`
            );
            if (response.data.status == "success") {
                window.s_alert(response.data.message);
                await this.get_all_compare_data();
            }
        },
    },
};
</script>
<style lang="scss" scoped></style>
