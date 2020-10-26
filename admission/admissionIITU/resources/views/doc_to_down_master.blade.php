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
            <embed src="files/Syllabus.pdf" type="application/pdf" width="100%" height="500px" />
        </div>
    </section>
@endsection
