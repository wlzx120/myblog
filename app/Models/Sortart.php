<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sortart extends Model
{
    
    protected $table = "sortarts";
    
    protected $fillable = ['name'];
    
    //关联文章
    public function article()
    {
        return $this->hasMany('Article','sort_id');
    }
    
    
    
    
    
    
    
}
