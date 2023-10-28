@extends('front-end.master')
@section('content')
    <div id="home" class="la-home-page">
        @if (Session::has('not_verified'))
            <div class="flash_msg">
                <flash_messages :message_class="'danger'" :time ='5' :message="'{{{ Session::get('not_verified') }}}'" v-cloak></flash_messages>
            </div>
            @php session()->forget('not_verified'); @endphp
        @endif

        
        
        <div class="wt-haslayout wt-bannerholder" style="background-image:url({{{ asset(Helper::getBackgroundImage($banner)) }}});height: 500px;">
            <div class="container" style="margin-top:10%;">
                <div class="row">

<div class="col-12 col-sm-12 col-md-12 col-lg-5">

                    
                        <div class="wt-bannercontent">
                            <div class="wt-bannerhead">
                                <div class="wt-title">
                                    <h1>
                                        @if (!empty($banner_title))<span>{{{ $banner_title }}}</span> @endif 
                                        @if ($banner_subtitle){{{ $banner_subtitle }}} @endif
                                    </h1>
                                </div>
                                <!--
                                <div class="wt-description">
                                    <p>{{{ $banner_description }}}</p>
                                </div>
                            -->
                            </div>
                            <div class="btn">
                                        <a href="{{{ $freelancer_url }}}" class="wt-btn">{{ trans('lang.join_now') }}</a>
                                    </div>
                            
                          <!--
                            <div class="wt-videoholder">
                                <div class="wt-videoshow">
                                    <a data-rel="prettyPhoto[video]" href="{{{ $banner_video_link }}}"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="wt-videocontent">
                                    <span>{{{ $banner_video_title }}}<em>{{{ $banner_video_desc }}}</em></span>
                                </div>
                            </div>
                        -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                        <div class="wt-bannerimages" style="margin-top: 15%;">
                           <!--
                            <figure class="wt-bannermanimg" data-tilt>
                                <img src="{{{ asset(Helper::getBannerImage($banner_inner_image)) }}}" alt="{{{ trans('lang.img') }}}">
                            </figure>
                        -->
                        <search-form :widget_type="'home'"></search-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!--
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
    	<div class="container0">
      <img class="d-block w-100" src="{{{ asset(Helper::getBackgroundImage($banner)) }}}" alt="First slide">
      <div class="btn">
                                        <a href="{{{ $freelancer_url }}}" class="wt-btn">{{ trans('lang.join_now') }}</a>
                                    </div>
                                </div>
    </div>
    
    <div class="carousel-item">
    	<div class="container0">
      <img class="d-block w-100" src="{{{ asset(Helper::getBackgroundImage($banner2)) }}}" alt="Second slide">

       <div class="btn">
                                        <a href="{{{ $freelancer_url }}}" class="wt-btn">{{ trans('lang.join_now') }}</a>
                                    </div>
                                </div>
    </div>
    <div class="carousel-item">
    	<div class="container0">
      <img class="d-block w-100" src="{{{ asset(Helper::getBackgroundImage($banner3)) }}}" alt="Third slide">

      <div class="btn">

                                        <a href="{{{ $freelancer_url }}}" class="wt-btn">{{ trans('lang.join_now') }}</a>
                                    </div>
                                </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


</div>



