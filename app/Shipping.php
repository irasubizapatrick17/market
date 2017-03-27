<?php

namespace market;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $table	=	'shippings';
    protected $fillable	=	['id', 'user_id', 'order_id','address','telephone'];


    public function Shipping(){
        return $this->belongsTo('market\Order');
}