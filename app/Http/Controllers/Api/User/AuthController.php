<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use TymonJWTAuthExceptionsJWTException;
use Auth;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'password' => 'required|min:6',
            'fcm_token' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $count = User::where('email', $request->email)->count();
        $input = $request->only('email', 'password');
        $jwt_token = null;
//        ِAuth::logout($first);

        if ($count == 0) {
            return response()->json(msgdata($request, error(), 'phone_wrong', (object)[]));

        } elseif (!$jwt_token = JWTAuth::attempt($input)) {
            return response()->json(msgdata($request, error(), 'password_wrong', (object)[]));

        }
        $user = Auth::user();
        $user->fcm_token = $request->fcm_token;
        $user->save();
        $user->token = $jwt_token;

        return response()->json(msgdata($request, success(), 'success',UserResource::make($user)));

    }

    public function Store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'phone' => 'required|numeric|min:12|unique:users,phone',
            'email' => 'nullable|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'fcm_token' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $data = new User();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->fcm_token = $request->fcm_token;
        $data->lat = $request->lat;
        $data->lng = $request->lng;
        $data->is_active = 'active';
        if ($request->image) {
            $data->image = $request->image;
        }
        $data->password = Hash::make($request->password);
        $data->save();

        $User = User::find($data->id);
        $input = $request->only('phone', 'password');
        $jwt_token = JWTAuth::attempt($input);
        $User->token = $jwt_token;
        return response()->json(msgdata($request, success(), 'register_success', UserResource::make($User)));


    }

    public function submitForgetPasswordForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        if ($User = User::where('email', $request->email)->first()) {
            $code = rand(1111, 9999);
            $User->code = $code;
            $User->save();
          //  $message = 'الكود الخاص بك هو '. $code ;
            return response()->json(msgdata($request, success(), 'code_sent',$code));


        } else {
            return response()->json(msgdata($request, error(), 'email_wrong', (object)[]));

        }
    }

    public function submitResetPasswordForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'code'=>'required',
            'password'=>'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $User = User::where('email',$request->email)->first();
        $User->password = Hash::make($request->password);
        $User->save();

        return response()->json(msgdata($request, success(), 'success'));


    }

    public function profile(Request $request){
        $user = Auth::guard('api')->user();
        return response()->json(msgdata($request, success(), 'success', UserResource::make($user)));


    }

    public function updateProfile(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'phone' => 'required|numeric|min:12|unique:users,phone,'.Auth::guard('api')->id(),
            'password' => 'nullable|confirmed|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $data =  Auth::guard('api')->user();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->lat = $request->lat;
        $data->lng = $request->lng;
        if ($request->image) {
            $data->image = $request->image;
        }
        if ($request->password) {
            $data->password = Hash::make($request->password);
        }
        $data->save();

        return response()->json(msgdata($request, success(), 'success', UserResource::make($data)));


    }


}
