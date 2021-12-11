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
    <style>
        .pro__dtl__btn li.buy__now__btn button {
            color: #4b4b4b;
            font-size: 14px;
            text-transform: uppercase;
            width: 175px;
            transition: 0.3s;
        }
        .pro__dtl__btn li.buy__now__btn button:hover {
            color: #fff;
            background: #ff4136;
            border: 1px solid #ff4136;
        }
    </style>
    <!-- Modernizr JS -->
    <script src="{{ asset('template/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!-- Star rating -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
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
                                <h2 class="bradcaump-title">Detail Produk</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="{{route('home')}}">Beranda</a>
                                  <span class="brd-separetor">/</span>
                                  <a class="breadcrumb-item" href="{{route('product')}}">Produk</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Detail Produk</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Details -->
        <section class="htc__product__details pt--120 pb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="product__details__container">
                            
                            <div class="product__big__images">
                                <div class="portfolio-full-image tab-content">
                                    <img src="{{asset('product/' .$product->photo)}}" alt="{{$product->name}}" width="500" height="500">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                        <div class="htc__product__details__inner">
                            <div class="pro__detl__title">
                                <h2>{{$product->name}}</h2>
                            </div>
                           
                            <div class="pro__details">
                                <p>{{$product->description}}</p>
                            </div>
                            <ul class="pro__dtl__prize">
                                <!-- <li class="old__prize">$15.21</li> -->
                                <li>Rp. {{$product->price}}</li>
                            </ul>
                            
                            <div class="product-action-wrap">
                                <div class="prodict-statas"><span>Jumlah :</span></div>
                                <div class="product-quantity">
                                    <form id="addToCart-form" action="{{ route('cart.store') }}" method="POST" >
                                    @csrf  
                                        <!-- <input type="reset"> -->
                                        <input type="hidden" value="{{ $product->photo }}" name="image">
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                        <!-- <input type="hidden" value="bentar belum"  name="image"> -->
                                        <input class="cart-plus-minus-box" type="text" name="quantity" value="1">
                                        
                                </div>
                            </div>
                            <ul class="pro__dtl__btn">
                                <li class="buy__now__btn"><button type="submit" style="padding: 0px;border: none;">+ keranjang</button></li>
                                    </form>
                            </ul>
                            <div class="pro__social__share">
                                <h2>Bagikan :</h2>
                                <ul class="pro__soaial__link">
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Details -->
        <!-- Start Product tab -->
        <section class="htc__product__details__tab bg__white pb--120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <ul class="product__deatils__tab mb--60" role="tablist">
                            
                            <li role="presentation">
                                <a href="#reviews" role="tab" data-toggle="tab">Ulasan</a>
                            </li>
                            <li role="presentation">
                                <a href="#questions" role="tab" data-toggle="tab">Pertanyaan</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product__details__tab__content">
                            <div role="tabpanel" id="reviews" class="product__tab__content fade in active">
                                <!-- Start Single Content -->
                                <div class="review__address__inner">
                                    <?php
                                        $reviews = DB::table('reviews')->where('id_product', $product->id)->get();
                                        //  dd(count($reviews));
                                    ?>
                                    @if(count($reviews) != 0)
                                        <!-- Start Single Review -->
                                        @foreach($reviews as $review)
                                        <div class="pro__review m-4" >
                                            <!-- <div class="review__thumb">
                                                <img src="images/review/1.jpg" alt="review images">
                                            </div> -->
                                            <div class="review__details">
                                                <div class="review__info">
                                                    <h4>{{$review->name}}</h4>
                                                    <ul class="rating">
                                                        <li><h5>{{$review->rating}}/5</h5></li>
                                                        <li><i class="zmdi zmdi-star"></i></li>
                                                        <!-- <li><i class="zmdi zmdi-star"></i></li>
                                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                                        <li><i class="zmdi zmdi-star-half"></i></li> -->
                                                    </ul>
                                                    <!-- <div class="rating__send">
                                                        <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </div> -->
                                                </div>
                                                <div class="review__date">
                                                    <span>{{$review->email}}</span>
                                                </div>
                                                <p>{{$review->description}}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- End Single Review -->
                                    @else
                                        <h4>Belum ada ulasan</h4>
                                    @endif
                                </div>
                                <!-- Start RAting Area -->
                                <h2>Tulis Ulasan</h2>
                                <div class="rating__wrap">
                                    <form action="{{ route('product.review.store') }}" method="post">
                                        @csrf
                                        <label for="ratinginput" class="control-label">Berikan bintang untuk produk ini:</label>
                                        <input id="ratinginput" name="rating" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="2">
                                        <!-- <input type="submit" name="Submit"/> -->
                                </div>
                                <!-- End RAting Area -->
                                <div class="review__box">
                                        <input type="hidden" value="{{$product->id}}" name="id">
                                        <div class="single-review-form">
                                            <div class="review-box name">
                                                <input type="text" name="name" placeholder="Masukkan Nama">
                                                <input type="email" name="email" placeholder="Masukkan Email">
                                            </div>
                                        </div>
                                        <div class="single-review-form">
                                            <div class="review-box message">
                                                <textarea placeholder="Masukkan ulasan Anda" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="review-btn">
                                            <button class="btn btn-danger" type="submit" >Kirim</button>
                                        </div>
                                                                   
                                </div>
                                    </form>
                            </div>
                            <!-- End Single Content -->
                            <div role="tabpanel" id="questions" class="product__tab__content fade in active">
                                                             
                                <h2>Tanyakan mengenai produk ini</h2>
                                
                                    <form action="{{ route('product.question.store') }}" method="post">
                                        @csrf
                                <div class="review__box">
                                        <input type="hidden" value="{{$product->id}}" name="id">
                                        <div class="single-review-form">
                                            <div class="review-box name">
                                                <input type="text" name="name" placeholder="Masukkan Nama">
                                                <input type="email" name="email" placeholder="Masukkan Email">
                                            </div>
                                        </div>
                                        <div class="single-review-form">
                                            <div class="review-box message">
                                                <textarea placeholder="Masukkan pertanyaan Anda" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="review-btn">
                                            <button class="btn btn-danger" type="submit" >Kirim</button>
                                        </div>
                                                                   
                                </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->
        
        
        <!-- Start Footer Area -->
        @include('partial.footer')
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->
   
    <!-- Placed js at the end of the document so the pages load faster -->
    <script>
        $("#ratinginput").rating();
    </script>
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