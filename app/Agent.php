<?php

namespace market;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table	=	'agents';
    protected $fillable	=	['id', 'user_id', 'profile', 'first_name','last_name','address','telephone'];

    
}

