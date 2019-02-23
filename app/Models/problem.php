<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class problem extends Model
{
    use SoftDeletes;
    protected $table = 'm_problem';
    protected $guarded = [
    'id',
    ];
}
