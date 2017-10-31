<?php

namespace App\Http\Controllers;

class ClientsController extends APIController
{
    protected $table = 'clients';

    protected $class = 'App\\API\\Clients\\Clients';

    protected $fields_class = 'App\\API\\Clients\\ClientsFields';

    protected $identifier_field = 'name';
}
