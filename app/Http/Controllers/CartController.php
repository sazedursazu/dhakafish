<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;

class CartController extends Controller
{

	
    public function add($id)
    {
    	$product = Product::find($id);

       \Cart::add(array(
	    'id' =>$product->id,
	    'name' => $product->title,
	    'price' => $product->price,
	    'quantity' => 1,
	    'attributes' => array(),
	    'associatedModel' => $product,
	));

       return back();
    }

    public function index()
    {
    	$cartItems=\Cart::getContent();

    	return view('carts.index',compact('cartItems'));
    }

    public function store(Request $request)
    {

    	$request->validate([

    		'shipping_fullname'=>'required',
    		'shipping_address'=>'required',
    		'shipping_phone'=>'required',

    	]);

    	$order=new Order();
    	$order->order_number=uniqid();
    	$order->shipping_fullname =$request->input('shipping_fullname');
    	$order->shipping_address =$request->input('shipping_address');
    	$order->shipping_phone =$request->input('shipping_phone');
    	$order->grand_total = \Cart::getTotal();
    	$order->item_count = \Cart::getContent()->count();
    	$order->save();

    	//save cart items
    	$cartItems=\Cart::getContent();

    	foreach ($cartItems as $item) {
    		$order->items()->attach($item->id,['price'=>$item->price,'quantity'=>$item->quantity]);
    	}

    	\Cart::clear();
    	return redirect()->route('products.index');
    }

      public function delete($itemId)
    {
    	\Cart::remove($itemId);

    	return back();
    }
    public function update($itemId)
    {
    	\Cart::update($itemId, array(
	  	'quantity' => array(
	      'relative' => false,
	      'value' =>request('quantity'),
	  ),
	));

    	return back();
    }


    public function checkout()
    {
    	return view('carts.checkout');
    }

    
   
}
