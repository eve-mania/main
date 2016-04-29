@extends('layouts.app')

@section('content')
<section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(theme/eve-pics/4.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Удобный <span>Расчет</span> производства топлива</h2>
                                    <p>Быстро и не напрягаясь считаем стоимость производства различного топлива для наших ПОСов с учетом закупочных цен.</p>
                                    <a class="btn btn-primary btn-lg" href="#">Считать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(theme/eve-pics/3.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Цитадель</span> — построй свою мечту или сломай чужую</h2>
                                    <p>Новое обновление. Новые перемены. Что несут они нам? </p>
                                    <a class="btn btn-primary btn-lg" href="#">Подробности</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(theme/eve-pics/9.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Beautifully designed <span>free</span> one page template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->
@endsection