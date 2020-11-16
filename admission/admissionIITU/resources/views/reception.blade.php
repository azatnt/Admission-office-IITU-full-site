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
                        <h2>Online Reception</h2>
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
                @foreach($receptions as $mes)
                <tr>
{{--                    <th scope="row">1</th>--}}
                    <td>{{$mes->faculty}}</td>
                    <td>{{$mes->full_name}}</td>
                    <td>{{$mes->phone}}</td>
                </tr>
{{--                <tr>--}}
{{--                    <th scope="row">2</th>--}}
{{--                    <td>Information Security</td>--}}
{{--                    <td>Komekbay Dinmukhammed</td>--}}
{{--                    <td>87774372399</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">3</th>--}}
{{--                    <td>Management and Administration</td>--}}
{{--                    <td>Umirzakov Madiyar</td>--}}
{{--                    <td>87003213322</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">4</th>--}}
{{--                    <td>Physics Teacher Training</td>--}}
{{--                    <td>Naimankhan Ayan</td>--}}
{{--                    <td>87763217732</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">5</th>--}}
{{--                    <td>Journalism and Reporting</td>--}}
{{--                    <td>Koldasov Nurlan</td>--}}
{{--                    <td>87023411233</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">6</th>--}}
{{--                    <td>Communications Technology</td>--}}
{{--                    <td>Baiturinov Asset</td>--}}
{{--                    <td>87753479239</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">7</th>--}}
{{--                    <td>Finance, economics insurance</td>--}}
{{--                    <td>Aymirza Kobylandi</td>--}}
{{--                    <td>87774372371</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">8</th>--}}
{{--                    <td>Computer Science</td>--}}
{{--                    <td>Shoibekov Daulet</td>--}}
{{--                    <td>87713283211</td>--}}
{{--                </tr>--}}
                @endforeach
                </tbody>

            </table>
        </div>
    </section>
@endsection
