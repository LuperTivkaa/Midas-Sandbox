@extends('Layouts.app') 
@section('content') {{-- carousel section --}}
<section id="midas-carousel">
    <div id="midas-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#midas-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#midas-carousel" data-slide-to="1"></li>
            <li data-target="#midas-carousel" data-slide-to="2"></li>
        </ol>
        {{-- put carousel inner class --}}
        <div class="carousel-inner">
            <div class="carousel-item slider-height carousel-bgimage active">
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block text-right mb-5">
                        <h1>Heading One</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, minus? Veritatis odit dolorem
                            voluptatum nulla quis adipisci excepturi officiis accusamus.</p>
                        <a href="#" class="btn btn-danger btn-lg">Join Us</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item slider-height carousel-bgimage2">
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block text-left mb-5">
                        <h1>Heading Two</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, minus? Veritatis odit dolorem
                            voluptatum nulla quis adipisci excepturi officiis accusamus.</p>
                        <a href="#" class="btn btn-primary btn-lg">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item slider-height carousel-bgimage3">
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block mb-5">
                        <h1>Heading Three</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, minus? Veritatis odit dolorem
                            voluptatum nulla quis adipisci excepturi officiis accusamus.</p>
                        <a href="#" class="btn btn-success btn-lg">Learn More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="row">
    <div class="col-sm-12 text-center">
        <h4 class="display-1">MIDAS</h4>
        <hr/>
        <p class=" display-4 midas-banner-caption">Together, We Can Build The Future We Desire.</p>
        <h6 class="lead">Desire, Innovate, Build</h6>
    </div>
</div>
</div>

<div class="container text-center">
    {{--
    <h1>Our Creed!</h1>
    <h4 class="lead">Friendship, Team Work, Service </h4> --}}
    <div class="row">
        <div class="col-sm-2 text-capitalize">
            {{-- empty div --}}
        </div>
        <div class="col-sm-8 text-center">
            <img src="{{asset('images/Mission_Vision.png')}}" class="img-fluid" />
        </div>
        <div class="col-sm-2 text-center">
            {{-- empty div --}}
        </div>
    </div>
</div>

<div class="container">
    <h1 class="text-center  display-2">Our Products</h1>

    <div class="row text-center">
        <div class="col-md-4">
            <h4 class="text-muted">Loans</h4>
            <p>
                We have carefully loan products that are flexible, sustainable and painless that can help all members to access various financial
                services when eligible. Our loan catalogue is made of long term, short term and emergency loans at various
                rates which serves the interest of our members.
            </p>

        </div>
        <div class="col-md-4">
            <h4 class="text-muted">Bam</h4>
            <p>
                Our Bam is a targeted saving product designed to allow members of the cooperative save money towards recuurent expenditures
                like school during new academic savings. The saving is not specifically for school fees but can also be applied
                to other areas of need.
            </p>

        </div>
        <div class="col-md-4">
            <h4 class="text-muted">Fixed Deposits</h4>
            <p>This is a product that is designed for a WIN-WIN situtation for us and depositors. Members are free to fixed
                their monies with us for a period of at least six (6) months at a pecentage flat rate that is determined
                by the exco at intervals.</p>

        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <p><a href="/products" class="btn btn-warning btn-lg">Learn More</a></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <h1 class="display-1">Built with Elegance</h1>
            <h3 class="text-muted">...built for you and your lifestyle</h3>
            <p>
                At the heart of our products and services lies a deep understanding of our customers and cooperators' behaviour, their demographics
                and changing social lifestyle. That is why we follow you wherever your lifestyle may take you, now is the
                time for the big idea whose time has come.
            </p>
        </div>
        <div class="col-md-5">
            <img src="{{asset('images/responsive.png')}}" class="img-fluid" />
        </div>
    </div>
@endsection