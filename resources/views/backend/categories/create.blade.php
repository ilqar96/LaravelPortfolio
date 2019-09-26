@extends('backend.app')

@section('title','Categories table')


@push('css')

@endpush

@push('scripts')


@endpush

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{__('category.add')}}</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0" style="background-color: transparent;">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('general.dashboard')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.categories.index')}}">{{trans_choice('general.categories',10)}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('general.create')}}</li>
                </ol>
            </nav>
        </div>


        <div class="card-body d-flex justify-content-center" style="height:70vh;">
            <div class="w-75">
                <form method="POST" action="{{route('admin.categories.store')}}">
                    <div class="form-group">
                        <label for="category-name">{{__('category.name')}}</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="category-name"  placeholder="{{__('category.name')}}">
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary w-100">{{__('general.add')}}</button>
                </form>
            </div>


        </div>
    </div>
@endsection

