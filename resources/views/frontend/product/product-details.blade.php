@extends('layouts.frontend')
@section('content')
    <div class="simple-product-area">
        <div class="container">
            <div class="woocommerce-breadcrumb mtb-15">
                <div class="menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="#">Women's</a></li>
                        <li><a href="#">Hats</a></li>
                        <li class="active"><a href="#">Cras nec nisl ut erat</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-8">
                            <div class="symple-product mb-20">
                                <div class="single-product-tab  box-shadow mb-20">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade show active" id="one">
                                            <a class="popup" href="{{asset('frontend')}}/img/product/latest.jpg">
                                                <img src="{{asset('frontend')}}/img/product/latest.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="two">
                                            <a class="popup" href="{{asset('frontend')}}/img/product/2.jpg">
                                                <img src="{{asset('frontend')}}/img/product/2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="three">
                                            <a class="popup" href="{{asset('frontend')}}/img/product/3.jpg">
                                                <img src="{{asset('frontend')}}/img/product/3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="four">
                                            <a class="popup" href="{{asset('frontend')}}/img/product/4.jpg">
                                                <img src="{{asset('frontend')}}/img/product/4.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="five">
                                            <a class="popup" href="{{asset('frontend')}}/img/product/5.jpg">
                                                <img src="{{asset('frontend')}}/img/product/5.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="six">
                                            <a class="popup" href="{{asset('frontend')}}/img/product/6.jpg">
                                                <img src="{{asset('frontend')}}/img/product/6.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="seven">
                                            <a class="popup" href="{{asset('frontend')}}/img/product/7.jpg">
                                                <img src="{{asset('frontend')}}/img/product/7.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="eight">
                                            <a class="popup" href="{{asset('frontend')}}/img/product/8.jpg">
                                                <img src="{{asset('frontend')}}/img/product/8.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-menu mb-30 box-shadow">
                                    <div class="nav single-product-active clear">
                                        <div class="single-img floatleft">
                                            <a href="#one" data-bs-toggle="tab">
                                                <img src="{{asset('frontend')}}/img/product/1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="single-img floatleft">
                                            <a href="#two" data-bs-toggle="tab">
                                                <img src="{{asset('frontend')}}/img/product/2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="single-img floatleft">
                                            <a href="#three" data-bs-toggle="tab">
                                                <img src="{{asset('frontend')}}/img/product/3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="single-img floatleft">
                                            <a href="#four" data-bs-toggle="tab">
                                                <img src="{{asset('frontend')}}/img/product/4.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="single-img floatleft">
                                            <a href="#five" data-bs-toggle="tab">
                                                <img src="{{asset('frontend')}}/img/product/5.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="single-img floatleft">
                                            <a href="#six" data-bs-toggle="tab">
                                                <img src="{{asset('frontend')}}/img/product/6.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="single-img floatleft">
                                            <a href="#seven" data-bs-toggle="tab">
                                                <img src="{{asset('frontend')}}/img/product/7.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="single-img floatleft">
                                            <a href="#eight" data-bs-toggle="tab">
                                                <img src="{{asset('frontend')}}/img/product/8.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="symple-product box-shadow bg-fff p-15 mb-30">
                                <h3>Cras nec nisl ut erat</h3>
                                <div class="product-content simple-product-content mb-10">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <a href="#">(3 customer reviews)</a><br/>
                                    <span><del>500$</del><span>&300.00</span></span>
                                </div>
                                <p>it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more</p>
                                <div class="simple-product-form contuct-form mtb-20">
                                    <form action="#">
                                        <input min="1" max="1000" name="quantity" value="48" min="1" type="number">
                                        <button>Add to cart</button>
                                    </form>
                                </div>
                                <div class="simple-product-icon c-fff hover-bg pb-20 mb-10 bb">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Browser Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_meta">
                                    <b>SKU:</b> <span>W-hat-8</span>
                                    <div class="category mb-10">
                                        <b>Categories:</b>
                                        <a href="#">Accessories,   </a>
                                        <a href="#"> Clothing,</a>
                                        <a href="#"> Hats,,</a>
                                        <a href="#"> Hoodies</a>
                                    </div>
                                    <div class="single-blog-tag category bb pb-10">
                                        <b>Tags:</b>
                                        <a href="#">fashion,</a>
                                    </div>

                                    <div class="footer-content pt-15 text-uppercase">
                                    <p>Share this product</p>
                                    <ul>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Twetter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Google-Plus"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="simple-product-tab box-shadow">
                        <div class="simple-product-tab-menu clear">
                            <ul class="nav">
                                <li><a class="active" href="#description" data-bs-toggle="tab">Description</a></li>
                                <li><a href="#reviews" data-bs-toggle="tab">Reviews (3)</a></li>
                            </ul>
                        </div>
                        <div class="tab-content  bg-fff">
                            <div class="tab-pane fade show active" id="description">
                                <div class="product-description p-20 bt">
                                    <h2>Product Description</h2>
                                    <p>it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews">
                                <div class="product-reviews p-20 bt">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="review-area">
                                                <h2>3 reviews for Cras nec nisl ut erat</h2>
                                                <ul>
                                                    <li class="review-1">
                                                        <div class="review mb-20">
                                                            <div class="review-img">
                                                                <img class="img-thumbnail" src="{{asset('frontend')}}/img/comment/1.jpg" alt="" />
                                                            </div>
                                                            <div class="review-content p-15">
                                                                <b>admin -</b>
                                                                <div class="review-rating product-content simple-product-content pull-right">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <p>December 16, 2022:</p>
                                                                <p>like</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="review mb-20">
                                                            <div class="review-img">
                                                                <img class="img-thumbnail" src="{{asset('frontend')}}/img/comment/1.jpg" alt="" />
                                                            </div>
                                                            <div class="review-content p-15">
                                                                <b>alex -</b>
                                                                <div class="review-rating product-content simple-product-content pull-right">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <span> December 18, 2022: </span>
                                                                <p>google</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="review mb-20">
                                                            <div class="review-img">
                                                                <img class="img-thumbnail" src="{{asset('frontend')}}/img/comment/1.jpg" alt="" />
                                                            </div>
                                                            <div class="review-content p-15">
                                                                <b>name -</b>
                                                                <div class="review-rating product-content simple-product-content pull-right">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <span>August 11, 2022: </span>
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
                                                <div class="review-rating product-content simple-product-content">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <form action="#">
                                                    <p>Your Review</p>
                                                    <textarea name="#" id="#" cols="30" rows="10"></textarea>
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

                    <div class="product box-shadow mtb-50 bg-fff">
                        <div class="product-title home2-product-title home2-bg-1 text-uppercase">
                            <i class="fa fa-star-o icon bg-4"></i>
                            <h3>Up-Sells Products</h3>
                        </div>
                        <div class="new-product-active left-right-angle home2">
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/product/1.jpg" alt="" class="primary"/>
                                        <img src="{{asset('frontend')}}/img/product/2.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="sale">Sale</span>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
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
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/product/3.jpg" alt="" class="primary"/>
                                        <img src="{{asset('frontend')}}/img/product/4.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
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
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/product/5.jpg" alt="" class="primary"/>
                                        <img src="{{asset('frontend')}}/img/product/6.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
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
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/product/7.jpg" alt="" class="primary"/>
                                        <img src="{{asset('frontend')}}/img/product/8.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
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
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/product/1.jpg" alt="" class="primary"/>
                                        <img src="{{asset('frontend')}}/img/product/2.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
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
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/product/5.jpg" alt="" class="primary"/>
                                        <img src="{{asset('frontend')}}/img/product/6.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
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

                    <div class="product box-shadow mb-50 bg-fff">
                        <div class="product-title home2-product-title home2-bg-1 text-uppercase">
                            <i class="fa fa-star-o icon bg-4"></i>
                            <h3>Related Products</h3>
                        </div>
                        <div class="new-product-active left-right-angle home2">
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/product/1.jpg" alt="" class="primary"/>
                                        <img src="{{asset('frontend')}}/img/product/2.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="sale">Sale</span>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
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
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/product/3.jpg" alt="" class="primary"/>
                                        <img src="{{asset('frontend')}}/img/product/4.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
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
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/product/5.jpg" alt="" class="primary"/>
                                        <img src="{{asset('frontend')}}/img/product/6.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
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
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/product/7.jpg" alt="" class="primary"/>
                                        <img src="{{asset('frontend')}}/img/product/8.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
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
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/product/1.jpg" alt="" class="primary"/>
                                        <img src="{{asset('frontend')}}/img/product/2.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
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
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/product/5.jpg" alt="" class="primary"/>
                                        <img src="{{asset('frontend')}}/img/product/6.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
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
                </div>


            </div>
        </div>
    </div>
@endsection
