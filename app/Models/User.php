<?php

namespace App\Models;

use Database\Factories\ProfessionalSkillsFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function skill() {
        return $this->hasMany(Skill::class, 'user_id', 'id');
    }

    public function education() {
        return $this->hasMany(Education::class, 'user_id', 'id');
    }

    public function service() {
        return $this->hasMany(Service::class, 'user_id', 'id');
    }

    public function rrss() {
        return $this->hasMany(Rrss::class, 'user_id', 'id');
    }

    public function project() {
        return $this->hasMany(Project::class, 'user_id', 'id');
    }

    public function professionalSkill() {
        return $this->hasMany(ProfessionalSkill::class, 'user_id', 'id');
    }

    public function workExperience() {
        return $this->hasMany(WorkExperience::class, 'user_id', 'id');
    }
}
