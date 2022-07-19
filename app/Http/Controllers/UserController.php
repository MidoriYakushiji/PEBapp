<?php

namespace App\Http\Controllers;
use App\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $items = Ingredient::all();
        $param = ['items' => $items, 'user' => $user];
        return view('peb.index', $param);
    }

}
