<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $guarded=[];
    // function EmployeeUnit()
    //     {
    //         return $this->hasMany(Employee::class,"unit_id","id");
    //     }
}
