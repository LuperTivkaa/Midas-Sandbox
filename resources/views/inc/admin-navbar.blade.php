<nav class="blue darken-4">

    <div class="container">
        <div class="nav-wrapper">
            <ul class="right">
                @if (Auth::check())
                <li class="right">{{auth()->user()->username}}</li>
                @endif
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo"><img height="30"  src="{{asset('images/logo2.svg')}}" alt="logo"></a>

            <a href="#" data-target="slide-out" class="sidenav-trigger right show-on-large"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down">

                <li><a class="dropdown-trigger" href="/" data-target='dropdown1'><i class="material-icons left">group</i></a></li>
                <li><a class="dropdown-trigger" href="/about" data-target='dropdown2'><i class="material-icons left">bubble_chart</i></a></li>
                <li><a class="dropdown-trigger" href="/about" data-target='dropdown3'><i class="material-icons left">style</i></a></li>
                <li><a class="dropdown-trigger" href="/about" data-target='dropdown4'><i class="material-icons left">person</i></a></li>
                <li><a class="dropdown-trigger" href="/about" data-target='dropdown5'><i class="material-icons left">dashboard</i></a></li>
            </ul>

        </div>
    </div>


</nav>

{{-- SIDE NAV CODE --}}
<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="{{asset('images/logo2.svg')}}">
            </div>
            <a href="#user"><img class="circle" src="{{asset('images/logo2.svg')}}"></a>
            <a href="#name"><span class="grey-text darken-3 name">John Doe</span></a>
            <a href="#email"><span class="grey-text darken-3 email">jdandturk@gmail.com</span></a>
        </div>
    </li>
    <li><a class="subheader">Profile</a></li>
    <li>
        <div class="divider"></div>
    </li>

    <li><a href="#!"><i class="material-icons">person</i>View</a></li>
    <li><a href="#!"><i class="material-icons">settings</i>Change Password</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a class="subheader">Cooperators</a></li>
    <li><a href="#!"><i class="material-icons">add</i>New User</a></li>
    <li><a href="#!"><i class="material-icons">view_list</i>List Users</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a class="subheader">Monthly Savings</a></li>
    <li><a href="#!"><i class="material-icons">create</i>New Savings</a></li>
    <li><a href="#!"><i class="material-icons">add</i>New Template</a></li>
    <li><a href="#!"><i class="material-icons">cloud_upload</i>Upload Deductions</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a class="subheader">Product Schemes</a></li>
    <li><a href="#!"><i class="material-icons">create</i>New Product</a></li>
    <li><a href="#!"><i class="material-icons">view_list</i>All Products</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a class="subheader">Target Savings</a></li>
    <li><a href="#!"><i class="material-icons">create</i>New Target Saving</a></li>
    <li><a href="#!"><i class="material-icons">cloud_download</i>New Template</a></li>
    <li><a href="#!"><i class="material-icons">cloud_upload</i>Upload Target Saving</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a class="subheader">Staff</a></li>
    <li><a href="#!"><i class="material-icons">create</i>New Staff</a></li>
    <li><a href="#!"><i class="material-icons">view_list</i>Staff List</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="#!"><i class="material-icons">vpn_lock</i>Log Out</a></li>

    {{--
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li> --}}
</ul>

{{-- DROP DOWN MENU 1 --}}

<ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!"><i class="material-icons">add</i>New User</a></li>
    <li><a href="#!"><i class="material-icons">view_list</i>List Users</a></li>
    <li class="divider" tabindex="-1"></li>
    {{--
    <li><a href="#!"></a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li> --}}
</ul>

{{-- DROP DOWN MENU 2 --}}

<ul id='dropdown2' class='dropdown-content'>
    <li><a href="#!"><i class="material-icons">create</i>New Savings</a></li>
    <li><a href="#!"><i class="material-icons">add</i>New Template</a></li>
    <li class="divider" tabindex="-1"></li>
    {{--
    <li><a href="#!">three</a></li> --}}
    <li><a href="#!"><i class="material-icons">cloud_upload</i>Upload Deductions</a></li>
    {{--
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li> --}}
</ul>

{{-- DROP DOWN MENU 3 --}}

<ul id='dropdown3' class='dropdown-content'>
    <li><a href="#!"><i class="material-icons">create</i>New Product</a></li>
    <li><a href="#!"><i class="material-icons">view_list</i>All Products</a></li>
    <li class="divider" tabindex="-1"></li>
    {{--
    <li><a href="#!">three</a></li> --}} {{--
    <li><a href="#!"><i class="material-icons">cloud_upload</i>Upload Deductions</a></li> --}} {{--
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li> --}}
</ul>

{{-- DROP DOWN MENU 4 --}}

<ul id='dropdown4' class='dropdown-content'>
    <li><a href="#!"><i class="material-icons">create</i>New Target Saving</a></li>
    <li><a href="#!"><i class="material-icons">cloud_download</i>New Template</a></li>
    <li class="divider" tabindex="-1"></li>
    {{--
    <li><a href="#!">three</a></li> --}}
    <li><a href="#!"><i class="material-icons">cloud_upload</i>Upload Target Saving</a></li>
    {{--
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li> --}}
</ul>

{{-- DROP DOWN MENU 4 --}}

<ul id='dropdown5' class='dropdown-content'>
    <li><a href="#!"><i class="material-icons">create</i>New Staff</a></li>
    <li><a href="#!"><i class="material-icons">view_list</i>Staff List</a></li>
    <li class="divider" tabindex="-1"></li>
    {{--
    <li><a href="#!">three</a></li> --}} {{--
    <li><a href="#!"><i class="material-icons">cloud_upload</i>Upload Deductions</a></li> --}} {{--
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li> --}}
</ul>