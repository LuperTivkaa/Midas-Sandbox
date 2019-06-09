@extends('Layouts.admin-app')


@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">LOAN HISTORY</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 subject-header">
            <span><a href="/loanProduct/create"><i class="small material-icons tooltipped" data-position="bottom"
                        data-tooltip="New Loan Product">playlist_add</i></a></span>
            <span><a href="/loan-subscriptions"><i class="small material-icons tooltipped" data-position="bottom"
                        data-tooltip="All Loan Subscriptions">view_list</i></a></span>
            <span><a href="/loanSub/create"><i class="small material-icons tooltipped" data-position="bottom"
                        data-tooltip="New Loan Subscription">add_shopping_cart</i></a></span>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            @if (count($loanHistory)>=1)
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Amount Deducted</th>
                        <th>Payment Mode</th>
                        <th>Date Added</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loanHistory as $item)
                    <tr>
                        <td><a href="/user/page/{{$item->user_id}}">{{$item->user->first_name}}</a></td>
                        <td>{{$item->loan->description}}</td>
                        <td>{{number_format($item->amount_deducted,2,'.',',')}}</td>
                        <td>{{$item->repayment_mode}}</td>
                        <td>{{$item->created_at->toDateString()}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{$loanHistory->links()}} @else
            <p>No deduction(s) yet</p> --}}
            @endif
        </div>
    </div>
</div>
@endsection