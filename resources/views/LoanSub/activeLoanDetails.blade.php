@extends('Layouts.admin-app')
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <span class="teal-text">LOAN DETAIL</span>
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
            <p class="profile__heading text-grey darken-3">LOANEE</p>
            <span><i class="small material-icons pink-text lighten-4">looks</i></span>
            <span class="profile__user-name"><a href="/user/page/{{$userLoan->user_id}}">{{$userLoan->user->first_name}}
                    {{$userLoan->user->last_name}}</a></span>
            <span class="profile__user-name">{{$userLoan->user->payment_number}}</span>
            <span class="profile__user-name">TOTAL CONTR
                {{number_format($userLoan->user->totalSavings($userLoan->user_id),2,'.',',')}}</span>
            <span class="profile__user-name">MNTH SAVE
                {{number_format($userLoan->user->monthlySaving($userLoan->user_id),2,'.',',')}}</span>
        </div>

        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">PRODUCT</p>
            <span><i class="small material-icons pink-text lighten-4">looks</i></span>
            <span class="profile__user-name">{{$userLoan->loan->description}}</span>
            <span class="profile__user-name">Tenor {{$userLoan->loan->tenor}} [ {{$userLoan->custom_tenor}} ]</span>
            <span class="profile__user-name">Amount =N= {{number_format($userLoan->amount_approved,2,'.',',')}} </span>
            <span></span>
        </div>
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">PAYMENT SUMMARY</p>
            <span><i class="small material-icons pink-text lighten-4">looks</i></span>
            <span class="profile__user-name">Deductions <a href="/loanDeduction/history/{{$userLoan->id}}">
                    {{number_format($userLoan->totalLoanDeductions($userLoan->id),2,'.',',')}} </a></span>
            <span class="profile__user-name">Repayment =N=
                {{number_format($userLoan->monthly_deduction,2,'.',',')}}</span>
            <span class="profile__user-name">Balance
                {{number_format($userLoan->amount_approved-$userLoan->totalLoanDeductions($userLoan->id),2,'.',',')}}</span>
        </div>

        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">STATUS</p>
            <span><i class="small material-icons pink-text lighten-4">looks</i></span>
            <span class="profile__user-name">{{$userLoan->loan_status}}</span>
            <span class="profile__user-name">Due Date</span>
            <span
                class="profile__user-name">{{$userLoan->loan_start_date->diffForHumans($userLoan->loan_end_date->toFormattedDateString())}}</span>
            <span class="profile__user-name">{{$userLoan->loan_end_date->toFormattedDateString()}}</span>
        </div>

    </div>


    <div class="row user-profiles">

        <div class="col s12 m9 l9 profile-detail">

            <div>
                <p class="profile__heading text-grey darken-3">Loan Guarantors</p>
                <table class="highlight">
                    <thead>
                        <tr>
                            <th>NAME</th>
                            <th>Payment#</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$userLoan->user->userInstance($userLoan->guarantor_id)->first_name}}
                                {{$userLoan->user->userInstance($userLoan->guarantor_id)->last_name}}
                            </td>
                            <td>{{$userLoan->user->userInstance($userLoan->guarantor_id)->payment_number}}
                            </td>
                            <td>{{$userLoan->user->userInstance($userLoan->guarantor_id)->phone}}
                            </td>
                        </tr>
                        <tr>
                            <td>{{$userLoan->user->userInstance($userLoan->guarantor_id2)->first_name}}
                                {{$userLoan->user->userInstance($userLoan->guarantor_id2)->last_name}}
                            </td>
                            <td>{{$userLoan->user->userInstance($userLoan->guarantor_id2)->payment_number}}
                            </td>
                            <td>{{$userLoan->user->userInstance($userLoan->guarantor_id2)->phone}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>


    {{-- <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">Product Information</p>
            <p><i class="small material-icons pink-text darken-4">wc</i></p>
            <span class="profile__user-name">{{$userLoan->user->activeLoans($userLoan->user->id)}}</span>
    <span class="profile__user-name"></span>
    <div class="profile__user-box">
        <span class="black-text sub-profile"></span>
        <span class="profile__user-status grey-text lighten-2"></span>
    </div>
    <span><a href="" class="pink-text darken-2">Payment History</a></span>
</div>

<div class="col s12 m9 l9 blue lighten-4  profile-detail">
    <table class="highlight">
        <thead>
            <tr>
                <th>Amount NGN</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activeLoans as $active)
            <tr>
                <td><a href="/activeLoan/detail/{{$active->id}}">{{$active->amount_approved}}</a></td>
                <td>{{$active->loan_start_date->toFormattedDateString()}}</td>
                <td>{{$active->loan_start_date->diffForHumans($active->loan_end_date->toFormattedDateString())}}
                </td>
                <td><a href="/userLoan/stop/{{$active->id}}">Stop</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div> --}}

</div>
@endsection