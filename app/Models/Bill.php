<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $guarded=[];
    function BillUser()
        {
            return $this->belongsTo(User::class);
        }
    function BillEmployee()
        {
            return $this->belongsTo(Employee::class, 'employee_id', 'id');
        }
    function KidBill()
        {
            return $this->hasMany(Kid::class,'bill_id','id');
        }
    function WifeBill()
        {
            return $this->hasMany(Marital::class,'bill_id','id');
        }

}
