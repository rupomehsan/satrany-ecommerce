<template>
    <div class="simple-product-area">
        <div class="container">
            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-8">
                            <div class="symple-product mb-20">
                                <div
                                    class="single-product-tab box-shadow mb-20"
                                >
                                    <div class="tab-content">
                                        <div
                                            role="tabpanel"
                                            class="tab-pane fade show active"
                                            id="one"
                                        >
                                            <a
                                                class="popup"
                                                target="_blank"
                                                :href="`/${productDetails.images?.length ? productDetails.images[0].url: 'dummy.png'}`"
                                            >
                                                <img
                                                    :src="`/${
                                                        productDetails.images
                                                            .length
                                                            ? productDetails
                                                                  .images[0].url
                                                            : 'dummy.png'
                                                    }`"
                                                    alt=""
                                                    style="width: 100%"
                                                />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="single-product-menu mb-30 box-shadow"
                                >
                                    <div
                                        class="nav single-product-active clear gap-1 p-1"
                                    >
                                        <div class="single-img floatleft">
                                            <template
                                                v-for="(
                                                    image, index
                                                ) in productDetails.images"
                                                :key="productDetails.images"
                                            >
                                                <a
                                                    :href="`#${index}`"
                                                    data-bs-toggle="tab"
                                                    class="mx-1"
                                                >
                                                    <img
                                                        :src="`/${image.url}`"
                                                        alt=""
                                                        height="60"
                                                        width="125"
                                                    />
                                                </a>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div
                                class="symple-product box-shadow bg-fff p-15 mb-30"
                            >
                                <h3>{{ productDetails.title }}</h3>
                                <div
                                    class="product-content simple-product-content mb-10"
                                >
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="text-sm mx-2"
                                        >(3 reviews)</span
                                    >
                                    <br />
                                    <span
                                        ><del>{{
                                            productDetails.maximum_sale_price
                                        }}</del
                                        ><span>{{
                                            productDetails.customer_sales_price
                                        }}</span></span
                                    >
                                </div>
                                <p>
                                    {{ productDetails.short_description }}
                                </p>
                                <div
                                    class="simple-product-form contuct-form mtb-20"
                                >
                                    <form action="#">
                                        <input
                                            min="1"
                                            max="1000"
                                            name="quantity"
                                            value="1"
                                            type="number"
                                            v-model="quantity"
                                        />
                                        <button
                                            @click.prevent="
                                                addToCart(productDetails.id)
                                            "
                                        >
                                            Add to cart
                                        </button>
                                    </form>
                                </div>
                                <div
                                    class="simple-product-icon c-fff hover-bg pb-20 mb-10 bb"
                                >
                                    <ul>
                                        <li>
                                            <a
                                                @click="
                                                    addToWishList(
                                                        productDetails.id
                                                    )
                                                "
                                                href="#"
                                                data-bs-toggle="tooltip"
                                                title="Browser Wishlist"
                                                ><i class="fa fa-heart-o"></i
                                            ></a>
                                        </li>
                                        <li class="mx-2">
                                            <a
                                                @click="
                                                    addToCompareList(
                                                        productDetails.id
                                                    )
                                                "
                                                href="#"
                                                data-bs-toggle="tooltip"
                                                title="Compare"
                                                ><i class="fa fa-comments"></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product_meta">
                                    <span class="ms-2">{{
                                        productDetails.sku
                                    }}</span>
                                    <div class="category mb-10">
                                        <b>Categories : </b>
                                        <a href="#" class="mx-2">{{
                                            productDetails.category.title ??
                                            "N/A"
                                        }}</a>
                                    </div>
                                    <div
                                        class="single-blog-tag category bb pb-10"
                                    >
                                        <b>Brand : </b>
                                        <a href="#">{{
                                            productDetails.brand.title
                                        }}</a>
                                    </div>

                                    <div
                                        class="footer-content pt-15 text-uppercase"
                                    >
                                        <!-- <p>Share this product</p> -->
                                        <!-- <ul>
                                            <li>
                                                <a
                                                    href="#"
                                                    data-bs-toggle="tooltip"
                                                    title="Facebook"
                                                    ><i
                                                        class="fa fa-facebook"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    data-bs-toggle="tooltip"
                                                    title="Twetter"
                                                    ><i
                                                        class="fa fa-twitter"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    data-bs-toggle="tooltip"
                                                    title="Instagram"
                                                    ><i
                                                        class="fa fa-instagram"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    data-bs-toggle="tooltip"
                                                    title="Google-Plus"
                                                    ><i
                                                        class="fa fa-google-plus"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    data-bs-toggle="tooltip"
                                                    title="Linkedin"
                                                    ><i
                                                        class="fa fa-linkedin"
                                                    ></i
                                                ></a>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="simple-product-tab box-shadow">
                        <div class="simple-product-tab-menu clear">
                            <ul class="nav">
                                <li>
                                    <a
                                        class="active"
                                        href="#description"
                                        data-bs-toggle="tab"
                                        >Description</a
                                    >
                                </li>
                                <!-- <li>
                                    <a href="#reviews" data-bs-toggle="tab"
                                        >Reviews (3)</a
                                    >
                                </li> -->
                            </ul>
                        </div>
                        <div class="tab-content bg-fff">
                            <div
                                class="tab-pane fade show active"
                                id="description"
                            >
                                <div class="product-description p-20 bt">
                                    <h2>Product Description</h2>
                                    <div
                                        v-html="productDetails.description"
                                    ></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews">
                                <div class="product-reviews p-20 bt">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="review-area">
                                                <h2>
                                                    3 reviews for Cras nec nisl
                                                    ut erat
                                                </h2>
                                                <ul>
                                                    <li class="review-1">
                                                        <div
                                                            class="review mb-20"
                                                        >
                                                            <div
                                                                class="review-img"
                                                            >
                                                                <img
                                                                    class="img-thumbnail"
                                                                    src="/frontend/img/comment/1.jpg"
                                                                    alt=""
                                                                />
                                                            </div>
                                                            <div
                                                                class="review-content p-15"
                                                            >
                                                                <b>admin -</b>
                                                                <div
                                                                    class="review-rating product-content simple-product-content pull-right"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <p>
                                                                    December 16,
                                                                    2022:
                                                                </p>
                                                                <p>like</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="review mb-20"
                                                        >
                                                            <div
                                                                class="review-img"
                                                            >
                                                                <img
                                                                    class="img-thumbnail"
                                                                    src="/frontend/img/comment/1.jpg"
                                                                    alt=""
                                                                />
                                                            </div>
                                                            <div
                                                                class="review-content p-15"
                                                            >
                                                                <b>alex -</b>
                                                                <div
                                                                    class="review-rating product-content simple-product-content pull-right"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <span>
                                                                    December 18,
                                                                    2022:
                                                                </span>
                                                                <p>google</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="review mb-20"
                                                        >
                                                            <div
                                                                class="review-img"
                                                            >
                                                                <img
                                                                    class="img-thumbnail"
                                                                    src="/frontend/img/comment/1.jpg"
                                                                    alt=""
                                                                />
                                                            </div>
                                                            <div
                                                                class="review-content p-15"
                                                            >
                                                                <b>name -</b>
                                                                <div
                                                                    class="review-rating product-content simple-product-content pull-right"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="fa fa-star"
                                                                            ></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <span
                                                                    >August 11,
                                                                    2022:
                                                                </span>
                                                                <p>my rating</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="review-form form-style">
                                                <h2>Add a review</h2>
                                                <p>Add a review</p>
                                                <div
                                                    class="review-rating product-content simple-product-content"
                                                >
                                                    <ul>
                                                        <li>
                                                            <i
                                                                class="fa fa-star"
                                                            ></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="fa fa-star"
                                                            ></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="fa fa-star"
                                                            ></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="fa fa-star"
                                                            ></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="fa fa-star"
                                                            ></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <form action="#">
                                                    <p>Your Review</p>
                                                    <textarea
                                                        name="#"
                                                        id="#"
                                                        cols="30"
                                                        rows="10"
                                                    ></textarea>
                                                    <p>Name *</p>
                                                    <input type="text" />
                                                    <p>Emai *</p>
                                                    <input type="email" />
                                                    <button>Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product box-shadow mb-50 bg-fff mt-2">
                        <div
                            class="product-title home2-product-title home2-bg-1 text-uppercase"
                        >
                            <i class="fa fa-star-o icon bg-4"></i>
                            <h3>Related Products</h3>
                        </div>
                        <div class="row">
                            <div
                                class="col-md-3 my-1"
                                v-for="product in $page.props.relatedProduct"
                                :key="product.id"
                            >
                                <product-grid :product="product"></product-grid>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapActions, mapState } from "pinia";
import { common_page_store } from "../../Shared/Store/index";
export default {
    props: {
        productDetailsData: {
            type: Object,
            required: true,
        },
    },
    data() {
        return {
            productDetails: this.productDetailsData,
            quantity: 1,
        };
    },

    methods: {
        ...mapActions(common_page_store, {
            get_all_cart_data: "get_all_cart_data",
        }),
        addToCart: async function (productId) {
            const response = await axios.post("add-to-cart", {
                productId: productId,
                quantity: this.quantity,
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
<style></style>
