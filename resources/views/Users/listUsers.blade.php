@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    @include('inc.messages')
    <div class="row">
        <div class="col 12">
            <h5 class="teal-text">All Users</h5>
            <div class="divider"></div>
        </div>
    </div>
    <div class="row">

        <div class="col s3">
            <a href="" class="btn">New</a>
        </div>
        <div class="col s6">

            <a href="" class="btn">New</a>

        </div>
        <div class="col s3">
            <a href="" class="btn">New</a>
        </div>
    </div>



    <div class="row">
        <div class="col s12">
            @if (count($users)>=1)
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Surname</th>
                        <th>Last Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td><a href="/userDetails/{{$user->id}}">{{$user->first_name}}</a></td>
                        <td>{{$user->last_name}}</td>
                        <td>Active</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <ul class="pagination">
                {{$users->links()}}
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