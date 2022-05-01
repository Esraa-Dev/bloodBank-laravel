<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = array('title', 'image', 'content', 'category_id');
    protected $appends = array('image_full_path', 'is_favourite');

    public function getImageFullPathAttribute()
    {
        return asset($this->thumbnail);
    }

    public function client()
    {
        return $this->belongsToMany('App/Models\Client');
    }

    public function Category()
    {
        return $this->belongsTo('App/Models\Category');
    }

}
