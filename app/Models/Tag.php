<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Food;
class Tag extends Model
{
    
    public function food()
    {
        return $this->belongsToMany(Food::class)->withTimestamps();
    }
}
