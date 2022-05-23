<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Relación uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\image', 'imageable');
    }

    //Relacion uno a muchos polimorfica
    public function comments(){
        return $this->morphToMany('App\Models\Comments', 'commentable');
    }

    //Relacion muchos a muchos polimorfica
    public function posts(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
