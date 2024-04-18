<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marital extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];
    protected $dates=['deleted_at'];
    function MaritalCountry()
        {
            return $this->belongsTo(Country::class,"country_id","id");
        }
    function MaritalCity()
        {
            return $this->belongsTo(City::class,"city_id","id");
        }
    function MaritalBill()
        {
            return $this->belongsTo(Bill::class,"bill_id","id");
        }
    function MaritalUser()
        {
            return $this->belongsTo(User::class);
        }
    function MaritalBlock()
        {
            return $this->belongsTo(Block::class,'block_id','id');
        }
    function KidMarital()
        {
            return $this->hasMany(Kid::class);
        }
}
