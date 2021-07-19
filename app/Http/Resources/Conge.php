<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Conge extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'nom' => $this-> nom,
            'email' => $this->email,
            'statut' => $this->statut,
            'type_conge' => $this->type_conge,
            'date' => $this->date,
            'date_debut' => $this->date_debut,
            'date_fin' => $this->date_fin
        ];
    }
}
