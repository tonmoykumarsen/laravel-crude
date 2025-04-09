<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //Index Data
    public function index(){
        $notes=Note::all();
        return view('note.index',compact('notes') );
    }

    // Create Data
    public function create(){
        return view('note.create');
    }

    // Strore Data
    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);
        Note::create($request->all());
        return redirect()->route('note.index');
    }

    // Edit Data
    public function edit($id){
        $note=Note::findOrFail($id);
        return view('note.edit',compact('note'));
    }

    // Update Data
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $note = Note::findOrFail($id);
        $note->update($request->all());
        return redirect()->route('note.index');
    }

    // Delete Data
    public function destroy($id)
    {
        Note::destroy($id);
        return redirect()->route('note.index');
    }
}
