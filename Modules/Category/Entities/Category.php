<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'parent_id',
        'min_price',
        'max_price',
        'commission',
        'status',
    ];

    public function subCategory (){
        return $this->hasMany(Category::class,'parent_id','id');
    }
}
