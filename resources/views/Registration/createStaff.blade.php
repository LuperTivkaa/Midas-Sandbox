@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col s3">
            <h5 class="teal-text">New User</h5>
        </div>

        <form class="col s12" method="POST" action="/User/New">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input id="payment_number" name="payment_number" type="text" class="validate">
                    <label for="payment_number">Payment Number</label>
                </div>


                <div class="input-field col s6">
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>

            {{--
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div> --}}
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>

            <button type="submit" class="btn">Create</button>
        </form>
    </div>
</div>
@endsection