@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">All Products</p>
            <span><a href="/product/create"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Create Product">playlist_add</i></a></span>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            {{-- @if (count($users)>=1) --}}
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Unit Cost</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($users as $user) --}}
                    <tr>
                        {{--
                        <td><a href="/userDetails/{{$user->id}}">{{$user->first_name}}</a></td>
                        <td>{{$user->last_name}}</td>
                        <td>Active</td> --}}
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
            {{-- {{$users->links()}} @else --}}
            <p>No product added yet</p>
            {{-- @endif --}}
        </div>
    </div>
</div>
@endsection