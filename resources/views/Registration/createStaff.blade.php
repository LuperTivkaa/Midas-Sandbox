@extends('Layouts.admin-app') 
@section('main-content')
<div class="row">
    <div class="col s3">
        <h5>New Staff</h5>
    </div>

    <form method="POST" action="/create" class="col s12">
        {{ csrf_field() }}
        <div class="row">
            <div class="input-field col s12 m5 l5">
                <input id="first_name" name="first_name" type="text" class="validate">
                <label for="first_name">Surname Name</label>
                <span class="helper-text red-text" data-error="wrong" data-success="right">*</span>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="middle_name" name="middle_name" type="text" class="validate">
                <label for="middle_name">Middle Name</label>
                <span class="helper-text red-text" data-error="wrong" data-success="right">*</span>
            </div>
            <div class="input-field col s12 m3 l3">
                <input id="last_name" name="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input id="password" name="password" type="password" class="validate">
                <label for="password">Password</label>
                <span class="helper-text red-text" data-error="wrong" data-success="right">*</span>
            </div>
            <div class="input-field col s12 m6 l6">
                <input id="email" name="email" type="email" class="validate">
                <label for="email">Email</label>
                <span class="helper-text red-text" data-error="wrong" data-success="right">*</span>
            </div>
        </div>

        <button type="submit" class="btn">Add</button>

    </form>
</div>
@endsection