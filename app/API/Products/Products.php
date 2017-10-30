<?php

namespace App\API\Products;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $table = 'products';

    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'cover_letter', 'order_page', 'terms',
    ];
}
