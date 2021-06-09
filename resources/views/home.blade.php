@extends('layouts.app')

@section('title')
    Comics
@endsection

@section('main_class')
    main-comics
@endsection

@section('main_section')
    <!-- Start Section Series -->
    <section class="series">
        <div class="container">

            <h2>Current series</h2>

            <!-- Start Comics Container -->
            <div class="comics-container">

                @foreach ($array_comics as $comic)
                    <!-- Start Single Comic -->
                    <a href="{{ route('comic', ['id' => $comic['id'] ] )}}">
                        <div class="comic">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <div class="comic-name">{{ $comic['series'] }}</div>
                        </div>
                    </a>
                    <!-- End Single Comic -->
                @endforeach

            </div>
            <!-- End Comics Container -->

            <div class="btn"><a href="#">Load more</a></div>

        </div>
    </section>
    <!-- End Section Series -->

    <!-- Start Section Buy -->
    <section class="buy">
        <div class="container">

            <!-- Start Single card -->
            <div class="card">
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">

                <div>digital comics</div>
            </div>
            <!-- End Single card -->

            <!-- Start Single card -->
            <div class="card">
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">

                <div>dc merchandise</div>
            </div>
            <!-- End Single card -->

            <!-- Start Single card -->
            <div class="card">
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">

                <div>supscription</div>
            </div>
            <!-- End Single card -->

            <!-- Start Single card -->
            <div class="card">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">

                <div>comic shop locator</div>
            </div>
            <!-- End Single card -->

            <!-- Start Single card -->
            <div class="card">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">

                <div>dc power visa</div>
            </div>
            <!-- End Single card -->

        </div>
    </section>
    <!-- End Section Info -->

@endsection