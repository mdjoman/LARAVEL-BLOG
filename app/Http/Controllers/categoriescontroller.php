<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Http\Request;

class categoriescontroller extends Controller
{
  public function addcategory()
  {
    return view('Admin.make-category');
  }
  public function managecategory()
  {
    return view('Admin.manage-categories', ['categories' => Category::orderBy('created_at', 'DESC')->get()]);
  }

  public function createcategory(Request $request)
  {
    $request->validate([
      'name' => 'required|unique:categories,name',
      'Description' => 'required',
      'status' => 'required',
      'image' => 'required',

    ]);

    $image = $request->file('image');
    $imagename = $image->getClientOriginalName();
    $directory = 'category-image/';
    $image->move($directory, $imagename);
    $imageurl = $directory . $imagename;


    $category = new Category();
    $category->name = $request->name;
    $category->Description = $request->Description;
    $category->slug = Str::slug($request->name, '-');
    $category->image = $imageurl;
    $category->status = $request->status;
    $category->save();

    return redirect()->back()->with('message', 'Category info create successfully');
  }
  public function editcategory($id)
  {
    $category = Category::find($id);

    return view('Admin.edite-category', ['category' =>  $category]);
  }

  public function updatcategory(Request $request)
  {
    $this->validate($request, [
      'name' => "required|unique:categories,name,$request->id",
    ]);

    $category = Category::find($request->id);


    if ($image = $request->file('image')) {
      if (file_Exists($category->image)) {
        unlink(($category->image));
      }
      $category->delete();

      $image = $request->file('image');
      $imagename = $image->getClientOriginalName();
      $directory = 'category-image/';
      $image->move($directory, $imagename);
      $imageurl = $directory . $imagename;
    } else {
      $imageurl  = $category->image;
    }

    $category->name = $request->name;
    $category->Description = $request->Description;
    $category->slug = Str::slug($request->name, '-');
    $category->image = $imageurl;
    $category->status = $request->status;
    $category->save();

    return redirect('/manage-categories')->with('message', 'Category info Update successfully');
  }
  public function deletecategory($id)
  {
    $category =  Category::find($id);
    $category->delete();

    return redirect('/manage-categories')->with('message', 'Category info Delete successfully');
  }
}
