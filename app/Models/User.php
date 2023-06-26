<?php

namespace App\Models;

use App\Models\Offre;
use App\Models\Evenement;
use App\Models\Certification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin', // add this field to the fillable list
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
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

    /**
     * Determine if the user is an admin.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->is_admin;
    }
    public function offres()
{
    return $this->belongsToMany(Offre::class);
}
public function certifications()
{
    return $this->hasMany(Certification::class);
}
public function evenements()
{
    return $this->hasMany(Evenement::class);
}
public function participations()
{
    return $this->belongsToMany(Offre::class, 'participations');
}
}
