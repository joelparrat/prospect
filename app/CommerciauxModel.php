<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommerciauxModel extends Model
{
    protected $table='Commerciaux';
    protected $fillable = ['mail', 'nom', 'prenom', 'tel', 'ref', 'adr_no', 'adr_rue', 'adr_postal', 'adr_ville', 'password', 'type'];
    protected $hidden = ['password'];
}
