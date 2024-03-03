<?php
use Illuminate\Support\Facades\URL;
?>
<!doctype html>
    <html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{$data->title}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- CSS here -->
        <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/ticker-style.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/slicknav.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    </head>
    
    <body>
        <header>
            <!-- Header Start -->
            <div class="header-area">
                <div class="main-header ">
                    <div class="header-mid gray-bg">
                        <div class="container">
                            <div class="row d-flex align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                                    <div class="logo">
                                        <a href="{{url('/')}}"><img src="{{url('assets/img/logo/logo.png')}}" width="136" height="55" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-9">
                                    <div class="header-banner f-right ">
                                        <img src="assets/img/gallery/header_card.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom header-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                                    <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="{{url('/')}}"><img src="{{url('assets/img/logo/logo.png')}}" alt=""></a>
                                    </div>
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-md-block">
                                        <nav>                  
                                            <ul id="navigation">
                                                <li><a href="{{url('/')}}">Tranh chủ</a></li>
                                                <li><a href="{{url('category')}}">Thể loại</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>             
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="header-right f-right d-none d-lg-block">
                                        <!-- Heder social -->
                                        <ul class="header-social">    
                                            <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/?lang=vi"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                            <li> <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <!-- Search Nav -->
                                        <div class="nav-search search-switch">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-md-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
        <div id="fb-root"></div>
        <main>
            <!-- About US Start -->
            <div class="about-area2 gray-bg pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                            <div class="about-right mb-90">
                                <div class="about-img">
                                    <img src="{{url('posts')}}/{{$data->image}}" alt="">
                                </div>
                                <div class="heading-news mb-30 pt-30">
                                    <h3>{{$data->title}}</h3>
                                </div>
                                <div class="about-prea">
                                    <p class="about-pera1 mb-25">{!!$data->description!!}</p>
                                </div> 
                                <div class="social-share pt-30">
                                    <div class="section-tittle">
                                        <h3 class="mr-20">Share:</h3>
                                        <ul>
                                            <li><a href="#"><img src="{{url('assets/img/news/icon-ins.png')}}" alt=""></a></li>
                                            <li>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo URL::current(); ?>" target="_blank">
                                                    <img src="{{url('assets/img/news/icon-fb.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li><a href="#"><img src="{{url('assets/img/news/icon-tw.png')}}" alt=""></a></li>
                                            <li><a href="#"><img src="{{url('assets/img/news/icon-yo.png')}}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- From -->
                            <div class="row">
                                <div class="col-lg-8">
                                    <form class="form-contact contact_form mb-80" action="{{url('addComment')}}" method="post" novalidate="novalidate">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" name="pid" value="{{$data->pid}}" hidden>
                                                    <textarea class="form-control w-100 error" name="cmt" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập bình luận'" placeholder="Nhập bình luận"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tên'" placeholder="Nhập tên">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập Email'" placeholder="Nhập Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="button button-contactForm boxed-btn boxed-btn2">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Comment -->
                            <div class="col-sm-12">
                                <h3 style="color: black;">Bình luận</h3>
                                @foreach($cmt as $cmt)
                                <div class="col-md-12" style="border-bottom: 1px solid black;">
                                    <strong>{{$cmt->name}}</strong>
                                    <p>{{$cmt->cmt}}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>                
                        <div class="col-lg-4">
                            <!-- Most Recent Area -->
                            @if(is_countable($random) && count($random) > 0)
                            <div class="most-recent-area">
                                <!-- Section Tittle -->
                                <div class="small-tittle mb-20">
                                    <h4>Có thể bạn quan tâm</h4>
                                </div>
                                <!-- Details -->
                                @foreach($random as $key=>$rand)
                                @if($key == 0)
                                <div class="most-recent mb-40">
                                    <div class="most-recent-img">
                                        <img src="{{url('posts')}}/{{$rand->image}}" width="350" height="240.69" alt="">
                                        <div class="most-recent-cap">
                                            <span class="bgbeg">{{$rand->category_id}}</span>
                                            <h4><a href="{{url('article')}}/{{$rand->slug}}">{{$rand->title}}</a></h4>
                                            <p>{{$rand->author}}  |  {{$rand->created_at}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                <!-- Single -->
                                @foreach($random as $key=>$rand)
                                @if($key > 0 && $key < 3)
                                <div class="most-recent-single">
                                    <div class="most-recent-images">
                                        <img src="{{url('posts')}}/{{$rand->image}}" width="85" height="79" alt="">
                                    </div>
                                    <div class="most-recent-capt">
                                        <h4><a href="{{url('article')}}/{{$rand->slug}}">{{$rand->title}}</a></h4>
                                        <p>{{$rand->author}}  |  {{$rand->created_at}}</p>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- About US End -->
        </main>
        <footer>
            <!-- Footer Start-->
            <div class="footer-main footer-bg">
                <!-- footer-bottom aera -->
                <div class="footer-bottom-area footer-bg">
                    <div class="container">
                        <div class="footer-border">
                            <div class="row d-flex align-items-center">
                                <div class="col-xl-12 ">
                                    <div class="footer-copy-right text-center">
                                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </footer>
        <!-- Search model Begin -->
        <div class="search-model-box">
            <div class="d-flex align-items-center h-100 justify-content-center">
                <div class="search-close-btn">+</div>
                <form class="search-model-form" action="{{url('search')}}" method="GET">
                    <input type="text" name="key" id="search-input" placeholder="Searching key.....">
                </form>
            </div>
        </div>
        <!-- Search model end -->

        <!-- JS here -->

        <script src="{{url('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{url('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{url('assets/js/popper.min.js')}}"></script>
        <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{url('assets/js/jquery.slicknav.min.js')}}"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{url('assets/js/slick.min.js')}}"></script>
        <!-- Date Picker -->
        <script src="{{url('assets/js/gijgo.min.js')}}"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="{{url('assets/js/wow.min.js')}}"></script>
        <script src="{{url('assets/js/animated.headline.js')}}"></script>
        <script src="{{url('assets/js/jquery.magnific-popup.js')}}"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="{{url('assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{url('assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{url('assets/js/jquery.sticky.js')}}"></script>

        <!-- contact js -->
        <script src="{{url('assets/js/contact.js')}}"></script>
        <script src="{{url('assets/js/jquery.form.js')}}"></script>
        <script src="{{url('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{url('assets/js/mail-script.js')}}"></script>
        <script src="{{url('assets/js/jquery.ajaxchimp.min.js')}}"></script>

        <!-- Jquery Plugins, main Jquery -->    
        <script src="{{url('assets/js/plugins.js')}}"></script>
        <script src="{{url('assets/js/main.js')}}"></script>

        <!-- Share -->
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="HG09rYv4"></script>
    </body>
    </html>