-->


    <h4 align="center">Buy assets built at our platform</h4>

    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="680">
                <img data-u="image" src="{{asset('stock_shop/img/moisture.jpg')}}" />
                <div data-to="50% 50%" data-ts="flat" data-p="680" data-po="80% 50%" data-t="0" style="left:0px;top:0px;width:980px;height:380px;position:absolute;">
                    <div data-to="50% 80%" data-ts="preserve-3d" data-arr="1" style="left:480px;top:85px;width:300px;height:48px;position:absolute;opacity:0;color:#99958a;font-size:38px;line-height:1.2;letter-spacing:0.1em;">MOISTURE</div>
                    <div data-to="50% 80%" data-ts="preserve-3d" data-arr="2" style="left:495px;top:165px;width:350px;height:26px;position:absolute;opacity:0;color:#4d4b45;font-size:22px;line-height:1.2;letter-spacing:0.2em;text-align:center;">whitening &amp; moisturizing</div>
                    <div data-to="50% 80%" data-ts="preserve-3d" data-arr="3" style="left:498px;top:200px;width:400px;height:50px;position:absolute;opacity:0;color:#99958a;font-size:10px;line-height:1.2;letter-spacing:0.2em;"><div>Take your dry away<br />Splash into face where your beauty breathes</div><div>Thousands have lived without love, not one without water<br />You have to show that you deserve it</div></div>
                </div>
            </div>
            <div data-p="680">
                <img data-u="image" src="{{asset('stock_shop/img/juice.jpg')}}" />
                <img data-to="50% 50%" data-t="4" style="left:595px;top:-267px;width:271px;height:266px;position:absolute;max-width:271px;" src="img/juce-pomegranate.png" />
                <svg viewbox="0 0 52 31" width="52" height="31" data-tchd="jssor_1_msk_2" style="left:766px;top:322px;display:block;position:absolute;overflow:visible;">
                    <g fill="rgb(0, 0, 0)" stroke="none" stroke-width="1" mask="url(#jssor_1_msk_2)">
                        <image data-load="href" width="63" height="20" filter="url(#jssor_1_flt_1)" x="-20" y="10" data-t="6" data-tsep="jssor_1_gbl_1" style="position:absolute;opacity:0;max-width:63px;" href="{{asset('stock_shop/img/juce-pomegranate-shadow.png')}}"></image>
                    </g>
                </svg>
                <svg viewbox="0 0 350 100" data-to="50% 50%" width="350" height="100" data-t="7" style="left:72px;top:100px;display:block;position:absolute;font-family:Arial,Helvetica,sans-serif;font-size:130px;font-weight:900;overflow:visible;">
                    <text fill="#6b0215" text-anchor="middle" x="175" y="100">juice
                    </text>
                </svg>
                <svg viewbox="0 0 260 130" data-ts="preserve-3d" width="260" height="130" data-t="12" data-tchd="jssor_1_msk_8" style="left:115px;top:100px;display:block;position:absolute;overflow:visible;">
                    <g mask="url(#jssor_1_msk_8)">
                        <path fill="#b10626" d="M260,0L260,130L0,130L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
                        <svg viewbox="0 0 260 130" data-ts="preserve-3d" x="0" y="0" width="260" height="130" style="position:absolute;overflow:visible;">
                            <g filter="url(#jssor_1_flt_3)">
                                <image data-load="href" width="370" height="100" x="-66" y="35" style="position:absolute;max-width:370px;" href="{{asset('stock_shop/img/fruit-splash.png')}}"></image>
                                <path data-to="25px -30px" filter="url(#jssor_1_flt_4)" fill="#d55a7d" d="M-5-30C-5-46.56854 8.43146-60 25-60C41.56854-60 55-46.56854 55-30C55-13.43146 41.56854,0 25,0C8.43146,0 -5-13.43146 -5-30Z" x="-5" y="-60" data-t="8" style="position:absolute;opacity:0.4;overflow:visible;"></path>
                                <path data-to="94px -20px" filter="url(#jssor_1_flt_5)" fill="#d55a7d" d="M54-20C54-42.09139 71.90861-60 94-60C116.09139-60 134-42.09139 134-20C134,2.09139 116.09139,20 94,20C71.90861,20 54,2.09139 54-20Z" x="54" y="-60" data-t="9" style="position:absolute;opacity:0.4;overflow:visible;"></path>
                                <path data-to="200px -10px" filter="url(#jssor_1_flt_6)" fill="#d55a7d" d="M150-10C150-37.61424 172.38576-60 200-60C227.61424-60 250-37.61424 250-10C250,17.61424 227.61424,40 200,40C172.38576,40 150,17.61424 150-10Z" x="150" y="-60" data-t="10" style="position:absolute;opacity:0.4;overflow:visible;"></path>
                            </g>
                        </svg>
                    </g>
                </svg>
            </div>
            <div data-p="680">
                <img data-u="image" src="{{asset('stock_shop/img/makeup.jpg')}}" />
                <div data-to="50% 50%" data-ts="preserve-3d" data-t="13" style="left:505px;top:83px;width:400px;height:150px;position:absolute;mix-blend-mode:color-dodge;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="15" data-arr="14" style="left:46px;top:15px;width:339px;height:40px;position:absolute;opacity:0;color:#0d0800;font-size:20px;line-height:2;letter-spacing:0.08em;padding:0px 0px 0px 10px;box-sizing:border-box;background-color:#bf7c00;background-clip:padding-box;">Definite beauty defining you</div>
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="17" data-arr="16" style="left:16px;top:95px;width:339px;height:40px;position:absolute;opacity:0;color:#0d0800;font-size:20px;line-height:2;letter-spacing:0.1em;padding:0px 0px 0px 10px;box-sizing:border-box;background-color:#bf7c00;background-clip:padding-box;">Make up to a twisting trend</div>
                </div>
                <svg viewbox="0 0 980 380" data-ts="preserve-3d" width="980" height="380" style="left:0px;top:0px;display:block;position:absolute;overflow:visible;">
                    <g>
                        <svg viewbox="0 0 980 380" data-ts="preserve-3d" x="0" y="0" width="980" height="380" data-tchd="jssor_1_msk_9" style="position:absolute;overflow:visible;">
                            <g mask="url(#jssor_1_msk_9)">
                                <image data-load="href" width="980" height="380" data-to="484.0px 428.0px" x="-6" y="10" data-t="18" style="position:absolute;opacity:0;max-width:980px;" href="{{asset('stock_shop/img/makeup-items.png')}}"></image>
                                <image data-load="href" width="96" height="45" data-to="423px 366px" x="375" y="344" data-t="19" style="position:absolute;opacity:0;max-width:96px;" href="{{asset('stock_shop/img/makeup-lipstick-1.png')}}"></image>
                                <image data-load="href" width="98" height="86" data-to="424px 387px" x="375" y="344" data-t="20" style="position:absolute;opacity:0;max-width:98px;" href="{{asset('stock_shop/img/makeup-lipstick-2.png')}}"></image>
                                <image data-load="href" width="101" height="122" data-to="425px 381px" x="375" y="320" data-t="21" style="position:absolute;opacity:0;max-width:101px;" href="{{asset('stock_shop/img/makeup-lipstick-3.png')}}"></image>
                                <image data-load="href" width="52" height="77" data-to="482px 428px" x="456" y="390" data-t="22" style="position:absolute;opacity:0;max-width:52px;" href="{{asset('stock_shop/img/makeup-lipstick-4.png')}}"></image>
                                <image data-load="href" width="23" height="18" data-to="497px 435px" x="486" y="426" data-t="23" style="position:absolute;opacity:0;max-width:23px;" href="{{asset('stock_shop/img/makeup-petal-1.png')}}"></image>
                                <image data-load="href" width="19" height="19" data-to="502px 434px" x="493" y="425" data-t="24" style="position:absolute;opacity:0;max-width:19px;" href="{{asset('stock_shop/img/makeup-petal-2.png')}}"></image>
                                <image data-load="href" width="15" height="18" data-to="514px 422px" x="507" y="413" data-t="25" style="position:absolute;opacity:0;max-width:15px;" href="img/makeup-petal-3.png"></image>
                            </g>
                        </svg>
                    </g>
                </svg>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web design</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:14px;height:14px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>

        @if (!empty($categories))
        
            <section class="wt-haslayout wt-main-section">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                            <div class="wt-sectionhead wt-textcenter">
                                <div class="wt-sectiontitle">
                                    <h2>{{ trans('lang.our_courses') }}</h2>
                                   <!-- <span>{{ trans('lang.professional_by_cats') }}</span>-->
                                </div>
                            </div>
                        </div>
                        <div class="wt-categoryexpl">
                            @foreach ($categories as $category)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">
                                    <div class="wt-categorycontent">
                                        <figure><img src="{{{ asset(Helper::getCategoryImage($category->image)) }}}" alt="{{{ $category->title }}}"></figure>
                                        <div class="wt-cattitle">
                                            <h3><a href="{{{url('search-results?type=job&category%5B%5D='.$category->slug)}}}">{{{ $category->title }}}</a></h3>
                                        </div>
                                        <div class="wt-categoryslidup">
                                            @if (!empty($category->abstract))
                                                <p>{{{ $category->abstract }}}</p>
                                            @endif
                                            <a href="{{{url('search-results?type=job&category%5B%5D='.$category->slug)}}}">{{ trans('lang.explore') }} <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @if ($categories->count() > 9)
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                                    <div class="wt-btnarea">
                                        <a href="{{{ route('categoriesList') }}}" class="wt-btn">{{ trans('lang.view_all') }}</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        
        @endif

