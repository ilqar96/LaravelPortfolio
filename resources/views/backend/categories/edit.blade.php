@extends('backend.app')

@section('title','Categories table')


@push('css')

@endpush

@push('scripts')


@endpush

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Category Edit</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0" style="background-color: transparent;">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.categories.index')}}">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>


        <div class="card-body d-flex justify-content-center" style="height:70vh;">
            <div class="w-75">
                <form method="POST" action="{{route('admin.categories.update',$category->id)}}">
                    <div class="form-group">
                        <label for="category-name">Category Name</label>
                        <input type="text" name="name" value="{{$category->name}}" class="form-control" id="category-name"  placeholder="Category name">
                    </div>
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-primary w-100">{{__('Edit')}}</button>
                </form>
            </div>


        </div>
    </div>
@endsection

