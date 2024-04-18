<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded=[];
    function EmployeeDepartment()
        {
            return $this->hasMany(Employee::class,"department_id","id");
        }
}
