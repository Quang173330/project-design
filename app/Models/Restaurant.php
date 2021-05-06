<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Food;
use App\Models\User;
use App\Models\Image;

class Restaurant extends Model
{
    protected $fillable = [
        'name', 'address', 'introduce', 'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function food(){
        return $this->hasMany(Food::class);
    }
}
