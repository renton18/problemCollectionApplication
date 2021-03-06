<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class problem extends Model
{
    use SoftDeletes;
    protected $table = 'm_problem';
    protected $dates = [ 'problemUpdateTime'];
    protected $guarded = [
    'id',
    ];

    // //primaryKeyの変更
    // protected $primaryKey = "problemId";
    //hasMany設定
    public function answers()
    {
        return $this->hasMany('App\Models\answer', "problemId", "problemId");
    }
}
