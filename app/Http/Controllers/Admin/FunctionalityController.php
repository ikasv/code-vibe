<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\GalleryImage;
use App\Models\LabPackage;
use App\Models\Functionality;
use Illuminate\Http\Request;

class FunctionalityController extends Controller
{
    # Global 
    public $index_view                  =   "admin.management.functionality.index";
    public $create_or_edit_view         =   "admin.management.functionality.single";
    
    public $index_route                 =   "admin::functionality.index";
    
    public $permission_key              =   "functionality";
    public $table_name                  =   "functionalities";
    
    # ==> Model 
    public function eloquentModel(){
        return new Functionality();
    }
    # ==> !Model 
    
    # End Global 

    public function index()
    {
        $this->authorize('permissions', [$this->permission_key, 'view']);

        $records            =   $this->eloquentModel()->get();

        return view($this->index_view, compact('records'));
    }
    
    public function create()
    {
        $this->authorize('permissions', [$this->permission_key, 'create']);

        $categories             =   Category::get();
       
        return view($this->create_or_edit_view, compact('categories'));
    }
    
    
    public function store()
    {
        $this->authorize('permissions', [$this->permission_key, 'create']);
        $custom_errors                              =   [];

        $back_msg                       =   "";
        $id                             =   request()->id ?? 0;

        request()->validate([
            'name'                  =>  "required|max:225|unique:$this->table_name,name,".request()->id,
            'slug'                  =>  "required|max:225|unique:categories,slug,$id ?? 0 ",
         ]);

        $tour_package   = $this->eloquentModel()->updateOrCreate(
            [
                'id'                    => request()->id
            ],
            [
                'name'                  => request()->name,
                'slug'                  => request()->slug,
                'category_ids'          => request()->category_ids,
                'requirements'          => request()->requirements,
                'description'           => request()->description,
                'useful_links'          => request()->useful_links,
                'status'                => request()->status
            ]
        );


        if($tour_package):
            $back_msg                            =   $tour_package->wasRecentlyCreated ? 
                                                        "<div class='alert alert-success'>Record added successfully </div>"
                                                        :
                                                        "<div class='alert alert-success'>Record udpated successfully </div>"
                                                        ;
        else:
            $back_msg                            =   "<div class='alert alert-danger'>Some error occured</div>";
        endif;

        return redirect()->route($this->index_route)->with('back_msg', "<div class='alert alert-success'>$back_msg</div>");
    }

    public function show($id)
    {
        $this->authorize('permissions', [$this->permission_key, 'view']);
    }

    public function edit($id)
    {
        $this->authorize('permissions', [$this->permission_key, 'edit']);
        
        
        $categories             =   Category::get();

        $record                 =   $this->eloquentModel()->find($id);
        $gallery_images                 =   GalleryImage::type('tour_package')->whereParentId($id)->get();

        return view($this->create_or_edit_view, compact('record', 'categories', 'gallery_images'));
    }
    
    public function update(Request $request, $id)
    {
        
    }
    
    public function destroy($id)
    {
        $this->authorize('permissions', [$this->permission_key, 'delete']);
        $record    = $this->eloquentModel()->find($id);
        $record->delete();
        return back()->with('back_msg', "<div class='alert alert-success'>Record deleted successfully</div>");
   }
}