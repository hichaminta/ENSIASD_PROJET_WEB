<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="/assets/Home/images/uiz.png" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="/assets/Home/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/Home/css/all.min.css">
    <link rel="stylesheet" href="/assets/Home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/Home/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/Home/css/actualites.css">

</head>


<body>

    <!-- ======================header started====================== -->
    @include('Home.partial.navbarHome')
    <!-- ======================slider section started====================== -->

    {{-- Boddy --}}
    {{ $slot }}
    {{-- END body --}}
    {{-- Fotter --}}
    @include('Home.partial.fotterHome')
    {{-- ENd  fotter --}}
    <button id="scrollTopBtn" onclick="scrollToTop()"><i class="fas fa-arrow-up"></i></button>



</body>

<script src="/assets/Home/js/jquery-3.2.1.min.js"></script>
<script src="/assets/Home/js/popper.min.js"></script>
<script src="assets/Home/js/bootstrap.min.js"></script>
<script src="/assets/Home/js/owl.carousel.min.js"></script>
<script src="/assets/Home/js/owl.carousel.js"></script>
<script src="/assets/Home/js/script.js"></script>
<script src="https://kit.fontawesome.com/ad107d1215.js" crossorigin="anonymous"></script>
</html>
