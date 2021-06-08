@extends('layouts.app')

@section('main_section')
    <!-- Start Section Series -->
    <section class="series">
        <div class="container">

            <h2>Current series</h2>

            <!-- Start Comics Container -->
            <div class="comics-container">
                @foreach ($array_comics as $comic)
                    <!-- Start Single Comic -->
                    <div class="comic">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <div class="comic-name">{{ $comic['series'] }}</div>
                    </div>
                    <!-- End Single Comic -->
                @endforeach

            </div>
            <!-- End Comics Container -->

        </div>
    </section>
    <!-- End Section Series -->

@endsection