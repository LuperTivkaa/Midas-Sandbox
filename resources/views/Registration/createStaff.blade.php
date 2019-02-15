@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    @include('inc.messages')
    <div class="row">
        <div class="col s3">
            <h5 class="teal-text">New User</h5>
        </div>

        <form class="col s12" method="POST" action="/Create">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input id="payment_number" name="payment_number" type="text" class="validate" required>
                    <label for="payment_number">Payment Number</label>
                </div>

            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="password" name="password" type="password" class="validate" required>
                    <label for="password">Password</label>
                </div>

                <div class="input-field col s6">
                    <input id="password_confirmation" name="password_confirmation" type="password" class="validate" required>
                    <label for="password_confirmation">Confirm Password</label>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s6">
                    <input id="email" name="email" type="email" class="validate" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-field col s6">
                    <select id="role" name="role">
                        <option value="" disabled selected>Choose your role</option>
                        @foreach ($roles as $id=>$role)
                        <option value="{{$id}}">{{$role}}</option>
                        @endforeach
                    </select>
                    <label>System Role</label>
                </div>
            </div>

            <button type="submit" class="btn">Create</button>
        </form>
    </div>
</div>
@endsection