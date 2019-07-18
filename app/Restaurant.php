<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
   
    protected $fillable = ['name', 'type', 'phone', 'cellphone', 'whatsup', 'img_url', 'address', 'lat', 'lng'];

    public function Menus(){
        $this->belongsToMany(\App\Menu::class);
    }
}
