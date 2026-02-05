<header id="header">
    <div class="wpo-site-header {{ $HeaderStyle }}">
        <nav class="navigation navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                        <div class="mobail-menu">
                            <button type="button" class="navbar-toggler open-btn">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar first-angle"></span>
                                <span class="icon-bar middle-angle"></span>
                                <span class="icon-bar last-angle"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.svg') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-1 col-1">
                        <div id="navbar" class="collapse navbar-collapse navigation-holder">
                            <button class="menu-close"><i class="ti-close"></i></button>
                            <ul class="nav navbar-nav mb-2 mb-lg-0">
                                <li class="menu-item-has-children">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/') }}">Wedding Home Style 1</a></li>
                                        <li><a href="{{ url('index-2') }}">Wedding Home Style 2</a></li>
                                        <li><a href="{{ url('index-3') }}">Announcement Home 1</a></li>
                                        <li><a href="{{ url('index-4') }}">Announcement Home 2</a></li>
                                        <li><a href="{{ url('index-5') }}">Announcement Home 3</a></li>
                                        <li><a href="{{ url('index-6') }}">Asian Wedding Home</a></li>
                                        <li><a href="{{ url('index-7') }}">Muslim Wedding Home</a></li>
                                        <li><a href="{{ url('index-rtl') }}">Muslim Wedding (RTL)</a></li>
                                        <li><a href="{{ url('invitation-1') }}">Wedding Invitation 1</a></li>
                                        <li><a href="{{ url('invitation-2') }}">Wedding Invitation 2</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Event Planner Homes</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('index-8') }}">Wedding Planner 1</a></li>
                                                <li><a href="{{ url('index-9') }}">Wedding Planner 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Wedding Shop Homes</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('shop-home') }}">Bridal Shop</a></li>
                                                <li><a href="{{ url('shop-home-2') }}">Wedding Cake Shop</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#couple">Couple</a></li>
                                <li><a href="#story">Story</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#rsvp">RSVP</a></li>
                                <li class="menu-item-has-children">
                                    <a href="{{ url('blog') }}">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('blog') }}">Blog right sidebar</a></li>
                                        <li><a href="{{ url('blog-left-sidebar') }}">Blog left sidebar</a></li>
                                        <li><a href="{{ url('blog-fullwidth') }}">Blog fullwidth</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog details</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('blog-single') }}">Blog details right sidebar</a>
                                                </li>
                                                <li><a href="{{ url('blog-single-left-sidebar') }}">Blog details left
                                                        sidebar</a></li>
                                                <li><a href="{{ url('blog-single-fullwidth') }}">Blog details
                                                        fullwidth</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div><!-- end of nav-collapse -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="header-right">
                            <div class="header-search-form-wrapper">
                                <div class="cart-search-contact">
                                    <button class="search-toggle-btn"><i
                                            class="fi flaticon-search"></i></button>
                                    <div class="header-search-form">
                                        <form>
                                            <div>
                                                <input type="text" class="form-control"
                                                    placeholder="Search here...">
                                                <button type="submit"><i
                                                        class="fi flaticon-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="mini-cart">
                                <button class="cart-toggle-btn"> <i class="fi flaticon-shopping-cart"></i>
                                    <span class="cart-count">2</span></button>
                                <div class="mini-cart-content">
                                    <button class="mini-cart-close"><i class="ti-close"></i></button>
                                    <div class="mini-cart-items">
                                        <div class="mini-cart-item clearfix">
                                            <div class="mini-cart-item-image">
                                                <a href="{{ url('shop') }}"><img
                                                        src="{{ asset('assets/images/shop/mini-cart/img-1.jpg') }}" alt></a>
                                            </div>
                                            <div class="mini-cart-item-des">
                                                <a href="{{ url('shop') }}">Wedding Gown</a>
                                                <span class="mini-cart-item-price">$20.15 x 1</span>
                                                <span class="mini-cart-item-quantity"><a href="#"><i
                                                            class="ti-close"></i></a></span>
                                            </div>
                                        </div>
                                        <div class="mini-cart-item clearfix">
                                            <div class="mini-cart-item-image">
                                                <a href="{{ url('shop') }}"><img
                                                        src="{{ asset('assets/images/shop/mini-cart/img-2.jpg') }}" alt></a>
                                            </div>
                                            <div class="mini-cart-item-des">
                                                <a href="{{ url('shop') }}">Bridal Flower</a>
                                                <span class="mini-cart-item-price">$13.25 x 2</span>
                                                <span class="mini-cart-item-quantity"><a href="#"><i
                                                            class="ti-close"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-cart-action clearfix">
                                        <span class="mini-checkout-price">Subtotal:
                                            <span>$215.14</span></span>
                                        <div class="mini-btn">
                                            <a href="{{ url('checkout') }}" class="view-cart-btn s1">Checkout</a>
                                            <a href="{{ url('cart') }}" class="view-cart-btn">View Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </div>
</header>
