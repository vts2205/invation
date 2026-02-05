<header id="header">
    <div class="wpo-site-header wpo-header-style-3">
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
                            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-2.svg') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-1 col-1">
                        <div id="navbar" class="collapse navbar-collapse navigation-holder">
                            <button class="menu-close"><i class="ti-close"></i></button>
                            <ul class="nav navbar-nav mb-2 mb-lg-0">
                                <li class="menu-item-has-children">
                                    <a class="active" href="#">Home</a>
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
                                            <a class="active" href="#">Event Planner Homes</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('index-8') }}">Wedding Planner 1</a></li>
                                                <li><a class="active" href="{{ url('index-9') }}">Wedding Planner 2</a></li>
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
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('about') }}">About</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('story') }}">Our Story</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('story') }}">Our Story Style 1</a></li>
                                                <li><a href="{{ url('story-2') }}">Our Story Style 2</a></li>
                                                <li><a href="{{ url('story-3') }}">Our Story Style 3</a></li>
                                                <li><a href="{{ url('story-4') }}">Our Story Style 4</a></li>
                                                <li><a href="{{ url('story-5') }}">Our Story Style 5</a></li>
                                                <li><a href="{{ url('story-6') }}">Our Story Style 6</a></li>
                                                <li><a href="{{ url('story-7') }}">Our Story Style 7</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('accomodation') }}">Accomodation</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('rsvp') }}">RSVP</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('rsvp') }}">RSVP Style 1</a></li>
                                                <li><a href="{{ url('rsvp-2') }}">RSVP Style 2</a></li>
                                                <li><a href="{{ url('rsvp-3') }}">RSVP Style 3</a></li>
                                                <li><a href="{{ url('rsvp-4') }}">RSVP Style 4</a></li>
                                                <li><a href="{{ url('rsvp-5') }}">RSVP Style 5</a></li>
                                                <li><a href="{{ url('rsvp-6') }}">RSVP Style 6</a></li>
                                                <li><a href="{{ url('rsvp-7') }}">RSVP Style 7</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                        <li><a href="{{ url('planner') }}">Planners</a></li>
                                        <li><a href="{{ url('team-single') }}">Planner Single</a></li>
                                        <li><a href="{{ url('groom-bride') }}">Brides & Grooms</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('service') }}">Serevice</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('service') }}">Serevice</a></li>
                                                <li><a href="{{ url('service-s2') }}">Serevice S2</a></li>
                                                <li><a href="{{ url('service-s3') }}">Serevice S3</a></li>
                                                <li><a href="{{ url('service-single') }}">Serevice Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('pricing') }}">Pricing</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Auth Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('login') }}">Login</a>
                                                </li>
                                                <li><a href="{{ url('register') }}">Register</a></li>
                                                <li><a href="{{ url('forgot') }}">Forgot Password</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('coming') }}">Coming Soon</a></li>
                                        <li><a href="{{ url('404') }}">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ url('portfolio-grid') }}">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('portfolio-grid') }}">Portfolio Grid</a></li>
                                        <li><a href="{{ url('portfolio-grid-s2') }}">Portfolio Grid S2</a></li>
                                        <li><a href="{{ url('portfolio-grid-s3') }}">Portfolio Grid S3</a></li>
                                        <li><a href="{{ url('portfolio-masonary') }}">Portfolio Masonary</a></li>
                                        <li><a href="{{ url('portfolio-masonary-s2') }}">Portfolio Masonary S2</a></li>
                                        <li><a href="{{ url('portfolio-masonary-s3') }}">Portfolio Masonary S3</a></li>
                                        <li><a href="{{ url('portfolio-slide') }}">Portfolio Slide</a></li>
                                        <li><a href="{{ url('portfolio-single') }}">Portfolio Single</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ url('shop') }}">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('shop') }}">Shop</a></li>
                                        <li><a href="{{ url('shop-single') }}">Shop Single</a></li>
                                        <li><a href="{{ url('cart') }}">Cart</a></li>
                                        <li><a href="{{ url('wishlist') }}">Wishlist</a></li>
                                        <li><a href="{{ url('checkout') }}">Checkout</a></li>
                                    </ul>
                                </li>
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
                                <li><a href="{{ url('contact') }}">Contact</a></li>
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
