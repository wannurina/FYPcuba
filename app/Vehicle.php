<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
class Vehicle extends Model
{
    protected $guarded=[];

    public function student(){
        return $this.belongsTo(Student::class);
    }
}
