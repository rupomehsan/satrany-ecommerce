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
                    <li><Link href="account.html">My Account</Link></li>
                    <li>
                        <Link href="cart.html">compare <span>(0)</span></Link>
                    </li>
                    <li>
                        <Link href="wishlist.html"
                            >Wishlist <span>(0)</span></Link
                        >
                    </li>
                </ul>
            </div>

            <div class="mobail-menu">
                <nav class="offcanvas-menu">
                    <ul>
                        <li class="active">
                            <Link href="index.html">Home</Link>
                            <ul class="sub-menu">
                                <li>
                                    <Link href="index.html">Home shop 1</Link>
                                </li>
                                <li>
                                    <Link href="index-2.html">Home shop 2</Link>
                                </li>
                                <li>
                                    <Link href="index-3.html">Home shop 3</Link>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <Link href="shop.html">Shop</Link>
                            <ul class="sub-menu">
                                <li>
                                    <Link class="mega-title" href="#"
                                        >Shop Layout</Link
                                    >
                                    <ul>
                                        <li>
                                            <Link href="shop-full-width.html"
                                                >Full Width</Link
                                            >
                                        </li>
                                        <li>
                                            <Link href="shop-sitebar-right.html"
                                                >Sidebar Right</Link
                                            >
                                        </li>
                                        <li>
                                            <Link href="shop-sitebar-left.html"
                                                >Sidebar Left</Link
                                            >
                                        </li>
                                        <li>
                                            <Link href="Shop-list-view.html"
                                                >List View</Link
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <Link class="mega-title" href="#"
                                        >Shop Pages</Link
                                    >
                                    <ul class="sub-menu">
                                        <li>
                                            <Link href="account.html"
                                                >My account</Link
                                            >
                                        </li>
                                        <li>
                                            <Link href="cart.html"
                                                >Shoping cart</Link
                                            >
                                        </li>
                                        <li>
                                            <Link href="checkout.html"
                                                >checkout</Link
                                            >
                                        </li>
                                        <li>
                                            <Link href="wishlist.html"
                                                >wishlist</Link
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <Link class="mega-title" href="#"
                                        >Product type</Link
                                    >
                                    <ul class="sub-menu">
                                        <li>
                                            <Link
                                                href="shop-simple-product.html"
                                                >simple product</Link
                                            >
                                        </li>
                                        <li>
                                            <Link
                                                href="shop-variable-Product.html"
                                                >Variable Product</Link
                                            >
                                        </li>
                                        <li>
                                            <Link
                                                href="shop-grouped-Product.html"
                                                >Grouped Product</Link
                                            >
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <Link href="blog.html">blog</Link>
                            <ul class="sub-menu">
                                <li>
                                    <Link href="product-details/slug"
                                        >Blog Layouts 1</Link
                                    >
                                    <ul class="sub-menu">
                                        <li>
                                            <Link
                                                href="blog-left-sitebar-list.html"
                                                >left sitebar list</Link
                                            >
                                        </li>
                                        <li>
                                            <Link
                                                href="blog-left-sitebar-1.html"
                                                >left sitebar grid 1</Link
                                            >
                                        </li>
                                        <li>
                                            <Link
                                                href="blog-left-sitebar-2.html"
                                                >left sitebar grid 2</Link
                                            >
                                        </li>
                                        <li>
                                            <Link
                                                href="blog-left-sitebar-3.html"
                                                >left sitebar grid 3</Link
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <Link href="product-details/slug"
                                        >Blog Layouts 2</Link
                                    >
                                    <ul class="sub-menu">
                                        <li>
                                            <Link
                                                href="blog-right-sitebar-list.html"
                                                >right sitebar list</Link
                                            >
                                        </li>
                                        <li>
                                            <Link
                                                href="blog-right-sitebar-list-1.html"
                                                >right sitebar list 1</Link
                                            >
                                        </li>
                                        <li>
                                            <Link
                                                href="blog-right-sitebar-list-2.html"
                                                >right sitebar list 2</Link
                                            >
                                        </li>
                                        <li>
                                            <Link
                                                href="blog-right-sitebar-list-3.html"
                                                >right sitebar list 3</Link
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <Link href="product-details/slug"
                                        >Blog Layouts 3</Link
                                    >
                                    <ul class="sub-menu">
                                        <li>
                                            <Link href="blog-1-col.html"
                                                >grid 1 columns</Link
                                            >
                                        </li>
                                        <li>
                                            <Link href="blog-2-col.html"
                                                >grid 2 columns</Link
                                            >
                                        </li>
                                        <li>
                                            <Link href="blog-3-col.html"
                                                >grid 3 columns</Link
                                            >
                                        </li>
                                        <li>
                                            <Link href="blog-4-col.html"
                                                >grid 4 columns</Link
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <Link href="product-details/slug"
                                        >Blog Layouts 4</Link
                                    >
                                    <ul class="sub-menu">
                                        <li>
                                            <Link href="blog-details-1.html"
                                                >format:images</Link
                                            >
                                        </li>
                                        <li>
                                            <Link
                                                href="blog-details-gallery.html"
                                                >format:gallery</Link
                                            >
                                        </li>
                                        <li>
                                            <Link href="blog-details-vedio.html"
                                                >format:video</Link
                                            >
                                        </li>
                                        <li>
                                            <Link href="blog-details-2.html"
                                                >format:audio</Link
                                            >
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <Link href="product-details/slug">pages</Link>
                            <ul class="sub-menu">
                                <li><Link href="about.html">about us</Link></li>
                                <li><Link href="faq.html">F.A.Q.s</Link></li>
                                <li><Link href="404.html">404 pages</Link></li>
                            </ul>
                        </li>
                        <li>
                            <Link href="protfolio.html">Protfolio</Link>
                            <ul class="sub-menu">
                                <li>
                                    <Link href="protfolio-details-1.html"
                                        >single project</Link
                                    >
                                </li>
                                <li>
                                    <Link href="protfolio-2-col.html"
                                        >two columns</Link
                                    >
                                </li>
                                <li>
                                    <Link href="protfolio-3-col.html"
                                        >three columns</Link
                                    >
                                </li>
                                <li>
                                    <Link href="protfolio.html"
                                        >four columns</Link
                                    >
                                </li>
                            </ul>
                        </li>
                        <li><Link href="contact.html">contact us</Link></li>
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
                <hero-slider></hero-slider>
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
                                            src="frontend/assets/images/banner/4.jpg"
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
                            <div
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="latest-deals box-shadow mb-35 bg-fff">
                        <div class="product-title home3-bg text-uppercase">
                            <i class="fa fa-history icon home3-bg2"></i>
                            <h3>latest deals</h3>
                        </div>
                        <div class="latest-deals-active left-right-angle home2">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <Link href="product-details/slug">
                                        <img
                                            src="frontend/img/product/2.jpg"
                                            alt=""
                                            class="primary"
                                        />
                                        <img
                                            src="frontend/img/product/3.jpg"
                                            alt=""
                                            class="secondary"
                                        />
                                    </Link>
                                    <div class="product-icon home3-hover-bg">
                                        <ul>
                                            <li>
                                                <Link
                                                    href="#"
                                                    data-bs-toggle="tooltip"
                                                    title="Add to cart"
                                                    ><i
                                                        class="fa fa-shopping-cart"
                                                    ></i
                                                ></Link>
                                            </li>
                                            <li>
                                                <Link
                                                    href="#"
                                                    data-bs-toggle="tooltip"
                                                    title="Wishlist"
                                                    ><i
                                                        class="fa fa-heart-o"
                                                    ></i
                                                ></Link>
                                            </li>
                                            <li>
                                                <Link
                                                    href="#"
                                                    data-bs-toggle="tooltip"
                                                    title="Compare"
                                                    ><i
                                                        class="fa fa-comments"
                                                    ></i
                                                ></Link>
                                            </li>
                                            <li>
                                                <Link
                                                    href="#"
                                                    data-bs-toggle="tooltip"
                                                    title="Accumsan eli"
                                                    ><i class="fa fa-search"></i
                                                ></Link>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="sale">Sale</span>
                                    <div class="deal-count">
                                        <div class="timer">
                                            <div
                                                data-countdown="2023/12/01"
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content home3-hover">
                                    <h3>
                                        <Link href="product-details/slug">
                                            cursus eu</Link
                                        >
                                    </h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>&300.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
