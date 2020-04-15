<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Vehicle;

class Student extends Authenticatable
{
    public $timestamps = false;
    use Notifiable;
    protected $guard = 'student';
    
    public function vehicles() {
        return $this->hasOne(Vehicle::class);
        // return $this->hasOne('App\Vehicle');
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'password', 'matric_no',
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
}
