<header id="header" class="htc-header header--3 bg__white">
    <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header" style="background-color:#f6efe7">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('images/logo_kecil.jpg')}}" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- Start MAinmenu Ares -->
                <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                    <nav class="mainmenu__nav hidden-xs hidden-sm">
                        <ul class="main__menu">
                            <li class="drop"><a href="{{route('home')}}">Beranda</a></li>
                            <li class="drop"><a href="{{route('product')}}">Produk</a></li>
                            <li class="drop"><a href="#">Lainnya</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('payment.confirmation')}}">Konfirmasi Pembayaran</a></li>
                                    <li><a href="{{route('order.check')}}">Cek Status Pesanan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                                        
                </div>
                <!-- End MAinmenu Ares -->
                <div class="col-md-2 col-sm-4 col-xs-3">  
                    <ul class="menu-extra">
                        <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                        <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                        @if(Auth::user() != null)
                        <li><a href="{{route('profile')}}"><span class="ti-user"></span></a></li>
                        @else
                        <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
</header>

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
                   
                        <img src="{{asset('images/logo_kecil.jpg')}}" alt="logo">
                    
                </div>
                <p>Gabung menjadi member untuk mendapatkan potongan harga di setiap pembeliannya!</p>
            </div>
            <!-- <ul class="sidebar__thumd"> -->
            <div class="wc-proceed-to-checkout" style="margin-left: 50px">
                <a href="{{route('login-register')}}" style="margin-top:0;">DAFTAR MEMBER SEKARANG</a>
            </div>
                <p style="margin-left: 90px" >Sudah terdaftar? <a href="{{route('login-register')}}">Masuk</a></p>
                
            <!-- </ul> -->
            <!-- <div class="offset__widget">
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
            </div> -->
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
                <?php
                    $cartItems = \Cart::getContent();
                ?>
                @foreach($cartItems as $item)
                <div class="shp__single__product">
                    <div class="shp__pro__thumb">
                        <a href="#">
                            <img src="{{asset('product/' .$item->attributes->image)}}" alt="{{$item->attributes->image}}">
                        </a>
                    </div>
                    <div class="shp__pro__details">
                        <h2><a href="product-details.html">{{$item->name}}</a></h2>
                        <span class="quantity">QTY: {{$item->quantity}}</span>
                        <span class="shp__price">{{$item->quantity * $item->price}}</span>
                    </div>
                    <div class="remove__btn">
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <button style=" background: none; padding: 0px;border: none;" class="px-4 py-2 text-white bg-red-600"><i class="zmdi zmdi-close"></i></button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
            <ul class="shoping__total">
                <li class="subtotal">Subtotal:</li>
                <li class="total__price">Rp. {{ Cart::getTotal() }}</li>
            </ul>
            <ul class="shopping__btn">
                <li><a href="{{route('cart.list')}}">Lihat Keranjang</a></li>
                <li class="shp__checkout"><a href="{{route('checkout')}}">Lanjutkan Checkout</a></li>
            </ul>
        </div>
    </div>
    <!-- End Cart Panel -->
</div>
<!-- End Offset Wrapper -->