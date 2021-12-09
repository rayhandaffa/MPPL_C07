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


    <style>

        .button-35 {
          align-items: center;
          background-color: #fff;
          border-radius: 12px;
          box-shadow: transparent 0 0 0 3px,rgba(18, 18, 18, .1) 0 6px 20px;
          box-sizing: border-box;
          color: #121212;
          cursor: pointer;
          display: inline-flex;
          flex: 1 1 auto;
          font-family: Inter,sans-serif;
          font-size: 1.2rem;
          font-weight: 700;
          justify-content: center;
          line-height: 1;
          margin: 0;
          outline: none;
          padding: 1rem 1.2rem;
          text-align: center;
          text-decoration: none;
          transition: box-shadow .2s,-webkit-box-shadow .2s;
          white-space: nowrap;
          border: 0;
          user-select: none;
          -webkit-user-select: none;
          touch-action: manipulation;
        }
        
        .button-35:hover {
          box-shadow: #121212 0 0 0 3px, transparent 0 0 0 0;
        }
            </style>
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
                                    <button type="submit" class="button-35" role="button">Edit</button>
                                    
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
                                                    <p style="margin-left: 15px">Menunggu Konfirmasi Pembayaran dari Toko</p>
                                                    @endif
                                                </div>
                                                
                                            </div>
                                            @endforeach
                                        
                                        </div>
                                    </div>
                                    <!-- End Single Content -->
                                    <!-- Start Single Content -->
                                    <div role="tabpanel" id="sheet" class="product__tab__content fade">
                                        <?php
                                            $orders = DB::table('orders')->where('status', 'disiapkan')
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
                                                    
                                                </div>
                                                
                                            </div>
                                            @endforeach
                                        
                                        </div>
                                    </div>
                                    <!-- End Single Content -->
                                    <!-- Start Single Content -->
                                    <div role="tabpanel" id="reviews" class="product__tab__content fade">
                                        <?php
                                            $orders = DB::table('orders')->where('status', 'dikirim')
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
                                                   
                                                </div>
                                                
                                            </div>
                                            @endforeach
                                        
                                        </div>
                                    </div>
                                    <!-- End Single Content -->
                                    <!-- Start Single Content -->
                                    <div role="tabpanel" id="selesai" class="product__tab__content fade">
                                        <?php
                                            $orders = DB::table('orders')->where('status', 'selesai')
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
                                                    
                                                </div>
                                                
                                            </div>
                                            @endforeach
                                        
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
        @include('partial.footer')
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->
   
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