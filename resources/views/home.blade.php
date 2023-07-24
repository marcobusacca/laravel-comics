<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- BootStrap CDN CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        
        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Head Title -->
        <title>laravel-comics</title>

        <!-- Styles -->
        @vite('resources/js/app.js')
    </head>
    <body>
        @include('partials/header')
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
        @include('partials/footer')
    </body>
</html>