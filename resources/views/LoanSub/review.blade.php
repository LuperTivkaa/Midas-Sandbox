@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <span class="teal-text">Review Loan</span>
            <span><a href="/loan-subscriptions"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="All Loan Subscription">view_list</i></a></span>
        </div>
    </div>
    <div class="row">
        <form class="col s12" method="POST" action="/userLoan/reviewStore/{{$review->id}}">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <input placeholder="IPPIS or GFMIS" id="payment_id" name="payment_id" value="{{$review->user->payment_number}}" type="text"
                        class="validate" disabled>
                    <label for="payment_id">Payment ID</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <input id="amount_applied" name="amount_applied" type="text" value="{{number_format($review->amount_applied,2,'.',',')}}"
                        class="validate" disabled>
                    <label for="amount_applied">Amount Applied</label>
                </div>

                <div class="input-field col s12 m6 l6">
                    <input id="amount_approved" name="amount_approved" type="text" class="validate">
                    <label for="amount_approved">Amount Approved</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <input id="start_date" name="start_date" type="text" class="validate datepicker" required>
                    <label for="start_date">Start Date</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="end_date" name="end_date" type="text" class="validate datepicker" required>
                    <label for="end_date">End Date</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="notes" name="notes" class="materialize-textarea" data-length="50"></textarea>
                    <label for="notes">Review Notes</label>
                </div>
            </div>

            <button type="submit" class="btn">Review Loan</button>
        </form>
    </div>
</div>
@endsection