<template>
    <div class="container">
        <div class="woocommerce-breadcrumb mtb-15">
            <div class="menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active"><a href="/">Shop</a></li>
                </ul>
            </div>
        </div>

        <div class="row flex-row-reverse">
            <!-- product-vew area start -->
            <div class="col-lg-9">
                <div class="tab-area">
                    <div class="tab-menu-area bg-fff mb-30 box-shadow">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="shop-tab-menu">
                                    <ul class="nav" role="tablist">
                                        <!-- <li>
                                            <a
                                                class="active"
                                                href="#tab1"
                                                data-bs-toggle="tab"
                                                aria-selected="true"
                                                role="tab"
                                                ><i class="fa fa-th-list"></i
                                            ></a>
                                        </li> -->
                                        <!-- <li>
                                            <a
                                                href="#tab2"
                                                data-bs-toggle="tab"
                                                aria-selected="false"
                                                tabindex="-1"
                                                role="tab"
                                                ><i class="fa fa-th-list"></i
                                            ></a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="shop-pra text-center">
                                    <p>
                                        Showing
                                        {{ all_products.data.length }} results
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="woocommerce-ordering text-end">
                                    <select name="orderby">
                                        <option
                                            value="menu_order"
                                            selected="selected"
                                        >
                                            Default sorting
                                        </option>
                                        <option value="popularity">
                                            Sort by popularity
                                        </option>
                                        <option value="rating">
                                            Sort by average rating
                                        </option>
                                        <option value="date">
                                            Sort by newness
                                        </option>
                                        <option value="price">
                                            Sort by price: low to high
                                        </option>
                                        <option value="price-desc">
                                            Sort by price: high to low
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content mb-5">
                        <div
                            role="tabpanel"
                            class="tab-pane fade show active"
                            id="tab1"
                        >
                            <div class="row">
                                <div
                                    class="col-xl-3 col-lg-4 col-md-4 col-sm-6"
                                    v-for="product in all_products.data"
                                >
                                    <product-grid
                                        :product="product"
                                    ></product-grid>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <template v-for="product in all_products.data">
                                <product-grid-flex
                                    :product="product"
                                ></product-grid-flex>
                            </template>
                        </div>
                        <!-- woocommerce-pagination-area -->

                        <!-- <div
                            class="woocommerce-pagination-area bg-fff box-shadow ptb-10 mb-30"
                        >
                            <div
                                class="woocommerce-pagination text-center hover-bg"
                            >
                                <ul >
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-chevron-right"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                <!-- categories-area start -->
                <div class="categories-area box-shadow">
                    <div
                        class="product-title home2-bg-1 text-uppercase home2-product-title"
                    >
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>categories</h3>
                    </div>
                    <div class="shop-categories-menu p-20">
                        <ul>
                            <li v-for="category in $page.props.categories">
                                <a :href="`products?category=${category.slug}`">
                                    <i class="fa fa-star"></i>
                                    {{ category.title }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- filter-by-price-area start -->
                <!-- <div class="filter-by-price-area mtb-30 bg-fff box-shadow">
                    <div
                        class="product-title home2-bg-1 text-uppercase home2-product-title"
                    >
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>Filter by price</h3>
                    </div>
                    <div class="filter-by-price p-20-15">
                        <p>price: <input type="text" id="amount" /></p>
                        <div
                            id="slider-range"
                            class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                        >
                            <div
                                class="ui-slider-range ui-corner-all ui-widget-header"
                                style="left: 0.4%; width: 99.6%"
                            ></div>
                            <span
                                tabindex="0"
                                class="ui-slider-handle ui-corner-all ui-state-default"
                                style="left: 0.4%"
                            ></span
                            ><span
                                tabindex="0"
                                class="ui-slider-handle ui-corner-all ui-state-default"
                                style="left: 100%"
                            ></span>
                        </div>
                        <div class="filter">
                            <button>filter</button>
                        </div>
                    </div>
                </div> -->
                <!-- size-area start -->
                <!-- <div class="size-area bg-fff box-shadow">
                    <div
                        class="product-title home2-bg-1 text-uppercase home2-product-title"
                    >
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>Size</h3>
                    </div>
                    <div class="size-menu shop-categories-menu p-20">
                        <ul>
                            <li><a href="#">L</a><span> (1)</span></li>
                            <li><a href="#">M</a><span> (1)</span></li>
                            <li><a href="#">S</a><span> (1)</span></li>
                            <li><a href="#">XS</a><span> (1)</span></li>
                        </ul>
                    </div>
                </div> -->
                <!-- color-area start -->
                <!-- <div class="color-area bg-fff box-shadow mtb-30">
                    <div
                        class="product-title home2-bg-1 text-uppercase home2-product-title"
                    >
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>Color</h3>
                    </div>
                    <div class="size-menu shop-categories-menu p-20">
                        <ul>
                            <li><a href="#">Gold</a><span> (1)</span></li>
                            <li><a href="#">Green</a><span> (1)</span></li>
                            <li><a href="#">White </a><span> (1)</span></li>
                        </ul>
                    </div>
                </div> -->

                <div class="product-tags-area bg-fff box-shadow mtb-30">
                    <div
                        class="product-title home2-bg-1 text-uppercase home2-product-title"
                    >
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>Product Tags</h3>
                    </div>
                    <div class="tags tag-menu hover-bg p-20">
                        <ul>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">Popular</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">version</a></li>
                            <li><a href="#">women</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import HeroSlider from "../../Components/HeroSlider.vue";
import { mapActions, mapState } from "pinia";
import { common_page_store } from "../../Shared/Store/index";

export default {
    components: { HeroSlider },
    props: {
        all_feature_products: Object,
    },
    data: () => ({
        all_products: [],
    }),
    created() {
        this.all_products = this.all_feature_products.original.data;
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
