<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\GalleryImage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;

class CategoryController extends Controller
{   
    public function index()
    {

        $categories                 =   Category::latest()->get();

        return view("admin.categories.index", compact("categories"));
    }

       public function create()
    {
        $categories                 =   Category::get();
        return view("admin.categories.single",compact('categories'));
    }

   public function store(Request $request)
    { 
       

        $request->validate([
            'name'                  =>  "required|max:225",
          	'slug'                  =>  "required|max:225|unique:categories,slug,$request->id ?? 0 ",
          ]);
   $category                       =    Category::updateOrCreate(
                                                                            [
                                                                                'id'                    =>  $request->id
                                                                            ],
                                                                            [
                                                                                'name'                  =>  $request->name,
                                                                                'slug'                  =>  $request->slug,
                                                                           ]
                                                                        );
   
        if($category):
            $msg                            =   $category->wasRecentlyCreated ? 
                                                        "<div class='alert alert-success'>Record added successfully </div>"
                                                        :
                                                        "<div class='alert alert-success'>Record udpated successfully </div>"
                                                        ;
        else:
            $msg                            =   "<div class='alert alert-danger'>Some error occured</div>";
        endif;

        return redirect()->route('admin::categories.index')->with('back_msg', $msg);
    }

    public function show($id)
    {
        //
    }

    public function edit(Category $category)
    {
        $categories                     =   Category::where('id', '!=', $category->id)->get();

        return view("admin.categories.single", compact('categories', 'category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('back_msg', "<div class='alert alert-danger'>Record deleted successfully</div>"); 
    }

}
