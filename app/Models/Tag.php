<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $primaryKey = 'id';
    protected $table ='tags';
    protected $fillable = ['name'];


    public function posts(){
        return $this->belongsToMany('App\Models\Post','tag_post');
    }
}
