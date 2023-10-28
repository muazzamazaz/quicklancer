<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ config('app.name') }}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="{{{ asset('images/favicon.png') }}}" type="image/x-icon">
	<link href="{{ asset('css/print.css') }}" rel="stylesheet" media="print" type="text/css">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
	<link href="{{ asset('css/scrollbar.css') }}" rel="stylesheet">
	<link href="{{ asset('css/vue2-scrollbar.css') }}" rel="stylesheet">
	<link href="{{ asset('css/fontawesome/fontawesome-all.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
	<link href="{{ asset('css/linearicons.css') }}" rel="stylesheet">
	<link href="{{ asset('css/tipso.css') }}" rel="stylesheet">
	<link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
	<link href="{{ asset('css/chosen.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('css/color.css') }}" rel="stylesheet">
	<link href="{{ asset('css/transitions.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
	<link href="{{ asset('css/emojionearea.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/basictable.css') }}" rel="stylesheet">
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
    <link href="{{ asset('css/testimonials.css') }}" rel="stylesheet">

	@stack('stylesheets')
	<script type="text/javascript">
		var APP_URL = {!! json_encode(url('/')) !!}
		var Map_key = {!! json_encode(Helper::getGoogleMapApiKey()) !!}
	</script>
	@if (Auth::user())
	<script type="text/javascript">
		var USERID = {!! json_encode(Auth::user()->id) !!}
		window.Laravel = {!! json_encode([
		'csrfToken'=> csrf_token(),
		'user'=> [
			'authenticated' => auth()->check(),
			'id' => auth()->check() ? auth()->user()->id : null,
			'name' => auth()->check() ? auth()->user()->first_name : null,
			'image' => !empty(auth()->user()->profile->avater) ? asset('uploads/users/'.auth()->user()->id .'/'.auth()->user()->profile->avater) : asset('images/user-login.png'),
			'image_name' => !empty(auth()->user()->profile->avater) ? auth()->user()->profile->avater : '',
			]
			])
		!!};
	</script>
	@endif
	<script>
		window.trans = <?php
		$lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
		$trans = [];
		foreach ($lang_files as $f) {
			$filename = pathinfo($f)['filename'];
			$trans[$filename] = trans($filename);
		}
		echo json_encode($trans);
		?>;
	</script>
</head>

<body class="wt-login">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Preloader Start -->
	<div class="preloader-outer">
		<div class="preloader-holder">
			<div class="loader"></div>
		</div>
	</div>
	<!-- Wrapper Start -->
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">
			<!-- Header Start -->
			@yield('header')
			<!--Header End-->
			<!--Main Start-->
			@yield('main')
			<!--Main End-->
			<!--Footer Start-->
			@yield('footer')
			<!--Footer End-->
		</div>
		<!--Content Wrapper End-->
	</div>
	<!--Wrapper End-->
	<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
	<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
	<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
	<script src="{{ asset('js/vendor/jquery-library.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/chosen.jquery.js') }}"></script>
	<script src="{{ asset('js/tilt.jquery.js') }}"></script>
	<script src="{{ asset('js/scrollbar.min.js') }}"></script>
	<script src="{{ asset('js/prettyPhoto.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/readmore.js') }}"></script>
	<script src="{{ asset('js/countTo.js') }}"></script>
	<script src="{{ asset('js/appear.js') }}"></script>
	<script src="{{ asset('js/tipso.js') }}"></script>
	<script src="{{ asset('js/gmap3.js') }}"></script>
	<script src="https://unpkg.com/simplebar@latest/dist/simplebar.js"></script>
	<script src="{{ asset('js/emojionearea.min.js') }}"></script>
	<script src="{{ asset('js/linkify.min.js') }}"></script>
	<script src="{{ asset('js/linkify-jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery.basictable.min.js') }}"></script>
    <script src="{{ asset('js/testimonials.js') }}"></script>
    
<style type="text/css">

    /* Slideshow container */
.slideshow-container {
  position: relative;
  text-align: center;
}

