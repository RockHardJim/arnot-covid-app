<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Arnot Opco</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/linearicons/css/linearicons.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick/slick.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick/slick-theme.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate-css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('dist/css/lobibox.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha256-f6fW47QDm1m01HIep+UjpCpNwLVkBYKd+fhpb4VQ+gE=" crossorigin="anonymous" />

</head>
<body data-scroll-animation="true">
<div class="body_wrapper">
    @yield('content')
<script src="{{ asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/corona-live/dashboard.js')}}"></script>
    <script src="{{ asset('assets/vendors/corona-live/main.js')}}"></script>
<script src="{{ asset('assets/vendors/isotop/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/vendors/isotop/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/vendors/slick/slick.min.js')}}"></script>
<script src="{{ asset('assets/vendors/scroll-animation/jquery.parallax-scroll.js')}}"></script>
<script src="{{ asset('assets/vendors/scroll-animation/parallax.js')}}"></script>
    <script src="{{ asset('assets/vendors/corona-live/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/corona-live/datatable.js')}}"></script>
<script src="{{ asset('assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('assets/vendors/animate-css/wow.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/js/theme.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha256-321PxS+POvbvWcIVoRZeRmf32q7fTFQJ21bXwTNWREY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    @yield('javascript')
</body>
</html>