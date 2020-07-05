<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemDiversity extends Model
{
    protected $fillable = ['name', 'item_id', 'client_id', 'enable'];
    protected $table = 'item_diversity';

    public function Items()
    {
        return $this->hasMany(Item::class, 'diversity_id', 'id');
    }

}
