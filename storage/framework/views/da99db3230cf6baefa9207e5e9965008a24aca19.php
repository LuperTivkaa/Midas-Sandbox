<nav class="blue darken-4">

    <div class="container">
        <div class="nav-wrapper">
            <ul class="right">
                <?php if(Auth::check()): ?>
                <li class="right"><?php echo e(auth()->user()->first_name); ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo"><img height="30" src="<?php echo e(asset('images/logo2.svg')); ?>" alt="logo"></a>

            <a href="#" data-target="slide-out" class="sidenav-trigger right show-on-large"><i
                    class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down">

                <li><a class="dropdown-trigger" href="/" data-target='dropdown1'><i
                            class="material-icons left">group</i></a></li>
                <li><a class="dropdown-trigger" href="/about" data-target='dropdown2'><i
                            class="material-icons left">bubble_chart</i></a></li>
                <li><a class="dropdown-trigger" href="/about" data-target='dropdown3'><i
                            class="material-icons left">style</i></a></li>
                <li><a class="dropdown-trigger" href="/about" data-target='dropdown4'><i
                            class="material-icons left">person</i></a></li>
                <li><a class="dropdown-trigger" href="/about" data-target='dropdown5'><i
                            class="material-icons left">dashboard</i></a></li>
            </ul>

        </div>
    </div>


</nav>


<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="<?php echo e(asset('images/logo2.svg')); ?>">
            </div>
            <a href="#"><img class="circle" src="<?php echo e(url('storage/photos/'.auth()->user()->photo)); ?>"></a>
            <a href="#"><span class="grey-text darken-3 name"><?php if(Auth::check()): ?>
                    <?php echo e(auth()->user()->first_name); ?>, <?php echo e(auth()->user()->last_name); ?><?php endif; ?>
                </span></a>
            <a href="#"><span
                    class="grey-text darken-3 email"><?php if(Auth::check()): ?><?php echo e(auth()->user()->email); ?><?php endif; ?></span></a>
        </div>
    </li>
    <li><a class="subheader">Profile</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="/change/password"><i class="material-icons">settings</i>Change Password</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a class="subheader">Cooperators</a></li>
    <li><a href="/New"><i class="material-icons">add</i>New User</a></li>
    <li><a href="/user/all"><i class="material-icons">view_list</i>List Users</a></li>
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
    <li><a class="subheader">Composite Documents</a></li>
    <li><a href="#!"><i class="material-icons">book</i>Statement</a></li>
    <li><a href="#!"><i class="material-icons">view_list</i>Master Savings</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="#!"><i class="material-icons">vpn_lock</i>Log Out</a></li>

    
</ul>



<ul id='dropdown1' class='dropdown-content'>


    <li><a href="/New"><i class="material-icons">add</i>New User</a></li>

    <li><a href="/user/all"><i class="material-icons">view_list</i>List Users</a></li>


    <li class="divider" tabindex="-1"></li>
    
</ul>



<ul id='dropdown2' class='dropdown-content'>
    <li><a href="#!"><i class="material-icons">create</i>New Savings</a></li>
    <li><a href="#!"><i class="material-icons">add</i>New Template</a></li>
    <li class="divider" tabindex="-1"></li>
    
    <li><a href="#!"><i class="material-icons">cloud_upload</i>Upload Deductions</a></li>
    
</ul>



<ul id='dropdown3' class='dropdown-content'>
    <li><a href="#!"><i class="material-icons">create</i>New Product</a></li>
    <li><a href="#!"><i class="material-icons">view_list</i>All Products</a></li>
    <li class="divider" tabindex="-1"></li>
      
</ul>



<ul id='dropdown4' class='dropdown-content'>
    <li><a href="#!"><i class="material-icons">create</i>New Target Saving</a></li>
    <li><a href="#!"><i class="material-icons">cloud_download</i>New Template</a></li>
    <li class="divider" tabindex="-1"></li>
    
    <li><a href="#!"><i class="material-icons">cloud_upload</i>Upload Target Saving</a></li>
    
</ul>



<ul id='dropdown5' class='dropdown-content'>
    <li><a href="#!"><i class="material-icons">create</i>New Staff</a></li>
    <li><a href="#!"><i class="material-icons">view_list</i>Staff List</a></li>
    <li class="divider" tabindex="-1"></li>
      
</ul>