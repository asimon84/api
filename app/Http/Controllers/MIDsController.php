<?php

namespace App\Http\Controllers;

class MIDsController extends APIController
{
    protected $table = 'mids';

    protected $class = 'App\\API\\MIDs\\MIDs';

    protected $fields_class = 'App\\API\\MIDs\\MIDsFields';

    protected $identifier_field = 'mid';
}
