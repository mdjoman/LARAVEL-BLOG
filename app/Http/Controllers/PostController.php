<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Posttag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.posts-manage',
        ['posts' => Post::all()] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.post-create',
        ['categories' => Category::all(),
        'tags'         => Tag::all(),
        ] );
       
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
        'Post_Titale' => 'required',
        'category_id' => 'required',
        'status' => 'required',
        'Image' => 'required',
        'tag_id' => 'required',
        'sdescription' => 'required',
        'ldescription' => 'required',
     
      ]);

      $image = $request->file('Image');
      $imagename = $image->getClientOriginalName();
      $directory = 'post-image/';
      $image->move($directory, $imagename);
      $imageurl = $directory.$imagename;


      $post = new Post();
      $post->Post_Titale = $request->Post_Titale;
      $post->category_id = $request->category_id;
      $post->image =$imageurl;
      $post->sdescription = $request->sdescription;
      $post->ldescription = $request->ldescription;
      $post->status = $request->status;
      $post->slug = Str::slug($request->name, '-');
      $post->user_id = auth()->user()->id;
      $post->published_at = Carbon::now();
      $post->save();


      $tags = $request->tag_id;

     foreach($tags as $tag)
     {

      $posttag  = new Posttag();
      $posttag->post_id =$post->id;  
      $posttag->tag_id = $tag;
      $posttag->save();

     }
     
      return redirect()->back()->with('message', 'post info create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('Admin.post-show',
        ['categories' => Category::all(),
        'tags'         => Tag::all(),
        'post'        => $post
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('Admin.post-edit',
         ['categories' => Category::all(),
         'tags'         => Tag::all(),
         'post'        => $post
         ] );
        }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if ($image = $request->file('Image')) {
            if (file_Exists($post->image)) {
              unlink(($post->image));
            }
            $post->delete();
            
            $image = $request->file('Image');
            $imagename = $image->getClientOriginalName();
            $directory = 'post-image/';
            $image->move($directory, $imagename);
            $imageurl = $directory . $imagename;
          } else {
            $imageurl  = $post->image;
          }
          $post->tags()->sync($request->tag_id);
          $post->Post_Titale = $request->Post_Titale;
          $post->category_id = $request->category_id;
          $post->image =$imageurl;
          $post->sdescription = $request->sdescription;
          $post->ldescription = $request->ldescription;
          $post->slug = Str::slug($request->name, '-');
          $post->status = $request->status;
          $post->user_id = $request->user_id;
          $post->published_at = $request->published_at;
          $post->save();


          $tags = $request->tag_id;

          foreach($tags as $tag)
          {
     
           $posttag  = new Posttag();
           $posttag->post_id =$post->id;  
           $posttag->tag_id = $tag;
           $posttag->save();
     
          }

          return redirect('post')->back()->with('message', 'post info update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/post')->with('message', 'Post info Delete successfully');
    }
}
