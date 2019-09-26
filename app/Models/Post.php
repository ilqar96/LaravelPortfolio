<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
