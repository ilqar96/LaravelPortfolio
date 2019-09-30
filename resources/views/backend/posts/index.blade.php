@extends('backend.app')

@section('title')
    {{__('post.post_table')}}
@endsection

@push('css')
    <!-- Custom styles for this page -->
    <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <style>
        .top,.bottom{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        tbody > tr > td:last-child{
            display: flex;
            justify-content: space-around;
        }
    </style>
@endpush

@push('scripts')
    <!-- Page level plugins -->
{{--    <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>--}}
{{--    <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>--}}

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/w/bs4/jszip-2.5.0/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/datatables.min.js"></script>

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
                },
                pageLength:25,
                lengthMenu:[
                    [10,25,50,100,-1],
                    [10,25,50,100,'All']
                ],
                order:[
                    [5,'desc']
                ],
                columnDefs:[
                    {
                        targets:['nosort'],
                        orderable: false,
                    },
                    {
                        render: function (data,type,row) {
                            var html = `<img src="${data}" style="height: 40px;" alt="">`;
                            return html;
                        },
                        targets:4,
                    },
                    {
                        render: function (data,type,row) {
                            var html= '';
                            $.each(row.actions, function (key,action) {
                                if(action.title=='delete'){
                                    html += `<a href="${action.url}" data-postid="${row.post_id}" data-toggle="modal" data-target="#deletePostModal"  class="${action.class}"><i class="${action.fa}"></i></a>`;
                                }else if(action.title=='edit'){
                                    html += `<a href="${action.url}" class="${action.class}"><i class="${action.fa}"></i></a>`;
                                }else if(action.title=='show'){
                                    html += `<a href="${action.url}" class="${action.class}"><i class="${action.fa}"></i></a>`;
                                }
                            })
                            return html;
                        },
                        targets:7,
                    }
                ],
                processing:true,
                serverSide:true,
                ajax:{
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '{{route('admin.post_data')}}',
                    type: 'Post',
                },
                columns:[
                    {data:'post_title'},
                    {data:'post_content'},
                    {data:'user_name'},
                    {data:'category_name'},
                    {data:'post_image'},
                    {data:'created_at'},
                    {data:'updated_at'},
                    {data:'operations'},
                ],
                buttons:[
                  'copy','excel','pdf'
                ],
                dom: '<"top"fBl>rt<"bottom"ip><"clear">'
            });
        });
    </script>


    <script>
        $('tbody').on('click','.deletePostBtn',function () {
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
                    <th class="nosort" >{{__('general.image')}}</th>
                    <th>{{__('general.created_at')}}</th>
                    <th>{{__('general.updated_at')}}</th>
                    <th class="nosort" >{{__('general.operations')}}</th>
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
{{--                @foreach($posts as $post)--}}
{{--                    <tr>--}}
{{--                        <td>{{Str::limit($post->title,30,'...')}}</td>--}}
{{--                        <td>{{Str::limit($post->content,30,'...')}}</td>--}}
{{--                        <td>{{$post->user->name}}</td>--}}
{{--                        <td>{{$post->category->name}}</td>--}}
{{--                        <td><img src="{{asset($post->imagePath())}}" style="height: 40px;" alt=""></td>--}}
{{--                        <td>{{$post->created_at}}</td>--}}
{{--                        <td>{{$post->updated_at}}</td>--}}
{{--                        <td class="d-flex justify-content-sm-around">--}}
{{--                            <a href=""  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>--}}
{{--                            <a href="{{route('admin.posts.edit',$post->id)}}"  class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>--}}
{{--                            <a href=""  data-postid="{{$post->id}}" data-toggle="modal" data-target="#deletePostModal" style="width:33px" class="btn btn-danger btn-sm deletePostBtn"><i class="fa fa-trash"></i></a>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
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
