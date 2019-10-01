@extends('frontend.app')

@section('title','Huseynli Ilqar - Blog post')



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
                    <h2>{{$post->title}}</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">

                    <p>{{$post->content}}</p>



                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            @foreach($post->tags as $tag)
                                <a href="#" class="tag-cloud-link">{{$tag->name}}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="about-author d-flex pt-5">
                        <div class="bio align-self-md-center mr-4">
                            <img src="images/person_1.jpg" alt="img" class="img-fluid mb-4">
                        </div>
                        <div class="desc align-self-md-center">
                            <h3>About The Author</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                        </div>
                    </div>


                    <div class="pt-5 mt-5">
                        <h3 class="mb-5">6 Comments</h3>
                        <ul class="comment-list">

                            @foreach ($comments as $comment)
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="images/person_1.jpg" alt="img">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">July 27, 2018 at 2:21pm</div>
                                        <p>{{ $comment->content }}</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                    </div>

                                    <ul class="children">
                                        @foreach ($comment->childrenComments as $childComment)
                                            @include('frontend.partials.comment.child_comment', ['child_comment' => $childComment])
                                        @endforeach
                                    </ul>

                                </li>
                            @endforeach
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="#">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>

                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section>



@endsection
