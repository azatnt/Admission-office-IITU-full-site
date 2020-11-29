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
                        <h2>Online Consultation for Master's degree</h2>
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
                @foreach($master as $mes)
                    <tr>
                        {{--                    <th scope="row">1</th>--}}
                        <td>{{$mes->faculty}}</td>
                        <td>{{$mes->full_name}}</td>
                        <td>{{$mes->phone}}</td>
                    </tr>

                @endforeach
                </tbody>

            </table>
        </div>
    </section>
@endsection
