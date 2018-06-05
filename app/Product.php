<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    /* Add the fillable property into the Product Model */
 
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'size',
        'code'
    ];
}