<!-- Services section -->
    <section id="what-we-do">
        <div class="container-fluid">
            <h2 class="section-title mb-2 h1">Services</h2>
              <h4 align="center">Discover the greatest talent online</h4>
            <p class="text-center text-muted h5">Having and managing a correct marketing strategy is crucial in a fast moving market.</p>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-1">
                            <h3 class="card-title">Special title</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="https://www.fiverr.com/share/qb8D02" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-2">
                            <h3 class="card-title">Special title</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="https://www.fiverr.com/share/qb8D02" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-3">
                            <h3 class="card-title">Special title</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="https://www.fiverr.com/share/qb8D02" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-4">
                            <h3 class="card-title">Special title</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="https://www.fiverr.com/share/qb8D02" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-5">
                            <h3 class="card-title">Special title</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="https://www.fiverr.com/share/qb8D02" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-6">
                            <h3 class="card-title">Special title</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="https://www.fiverr.com/share/qb8D02" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    <!-- /Services section -->

   <!--

<div id="generic_price_table">   
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                 
                    <div class="price-heading clearfix">
                        <h1>Quick Lancer Packages</h1>
                    </div>
                 
                </div>
            </div>
        </div>
        <div class="container">
            
            <div class="row">
                <div class="col-md-4">
                
                    <div class="generic_content clearfix">
                        
                        <div class="generic_head_price clearfix">
                        
                            <div class="generic_head_content clearfix">
                            
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Basic</span>
                                </div>
                                
                            </div>
                            
                            <div class="generic_price_tag clearfix">    
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">99</span>
                                    <span class="cent">.99</span>
                                    <span class="month">/MON</span>
                                </span>
                            </div>
                            
                        </div>                        
                        
                        <div class="generic_feature_list">
                            <ul>
                                <li><span>2GB</span> Bandwidth</li>
                                <li><span>150GB</span> Storage</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        
                        <div class="generic_price_btn clearfix">
                            <a class="" href="">Sign up</a>
                        </div>
                    </div>
                        
                </div>
                
                <div class="col-md-4">
                
                    <div class="generic_content active clearfix">
                        
                        <div class="generic_head_price clearfix">
                        
                            <div class="generic_head_content clearfix">
                            
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Standard</span>
                                </div>
                                
                            </div>
                            
                            <div class="generic_price_tag clearfix">    
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">199</span>
                                    <span class="cent">.99</span>
                                    <span class="month">/MON</span>
                                </span>
                            </div>
                            
                        </div>                       
                        
                        <div class="generic_feature_list">
                            <ul>
                                <li><span>2GB</span> Bandwidth</li>
                                <li><span>150GB</span> Storage</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        
                        <div class="generic_price_btn clearfix">
                            <a class="" href="">Sign up</a>
                        </div>
                        
                    </div>
                        
                </div>
                <div class="col-md-4">
                
                    <div class="generic_content clearfix">
                        
                        <div class="generic_head_price clearfix">
                        
                            <div class="generic_head_content clearfix">
                            
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Unlimited</span>
                                </div>
                                
                            </div>
                            
                            <div class="generic_price_tag clearfix">    
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">299</span>
                                    <span class="cent">.99</span>
                                    <span class="month">/MON</span>
                                </span>
                            </div>
                            
                        </div>                         
                        
                        <div class="generic_feature_list">
                            <ul>
                                <li><span>2GB</span> Bandwidth</li>
                                <li><span>150GB</span> Storage</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        
                        <div class="generic_price_btn clearfix">
                            <a class="" href="">Sign up</a>
                        </div>
                        
                    </div>
                        
                </div>
            </div>  
            
        </div>
    </section> 
