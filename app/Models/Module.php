<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'nombre_semaines'];

    public function affectations()
    {
        return $this->hasMany(Affectation::class);
    }
}
