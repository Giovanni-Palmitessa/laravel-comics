<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dc Comic laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        {{-- HEADER --}}
        @include('header')

        {{-- MAIN WITH JUMBOTRON --}}
        <main>
            <div class="jumbotron"></div>
            <div class="container">
              <div class="main-content">
                <div class="comics">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="Dc Logo"/>
                        <h6></h6>
                      </div>
                </div>
                <div class="learn-more">
                  <span class="button">LOAD MORE</span>
                </div>
              </div>
            </div>
          </main>
    </body>
</html>
