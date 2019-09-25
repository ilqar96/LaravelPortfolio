@extends('backend.app')

@section('title','Categories table')


@push('css')
    <!-- Custom styles for this page -->
    <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>


    <script>
        $('.deleteUserBtn').click(function () {
            $categoryid = $(this).data('categoryid');
            $route = "{{route('admin.categories.destroy',':categoryid')}}";
            $route = $route.replace(':categoryid',$categoryid);
            $('#deleteCategoryModal form').attr('action',$route);
        })
    </script>

@endpush

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Categories</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Categories table</h6>
        <a href="{{route('admin.categories.create')}}" style="width: 200px;" class="btn btn-primary">Add</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Operations</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                        <td class="d-flex justify-content-sm-around">
                            <a href=""  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{route('admin.categories.edit',$category->id)}}"  class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                            <a href=""  data-categoryid="{{$category->id}}" data-toggle="modal" data-target="#deleteCategoryModal" style="width:33px" class="btn btn-danger btn-sm deleteUserBtn"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection


@section('modal')

    <!-- delete category Modal-->
    <div class="modal fade" id="deleteCategoryModal" tabindex="-1" role="dialog" aria-labelledby="deleteCategoryModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Really want delete category ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">{{__('category.delete')}}</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="::;"
                       onclick="event.preventDefault(); document.getElementById('delete-category-form').submit();">
                        Delete
                    </a>
                    <form id="delete-category-form" method="POST"  >
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
