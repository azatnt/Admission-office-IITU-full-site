@extends('layouts.base')

@section('block title')
    PHD State Order
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
                        <h2>State Order</h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Faculty</th>
                    <th scope="col">Specialty</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">B010</th>
                    <td>Computer Teacher Training</td>
                    <td>Physics Teacher</td>

                </tr>
                <tr>
                    <th scope="row">B044</th>
                    <td>Management and Administration</td>
                    <td>Innovation Management</td>

                </tr>
                <tr>
                    <th scope="row">B042</th>
                    <td>Journalism and Reporting</td>
                    <td>Digital Journalism</td>

                </tr>
                <tr>
                    <th scope="row">B059</th>
                    <td>Communications Technology</td>
                    <td>Telecommunication System</td>

                </tr>
                <tr>
                    <th scope="row">B046</th>
                    <td>Finance, economics insurance</td>
                    <td>Financial Technology</td>

                </tr>
                <tr>
                    <th scope="row">B011</th>
                    <td>Computer Science</td>
                    <td>Computer Digitalization of Education</td>

                </tr>
                <tr>
                    <th scope="row">B057</th>
                    <td>Information Technology</td>
                    <td>CSSE</td>

                </tr>
                <tr>
                    <th scope="row">B058</th>
                    <td>Information Security</td>
                    <td>Computer Security</td>

                </tr>

                </tbody>
            </table>
        </div>
    </section>

@endsection
