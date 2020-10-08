<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Library;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $library=Library::all();
        return view('backend.library.index',compact('library'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.library.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $library=new Library();
        $library->book_name=$request->book_name;
        $library->author=$request->author;
        $library->grade=$request->grade;
        if($request->faculty==="0" || $request->faculty==="4")
        {
            $request->faculty="Science";
        } else if($request->faculty==="1" || $request->faculty==="5")
        {
            $request->faculty="Management";

        }else if($request->faculty==="2")
        {
            $request->faculty="Humanities";

        }
        else if($request->faculty==="3")
        {
            $request->faculty="Law";
        }
        $library->faculty=$request->faculty;
        $library->stream=$request->stream;
        $book = $request->file('book');
      $extension = $book->getClientOriginalExtension();
      Storage::disk('public')->put($book->getFilename().'.'.$extension,  File::get($book));
    $library->book=$book->getFilename().'.'.$extension;
      $library->save();
      return redirect('/library')->with('success','Book added successfully!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search(Request $request)
    {
        $library=Library::where('book_name', 'LIKE', "%{$request->search}%")->get();;

        return view('backend.library.index',compact('library'));
    }
}
