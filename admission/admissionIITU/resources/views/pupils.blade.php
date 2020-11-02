@extends('layouts.base')

@section('block title')
    Pupils
@endsection


@section('block content')

    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/puplis.jpg_large"></div>
        </div>
    </section>


    <section class="choseus-section spad">
        <div class="container mt-5">
            @include('includes.messages')
        </div>
    </section>


    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>FOR ADMISSION</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="ss-text">
                        <h4>Admission Regulations</h4>
                        <a href="/admission_for_pupils">Explore</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="ss-text">
                        <h4>Submission of Documents</h4>
                        <a href="/submissions">Explore</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="ss-text">
                        <h4>Open Days</h4>
                        <a href="#">Explore</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="ss-text second-row">
                        <h4>Educational Magazine</h4>
                        <a href="#">Explore</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="ss-text">
                        <h4>International Olimpiad of IITU</h4>
                        <a href="#">Explore</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="ss-text second-row">
                        <h4>Guidebook Of Applicant</h4>
                        <a href="#">Explore</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="ss-text second-row">
                        <h4>Tuition Fees</h4>
                        <a href="#">Explore</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="ss-text">
                        <h4>Contacts</h4>
                        <a href="/contact_pupil">Explore</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
