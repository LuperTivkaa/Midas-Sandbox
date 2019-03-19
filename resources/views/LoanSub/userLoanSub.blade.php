@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">User Loan Account Detail</p>
            <span><a href="/user/all"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="All Users">group</i></a></span>
            <span><a href="/New"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Create User">person_add</i></a></span>
            <span><a href=""><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="User's Savings">account_balance_wallet</i></a></span>
            <span><a href=""><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="User's Target Savings">monetization_on</i></a></span>
            <span><a href=""><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Subscribed Products Schemes">local_grocery_store</i></a></span>
        </div>
    </div>

    <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            {{-- <img src="{{asset('images/andy.jpg')}}" alt="" class="circle"> --}}
            <p class="profile__heading text-grey darken-3">Personal Details</p>
            <img src="{{asset('images/andy.jpg')}}" alt="" class="profile__photo">
            <span class="profile__user-name">Mr</span>
            <span class="profile__user-name">Shimakaa  Andrew</span>
            <div class="profile__user-box">
                <span class="black-text sub-profile">Birth Date</span>
                <span class="profile__user-date grey-text lighten-2">29th Jan 1978</span>
                <span class="black-text sub-profile">Joined Since</span>
                <span class="profile__join-date grey-text lighten-2">2nd May, 2017</span>
                <span class="black-text sub-profile">Sex</span>
                <span class="profile__user-status grey-text lighten-2">Male</span>
            </div>

            <span><a href="/editProfile/{id}" class="pink-text darken-2">Edit</a></span>
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
                            <td>8</td>
                            <td>76856</td>
                            <td>+23480967366366</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

    <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">Active Loans</p>
            <p><i class="small material-icons pink-text darken-4">wc</i></p>
            <span class="profile__user-name">2</span>
            <span class="profile__user-name"></span>
            <div class="profile__user-box">
                <span class="black-text sub-profile"></span>
                <span class="profile__user-status grey-text lighten-2"></span>
            </div>
            <span><a href="/editNok/{id}" class="pink-text darken-2">Edit</a></span>
        </div>
        <div class="col s12 m9 l9 profile-detail">
            <p>Detail of the loans here</p>
        </div>
    </div>

    <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">Pending Loans</p>
            <p><i class="small material-icons pink-text lighten-4">looks</i></p>
            <span class="profile__user-name">2</span>
            <span class="profile__user-name"></span>

            <div class="profile__user-box">
                <span class="black-text sub-profile">Total Contribution</span>
                <span class="profile__user-date grey-text lighten-2">NGN 290000</span>
                <span class="black-text sub-profile">Monthly Contribution</span>
                <span class="profile__join-date grey-text lighten-2">NGN 10000</span>
            </div>
            <span><a href="/editBank/{id}" class="pink-text darken-2">Edit</a></span>
        </div>
        <div class="col s12 m9 l9 pink lighten-4 profile-detail">
            {{-- @if ($profile) --}}
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Amount Applied NGN</th>
                        <th>Required 30%</th>
                        <th>Available 30%</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1000000</td>
                        <td>300000</td>
                        <td>250000</td>
                        <td><a href="">Review</a></td>
                    </tr>
                </tbody>
            </table>
            {{-- @else
            <p>No Record Added Yet</p>
            @endif --}}
        </div>
    </div>
</div>
@endsection