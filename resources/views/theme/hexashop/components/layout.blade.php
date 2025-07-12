<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop Ecommerce HTML CSS Template</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/hexashop/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('theme/hexashop/assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('theme/hexashop/assets/css/templatemo-hexashop.css')}}">

    <link rel="stylesheet" href="{{asset('theme/hexashop/assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('theme/hexashop/assets/css/lightbox.css')}}">
</head>
<body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <x-navbar themeFolder="{{ $themeFolder }}"></x-navbar>

    {{  $slot }}

    <x-footer themeFolder="{{ $themeFolder }}"></x-footer>


    <!-- jQuery -->
    <script src="{{asset('theme/hexashop/assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('theme/hexashop/assets/js/popper.js')}}"></script>
    <script src="{{asset('theme/hexashop/assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('theme/hexashop/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('theme/hexashop/assets/js/accordions.js')}}"></script>
    <script src="{{asset('theme/hexashop/assets/js/datepicker.js')}}"></script>
    <script src="{{asset('theme/hexashop/assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('theme/hexashop/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('theme/hexashop/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('theme/hexashop/assets/js/imgfix.min.js')}}"></script> 
    <script src="{{asset('theme/hexashop/assets/js/slick.js')}}"></script> 
    <script src="{{asset('theme/hexashop/assets/js/lightbox.js')}}"></script> 
    <script src="{{asset('theme/hexashop/assets/js/isotope.js')}}"></script> 
    
    <!-- Global Init -->
    <script src="{{asset('theme/hexashop/assets/js/custom.js')}}"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

</body>
</html>