@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">Products Detail Subscription</p>
            <span><a href="/product/create"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Create Product">playlist_add</i></a></span>
            <span><a href="/subscriptions"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="All Subscriptions">view_list</i></a></span>
            <span><a href="/new-subscription"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="New Product Subscription">add_shopping_cart</i></a></span>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            @if (count($subs)>=1)
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Owner</th>
                        <th>Units</th>
                        <th>Cost</th>
                        <th>Date Added</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($subs as $sub)
                    <tr>
                        <td>{{$sub->product->name}}</td>
                        <td><a href="/user/products/{{$sub->user_id}}">{{$sub->user->first_name}}</a></td>
                        <td>{{$sub->units}}</td>
                        <td>{{$sub->product->unit_cost}}</td>
                        <td>{{$sub->created_at->diffForHumans()}}</td>
                        {{--
                        <td><a href="/new-subscription">Subscribe</a></td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$subs->links()}} @else
            <p>No product Subscriptions added yet</p>
            @endif
        </div>
    </div>
</div>
@endsection