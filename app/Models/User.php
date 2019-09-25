<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $attributes = [
        'role_id'=>3,
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role','role_id','id');
    }


    public function getCreatedAtAttribute($attriute)
    {
        return date('d-m-Y H:i:s',strtotime($attriute));
    }

    public function getUpdatedAtAttribute($attriute)
    {
        return date('d-m-Y H:i:s',strtotime($attriute));
    }

    public function isSuperAdmin(){
        return $this->role->id == 4;
    }

    public function isAdmin(){
        return $this->role->id != 3;
    }

    public function scopeAllWithoutMe($query){
        return $query->whereNotIn ('id',[Auth::user()->id]);
    }

}
