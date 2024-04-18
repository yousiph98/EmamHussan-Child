<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'employee_id',
        'email',
        'password',
        'active',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
function UserEmployee()
    {
        return $this->belongsTo(Employee::class,'employee_id','id');
    }
function BillUser()
    {
        return $this->hasMany(Bill::class);
    }
function EmployeeUser()
    {
        return $this->hasMany(Employee::class,'user_id','id');
    }
function WifeUserUser()
    {
        return $this->hasMany(Marital::class);
    }
function KidUser()
    {
        return $this->hasMany(Kid::class);
    }

}
