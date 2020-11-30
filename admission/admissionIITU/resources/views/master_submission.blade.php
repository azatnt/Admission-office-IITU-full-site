@extends('layouts.base')

@section('block title')
    Documents To Download
@endsection


@section('block content')
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/edu_prog_bar.jpg"></div>
        </div>
    </section>


    <section class="choseus-section spad"></section>


    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>SUBMISSION OF DOCUMENTS</h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-dark">

                @foreach($master as $mes)
                    <tr>
                                                <td>{{$mes->submission}}</td>
{{--                        <div>--}}
{{--                            <a href="{{ asset('uploads/master/' . $mes->prerequisites) }}">{{$mes->prerequisites}} Download</a>--}}

{{--                        </div>--}}
                    </tr>

                @endforeach

            </table>
        </div>
    </section>
@endsection