/* Slides */
.mySlides {
  display: none;
  text-align: center;
  margin: auto;
  width: 50%;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
  text-align: center;
  padding: 20px;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}


	
	.container0 {
  position: relative;
 
}
	.container0 .btn {
  position: absolute;
    left: 50%;
    top: 80%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
 padding: 12px 24px;
  border-radius: 5px;

}



/* ======================== */
/*   Pricing Table   */
/* ======================== */
@import url(https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,700,900italic,900);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900);
body{background-color:#eee;}

#generic_price_table{
    background-color: #f0eded;
}

/*PRICE COLOR CODE START*/
#generic_price_table .generic_content{
    background-color: #fff;
}

#generic_price_table .generic_content .generic_head_price{
    background-color: #f6f6f6;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg{
    border-color: #e4e4e4 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #e4e4e4;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head span{
    color: #525252;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .sign{
    color: #414141;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .currency{
    color: #414141;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .cent{
    color: #414141;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .month{
    color: #414141;
}

#generic_price_table .generic_content .generic_feature_list ul li{  
    color: #a7a7a7;
}

#generic_price_table .generic_content .generic_feature_list ul li span{
    color: #414141;
}
#generic_price_table .generic_content .generic_feature_list ul li:hover{
    background-color: #E4E4E4;
    border-left: 5px solid #2ECC71;
}

#generic_price_table .generic_content .generic_price_btn a{
    border: 1px solid #2ECC71; 
    color: #2ECC71;
} 

#generic_price_table .generic_content.active .generic_head_price .generic_head_content .head_bg,
#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head_bg{
    border-color: #2ECC71 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #2ECC71;
    color: #fff;
}

#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head span,
#generic_price_table .generic_content.active .generic_head_price .generic_head_content .head span{
    color: #fff;
}

#generic_price_table .generic_content:hover .generic_price_btn a,
#generic_price_table .generic_content.active .generic_price_btn a{
    background-color: #2ECC71;
    color: #fff;
} 
#generic_price_table{
    margin: 50px 0 50px 0;
    font-family: 'Raleway', sans-serif;
}
.row .table{
    padding: 28px 0;
}

/*PRICE BODY CODE START*/

#generic_price_table .generic_content{
    overflow: hidden;
    position: relative;
    text-align: center;
}

