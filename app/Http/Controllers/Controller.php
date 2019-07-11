<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function formValidation($data, $rules)
    {
    	return Validator::make($data, $rules)->validate();
    }

    /******** API side commons ******************/

    public function apiValidation($data, $rules)
    {
        $validation = Validator::make($data, $rules);

        if($validation->fails()) {
            $this->response['message'] = $validation->errors()->all()[0];
            return false;
        } else {
            return true;
        }
    }

    public $status = 412;
    public $response = ['data' => null, 'message' => ""];

    public function return_response() {
    	return response()->json($this->response, $this->status);
    }

    /******** API side commons ******************/

}
