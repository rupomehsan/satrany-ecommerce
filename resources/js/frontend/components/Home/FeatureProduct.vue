<template>
    <div class="row">
        <div class="col-md-3">
            <div class="product-wrapper bl">
                <div class="product-img">
                    <a href="product-details/slug">
                        <img
                            src="frontend/img/product/1.jpg"
                            alt=""
                            class="primary"
                        />
                        <img
                            src="frontend/img/product/2.jpg"
                            alt=""
                            class="secondary"
                        />
                    </a>
                    <div class="product-icon c-fff home3-hover-bg">
                        <ul>
                            <li>
                                <a
                                    @click="addToCart(1)"
                                    role="button"
                                    data-bs-toggle="tooltip"
                                    aria-label="Add to cart"
                                    data-bs-original-title="Add to cart"
                                    ><i
                                        title="Add to cart"
                                        class="fa fa-shopping-cart"
                                    ></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    @click="addToWishList(1)"
                                    role="button"
                                    data-bs-toggle="tooltip"
                                    aria-label="Wishlist"
                                    data-bs-original-title="Wishlist"
                                    ><i
                                        title="Add to wishlist"
                                        class="fa fa-heart-o"
                                    ></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    @click="addToCompareList(1)"
                                    data-bs-toggle="tooltip"
                                    role="button"
                                    aria-label="Compare"
                                    data-bs-original-title="Compare"
                                    ><i
                                        title="Add to comparelist"
                                        class="fa fa-comments"
                                    ></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-content home3-hover">
                    <h3>
                        <a href="{{ route('product.details', 'slug') }}">
                            cursus eu aaaa</a
                        >
                    </h3>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>&amp;300.00</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-wrapper bl">
                <div class="product-img">
                    <a href="{{ route('product.details', 'slug') }}">
                        <img
                            src="frontend/img/product/3.jpg"
                            alt=""
                            class="primary"
                        />
                        <img
                            src="frontend/img/product/4.jpg"
                            alt=""
                            class="secondary"
                        />
                    </a>
                    <div class="product-icon c-fff home3-hover-bg">
                        <ul>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Add to cart"
                                    data-bs-original-title="Add to cart"
                                    ><i class="fa fa-shopping-cart"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Wishlist"
                                    data-bs-original-title="Wishlist"
                                    ><i class="fa fa-heart-o"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Compare"
                                    data-bs-original-title="Compare"
                                    ><i class="fa fa-comments"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Accumsan eli"
                                    data-bs-original-title="Accumsan eli"
                                    ><i class="fa fa-search"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-content home3-hover">
                    <h3>
                        <a href="{{ route('product.details', 'slug') }}">
                            cursus eu</a
                        >
                    </h3>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>&amp;300.00</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-wrapper bl">
                <div class="product-img">
                    <a href="{{ route('product.details', 'slug') }}">
                        <img
                            src="frontend/img/product/5.jpg"
                            alt=""
                            class="primary"
                        />
                        <img
                            src="frontend/img/product/6.jpg"
                            alt=""
                            class="secondary"
                        />
                    </a>
                    <div class="product-icon c-fff home3-hover-bg">
                        <ul>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Add to cart"
                                    data-bs-original-title="Add to cart"
                                    ><i class="fa fa-shopping-cart"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Wishlist"
                                    data-bs-original-title="Wishlist"
                                    ><i class="fa fa-heart-o"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Compare"
                                    data-bs-original-title="Compare"
                                    ><i class="fa fa-comments"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Accumsan eli"
                                    data-bs-original-title="Accumsan eli"
                                    ><i class="fa fa-search"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-content home3-hover">
                    <h3>
                        <a href="{{ route('product.details', 'slug') }}">
                            cursus eu</a
                        >
                    </h3>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>&amp;300.00</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-1">
            <div class="product-wrapper bl">
                <div class="product-img">
                    <a href="{{ route('product.details', 'slug') }}">
                        <img
                            src="frontend/img/product/7.jpg"
                            alt=""
                            class="primary"
                        />
                        <img
                            src="frontend/img/product/8.jpg"
                            alt=""
                            class="secondary"
                        />
                    </a>
                    <div class="product-icon c-fff home3-hover-bg">
                        <ul>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Add to cart"
                                    data-bs-original-title="Add to cart"
                                    ><i class="fa fa-shopping-cart"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Wishlist"
                                    data-bs-original-title="Wishlist"
                                    ><i class="fa fa-heart-o"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Compare"
                                    data-bs-original-title="Compare"
                                    ><i class="fa fa-comments"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Accumsan eli"
                                    data-bs-original-title="Accumsan eli"
                                    ><i class="fa fa-search"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-content home3-hover">
                    <h3>
                        <a href="{{ route('product.details', 'slug') }}">
                            cursus eu</a
                        >
                    </h3>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>&amp;300.00</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-1">
            <div class="product-wrapper bl">
                <div class="product-img">
                    <a href="{{ route('product.details', 'slug') }}">
                        <img
                            src="frontend/img/product/8.jpg"
                            alt=""
                            class="primary"
                        />
                        <img
                            src="frontend/img/product/7.jpg"
                            alt=""
                            class="secondary"
                        />
                    </a>
                    <div class="product-icon c-fff home3-hover-bg">
                        <ul>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Add to cart"
                                    data-bs-original-title="Add to cart"
                                    ><i class="fa fa-shopping-cart"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Wishlist"
                                    data-bs-original-title="Wishlist"
                                    ><i class="fa fa-heart-o"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Compare"
                                    data-bs-original-title="Compare"
                                    ><i class="fa fa-comments"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Accumsan eli"
                                    data-bs-original-title="Accumsan eli"
                                    ><i class="fa fa-search"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-content home3-hover">
                    <h3>
                        <a href="{{ route('product.details', 'slug') }}">
                            cursus eu</a
                        >
                    </h3>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>&amp;300.00</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-1">
            <div class="product-wrapper bl">
                <div class="product-img">
                    <a href="{{ route('product.details', 'slug') }}">
                        <img
                            src="frontend/img/product/6.jpg"
                            alt=""
                            class="primary"
                        />
                        <img
                            src="frontend/img/product/5.jpg"
                            alt=""
                            class="secondary"
                        />
                    </a>
                    <div class="product-icon c-fff home3-hover-bg">
                        <ul>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Add to cart"
                                    data-bs-original-title="Add to cart"
                                    ><i class="fa fa-shopping-cart"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Wishlist"
                                    data-bs-original-title="Wishlist"
                                    ><i class="fa fa-heart-o"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Compare"
                                    data-bs-original-title="Compare"
                                    ><i class="fa fa-comments"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Accumsan eli"
                                    data-bs-original-title="Accumsan eli"
                                    ><i class="fa fa-search"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-content home3-hover">
                    <h3>
                        <a href="{{ route('product.details', 'slug') }}">
                            cursus eu</a
                        >
                    </h3>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>&amp;300.00</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-1">
            <div class="product-wrapper bl">
                <div class="product-img">
                    <a href="{{ route('product.details', 'slug') }}">
                        <img
                            src="frontend/img/product/4.jpg"
                            alt=""
                            class="primary"
                        />
                        <img
                            src="frontend/img/product/3.jpg"
                            alt=""
                            class="secondary"
                        />
                    </a>
                    <div class="product-icon c-fff home3-hover-bg">
                        <ul>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Add to cart"
                                    data-bs-original-title="Add to cart"
                                    ><i class="fa fa-shopping-cart"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Wishlist"
                                    data-bs-original-title="Wishlist"
                                    ><i class="fa fa-heart-o"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Compare"
                                    data-bs-original-title="Compare"
                                    ><i class="fa fa-comments"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Accumsan eli"
                                    data-bs-original-title="Accumsan eli"
                                    ><i class="fa fa-search"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-content home3-hover">
                    <h3>
                        <a href="{{ route('product.details', 'slug') }}">
                            cursus eu</a
                        >
                    </h3>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>&amp;300.00</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-1">
            <div class="product-wrapper bl">
                <div class="product-img">
                    <a href="{{ route('product.details', 'slug') }}">
                        <img
                            src="frontend/img/product/2.jpg"
                            alt=""
                            class="primary"
                        />
                        <img
                            src="frontend/img/product/1.jpg"
                            alt=""
                            class="secondary"
                        />
                    </a>
                    <div class="product-icon c-fff home3-hover-bg">
                        <ul>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Add to cart"
                                    data-bs-original-title="Add to cart"
                                    ><i class="fa fa-shopping-cart"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Wishlist"
                                    data-bs-original-title="Wishlist"
                                    ><i class="fa fa-heart-o"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Compare"
                                    data-bs-original-title="Compare"
                                    ><i class="fa fa-comments"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-bs-toggle="tooltip"
                                    aria-label="Accumsan eli"
                                    data-bs-original-title="Accumsan eli"
                                    ><i class="fa fa-search"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-content home3-hover">
                    <h3>
                        <a href="{{ route('product.details', 'slug') }}">
                            cursus eu</a
                        >
                    </h3>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>&amp;300.00</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FeatureProduct",
    methods: {
        addToCart: async function (productId) {
            const response = await axios.post("/api/v1/add-to-cart", {
                productId: productId,
            });

            if (response.data.status === "success") {
                toastr.success(response.data.message);
            }
        },
        addToWishList: async function (productId) {
            const response = await axios.post("/api/v1/add-to-wish-list", {
                productId: productId,
            });

            if (response.data.status === "success") {
                toastr.success(response.data.message);
            }
            if (response.data.status === "warning") {
                toastr.warning(response.data.message);
            }
        },
        addToCompareList: async function (productId) {
            const response = await axios.post("/api/v1/add-to-compare-list", {
                productId: productId,
            });

            if (response.data.status === "success") {
                toastr.success(response.data.message);
            }
            if (response.data.status === "warning") {
                toastr.warning(response.data.message);
            }
        },
    },
};
</script>

<style lang="scss" scoped></style>
