@extends('backend.app')

@section('title')
    {{__('post.post_table')}}
@endsection

@push('css')

@endpush

@push('scripts')

    <script>
        $('#deletePostBtn').click(function(){
            $postid = $(this).data('postid');
            $route = "{{route('admin.posts.destroy',':postid')}}";
            $route = $route.replace(':postid',$postid);
            $('#deletePostModal form').attr('action',$route);
        });
    </script>

@endpush

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Post Show</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0" style="background-color: transparent;">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('general.dashboard')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.posts.index')}}">{{trans_choice('general.posts',10)}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('general.show')}}</li>
                </ol>
            </nav>
        </div>

        <div class="card-body d-flex justify-content-center" >
            <div class="w-75">

               <div class="img-container d-flex justify-content-center">
                   <img style="height: 200px;"  src="{{asset($post->imagePath())}}" alt="">
               </div>
                <h1 class="text-center">{{$post->title}}</h1>
                <p>{{$post->content}}</p>
                <p>Post category : {{$post->category->name}}</p>
                <p>Post author : {{$post->user->name}}</p>
                <p>Created at : {{$post->created_at}}</p>
                <p>Updated at : {{$post->updated_at}}</p>
                <p>Tags :
                    @foreach($post->tags as $tag)
                        <span style="min-width: 40px;" class="badge badge-secondary">{{$tag->name}}</span>
                    @endforeach
                </p>

                <div class="d-flex justify-content-between">
                    <a href=""  data-postid="{{$post->id}}" data-toggle="modal" data-target="#deletePostModal" class="btn btn-danger btn-lg" id="deletePostBtn">Delete</a>
                    <a class="btn btn-secondary btn-lg" href="{{route('admin.posts.edit',$post->id)}}">Edit</a>
                </div>

            </div>
        </div>
    </div>
@endsection



@section('modal')

    <!-- delete post Modal-->
    <div class="modal fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="deletePostModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Really want delete post ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">{{__('post.delete')}}</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="::;"
                       onclick="event.preventDefault(); document.getElementById('delete-post-form').submit();">
                        Delete
                    </a>
                    <form id="delete-post-form" method="POST"  >
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
