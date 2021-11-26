<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CokiesDessert</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css')}}">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('template/css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('template/css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('template/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('template/css/custom.css')}}">


    <!-- Modernizr JS -->
    <script src="{{ asset('template/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header header--3 bg__white">
            <!-- Start Mainmenu Area -->
            @include('partial.topbar')
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->
        
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Offset MEnu -->
            <div class="offsetmenu">
                <div class="offsetmenu__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="off__contact">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{asset('template/images/logo_kecil.jpg')}}" alt="logo">
                            </a>
                        </div>
                        <p>Gabung menjadi member untuk mendapatkan potongan harga di setiap pembeliannya!</p>
                    </div>
                    <!-- <ul class="sidebar__thumd"> -->
                        <div class="btn-info mt--30">
                            <a href="#">DAFTAR SEKARANG</a>
                        </div>
                        <p>Sudah terdaftar? <a href="">Masuk</a></p>
                        <!-- <li><a href="#"><img src="images/sidebar-img/1.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/2.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/3.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/4.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/5.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/6.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/7.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/8.jpg" alt="sidebar images"></a></li> -->
                    <!-- </ul> -->
                    <div class="offset__widget">
                        <div class="offset__single">
                            <h4 class="offset__title">Language</h4>
                            <ul>
                                <li><a href="#"> Engish </a></li>
                                <li><a href="#"> French </a></li>
                                <li><a href="#"> German </a></li>
                            </ul>
                        </div>
                        <div class="offset__single">
                            <h4 class="offset__title">Currencies</h4>
                            <ul>
                                <li><a href="#"> USD : Dollar </a></li>
                                <li><a href="#"> EUR : Euro </a></li>
                                <li><a href="#"> POU : Pound </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset__sosial__share">
                        <h4 class="offset__title">Follow Us On Social</h4>
                        <ul class="off__soaial__link">
                            <li><a class="bg--twitter" href="#"  title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                            
                            <li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                            <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                            <li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                            <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Offset MEnu -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product/sm-img/1.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product/sm-img/2.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.html">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <div class="bradcaump__inner text-center">
            <h2 class="bradcaump-title">Checkout </h2>
        </div>
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--120 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- <form action="#">                -->
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                           $cartItems = \Cart::getContent();
                                        ?>
                                        @foreach ($cartItems as $item)
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="{{asset('images/contoh_cookies.jpg')}}" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#">{{$item->name}}</a></td>
                                            <td class="product-price"><span class="amount">{{$item->price}}</span></td>
                                            <td class="product-quantity"><span class="amount">{{ $item->quantity }}</span></td>
                                            <td class="product-subtotal">{{$item->price * $item->quantity }}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-lg-8">
                                    <div class="ckeckout-left-sidebar">
                                        <!-- Start Checkbox Area -->
                                        <div class="checkout-form">
                                            <h2 class="section-title-3">Billing details</h2>
                                            <form id="addOrder-form" action="{{ route('order.store') }}" method="POST" >
                                            @csrf  
                                            <div class="checkout-form-inner">
                                                <div class="single-checkout-box" >
                                                    <input style="width:100%;" name="name" type="text" placeholder="Nama*">
                                                </div>
                                                <div class="single-checkout-box">
                                                    <input name="email" type="email" placeholder="Email*">
                                                    <input name="handphone" type="text" placeholder="Nomor Handphone*">
                                                </div>
                                                <div class="single-checkout-box">
                                                    <textarea name="address" placeholder="Alamat*"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Checkbox Area -->
                                        <!-- Start Payment Box -->
                                        <div class="payment-form" style="width:50%;">
                                            <h2 class="section-title-3" style="padding:10px;">payment methods</h2>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur kgjhyt</p> -->
                                            <ul class="list-group list-group-flush" style="padding-left:30px;">
                                                <li class="list-group-item">
                                                <!-- Default checked -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            OVO
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                <!-- Default checked -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Bank Mandiri (Virtual Account)
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                <!-- Default checked -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Bank Mandiri (Manual)
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Payment Box -->
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="coupon">
                                                <h3>Coupon</h3>
                                                <p>Enter your coupon code if you have one.</p>
                                                <input type="text" placeholder="Coupon code" />
                                                <input type="submit" value="Apply Coupon" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="cart_totals">
                                        <h2>Cart Totals</h2>
                                        <table>
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">Total: {{ Cart::getTotal() }}</span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td>
                                                        <ul id="shipping_method">
                                                            <li>
                                                                <input type="radio" /> 
                                                                <label>
                                                                    Tarif Tetap (JABODETABEK) : <span class="amount">20000</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" /> 
                                                                <label>
                                                                    Pick Up Store
                                                                </label>
                                                            </li>
                                                            <li></li>
                                                        </ul>
                                                        <p><a class="shipping-calculator-button" href="#">Calculate Shipping</a></p>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <strong><span class="amount">{{ Cart::getTotal() }}</span></strong>
                                                    </td>
                                                </tr>                                           
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            
                                            
                                                <!-- <input type="text" name="name" class="form-control" id="name" placeholder="Name"/> -->
                                            
                                                <!-- <button> <span class="ti-shopping-cart"></span> </button> -->
                                                <button type="submit">Proceed to Checkout</button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <!-- </form>  -->
                    </div>
                </div>
            </div>
        </div>

        
        <!-- cart-main-area end -->
        
        <!-- Start Footer Area -->
        <footer class="htc__foooter__area gray-bg">
            <div class="container">
                
                <!-- Start Copyright Area -->
                <div class="htc__copyright__area">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="copyright__inner">
                                <div class="copyright">
                                    <p>© 2017 <a href="https://freethemescloud.com/">Free themes Cloud</a>
                                    All Right Reserved.</p>
                                </div>
                                <ul class="footer__menu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop.html">Product</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright Area -->
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="public/template/images/product/big-img/1.jpg">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">$17.20</span>
                                        <span class="old-price">$45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Red" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="{{ asset('template/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <!-- Bootstrap framework js -->
    <script src="{{ asset('template/js/bootstrap.min.js')}}"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{ asset('template/js/plugins.js')}}"></script>
    <script src="{{ asset('template/js/slick.min.js')}}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js')}}"></script>
    <!-- Waypoints.min.js. -->
    <script src="{{ asset('template/js/waypoints.min.js')}}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('template/js/main.js')}}"></script>

</body>

</html>