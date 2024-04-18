<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Format;

class Employee extends Model
{
    use HasFactory;
    protected $guarded=[];
function EmployeeUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
function EmployeeCountry()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }
function EmployeeCity()
    {
        return $this->belongsTo(City::class,'city_id','id');
    }
function EmployeeStatus()
    {
        return $this->belongsTo(Status::class,'status_id','id');
    }
function EmployeeDepartment()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }
// function EmployeeUnit()
//     {
//         return $this->belongsTo(Unit::class,'unit_id','id');
//     }
function EmployeePosition()
    {
        return $this->belongsTo(Position::class,'position_id','id');
    }

function BillEmployee()
    {
        return $this->hasOne(Bill::class,'employee_id', 'id' );
    }
function UserEmployee()
    {
        return $this->hasOne(User::class,'employee_id','id');
    }

}
