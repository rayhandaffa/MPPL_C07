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
        @include('partial.topbar')
           
        <!-- Start Feature Product -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Produk</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="{{route('home')}}">Beranda</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Produk</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
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
                                    <ul class="tab-style" role="tablist"  style="justify-content: center; display: flex;">
                                        <li class="active">
                                            <a href="#home1" data-toggle="tab">
                                                <div class="tab-menu-text">
                                                    <h4>SEMUA PRODUK</h4>
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
                                    <!-- tab all product -->
                                    <div class="tab-pane active" id="home1">
                                        <div class="row">
                                            <div class="">
                                                <?php
                                                    $products = DB::select('select * from products');
                                                ?>
                                                @foreach($products as $product)
                                                <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                    <div class="product">
                                                        <div class="product__inner">
                                                            <div class="pro__thumb">
                                                                <a href="{{ route('product.details.open', ['id' => $product->id]) }}">
                                                                    <img src="{{asset('product/' .$product->photo)}}" alt="{{$product->name}}">
                                                                    <!-- <img src="{{asset('images/contoh_cookies.jpg')}}" alt="product images"> -->
                                                                </a>
                                                            </div>
                                                            <div class="product__hover__info">
                                                                <ul class="product__action">
                                                                    <li><a title="Product Details" href="{{ route('product.details.open', ['id' => $product->id]) }}"><span class="ti-info-alt"></span></a></li>
                                                                    <li>
                                                                        <form id="addToCart-form" action="{{ route('cart.store') }}" method="POST" >
                                                                        @csrf  
                                                                            <!-- <input type="reset"> -->
                                                                            <input type="hidden" value="{{ $product->photo }}" name="image">
                                                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                                                            <!-- <input type="hidden" value="bentar belum"  name="image"> -->
                                                                            <input type="hidden" value="1" name="quantity">
                                                                            <!-- <a href="javascript:void()" onclick="document.getElementById('addToCart-form').submit();"><span class="ti-shopping-cart"></span></a> -->
                                                                            <button style=" background: none; padding: 0px;border: none;"> <span class="ti-shopping-cart"></span> </button>
                                                                        </form>
                                                                    </li>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__details">
                                                            <h2><a href="{{ route('product.details.open', ['id' => $product->id]) }}">{{$product->name}}</a></h2>
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
                                    <!-- tab cookies product -->
                                    <div class="tab-pane" id="home2">
                                        <div class="row">
                                            <div class="">
                                                <?php
                                                    $products = DB::select('select * from products where category="cookies"');
                                                ?>
                                                @foreach($products as $product)
                                                <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                    <div class="product">
                                                        <div class="product__inner">
                                                            <div class="pro__thumb">
                                                                <a href="{{ route('product.details.open', ['id' => $product->id]) }}">
                                                                    <img src="{{asset('product/' .$product->photo)}}" alt="{{$product->name}}">
                                                                    <!-- <img src="{{asset('images/contoh_cookies.jpg')}}" alt="product images"> -->
                                                                </a>
                                                            </div>
                                                            <div class="product__hover__info">
                                                                <ul class="product__action">
                                                                    <li><a title="Product Details" href="{{ route('product.details.open', ['id' => $product->id]) }}"><span class="ti-info-alt"></span></a></li>
                                                                    <li>
                                                                        <form id="addToCart-form" action="{{ route('cart.store') }}" method="POST" >
                                                                        @csrf  
                                                                            <!-- <input type="reset"> -->
                                                                            <input type="hidden" value="{{ $product->photo }}" name="image">
                                                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                                                            <!-- <input type="hidden" value="bentar belum"  name="image"> -->
                                                                            <input type="hidden" value="1" name="quantity">
                                                                            <!-- <a href="javascript:void()" onclick="document.getElementById('addToCart-form').submit();"><span class="ti-shopping-cart"></span></a> -->
                                                                            <button style=" background: none; padding: 0px;border: none;"> <span class="ti-shopping-cart"></span> </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__details">
                                                            <h2><a href="{{ route('product.details.open', ['id' => $product->id]) }}">{{$product->name}}</a></h2>
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
                                    <!-- tab brownies product -->
                                    <div class="tab-pane" id="home3">
                                        <div class="row">
                                            <div class="">
                                                <?php
                                                    $products = DB::select('select * from products where category="brownies"');
                                                ?>
                                                @foreach($products as $product)
                                                <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                    <div class="product">
                                                        <div class="product__inner">
                                                            <div class="pro__thumb">
                                                                <a href="{{ route('product.details.open', ['id' => $product->id]) }}">
                                                                    <img src="{{asset('product/' .$product->photo)}}" alt="{{$product->name}}">
                                                                    <!-- <img src="{{asset('images/contoh_cookies.jpg')}}" alt="product images"> -->
                                                                </a>
                                                            </div>
                                                            <div class="product__hover__info">
                                                                <ul class="product__action">
                                                                    <li><a title="Product Details" href="{{ route('product.details.open', ['id' => $product->id]) }}"><span class="ti-info-alt"></span></a></li>
                                                                    <li>
                                                                        <form id="addToCart-form" action="{{ route('cart.store') }}" method="POST" >
                                                                        @csrf  
                                                                            <!-- <input type="reset"> -->
                                                                            <input type="hidden" value="{{ $product->photo }}" name="image">
                                                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                                                            <!-- <input type="hidden" value="bentar belum"  name="image"> -->
                                                                            <input type="hidden" value="1" name="quantity">
                                                                            <!-- <a href="javascript:void()" onclick="document.getElementById('addToCart-form').submit();"><span class="ti-shopping-cart"></span></a> -->
                                                                            <button style=" background: none; padding: 0px;border: none;"> <span class="ti-shopping-cart"></span> </button>
                                                                        </form>
                                                                    </li>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__details">
                                                            <h2><a href="{{ route('product.details.open', ['id' => $product->id]) }}">{{$product->name}}</a></h2>
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
                    
                </div>
            </div>
        </section>
        <!-- Start Footer Area -->
        @include('partial.footer')
        <!-- End Footer Area -->
    </div>

   
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