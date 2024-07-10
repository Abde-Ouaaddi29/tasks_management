<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
   
    public function index()
    {
        // ---- plan 1 : i used relationship that is on Models
        $todos = Auth::user()->todos ;
        // $todos = Auth::user()->todos->paginate(10);

        // ---- plan 2 : i used the simple method , i did the filter inside index.blade.php  @if ($todo->user_id === Auth::user()->id)
        // $todos = Todo::all();
        return view('todo.index' , compact('todos'));   
    }

   


    public function store(Request $request)
    {

       $request->validate([
            'item' => 'required',
        ]);
         
        // $request->user_id == Auth::user()->id;
        Todo::create([
            'item' => $request->item,
            'isCompleted' => false,
            'user_id' => Auth::user()->id
        ]);
        
        // Todo::create($request->all());
        return redirect()->route('todo.index');

    }

   

    public function update(Request $request, string $id)
    {
        $item = Todo::findOrFail($id);

        $item->isCompleted = !$item->isCompleted ;
        $item->save();

        return redirect()->route('todo.index');
    }

   

    public function destroy(string $id)
    {
        Todo::destroy($id);
        return redirect()->route('todo.index');
    }
}
