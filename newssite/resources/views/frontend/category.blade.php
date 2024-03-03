<!doctype html>
    <html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>News Online</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        
        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/ticker-style.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
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
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom header-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                                    <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="{{url('/')}}"><img src="{{url('assets/img/logo/logo.png')}}" width="136" height="55" alt=""></a>
                                    </div>
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-md-block">
                                        <nav>                  
                                            <ul id="navigation">
                                                <li><a href="{{url('/')}}">Trang chủ</a></li>
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
        <main>
            <!-- About US Start -->
            <div class="about-area2 gray-bg pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="whats-news-wrapper">
                                <!-- Heading & Nav Button -->
                                <div class="row justify-content-between align-items-end mb-15">
                                    <div class="col-xl-4">
                                        <div class="section-tittle mb-30">
                                            <h3>Tin mới</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-md-9">
                                        <div class="properties__button">
                                            <!--Nav Button  -->                                            
                                            <nav>                                                 
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-life-tab" data-toggle="tab" href="#nav-life" role="tab" aria-controls="nav-life" aria-selected="true">Đời sống</a>
                                                    <a class="nav-item nav-link" id="nav-travel-tab" data-toggle="tab" href="#nav-travel" role="tab" aria-controls="nav-travel" aria-selected="false">Du lịch</a>
                                                    <a class="nav-item nav-link" id="nav-world-tab" data-toggle="tab" href="#nav-world" role="tab" aria-controls="nav-world" aria-selected="false">Thế giới</a>
                                                    <a class="nav-item nav-link" id="nav-sport-tab" data-toggle="tab" href="#nav-sport" role="tab" aria-controls="nav-sport" aria-selected="false">Thể thao</a>
                                                    <a class="nav-item nav-link" id="nav-tech" data-toggle="tab" href="#nav-nav-tech" role="tab" aria-controls="nav-tech" aria-selected="false">Công nghệ</a>
                                                </div>
                                            </nav>
                                            <!--End Nav Button  -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab content -->
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Nav Card -->
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- card one -->
                                            <div class="tab-pane fade show active" id="nav-life" role="tabpanel" aria-labelledby="nav-life-tab">       
                                                <div class="row">
                                                    @if(is_countable($life) && count($life) > 0)
                                                    @foreach($life as $lf)
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="whats-news-single mb-40 mb-40">
                                                            <div class="whates-img">
                                                                <img src="{{url('posts')}}/{{$lf->image}}" width="320" height="217.77" alt="">
                                                            </div>
                                                            <div class="whates-caption whates-caption2">
                                                                <h4><a href="{{url('article')}}/{{$lf->slug}}">{{$lf->title}}</a></h4>
                                                                <span>bởi {{$lf->author}}   -   {{$lf->created_at}}</span>
                                                                <p>{!! substr($lf->description,0,200) !!}...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- Card two -->
                                            <div class="tab-pane fade" id="nav-travel" role="tabpanel" aria-labelledby="nav-travel-tab">
                                                <div class="row">
                                                    @if(is_countable($travel) && count($travel) > 0)
                                                    @foreach($travel as $t)
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="whats-news-single mb-40 mb-40">
                                                            <div class="whates-img">
                                                                <img src="{{url('posts')}}/{{$t->image}}" width="320" height="217.77" alt="">
                                                            </div>
                                                            <div class="whates-caption whates-caption2">
                                                                <h4><a href="{{url('article')}}/{{$t->slug}}">{{$t->title}}</a></h4>
                                                                <span>bởi {{$t->author}}   -   {{$t->created_at}}</span>
                                                                <p>{!! substr($t->description,0,200) !!}...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- Card three -->
                                            <div class="tab-pane fade" id="nav-world" role="tabpanel" aria-labelledby="nav-world-tab">
                                                <div class="row">
                                                    @if(is_countable($world) && count($world) > 0)
                                                    @foreach($world as $w)
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="whats-news-single mb-40 mb-40">
                                                            <div class="whates-img">
                                                                <img src="{{url('posts')}}/{{$w->image}}" width="320" height="217.77" alt="">
                                                            </div>
                                                            <div class="whates-caption whates-caption2">
                                                                <h4><a href="{{url('article')}}/{{$w->slug}}">{{$w->title}}</a></h4>
                                                                <span>bởi {{$w->author}}   -   {{$w->created_at}}</span>
                                                                <p>{!! substr($w->description,0,200) !!}...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- card fure -->
                                            <div class="tab-pane fade" id="nav-sport" role="tabpanel" aria-labelledby="nav-sport-tab">
                                                <div class="row">
                                                    @if(is_countable($sport) && count($sport) > 0)
                                                    @foreach($sport as $s)
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="whats-news-single mb-40 mb-40">
                                                            <div class="whates-img">
                                                                <img src="{{url('posts')}}/{{$s->image}}" width="320" height="217.77" alt="">
                                                            </div>
                                                            <div class="whates-caption whates-caption2">
                                                                <h4><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h4>
                                                                <span>bởi {{$s->author}}   -   {{$s->created_at}}</span>
                                                                <p>{!! substr($s->description,0,150) !!}...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- card Five -->
                                            <div class="tab-pane fade" id="nav-nav-tech" role="tabpanel" aria-labelledby="nav-tech">
                                                <div class="row">
                                                    @if(is_countable($tech) && count($tech) > 0)
                                                    @foreach($tech as $te)
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="whats-news-single mb-40 mb-40">
                                                            <div class="whates-img">
                                                                <img src="{{url('posts')}}/{{$te->image}}" width="320" height="217.77" alt="">
                                                            </div>
                                                            <div class="whates-caption whates-caption2">
                                                                <h4><a href="{{url('article')}}/{{$te->slug}}">{{$te->title}}</a></h4>
                                                                <span>bởi {{$te->author}}   -   {{$te->created_at}}</span>
                                                                <p>{!! substr($te->description,0,150) !!}...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Nav Card -->
                                    </div>
                                </div>
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
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
    </html>