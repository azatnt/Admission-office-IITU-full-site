@extends('layouts.base')

@section('block title')
    Schedule
@endsection


@section('block content')

    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/schedule.jpg"></div>
        </div>
    </section>


    <section class="choseus-section spad"></section>


    <section class="class-timetable-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Schedule</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="table-controls">
                        <ul>
                            <li class="active" data-tsfilter="barchelor">Barchelor</li>
                            <li data-tsfilter="master">Master</li>
                            <li data-tsfilter="phd">PHD</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="class-timetable">
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="class-time">8.00 - 10.00</td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="phd">
                                    <h5>Web Tech</h5>
                                    <span>N. Yergaziuly</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="barchelor">
                                    <h5>Java</h5>
                                    <span>I. Zhuanyshev</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="phd">
                                    <h5>Python</h5>
                                    <span>V. Scheglov</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="barchelor">
                                    <h5>SDT</h5>
                                    <span>Zh. Bishinalieva</span>
                                </td>
                                <td class="dark-bg blank-td"></td>
                                <td class="hover-bg ts-meta" data-tsmeta="master">
                                    <h5>OS</h5>
                                    <span>S. Sapakova</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="phd">
                                    <h5>.NET</h5>
                                    <span>N. Daurenbayeva</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="class-time">10.00 - 12.00</td>
                                <td class="blank-td"></td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="barchelor">
                                    <h5>.NET</h5>
                                    <span>N. Daurenbayeva</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="phd">
                                    <h5>OS</h5>
                                    <span>S. Sapakova</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="master">
                                    <h5>SDT</h5>
                                    <span>Zh. Bishinalieva</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="phd">
                                    <h5>Python</h5>
                                    <span>V. Scheglov</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="master">
                                    <h5>Java</h5>
                                    <span>I. Zhuanyshev</span>
                                </td>
                                <td class="blank-td"></td>
                            </tr>
                            <tr>
                                <td class="class-time">14.00 - 16.00</td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="barchelor">
                                    <h5>Web Tech</h5>
                                    <span>N. Yergaziuly</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="master">
                                    <h5>Java</h5>
                                    <span>I. Zhuanyshev</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="phd">
                                    <h5>Web Tech</h5>
                                    <span>N. Yergaziuly</span>
                                </td>
                                <td class="blank-td"></td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="phd">
                                    <h5>OS</h5>
                                    <span>S. Sapakova</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="master">
                                    <h5>SDT</h5>
                                    <span>Zh. Bishinalieva</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="barchelor">
                                    <h5>.NET</h5>
                                    <span>N. Daurenbayeva</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="class-time">16.00 - 20.00</td>
                                <td class="hover-bg ts-meta" data-tsmeta="master">
                                    <h5>Python</h5>
                                    <span>V. Scheglov</span>
                                </td>
                                <td class="dark-bg blank-td"></td>
                                <td class="hover-bg ts-meta" data-tsmeta="barchelor">
                                    <h5>OS</h5>
                                    <span>S. Sapakova</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="phd">
                                    <h5>Java</h5>
                                    <span>I. Zhuanyshev</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="master">
                                    <h5>Web Tech</h5>
                                    <span>N. Yergaziuly</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="barchelor">
                                    <h5>.NET</h5>
                                    <span>N. Daurenbayeva</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="phd">
                                    <h5>Python</h5>
                                    <span>V. Scheglov</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
