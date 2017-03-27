<?php

namespace market;

use Illuminate\Database\Eloquent\Model;

class Product_category extends Model
{
    protected $table	=	'product_category';
    protected $fillable	=	['id', 'category_name', 'product_category'];
}

