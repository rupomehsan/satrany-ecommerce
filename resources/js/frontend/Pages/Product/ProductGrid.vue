<template>
    <div class="product-wrapper bl">
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
                            ? (product.images[1]?.url ??'dummy.png')
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
            <ul>
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
            </ul>
            <span>{{ product.price }} ৳</span>
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

<style lang="scss" scoped></style>
