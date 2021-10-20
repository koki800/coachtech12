<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Models\Author;

class TodoController extends Controller
{   
    public function index(){
        $items = Author::all();
        return view('Todo',['items' => $items]);
    }
    public function create(ClientRequest $request){
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }
    public function update(ClientRequest $request){
        $form = $request->all();
        Author::where('id', $request->id)->update($form);
        return redirect('/');
    }
    public function delete(Request $request){
        $form = $request->all();
        Author::where('id', $request->id)->delete($form);
        return redirect('/');
    }
}