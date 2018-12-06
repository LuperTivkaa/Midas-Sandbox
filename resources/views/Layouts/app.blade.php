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
    <title>MIDAS - {{$title}}</title>
</head>

<body>
    @include('inc.navbar')
    <div class="container">

        @yield('content')
    </div>
    {{-- this the beginning of the footer section --}}
    <div class="container-fluid mt-3">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
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
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <h5 class="font-weight-bold"> <i class="fas fa-share-alt"></i> Social </h5>
                        <hr/>
                        <ul class="list-unstyled">
                            <li><span><i class="fab fa-facebook-square"></i></span> Facebook</li>
                            <li><span><i class="fab fa-twitter-square"></i></span> Twitter</li>
                            <li><span><i class="fab fa-whatsapp-square"></i></span> Whatsapp</li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    {{--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.5/popper.min.js"></script> --}}

    <script src="{{asset('js/app.js')}}"></script>

    <script>

    </script>
</body>

</html>