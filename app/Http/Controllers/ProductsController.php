<?php

namespace App\Http\Controllers;

class ProductsController extends APIController
{
    protected $table = 'products';

    protected $class = 'App\\API\\Products\\Products';

    protected $fields_class = 'App\\API\\Products\\ProductsFields';

    protected $identifier_field = 'name';
}
