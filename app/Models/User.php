<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'title_job',
        'excerpt',
        'email',
        'password',
        'image',
        'about_me_image',
        'tel',
        'address',
        'welcome_greeting',
        'about_me_title',
        'what_i_do_title',
        'techical_skills_title',
        'professional_skills_title',
        'education_title',
        'work_experience_title'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function skill()
    {
        return $this->hasMany(Skill::class, 'user_id', 'id');
    }

    public function education()
    {
        return $this->hasMany(Education::class, 'user_id', 'id');
    }

    public function service()
    {
        return $this->hasMany(Service::class, 'user_id', 'id');
    }

    public function rrss()
    {
        return $this->hasOne(Rrss::class, 'user_id', 'id');
    }

    public function project()
    {
        return $this->hasMany(Project::class, 'user_id', 'id');
    }

    public function professionalSkill()
    {
        return $this->hasMany(ProfessionalSkill::class, 'user_id', 'id');
    }

    public function workExperience()
    {
        return $this->hasMany(WorkExperience::class, 'user_id', 'id');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'user_id', 'id');
    }

    public function pricing()
    {
        return $this->hasMany(Pricing::class, 'user_id', 'id');
    }

    public function post()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }


    public function getGetImageAttribute($key)
    {
        if ($this->image) {
            return url('storage/$this->image');
        }
    }

    public function getUppercaseAttribute($key)
    {

        return strtoupper($this->name);
    }
}
