<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function getData()
    {
       return $this->id . ': ' . $this->name . ' (' . $this->type . ')' . $this->price . $this->img;
    }
    
}
