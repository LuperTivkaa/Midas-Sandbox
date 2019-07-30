@extends('Layouts.admin-app')
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <span class="teal-text">ACTIVATE LOAN</span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 subject-header">
            <span><a href="/approved/loans"><i class="small material-icons tooltipped" data-position="bottom"
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
                <a
                    href="/saving/listings/{{$review->user_id}}">{{number_format($review->user->totalSavings($review->user_id),2,'.',',')}}</a></span>
            <span class="profile__user-name">MNTH SAVE
                {{number_format($review->user->monthlySaving($review->user_id),2,'.',',')}}</span>
        </div>

        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">PRODUCT</p>
            <span><i class="small material-icons pink-text lighten-4">looks</i></span>
            <span class="profile__user-name">{{$review->product->name}}</span>
            <span class="profile__user-name">Tenor {{$review->product->tenor}} [ {{$review->custom_tenor}} ]</span>
            <span class="profile__user-name">REQ %
                {{number_format($review->user->requiredPercent($review->amount_applied),2,'.',',')}}</span>
            <span class="profile__user-name">AVAIL %
                {{number_format($review->user->availablePercent($review->user_id),2,'.',',')}}</span>
        </div>
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">PRODUCT SUMMARY</p>
            <span><i class="small material-icons pink-text lighten-4">looks</i></span>
            <span class="profile__user-name">Guarantor 1:
                {{$review->user->userInstance($review->guarantor_id)->first_name}} (<a
                    href="/#">{{$review->user->loanGuarantorCount($review->guarantor_id)}}</a>)
            </span>
            <span class="profile__user-name">Guarantor 2:
                {{$review->user->userInstance($review->guarantor_id2)->first_name}} (<a
                    href="/#">{{$review->user->loanGuarantorCount($review->guarantor_id2)}}</a>)
            </span>
            <span class="profile__user-name">Repayment N {{number_format($review->monthly_deduction,2,'.',',')}}</span>
            <span class="profile__user-name"><a href="/userLoan/discard/{{$review->id}}">Not sure, remove</a></span>
        </div>

        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">STATUS</p>
            <span><i class="small material-icons pink-text lighten-4">looks</i></span>
            <span class="profile__user-name">{{$review->loan_status}}</span>
            <span class="profile__user-name">Active Loans <a
                    href="/user/page/{{$review->user_id}}">{{$review->user->activeLoans($review->user_id)}}</a></span>
            <span class="profile__user-name">Net Pay N {{number_format($review->net_pay,2,'.',',')}}</span>
        </div>


    </div>
    <div class="row">
        <form class="col s12" method="POST" action="/pay/store/{{$review->id}}">
            {{ csrf_field() }}

            <div class="row">

                <div class="input-field col s12 m6 l6">
                    <input id="sub_id" name="sub_id" type="hidden" value="{{$review->id}}" class="validate">
                    <input id="amount_approved" name="amount_approved" value="{{$review->amount_approved}}" type="text"
                        class="validate" disabled>
                    <label for="amount_approved">Amount Approved</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="start_date" name="start_date" type="text" class="validate datepicker" required>
                    <label for="start_date">Loan Start Date</label>
                </div>
            </div>

            <button type="submit" class="btn">Activate Loan</button>
        </form>
    </div>
</div>
@endsection