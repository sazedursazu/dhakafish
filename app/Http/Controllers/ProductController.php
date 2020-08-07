<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Product;
use App\Slider;
use App\ProductImage;
use App\Category;

class ProductController extends Controller
{
   public function index()
    {
    	$sliders=Slider::orderBy('priority','asc')->get();
    	$products = Product::orderBy('id','desc')->paginate(6);
    	

    	return view('frontend.pages.index',compact('products','sliders'));
    }

    public function create()
    {
         $categories=Category::orderBy('id','asc')->get();
        return view('admin.pages.create',compact('categories'));
    }

    public function edit($id)
    {
        $product=Product::find($id);
        return view('admin.pages.edit',compact('product'));
    }

    public function manage()
    {
        $products=Product::orderBy('id','desc')->get();
        return view('admin.pages.manage_products',compact('products'));
    }

    public function search(Request $request)
    {
    	$search=$request->search;
    	$products=Product::orWhere('title','like','%'.$search.'%')
    			->orWhere('description','like','%'.$search.'%')
    			->orWhere('price','like','%'.$search.'%')
    			->orWhere('slug','like','%'.$search.'%')
    			->orWhere('weight','like','%'.$search.'%')
    			->orderBy('id','desc')
    			->paginate('5');

    			return view('frontend.pages.search',compact('search','products'));
    }

    public function store(Request $request)
    {
      $request->validate([
        'title'=>'required',
        'description'=>'required',
        'weight'=>'required',
        'price'=>'required',
        'category_id'=>'required',
        'admin_id'=>'required',
         'image'=>'required'

      ]);

      $product=new Product;
      $product->title = $request->title;
      $product->description = $request->description;
      $product->weight = $request->weight;
      $product->price = $request->price;
      $product->offer_price = $request->offer_price;
      $product->category_id = $request->category_id;
      $product->admin_id = $request->admin_id;
      $product->slug =Str::slug($request->title) ;
      $product->save();

       if($request->hasFile('image'))
        {

           $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();
            $location =public_path('images/'.$img);
            Image::make($image)->save($location);

            //insert into database
            $product_image=new ProductImage;
            $product_image->product_id = $product->id;
            $product_image->image=$img;
            $product_image->save();
        }
      return redirect()->route('admin.index');
    }



    public function delete($id)
    {
       $product=Product::find($id);
       $product->delete();
       return back();
    }

    public function show($id)
    {
      $sliders=Slider::orderBy('priority','asc')->get();
      $category=Category::find($id);
      if (! is_null($category)) {
        return view('frontend.pages.show',compact('category','sliders'));
      }
    }

   
 
    
}
