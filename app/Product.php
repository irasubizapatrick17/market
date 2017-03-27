<?php

namespace market;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  	protected $table	=	'orders';
    protected $fillable	=	['id', 'user_id', 'category_id','product_name','product_price','product_photo','product_description'];
}

