<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;

        $categories = DB::table('categories')
        ->join('notes', 'notes.category_id', '=', 'categories.id')
        ->select('categories.id','name')
        ->distinct()
        ->where('user_id', $userId)
        ->get();

        $notes = DB::table('notes')
        ->select('title','body','created_at')
        ->where('user_id',$userId)
        ->latest()
        ->get();

        $parsedResult = $this->parseApiResponse(json_decode($notes,1));

        return view('my_notes',['categories'=>$categories,'notes'=>$parsedResult]);
    }

    public function create() 
    {
        $userId = Auth::user()->id;
        $categories = DB::table('categories')
        ->join('notes', 'notes.category_id', '=', 'categories.id')
        ->select('categories.id','name')
        ->distinct()
        ->where('user_id', $userId)
        ->get();

        return view('create_note',['categories'=> $categories]);
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
                'category_id'=> $request->category
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

    // Helping Functions

    private function parseApiResponse($apiResponse) {
        $parsedData = array();
        foreach ($apiResponse as $item) {
            $parsedItem = array();
            $parsedItem['title'] = $item['title'];
    
            // Extract image path from the body
            $imgPattern = '/<img[^>]+src="([^">]+)"[^>]*>/i';
            preg_match($imgPattern, $item['body'], $matches);
            $parsedItem['image'] = isset($matches[1]) ? $matches[1] : '';
    
            // Remove image tag from the body
            $parsedItem['body'] = preg_replace($imgPattern, '', $item['body']);
    
            $parsedItem['created_at'] = $item['created_at'];
    
            $parsedData[] = $parsedItem;
        }
    
        return $parsedData;
    }
}

