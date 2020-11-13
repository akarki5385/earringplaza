<!DOCTYPE html>
<html lang="en">

<!--  01:03 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{config('app.name')}}</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
		<link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/flaticon.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/animate.css') }}" type="text/css" rel="stylesheet">
		<link href="{{ asset('public/assets/css/jquery-ui.min.css') }}" type="text/css" rel="stylesheet">
        <link id="page_favicon" href="{{ asset('public/assets/favicon.ico') }}" rel="icon" type="image/x-icon">
		<!--Main Slider-->
		<link href="{{ asset('public/assets/css/settings.css') }}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{ asset('public/assets/css/layers.css') }}" type="text/css" rel="stylesheet" media="screen">

		<link href="{{ asset('public/assets/css/style.css') }}" type="text/css" rel="stylesheet">
		<link href="{{ asset('public/assets/css/index.css') }}" type="text/css" rel="stylesheet">
		<link href="{{ asset('public/assets/css/header.css') }}" type="text/css" rel="stylesheet">
		<link href="{{ asset('public/assets/css/footer.css') }}" type="text/css" rel="stylesheet">
		<link href="{{ asset('public/assets/css/convert.css') }}" type="text/css" rel="stylesheet">
		<link href="{{ asset('public/assets/css/theme-color/default.css') }}" rel="stylesheet" type="text/css" id="theme-color" />
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5f8d1266f91e4b431ec58a77/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
	</head>
	<body>
@include('layouts.navbar')

@yield('content')


@include('layouts.footer')


<button class="open-button" onclick="openForm()"><i class="fa fa-exchange" aria-hidden="true"></i></button>

<div class="chat-popup" id="myForm">
    <form class="form-container">
        <button type="button" onclick="closeForm()" class="close">&times;</button>
        <br>
        <script type="text/javascript">
            converter_color_border = "#FF8C00";
            converter_color_title = "white";
            converter_color_titlebg = "#FF8C00";
            converter_color_text = "white";
            converter_color_bg = "#FF8C00";
        </script>
        <script type="text/javascript" id="converter_api"
                src="//converter.eu/api/api.js?v2"></script>
        <br>
    </form>
</div>


    <script type="text/javascript" src="{{ asset('public/assets/js/convert.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/wow.min.js') }}"></script>
    <!-- masonry,isotope Effect Js -->
    <script src="{{ asset('public/assets/js/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/masonry.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/jquery.appear.js') }}" type="text/javascript"></script>
    <!-- revolution Js -->
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery.revolution.js') }}"></script>
    <!-- Mail Function Js -->
    <script src="{{ asset('public/assets/js/validation.js') }}" type="text/javascript"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="{{ asset('public/assets/js/jquery.appear.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/custom.js') }}" type="text/javascript"></script>

    </body>

<!--  08:21 GMT -->
</html>
