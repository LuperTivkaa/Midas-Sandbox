@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">ACTIVE SUBSCRIPTIONS</p>

        </div>
    </div>

    <div class="row">
        <div class="col s12 subject-header">
            <span><a href="/loanSub/create"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="New Loan Subscription">playlist_add</i></a></span>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            @if (count($activeSubs)>=1)
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Sum NGN</th>
                        <th>Monthly Repay</th>
                        <th>Begin</th>
                        <th>Expires</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activeSubs as $active)
                    <tr>

                        <td><a href="/user/page/{{$active->user_id}}">{{$active->user->first_name}} {{$active->user->lastname_name}}</a></td>
                        <td>{{$active->product->name}}</td>
                        <td>{{number_format($active->total_amount,2,'.',',')}}</td>
                        <td>{{number_format($active->monthly_repayment,2,'.',',')}}</td>
                        <td>{{$active->start_date->toFormattedDateString()}}</td>
                        <td>{{$active->start_date->diffForHumans($active->end_date->toFormattedDateString())}}</td>
                        <td><a href="/#/#/{{$active->id}}">Repay</a> <a href="/#/#/{{$active->id}}">Stop</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$activeSubs->links()}} @else
            <p>No Active Product Subscriptions</p>
            @endif
        </div>
    </div>
</div>
@endsection