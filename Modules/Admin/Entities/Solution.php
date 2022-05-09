<?php

namespace Modules\Admin\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Entities\media;

class Solution extends Model
{
    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'brief_description',
        'description',
        'issue',
        'solution',
        'our_function',
        'reason',
        'effect',
        'address',
        'e_location',
        'w_location',
        'responsible_person',
        'progress',
        'donors',
        'status',
    ];

    public function owner (){
        return $this->hasOne(User::class,'id','user_id');
    }

    public function medias (){
        return $this->hasMany(media::class,'owner_id','id')->where('type','solution_media');
    }

    public function images (){
        return $this->hasMany(media::class,'owner_id','id')->where('type','solution_image');
    }

    public function main_image (){
        return $this->hasOne(media::class,'owner_id','id')->where('type','solution_main_image');
    }
}
