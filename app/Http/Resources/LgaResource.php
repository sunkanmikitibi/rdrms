<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LgaResource extends JsonResource
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
            'id' => (string)$this->id,
            'name' => $this->name,
            'lga_code' => $this->lga_code,
            'created_at' => (string)$this->created_at,
        ];
    }
}
