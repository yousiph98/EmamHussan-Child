<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $guarded=[];
    function CityCountry()
        {
            return $this->belongsTo(Country::class,"country_id","id");
        }
    function EmployeeCity()
        {
            return $this->hasMany(Employee::class,"city_id","id");
        }
    function MaritalCity()
        {
            return $this->hasMany(Marital::class,"city_id","id");
        }
            
}
