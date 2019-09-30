@extends('backend.app')

@section('title')
    {{__('post.post_table')}}
@endsection

@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />

@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

    <script>
        $('#post-category').select2({
            placeholder: "Choose category...",
        });

        $('#post-user').select2({
            placeholder: "Choose user...",
        });
    </script>


@endpush

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Post Add</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0" style="background-color: transparent;">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('general.dashboard')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.posts.index')}}">{{trans_choice('general.posts',10)}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('general.create')}}</li>
                </ol>
            </nav>
        </div>


        <div class="card-body d-flex justify-content-center" >
            <div class="w-75">
                <form method="POST" action="{{route('admin.posts.store')}}" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="post-image">{{__('post.image')}}</label>
                        <input type="file" name="image"  class="form-control" id="post-image"  placeholder="{{__('post.image')}}">
                    </div>
                    <div class="form-group">
                        <label for="post-title">{{__('post.title')}}</label>
                        <input type="text" name="title" value="{{old('title')}}" class="form-control" id="post-title"  placeholder="{{__('post.title')}}">
                    </div>
                    <div class="form-group">
                        <label for="post-content">{{__('post.content')}}</label>
                        <textarea  name="post_content"  id="post-content"  class="form-control"  placeholder="{{__('post.content')}}" cols="30"  rows="10" >{{old('post_content')}}</textarea>
                    </div>
                    <div class="form-group">
                       @include('backend.partials.user.user_select')
                    </div>
                    <div class="form-group">
                        @include('backend.partials.category.category_select')
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary w-100">{{__('general.add')}}</button>
                </form>
            </div>


        </div>
    </div>
@endsection
