<!doctype html>
    <html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>News Online </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/img/favicon.ico')}}">

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
            @if(is_countable($newest) && count($newest) > 0)
            <!-- Trending Area Start -->
            <div class="trending-area fix pt-25 gray-bg">
                <div class="container">
                    <div class="trending-main">
                        <div class="row">
                          <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="slider-active">
                                <!-- Single -->                       
                                @foreach($newest as $key=>$new)
                                @if($key >= 0 && $key < 3)
                                <div class="single-slider">
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img">
                                            <img src="{{url('posts')}}/{{$new->image}}" height="662.19" width="770" alt="">
                                            <div class="trend-top-cap">
                                                <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">{{$new->category_id}}</span>
                                                <h2><a href="{{url('article')}}/{{$new->slug}}" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">{{$new->title}}</a></h2>
                                                <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">bởi {{$new->author}}   -   {{$new->created_at}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- Right content -->
                        <div class="col-lg-4">
                            <!-- Trending Top -->
                            <div class="row">
                                @foreach($newest as $key=>$new)
                                @if($key >= 3 && $key < 5)
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img">
                                            <img src="{{url('posts')}}/{{$new->image}}" height="331" width="385" alt="">
                                            <div class="trend-top-cap trend-top-cap2">
                                                <span class="bgb">{{$new->category_id}}</span>
                                                <h2><a href="{{url('article')}}/{{$new->slug}}">{{$new->title}}</a></h2>
                                                <p>bởi {{$new->author}}   -   {{$new->created_at}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- Trending Area End -->
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20 gray-bg">
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
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Thế giới</a>
                                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Thể thao</a>
                                                <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Công nghệ</a>
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
                                                <!-- Left Details Caption -->
                                                @foreach($life as $key=>$lf)
                                                @if($key == 0)
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{url('posts')}}/{{$lf->image}}" width="320" height="217.77" alt="">
                                                        </div>
                                                        <div class="whates-caption">
                                                            <h4><a href="{{url('article')}}/{{$lf->slug}}">{{$lf->title}}</a></h4>
                                                            <span>bởi {{$lf->author}}   -   {{$lf->created_at}}</span>
                                                            <p>{!! substr($lf->description,0,255) !!}...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                                <!-- Right single caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <!-- single -->
                                                        @foreach($life as $key=>$lf)
                                                        @if($key > 0 && $key < 5)
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{url('posts')}}/{{$lf->image}}" height="102" width="124" alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">{{$lf->category_id}}</span>
                                                                    <h4><a href="{{url('article')}}/{{$lf->slug}}">{{$lf->title}}</a></h4>
                                                                    <p>{{$lf->created_at}}</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Card two -->
                                        <div class="tab-pane fade" id="nav-travel" role="tabpanel" aria-labelledby="nav-travel-tab">
                                            <div class="row">
                                                @if(is_countable($travel) && count($travel) > 0)
                                                <!-- Left Details Caption -->
                                                @foreach($travel as $key=>$tv)
                                                @if($key == 0)
                                                <div class="col-xl-6">
                                                    <div class="whats-news-single mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{url('posts')}}/{{$tv->image}}" width="320" height="217.77" alt="">
                                                        </div>
                                                        <div class="whates-caption">
                                                            <h4><a href="{{url('article')}}/{{$tv->slug}}">{{$tv->title}}</a></h4>
                                                            <span>bởi {{$tv->author}}   -   {{$tv->created_at}}</span>
                                                            <p>{!! substr($tv->description,0,255) !!}...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                                <!-- Right single caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <!-- single -->
                                                        @foreach($travel as $key=>$tv)
                                                        @if($key > 0 && $key < 5)
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{url('posts')}}/{{$tv->image}}" height="102" width="124" alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">{{$tv->category_id}}</span>
                                                                    <h4><a href="{{url('article')}}/{{$tv->slug}}">{{$tv->title}}</a></h4>
                                                                    <p>{{$tv->created_at}}</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                @endif
                                            </div>  
                                        </div>
                                        <!-- Card three -->
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="row">
                                                @if(is_countable($world) && count($world) > 0)
                                                <!-- Left Details Caption -->
                                                @foreach($world as $key=>$w)
                                                @if($key == 0)
                                                <div class="col-xl-6">
                                                    <div class="whats-news-single mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{url('posts')}}/{{$tv->image}}" width="320" height="217.77" alt="">
                                                        </div>
                                                        <div class="whates-caption">
                                                            <h4><a href="{{url('article')}}/{{$w->slug}}">{{$w->title}}</a></h4>
                                                            <span>bởi {{$w->author}}   -   {{$w->created_at}}</span>
                                                            <p>{!! substr($w->description,0,255) !!}...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                                <!-- Right single caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <!-- single -->
                                                        @foreach($world as $key=>$w)
                                                        @if($key > 0 && $key < 5)
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{url('posts')}}/{{$w->image}}" height="102" width="124" alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">{{$w->category_id}}</span>
                                                                    <h4><a href="{{url('article')}}/{{$w->slug}}">{{$w->title}}</a></h4>
                                                                    <p>{{$w->created_at}}</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- card fure -->
                                        <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                            <div class="row">
                                                @if(is_countable($sport) && count($sport) > 0)
                                                <!-- Left Details Caption -->
                                                @foreach($sport as $key=>$s)
                                                @if($key == 0)
                                                <div class="col-xl-6">
                                                    <div class="whats-news-single mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{url('posts')}}/{{$s->image}}" width="320" height="217.77" alt="">
                                                        </div>
                                                        <div class="whates-caption">
                                                            <h4><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h4>
                                                            <span>bởi {{$s->author}}   -   {{$s->created_at}}</span>
                                                            <p>{!! substr($s->description,0,255) !!}...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                                <!-- Right single caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <!-- single -->
                                                        @foreach($sport as $key=>$s)
                                                        @if($key > 0 && $key < 5)
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{url('posts')}}/{{$s->image}}" height="102" width="124" alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">{{$s->category_id}}</span>
                                                                    <h4><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h4>
                                                                    <p>{{$s->created_at}}</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- card Five -->
                                        <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                            <div class="row">
                                                @if(is_countable($tech) && count($tech) > 0)
                                                <!-- Left Details Caption -->
                                                @foreach($tech as $key=>$t)
                                                @if($key == 0)
                                                <div class="col-xl-6">
                                                    <div class="whats-news-single mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{url('posts')}}/{{$tv->image}}" width="320" height="217.77" alt="">
                                                        </div>
                                                        <div class="whates-caption">
                                                            <h4><a href="{{url('article')}}/{{$t->slug}}">{{$t->title}}</a></h4>
                                                            <span>bởi {{$t->author}}   -   {{$t->created_at}}</span>
                                                            <p>{!! substr($t->description,0,255) !!}...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                                <!-- Right single caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <!-- single -->
                                                        @foreach($tech as $key=>$t)
                                                        @if($key > 0 && $key < 5)
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{url('posts')}}/{{$t->image}}" height="102" width="124" alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">{{$t->category_id}}</span>
                                                                    <h4><a href="{{url('article')}}/{{$t->slug}}">{{$t->title}}</a></h4>
                                                                    <p>{{$t->created_at}}</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
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
                        @if(is_countable($newest) && count($newest) > 0)
                        <div class="most-recent-area">
                            <!-- Section Tittle -->
                            <div class="small-tittle mb-20">
                                <h4>Gần Đây</h4>
                            </div>
                            <!-- Details -->
                            @foreach($newest as $key=>$new)
                            @if($key == 0)
                            <div class="most-recent mb-40">
                                <div class="most-recent-img">
                                    <img src="{{url('posts')}}/{{$new->image}}" width="350" height="240.69" alt="">
                                    <div class="most-recent-cap">
                                        <span class="bgbeg">{{$new->category_id}}</span>
                                        <h4><a href="{{url('article')}}/{{$new->slug}}">{{$new->title}}</a></h4>
                                        <p>{{$new->author}}  |  {{$new->created_at}}</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <!-- Single -->
                            @foreach($newest as $key=>$new)
                            @if($key > 0 && $key < 3)
                            <div class="most-recent-single">
                                <div class="most-recent-images">
                                    <img src="{{url('posts')}}/{{$new->image}}" width="85" height="79" alt="">
                                </div>
                                <div class="most-recent-capt">
                                    <h4><a href="{{url('article')}}/{{$new->slug}}">{{$new->title}}</a></h4>
                                    <p>{{$new->author}}  |  {{$new->created_at}}</p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- Whats New End -->
        <!--   Weekly2-News start -->
        @if(is_countable($trend) && count($trend) > 0)
        <div class="weekly2-news-area pt-50 pb-30 gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-wrapper">
                                <!-- section Tittle -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="small-tittle mb-30">
                                            <h4>Phổ biến nhất</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="weekly2-news-active d-flex">
                                            <!-- Single -->
                                            @foreach($trend as $tr)
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="{{url('posts')}}/{{$tr->image}}" width="345" height="227.55" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="{{url('article')}}/{{$tr->slug}}">{{ $tr->title }}</a></h4>
                                                    <p>{{ $tr->author }}  |  {{ $tr->created_at }}</p>
                                                </div>
                                            </div> 
                                            @endforeach
                                            <!-- Single -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        @endif         
        <!-- End Weekly-News -->

        <!--   Weekly3-News start -->
        @if(is_countable($random) && count($random) > 0)
        <div class="weekly3-news-area pt-80 pb-130">
            <div class="container">
                <div class="weekly3-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Có thể bạn sẽ thích</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-wrapper">
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="weekly3-news-active dot-style d-flex">
                                            @foreach($random as $rand)
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="{{url('posts')}}/{{$rand->image}}" width="270" height="215.58" alt="">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="{{url('article')}}/{{$rand->slug}}">{{ $rand->title }}</a></h4>
                                                    <p>{{ $rand->created_at }}</p>
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
            </div>
        </div>  

        @endif         
        <!-- End Weekly-News -->
    </main>
    <footer>
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

</body>
</html>