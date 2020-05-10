<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    const STATUS_PUBLISHED = "published";
    const STATUS_UNPUBLISHED = "unpublished";

    public function module(){
        return $this->belongsTo(Module::class);
    }

    public function users(){
        return $this->belongsToMany(User::class)->withPivot(['end_date','begin_date']);
    }
}
