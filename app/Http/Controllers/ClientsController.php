<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\API\Clients\Clients;
use App\API\Clients\ClientsFields;
use App\API\Response\Response;

class ClientsController extends APIController
{
    protected $table = 'clients';

    protected $class = 'App\\API\\Clients\\Clients';

    protected $fields_class = 'App\\API\\Clients\\ClientsFields';

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function index(Request $request) :JsonResponse
    {
        $user_id = (isset($request->user()->id)) ? $request->user()->id : null;

        if(isset($user_id) && is_numeric($user_id)) {

            $this->data = Clients::where('user_id', $user_id)->get()->toArray();

            if(is_array($this->data)) {
                $this->success = true;
                $this->code = 200;
                $this->msg = 'Successfully returned ' . count($this->data) . ' records.';
            }
        }

        return response()->json(Response::arrayResponse($this->success,$this->code,$this->msg,$this->data));
    }
}
