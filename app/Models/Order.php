<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Food;
class Order extends Model
{
    protected $fillable = [
        'user_id', 'ship_id', 'cost', 'ship_cost', 'restaurant_id', 'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    public function ship(){
        return $this->belongsTo(User::class,'ship_id');
    }

    
    public function food()
    {
        return $this->belongsToMany(Food::class)->withTimestamps();
    }

}
