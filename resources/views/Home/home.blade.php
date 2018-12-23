@extends('Layouts.app') 
@section('content') {{-- carousel section --}}
<section id="midas-carousel">
    <div id="midas-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#midas-slider" data-slide-to="0" class="active"></li>
            <li data-target="#midas-slider" data-slide-to="1"></li>
            <li data-target="#midas-slider" data-slide-to="2"></li>
        </ol>
        {{-- put carousel inner class --}}
        <div class="carousel-inner midas-showcase">
            <div class="carousel-item slider-height carousel-bgimage active">
                <div class="container primary-overlay">
                    <div class="carousel-caption d-none d-sm-block text-right mb-5">
                        <h1 class="display-1">MIDAS TOUCH</h1>
                        <p class=" display-4">Together, We Can Build The Future We Desire.</p>
                        <a href="#" class="btn btn-danger btn-lg">Join Us</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item slider-height carousel-bgimage2">
                <div class="container primary-overlay">
                    <div class="carousel-caption d-none d-sm-block text-left mb-5">
                        <h1 class="display-4">MIDAS TOUCH Multipurpose Cooperative Society</h1>
                        <h3 class="lead">It's An Idea...</h3>
                        <p class="lead">Whose time Has Come</p>
                        <a href="#" class="btn btn-primary btn-lg">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item slider-height carousel-bgimage3">
                <div class="container primary-overlay">
                    <div class="carousel-caption d-none d-sm-block mb-5">
                        <h1 class="display-3">Teamwork & Friendship</h1>
                        <p class="lead">Desire, Innovate, Build</p>
                        <a href="#" class="btn btn-success btn-lg">Learn More</a>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#midas-slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#midas-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section>

{{--
<div class="row">
    <div class="col-sm-12 text-center">
        <h4 class="display-1">MIDAS</h4>
        <hr/>
        <p class=" display-4 midas-banner-caption">Together, We Can Build The Future We Desire.</p>
        <h6 class="lead">Desire, Innovate, Build</h6>
    </div>
</div> --}}

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

<div class="container products">
    <h1 class="text-center  display-2">Our Products</h1>

    <div class="row text-center">
        <div class="col-md-4">
            <i class="fas fa-box fa-3x"></i>
            <h4 class="text-muted">Loans</h4>
            <p>
                We have crafted loan products that are flexible, sustainable and painless that can help all members to access various financial
                services when eligible. Our loan catalogue is made of long term, short term and emergency loans at various
                rates.
            </p>

        </div>
        <div class="col-md-4">
            <i class="fab fa-accusoft fa-3x"></i>
            <h4 class="text-muted">Targeted Savings</h4>
            <p>
                This is a targeted saving product designed to allow members of the cooperative save money towards recurrent expenditures
                like school fees during new academic sessions. The saving is not specifically for school fees but can also
                be applied to other areas of need.
            </p>

        </div>
        <div class="col-md-4">
            <i class="fab fa-cc-amazon-pay fa-3x"></i>
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
            <h1 class="display-1 midas-small-screen">Built with Elegance</h1>
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
</div>



<div class="container p-4  mb-3">
    <h2 class="text-center display-3 midas-small-screen">Testimonials</h2>
    <div class="row text-center">
        <div class="col">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div>
                            <blockquote class="blockquote">
                                <p class="mb-0">
                                    MIDAS TOUCH is built on trust, fairness and equity, keep the head up.
                                </p>
                                <footer class="blockquote-footer">Tali Eunice
                                    <cite title="Admin Dept">Admin Dept</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div>
                            <blockquote class="blockquote">
                                <p class="mb-0">
                                    MIDAS is home and it defines what it means to run a good 21st century organization.
                                </p>
                                <footer class="blockquote-footer">Tivkaa Manasseh Luper,
                                    <cite title="Admin Dept">FMC Staff</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div>
                            <blockquote class="blockquote">
                                <p class="mb-0">
                                    I am glad I have a voice in this cooperative society, something rarely found else where
                                </p>
                                <footer class="blockquote-footer">Isaiah Azende,
                                    <cite title="Admin Dept">Finance Dept</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                {{-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a> --}}
            </div>
            {{--
            <div class="test-sl">
                <div>
                    <blockquote class="blockquote">
                        <p class="mb-0">
                            Lorem ipsum dolor sit, amet consectetur adipisicing.
                        </p>
                        <footer class="blockquote-footer">John Doe From
                            <cite title="Admin Dept">Admin Dept</cite>
                        </footer>
                    </blockquote>
                </div>
                <div>
                    <blockquote class="blockquote">
                        <p class="mb-0">
                            Lorem ipsum dolor sit, amet consectetur adipisicing.
                        </p>
                        <footer class="blockquote-footer">Kane Dow From
                            <cite title="Nursing Dept">Nursing Dept</cite>
                        </footer>
                    </blockquote>
                </div>
                <div>
                    <blockquote class="blockquote">
                        <p class="mb-0">
                            Lorem ipsum dolor sit, amet consectetur adipisicing.
                        </p>
                        <footer class="blockquote-footer">John Smith From
                            <cite title="Admin Dept">Finance Dept</cite>
                        </footer>
                    </blockquote>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection