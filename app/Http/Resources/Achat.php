<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Achat extends JsonResource
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
            'nom' => $this->nom,
            'email' => $this->email,
            'qte' => $this->qte,
            'designation' => $this->designation,
            'ref_fourni' => $this->ref_fourni,
            'devis' => $this->devis
        ];
    }
}
