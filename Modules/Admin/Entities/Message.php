<?php

namespace Modules\Admin\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'owner_id',
        'parent_id',
        'destination_id',
        'type',
        'body',
        'status',
    ];

    public function texts (){
        return $this->hasMany(Message::class,'parent_id','id');
    }

    public function sender (){
        return $this->hasOne(User::class,'id','owner_id');
    }

    public function receiver (){
        return $this->hasOne(User::class,'id','destination_id');
    }
}