</div>

        -->
        <!--
        <section class="wt-haslayout wt-main-section">
      
        	
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
                        <figure class="wt-mobileimg">
                            <img src="{{{ asset(Helper::getDownloadAppImage($download_app_img)) }}}" alt="{{{ trans('lang.img') }}}">
                        </figure>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
                        <div class="wt-experienceholder">
                            <div class="wt-sectionhead">
                                <div class="wt-sectiontitle">
                                    <h2>{{{ $app_title }}}</h2>
                                    <span>{{{ $app_subtitle  }}}</span>
                                </div>
                                <div class="wt-description">
                                    @php echo htmlspecialchars_decode(stripslashes($app_desc)); @endphp
                                </div>
                                <ul class="wt-appicon">
                                    <li>
                                        <a href="{{ $app_android_link }}">
                                            <figure><img src="{{{ asset('images/android.png') }}}" alt="{{{ trans('lang.img') }}}"></figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $app_ios_link }}">
                                            <figure><img src="{{{ asset('images/ios.png') }}}" alt="{{{ trans('lang.img') }}}"></figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        </section>
 -->
       <section class="wt-haslayout wt-main-section">

  
   <div class="">
                <h2 align="center" style="color:black;">How it works</h2>
                <p class="lead" align="center" style=" line-height: 1.6;">See the video tutorial to learn how this amazing platform used to work or hire.</p>
                
            </div>

