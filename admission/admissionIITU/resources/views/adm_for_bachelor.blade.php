@extends('layouts.base')

@section('block title')
    Bachelor Admission
@endsection


@section('block content')
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/iitu-slider.png"></div>
        </div>
    </section>


    <section class="choseus-section spad"></section>


    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="blog-details-text">
                        <div class="blog-details-title">
                            <h5>Admission Regulations</h5>
                            <p></p>
                            @foreach($bachelor as $mes)
                                {{ $mes->admission_regulations }}

                            @endforeach
                        </div>
                        {{--                        <div class="blog-details-desc">--}}
                        {{--                            <p>Admission to the specialized school IITU is developed by the School annually under the Model Rules of admission to educational organizations that implement educational curriculum of basic secondary, general secondary education of the Republic of Kazakhstan.--}}


                        {{--                                Acceptance of applications begins after the presentation of the document of the state sample on the level of basic secondary education.--}}
                        {{--                            </p>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
