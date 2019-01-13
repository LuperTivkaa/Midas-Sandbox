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
    {{-- end of header part --}}
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


                <div class="overview__stars">
                    <svg class="overview__icon-star">
                        <use xlink:href="{{asset('images/sprite.svg#icon-pin')}}"></use>
                    </svg>
                    <svg class="overview__icon-star">
                        <use xlink:href="{{asset('images/sprite.svg#icon-pin')}}"></use>
                    </svg>
                    <svg class="overview__icon-star">
                        <use xlink:href="{{asset('images/sprite.svg#icon-pin')}}"></use>
                    </svg>
                    <svg class="overview__icon-star">
                        <use xlink:href="{{asset('images/sprite.svg#icon-pin')}}"></use>
                    </svg>
                    <svg class="overview__icon-star">
                        <use xlink:href="{{asset('images/sprite.svg#icon-pin')}}"></use>
                    </svg>
                </div>


                <div class="overview__location">
                    <svg class="overview__icon-location">
                        <use xlink:href="{{asset('images/sprite.svg#icon-location-pin')}}"></use> 
                       
                    </svg>
                    <button class="btn-inline">link me to somewhere</button>
                </div>

                <div class="overview__rating">
                    <div class="overview__rating-average">8.9</div>
                    <div class="overview__rating-count">500 votes</div>
                </div>
            </div>

            <div class="detail">
                <div class="description">
                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, velit nemo! Aperiam cum reprehenderit
                        unde velit dolorum minima? Cum repellat enim assumenda eaque quasi eveniet nulla mollitia accusamus
                        libero similique?
                    </p>

                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, velit nemo! Aperiam cum reprehenderit
                        unde velit dolorum minima? Cum repellat enim assumenda eaque quasi eveniet nulla mollitia accusamus
                        libero similique?
                    </p>

                    <ul class="list">
                        <li class="list__item">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                        <li class="list__item">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                        <li class="list__item">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                        <li class="list__item">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                        <li class="list__item">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                        <li class="list__item">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                        <li class="list__item">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                        <li class="list__item">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                    </ul>

                    <div class="recommend">
                        <p class="recommend__count">
                            Lucy and 3 other friends recommend this service
                        </p>
                        <div class="recommend__friends">
                            <img src="{{asset('images/ternenge.jpg')}}" alt="" class="recommend__photo">
                            <img src="{{asset('images/sesugh.jpg')}}" alt="" class="recommend__photo">
                            <img src="{{asset('images/edigah.jpg')}}" alt="" class="recommend__photo">
                            <img src="{{asset('images/andy.jpg')}}" alt="" class="recommend__photo">
                            <img src="{{asset('images/apaa.jpg')}}" alt="" class="recommend__photo">
                        </div>
                    </div>
                </div>

                <div class="user-reviews">
                    <figure class="review">
                        <blockquote class="review__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, architecto.
                        </blockquote>
                        <figcaption class="review__user">
                            <img src="{{asset('images/ternenge.jpg')}}" alt="review photo" class="review__photo">
                            <div class="review__user-box">
                                <p class="review__user-name">Ternenge Torough</p>
                                <p class="review__user-date">Feb 23rd, 2019</p>
                            </div>
                            <div class="review__rating">
                                7.9
                            </div>
                        </figcaption>
                    </figure>

                    <figure class="review">
                        <blockquote class="review__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, architecto.
                        </blockquote>
                        <figcaption class="review__user">
                            <img src="{{asset('images/andy.jpg')}}" alt="review photo" class="review__photo">
                            <div class="review__user-box">
                                <p class="review__user-name">Shimakaa Iorlumun</p>
                                <p class="review__user-date">Feb 23rd, 2019</p>
                            </div>
                            <div class="review__rating">
                                9.9
                            </div>
                        </figcaption>
                    </figure>

                    <button class="btn-inline">
                        Show All <span>&rarr;</span>
                    </button>

                </div>

            </div>
            <div class="cta">
                <h2 class="cta__book-now">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet reiciendis porro architecto, officia aperiam quibusdam.
                </h2>
                <button class="btn">
                    Book Now  
                </button>
            </div>
        </main>
    </div>
</div>
@endsection