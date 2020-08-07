<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable =[
		'category_name','offer_title','description','image','button_text','button_link','priority'

	];
}
