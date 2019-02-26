<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    protected $table = 'sales';
    protected $fillable = ['name','email','telephone_number', 'joined_date', 'current_working_routes', 'comments'];
}
