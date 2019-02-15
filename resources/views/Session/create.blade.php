@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    @include('inc.messages')
    <div class="row">
        <div class="col s3">
            <h5 class="teal-text">Sign In</h5>
        </div>

        <form class="col s12" method="POST" action="/signin">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s6">
                    <input id="password" name="password" type="password" class="validate" required>
                    <label for="password">Password</label>
                </div>


                <div class="input-field col s6">
                    <input id="email" name="email" type="text" class="validate" required>
                    <label for="email">Email</label>
                </div>
            </div>
            <h5></h5>
            <button type="submit" class="btn">Sign In</button>
        </form>
    </div>
</div>
@endsection