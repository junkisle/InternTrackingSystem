<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use DB;

class NotesController extends Controller
{
    public function class_open_Notes(){
        $notes = Note::all();

        return view('notes.Notes', ['notes' => $notes]);
    }

    public function class_new_Notes(){
        $notes = Note::all();

        return view('notes.new', ['notes' => $notes]);
    }

    public function class_add_Notes(Request $request){
       $data = $request->validate([
        'user_id' => 'required',
        'day' => 'required',
        'note' => 'required',
       ]);

       $newNote = Note::create($data); 

       return redirect(route('notes.index'));
    }
}
