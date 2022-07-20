<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $items = Ingredient::all();
        $param = ['items' => $items, 'user' => $user];
        return view('peb.index', $param);
    }

    public function show(Request $request)
    {
        $item = Ingredient::where('id', $request->id)->first();
        return view('peb.show', ['item' => $item]);
    }
    public function edit(Request $request)
    {
       $item = Ingredient::find($request->id);
       return view('peb.edit', ['item' => $item]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Ingredient::$rules);
        $person = Ingredient::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/peb');
    }
    public function del(Request $request)
    {
        $item = Ingredient::find($request->id);
        return view('peb.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        Ingredient::find($request->id)->delete();
        return redirect('/peb');
    }


}
