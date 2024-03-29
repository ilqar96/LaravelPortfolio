@extends('frontend.app')

@section('title','Huseynli Ilqar - Resume')



@push('css')

@endpush


@push('scripts')

@endpush


@section('content')


    <section class="ftco-section about-section">
        <div class="container">
            <div class="row d-flex my-5" data-scrollax-parent="true">
                <div class="col-md-4 author-img" style="background-image: url({{asset('frontend/images/author-1.jpg')}});" data-scrollax=" properties: { translateY: '-70%'}"></div>
                <div class="col-md-2"></div>
                <div class="col-md-6 wrap ftco-animate">
                    <div class="about-desc">
                        <h1 class="bold-text">About</h1>
                        <div class="p-5">
                            <h2 class="mb-5">Hi! I'm Beckham Muff</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in.</p>
                            <p><a href="#">Checkout my resume</a></p>
                            <ul class="ftco-footer-social list-unstyled mt-4">
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                            <h5>Contact me here!</h5>
                            <p>Email: <a href="#">beckham@email</a></p>
                            <p>Phone: <a href="#">(123)-456-789</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-end mt-5">
                <div class="col-md-10">
                    <div class="profile ftco-animate">
                        <h2 class="mb-4">Profile</h2>
                        <h4 class="mb-4">I'm a UI/UX Designer &amp; Frontend Developer from London, UK. I aim to make a difference through my creative solution.</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <div class="row my-5">
                            <div class="col-md-6">
                                <p><strong>Name:</strong> <span>Beckham Muff</span></p>
                                <p><strong>Address:</strong> <span>88 West 21th Street, Suite 721 New York NY 10016</span></p>
                                <p><strong>Phone:</strong> <span>(123)-456-789</span></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Name:</strong> <span>Beckham Muff</span></p>
                                <p><strong>Address:</strong> <span>88 West 21th Street, Suite 721 New York NY 10016</span></p>
                                <p><strong>Phone:</strong> <span>(123)-456-789</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="exp mt-5 ftco-animate">
                        <h2 class="mb-4">Experience</h2>
                        <div class="exp-wrap py-4">
                            <div class="desc">
                                <h4>UX &amp; Interaction Designer <span> - Google Company</span> </h4>
                                <p class="location">Germany - Berlin</p>
                            </div>
                            <div class="year">
                                <p>2017 - Present</p>
                            </div>
                        </div>

                        <div class="exp-wrap py-4">
                            <div class="desc">
                                <h4>UX &amp; UI Designer <span> - QBootstrap.com</span> </h4>
                                <p class="location">Germany - Berlin</p>
                            </div>
                            <div class="year">
                                <p>2015 - 2017</p>
                            </div>
                        </div>

                        <div class="exp-wrap py-4">
                            <div class="desc">
                                <h4>Designer &amp; Developer <span> - Themeforest.net</span> </h4>
                                <p class="location">Germany - Berlin</p>
                            </div>
                            <div class="year">
                                <p>2014 - 2015</p>
                            </div>
                        </div>

                        <div class="exp-wrap py-4">
                            <div class="desc">
                                <h4>Front-End Developer <span> - Big Comany</span> </h4>
                                <p class="location">Germany - Berlin</p>
                            </div>
                            <div class="year">
                                <p>2012 - 2014</p>
                            </div>
                        </div>
                    </div>


                    <div class="exp mt-5 ftco-animate">
                        <h2 class="mb-4">Education</h2>
                        <div class="exp-wrap py-4">
                            <div class="desc">
                                <h4>Master Degree in Computer Science<span> - Harvard University</span> </h4>
                                <p class="location">Germany - Berlin</p>
                            </div>
                            <div class="year">
                                <p>2013 - 2014</p>
                            </div>
                        </div>

                        <div class="exp-wrap py-4">
                            <div class="desc">
                                <h4>Bacheclor of Science in Computer Science<span> - Harvard University</span> </h4>
                                <p class="location">Germany - Berlin</p>
                            </div>
                            <div class="year">
                                <p>2009 - 2012</p>
                            </div>
                        </div>

                        <div class="exp-wrap py-4">
                            <div class="desc">
                                <h4>Diploma in Information Technology<span> - Oxford University</span> </h4>
                                <p class="location">Germany - Berlin</p>
                            </div>
                            <div class="year">
                                <p>2008 - 2010</p>
                            </div>
                        </div>

                        <div class="exp-wrap py-4">
                            <div class="desc">
                                <h4>Front-End Developer <span> - Big Comany</span> </h4>
                                <p class="location">Germany - Berlin</p>
                            </div>
                            <div class="year">
                                <p>2012 - 2014</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 flex-column ftco-animate">
                <div class="col-md-8">
                    <h2 class="mb-4">My Skills</h2>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap">
                        <h4>Photoshop</h4>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                    <div class="progress-wrap">
                        <h4>jQuery</h4>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                <span>60%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap">
                        <h4>HTML5</h4>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="85"
                                 aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                    <div class="progress-wrap">
                        <h4>CSS3</h4>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
                                 aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap">
                        <h4>WordPress</h4>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                    <div class="progress-wrap">
                        <h4>SEO</h4>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
