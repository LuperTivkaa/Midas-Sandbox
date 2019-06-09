@extends('Layouts.admin-app')
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">USER PRODUCT(S)</p>
            <span><a href="/user/all"><i class="small material-icons tooltipped" data-position="bottom"
                        data-tooltip="All Users">group</i></a></span>
            <span><a href="/New"><i class="small material-icons tooltipped" data-position="bottom"
                        data-tooltip="Create User">person_add</i></a></span>
            <span><a href=""><i class="small material-icons tooltipped" data-position="bottom"
                        data-tooltip="User's Savings">account_balance_wallet</i></a></span>
            <span><a href=""><i class="small material-icons tooltipped" data-position="bottom"
                        data-tooltip="User's Target Savings">monetization_on</i></a></span>
            <span><a href=""><i class="small material-icons tooltipped" data-position="bottom"
                        data-tooltip="Subscribed Products Schemes">local_grocery_store</i></a></span>
        </div>
    </div>

    <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            {{-- <img src="{{asset('images/andy.jpg')}}" alt="" class="circle"> --}}
            <p class="profile__heading text-grey darken-3">Personal Details</p>
            <img src="{{asset('images/andy.jpg')}}" alt="" class="profile__photo">
            <span class="profile__user-name">{{$user->title}}</span>
            <span class="profile__user-name">{{$user->first_name}} {{$user->last_name}}</span>
            <div class="profile__user-box">
                <span class="black-text sub-profile">Birth Date</span>
                <span class="profile__user-date grey-text lighten-2">{{$user->dob->toFormattedDateString()}}</span>
                <span class="black-text sub-profile">Joined Since</span>
                <span class="profile__join-date grey-text lighten-2">{{$user->created_at->diffForHumans()}}</span>
                <span class="black-text sub-profile">Sex</span>
                <span class="profile__user-status grey-text lighten-2">{{$user->sex}}</span>
            </div>

            <span><a href="/editProfile/{{$user->id}}" class="pink-text darken-2">Edit</a></span>
        </div>

        <div class="col s12 m9 l9 profile-detail">

            <div>
                <table class="highlight">
                    <thead>
                        <tr>
                            <th>Staff #</th>
                            <th>Payment #</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$user->staff_no}}</td>
                            <td>{{$user->payment_number}}</td>
                            <td>{{$user->phone}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
    @if ($activeLoans->count() >=1 )
    <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">Active Loans</p>
            <p><i class="small material-icons pink-text darken-4">wc</i></p>
            <span class="profile__user-name">{{$user->activeLoans($user->id)}}</span>
            <span class="profile__user-name"></span>
            <div class="profile__user-box">
                <span class="black-text sub-profile"></span>
                <span class="profile__user-status grey-text lighten-2"></span>
            </div>
            <span><a href="" class="pink-text darken-2">All Payment History</a></span>
        </div>

        <div class="col s12 m9 l9 blue lighten-4  profile-detail">
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Principal NGN</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Action</th>
                        <th>History</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($activeLoans as $active)
                    <tr>
                        <td><a href="/activeLoan/detail/{{$active->id}}">{{$active->amount_approved}}</a></td>
                        <td>{{$active->loan_start_date->toFormattedDateString()}}</td>
                        <td>{{$active->loan_start_date->diffForHumans($active->loan_end_date->toFormattedDateString())}}
                        </td>
                        <td>
                            <a href="/userLoan/stop/{{$active->id}}">Stop</a>
                            <a href="/loan/repay/{{$active->id}}">Pay</a>
                        </td>
                        <td><a href="/loanDeduction/history/{{$active->id}}">View</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @else @endif

    <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">Pending Loans</p>
            <p><i class="small material-icons pink-text lighten-4">looks</i></p>
            <span class="profile__user-name">{{$user->pendingLoans($user->id)}}</span>
            <span class="profile__user-name"></span>

            <div class="profile__user-box">
                <span class="black-text sub-profile">Total Contribution</span>
                <span class="profile__user-date grey-text lighten-2">NGN
                    {{number_format($user->totalSavings($user->id)), 2, '.',','}}</span>
                <span class="black-text sub-profile">Monthly Contribution</span>
                <span class="profile__join-date grey-text lighten-2">
                    NGN {{number_format($user->monthlySaving($user->id), 2,'.',',')}}
                </span>
            </div>
            {{-- <span><a href="/editBank/{id}" class="pink-text darken-2">Edit</a></span> --}}
        </div>
        <div class="col s12 m9 l9 pink lighten-4 profile-detail">
            @if ($pendingLoans->count() >=1)
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Amount (NGN)</th>
                        <th>Required 30%</th>
                        <th>Available 30%</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendingLoans as $pending)
                    <tr>
                        <td>{{number_format($pending->amount_applied,2,'.',',')}}</td>
                        <td>{{number_format($pending->user->requiredPercent($pending->amount_applied), 2,'.',',')}}</td>
                        <td>{{number_format($pending->user->availablePercent($pending->user_id), 2,'.',',')}}</td>
                        <td><a href="/userLoan/review/{{$pending->id}}">Review</a> <a
                                href="/userLoan/discard/{{$pending->id}}">Discard</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>User has no loan applications</p>
            @endif
        </div>
    </div>

    @if ($userPendingProducts->count() >=1)
    <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">Pending Subscriptions</p>
            <p><i class="small material-icons pink-text lighten-4">looks</i></p>
            <span class="profile__user-name">{{$user->pendingProducts($user->id)}}</span>
            <span class="profile__user-name"></span>

            <div class="profile__user-box">
                <span class="black-text sub-profile"></span>
                <span class="profile__user-date grey-text lighten-2"></span>
                <span class="black-text sub-profile"></span>
                <span class="profile__join-date grey-text lighten-2"></span>
            </div>
            {{-- <span><a href="/editBank/{id}" class="pink-text darken-2">Edit</a></span> --}}
        </div>
        <div class="col s12 m9 l9  profile-detail">

            <table class="highlight">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Units</th>
                        <th>x-item</th>
                        <th>Total Cost NGN</th>
                        <th>Net Pay NGN</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($userPendingProducts as $product)
                    <tr>
                        <td>{{$product->product->name}}</td>
                        <td>{{$product->units}}</td>
                        <td>{{$product->product->unit_cost}}</td>
                        <td>{{number_format($product->total_amount,2,'.',',')}}</td>
                        <td>{{number_format($product->net_pay,2,'.',',')}}</td>
                        <td><a href="/prodSub/review/{{$product->id}}">Review</a> <a
                                href="/userProdSub/delete/{{$product->id}}">Discard</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    @else @endif @if ($userProducts->count() >=1)
    <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">Active Subscriptions</p>
            <p><i class="small material-icons pink-text lighten-4">looks</i></p>
            <span class="profile__user-name">{{$user->activeProductSub($user->id)}}</span>
            <span class="profile__user-name"></span>

            <div class="profile__user-box">
                <span class="black-text sub-profile"></span>
                <span class="profile__user-date grey-text lighten-2"></span>
                <span class="black-text sub-profile"></span>
                <span class="profile__join-date grey-text lighten-2"></span>
            </div>
            {{-- <span><a href="/editBank/{id}" class="pink-text darken-2">Edit</a></span> --}}
        </div>
        <div class="col s12 m9 l9 blue lighten-4  profile-detail">

            <table class="highlight">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Sum N</th>
                        <th>Sum Repay N</th>
                        <th>Balance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($userProducts as $myProduct)
                    <tr>
                        <td>{{$myProduct->product->name}}</td>
                        <td>{{number_format($myProduct->total_amount,2,'.',',')}}</td>
                        <td>{{number_format($myProduct->totalSubDeductions($myProduct->id),2,'.',',')}}</td>
                        <td>{{number_format($myProduct->total_amount-$myProduct->totalSubDeductions($myProduct->id),2,'.',',')}}
                        </td>
                        <td><a href="/product/repay/{{$myProduct->id}}">Repay</a> <a
                                href="/prodSub/stop/{{$myProduct->id}}">Stop</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    @else @endif
</div>
@endsection