<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_id', 'delivery_tax', 'name', 'address', 'phone', 'status'];
    public function menus()
    {
        // Menu nome do model
        return $this->belongsToMany(Api\Menu::class);
    }
}
