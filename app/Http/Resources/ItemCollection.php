<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ItemCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($item) {
            // dd($item);
            return [
                'id' => $item->id,
                'name' => $item->name,
                'serial' => $item->catalog_number,
                'price' => $item->price,
                'vat' => !!$item->has_vat,
                'enable' => !!$item->enable,
            ];
        });
    }
}
