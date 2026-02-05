<header id="header">
    <div class="wpo-site-header {{ $HeaderStyle }}">
        <nav class="navigation navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                        <div class="mobail-menu">
                         
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-1 col-1">
                        <div id="navbar" class="collapse navbar-collapse navigation-holder">
                            <button class="menu-close"><i class="ti-close"></i></button>
                            <ul class="nav navbar-nav mb-2 mb-lg-0">
                                <h4 class="poort-text poort-in-up">Marriage Invitation</h4>
                            </ul>

                        </div><!-- end of nav-collapse -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="header-right">
                            <div class="header-search-form-wrapper">
                                <div class="cart-search-contact">
                                   
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
