<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        return view('my_notes');
    }

    public function create() 
    {
        return view('create_note');
    }

    public function upload(Request $request) 
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName,PATHINFO_FILENAME);

            $extension = $request->file('upload')->getClientOriginalExtension();

            $fileName = $fileName.'_'.time() . '.'. $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/'. $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        } 
    }

    public function store(Request $request) {
        $request->validate([
            'title'=>"required|max:15",
            'notesContent'=> "required"
        ]);

        try {
            Note::create([
                'title' => $request->title,
                'body'  => $request->notesContent,
                'user_id' => Auth::id(),
                'category_id'=> 1
            ]);
        }
        catch (Exception $e) 
        {
            dd($e);
        }

        return back()->with('message','Notes Created Successfully');
    }

    public function edit() {
        return view('edit_note');
    }
}

