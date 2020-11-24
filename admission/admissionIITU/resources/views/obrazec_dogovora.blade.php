@extends('layouts.base')

@section('block title')
    Obrazec Dogovora
@endsection


@section('block content')

    <section class="choseus-section spad"></section>


    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="blog-details-text">
                        <div class="blog-details-title">
                            <h5>Obrazcy Dogovorov</h5>
                            <p></p>
                            @foreach($bachelor as $mes)
                                <div>
                                    <a href="{{ asset('uploads/pupils/' . $mes->files) }}">{{$mes->files}} Download</a>

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
