<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class answer extends Model
{
    use SoftDeletes;
    protected $table = 't_answer';
    protected $dates = [ 'answerDateTime'];
    protected $guarded = [
    'id',
    ];
}
