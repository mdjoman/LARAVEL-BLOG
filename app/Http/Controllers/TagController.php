<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.tag-manage', ['tags' => Tag::orderBy('created_at', 'DESC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.tag-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags,name',  
          ]);
      
          $tag = new Tag();
          $tag->name = $request->name;
          $tag->Description = $request->Description;
          $tag->slug = Str::slug($request->name, '-');

          $tag->save();
      
          return redirect()->back()->with('message', 'Tag info create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('Admin.tag-edite', ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $this->validate($request, [
            'name' => "required|unique:tags,name,$request->id",
          ]);
   
          $tag->name = $request->name;
          $tag->Description = $request->Description;
          $tag->slug = Str::slug($request->name, '-');
          $tag->save();
      
          return redirect('/tag')->with('message', 'Tag info Update successfully');
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
       
            $tag->delete();

        return redirect('/tag')->with('message', 'Tag info delete successfully');
    }
}
