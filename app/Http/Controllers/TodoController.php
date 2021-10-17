<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class TodoController extends Controller
{   
    public function index(){
        $items = Author::all();
        return view('Todo',['items' => $items]);
    }
    public function create(Request $request){
        $this->validate($request, Author::$rules);
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }
    public function update(Request $request){
        $this->validate($request, Author::$rules);
        $form = $request->all();
        Author::where('id', $request->id)->update($form);
        return redirect('/');
    }
    public function delete(Request $request){
        $form = $request->all();
        Author::where('id', $request->id)->delete($form);
        return redirect('/');
    }
};