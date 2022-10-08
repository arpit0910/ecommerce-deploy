<!-- Header -->
<header class="header-area bg-orange">
    <div class="header-large-device">
        <div class="header-top header-top-ptb-7 border-bottom-9">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="{{route('frontend.index')}}"><img src="{{asset('assets/images/logo/logo-3.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="categori-search-wrap categori-search-wrap-modify-2">
                            <div class="categori-style-1">
                                <select class="nice-select nice-select-style-1">
                                    <option>All Categories </option>
                                    <option>Clothing </option>
                                    <option>T-Shirt</option>
                                    <option>Shoes</option>
                                    <option>Jeans</option>
                                </select>
                            </div>
                            <div class="search-wrap-3">
                                <form action="#">
                                    <input placeholder="Search Products..." type="text">
                                    <button class="orange"><i class="lnr lnr-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="header-action header-action-flex">
                            <div class="same-style-2 same-style-2-white same-style-2-hover-black same-style-2-font-inc">
                                <a href="{{route('frontend.profile')}}"><i class="icon-user"></i></a>
                            </div>
                            <div class="same-style-2 same-style-2-white same-style-2-hover-black same-style-2-font-inc">
                                <a href="{{route('frontend.wishlist')}}"><i class="icon-heart"></i><span class="pro-count black wishlist-count">{{$wishlistCount}}</span></a>
                            </div>
                            <div class="same-style-2 same-style-2-white same-style-2-hover-black same-style-2-font-inc header-cart">
                                <!-- <a class="cart-active" href="#"> -->
                                <a href="{{route('frontend.cart')}}">
                                    <i class="icon-basket-loaded"></i><span class="pro-count black cart-count">{{$cartCount}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main-menu main-menu-white main-menu-font-size-14 main-menu-padding-3 main-menu-lh-5 main-menu-hover-black">
                            <nav>
                                <ul>
                                    <li><a href="{{route('frontend.index')}}">HOME <i class="icon-arrow-down"></i></a>
                                        <ul class="sub-menu-style">
                                            <li><a href="{{route('frontend.index')}}">Home version 1 </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">PAGES <i class="icon-arrow-down"></i> </a>
                                        <ul class="sub-menu-style">
                                            <li><a href="{{route('frontend.aboutUs')}}">about us </a></li>
                                            <li><a href="{{route('frontend.cart')}}">cart page</a></li>
                                            <li><a href="{{route('frontend.checkout')}}">checkout </a></li>
                                            <li><a href="{{route('frontend.wishlist')}}">wishlist </a></li>
                                            <li><a href="{{route('frontend.contact')}}">contact us </a></li>
                                            <li><a href="{{route('frontend.orderTracking')}}">order tracking</a></li>
                                            <li><a href="{{route('frontend.profile')}}">login / register </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('frontend.contact')}}">CONTACT </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-small-device small-device-ptb-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5">
                    <div class="mobile-logo">
                        <a href="{{route('frontend.index')}}">
                            <img alt="" src="{{asset('assets/images/logo/logo-3.png')}}">
                        </a>
                    </div>
                </div>
                <div class="col-7">
                    <div class="header-action header-action-flex">
                        <div class="same-style-2 same-style-2-white same-style-2-hover-black same-style-2-font-inc">
                            <a href="{{route('frontend.profile')}}"><i class="icon-user"></i></a>
                        </div>
                        <div class="same-style-2 same-style-2-white same-style-2-hover-black same-style-2-font-inc">
                            <a href="{{route('frontend.wishlist')}}"><i class="icon-heart"></i><span class="pro-count black wishlist-count">{{$wishlistCount}}</span></a>
                            <input type="hidden" class="wishlist-hidden-count" value="{{$wishlistCount}}">
                        </div>
                        <div class="same-style-2 same-style-2-white same-style-2-hover-black same-style-2-font-inc header-cart">
                            <a class="cart-active" href="#">
                                <i class="icon-basket-loaded"></i><span class="pro-count black cart-count">{{$cartCount}}</span>
                            </a>
                            <input type="hidden" class="cart-hidden-count" value="{{$cartCount}}">
                        </div>
                        <div class="same-style-2 same-style-2-white same-style-2-hover-black main-menu-icon">
                            <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Mobile menu start -->
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="clickalbe-sidebar-wrap">
        <a class="sidebar-close"><i class="icon_close"></i></a>
        <div class="mobile-header-content-area">
            <div class="mobile-search mobile-header-padding-border-1">
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search here…">
                    <button class="button-search"><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-padding-border-2">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><a href="{{route('frontend.index')}}">Home</a>
                            <ul class="dropdown">
                                <li><a href="{{route('frontend.index')}}">Home version 1 </a></li>
                                <li><a href="index-2.html">Home version 2</a></li>
                                <li><a href="index-3.html">Home version 3</a></li>
                                <li><a href="index-4.html">Home version 4</a></li>
                                <li><a href="index-5.html">Home version 5</a></li>
                                <li><a href="index-6.html">Home version 6</a></li>
                                <li><a href="index-7.html">Home version 7</a></li>
                                <li><a href="index-8.html">Home version 8</a></li>
                                <li><a href="index-9.html">Home version 9</a></li>
                                <li><a href="index-10.html">Home version 10</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{route('frontend.aboutUs')}}">about us </a></li>
                                <li><a href="{{route('frontend.cart')}}">cart page</a></li>
                                <li><a href="{{route('frontend.checkout')}}">checkout </a></li>
                                <li><a href="{{route('frontend.wishlist')}}">wishlist </a></li>
                                <li><a href="{{route('frontend.contact')}}">contact us </a></li>
                                <li><a href="{{route('frontend.orderTracking')}}">order tracking</a></li>
                                <li><a href="{{route('frontend.profile')}}">login / register </a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('frontend.contact')}}">Contact us</a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-social-icon">
                <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- mini cart start -->
<!-- <div class="sidebar-cart-active">
    <div class="sidebar-cart-all">
        <a class="cart-close" href="#"><i class="icon_close"></i></a>
        <div class="cart-content">
            <h3>Shopping Cart</h3>
            <ul>
                <li class="single-product-cart">
                    <div class="cart-img">
                        <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                    </div>
                    <div class="cart-title">
                        <h4><a href="#">Simple Black T-Shirt</a></h4>
                        <span> 1 × $49.00 </span>
                    </div>
                    <div class="cart-delete">
                        <a href="#">×</a>
                    </div>
                </li>
                <li class="single-product-cart">
                    <div class="cart-img">
                        <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                    </div>
                    <div class="cart-title">
                        <h4><a href="#">Norda Backpack</a></h4>
                        <span> 1 × $49.00 </span>
                    </div>
                    <div class="cart-delete">
                        <a href="#">×</a>
                    </div>
                </li>
            </ul>
            <div class="cart-total">
                <h4>Subtotal: <span>$170.00</span></h4>
            </div>
            <div class="cart-checkout-btn">
                <a class="btn-hover cart-btn-style" href="{{route('frontend.cart')}}">view cart</a>
                <a class="no-mrg btn-hover cart-btn-style" href="{{route('frontend.checkout')}}">checkout</a>
            </div>
        </div>
    </div>
</div> -->