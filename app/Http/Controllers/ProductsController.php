<?php

namespace App\Http\Controllers;

use App\Response;

class ProductsController extends APIController
{
    protected $table = 'products';

    protected $class = 'App\\API\\Products\\Products';

    protected $fields_class = 'App\\API\\Products\\ProductsFields';
}
