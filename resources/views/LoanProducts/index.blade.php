@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">All Loan Products</p>
            <span><a href="/loanProduct/create"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="New Loan Product">playlist_add</i></a></span>
            <span><a href="/new-subscription"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Product Subscription">add_shopping_cart</i></a></span>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            @if (count($loanProducts)>=1)
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Loan Name</th>
                        <th>Tenor (Months)</th>
                        <th>Interest Rate</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loanProducts as $item)
                    <tr>
                        <td><a href="/loanProduct/edit/{{$item->id}}">{{$item->description}}</a></td>
                        <td>{{$item->tenor}}</td>
                        <td>{{$item->interest}}</td>
                        <td><a href="/new-subscription">Subscribe</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$loanProducts->links()}} @else
            <p>No Loan Product Added Yet</p>
            @endif
        </div>
    </div>
</div>
@endsection