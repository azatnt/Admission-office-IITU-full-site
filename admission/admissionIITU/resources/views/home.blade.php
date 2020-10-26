@extends('layouts.base')

@section('block title')
    Home
@endsection

@section('block content')
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/main.jpeg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Choose IITU</span>
                                <h1>Be <strong>programmer</strong> with us</h1>
                                <a href="/pupils" class="primary-btn">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why chose us?</span>
                        <h2>4 REASONS TO CHOOSE IITU</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span>№1</span>
                        <h4>Number 1</h4>
                        <p>Over 10 years of development, IITU was able to enter firmly   the ranking of the best technical universities in the country.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span>ME</span>
                        <h4>Modern equipment</h4>
                        <p>The laboratory rooms equipped with new Personal Computers including iMacs</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span>AN</span>
                        <h4>ASIIN</h4>
                        <p>Only University in Kazakhstan to receive ASIIN institutional international accreditation in 2019.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span>AL</span>
                        <h4>Amazing student life</h4>
                        <p>Active and creative students conduct independently various events so that their student life is vibrant and unforgettable</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Educational Programs</span>
                        <h2>WHAT WE CAN OFFER YOU</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/hero/IT.jpeg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Information Technology</span>
                            <h5>12 majors</h5>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/hero/JourRep.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Journalism and Reporting</span>
                            <h5>4 majors</h5>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/hero/ManAdm.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Management and Administration</span>
                            <h5>2 majors</h5>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/hero/InfSec.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Information Security</span>
                            <h4>3 majors</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/hero/Comt.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Communications and Communication Technologies</span>
                            <h4>2 majors</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>For applicants</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>Barchelor's program</h3>
                        <ul>
                            <li>26 186 tg fellowship amount is</li>
                            <li>8 student associations</li>
                            <li>16 dormitory buildings</li>
                            <li>Military department</li>
                            <li>Campus</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">Online registration</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>Master's program</h3>
                        <ul>
                            <li>66 983 tg fellowship amount is</li>
                            <li>72% employed</li>
                            <li>House of young scientists</li>
                            <li>294 research laboratories</li>
                            <li>Campus</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">Online registration</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>PHD program</h3>
                        <ul>
                            <li>102 498 tg fellowship amount is</li>
                            <li>100% employed</li>
                            <li>House of young scientists</li>
                            <li>294 research laboratories</li>
                            <li>Campus</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">Online registration</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/hero/ph6.jpg">
                <a href="img/gallery/gallery-1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/hero/ph2.jpg">
                <a href="img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/hero/ph3.jpg">
                <a href="img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/hero/ph4.jpg">
                <a href="img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/hero/ph5.jpeg">
                <a href="img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/hero/ph1.jpg">
                <a href="img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>

        </div>
    </div>

    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <h2>OUR GRADUATES</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/hero/graduate1.jpeg">
                            <div class="ts_text">
                                <h4>Azat Amanzhol</h4>
                                <span>CEO of Leticia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/hero/graduate2.jpg">
                            <div class="ts_text">
                                <h4>Mark Zuckerberg</h4>
                                <span>CEO of Facebook</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/hero/graduate3.jpg">
                            <div class="ts_text">
                                <h4>Elon Musk</h4>
                                <span>CEO of Tesla</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/hero/graduate4.jpeg">
                            <div class="ts_text">
                                <h4>Dima Komekbay</h4>
                                <span>CEO of Miri</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/hero/graduate5.jpeg">
                            <div class="ts_text">
                                <h4>Pavel Durov</h4>
                                <span>CEO of Telegram</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/hero/graduate6.jpg">
                            <div class="ts_text">
                                <h4>Bill Gates</h4>
                                <span>CEO of Microsoft</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>Manas St 8, <br/>Almaty 050000</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>8 (727) 320 0000</li>
                            <li>8 (747) 767 4747</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>iitu@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
