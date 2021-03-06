@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">USER DETAILS</p>
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
            <span class="profile__user-name">{{$profile->title}}</span>
            <span class="profile__user-name">{{$profile->first_name}} {{$profile->last_name}}</span>
            <div class="profile__user-box">
                <span class="black-text sub-profile">Birth Date</span>
                <span class="profile__user-date grey-text lighten-2">{{$profile->dob->toFormattedDateString()}}</span>
                <span class="black-text sub-profile">Joined Since</span>
                <span class="profile__join-date grey-text lighten-2">{{$profile->created_at->toFormattedDateString()}}</span>
                <span class="black-text sub-profile">Sex</span>
                <span class="profile__user-status grey-text lighten-2">{{$profile->sex}}</span>
            </div>


            <span><a href="/editProfile/{{$profile->id}}" class="pink-text darken-2">Edit</a></span>
        </div>
        <div class="col s12 m9 l9 profile-detail">
            @if ($profile)
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
                            <td>{{$profile->staff_no}}</td>
                            <td>{{$profile->payment_number}}</td>
                            <td>{{$profile->phone}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <table class="highlight">
                    <thead>
                        <tr>
                            <th>Job Cadre</th>
                            <th>Employ Type</th>
                            <th>Email</th>
                            <th>Marital Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$profile->job_cadre}}</td>
                            <td>{{$profile->employ_type}}</td>
                            <td>{{$profile->email}}</td>
                            <td>{{$profile->marital_status}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <table class="highlight">
                    <thead>
                        <tr>
                            <th>Dept</th>
                            <th>Home</th>
                            <th>Residence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$profile->dept}}</td>
                            <td>{{$profile->home_add}}</td>
                            <td>{{$profile->res_add}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @else
            <p>No Record Added Yet</p>
            @endif

        </div>

    </div>

    <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">Next of Kin</p>
            <p><i class="small material-icons pink-text darken-4">wc</i></p>
            <span class="profile__user-name">{{$profile->nok->title}}</span>
            <span class="profile__user-name">{{$profile->nok->first_name}} {{$profile->nok->last_name}}</span>
            <div class="profile__user-box">
                <span class="black-text sub-profile">Sex</span>
                <span class="profile__user-status grey-text lighten-2">{{$profile->nok->gender}}</span>
            </div>
            <span><a href="/editNok/{{$profile->nok->id}}" class="pink-text darken-2">Edit</a></span>
        </div>
        <div class="col s12 m9 l9 profile-detail">
            @if ($profile)
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Relationship</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$profile->nok->relationship}}</td>
                        <td>{{$profile->nok->email}}</td>
                        <td>{{$profile->nok->phone}}</td>
                    </tr>
                </tbody>
            </table>
            @else
            <p>No Record Added Yet</p>
            @endif
        </div>
    </div>

    <div class="row user-profiles">
        <div class="col s12 m3 l3 profile">
            <p class="profile__heading text-grey darken-3">Bank</p>
            <p><i class="small material-icons pink-text lighten-4">looks</i></p>
            <span class="profile__user-name">{{$profile->bank->bank_name}}</span>
            <span class="profile__user-name">{{$profile->bank->acct_number}}</span> {{--
            <div class="profile__user-box">
                <span class="black-text sub-profile">Sex</span>
                <span class="profile__user-status grey-text lighten-2">{{$user->sex}}</span>
            </div> --}}
            <span><a href="/editBank/{{$profile->bank->id}}" class="pink-text darken-2">Edit</a></span>
        </div>
        <div class="col s12 m9 l9 pink lighten-4 profile-detail">
            @if ($profile)
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Branch</th>
                        <th>Sort Code</th>
                        <th>Acct Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$profile->bank->bank_branch}}</td>
                        <td>{{$profile->bank->sort_code}}</td>
                        <td>{{$profile->bank->acct_name}}</td>
                    </tr>
                </tbody>
            </table>
            @else
            <p>No Record Added Yet</p>
            @endif
        </div>
    </div>
</div>
@endsection