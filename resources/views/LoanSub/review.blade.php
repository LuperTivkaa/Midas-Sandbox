@extends('Layouts.admin-app')
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <span class="teal-text">REVIEW LOAN</span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 subject-header">
            <span><a href="/pendingLoans"><i class="small material-icons tooltipped" data-position="bottom"
                        data-tooltip="Pending Loans">view_list</i></a></span>
        </div>
    </div>

    <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">PAYMENT ID</p>
            <span><i class="small material-icons pink-text lighten-4">looks</i></span>
            <span class="profile__user-name">{{$review->user->payment_number}}</span>
            <span class="profile__user-name">{{$review->user->first_name}} {{$review->user->last_name}}</span>
            <span class="profile__user-name">TOTAL CONTR
                {{number_format($review->user->totalSavings($review->user_id),2,'.',',')}}</span>
            <span class="profile__user-name">MNTH SAVE
                {{number_format($review->user->monthlySaving($review->user_id),2,'.',',')}}</span>
        </div>

        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">PRODUCT</p>
            <span><i class="small material-icons pink-text lighten-4">looks</i></span>
            <span class="profile__user-name">{{$review->loan->description}}</span>
            <span class="profile__user-name">Tenor {{$review->loan->tenor}} [ {{$review->custom_tenor}} ]</span>
            <span class="profile__user-name">REQ %
                {{number_format($review->user->requiredPercent($review->amount_applied),2,'.',',')}}</span>
            <span class="profile__user-name">AVAIL %
                {{number_format($review->user->availablePercent($review->user_id),2,'.',',')}}</span>
        </div>
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">PRODUCT SUMMARY</p>
            <span><i class="small material-icons pink-text lighten-4">looks</i></span>
            <span class="profile__user-name">Guarantor {{$review->user->userInstance($review->guarantor_id)}} (<a
                    href="/#">{{$review->user->loanGuarantorCount($review->guarantor_id)}}</a>)
            </span>
            <span class="profile__user-name">Repayment N {{number_format($review->monthly_deduction,2,'.',',')}}</span>
            <span class="profile__user-name"><a href="/userLoan/discard/{{$review->id}}">Not sure, remove</a></span>
        </div>

        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">STATUS</p>
            <span><i class="small material-icons pink-text lighten-4">looks</i></span>
            <span class="profile__user-name">Active Loans <a
                    href="/user/page/{{$review->user_id}}">{{$review->user->activeLoans($review->user_id)}}</a></span>
            <span class="profile__user-name">Net Pay N {{number_format($review->net_pay,2,'.',',')}}</span>
        </div>


    </div>
    <div class="row">
        <form class="col s12" method="POST" action="/userLoan/reviewStore/{{$review->id}}">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <input placeholder="IPPIS or GFMIS" id="payment_id" name="payment_id"
                        value="{{$review->user->payment_number}}" type="text" class="validate" disabled>
                    <label for="payment_id">Payment ID</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <input id="amount_applied" name="amount_applied" type="text"
                        value="{{number_format($review->amount_applied,2,'.',',')}}" class="validate" disabled>
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
                    <textarea id="notes" name="notes" class="materialize-textarea" data-length="50"></textarea>
                    <label for="notes">Review Notes</label>
                </div>
            </div>

            <button type="submit" class="btn">Review Loan</button>
        </form>
    </div>
</div>
@endsection