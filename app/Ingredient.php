<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function getData()
    {
       return $this->user->name;
    }
    //$this->id . ': ' . $this->name . ' (' . $this->type . ')' . $this->price . $this->img .
    protected $guarded = array('id');

    public static $rules = array(
       'name' => 'required',
       'type' => 'required|integer',
       'price' => 'required|integer|min:0|max:2000',
       'img' => 'required',
       'user_id' => 'required|exists:users,id'
    );

    public function user()
    {
       return $this->belongsTo('App\User');
    }
}
