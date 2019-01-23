<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('fontawesome-assets/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome-assets/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome-assets/css/solid.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/midas-styles.css')}}">
    <title>MIDAS- {{$title}}</title>
</head>

<body>
    @include('inc.admin-navbar') @yield('admin-content')


    <footer class="page-footer grey darken-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m4 l4 grey-text text-lighten-3">
                    <h5 class="font-weight-bold"><i class="fas fa-map-marker-alt"></i> Contact Us</h5>
                    <hr/>
                    <address>
                                    <h6>MIDAS Touch Multipurpose Cooperative Society Limited</h6>
                                        Federal Medical Centre Makurdi,<br />
                                        No 1, Hospital Road, Mission Ward,<br />
                                        P.M.B. 102004, Makurdi, Benue State<br />
                                        +234 081 189 014 11<br />
                                        midastouch@gmail.com<br />
                                    </address>

                    <p>&copy; MIDAS TOUCH</p>

                </div>
                <div class="col s12 m4 l4 offset-m4 grey-text text-lighten-3">
                    <h5 class="font-weight-bold grey-text text-lighten-3"> <i class="fas fa-share-alt"></i> Social </h5>
                    <hr/>
                    <ul class="list-unstyled">
                        <li><span><i class="fab fa-facebook-square"></i></span> Facebook</li>
                        <li><span><i class="fab fa-twitter-square"></i></span> Twitter</li>
                        <li><span><i class="fab fa-whatsapp-square"></i></span> Whatsapp</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="footer-copyright grey darken-2">
            <div class="container">
                &copy; MIDAS TOUCH {{-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> --}}
            </div>
        </div>
    </footer>

    {{--Below is loader --}}
    <div class="loader preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js "></script>
    <script src="https://canvasjs.com/assets/script/js/canvasjs.min.js "></script>
    <script>
        //HIDE ALL SECTIONS
    $('.section').hide();

        //set time out
    setTimeout(function(){

        $(document).ready(function(){

// //SHOW SECTIONS
$('.section').fadeIn();
// //HIDE LOADER
$('.loader').fadeOut();
//INIT Side Nav
$('.sidenav').sidenav();

//INIT dropdown menu
$(".dropdown-trigger").dropdown({
coverTrigger:false,
hover:true


});

//INIT Carousel
$('.carousel.carousel-slider').carousel({
fullWidth: true
});

//COUNTER SNIPPET
$('.count').each(function() {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
},
{
duration: 1000,
easing:'swing',
step: function(now){
    $(this).text(Math.ceil(now));
}
});
});

});

    },
    1000);
    </script>
</body>

</html>