#generic_price_table .generic_content .generic_head_price {
    margin: 0 0 20px 0;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content{
    margin: 0 0 50px 0;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg{
    border-style: solid;
    border-width: 90px 1411px 23px 399px;
    position: absolute;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head{
    padding-top: 40px;
    position: relative;
    z-index: 1;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head span{
    font-family: "Raleway",sans-serif;
    font-size: 28px;
    font-weight: 400;
    letter-spacing: 2px;
    margin: 0;
    padding: 0;
    text-transform: uppercase;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag{
    padding: 0 0 20px;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price{
    display: block;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .sign{
    display: inline-block;
    font-family: "Lato",sans-serif;
    font-size: 28px;
    font-weight: 400;
    vertical-align: middle;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .currency{
    font-family: "Lato",sans-serif;
    font-size: 60px;
    font-weight: 300;
    letter-spacing: -2px;
    line-height: 60px;
    padding: 0;
    vertical-align: middle;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .cent{
    display: inline-block;
    font-family: "Lato",sans-serif;
    font-size: 24px;
    font-weight: 400;
    vertical-align: bottom;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .month{
    font-family: "Lato",sans-serif;
    font-size: 18px;
    font-weight: 400;
    letter-spacing: 3px;
    vertical-align: bottom;
}

#generic_price_table .generic_content .generic_feature_list ul{
    list-style: none;
    padding: 0;
    margin: 0;
}

#generic_price_table .generic_content .generic_feature_list ul li{
    font-family: "Lato",sans-serif;
    font-size: 18px;
    padding: 15px 0;
    transition: all 0.3s ease-in-out 0s;
}
#generic_price_table .generic_content .generic_feature_list ul li:hover{
    transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -ms-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;

}
#generic_price_table .generic_content .generic_feature_list ul li .fa{
    padding: 0 10px;
}
#generic_price_table .generic_content .generic_price_btn{
    margin: 20px 0 32px;
}

#generic_price_table .generic_content .generic_price_btn a{
    border-radius: 50px;
    -moz-border-radius: 50px;
    -ms-border-radius: 50px;
    -o-border-radius: 50px;
    -webkit-border-radius: 50px;
    display: inline-block;
    font-family: "Lato",sans-serif;
    font-size: 18px;
    outline: medium none;
    padding: 12px 30px;
    text-decoration: none;
    text-transform: uppercase;
}

#generic_price_table .generic_content,
#generic_price_table .generic_content:hover,
#generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg,
#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head_bg,
#generic_price_table .generic_content .generic_head_price .generic_head_content .head h2,
#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head h2,
#generic_price_table .generic_content .price,
#generic_price_table .generic_content:hover .price,
#generic_price_table .generic_content .generic_price_btn a,
#generic_price_table .generic_content:hover .generic_price_btn a{
    transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -ms-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
} 
@media (max-width: 320px) { 
}

@media (max-width: 767px) {
    #generic_price_table .generic_content{
        margin-bottom:75px;
    }
}
@media (min-width: 768px) and (max-width: 991px) {
    #generic_price_table .col-md-3{
        float:left;
        width:50%;
    }
    
    #generic_price_table .col-md-4{
        float:left;
        width:50%;
    }
    
    #generic_price_table .generic_content{
        margin-bottom:75px;
    }
}
@media (min-width: 992px) and (max-width: 1199px) {
}
@media (min-width: 1200px) {
}
#generic_price_table_home{
     font-family: 'Raleway', sans-serif;
}

.text-center h1,
.text-center h1 a{
    color: #7885CB;
    font-size: 30px;
    font-weight: 300;
    text-decoration: none;
}
.demo-pic{
    margin: 0 auto;
}
.demo-pic:hover{
    opacity: 0.7;
}

#generic_price_table_home ul{
    margin: 0 auto;
    padding: 0;
    list-style: none;
    display: table;
}
#generic_price_table_home li{
    float: left;
}
#generic_price_table_home li + li{
    margin-left: 10px;
    padding-bottom: 10px;
}
#generic_price_table_home li a{
    display: block;
    width: 50px;
    height: 50px;
    font-size: 0px;
}
#generic_price_table_home .blue{
    background: #3498DB;
    transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .emerald{
    background: #2ECC71;
    transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .grey{
    background: #7F8C8D;
    transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .midnight{
    background: #34495E;
    transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .orange{
    background: #E67E22;
    transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .purple{
    background: #9B59B6;
    transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .red{
    background: #E74C3C;
    transition:all 0.3s ease-in-out 0s;
}
#generic_price_table_home .turquoise{
    background: #1ABC9C;
    transition: all 0.3s ease-in-out 0s;
}

#generic_price_table_home .blue:hover,
#generic_price_table_home .emerald:hover,
#generic_price_table_home .grey:hover,
#generic_price_table_home .midnight:hover,
#generic_price_table_home .orange:hover,
#generic_price_table_home .purple:hover,
#generic_price_table_home .red:hover,
#generic_price_table_home .turquoise:hover{
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .divider{
    border-bottom: 1px solid #ddd;
    margin-bottom: 20px;
    padding: 20px;
}
#generic_price_table_home .divider span{
    width: 100%;
    display: table;
    height: 2px;
    background: #ddd;
    margin: 50px auto;
    line-height: 2px;
}
#generic_price_table_home .itemname{
    text-align: center;
    font-size: 50px ;
    padding: 50px 0 20px ;
    border-bottom: 1px solid #ddd;
    margin-bottom: 40px;
    text-decoration: none;
    font-weight: 300;
}
#generic_price_table_home .itemnametext{
    text-align: center;
    font-size: 20px;
    padding-top: 5px;
    text-transform: uppercase;
    display: inline-block;
}
#generic_price_table_home .footer{
    padding:40px 0;
}

