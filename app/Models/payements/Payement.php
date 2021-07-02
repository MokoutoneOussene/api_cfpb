<?php

namespace App\Models\payements;

use App\Models\clients\Client;
use App\Models\modeles\Modele;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Client(){
        return $this->belongsTo(Client::class, 'id_client');
    }

    function Modele(){
        return $this->belongsTo(Modele::class, 'id_modele');
    }
}