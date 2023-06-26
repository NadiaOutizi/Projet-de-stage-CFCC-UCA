<?php

namespace App\Models;

use App\Models\Offre;
use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Centre extends Model
{
    protected $fillable=['nom','adress'];
    use HasFactory;
 

    public function offres()
    {
        return $this->hasMany(Offre::class);
    }

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }

}
