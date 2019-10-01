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
                @foreach($posts as $post)
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry" data-aos-delay="100">
                            <a href="{{$post->path()}}" class="block-20" style="background-image: url({{asset($post->imagePath())}});">
                            </a>
                            <div class="text p-4">
                                <div class="meta mb-3">
                                    <div><a href="{{$post->path()}}">{{$post->created_at->diffForHumans()}}</a></div>
                                    <div><a href="{{$post->path()}}">{{$post->user->name}}</a></div>
                                    <div><a href="{{$post->path()}}" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                                <h3 class="heading"><a href="{{$post->path()}}">{{Str::limit($post->content,50,'...')}}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{$posts->links()}}

        </div>
    </section>



@endsection
