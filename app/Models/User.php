<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'password',
        'email',
        'image',
        'candidate_status',
        'status',
        'email_verified_at'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
//        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
         'email_verified_at' => 'datetime',

    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }


    public function scopeRole($query, $role)
    {
        return $query->whereHas('roles', function ($users) use ($role) {
            $users->where('name', $role);
        });
    }


    public function scopeWhereAttendance($query)
    {
        return $query->whereHas('attendance', function ($query) {
            $query->whereDate('created_at', Carbon::now());
        });
    }

    public function scopeWhereSuperNot($query)
    {
        return $query->whereHas(
            'roles', function ($q) {
            $q->whereNotIn('id', [1, 2]);
        });
    }


    public function scopeWhereUserStatus($query)
    {
        return $query->whereHas('roles', function ($q) {
            $q->where('name', '!=', 'Store Manager')->where('name', '!=', 'Vehicle Maintainer');
            $q->where('name', '!=', 'Executive Director')->where('name', '!=', 'Director General');
        })->where('status', 'active');

    }

    public function employer()
    {
        return $this->hasOne(Employer::class);
    }

    public function candidate()
    {
        return $this->hasOne(Candidate::class);
    }



}