.price-heading{
    text-align: center;
}
.price-heading h1{
    color: #666;
    margin: 0;
    padding: 0 0 50px 0;
}
.demo-button {
    background-color: #333333;
    color: #ffffff;
    display: table;
    font-size: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    margin-bottom: 50px;
    outline-color: -moz-use-text-color;
    outline-style: none;
    outline-width: medium ;
    padding: 10px;
    text-align: center;
    text-transform: uppercase;
}
.bottom_btn{
    background-color: #333333;
    color: #ffffff;
    display: table;
    font-size: 28px;
    margin: 60px auto 20px;
    padding: 10px 25px;
    text-align: center;
    text-transform: uppercase;
}
.demo-button:hover{
    background-color: #666;
    color: #FFF;
    text-decoration:none;
    
}
.bottom_btn:hover{
    background-color: #666;
    color: #FFF;
    text-decoration:none;
}







</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="{{asset('js/jssor.slider-28.0.0.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">

        var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,kX:16}],
              [{b:-1,d:1,y:200,rY:-360,sX:0.5,sY:0.5,p:{y:{o:32,d:1,dO:9},rY:{c:0}}},{b:0,d:3000,y:0,o:1,rY:0,sX:1,sY:1,e:{y:1,o:13,rY:1,sX:1,sY:1},p:{y:{dl:0},o:{dl:0.1,rd:3},rY:{dl:0.1,o:33},sX:{dl:0.1,o:33},sY:{dl:0.1,o:33}}}],
              [{b:-1,d:1,y:200,rY:-360,sX:0.5,sY:0.5,p:{y:{o:32,d:1,dO:9},rY:{c:0}}},{b:0,d:3000,y:0,o:1,rY:0,sX:1,sY:1,e:{y:1,o:13,rY:1,sX:1,sY:1},p:{y:{dl:0},o:{dl:0.1,rd:3},rY:{dl:0.1,o:33},sX:{dl:0.1,o:33},sY:{dl:0.1,o:33}}}],
              [{b:-1,d:1,y:100,rY:-360,sX:0.5,sY:0.5,p:{y:{o:32,d:1,dO:9},rY:{c:0}}},{b:0,d:3000,y:0,o:1,rY:0,sX:1,sY:1,e:{y:1,o:13,rY:1,sX:1,sY:1},p:{y:{dl:0},o:{dl:0.02,rd:3},rY:{dl:0.02,o:33},sX:{dl:0.02,o:33},sY:{dl:0.02,o:33}}}],
              [{b:2000,d:1000,y:50,e:{y:3}}],
              [{b:-1,d:1,bl:[8]},{b:2000,d:1000,bl:[3],e:{bl:3}}],
              [{b:-1,d:1,rp:1},{b:2000,d:1000,o:0.6},{b:2000,d:1000,rp:0}],
              [{b:-1,d:1,sX:0.7}],
              [{b:1000,d:2000,y:195,e:{y:3}}],
              [{b:600,d:2000,y:195,e:{y:3}}],
              [{b:1400,d:2000,y:195,e:{y:3}}],
              [{b:-1,d:1,sX:0.7,ls:2},{b:0,d:800,o:1,ls:0,e:{ls:6}}],
              [{b:-1,d:801,rp:1}],
              [{b:-1,d:1,kY:-6}],
              [{b:-1,d:1,x:30,kY:-10},{b:1400,d:1500,x:0,o:1,e:{x:27,o:6}}],
              [{b:-1,d:1,c:{t:0}},{b:1400,d:1500,c:{t:339},e:{c:{t:3}}}],
              [{b:-1,d:1,x:30,kY:-10},{b:1700,d:1500,x:0,o:1,e:{x:27,o:6}}],
              [{b:-1,d:1,c:{t:0}},{b:1700,d:1500,c:{t:339},e:{c:{t:3}}}],
              [{b:-1,d:1,sX:0.3,sY:0.3},{b:400,d:1000,o:1,sX:1,sY:1,e:{sX:3,sY:3}}],
              [{b:-1,d:1,sX:0.3,sY:0.3},{b:0,d:1800,x:-347,y:-94,o:1,sX:1,sY:1,e:{x:3,y:3,sX:3,sY:3}}],
              [{b:-1,d:1,sX:0.3,sY:0.3},{b:180,d:1520,x:-230,y:-217,o:1,sX:1,sY:1,e:{x:3,y:3,sX:3,sY:3}}],
              [{b:-1,d:1,sX:0.3,sY:0.3},{b:400,d:1500,x:-120,y:-179,o:1,sX:1,sY:1,e:{x:3,y:3,sX:3,sY:3}}],
              [{b:-1,d:1,sX:0.3,sY:0.3},{b:500,d:1600,x:120,y:-167,o:1,sX:1,sY:1,e:{x:3,y:3,sX:3,sY:3}}],
              [{b:-1,d:1,sX:0.3,sY:0.3},{b:800,d:800,x:301,y:-100,o:1,sX:1,sY:1,e:{x:3,y:3,sX:3,sY:3}}],
              [{b:-1,d:1,sX:0.3,sY:0.3},{b:600,d:1000,x:312,y:-92,o:1,sX:1,sY:1,e:{x:3,y:3,sX:3,sY:3}}],
              [{b:-1,d:1,sX:0.3,sY:0.3},{b:100,d:800,x:388,y:-161,o:1,sX:1,sY:1,e:{x:3,y:3,sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 16,
                $SpacingY: 16
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 057 css*/
        .jssorb057 .i {position:absolute;cursor:pointer;}
        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2200;stroke-miterlimit:10;stroke-opacity:0.4;}
        .jssorb057 .i:hover .b {stroke-opacity:.7;}
        .jssorb057 .iav .b {stroke-opacity: 1;}
        .jssorb057 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur id="jssor_1_gbl_1" stddeviation="8" data-t="5"></feGaussianBlur>
            </filter>
            <mask id="jssor_1_msk_2">
                <path fill="#ffffff" d="M15.3,6.8C16.4,6.4 17.5,6 18.5,5.7C27.1,2.9 39-4.1 47.1,3.3C50.4,6.3 53.4,22.2 51.3,25.6C45.9,34.5 32.6,27.4 25.1,26.1C18.9,25 10.1,32.8 4.4,28.4C-5.6,20.7 8.9,9.3 15.3,6.8Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
            </mask>
            <filter id="jssor_1_flt_3" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="2" result="r1"></feGaussianBlur>
                <feColorMatrix in="r1" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 3 -1" result="r2"></feColorMatrix>
            </filter>
            <filter id="jssor_1_flt_4" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="10"></feGaussianBlur>
            </filter>
            <filter id="jssor_1_flt_5" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="10"></feGaussianBlur>
            </filter>
            <filter id="jssor_1_flt_6" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="10"></feGaussianBlur>
            </filter>
            <mask id="jssor_1_msk_8">
                <text data-to="130px 50px" fill="#ffffff" id="jssor_1_lyr_7" text-anchor="middle" x="130" y="100" data-t="11" style="position:absolute;opacity:0;font-family:Arial,Helvetica,sans-serif;font-size:130px;font-weight:900;letter-spacing:2em;overflow:visible;">juice
                </text>
            </mask>
            <mask id="jssor_1_msk_9">
                <image data-load="href" width="980" height="380" x="0" y="0" style="position:absolute;max-width:980px;" href="img/makeup-mask.png"></image>
            </mask>
        </defs>
    </svg>
     <script type="text/javascript">jssor_1_slider_init();
    </script>

	<script>
		jQuery('.wt-tablecategories').basictable({
			breakpoint: 767,
        });
        jQuery(window).load(function () {
            jQuery(".preloader-outer").delay(500).fadeOut();
            jQuery(".pins").delay(500).fadeOut("slow");
        });
	</script>
	@stack('scripts')
</body>

</html>
