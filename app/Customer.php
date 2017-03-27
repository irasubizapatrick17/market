<?php

namespace market;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $table	=	'customers';
    protected $fillable	=	['id', 'user_id', 'first_name','last_name','address','telephone'];

}
