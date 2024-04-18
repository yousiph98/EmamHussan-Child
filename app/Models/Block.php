<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;
    protected $guarded=[];
    function MaritalBlock()
        {
            return $this->hasMany(Marital::class,'block_id','id');
        }
    function KidBlock()
        {
            return $this->hasMany(Kid::class,'block_id','id');
        }

}
