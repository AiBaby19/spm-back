<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemDiversity extends Model
{
    protected $table = 'items_diversities';
    protected $fillable = ['name', 'item_id', 'client_id', 'enable'];

}
