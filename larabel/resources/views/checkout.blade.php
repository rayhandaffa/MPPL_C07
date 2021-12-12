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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
       
        @include('partial.topbar')
      
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
                                            <th class="product-thumbnail">Gambar</th>
                                            <th class="product-name">Produk</th>
                                            <th class="product-price">Harga</th>
                                            <th class="product-quantity">Jumlah</th>
                                            <th class="product-subtotal">Total</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                           $cartItems = \Cart::getContent();
                                        ?>
                                        @foreach ($cartItems as $item)
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="{{asset('product/' .$item->attributes->image)}}" alt="{{$item->attributes->image}}" /></a></td>
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
                                            <h2 class="section-title-3">Rincian Pesanan</h2>
                                            <form id="addOrder-form" action="{{ route('order.store') }}" method="POST" >
                                            @csrf  
                                            @if(Auth::user() != null)
                                            <div class="checkout-form-inner">
                                                <div class="single-checkout-box" >
                                                    <input style="width:100%;" name="name" type="text" placeholder="Nama*" value="{{Auth::user()->name}}">
                                                </div>
                                                <div class="single-checkout-box">
                                                    <input name="email" type="email" placeholder="Email*" value="{{Auth::user()->email}}">
                                                    <input name="handphone" type="text" placeholder="Nomor Handphone*" value="{{Auth::user()->handphone}}">
                                                </div>
                                                <div class="single-checkout-box">
                                                    <textarea name="address" placeholder="Alamat*" value="{{Auth::user()->address}}">{{Auth::user()->address}}</textarea>
                                                </div>
                                                <input type="hidden" name=user_id value="{{Auth::user()->id}}">
                                            </div>
                                            @else
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
                                                <input type="hidden" name=user_id value="9999">
                                            </div>
                                            @endif
                                        </div>
                                        <!-- End Checkbox Area -->
                                        <!-- Start Payment Box -->
                                        <div class="payment-form" style="width:50%;">
                                            <h2 class="section-title-3" style="padding:10px;">metode pembayaran</h2>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur kgjhyt</p> -->
                                            <ul class="list-group list-group-flush" style="padding-left:30px;">
                                                <li class="list-group-item">
                                                <!-- Default checked -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="payment_method" value="Ovo" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            OVO
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                <!-- Default checked -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="payment_method" value="Gopay" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            GOPAY
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                <!-- Default checked -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="payment_method" value ="Bank BCA" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Transfer Bank BCA
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
                                                <h3>Voucher</h3>
                                                <p>Masukkan Kode Voucher</p>
                                                <input type="text" placeholder="Kode Voucher" />
                                                <input type="submit" value="Gunakan Kode" />
                                            </div>

                                            
                                        </div>
                                        
                                    </div>
                                    <div class="cart_totals">
                                        <h2>Total Pesanan</h2>
                                        <table>
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">{{ Cart::getTotal() }}</span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Pengiriman</th>
                                                    <td>
                                                        <ul id="shipping_method">
                                                            <li>
                                                                <input type="radio" name="shipping_method" value="Delivery"/> 
                                                                <label>
                                                                    Tarif Tetap (JABODETABEK) <br> <span class="amount">20000</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" name="shipping_method" value="Pickup Store"/> 
                                                                <label>
                                                                    Ambil di toko <br> <span class="amount">gratis</span>
                                                                </label>
                                                            </li>
                                                            <li></li>
                                                        </ul>
                                                        <!-- <p><a class="shipping-calculator-button" href="#">Calculate Shipping</a></p> -->
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <input type="hidden" name="total" value="{{ Cart::getTotal()+20000 }}" />
                                                        <strong><span class="amount">{{ Cart::getTotal()+20000 }}</span></strong>
                                                    </td>
                                                </tr>                                           
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            
                                                <button class="button-35" role="button" class="tombol" type="submit">Lanjutkan Pembayaran</button>
                                                
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