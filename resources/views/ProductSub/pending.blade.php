@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">PENDING SUBSCRIPTIONS</p>

        </div>
    </div>
    <div class="row">
        <div class="col s12 subject-header">
            <span><a href="/loanSub/create"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="New Loan Subscription">playlist_add</i></a></span>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            @if (count($pendingSubs)>=1)
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Units</th>
                        <th>x-item</th>
                        <th>Sum NGN</th>
                        <th>Monthly Repay</th>
                        <th>Created On</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pendingSubs as $pending)
                    <tr>

                        <td><a href="/user/page/{{$pending->user_id}}">{{$pending->user->first_name}} {{$pending->user->lastname_name}}</a></td>
                        <td>{{$pending->product->name}}</td>
                        <td>{{$pending->units}}</td>
                        <td>{{$pending->product->unit_cost}}</td>
                        <td>{{number_format($pending->total_amount,2,'.',',')}}</td>
                        <td>{{number_format($pending->monthly_repayment,2,'.',',')}}</td>
                        <td>{{$pending->created_at->toFormattedDateString()}}</td>

                        <td>{{$pending->status}}</td>
                        <td><a href="/#/#/{{$pending->id}}">Repay</a> <a href="/#/#/{{$pending->id}}">Stop</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$pendingSubs->links()}} @else
            <p>No Active Product Subscriptions</p>
            @endif
        </div>
    </div>
</div>
@endsection