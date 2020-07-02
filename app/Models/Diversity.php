<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diversity extends Model
{
    protected $fillable = ['name', 'item_id', 'client_id', 'enable'];

    public function clients()
    {
        return $this->belongsToMany('App\Models\Client', 'id');
    }

    public function items()
    {
        return $this->belongsToMany('App\Models\Item', 'id');
    }
}
