<?php

namespace App\Http\Controllers;

class OrdersController extends APIController
{
    protected $table = 'orders';

    protected $class = 'App\\API\\Orders\\Orders';

    protected $fields_class = 'App\\API\\Orders\\OrdersFields';

    protected $identifier_field = 'order_id';
}
