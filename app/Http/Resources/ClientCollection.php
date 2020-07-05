<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ClientCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($client) {
            // dd($client->diversities()->select('name')->get());
            return [
                'id' => $client->id,
                'name' => $client->name,
                'type' => $client->type,
                'enable' => !!$client->enable,
                // 'diversity' => [$client->diversities()->value('name')],
                'diversity' => new DiversityCollection($client->diversities()->get())
            ];
        })->sortByDesc('id');
    }
}
