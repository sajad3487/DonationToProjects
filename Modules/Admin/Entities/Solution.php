<?php

namespace Modules\Admin\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Category\Entities\category;
use Modules\Customer\Entities\Donation;
use Modules\Media\Entities\media;

class Solution extends Model
{
    protected $fillable = [
        'category_id',
        'user_id',
        'goal_amount',
        'achieved_amount',
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

    public function comments (){
        return $this->hasMany(Note::class,'owner_id','id')->where('type','solution_comment');
    }

    public function reports (){
        return $this->hasMany(Note::class,'owner_id','id')->where('type','solution_report');
    }

    public function category (){
        return $this->belongsTo(category::class,'category_id','id');
    }

    public function donations (){
        return $this->hasMany(Donation::class,'solution_id','id');
    }
}
