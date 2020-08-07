<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
  public function index()
  {
   $sliders=Slider::orderBy('priority','asc')->get();
   return view('admin.sliders.index',compact('sliders'));
  }

	public function create()
	{
		return view('admin.sliders.create');
	}

  public function edit($id)
  {
    $slider=Slider::find($id);
    return view('admin.sliders.edit',compact('slider'));
  }

   public function store(Request $request)
   {
   	$request->validate([
   		'category_name'=>'required',
   		'offer_title'=>'required',
   		'description'=>'required',
   		'image'=>'required',
   		'priority'=>'required'

   	]);

   	$slider = new Slider();
   	$slider->category_name = $request->category_name;
   	$slider->offer_title = $request->offer_title;
   	$slider->description = $request->description;
   	$slider->button_text = $request->button_text;
   	$slider->button_link = $request->button_link;
   	$slider->priority = $request->priority;
   	 if($request->hasFile('image'))
        {

           $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();
            $location =public_path('images/sliders/'.$img);
            Image::make($image)->save($location);

            //insert into database
           
        }
        
     $slider->image=$img;       

   	$slider->save();

   	return redirect()->route('products.index');

   }

   public function update(Request $request, $id)
   {
    $request->validate([
      'category_name'=>'required',
      'offer_title'=>'required',
      'description'=>'required',
      'image'=>'required',
      'priority'=>'required'

    ]);

    $slider = new Slider();
    $slider->category_name = $request->category_name;
    $slider->offer_title = $request->offer_title;
    $slider->description = $request->description;
    $slider->button_text = $request->button_text;
    $slider->button_link = $request->button_link;
    $slider->priority = $request->priority;
     if($request->hasFile('image'))
        {

           $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();
            $location =public_path('images/sliders/'.$img);
            Image::make($image)->save($location);

            //insert into database
           
        }
        
     $slider->image=$img;       

    $slider->save();

    return redirect()->route('products.index');

   }

   public function delete($id)
   {
    $slider=Slider::find($id);
    $slider->delete();
    return back();
   }
}
