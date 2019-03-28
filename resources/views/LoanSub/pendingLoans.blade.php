@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">All Pending Loans</p>
            <span><a href="/loanSub/create"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="New Loan Subscription">playlist_add</i></a></span>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            @if (count($pendingLoans)>=1)
            <table class="highlight">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Amount NGN</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pendingLoans as $pending)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><a href="/user/loan/{{$pending->user_id}}">{{$pending->user->first_name}} {{$pending->user->lastname_name}}</a></td>
                        <td>{{$pending->loan->description}}</td>
                        <td>{{number_format($pending->amount_applied,2,'.',',')}}</td>
                        <td>{{$pending->created_at->toFormattedDateString()}}</td>
                        <td><a href="/userLoan/discard/{{$pending->id}}">Discard</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$pendingLoans->links()}} @else
            <p>No pending loan applications yet</p>
            @endif
        </div>
    </div>
</div>
@endsection