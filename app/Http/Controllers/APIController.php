<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use App\API\Response\Response;

class APIController extends Controller
{
    protected $success = false;

    protected $code = 500;

    protected $msg = 'Unknown Error! Please try again.';

    protected $data = [];

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request) :JsonResponse
    {
        $user_id = (isset($request->user()->id)) ? $request->user()->id : null;

        if(isset($user_id) && is_numeric($user_id)) {

            $this->data = DB::table($this->table . ' as x')
                ->join('clients', function ($join) use ($user_id) {
                    $join->on('x.client_id', '=', 'clients.id')
                        ->where('clients.user_id', '=', $user_id);
                })
                ->select('x.*')
                ->get()
                ->toArray();

            if(is_array($this->data)) {
                $this->success = true;
                $this->code = 200;
                $this->msg = 'Successfully returned ' . count($this->data) . ' records.';
            }
        }

        return response()->json(Response::arrayResponse($this->success,$this->code,$this->msg,$this->data));
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  int      $id
     * @return JsonResponse
     */
    public function show(Request $request, int $id) :JsonResponse
    {
        $user_id = (isset($request->user()->id)) ? $request->user()->id : null;

        if(isset($user_id) && is_numeric($user_id)) {
            $class = $this->class;

            if($this->table === 'clients') {
                $this->data = $class::where([['user_id', $user_id], ['id', '=', $id]])
                    ->get()
                    ->toArray();
            } else {
                $this->data = $class::where('id', '=', $id)
                    ->get()
                    ->toArray();
            }

            if(is_array($this->data)) {
                $this->success = true;
                $this->code = 200;
                $this->msg = 'Successfully returned ' . count($this->data) . ' records.';
            }
        }

        return response()->json(Response::arrayResponse($this->success,$this->code,$this->msg,$this->data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function create(Request $request) :JsonResponse
    {
        $user_id = (isset($request->user()->id)) ? $request->user()->id : null;

        $errors = 0;
        $data = [];

        if(is_null($user_id)) {
            $errors++;
        }

        $fields_class = $this->fields_class;

        if($this->table === 'clients') {
            $data['user_id'] = $user_id;
        }

        if(isset($user_id)) {
            foreach ($fields_class::getFields() as $field) {
                if ($field['required'] && (is_null($request->input($field['name'])) || empty($request->input($field['name'])))) {
                    $this->msg = 'Missing Required Field to Add Record: ' . $field['label'];
                    $errors++;
                    break;
                }

                if (!is_null($request->input($field['name'])) && !empty($request->input($field['name']))) {
                    if ($field['type'] == 'date') {
                        $data[$field['name']] = (new \DateTime($request->input($field['name'])))->format('Y-m-d');
                    } else {
                        $data[$field['name']] = $request->input($field['name']);
                    }
                }
            }
        }

        if($errors === 0) {
            $class = $this->class;
            $record = (new $class());

            foreach($data as $key => $value) {
                $record->$key = $value;
            }

            $success = $record->save();

            if($success) {
                $this->success = $success;
                $this->code = 200;
                $this->msg = 'Record successfully added: ' . $request->input('name');
            }
        }

        return response()->json(Response::arrayResponse($this->success,$this->code,$this->msg,$this->data));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function edit(Request $request, int $id) :JsonResponse
    {
        $user_id = (isset($request->user()->id)) ? $request->user()->id : null;

        $errors = 0;
        $data = [];

        if(is_null($user_id)) {
            $errors++;
        }

        $fields_class = $this->fields_class;

        if(isset($user_id)) {
            foreach ($fields_class::getEditableFields() as $field) {
                if ($field['required'] && (is_null($request->input($field['name'])) || empty($request->input($field['name'])))) {
                    $this->msg = 'Missing Required Field to Edit Record: ' . $field['label'];
                    $errors++;
                    break;
                }

                if (!is_null($request->input($field['name'])) && !empty($request->input($field['name']))) {
                    if ($field['type'] == 'date') {
                        $data[$field['name']] = (new \DateTime($request->input($field['name'])))->format('Y-m-d');
                    } else {
                        $data[$field['name']] = $request->input($field['name']);
                    }
                }
            }
        }

        if($errors === 0) {
            $class = $this->class;
            $record = $class::find($id);

            if (!empty($record)) {
                if($this->table != 'clients') {
                    $client_match = DB::table($this->table . ' as x')
                        ->join('clients', function ($join) use ($user_id) {
                            $join->on('x.client_id', '=', 'clients.id')
                                ->where('clients.user_id', '=', $user_id);
                        })
                        ->select('x.*')
                        ->where('x.id','=',$id)
                        ->get()
                        ->toArray();

                    if(empty($client_match)) {
                        $errors++;
                    }
                }

                if($errors === 0) {
                    foreach ($data as $key => $value) {
                        $record->$key = $value;
                    }

                    $success = $record->update();

                    if ($success) {
                        $this->success = $success;
                        $this->code = 200;
                        $this->msg = 'Record successfully updated: ' . $request->input('name');
                    }
                }
            }

        }

        return response()->json(Response::arrayResponse($this->success,$this->code,$this->msg,$this->data));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy(Request $request, int $id) :JsonResponse
    {
        $user_id = (isset($request->user()->id)) ? $request->user()->id : null;

        $class = $this->class;

        if($this->table === 'clients') {
            if ($class::where([['id', '=', $id], ['user_id', '=', $user_id]])->delete()) {
                $this->success = true;
                $this->code = 200;
                $this->msg = 'Successfully deleted record.';
            }
        } else {
            $client_match = DB::table($this->table . ' as x')
                ->join('clients', function ($join) use ($user_id) {
                    $join->on('x.client_id', '=', 'clients.id')
                        ->where('clients.user_id', '=', $user_id);
                })
                ->select('x.*')
                ->where('x.id','=',$id)
                ->get()
                ->toArray();

            if(!empty($client_match)) {
                if ($class::where('id', '=', $id)->delete()) {
                    $this->success = true;
                    $this->code = 200;
                    $this->msg = 'Successfully deleted record.';
                }
            }
        }

        return response()->json(Response::arrayResponse($this->success,$this->code,$this->msg,$this->data));
    }
}
