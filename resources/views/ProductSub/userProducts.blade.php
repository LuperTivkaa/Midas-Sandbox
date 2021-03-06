@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">User Product Subscriptions</p>
            <span><a href="/product/create"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Create Product">playlist_add</i></a></span>
            <span><a href="/subscriptions"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="All Subscriptions">view_list</i></a></span>
            <span><a href="/new-subscription"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="New Product Subscription">add_shopping_cart</i></a></span>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            @if (count($userProducts)>=1)
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Owner</th>
                        <th>Units</th>
                        <th>Cost</th>
                        <th>Added</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($userProducts as $userProduct)
                    <tr>
                        <td>{{$userProduct->product->name}}</td>
                        <td>{{$userProduct->user->first_name}}</td>
                        <td>{{$userProduct->units}}</td>
                        <td>{{$userProduct->product->unit_cost}}</td>
                        <td>{{$userProduct->created_at->diffForHumans()}}</td>
                        <td><a class="btn" href="/userProdSub/edit/{{$userProduct->id}}"><i class="small material-icons">edit</i></a>                            <a class="btn red" id="#delete" href="/userProdSub/delete/{{$userProduct->id}}"><i class="small material-icons">delete</i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$userProducts->links()}} @else
            <p>No product Subscriptions added yet</p>
            @endif
        </div>
    </div>
</div>
@endsection