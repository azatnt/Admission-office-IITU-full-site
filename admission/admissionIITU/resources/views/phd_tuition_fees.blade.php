@extends('layouts.base')

@section('block title')
    PHD Tuition Fees
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
                        <h2>TUITION FEES FOR 2020 - 2021</h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-dark">

                @foreach($phd as $mes)
                    <tr>
                        {{--                        <td>{{$mes->faculty}}</td>--}}
                        <div>
                            <a href="{{ asset('uploads/master/' . $mes->tuition) }}">{{$mes->tuition}} Download</a>

                        </div>
                    </tr>

                @endforeach

            </table>
        </div>
    </section>
@endsection
