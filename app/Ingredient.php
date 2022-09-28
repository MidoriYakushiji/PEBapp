<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function getData()    //usersテーブルからnameを取得
    {
       return $this->user->name;
    }
    //$this->id . ': ' . $this->name . ' (' . $this->type . ')' . $this->price . $this->img .
    protected $guarded = array('id');

    public static $rules = array(  
       'name' => 'required',                         //必須
       'type' => 'required|integer',                 //必須、整数
       'price' => 'required|integer|between:0,2000', //必須、整数、0～2000の値
       'img' => 'required',                          //必須
       'user_id' => 'required|exists:users,id'       //必須、usersのidに存在
    );


    public function user()
    {
       return $this->belongsTo('App\User');          //belongsTo結合
    }
}
