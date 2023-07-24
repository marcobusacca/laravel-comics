@extends('layouts.app')

@section('content')
    <main>
        <div class="index-page">
            <!-- Jumbotron Container -->
            <div class="container-fluid jumbotron-container">
                <div class="container">
                    <div class="jumbotron-row">
                        <!-- Jumbtron Label Col -->
                        <div class="jumbotron-col">
                            <!-- Jumbtron Label -->
                            <h1>CURRENT SERIES</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Content Card Container -->
            <div class="container content-card-container">
                <div class="row flex-wrap">
                    @foreach ($comics as $id => $comic)
                        <!-- Main Content Card Col -->
                        <div class="card-col">
                            <!-- Card Image -->
                            <a href="{{ Route('comic', $id) }}">
                                <div class="card-image w-100" style="background-image: url({{ $comic['thumb'] }})"></div>
                            </a>
                            <!-- Card Text -->
                            <a href="{{ Route('comic', $id) }}">
                                <div class="card-text w-100">
                                    <h3>{{ Str::upper($comic['series']) }}</h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <!-- Main Load Button Col -->
                    <div class="col-12 load-col d-flex justify-content-center">
                        <a href="{{ Route('home') }}" class="fw-bold">LOAD MORE</a>
                    </div>
                </div>
            </div>
            <!-- Banner Container -->
            <div class="container-fluid banner-container">
                <div class="container">
                    <div class="row">
                        <!-- Banner Col -->
                        <div class="banner-col">
                            <!-- Banner Image -->
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="banner-image">
                            <!-- Banner Text -->
                            <a href="{{ Route('home') }}">DIGITAL COMICS</a>
                        </div>
                        <!-- Banner Col -->
                        <div class="banner-col">
                            <!-- Banner Image -->
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="banner-image">
                            <!-- Banner Text -->
                            <a href="{{ Route('home') }}">DC MERCHANDISE</a>
                        </div>
                        <!-- Banner Col -->
                        <div class="banner-col">
                            <!-- Banner Image -->
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="banner-image">
                            <!-- Banner Text -->
                            <a href="{{ Route('home') }}">SUBSCRIPTION</a>
                        </div>
                        <!-- Banner Col -->
                        <div class="banner-col">
                            <!-- Banner Image -->
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="banner-image">
                            <!-- Banner Text -->
                            <a href="{{ Route('home') }}">COMIC SHOP LOCATOR</a>
                        </div>
                        <!-- Banner Col -->
                        <div class="banner-col">
                            <!-- Banner Image -->
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="banner-image">
                            <!-- Banner Text -->
                            <a href="{{ Route('home') }}">DC POWER VISA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection