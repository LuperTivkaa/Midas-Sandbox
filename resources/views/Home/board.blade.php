@extends('Layouts.app')
@section('content')
<h1>MIDAS Board</h1>
<div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 mb-3 text-center ">
            {{-- empty div --}}
        </div>

        <div class="col-sm-12  col-md-6 col-lg-6 mb-3 text-center">

            <div class="card">
            <img class="card-img-top" src="{{asset('images/peteru.jpg')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Dr. Peteru Inunduh</h5>
                    <h6 class="lead">Chairman</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-sm-12  col-md-3 col-lg-3 text-center">
            {{-- empty div --}}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 mb-3">

            <div class="card">
                <img class="card-img-top" src="{{asset('images/orpin.jpg')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Mr. Manasseh Orpin</h5>
                    <h6 class="lead">Member</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                
            </div>

        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/joe.jpg')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Mr. Iorumbur Joseph Igbawua, Ph.D </h5>
                    <h6 class="lead">Member</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/mfe.jpg')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Mr. Mfe Inga</h5>
                    <h6 class="lead">Member</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/enonche.jpg')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Mrs. Patricia E. Enonche</h5>
                    <h6 class="lead">Member</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
               
            </div>
        </div>

    </div>
@endsection
    
