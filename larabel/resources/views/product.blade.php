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
        <section class="htc__product__area shop__page ptb--130 bg__white">
            <div class="container">
                <div class="htc__product__container">
                    <!-- Start Product MEnu -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-style-tab">
                                <div class="product-tab-list">
                                    <!-- Nav tabs -->
                                    <ul class="tab-style" role="tablist">
                                        <li class="active">
                                            <a href="#home1" data-toggle="tab">
                                                <div class="tab-menu-text">
                                                    <h4>ALL</h4>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#home2" data-toggle="tab">
                                                <div class="tab-menu-text">
                                                    <h4>COOKIES</h4>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#home3" data-toggle="tab">
                                                <div class="tab-menu-text">
                                                    <h4>BROWNIES</h4>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content another-product-style jump">
                                    <div class="tab-pane active" id="home1">
                                        <div class="row">
                                            <div class="">
                                                <?php
                                                    $products = DB::select('select * from produk');
                                                ?>
                                                @foreach($products as $product)
                                                <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                    <div class="product">
                                                        <div class="product__inner">
                                                            <div class="pro__thumb">
                                                                <a href="#">
                                                                    <img src="{{asset('images/contoh_cookies.jpg')}}" alt="product images">
                                                                </a>
                                                            </div>
                                                            <div class="product__hover__info">
                                                                <ul class="product__action">
                                                                    <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                    <li>
                                                                        <form id="addToCart-form" action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf  
                                                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                                                            <input type="hidden" value="bentar belum"  name="image">
                                                                            <input type="hidden" value="1" name="quantity">
                                                                            <a title="Add TO Cart" href="javascript:void()" onclick="document.getElementById('addToCart-form').submit();"> <span class="ti-shopping-cart"></span></a>
                                                                        </form>
                                                                    </li>
                                                                    <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__details">
                                                            <h2><a href="product-details.html">{{$product->name}}</a></h2>
                                                            <ul class="product__price">
                                                                <!-- <li class="old__price">$16.00</li> -->
                                                                <li class="new__price">{{$product->price}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="home2">
                                        <div class="row">
                                            <div class="">
                                                <?php
                                                    $products = DB::select('select * from produk where category="cookies"');
                                                ?>
                                                @foreach($products as $product)
                                                <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                    <div class="product">
                                                        <div class="product__inner">
                                                            <div class="pro__thumb">
                                                                <a href="#">
                                                                    <img src="{{asset('images/contoh_cookies.jpg')}}" alt="product images">
                                                                </a>
                                                            </div>
                                                            <div class="product__hover__info">
                                                                <ul class="product__action">
                                                                    <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                    <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                    <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__details">
                                                            <h2><a href="product-details.html">{{$product->name}}</a></h2>
                                                            <ul class="product__price">
                                                                <!-- <li class="old__price">$16.00</li> -->
                                                                <li class="new__price">{{$product->price}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="home3">
                                        <div class="row">
                                            <div class="">
                                                <?php
                                                    $products = DB::select('select * from produk where category="brownies"');
                                                ?>
                                                @foreach($products as $product)
                                                <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                    <div class="product">
                                                        <div class="product__inner">
                                                            <div class="pro__thumb">
                                                                <a href="#">
                                                                    <img src="{{asset('images/contoh_cookies.jpg')}}" alt="product images">
                                                                </a>
                                                            </div>
                                                            <div class="product__hover__info">
                                                                <ul class="product__action">
                                                                    <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                    <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                    <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__details">
                                                            <h2><a href="product-details.html">{{$product->name}}</a></h2>
                                                            <ul class="product__price">
                                                                <!-- <li class="old__price">$16.00</li> -->
                                                                <li class="new__price">{{$product->price}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- End Product MEnu -->
                    
                    <!-- Start Load More BTn -->
                    <div class="row mt--60">
                        <div class="col-md-12">
                            <div class="htc__loadmore__btn">
                                <a href="#">load more</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Load More BTn -->
                </div>
            </div>
        </section>
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