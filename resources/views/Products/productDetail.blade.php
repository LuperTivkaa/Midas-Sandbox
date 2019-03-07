@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">Product Detail</p>
            <span><a href="/product/create"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Create Product">playlist_add</i></a></span>
            <span><a href="/products"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="All Products">view_list</i></a></span>
        </div>
    </div>
    <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            {{-- <img src="{{asset('images/andy.jpg')}}" alt="" class="circle"> --}}
            <p class="profile__heading text-grey darken-3">Bird View</p>
            <img src="{{asset('images/andy.jpg')}}" alt="" class="profile__photo materialboxed">
            <span class="profile__user-name">  Product Avatar Above </span>

            <div class="profile__user-box">
                <span class="black-text sub-profile">Added On</span>
                <span class="profile__user-date grey-text lighten-2">{{$product->created_at->toFormattedDateString()}}</span>
                <span class="black-text sub-profile">Subscriptions</span>
                <span class="profile__join-date grey-text lighten-2">109</span>
                <span class="black-text sub-profile">Status</span>
                <span class="profile__user-status grey-text lighten-2">Active</span>
            </div>
            <span><a href="/editProduct/{{$product->id}}" class="pink-text darken-2">Edit</a></span>
        </div>
        <div class="col s12 m9 l9 profile-detail">
            @if ($product)
            <div>
                <table class="highlight">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Unit Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->unit_cost}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @else
            <p>No Record Added Yet</p>
            @endif
        </div>
    </div>
</div>
@endsection