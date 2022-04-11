<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outfit extends Model
{
    use HasFactory;

    public function outfitDesigner()
    {
        return $this->belongsTo('App\Models\Designer', 'designer_id', 'id');
    }
}
