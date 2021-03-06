<!DOCTYPE html>
<html lang="en">
  <head>
    <title>တောင်သူဦးကြီး</title>
    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('nn/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('nn/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('nn/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('nn/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('nn/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('nn/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('nn/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('nn/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('nn/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('nn/icon/icofont/icofont.min.css')}}">


    <link rel="stylesheet" href="{{asset('nn/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('nn/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('nn/css/style.css')}}">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">၀၉_၇၇၅၁၉၄၅၃၅ ၀၉_၄၅၆၀၅၃၉၄၄</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">Farmer@email.com</span>
					    </div>
            <div class="col-lg-4 col-10">
               @role('Customer')
            <span class="float-right d-xl-block d-lg-block d-none">
              <a id="navbarDropdown" class="nav-link dropdown-toggle loginlink text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{Auth::user()->name}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item " href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                <span class="text"><a href="{{route('loginpage')}}" class="text-white">Login </a>| <a href="{{route('registerpage')}}" class="text-white">Register</a></span>
              </div>
              </a>
              <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </span>
          @else
          <span class=" text float-right d-xl-block d-lg-block d-none">
           <a href="{{route('loginpage')}}" class="text-white">Login </a>| <a href="{{route('registerpage')}}" class="text-white">Register</a>

          </span>
          @endrole
        </div>

					    {{-- <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text"><a href="{{route('loginpage')}}" class="text-white">Login </a>| <a href="{{route('registerpage')}}" class="text-white">Register</a></span>
					    </div> --}}
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><img src="{{asset('nn/images/logo1.jpeg')}}" width="50" height="50">&nbsp;တောင်သူဦးကြီး</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> စာမျက်နှာ
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('homepage')}}" class="nav-link">ပင်မစာမျက်နှာ</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">သီးနှံလေ့လာရန်</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                @foreach($crops as $crop)
                <a class="dropdown-item" href="{{route('croppage',$crop->id)}}">{{$crop->name}}</a>
                @endforeach
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">စိုက်ပျိုးရေးသုံး စက်ပစ္စည်းများ</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                @foreach($machines as $machine)
                <a class="dropdown-item" href="{{route('machinepage',$machine->id)}}">{{$machine->name}}</a>
                @endforeach
              </div>
            </li>
	          {{-- <li class="nav-item"><a href="{{route('sellpage')}}" class="nav-link">Selling</a></li> --}}
	          <li class="nav-item"><a href="{{route('buypage')}}" class="nav-link">ဝယ်ယူရန်</a></li>
	          <li class="nav-item"><a href="{{route('contactpage')}}" class="nav-link">ဆက်သွယ်ရန်</a></li>


	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url({{asset('nn/images/bg3.jpg')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">လယ်သမားအကျိုးဆောင် ဒို့ဘုန်းရောင်</h1>

	              <p><a href="#" class="btn btn-primary">ပိုမို ကြည့်ရှုရန်</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url({{asset('nn/images/bg4.jpg')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">မြေမှန် မျိုးမှန် စိုက်နည်းမှန်  ရာသီမှန်အောင်စိုက်</h1>

	              <p><a href="#" class="btn btn-primary">ပိုမို ကြည့်ရှုရန်</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>

    @yield('front')

    <footer class="ftco-footer ftco-section my-4">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">တောင်သူဦးကြီး</h2>
              <p>တောင်သူဦးကြီးများရှင့် ကောက်ပဲသီးနှံများကို ကာလပေါက်စျေး နဲ့ ရောင်းချလို့ ရပါတယ်ရှင့်</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">

                <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100012211472535"><span class="icon-facebook"></span></a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">စာမျက်နှာ</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">ပင်မစာမျက်နှာ</a></li>
                <li><a href="#" class="py-2 d-block">သီးနှံများလေ့လာရန်</a></li>
                <li><a href="#" class="py-2 d-block">စိုက်ပျိုးရေးသုံး စက်ပစ္စည်းများ</a></li>
                <li><a href="#" class="py-2 d-block">ဝယ်ယူရန်</a></li>
                <li><a href="#" class="py-2 d-block">ဆက်သွယ်ရန်</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">သီးနှံဝယ်ယူလိုသူ</h2>
              <p>လူကြီးမင်းတို့စိတ်ကြိုက် အရည်အသွေးပြည့်ဝမှု အလေးချိန်ပြည့်ဝမှု နဲ့ယုံကြည်စွာ ဝယ်ယူလိုက်ပါ။</p>
          </div>
        </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2 text-dark">မေးမြန်းရန်
?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">မကွေးမြို့နယ်/မြို့ပတ်လမ်း/တောင်သူဦးကြီး</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">၀၉-၂၅၇၅၈၇၂၁၃ / ၀၉-၇၉၄၅၆၆၇၈၉</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">farmer@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script>  Future Of Farmer{{-- All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> --}}
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('nn/js/jquery.min.js')}}"></script>
  <script src="{{asset('nn/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('nn/js/popper.min.js')}}"></script>
  <script src="{{asset('nn/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('nn/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('nn/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('nn/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('nn/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('nn/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('nn/js/aos.js')}}"></script>
  <script src="{{asset('nn/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('nn/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('nn/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('nn/js/google-map.js')}}"></script>
  <script src="{{asset('nn/js/main.js')}}"></script>
  <script src="{{asset('nn/js/localstorage_custom.js')}}"></script>

    @yield('script')


  </body>
</html>
