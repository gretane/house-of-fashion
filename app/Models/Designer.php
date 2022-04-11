<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    use HasFactory;

    public function designerOutfits()
    {
        return $this->hasMany('App\Models\Outfit', 'designer_id', 'id');
    }
}
