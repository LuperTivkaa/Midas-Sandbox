@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">INACTIVE PRODUCTS</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 subject-header">
            <span><a href="/product/create"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Create Product">playlist_add</i></a></span>
            <span><a href="/product/inactive"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Create Product">playlist_add</i></a></span>            {{-- <span><a href="/new-subscription"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Product Subscription">add_shopping_cart</i></a></span>--}}
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            @if (count($products)>=1)
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Unit Cost</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td><a href="/product/detail/{{$product->id}}">{{$product->name}}</a></td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->unit_cost}}</td>
                        <td>{{$product->status}}</td>
                        <td><a href="/activate/{{$product->id}}" class="red-text darken-4">Activate</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$products->links()}} @else
            <p>No product added yet</p>
            @endif
        </div>
    </div>
</div>
@endsection