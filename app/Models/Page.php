<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Page extends Model
{
    use Sluggable, SearchableTrait;
    protected $table = 'posts';
    protected $guarded = [];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    protected $searchable = [
        'columns' => [
            'pages.title' => 10,
            'pages.description' => 10,
        ],
    ];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function media(){
        return $this->hasMany(PostMedia::class, 'post_id', 'id');
    }
}
