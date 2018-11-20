<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
            
            @yield('content')
    </div>
    {{-- this the beginning of the footer section --}}
    <div class="container-fluid">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <h5>MIDAS Touch Multipurpose Cooperative Society Limited</h5>
                        <hr/>
                        <address>
                            Federal Medical Centre Makurdi,<br />
                            No 1, Hospital Road, Mission Ward,<br />
                            P.M.B. 102004, Makurdi, Benue State<br />
                            +234 081 189 014 11<br />
                            midastouch@gmail.com<br />
                        </address>
                        
                        <p>&copy; MIDAS TOUCH</p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5>Social </h5>
                    <hr/>
                        {{-- empty div --}}
                    </div>
               </div>
            </footer>
        </div>
    </div>
</body>
</html>