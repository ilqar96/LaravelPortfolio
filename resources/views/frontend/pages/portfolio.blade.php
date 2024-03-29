@extends('frontend.app')

@section('title','Huseynli Ilqar - Portfolio')



@push('css')

@endpush


@push('scripts')

@endpush


@section('content')


    <section class="ftco-section">
        <div class="container mt-5">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span>Portfolio</span>
                    <h2>Checkout a few of my works</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/work-1.jpg')}}) " data-scrollax=" properties: { translateY: '-30%'}">
                        <div class="icon d-flex text-center justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <div class="text">
                        <h4 class="subheading">Illustration</h4>
                        <h2 class="heading"><a href="portfolio-single.html">Even the all-powerful Pointing has no control</a></h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
                        <p><a href="#">View Project</a></p>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="portfolio-single.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/work-2.jpg')}}); " data-scrollax=" properties: { translateY: '-30%'}">
                        <div class="icon d-flex text-center justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <div class="text order-1">
                        <h4 class="subheading">Application</h4>
                        <h2 class="heading"><a href="portfoli-singleo.html">Even the all-powerful Pointing has no control</a></h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
                        <p><a href="#">View Project</a></p>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/work-3.jpg')}}); " data-scrollax=" properties: { translateY: '-30%'}">
                        <div class="icon d-flex text-center justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <div class="text">
                        <h4 class="subheading">Web Design</h4>
                        <h2 class="heading"><a href="portfolio-single.html">Even the all-powerful Pointing has no control</a></h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
                        <p><a href="#">View Project</a></p>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="portfolio-single.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/work-4.jpg')}}); " data-scrollax=" properties: { translateY: '-30%'}">
                        <div class="icon d-flex text-center justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <div class="text order-1">
                        <h4 class="subheading">Application</h4>
                        <h2 class="heading"><a href="portfoli-singleo.html">Even the all-powerful Pointing has no control</a></h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
                        <p><a href="#">View Project</a></p>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/work-5.jpg')}}); " data-scrollax=" properties: { translateY: '-30%'}">
                        <div class="icon d-flex text-center justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <div class="text">
                        <h4 class="subheading">Animation</h4>
                        <h2 class="heading"><a href="portfoli-singleo.html">Even the all-powerful Pointing has no control</a></h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
                        <p><a href="#">View Project</a></p>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="portfolio-single.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/work-6.jpg')}}); " data-scrollax=" properties: { translateY: '-30%'}">
                        <div class="icon d-flex text-center justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <div class="text order-1">
                        <h4 class="subheading">Branding</h4>
                        <h2 class="heading"><a href="portfoli-singleo.html">Even the all-powerful Pointing has no control</a></h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
                        <p><a href="#">View Project</a></p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
