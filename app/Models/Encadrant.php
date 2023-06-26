<?php

namespace App\Models;

use App\Models\Offre;
use App\Models\Certification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Encadrant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'Fax',
        'telephone',
    ];
    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
    public function certifications()
{
    return $this->hasMany(Certification::class);
}
}
