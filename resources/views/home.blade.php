@extends('layouts.app')

@section('content')
    <main>
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
                @foreach ($comics as $item)
                    <!-- Main Content Card Col -->
                    <div class="card-col">
                        <!-- Card Image -->
                        <a href="{{ Route('home') }}">
                            <div class="card-image w-100" style="background-image: url({{ $item['thumb'] }})"></div>
                        </a>
                        <!-- Card Text -->
                        <a href="{{ Route('home') }}">
                            <div class="card-text w-100">
                                <h3>{{ Str::upper($item['series']) }}</h3>
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
    </main>
@endsection
