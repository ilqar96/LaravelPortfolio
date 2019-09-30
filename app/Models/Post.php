<?php

namespace App\Models;

use App\Http\Requests\PostRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Intervention\Image\Facades\Image;

class Post extends Model
{
    use SoftDeletes;

    protected $table ='posts';
    protected $primaryKey ='id';
    protected $fillable = [
        'title',
        'content',
        'image',
        'user_id',
        'category_id',
    ];

    protected $attributes = [
        'image'=>'default.png',
    ];

    public function getCreatedAtAttribute($attriute)
    {
        return date('d-m-Y H:i:s',strtotime($attriute));
    }

    public function getUpdatedAtAttribute($attriute)
    {
        return date('d-m-Y H:i:s',strtotime($attriute));
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag','tag_post');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }


    public function imagePath(){
        return 'uploads/posts/'.$this->image;
    }

    public function publicImagePath(){
        return public_path('uploads/posts/').$this->image;
    }

    public static function storeImage(PostRequest $postRequest ,$image_name='default.png'){

        if($postRequest->hasFile('image')){
            $imageName = time().'.'.$postRequest->image->getClientOriginalExtension();
            $postRequest->image->move(public_path('uploads/posts/'), $imageName);
            $image = Image::make(public_path('uploads/posts/' . $imageName))->fit(100,100);
            $image->save();
        }else{
            $imageName= $image_name;
        }

        return $imageName;
    }

}