<iframe width="640" height="360" frameborder="0" src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>

</div>
<!-- End -->

            <!--
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="wt-companydetails">
                            @if (!empty($company_title) || !empty($company_desc))
                                <div class="wt-companycontent">
                                    <div class="wt-companyinfotitle">
                                        <h2>{{{ $company_title }}}</h2>
                                    </div>
                                    <div class="wt-description">
                                        <p>{{{  $company_desc  }}}</p>
                                    </div>
                                    <div class="wt-btnarea">
                                        <a href="{{{ $company_url }}}" class="wt-btn">{{ trans('lang.join_now') }}</a>
                                    </div>
                                </div>
                            @endif
                            @if (!empty($freelancer_title) || !empty($freelancer_desc))
                                <div class="wt-companycontent">
                                    <div class="wt-companyinfotitle">
                                        <h2>{{{ $freelancer_title }}}</h2>
                                    </div>
                                    <div class="wt-description">
                                        <p>{{{ $freelancer_desc }}}</p>
                                    </div>
                                    <div class="wt-btnarea">
                                        <a href="{{{ $freelancer_url }}}" class="wt-btn">{{ trans('lang.join_now') }}</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        -->
        </section>

<section class="wt-haslayout wt-main-section" style="background-color: white;">
   
   <h2 align="center">Testimonials</h2>
    
<!-- Slideshow container -->
<div class="slideshow-container">
 <div class="container">
  <div class="row">
  <!-- Full-width slides/quotes -->
  
  <div class="mySlides">
    <div class="col-sm"> 
    <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
    <p class="author">- John Keats</p>
</div>
      <div class="col-sm">
    <iframe width="30%" height="50%" frameborder="0" src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
</div>
  </div>



  <div class="mySlides">
    <div class="col-sm"> 
    <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
    <p class="author">- Ernest Hemingway</p>
  </div>
  <div class="col-sm">
    <iframe width="30%" height="50%" frameborder="0" src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
</div>
</div>
  

  <div class="mySlides">

<div class="col-sm"> 
    <q>I have not failed. I've just found 10,000 ways that won't work.</q>
    <p class="author">- Thomas A. Edison</p>
  </div>
  <div class="col-sm">
    <iframe width="30%" height="50%" frameborder="0" src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
</div>
</div>


  <!-- Next/prev buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
</div>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>




</section>
    
        <!--
        <section class="wt-haslayaout wt-main-section wt-footeraboutus">
            <div class="container">
                <div class="row">

            -->
            <footer id="wt-footer" class="wt-footer wt-haslayout">
            <div class="wt-footerholder wt-haslayout">
                <div class="container">
                    <div class="row">

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="wt-widgetskills">
                            <div class="wt-fwidgettitle">
                                <h3>{{ trans('lang.by_skills') }}</h3>
                            </div>
                            @if (!empty($skills))
                                <ul class="wt-fwidgetcontent">
                                    @foreach ($skills as $skill)
                                        <li><a href="{{{url('search-results?type=job&skills%5B%5D='.$skill->slug)}}}">{{{ $skill->title }}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="wt-footercol wt-widgetcategories">
                            <div class="wt-fwidgettitle">
                                <h3>{{ trans('lang.by_cats') }}</h3>
                            </div>
                            @if (!empty($categories))
                                <ul class="wt-fwidgetcontent">
                                    @foreach ($categories as $category)
                                        <li><a href="{{{url('search-results?type=job&category%5B%5D='.$category->slug)}}}">{{{ $category->title }}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="wt-widgetbylocation">
                            <div class="wt-fwidgettitle">
                                <h3>{{ trans('lang.by_locs') }}</h3>
                            </div>
                            @if (!empty($locations))
                                <ul class="wt-fwidgetcontent">
                                    @foreach ($locations as $location)
                                        <li><a href="{{{url('search-results?type=job&locations%5B%5D='.$location->slug)}}}">{{{ $location->title }}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="wt-widgetbylocation">
                            <div class="wt-fwidgettitle">
                                <h3>{{ trans('lang.by_lang') }}</h3>
                            </div>
                            <!--
                            @if (!empty($languages))
                                <ul class="wt-fwidgetcontent">
                                    @foreach ($languages as $language)
                                        <li><a href="{{{url('search-results?type=job&languages%5B%5D='.$language->slug)}}}">{{{ $language->title }}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        -->
                        <ul class="wt-fwidgetcontent">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
</ul>
                        </div>
                    </div>
                    <!--
                </div>
            </div>
        </section>
    -->
      </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
