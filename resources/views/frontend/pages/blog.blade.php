@extends('frontend.app')

@section('title','Huseynli Ilqar - Blog')



@push('css')

@endpush


@push('scripts')

@endpush


@section('content')


    <section class="ftco-section">
        <div class="container mt-5">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span>Blog</span>
                    <h2>Read our blog</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="100">
                        <a href="{{route('home.single_blog',1)}}" class="block-20" style="background-image: url({{asset('frontend/images/image_2.jpg')}});">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-3">
                                <div><a href="{{route('home.single_blog',1)}}">July 12, 2018</a></div>
                                <div><a href="{{route('home.single_blog',1)}}">Admin</a></div>
                                <div><a href="{{route('home.single_blog',1)}}" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="{{route('home.single_blog',1)}}">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="200">
                        <a href="{{route('home.single_blog',1)}}" class="block-20" style="background-image: url({{asset('frontend/images/image_3.jpg')}});">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-3">
                                <div><a href="{{route('home.single_blog',1)}}">July 12, 2018</a></div>
                                <div><a href="{{route('home.single_blog',1)}}">Admin</a></div>
                                <div><a href="{{route('home.single_blog',1)}}" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="{{route('home.single_blog',1)}}">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{route('home.single_blog',1)}}" class="block-20" style="background-image: url({{asset('frontend/images/image_4.jpg')}});">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="{{route('home.single_blog',1)}}">July 12, 2018</a></div>
                                <div><a href="{{route('home.single_blog',1)}}">Admin</a></div>
                                <div><a href="{{route('home.single_blog',1)}}" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="{{route('home.single_blog',1)}}">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="100">
                        <a href="{{route('home.single_blog',1)}}" class="block-20" style="background-image: url({{asset('frontend/images/image_5.jpg')}});">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-3">
                                <div><a href="{{route('home.single_blog',1)}}">July 12, 2018</a></div>
                                <div><a href="{{route('home.single_blog',1)}}">Admin</a></div>
                                <div><a href="{{route('home.single_blog',1)}}" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="{{route('home.single_blog',1)}}">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="200">
                        <a href="{{route('home.single_blog',1)}}" class="block-20" style="background-image: url({{asset('frontend/images/image_6.jpg')}});">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-3">
                                <div><a href="{{route('home.single_blog',1)}}">July 12, 2018</a></div>
                                <div><a href="{{route('home.single_blog',1)}}">Admin</a></div>
                                <div><a href="{{route('home.single_blog',1)}}" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="{{route('home.single_blog',1)}}">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
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
