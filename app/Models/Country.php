<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    function CityCountry()
        {
            return $this->hasMany(City::class,"city_id","id");
        }
    function EmployeeCountry()
        {
            return $this->hasMany(Employee::class,"country_id","id");
        }
    function WifeCountry()
        {
            return $this->hasMany(Marital::class,"country_id","id");
        }

}
