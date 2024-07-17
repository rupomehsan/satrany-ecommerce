<template>
    <div class="product-wrapper bl">
        <template v-if="product.discount_type === 'amount'">
            <div class="discount-badge">
                {{ product.discount_amount }} TK OFF
            </div>
        </template>
        <template v-else-if="product.discount_type === 'percentage'">
            <div class="discount-badge">{{ product.discount_amount }}% OFF</div>
        </template>
        <div class="product-img">
            <Link :href="`/product-details/${product.slug}`">
                <img
                    :src="`/${
                        product.images?.length
                            ? product.images[0].url
                            : 'dummy.png'
                    }`"
                    alt=""
                    class="primary"
                />
                <img
                    :src="`/${
                        product.images?.length
                            ? product.images[1]?.url ?? 'dummy.png'
                            : 'dummy.png'
                    }`"
                    alt=""
                    class="secondary"
                />
            </Link>
            <div class="product-icon c-fff home3-hover-bg">
                <ul>
                    <li>
                        <Link
                            href="#"
                            preserve-scroll
                            @click.prevent="addToCart(product.id)"
                            role="button"
                            data-bs-toggle="tooltip"
                            aria-label="Add to cart"
                            data-bs-original-title="Add to cart"
                            ><i
                                title="Add to cart"
                                class="fa fa-shopping-cart"
                            ></i
                        ></Link>
                    </li>
                    <li>
                        <Link
                            href="#"
                            preserve-scroll
                            @click.prevent="addToWishList(product.id)"
                            role="button"
                            data-bs-toggle="tooltip"
                            aria-label="Wishlist"
                            data-bs-original-title="Wishlist"
                            ><i
                                title="Add to wishlist"
                                class="fa fa-heart-o"
                            ></i
                        ></Link>
                    </li>
                    <li>
                        <Link
                            href="#"
                            preserve-scroll
                            @click.prevent="addToCompareList(product.id)"
                            data-bs-toggle="tooltip"
                            role="button"
                            aria-label="Compare"
                            data-bs-original-title="Compare"
                            ><i
                                title="Add to comparelist"
                                class="fa fa-comments"
                            ></i
                        ></Link>
                    </li>
                </ul>
            </div>
        </div>
        <div class="product-content home3-hover">
            <h3>
                <Link :href="`product-details/${product.slug}`">
                    {{ product.title }}
                </Link>
            </h3>
            <!-- <ul>
                <li>
                    <i class="fa fa-star"></i>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                </li>
            </ul> -->
            <div class="d-flex gap-3">

                <span>Price : {{ product.current_price }} ৳</span>
                <span v-if="product.discount_type && product.discount_amount"
                    >
                    <del

                    >
                        {{ product.price }} ৳</del
                    ></span
                >
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { common_page_store } from "../../Shared/Store/index";

export default {
    props: {
        product: {
            type: Object,
            required: true,
        },
    },
    methods: {
        ...mapActions(common_page_store, {
            get_all_cart_data: "get_all_cart_data",
        }),

        addToCart: async function (productId) {
            const response = await axios.post("add-to-cart", {
                productId: productId,
            });

            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                await this.get_all_cart_data();
            }
        },
        addToWishList: async function (productId) {
            const response = await axios.post("add-to-wish-list", {
                productId: productId,
            });

            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                this.get_all_cart_data();
            }
            if (response.data.status === "warning") {
                window.w_alert(response.data.message);
            }
        },
        addToCompareList: async function (productId) {
            const response = await axios.post("add-to-compare-list", {
                productId: productId,
            });

            if (response.data.status === "success") {
                window.s_alert(response.data.message);
            }
            if (response.data.status === "warning") {
                window.w_alert(response.data.message);
            }
        },
    },
};
</script>

<style lang="scss" scoped>
.product-wrapper {
    position: relative;
    .discount-badge {
        position: absolute;
        top: 5px;
        right: 5px;
        background: #e74c3c;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        z-index: 1;
    }
}
</style>
