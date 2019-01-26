@extends('Layouts.admin-app') 
@section('admin-content')
<section class="section section-stats center">
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card-panel blue lighten-1 white-text center">
                <i class="material-icons">insert_emoticon</i>
                <h5>Active Users</h5>
                <h3 class="count">768</h3>
                <div class="progress grey lighten-1">
                    <div class="determinate white" style="width:40%;"></div>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l3">
            <div class="card-panel teal lighten-1 white-text center">
                <i class="material-icons">mode_edit</i>
                <h5>Monthly Deductions</h5>
                <h3 class="count">14768000</h3>
                <div class="progress grey lighten-1">
                    <div class="determinate white" style="width:40%;"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel blue lighten-1 white-text center">
                <i class="material-icons">insert_emoticon</i>
                <h5>Total Target Savings</h5>
                <h3 class="count">12768000</h3>
                <div class="progress grey lighten-1">
                    <div class="determinate white" style="width:20%;"></div>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l3">
            <div class="card-panel blue lighten-1 white-text center">
                <i class="material-icons">insert_emoticon</i>
                <h5>Loan Applications</h5>
                <h3 class="count">768</h3>
                <div class="progress grey lighten-1">
                    <div class="determinate white" style="width:40%;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Detail content container --}}
<section class="section section-content-details">
    <div class="row">
        <div class="col s12 m6 l8">
            <div class=" blue lighten-1 white-text">
                <h5>Main Content Goes Here</h5>


            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="side-content grey lighten-1">
                <h5>Loan Applications Summary</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas error eligendi illum mollitia, eaque minus
                    ullam numquam eius ea sapiente sunt explicabo doloremque praesentium ratione dolorum pariatur eveniet
                    natus iusto.</p>
            </div>
            <div class="side-content grey lighten-1">
                <h5>Target Savings Summary</h5>
                <ul class="collection with-header latest-comments">
                    <li class="collection-item avatar">
                        <img src="{{asset('images/girl.png')}}" alt="" class="circle">
                        <span class="title">Priscilla</span>
                        <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque non nam quaerat vel fugit odio delectus
                            quidem nemo modi, cum, fuga odit tempore et quae beatae totam? Veniam, similique. Maxime!</p>
                        <a href="#" class="approve green-text">Approve</a> | <a href="#" class="deny red-text">Deny</a>
                    </li>
                </ul>
            </div>
            <div class="side-content grey lighten-1">
                <h5>Top Loan Applicants</h5>
                <ul class="collection with-header latest-comments">
                    <li class="collection-item avatar">
                        <img src="{{asset('images/andy.jpg')}}" alt="" class="circle">
                        <span class="title">Andy Shimakaa</span>
                        <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque non nam quaerat vel fugit odio delectus
                            quidem nemo modi, cum, fuga odit tempore et quae beatae totam? Veniam, similique. Maxime!</p>
                        <a href="#" class="approve green-text">Approve</a> | <a href="#" class="deny red-text">Deny</a>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</section>
@endsection