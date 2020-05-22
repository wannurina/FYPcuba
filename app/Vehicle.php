<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Staff;
use App\Contractor;

class Vehicle extends Model
{
    public $timestamps = false;
    protected $guarded=[];
    protected $fillable = [
        'type', 'plate_no','model','color','upload_docs',
   ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function staff(){
        return $this->belongsTo(Staff::class);
    }

    public function contractor(){
        return $this->belongsTo(Contractor::class);
    }


}
