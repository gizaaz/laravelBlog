<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content'];

    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
