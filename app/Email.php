<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    // Sans cette ligne, Laravel déduit le nom de latable via le nom du modèle
    protected $table = 'emails';

    // Pour empecher les colonnes created_at et updated_at dans la table
    public $timestamps = false;
}
