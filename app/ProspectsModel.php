<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProspectsModel extends Model
{
    protected $table='Prospects';
    protected $fillable = ['nom', 'prenom', 'mail', 'tel', 'type', 'naissance', 'adr', 'pays', 'entreprise', 'profession', 'fkid'];
}
