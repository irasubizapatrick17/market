<?php

namespace market;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table	=	'orders';
    protected $fillable	=	['id', 'user_id', 'product_id', 'agent_id','product_name','product_price'];
}

