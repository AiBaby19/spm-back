<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'diversity_id', 'type', 'enable'];

    public function diversities()
    {
        return $this->belongsToMany('App\Models\Diversity', 'id');
    }
}
