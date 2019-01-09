@extends('Layouts.admin') 
@section('admin') {{-- overall container --}}
<div class="midas-container">
    {{-- header markup --}}
    <header class="header">
        {{-- logo --}}
        <img src="{{asset('images/logo.png')}}" alt="" class="logo"> {{-- search box --}}
        <form action="#" class="search">
            <input type="text" class="search__input" placeholder="Search User">
            <button class="search__button">
                <svg class="search__icon">
                <use xlink:href="{{asset('images/sprite.svg#icon-magnifying-glass')}}"></use>   
                </svg>
            </button>
        </form>
        {{-- user nav --}}
        <nav class="user-nav">
            <div class="user-nav__icon-box">
                <svg class="user-nav__icon">
                    <use xlink:href="{{asset('images/sprite.svg#icon-bookmark')}}"></use>
                </svg>
                <span class="user-nav__notification">7</span>
            </div>
            <div class="user-nav__icon-box">
                <svg class="user-nav__icon">
                    <use xlink:href="{{asset('images/sprite.svg#icon-chat')}}"></use>
                </svg>
                <span class="user-nav__notification">13</span>
            </div>
            <div class="user-nav__user">
                <img src="{{asset('images/boy.png')}}" alt="user photo" class="user-nav__user-photo">
                <span class="user-nav__user-name">Tivkaa</span>
            </div>
        </nav>
    </header>
    {{-- end of header part --}} {{-- wrapper for sidebar --}}
    <div class="midas-content">
        <nav class="sidebar">
            <ul class="side-nav">
                <li class="side-nav__items">
                    <a href="#" class="side-nav__link">
                        <svg class="side-nav__icon">
                                <use xlink:href="{{asset('images/sprite.svg#icon-home')}}"></use>
                        </svg>
                        <span>Home</span>
                    </a>
                </li>
                <li class="side-nav__items">
                    <a href="#" class="side-nav__link">
                        <svg class="side-nav__icon">
                                <use xlink:href="{{asset('images/sprite.svg#icon-people')}}"></use>
                        </svg>
                        <span>Users</span>
                    </a>
                </li>
                <li class="side-nav__items">
                    <a href="#" class="side-nav__link">
                        <svg class="side-nav__icon">
                                <use xlink:href="{{asset('images/sprite.svg#icon-database')}}"></use>
                        </svg>
                        <span>Contributions</span>
                    </a>
                </li>
                <li class="side-nav__items">
                    <a href="#" class="side-nav__link">
                        <svg class="side-nav__icon">
                                <use xlink:href="{{asset('images/sprite.svg#icon-feather')}}"></use>
                        </svg>
                        <span>Targeted Savings</span>
                    </a>
                </li>
                <li class="side-nav__items">
                    <a href="#" class="side-nav__link">
                            <svg class="side-nav__icon">
                                    <use xlink:href="{{asset('images/sprite.svg#icon-layers')}}"></use>
                            </svg>
                            <span>Loans</span>
                        </a>
                </li>
                <li class="side-nav__items">
                    <a href="#" class="side-nav__link">
                            <svg class="side-nav__icon">
                                    <use xlink:href="{{asset('images/sprite.svg#icon-shopping_cart')}}"></use>
                            </svg>
                            <span>Products Scheme</span>
                        </a>
                </li>
            </ul>
            <div class="legal">
                &copy; 2019 by Midas. All rights reserved.
            </div>
        </nav>





        <main class="midas-view">
            midas content view
        </main>
    </div>
    {{-- end wrapper for side bar --}}
</div>
@endsection