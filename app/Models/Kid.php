<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kid extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];
    protected $dates=['deleted_at'];
function KidUser()
{
    return $this->belongsTo(User::class);
}
function KidBlock()
{
    return $this->belongsTo(Block::class,'block_id','id');
}
function KidWife()
{
    return $this->belongsTo(Marital::class);
}

function KidBill()
{
    return $this->belongsTo(Bill::class);
}
public function getAge(){
    $this->birthdate->diff($this->attributes['dob'])
    ->format('%y years, %m months and %d days');
}

}
