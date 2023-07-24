@extends('layouts.app')

@section('content')
    <div class="show-page">
        <!-- Jumbotron Container -->
        <div class="container-fluid jumbotron-container"></div>
        <!-- Comic Banner Container -->
        <div class="container-fluid comic-banner-container">
            <div class="container">
                <div class="row">
                    <!-- Comic Banner Image -->
                    <div class="col-12 comic-banner-image" style="background-image: url('{{ $comic['thumb'] }}')">
                        <div class="row flex-column justify-content-between h-100">
                            <!-- Comic Banner Type -->
                            <div class="col-12">
                                <span class="banner comic-banner-type px-2">{{ Str::upper($comic['type']) }}</span>
                            </div>
                            <!-- Comic Banner Gallery -->
                            <div class="col-12 banner comic-banner-gallery text-center">
                                <a href="#">VIEW GALLERY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Comic Description Container -->
        <div class="container comic-description-container py-5">
            <div class="row">
                <!-- Comic Description Col -->
                <div class="col-8 my-3">
                    <div class="row">
                        <!-- Comic Title -->
                        <div class="col-12">
                            <h1 class="text-dark-blue fs-4 fw-bold">{{ Str::upper($comic['title']) }}</h1>
                        </div>
                        <!-- Comic Price & Availability -->
                        <div class="col-12 text-white my-4">
                            <div class="row w-100">
                                <!-- Comic Price -->
                                <div class="col-8 d-flex justify-content-between bg-green border-black fw-bold py-2 px-4">
                                    <div>
                                        <span class="text-green">U.S. Price:</span>
                                        <span>{{ $comic['price'] }}</span>
                                    </div>
                                    <span class="text-green">AVAILABLE</span>
                                </div>
                                <!-- Check Availability -->
                                <div class="col-4 d-flex justify-content-center align-items-center bg-green border-black fw-bold py-2">
                                    <span class="me-2">Check Availability</span>
                                    <i class="fa-solid fa-xs fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Comic Synopsis -->
                        <div class="col-12 text-secondary">
                            <p>{{ $comic['description'] }}</p>
                        </div>
                    </div>
                </div>
                <!-- Advertisement Col -->
                <div class="col-4">
                    <div class="row ps-5">
                        <!-- Advertisement Title -->
                        <div class="col-12 text-end text-secondary my-2">
                            <h5 class="fs-6">ADVERTISEMENT</h5>
                        </div>
                        <!-- Advertisement Banner -->
                        <div class="col-12">
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="comic-advertisement" class="advertisement">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Comic Details Container -->
        <div class="container-fluid comic-details-container bg-grey border">
            <div class="container">
                <div class="row">
                    <!-- Comic Talent Col -->
                    <div class="col-6">
                        <div class="row pe-4">
                            <div class="col-12 my-4">
                                <!-- Talent Title -->
                                <h2 class="text-dark-blue fs-5 fw-bold">Talent</h2>
                            </div>
                            <!-- Art By -->
                            <div class="col-12 border-top border-bottom py-2">
                                <div class="row">
                                    <div class="col-4">
                                        <span class="text-dark-blue">Art by:</span>
                                    </div>
                                    <div class="col-8">
                                        <p>
                                            @foreach ($comic['artists'] as $index => $artist)
                                                @if ($index === count($comic['artists']) - 1)
                                                    <a href="#">{{$artist}}</a>
                                                @else
                                                    <a href="#">{{$artist}},</a>
                                                @endif
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Written By -->
                            <div class="col-12 border-bottom py-2">
                                <div class="row">
                                    <div class="col-4">
                                        <span class="text-dark-blue">Written by:</span>
                                    </div>
                                    <div class="col-8">
                                        <p>
                                            @foreach ($comic['writers'] as $index => $writer)
                                                @if ($index === count($comic['writers']) - 1)
                                                    <a href="#">{{$writer}}</a>
                                                @else
                                                    <a href="#">{{$writer}},</a>
                                                @endif
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comic Specs Col -->
                    <div class="col-6">
                        <div class="row ps-4">
                            <div class="col-12 my-4">
                                <!-- Specs Title -->
                                <h2 class="text-dark-blue fs-5 fw-bold">Specs</h2>
                            </div>
                            <!-- Series -->
                            <div class="col-12 border-top border-bottom py-2">
                                <div class="row">
                                    <div class="col-4">
                                        <span class="text-dark-blue">Series:</span>
                                    </div>
                                    <div class="col-8">
                                        <a href="#">{{ Str::upper($comic['series']) }}</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Us Price -->
                            <div class="col-12 border-bottom py-2">
                                <div class="row">
                                    <div class="col-4">
                                        <span class="text-dark-blue">U.S. Price:</span>
                                    </div>
                                    <div class="col-8">
                                        <span>{{ $comic['price'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- On Sale Date -->
                            <div class="col-12 border-bottom py-2">
                                <div class="row">
                                    <div class="col-4">
                                        <span class="text-dark-blue">On Sale Date:</span>
                                    </div>
                                    <div class="col-8">
                                        <span>{{ $comic['sale_date'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Comic Menu Container -->
        <div class="container-fluid comic-menu-container bg-grey border">
            <div class="container">
                <div class="row">
                    <div class="col-3 border p-3">
                        <a href="#">
                            <div class="row">
                                <div class="col-8 text-secondary">
                                    <span class="menu-text">DIGITAL COMICS</span>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-center">
                                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 border p-3">
                        <a href="#">
                            <div class="row">
                                <div class="col-8 text-secondary">
                                    <span class="menu-text">SHOP DC</span>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-center">
                                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 border p-3">
                        <a href="#">
                            <div class="row">
                                <div class="col-8 text-secondary">
                                    <span class="menu-text">COMIC SHOP LOCATOR</span>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-center">
                                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 fs-6 border p-3">
                        <a href="#">
                            <div class="row">
                                <div class="col-8 text-secondary">
                                    <span class="menu-text">SUBSCRIPTIONS</span>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-center">
                                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

