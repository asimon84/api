<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use App\API\Response\Response;
use App\API\Clients\Clients;
use App\API\Products\Products;
use App\API\MIDs\MIDs;
use App\API\CreditCards\CardAssociations;
use App\API\Currencies\Currencies;

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
            $this->data = DB::table($this->table)->get()->toArray();

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

            $this->data = $class::where('id', '=', $id)
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

            while(true) {
                if(isset($data['client_id'])) {
                    if(!is_numeric($data['client_id'])) {
                        $this->msg = 'Failed to Add Record! Client ID must be numeric: \'' . $data['client_id'] . '\'';
                        $errors++;
                        break;
                    } else {
                        $result = Clients::where('id', '=', $data['client_id'])->get()->toArray();

                        if (empty($result)) {
                            $this->msg = 'Failed to Add Record! No Match Found For Client \'' . $data['client_id'] . '\'';
                            $errors++;
                            break;
                        } else {
                            $data['client_id'] = $result[0]['id'];
                        }
                    }
                }

                if(isset($data['product_id'])) {
                    if(!is_numeric($data['product_id'])) {
                        $this->msg = 'Failed to Add Record! Product ID must be numeric: \'' . $data['product_id'] . '\'';
                        $errors++;
                        break;
                    } else {
                        $result = Products::where([['id', '=', $data['product_id']], ['client_id', '=', $data['client_id']]])->get()->toArray();

                        if (empty($result)) {
                            $this->msg = 'Failed to Add Record! No Match Found For Product \'' . $data['product_id'] . '\'';
                            $errors++;
                            break;
                        } else {
                            $data['product_id'] = $result[0]['id'];
                        }
                    }
                }

                if(isset($data['mid_id'])) {
                    if(!is_numeric($data['mid_id'])) {
                        $this->msg = 'Failed to Add Record! MID ID must be numeric: \'' . $data['mid_id'] . '\'';
                        $errors++;
                        break;
                    } else {
                        $result = MIDs::where('id', '=', $data['mid_id'])->get()->toArray();

                        if (empty($result)) {
                            $this->msg = 'Failed to Add Record! No Match Found For MID ID: \'' . $data['mid_id'] . '\'';
                            $errors++;
                            break;
                        } else {
                            $data['mid_id'] = $result[0]['id'];
                        }
                    }
                }

                if(isset($data['card_association_id'])) {
                    if(!is_numeric($data['card_association_id'])) {
                        $this->msg = 'Failed to Add Record! Card Association ID must be numeric: \'' . $data['card_association_id'] . '\'';
                        $errors++;
                        break;
                    } else {
                        $result = CardAssociations::where('id', '=', $data['card_association_id'])->get()->toArray();

                        if (empty($result)) {
                            $this->msg = 'Failed to Add Record! No Match Found For Card Association ID: \'' . $data['card_association_id'] . '\'';
                            $errors++;
                            break;
                        } else {
                            $data['card_association_id'] = $result[0]['id'];
                        }
                    }
                }

                if(isset($data['currency_id'])) {
                    if(!is_numeric($data['currency_id'])) {
                        $this->msg = 'Failed to Add Record! Currency ID must be numeric: \'' . $data['currency_id'] . '\'';
                        $errors++;
                        break;
                    } else {
                        $result = Currencies::where('id', '=', $data['currency_id'])->get()->toArray();

                        if (empty($result)) {
                            $this->msg = 'Failed to Add Record! No Match Found For Currency ID: \'' . $data['currency_id'] . '\'';
                            $errors++;
                            break;
                        } else {
                            $data['currency_id'] = $result[0]['id'];
                        }
                    }
                }

                break;
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
                $this->msg = 'Record successfully added: ' . $request->input($this->identifier_field);
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

            while(true) {
                if(isset($data['client_id'])) {
                    if(!is_numeric($data['client_id'])) {
                        $this->msg = 'Failed to Edit Record! Client ID must be numeric: \'' . $data['client_id'] . '\'';
                        $errors++;
                        break;
                    } else {
                        $result = Clients::where('id', '=', $data['client_id'])->get()->toArray();

                        if (empty($result)) {
                            $this->msg = 'Failed to Edit Record! No Match Found For Client \'' . $data['client_id'] . '\'';
                            $errors++;
                            break;
                        } else {
                            $data['client_id'] = $result[0]['id'];
                        }
                    }
                }

                if(isset($data['product_id'])) {
                    if(!is_numeric($data['product_id'])) {
                        $this->msg = 'Failed to Edit Record! Product ID must be numeric: \'' . $data['product_id'] . '\'';
                        $errors++;
                        break;
                    } else {
                        $result = Products::where('id', '=', $data['product_id'])->get()->toArray();

                        if (empty($result)) {
                            $this->msg = 'Failed to Edit Record! No Match Found For Product \'' . $data['product_id'] . '\'';
                            $errors++;
                            break;
                        } else {
                            $data['product_id'] = $result[0]['id'];
                        }
                    }
                }

                if(isset($data['mid_id'])) {
                    if(!is_numeric($data['mid_id'])) {
                        $this->msg = 'Failed to Edit Record! MID ID must be numeric: \'' . $data['mid_id'] . '\'';
                        $errors++;
                        break;
                    } else {
                        $result = MIDs::where('id', '=', $data['mid_id'])->get()->toArray();

                        if (empty($result)) {
                            $this->msg = 'Failed to Edit Record! No Match Found For MID ID: \'' . $data['mid_id'] . '\'';
                            $errors++;
                            break;
                        } else {
                            $data['mid_id'] = $result[0]['id'];
                        }
                    }
                }

                if(isset($data['card_association_id'])) {
                    if(!is_numeric($data['card_association_id'])) {
                        $this->msg = 'Failed to Edit Record! Card Association ID must be numeric: \'' . $data['card_association_id'] . '\'';
                        $errors++;
                        break;
                    } else {
                        $result = CardAssociations::where('id', '=', $data['card_association_id'])->get()->toArray();

                        if (empty($result)) {
                            $this->msg = 'Failed to Edit Record! No Match Found For Card Association ID: \'' . $data['card_association_id'] . '\'';
                            $errors++;
                            break;
                        } else {
                            $data['card_association_id'] = $result[0]['id'];
                        }
                    }
                }

                if(isset($data['currency_id'])) {
                    if(!is_numeric($data['currency_id'])) {
                        $this->msg = 'Failed to Edit Record! Currency ID must be numeric: \'' . $data['currency_id'] . '\'';
                        $errors++;
                        break;
                    } else {
                        $result = Currencies::where('id', '=', $data['currency_id'])->get()->toArray();

                        if (empty($result)) {
                            $this->msg = 'Failed to Edit Record! No Match Found For Currency ID: \'' . $data['currency_id'] . '\'';
                            $errors++;
                            break;
                        } else {
                            $data['currency_id'] = $result[0]['id'];
                        }
                    }
                }

                break;
            }
        }

        if($errors === 0) {
            $class = $this->class;
            $record = $class::find($id);

            if (!empty($record)) {
                if($errors === 0) {
                    foreach ($data as $key => $value) {
                        $record->$key = $value;
                    }

                    $success = $record->update();

                    if ($success) {
                        $this->success = $success;
                        $this->code = 200;
                        $this->msg = 'Record successfully updated: ' . $request->input($this->identifier_field);
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

        if(isset($user_id) && is_numeric($user_id)) {
            $class = $this->class;

            if ($class::where('id', '=', $id)->delete()) {
                $this->success = true;
                $this->code = 200;
                $this->msg = 'Successfully deleted record.';
            }
        }

        return response()->json(Response::arrayResponse($this->success,$this->code,$this->msg,$this->data));
    }
}
