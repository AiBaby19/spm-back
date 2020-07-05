<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientDiversity extends Model
{
    protected $table = 'client_diversity';
    protected $fillable = ['diversity_id', 'client_id'];

    public function clients()
    {
        // return $this->hasMany('App\Client', );
    }
}
