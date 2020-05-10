<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Result extends Model
{
    const SUCCESS = "success";
    const FAILED = "failed";
    protected $fillable = ['user_id','state','reponse','question_id'];

    public function question(){
        return $this->belongsTo(Question::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
