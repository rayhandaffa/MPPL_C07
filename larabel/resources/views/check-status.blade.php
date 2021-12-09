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
        <section class="categories-slider-area bg__white">
            <div class="container">
                <div class="row">
                    <!-- Start Left Feature -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-bottom: 20px">
                        <div class="htc__contact__container">
                            
                            <div class="contact-title">
                                <h2 class="contact__title">Cek Status Pesanan</h2>
                            </div>
                            <form action="{{route('order.check.status')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="single-contact-form">
                                    <div class="contact-box subject" style="width:25%">
                                        <label for="nomorpesanan">Nomor Pesanan</label>
                                        <input id="nomorpesanan" type="text" name="id" placeholder="Masukkan nomor pesanan">
                                    </div>
                                </div>
                                
                                <!-- <input type="submit" value="submit" />  -->
                                <div class="contact-btn">
                                    <button type="submit" class="fv-btn">KIRIM</button>
                                </div>
                            </form>
                        </div> 
                       
                    </div>
                    @if($order != null)
                    
                        
                            <div style="margin-top: 20px">
                                <h2><strong>No Pesanan. {{$order->id}}</strong></h2>
                                <p class="note-desc">Status Pesanan : {{$order->status}}</p>
                                <p class="note-desc">Total Pesanan : {{$order->total}}</p>
                                <?php
                                    $order_details = DB::select("select * from order_details where id_order = $order->id");
                                ?>

                                <ul class="important-note">
                                @foreach($order_details as $detail)
                                <?php
                                    $product_name = DB::table('products')->where('id', $detail->id_product)->first()->name;
                                    $product_price = DB::table('products')->where('id', $detail->id_product)->first()->price;
                                ?>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-caret-right"></i>{{$detail->quantity}}x {{$product_name}}</a>
                                        <span class="badge badge-primary badge-pill">{{$detail->quantity * $product_price }}</span>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                            
                        
                    @endif
                    <!-- End Left Feature -->
                </div>
            </div>
        </section>
        <!-- End Feature Product -->
       
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