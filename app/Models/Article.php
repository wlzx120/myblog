<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
    protected $table = 'articles';
    
    protected $fillable = ['title', 'author', 'content','sort_id'];

    //关联分类表
    public function sort()
    {
        return $this->belongsTo('App\Models\Sortart','sort_id');
    }
    
}
