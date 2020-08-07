<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Order;
use App\ProductImage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use File;



class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.index');
    }

     public function manage_products()
    {
        $products=Product::orderBy('id','desc')->get();

        return view('admin.pages.manage_products',compact('products'));
    }

   public function item()
    {
       $orders=Order::orderBy('id','desc')->get();
        return view('admin.pages.order_details',compact('orders'));
    }

    public function destroy($id)
    {

        $order=Order::find($id);
        $order->delete();
        return back();
    }
}
