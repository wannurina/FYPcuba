<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Vehicle;

// use Illuminate\Database\Eloquent\Model;

class Contractor extends Authenticatable
{
    public $timestamps = false;
    use Notifiable;

    protected $guard = 'contractor';
    
    protected $guarded = [];

    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
