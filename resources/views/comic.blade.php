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

        <!-- Start Comic Details -->
        <div class="comic-details">
            <div class="container-small">

                <!-- Start Talent -->
                <div class="talent">
                    <h3>Talent</h3>

                    <!-- Start Row -->
                    <div class="row">
                        <div class="small-title">Art by:</div>
                        <div class="list">
                            @foreach($comic['artists'] as $artist) 
                            {{$artist}},
                            @endforeach
                        </div>
                    </div>
                    <!-- End Row -->

                    <!-- Start Row -->
                    <div class="row">
                        <div class="small-title">Written by:</div>
                        <div class="list">
                            @foreach($comic['writers'] as $writer) 
                            {{$writer}},
                            @endforeach
                        </div>
                    </div>
                    <!-- End Row -->

                </div>
                <!-- End Talent -->

                <!-- Start Specs -->
                <div class="specs">
                    <h3>Specs</h3>

                    <!-- Start Row -->
                    <div class="row">
                        <div class="small-title">Series:</div>
                        <div class="list">
                            {{ $comic['type'] }}
                        </div>
                    </div>
                    <!-- End Row -->

                    <!-- Start Row -->
                    <div class="row">
                        <div class="small-title">U.S. Price:</div>
                        <div class="list">
                            {{ $comic['price'] }}   
                        </div>
                    </div>
                    <!-- End Row -->

                    <!-- Start Row -->
                    <div class="row">
                        <div class="small-title">On Sale Date:</div>
                        <div class="list">
                            {{ $comic['sale_date'] }}   
                        </div>
                    </div>
                    <!-- End Row -->

                </div>
                <!-- End Specs -->

            </div>
            
        </div>
        <!-- End Comic Details -->


    </section>
    
@endsection
