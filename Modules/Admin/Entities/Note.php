<?php

namespace Modules\Admin\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Entities\media;

class Note extends Model
{
    protected $fillable = [
        'owner_id',
        'parent_id',
        'user_id',
        'title',
        'body',
        'type',
        'status',
    ];

    public function user () {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function media_report (){
        return $this->hasOne(media::class,'owner_id','id')->where('type','report_media');
    }
}
