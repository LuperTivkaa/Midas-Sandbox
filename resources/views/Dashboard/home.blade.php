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
                <li class="side-nav__item side-nav__item--active">
                    <a href="#" class="side-nav__link">
                        <svg class="side-nav__icon">
                                <use xlink:href="{{asset('images/sprite.svg#icon-home')}}"></use>
                        </svg>
                        <span>Home</span>
                    </a>
                </li>
                <li class="side-nav__item">
                    <a href="#" class="side-nav__link">
                        <svg class="side-nav__icon">
                                <use xlink:href="{{asset('images/sprite.svg#icon-people')}}"></use>
                        </svg>
                        <span>Users</span>
                    </a>
                </li>
                <li class="side-nav__item">
                    <a href="#" class="side-nav__link">
                        <svg class="side-nav__icon">
                                <use xlink:href="{{asset('images/sprite.svg#icon-database')}}"></use>
                        </svg>
                        <span>Savings</span>
                    </a>
                </li>
                <li class="side-nav__item">
                    <a href="#" class="side-nav__link">
                        <svg class="side-nav__icon">
                                <use xlink:href="{{asset('images/sprite.svg#icon-feather')}}"></use>
                        </svg>
                        <span>Savings Plus</span>
                    </a>
                </li>
                <li class="side-nav__item">
                    <a href="#" class="side-nav__link">
                            <svg class="side-nav__icon">
                                    <use xlink:href="{{asset('images/sprite.svg#icon-layers')}}"></use>
                            </svg>
                            <span>Loans</span>
                    </a>
                </li>
                <li class="side-nav__item">
                    <a href="#" class="side-nav__link">
                            <svg class="side-nav__icon">
                                    <use xlink:href="{{asset('images/sprite.svg#icon-shopping_cart')}}"></use>
                            </svg>
                            <span>Schemes</span>
                    </a>
                </li>
            </ul>
            <div class="legal">
                &copy; 2019 by Midas. All rights reserved.
            </div>
        </nav>



        <main class="midas-view">
            <div class="gallery">
                <figure class="gallery__item">
                    <img src="{{asset('images/midas-product-danger.png')}}" alt="photo" class="gallery__photo">
                </figure>
                <figure class="gallery__item">
                    <img src="{{asset('images/midas-product-light.png')}}" alt="photo" class="gallery__photo">
                </figure>
                <figure class="gallery__item">
                    <img src="{{asset('images/midas-product-danger.png')}}" alt="photo" class="gallery__photo">
                </figure>
            </div>

            <div class="overview">
                <h1 class="overview__heading">
                    Total Savings N 1,234,345.00
                </h1>


        <main class="midas-view">
            midas content view
        </main>
    </div>
    {{-- end wrapper for side bar --}}
</div>
@endsection