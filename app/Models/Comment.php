<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Food;

class Comment extends Model
{
    protected $fillable = [
        'vote', 'content', 'food-id'
    ];

    public function food(){
        return $this->belongsTo(Food::class);
    }
}
