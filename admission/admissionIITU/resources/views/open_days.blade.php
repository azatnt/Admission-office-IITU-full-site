@extends('layouts.base')

@section('block title')
    Reception
@endsection


@section('block content')


    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/receptio.jpg"></div>
        </div>
    </section>


    <section class="choseus-section spad"></section>


    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Open days of IITU</h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-dark">

                <thead>
                <tr>
                    {{--                    <th scope="col">№</th>--}}
                    <th scope="col">Faculty</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Phone</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pupil as $mes)
                    <tr>
                        <td>{{$mes->title}}</td>
                        <td>{{$mes->description}}</td>
                        <td>{{$mes->date}}</td>
                    </tr>

                @endforeach
                </tbody>

            </table>
        </div>
    </section>
@endsection
