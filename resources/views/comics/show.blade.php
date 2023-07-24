@extends('layouts.app')

@section('content')
    <div class="show-page">
        <!-- Jumbotron Container -->
        <div class="container-fluid jumbotron-container"></div>
        <!-- Comic Banner Container -->
        <div class="container-fluid comic-banner-container">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ $comic['thumb'] }}" alt="comic-banner">
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
                                <div class="col-8 d-flex justify-content-between bg-green border-black fw-bold py-2">
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
                    <div class="row">
                        <!-- Advertisement Title -->
                        <div class="col-12 text-end text-secondary">
                            <h5 class="fs-6">ADVERTISEMENT</h5>
                        </div>
                        <!-- Advertisement Banner -->
                        <div class="col-12">
                            <img src="{{ $comic['thumb'] }}" alt="comic-advertisement" class="advertisement">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection