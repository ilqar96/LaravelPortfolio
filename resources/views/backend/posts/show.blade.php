@extends('backend.app')

@section('title')
    {{__('post.post_table')}}
@endsection

@push('css')

@endpush

@push('scripts')

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



            </div>
        </div>
    </div>
@endsection
