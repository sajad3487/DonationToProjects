<?php

namespace Modules\Customer\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\Solution;

class Donation extends Model
{
    protected $fillable = [
        'customer_id',
        'solution_provider_id',
        'solution_id',
        'amount',
        'transaction_token',
        'status',
    ];

    public function customer (){
        return $this->hasOne(User::class,'id','customer_id');
    }

    public function solution_provider (){
        return $this->hasOne(User::class,'id','solution_provider_id');
    }

    public function solution (){
        return $this->hasOne(Solution::class,'id','solution_id');
    }
}
