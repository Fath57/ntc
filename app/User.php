<?php

namespace App;

use App\Models\Cj;
use App\Models\Module;
use App\Models\Progress;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    const ADMIN="admin";
    const NTC_ADMIN="ntc_admin";
    const MEMBRE="membre";
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','address1','address2','birthday','place_of_birth','occupation','role_id','phone','hero_of','remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cj(){
        return $this->hasOne(Cj::class,'user_id','id');
    }

    function modules(){
        return $this->hasMany(Module::class);
    }

    function examinatedModules(){
        return $this->hasMany(Progress::class)->where('examinated',1);
    }

    function finishedModules(){
        return $this->hasMany(Progress::class)->where('progress',Progress::FINISHED);
    }

}
