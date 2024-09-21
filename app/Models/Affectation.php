<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['module', 'utilisateur_id', 'groupe_id'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
