<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'diversity_id', 'catalog_number', 'price', 'has_vat', 'enable'];

    public function diversities()
    {
        return $this->belongsToMany(ItemDiversity::class, 'item_id', 'id');
    }
}
