<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => validation(), 'msg' => $validator->messages()->first(), 'data' => (object)[]] ,validation());
        }

        $data = new Contact();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->message=$request->message;
        $data->save();

        return response()->json(msgdata($request, success(), 'success', $data),success());

    }
}
