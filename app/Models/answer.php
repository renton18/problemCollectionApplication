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

    //belongsTo設定
    public function problem()
    {
        return $this->belongsTo('App\Models\problem', "problemId", "problemId");
    }
}
