<?php

namespace App\Models;

use App\Models\User;
use App\Models\Centre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    protected $fillable=['nom','date','description','image','user_id','centre_id'];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function centre()
    {
        return $this->belongsTo(Centre::class);
    }
}
