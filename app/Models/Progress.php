<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Progress extends Model
{
    const FINISHED = "finished";
    const PROGRESSING = "progressing";
    protected $table = "module_user";

    protected $fillable = ['user_id','module_id','progress','state','exam_date','examinated','exam_result'];
    public $timestamps = false;

}
