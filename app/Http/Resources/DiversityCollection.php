<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DiversityCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($diversity) {
            return [
                'id' => $diversity->id,
                // 'name' => $diversity->name,
                'label' => $diversity->name,
                'value' => $diversity->name,
                'enable' => !!$diversity->enable,
            ];
        });
    }
}
