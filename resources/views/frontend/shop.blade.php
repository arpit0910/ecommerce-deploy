@extends('frontend.layouts.main')
@section('content')
<!-- <div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">Shop Fullwide</li>
            </ul>
        </div>
    </div>
</div> -->
<div class="shop-area pt-120 pb-120 section-padding-2">
    <div class="container-fluid">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-topbar-wrapper">
                    <div class="shop-topbar-left">
                        <div class="view-mode nav">
                            <a class="active" href="#shop-1" data-toggle="tab"><i class="icon-grid"></i></a>
                            <a href="#shop-2" data-toggle="tab"><i class="icon-menu"></i></a>
                        </div>
                        <p>Showing 1 - 20 of 30 results </p>
                    </div>
                    <div class="product-sorting-wrapper">
                        <div class="product-shorting shorting-style">
                            <label>View :</label>
                            <select>
                                <option value=""> 20</option>
                                <option value=""> 23</option>
                                <option value=""> 30</option>
                            </select>
                        </div>
                        <div class="product-show shorting-style">
                            <label>Sort by :</label>
                            <select>
                                <option value="">Default</option>
                                <option value=""> Name</option>
                                <option value=""> price</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="shop-bottom-area">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-13.jpg" alt="">
                                            </a>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div>
                                            <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                            <div class="product-price-2">
                                                <span>$20.50</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div>
                                            <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                            <div class="product-price-2">
                                                <span>$20.50</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-14.jpg" alt="">
                                            </a>
                                            <span class="pro-badge left bg-red">-20%</span>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <span>(5)</span>
                                            </div>
                                            <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                            <div class="product-price-2">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <span>(5)</span>
                                            </div>
                                            <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                            <div class="product-price-2">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-15.jpg" alt="">
                                            </a>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <span>(4)</span>
                                            </div>
                                            <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                            <div class="product-price-2">
                                                <span>$35.45</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <span>(4)</span>
                                            </div>
                                            <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                            <div class="product-price-2">
                                                <span>$35.45</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-16.jpg" alt="">
                                            </a>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>
                                            <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                            <div class="product-price-2">
                                                <span>$45.50</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>
                                            <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                            <div class="product-price-2">
                                                <span>$45.50</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-17.jpg" alt="">
                                            </a>
                                            <span class="pro-badge left bg-red">-20%</span>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(5)</span>
                                            </div>
                                            <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                            <div class="product-price-2">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(5)</span>
                                            </div>
                                            <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                            <div class="product-price-2">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-18.jpg" alt="">
                                            </a>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>
                                            <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                            <div class="product-price-2">
                                                <span>$55.50</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>
                                            <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                            <div class="product-price-2">
                                                <span>$55.50</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-19.jpg" alt="">
                                            </a>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <span>(5)</span>
                                            </div>
                                            <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                            <div class="product-price-2">
                                                <span>$65.50</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <span>(5)</span>
                                            </div>
                                            <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                            <div class="product-price-2">
                                                <span>$65.50</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-20.jpg" alt="">
                                            </a>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div>
                                            <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                            <div class="product-price-2">
                                                <span>$75.50</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div>
                                            <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                            <div class="product-price-2">
                                                <span>$75.50</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-95.jpg" alt="">
                                            </a>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div>
                                            <h3><a href="product-details.html">Simple Black T-Shirt</a></h3>
                                            <div class="product-price-2">
                                                <span>$20.50</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div>
                                            <h3><a href="product-details.html">Simple Black T-Shirt</a></h3>
                                            <div class="product-price-2">
                                                <span>$20.50</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-96.jpg" alt="">
                                            </a>
                                            <span class="pro-badge left bg-red">-20%</span>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <span>(5)</span>
                                            </div>
                                            <h3><a href="product-details.html">Norda Simple Backpack</a></h3>
                                            <div class="product-price-2">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <span>(5)</span>
                                            </div>
                                            <h3><a href="product-details.html">Norda Simple Backpack</a></h3>
                                            <div class="product-price-2">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-97.jpg" alt="">
                                            </a>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <span>(4)</span>
                                            </div>
                                            <h3><a href="product-details.html">Simple Blue T-Shirt</a></h3>
                                            <div class="product-price-2">
                                                <span>$35.45</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <span>(4)</span>
                                            </div>
                                            <h3><a href="product-details.html">Simple Blue T-Shirt</a></h3>
                                            <div class="product-price-2">
                                                <span>$35.45</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-99.jpg" alt="">
                                            </a>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>
                                            <h3><a href="product-details.html">Basic Sneaker</a></h3>
                                            <div class="product-price-2">
                                                <span>$45.50</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>
                                            <h3><a href="product-details.html">Basic Sneaker</a></h3>
                                            <div class="product-price-2">
                                                <span>$45.50</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="shop-2" class="tab-pane">
                            <div class="shop-list-wrap mb-30">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                        <div class="product-list-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-13.jpg" alt="Product Style">
                                            </a>
                                            <div class="product-list-quickview">
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                        <div class="shop-list-content">
                                            <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                            <div class="pro-list-price">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                            <div class="product-list-rating-wrap">
                                                <div class="product-list-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="product-list-action">
                                                <button title="Add To Cart"><i class="icon-basket-loaded"></i></button>
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                        <div class="product-list-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-14.jpg" alt="Product Style">
                                            </a>
                                            <div class="product-list-quickview">
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                        <div class="shop-list-content">
                                            <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                            <div class="pro-list-price">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                            <div class="product-list-rating-wrap">
                                                <div class="product-list-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="product-list-action">
                                                <button title="Add To Cart"><i class="icon-basket-loaded"></i></button>
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                        <div class="product-list-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-15.jpg" alt="Product Style">
                                            </a>
                                            <div class="product-list-quickview">
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                        <div class="shop-list-content">
                                            <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                            <div class="pro-list-price">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                            <div class="product-list-rating-wrap">
                                                <div class="product-list-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="product-list-action">
                                                <button title="Add To Cart"><i class="icon-basket-loaded"></i></button>
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                        <div class="product-list-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-16.jpg" alt="Product Style">
                                            </a>
                                            <div class="product-list-quickview">
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                        <div class="shop-list-content">
                                            <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                            <div class="pro-list-price">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                            <div class="product-list-rating-wrap">
                                                <div class="product-list-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="product-list-action">
                                                <button title="Add To Cart"><i class="icon-basket-loaded"></i></button>
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                        <div class="product-list-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-17.jpg" alt="Product Style">
                                            </a>
                                            <div class="product-list-quickview">
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                        <div class="shop-list-content">
                                            <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                            <div class="pro-list-price">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                            <div class="product-list-rating-wrap">
                                                <div class="product-list-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="product-list-action">
                                                <button title="Add To Cart"><i class="icon-basket-loaded"></i></button>
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-pagination-style text-center mt-10">
                        <ul>
                            <li><a class="prev" href="#"><i class="icon-arrow-left"></i></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a class="next" href="#"><i class="icon-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
                    <div class="sidebar-widget mb-40">
                        <h4 class="sidebar-widget-title">Search </h4>
                        <div class="sidebar-search">
                            <form class="sidebar-search-form" action="#">
                                <input type="text" placeholder="Search here...">
                                <button>
                                    <i class="icon-magnifier"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
                        <h4 class="sidebar-widget-title">Categories </h4>
                        <div class="shop-catigory">
                            <ul>
                                <li><a href="shop.html">T-Shirt</a></li>
                                <li><a href="shop.html">Shoes</a></li>
                                <li><a href="shop.html">Clothing </a></li>
                                <li><a href="shop.html">Women </a></li>
                                <li><a href="shop.html">Baby Boy </a></li>
                                <li><a href="shop.html">Accessories </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Price Filter </h4>
                        <div class="price-filter">
                            <span>Range: $100.00 - 1.300.00 </span>
                            <div id="slider-range"></div>
                            <div class="price-slider-amount">
                                <div class="label-input">
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                                <button type="button">Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Refine By </h4>
                        <div class="sidebar-widget-list">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox"> <a href="#">On Sale <span>4</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">New <span>5</span></a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">In Stock <span>6</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Size </h4>
                        <div class="sidebar-widget-list">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">XL <span>4</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">L <span>5</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">SM <span>6</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">XXL <span>7</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Color </h4>
                        <div class="sidebar-widget-list">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Green <span>7</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Cream <span>8</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Blue <span>9</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Black <span>3</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border pt-40">
                        <h4 class="sidebar-widget-title">Popular Tags</h4>
                        <div class="sidebar-widget-tag">
                            <ul>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">For Men</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Fashion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                        <div class="tab-content quickview-big-img">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="assets/images/product/product-1.jpg" alt="">
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src="assets/images/product/product-3.jpg" alt="">
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src="assets/images/product/product-6.jpg" alt="">
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src="assets/images/product/product-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="quickview-wrap mt-15">
                            <div class="quickview-slide-active nav-style-6">
                                <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/images/product/quickview-s1.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-2"><img src="assets/images/product/quickview-s2.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-3"><img src="assets/images/product/quickview-s3.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-4"><img src="assets/images/product/quickview-s2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                        <div class="product-details-content quickview-content">
                            <h2>Simple Black T-Shirt</h2>
                            <div class="product-ratting-review-wrap">
                                <div class="product-ratting-digit-wrap">
                                    <div class="product-ratting">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <div class="product-digit">
                                        <span>5.0</span>
                                    </div>
                                </div>
                                <div class="product-review-order">
                                    <span>62 Reviews</span>
                                    <span>242 orders</span>
                                </div>
                            </div>
                            <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                            <div class="pro-details-price">
                                <span class="new-price">$75.72</span>
                                <span class="old-price">$95.72</span>
                            </div>
                            <div class="pro-details-color-wrap">
                                <span>Color:</span>
                                <div class="pro-details-color-content">
                                    <ul>
                                        <li><a class="dolly" href="#">dolly</a></li>
                                        <li><a class="white" href="#">white</a></li>
                                        <li><a class="azalea" href="#">azalea</a></li>
                                        <li><a class="peach-orange" href="#">Orange</a></li>
                                        <li><a class="mona-lisa active" href="#">lisa</a></li>
                                        <li><a class="cupid" href="#">cupid</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-details-size">
                                <span>Size:</span>
                                <div class="pro-details-size-content">
                                    <ul>
                                        <li><a href="#">XS</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-details-quality">
                                <span>Quantity:</span>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                </div>
                            </div>
                            <div class="product-details-meta">
                                <ul>
                                    <li><span>Categories:</span> <a href="#">Woman,</a> <a href="#">Dress,</a> <a href="#">T-Shirt</a></li>
                                    <li><span>Tag: </span> <a href="#">Fashion,</a> <a href="#">Mentone</a> , <a href="#">Texas</a></li>
                                </ul>
                            </div>
                            <div class="pro-details-action-wrap">
                                <div class="pro-details-add-to-cart">
                                    <a title="Add to Cart" href="#">Add To Cart </a>
                                </div>
                                <div class="pro-details-action">
                                    <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                    <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                    <div class="product-dec-social">
                                        <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook"></i></a>
                                        <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                        <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                        <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
</div>
@endsection