<template>
    <Head title="Home Page"></Head>

    <!-- Offcanvas Menu start -->
    <div class="offcanvas offcanvas-start" id="offcanvasMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button
                type="button"
                class="btn-close text-reset"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
            ></button>
        </div>
        <div class="offcanvas-body">
            <div class="account-menu">
                <ul>
                    <li>
                        <Link href="cart" class="text-white"
                            >Shopping Cart</Link
                        >
                    </li>
                    <li>
                        <Link href="wishlist" class="text-white">Wishlist</Link>
                    </li>
                    <li>
                        <Link href="compare-list" class="text-white"
                            >Compare list</Link
                        >
                    </li>
                </ul>
            </div>

            <div class="mobail-menu">
                <nav class="offcanvas-menu">
                    <ul>
                        <li>
                            <Link
                                href="/"
                                :class="{
                                    'active-link': $page.url === '/',
                                }"
                                >Home
                            </Link>
                        </li>
                        <li>
                            <Link
                                :class="{
                                    'active-link': $page.url === '/about-us',
                                }"
                                href="about-us"
                                >About Us</Link
                            >
                        </li>
                        <li>
                            <Link
                                :class="{
                                    'active-link':
                                        $page.url === '/terms-and-conditions',
                                }"
                                href="terms-and-conditions"
                                >Terms & Conditions</Link
                            >
                        </li>
                        <li>
                            <Link
                                :class="{
                                    'active-link':
                                        $page.url === '/return-and-refund',
                                }"
                                href="return-and-refund"
                                >Return & Refund</Link
                            >
                        </li>
                        <li>
                            <Link
                                :class="{
                                    'active-link': $page.url === '/contact-us',
                                }"
                                href="contact-us"
                                >Contact us</Link
                            >
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Offcanvas Menu end -->

    <!-- slider area start -->
    <div class="container-fluid clearfix">
        <div class="row justify-content-end">
            <div class="col-lg-8">
                <hero-slider :sliders="$page.props.sliders"></hero-slider>
            </div>
        </div>
    </div>

    <div class="all-product-area mtb-45">
        <div class="container-fluid">
            <div class="row">
                <!-- product-area start -->
                <div class="col-lg-9">
                    <div class="product box-shadow bg-fff">
                        <div class="product-title home3-bg text-uppercase">
                            <i class="fa fa-paper-plane-o icon home3-bg2"></i>
                            <h3>Product Categories</h3>
                        </div>
                    </div>

                    <!-- banner-area start -->
                    <div class="banner-area mtb-35">
                        <div class="row g-4">
                            <div
                                class="col-md-4"
                                v-for="category in $page.props.categories"
                            >
                                <div class="single-banner">
                                    <p>{{ category.title }}</p>
                                    <Link
                                        :href="`products?category=${category.slug}`"
                                    >
                                        <img
                                            :src="`/${
                                                category.image ?? 'dummy.png'
                                            }`"
                                            alt=""
                                        />
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner-area end -->
                    <!-- tab-area start -->
                    <div class="tab-area box-shadow bg-fff" id="mainWrapper">
                        <div
                            class="product-title home3-bg text-uppercase d-flex justify-content-between align-items-center"
                        >
                            <div>
                                <i
                                    class="fa fa-check-square-o icon home3-bg2"
                                ></i>
                                <h3>Featured Products</h3>
                            </div>
                            <div>
                                <Link
                                    href="products"
                                    class="border border-secondary text-white p-2 mx-2 text-bold pbg fw-bold text-capitalize"
                                >
                                    See All Products
                                </Link>
                            </div>
                        </div>
                        <div class="row">
                            <div
                                class="col-md-3 my-1"
                                v-for="product in all_products.data"
                            >
                                <product-grid :product="product"></product-grid>
                            </div>
                        </div>

                        <div
                            class="woocommerce-pagination-area bg-fff box-shadow ptb-20 mt-2"
                        >
                            <!-- <div
                                class="woocommerce-pagination text-center hover-bg"
                            >
                                <ul>
                                    <li class="active">
                                        <Link href="/">1</Link>
                                    </li>
                                    <li><Link href="/">2</Link></li>
                                    <li>
                                        <Link href="/"
                                            ><i class="fa fa-chevron-right"></i
                                        ></Link>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- featured-area start -->
                    <div class="featured-area box-shadow bg-fff">
                        <div class="product-title home3-bg text-uppercase">
                            <i class="fa fa-star-o icon home3-bg2"></i>
                            <h3>Latest products</h3>
                        </div>
                        <div class="feautred-active home2 left-right-angle">
                            <div
                                class="featured-wrapper"
                                v-for="product in all_products.data"
                            >
                                <product-grid-flex
                                    :product="product"
                                ></product-grid-flex>
                            </div>
                        </div>
                    </div>
                    <!-- featured-area end -->

                    <!-- newsletter-area start -->
                    <div class="newsletter-area box-shadow mt-35 bg-fff">
                        <div class="product-title home3-bg text-uppercase">
                            <i class="fa fa-envelope-o icon home3-bg2"></i>
                            <h3>NEWSLETTER SIGN UP</h3>
                        </div>
                        <div class="newsletter form-style plbr-15">
                            <p>Submit your mail to get events</p>
                            <form action="#">
                                <input type="email" placeholder="Email" />
                                <button>
                                    <i class="fa fa-paper-plane-o"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- newsletter-area start -->
                </div>
                <!-- product-area end -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- testimonils-area start -->
            <div class="testimonils-area box-shadow mtb-35 bg-fff">
                <div class="product-title home3-bg text-uppercase">
                    <i class="fa fa-star-o icon home3-bg2"></i>
                    <h3>Our TESTIMONIALS</h3>
                </div>
                <div
                    class="testmonial-active home2 right left-right-angle mx-5"
                >
                    <div class="single-testimonil clear">
                        <div class="testimonil-content p mtb-25">
                            <p>
                                Duis autem vel eum iriure dolor in hendrerit in
                                vulputate velit esse molestie consequat, vel
                                illum dolore eu feugiat nulla facilisis at vero
                                eros et accumsan et iusto odio dignissim…
                            </p>
                        </div>
                        <div class="test-img floatleft">
                            <img
                                src="frontend/assets/images/test/2.jpg"
                                alt=""
                            />
                        </div>
                        <div class="test-info">
                            <h6>Kaji Hasibur Rahman</h6>
                            <span>Web Designer</span>
                        </div>
                    </div>
                    <div class="single-testimonil clear">
                        <div class="testimonil-content p mtb-25">
                            <p>
                                Duis autem vel eum iriure dolor in hendrerit in
                                vulputate velit esse molestie consequat, vel
                                illum dolore eu feugiat nulla facilisis at vero
                                eros et accumsan et iusto odio dignissim…
                            </p>
                        </div>
                        <div class="test-img floatleft">
                            <img
                                src="frontend/assets/images/test/1.jpg"
                                alt=""
                            />
                        </div>
                        <div class="test-info">
                            <h6>Lorem ipsum</h6>
                            <span>CEO of WooThemes</span>
                        </div>
                    </div>
                    <div class="single-testimonil clear">
                        <div class="testimonil-content p mtb-25">
                            <p>
                                Duis autem vel eum iriure dolor in hendrerit in
                                vulputate velit esse molestie consequat, vel
                                illum dolore eu feugiat nulla facilisis at vero
                                eros et accumsan et iusto odio dignissim…
                            </p>
                        </div>
                        <div class="test-img floatleft">
                            <img
                                src="frontend/assets/images/test/1.jpg"
                                alt=""
                            />
                        </div>
                        <div class="test-info">
                            <h6>Lorem ipsum</h6>
                            <span>CEO of WooThemes</span>
                        </div>
                    </div>
                    <div class="single-testimonil clear">
                        <div class="testimonil-content p mtb-25">
                            <p>
                                Duis autem vel eum iriure dolor in hendrerit in
                                vulputate velit esse molestie consequat, vel
                                illum dolore eu feugiat nulla facilisis at vero
                                eros et accumsan et iusto odio dignissim…
                            </p>
                        </div>
                        <div class="test-img floatleft">
                            <img
                                src="frontend/assets/images/test/2.jpg"
                                alt=""
                            />
                        </div>
                        <div class="test-info">
                            <h6>Kaji Hasibur Rahman</h6>
                            <span>Web Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonils-area end -->
        </div>
    </div>
    <!-- order-area start -->
    <div class="order-area box-shadow ptb-30 bb bg-fff">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-order c-fff home3-bg p-20">
                        <div class="order-icon">
                            <span class="fa fa-plane"></span>
                        </div>
                        <div class="order-content">
                            <h5>World-Wide Shipping</h5>
                            <span>On order over $100</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-order c-fff home3-bg p-20">
                        <div class="order-icon">
                            <span class="fa fa-refresh"></span>
                        </div>
                        <div class="order-content">
                            <h5>30 Days Return</h5>
                            <span>Moneyback guarantee</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-order c-fff home3-bg p-20">
                        <div class="order-icon">
                            <span class="fa fa-umbrella"></span>
                        </div>
                        <div class="order-content">
                            <h5>SUPPORT 24/7</h5>
                            <span>Call us: ( +123 ) 456 789</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-order c-fff home3-bg p-20">
                        <div class="order-icon">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="order-content">
                            <h5>MEMBER DISCOUNT</h5>
                            <span>10% on order over $200</span>
                        </div>
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
<style lang="scss" scoped>
.single-banner {
    position: relative;
}

.single-banner:hover p {
    display: block;
    opacity: 1;
}

.single-banner p {
    display: none;
    position: absolute;
    z-index: 1;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-weight: 900;
    border: 1px solid rgba(128, 128, 128, 0.68);
    padding: 5px 10px;
    background: rgba(38, 38, 38, 0.34);
    opacity: 0;
    transition: opacity 0.9s ease;
}
</style>
