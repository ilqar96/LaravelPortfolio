<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function datatable(Request $request){

        $realColumnNames = [
            'post_title'=>'title',
            'post_content'=>'content',
            'user_name'=>'user_name',
            'category_name'=>'category_name',
            'post_image'=>'image',
            'created_at'=>'created_at',
            'updated_at'=>'updated_at',
        ];

        // post requests from ajax . Order by column name and direction value (desc, asc)
        $orderColumnName = $request->columns[$request->order[0]['column']]['data'];
        $orderDirection = $request->order[0]['dir'];
        $searchText = $request->search['value'];

        // start query
        $query = Post::query();

        // query add left joins and select . add category and user table columns (Lazy loading)
        $query->with(['category','user'])
            ->leftJoin('categories as c', 'posts.category_id', '=', 'c.id')
            ->leftJoin('users as u', 'posts.user_id', '=', 'u.id')
            ->select('posts.*','c.name as category_name','u.name as user_name');

        // columns in query . left join
        $columns = ['title','content','u.name','c.name','posts.created_at','posts.updated_at'];

        // if search value set then add where like %% condition to query
        if($searchText!='' && isset($searchText) &&  !empty($searchText)){
            foreach($columns as $column){
                $query->orWhere($column, 'LIKE', '%' . $searchText . '%');
            }
        }

        // get filtered query count
        $recordsFiltered = $query->count();
        // add start and limit and order conditions to query
        $query->offset($request->start)
            ->limit($request->length)
            ->orderBy($realColumnNames[$orderColumnName],$orderDirection);
        // fetch posts from query builder
        $posts = $query->get();

        // response which we send with json
        $response =[];
        $response['data']= [] ;
        $response['recordsTotal'] = Post::count();
        $response['recordsFiltered'] =$recordsFiltered;

        // add table rows to data array
        foreach ($posts as $post ){
            $response['data'][]= [
                'post_id'=>$post->id,
                'post_title'=> Str::limit($post->title,30,'...'),
                'post_content'=> Str::limit($post->content,30,'...'),
                'user_name'=> $post->user->name,
                'category_name'=> $post->category->name,
                'post_image'=> '<img src="'.asset($post->imagePath()).'" style="height: 40px;" alt="">',
                'created_at'=> $post->created_at,
                'updated_at'=> $post->updated_at,
                'operations'=> '
                        <div class="d-flex justify-content-sm-around">
                        <a href=""  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="'.route('admin.posts.edit',$post->id).'" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                        <a href=""  data-postid="'.$post->id.'" data-toggle="modal" data-target="#deletePostModal" style="width:33px" class="btn btn-danger btn-sm deletePostBtn"><i class="fa fa-trash"></i></a>
                        </div>',
            ];
        }

        return response()->json($response);
    }
}

