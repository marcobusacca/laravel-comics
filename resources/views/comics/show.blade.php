@extends('layouts.app')

@section('content')
    <main>
        <div class="show-page">
            <!-- Jumbotron Container -->
            <div class="container-fluid jumbotron-container"></div>
            <!-- Comic Banner Container -->
            <div class="container-fluid comic-banner-container">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection