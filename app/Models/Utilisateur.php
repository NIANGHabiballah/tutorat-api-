<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'email', 'mot_de_passe', 'role'];

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }

    public function affectations()
    {
        return $this->hasMany(Affectation::class);
    }
}
