<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'name',
        'first_requirement',
        'second_requirement',
        'third_requirement',
        'type',
    ];
}
