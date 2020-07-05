<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'serial' => $this->catalog_number,
            'price' => $this->price,
            'vat' => !!$this->has_vat,
            'enable' => !!$this->enable,
        ];
    }
}
