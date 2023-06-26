<?php

namespace App\Models;

use App\Models\User;
use App\Models\Centre;
use App\Models\Encadrant;
use App\Models\Programme;
use App\Models\Certification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offre extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nom',
        'type',
        'Compétences_visées',
        'Objectifs_formation',
        'Public_cible',
        'frais_dossier',
        'cout_formation',
        'lieu_formation',
        'duree_formation',
        'deroulement_formation',
        'selection_candidats',
        'evaluation',
        'diplome_delivre',
        'encadrant_id',
        'centre_id',
    ];
    public function encadrant()
    {
        return $this->belongsTo(Encadrant::class);
    }

    public function centre()
    {
        return $this->belongsTo(Centre::class);
    }

    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }
    public function participants()
{
    return $this->belongsToMany(User::class, 'participations');
}

}
