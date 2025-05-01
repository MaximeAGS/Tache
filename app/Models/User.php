<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',     
        'email',
        'password',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'zip_code',
        'date_of_birth',
        'gender',
        'profile_photo',
        'status',
        'email_verified_at',
        'remember_token',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'is_admin',
        'firstname',    
        'lastname',     
        'profession',   
        'salary',
        'department_id',
        'role',
        'position',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function assignedTasks()
    {
        return $this->hasMany(Tache::class, 'assigned_to');
    }

    public function createdTasks()
    {
        return $this->hasMany(Tache::class, 'created_by');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isManager()
    {
        return $this->role === 'manager';
    }
}
