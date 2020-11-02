@extends('layouts.base')

@section('block title')
    Master
@endsection


@section('block content')
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/iitu-slider.png"></div>
        </div>
    </section>


    <section class="choseus-section spad"></section>


    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title contact-title">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-text">
                            <i class="fa fa-map-marker"></i>
                            <p>Manas St 8,<br/> Almaty 050000</p>
                        </div>
                        <div class="cw-text">
                            <i class="fa fa-mobile"></i>
                            <ul>
                                <li>8(747) 767 47 47</li>
                                <li>8(727) 320 00 00</li>
                            </ul>
                        </div>
                        <div class="cw-text email">
                            <i class="fa fa-envelope"></i>
                            <p>iitu@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="leave-comment">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('contact_pupil_form') }}" method="post">
                            @csrf
                            <input name="name" id="name" type="text" placeholder="Name">
                            <input name="phone" id="phone" type="text" placeholder="Phone">
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                            <button type="submit" >Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>



@endsection
