@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    @include('inc.messages')
    <div class="row">
        <div class="col s12">
            <h5 class="teal-text">All Users</h5>
            <div class="divider"></div>
            @if (count($users)>=1)
            <ul>
                @foreach ($users as $user)
                <li>{{$user->first_name}}</li>
                @endforeach
            </ul>
            @else
            <p>No Users Created Yet</p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col s12">

        </div>
    </div>
</div>
@endsection