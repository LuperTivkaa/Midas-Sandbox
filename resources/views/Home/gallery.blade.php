@extends('Layouts.app') 
@section('content')
<h1>Photo Booth</h1>
<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="card">
            <img src="{{asset('images/boy-5.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="card">
            <img src="{{asset('images/boy.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3  mt-2">
        <div class="card">
            <img src="{{asset('images/man.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3  mt-2">
        <div class="card">
            <img src="{{asset('images/man-1.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="card">
            <img src="{{asset('images/boy-5.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
        <div class="card">
            <img src="{{asset('images/boy.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3  mt-2">
        <div class="card">
            <img src="{{asset('images/girl-5.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3  mt-2">
        <div class="card">
            <img src="{{asset('images/girl-1.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>
@endsection