@extends('backend.app')

@section('title')
    {{__('post.post_table')}}
@endsection

@push('css')
    <!-- Custom styles for this page -->
    <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "language": {
            @if(app()->getLocale()=='az')
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Azerbaijan.json",
            @else
                    'url':'//cdn.datatables.net/plug-ins/1.10.19/i18n/English.json',
            @endif

                }
            });
        });
    </script>


    <script>
        $('.deletePostBtn').click(function () {
            $postid = $(this).data('postid');
            $route = "{{route('admin.posts.destroy',':postid')}}";
            $route = $route.replace(':postid',$postid);
            $('#deletePostModal form').attr('action',$route);
        })
    </script>

@endpush

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">{{trans_choice('general.posts',20)}}</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">{{__('post.post_table')}}</h6>
        <a href="{{route('admin.posts.create')}}" style="width: 200px;" class="btn btn-primary">{{__('general.add')}}</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>{{__('general.title')}}</th>
                    <th>{{__('general.content')}}</th>
                    <th>{{__('general.author')}}</th>
                    <th>{{trans_choice('general.categories',1)}}</th>
                    <th>{{__('general.image')}}</th>
                    <th>{{__('general.created_at')}}</th>
                    <th>{{__('general.updated_at')}}</th>
                    <th>{{__('general.operations')}}</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>{{__('general.title')}}</th>
                    <th>{{__('general.content')}}</th>
                    <th>{{__('general.author')}}</th>
                    <th>{{trans_choice('general.categories',1)}}</th>
                    <th>{{__('general.image')}}</th>
                    <th>{{__('general.created_at')}}</th>
                    <th>{{__('general.updated_at')}}</th>
                    <th>{{__('general.operations')}}</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{Str::limit($post->title,30,'...')}}</td>
                        <td>{{Str::limit($post->content,30,'...')}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->category->name}}</td>
                        <td>{{$post->image}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td class="d-flex justify-content-sm-around">
                            <a href=""  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{route('admin.posts.edit',$post->id)}}"  class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                            <a href=""  data-postid="{{$post->id}}" data-toggle="modal" data-target="#deletePostModal" style="width:33px" class="btn btn-danger btn-sm deletePostBtn"><i class="fa fa-trash"></i></a>
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
