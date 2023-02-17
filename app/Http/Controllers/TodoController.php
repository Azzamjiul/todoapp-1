<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    // fungsi untuk menampilkan formulir tambah todo
    public function create () 
    {
        return view('todo.create');
    }

    // fungsi untuk menyimpan todo ke DB
    public function store (Request $request)
    {
        Todo::create([
            'name' => $request->name,
        ]);

        return redirect()->route('todo.index');
    }

    // fungsi untuk menampilkan semua todos
    public function index ()
    {
        // $todos = Todo::all();
        // $todos = DB::table('todos')->selectRaw('*')->get();
        $todos = DB::select('select * from todos');
    
        return view('todo.index', compact('todos'));
    }

    // fungsi menampilkan formulir update data
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todo.edit', compact('todo'));
    }

    // fungsi untuk update data di database
    public function update($id, Request $request)
    {
        Todo::where('id', $id)->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('todo.index');
    }

    // fungsi untuk delete data di database
    public function delete($id)
    {
        $todo = Todo::find($id);

        if(!$todo) {
            return redirect()->route('todo.index');
        }

        $todo->delete();
        return redirect()->route('todo.index');
    }
}
