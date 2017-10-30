<?php

namespace App\Http\Controllers;

use App\Response;

class OrdersController extends APIController
{
    protected $table = 'orders';

    protected $class = 'App\\API\\Orders\\Orders';

    protected $fields_class = 'App\\API\\Orders\\OrdersFields';
}
