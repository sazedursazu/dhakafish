<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $fillable =[
		'category_id','title','description','slug','weight','price','offer_price','admin_id'

	];
    public function images()
    {
        return $this->hasMany('App\ProductImage');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
