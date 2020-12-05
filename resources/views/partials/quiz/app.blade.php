<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Arnot Opco</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('quiz/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('quiz/css/menu.css')}}" rel="stylesheet">
    <link href="{{ asset('quiz/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('quiz/css/vendors.css')}}" rel="stylesheet">
    <link href="{{ asset('quiz/css/custom.css')}}" rel="stylesheet">
    <script src="{{ asset('quiz/js/modernizr.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha256-f6fW47QDm1m01HIep+UjpCpNwLVkBYKd+fhpb4VQ+gE=" crossorigin="anonymous" />

</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->
@yield('content')
<script src="{{ asset('quiz/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('quiz/js/common_scripts.min.js')}}"></script>
<script src="{{ asset('quiz/js/velocity.min.js')}}"></script>
<script src="{{ asset('quiz/js/common_functions.js')}}"></script>
<script src="{{ asset('quiz/js/func_1.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha256-321PxS+POvbvWcIVoRZeRmf32q7fTFQJ21bXwTNWREY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
@yield('javascript')
</body>
</html>