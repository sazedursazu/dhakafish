<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use File;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::orderBy('id','asc')->get();
        return view('admin.categories.index')->with('categories',$categories);
    }

    public function create()
    {
        $categories=Category::orderBy('id','asc')->get();
        return view('admin.categories.create',compact('categories'));
    }


    public function store(Request $request)
    {
        $category=new Category;
        $category->name =$request->name;
        $category->description =$request->description;
        $category->parent_id =$request->parent_id;
        //image insert
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/categories/'.$img);
            Image::make($image)->save($location);

        }

     $category->image=$img;

     $category->save();

     return redirect()->route('categories.manage');


    }

    public function edit($id)
    {
        $categories=Category::orderBy('id','asc')->get();
        $category=Category::find($id);
        return view('admin.categories.edit',compact('category','categories'));
    }

    public function update(Request $request,$id)
    {
        $category=Category::find($id);
        $category->name =$request->name;
        $category->description =$request->description;
        $category->parent_id =$request->parent_id;

        //insert image
        if(count((array)$request->image)>0){

            //delete old image
            if(File::exists('images/categories/'.$category->image)){
                File::delete('images/categories/'.$category->image);
            }
            $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/categories/'.$img);
            Image::make($image)->save($location);
            $category->image=$img;
        }

        $category->save();
        return redirect()->route('categories.manage');
    }

    public function delete($id)
    {
        $category=Category::find($id);
        if(!is_null($category)){

            $sub_categories=Category::orderBy('name','desc')->where('parent_id',$category->id)->get();

            foreach($sub_categories as $sub){
                //subcateroy image delete
                if(File::exists('images/categories/'.$sub->image)){
                    File::delete('images/categories/'.$sub->image);
                }
                $sub->delete();
            }
        }
    //delete category image
    if(File::exists('images/categories/'.$category->image)){
        File::delete('images/categories/'.$category->image);
    }
    $category->delete();

    return redirect()->route('categories.manage');
    }

    
}
