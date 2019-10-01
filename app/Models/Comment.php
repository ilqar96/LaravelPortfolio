<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','content','user_id','post_id','comment_id'];



    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function childrenComments()
    {
        return $this->hasMany(Comment::class)->with('comments');
    }


}
