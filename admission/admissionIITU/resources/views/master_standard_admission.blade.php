@extends('layouts.base')

@section('block title')
    Standard Admission Rule
@endsection


@section('block content')
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/edu_prog_bar.jpg"></div>
        </div>
    </section>


    <section class="choseus-section spad"></section>


    {{--    <section class="classes-section spad">--}}
    {{--        <div class="container">--}}
    {{--            <embed src="files/Syllabus.pdf" type="application/pdf" width="100%" height="500px" />--}}
    {{--        </div>--}}
    {{--    </section>--}}


    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="blog-details-text">
                        <div class="blog-details-title">
                            <h5>Standard Admission Rule</h5>
                            <p></p>
                            @foreach($master as $mes)
                                <div>
                                    <a href="{{ asset('uploads/master/' . $mes->files) }}">{{$mes->files}} Contract</a>

                                </div>


                            @endforeach

                        </div>

                        {{--                        <div class="blog-details-desc">--}}
                        {{--                            <p>According to the results of the competition the committee directs the School lists of pupils who obtain a threshold level and who is eligible to be enrolled in school.</p>--}}
                        {{--                        </div>--}}


                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
