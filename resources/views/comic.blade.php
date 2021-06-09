@extends('layouts.app')

@section('title')
    Comic
@endsection

@section('main_class')
    main-single-comic
@endsection

@section('main_section')
    <section>
        <!-- Start Comic Image -->
        <div class="comic-image">
            <div class="container-small">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
        </div>
        <!-- End Comic Image -->

        <!-- Start Comic Wrapper -->
        <div class="comic-wrapper">
            <div class="container-small">

                <!-- Start Comic Infos -->
                <div class="comic-info">
                    <div class="infos">
                        <h2>{{ $comic['title'] }}</h2>

                        <div class="availability">
                            <div class="price">
                                U.S. Price: {{ $comic['price'] }}
                            </div>

                            <div class="status">AVAILABLE</div>

                            <div class="check-available">Check Availability <i class="fas fa-caret-down"></i></div>

                        </div>

                        <p class="description">
                            {!! $comic['description'] !!}
                        </p>
                    </div>

                    <!-- Start Advertisement -->
                    <div class="advertisement">
                        <div>ADVERTISEMENT</div>

                        <img src="{{ asset('img/adv.jpg') }}" alt="">
                    </div>
                    <!-- End Advertisement -->
                    
                </div>
                <!-- End Comic Infos -->

            </div>
        </div>
        <!-- End Comic Wrapper -->

        


    </section>
    
@endsection
