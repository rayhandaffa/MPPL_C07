<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CokiesDessert</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
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
        @include('partial.topbar')
        <!-- Start Feature Product -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Profil</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="{{route('home')}}">Beranda</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Profil</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <section class="htc__contact__area ptb--120 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                        <div class="htc__contact__container">
                            <h2 style="text-align:center; margin: 10px">Edit Profil</h2>
                            
                            <?php
                                $user = Auth::user();
                                // dd($user);
                            ?>
                            <form  action="{{ route('user.update')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="name" value="{{Auth::user()->name}}">
                                        <input type="text" name="handphone" value="{{Auth::user()->handphone}}">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <input type="email" name="email" value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="address" value="{{Auth::user()->address}}">{{Auth::user()->address}}</textarea>
                                    </div>
                                </div>
                                <!-- <div class="contact-btn"> -->
                                    <button type="submit" class="fv-btn">Edit</button>
                                <!-- </div> -->
                            </form>
                        </div> 
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <h2 style="text-align:center; margin: 10px">Riwayat Pesanan</h2>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <ul class="product__deatils__tab mb--60" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#description" role="tab" data-toggle="tab">Menunggu Pembayaran</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#sheet" role="tab" data-toggle="tab">Disiapkan</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#reviews" role="tab" data-toggle="tab">Dikirim</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#selesai" role="tab" data-toggle="tab">Selesai</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product__details__tab__content">
                                    <!-- Start Single Content -->
                                    <div role="tabpanel" id="description" class="product__tab__content fade in active">
                                        <?php
                                            $orders = DB::table('orders')->whereIn('status', ['menunggu_pembayaran', 'menunggu_konfirmasi'])
                                                                        ->where('id_user', Auth::user()->id)  
                                                                        ->get();
                                        ?>
                                        <div class="accordion" id="myAccordion">
                                            @foreach($orders as $order)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{$order->id}}">No Pesanan. {{$order->id}} <br> {{$order->created_at}} <br>{{$order->total}}</button>									
                                                </h2>
                                                <div id="collapse-{{$order->id}}" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                                <?php
                                                    $order_details = DB::select("select * from order_details where id_order = $order->id");
                                                ?>
                                                    <ul class="list-group mb-0" >
                                                        @foreach($order_details as $detail)
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <?php
                                                                $product_name = DB::table('products')->where('id', $detail->id_product)->first()->name;
                                                                $product_price = DB::table('products')->where('id', $detail->id_product)->first()->price;
                                                            ?>
                                                            
                                                            {{$detail->quantity}}x {{$product_name}}
                                                            <span class="badge badge-primary badge-pill">{{$detail->quantity * $product_price }}</span>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                    <p style="margin-left: 15px">Metode Pembayaran : {{$order->payment_method}}</p>
                                                    @if($order->status == "menunggu_pembayaran")
                                                    <form action="{{route('order.update.status')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="status" value="menunggu_pembayaran">
                                                        <input type="hidden" name="id" value="{{$order->id}}">
                                                        <div class="form-group" style="margin-left:15px">
                                                            <label for="exampleFormControlFile1">Unggah bukti pembayaran</label>
                                                            <input type="file" class="form-control-file" name="proof" id="exampleFormControlFile1">
                                                        </div>
                                                        <!-- <input type="submit" value="submit" />  -->
                                                        <div class="contact-btn" style="margin-left:15px">
                                                            <button type="submit">KIRIM</button>
                                                        </div>
                                                    </form>
                                                    @else
                                                    <p style="margin-left: 15px">Menunggu Konfirmasi Pemabyaran dari Toko</p>
                                                    @endif
                                                </div>
                                                
                                            </div>
                                            @endforeach
                                        
                                        </div>
                                    </div>
                                    <!-- End Single Content -->
                                    <!-- Start Single Content -->
                                    <div role="tabpanel" id="sheet" class="product__tab__content fade">
                                        <div class="pro__feature">
                                                <h2 class="title__6">Data sheet</h2>
                                                <ul class="feature__list">
                                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                                </ul>
                                            </div>
                                    </div>
                                    <!-- End Single Content -->
                                    <!-- Start Single Content -->
                                    <div role="tabpanel" id="reviews" class="product__tab__content fade">
                                        <div class="review__address__inner">
                                            <!-- Start Single Review -->
                                            <div class="pro__review">
                                                <div class="review__thumb">
                                                    <img src="images/review/1.jpg" alt="review images">
                                                </div>
                                                <div class="review__details">
                                                    <div class="review__info">
                                                        <h4><a href="#">Gerald Barnes</a></h4>
                                                        <ul class="rating">
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                                        </ul>
                                                        <div class="rating__send">
                                                            <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="review__date">
                                                        <span>27 Jun, 2016 at 2:30pm</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                                </div>
                                            </div>
                                            <!-- End Single Review -->
                                            <!-- Start Single Review -->
                                            <div class="pro__review ans">
                                                <div class="review__thumb">
                                                    <img src="images/review/2.jpg" alt="review images">
                                                </div>
                                                <div class="review__details">
                                                    <div class="review__info">
                                                        <h4><a href="#">Gerald Barnes</a></h4>
                                                        <ul class="rating">
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                                        </ul>
                                                        <div class="rating__send">
                                                            <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="review__date">
                                                        <span>27 Jun, 2016 at 2:30pm</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                                </div>
                                            </div>
                                            <!-- End Single Review -->
                                        </div>
                                        <!-- Start RAting Area -->
                                        <div class="rating__wrap">
                                            <h2 class="rating-title">Write  A review</h2>
                                            <h4 class="rating-title-2">Your Rating</h4>
                                            <div class="rating__list">
                                                <!-- Start Single List -->
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                </ul>
                                                <!-- End Single List -->
                                                <!-- Start Single List -->
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                </ul>
                                                <!-- End Single List -->
                                                <!-- Start Single List -->
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                </ul>
                                                <!-- End Single List -->
                                                <!-- Start Single List -->
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                </ul>
                                                <!-- End Single List -->
                                                <!-- Start Single List -->
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                </ul>
                                                <!-- End Single List -->
                                            </div>
                                        </div>
                                        <!-- End RAting Area -->
                                        <div class="review__box">
                                            <form id="review-form">
                                                <div class="single-review-form">
                                                    <div class="review-box name">
                                                        <input type="text" placeholder="Type your name">
                                                        <input type="email" placeholder="Type your email">
                                                    </div>
                                                </div>
                                                <div class="single-review-form">
                                                    <div class="review-box message">
                                                        <textarea placeholder="Write your review"></textarea>
                                                    </div>
                                                </div>
                                                <div class="review-btn">
                                                    <a class="fv-btn" href="#">submit review</a>
                                                </div>
                                            </form>                                
                                        </div>
                                    </div>
                                    <!-- End Single Content -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
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