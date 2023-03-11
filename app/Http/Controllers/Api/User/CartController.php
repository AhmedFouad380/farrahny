<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\CartResource;
use App\Http\Resources\User\ServiceResource;
use App\Models\Cart;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index(Request $request){
        $carts = Cart::where('user_id',Auth::guard('api')->id())->get();
        $total = 0;
        foreach($carts as $cart){
            $total = [];
            $total[] = $cart->Service->deposit;
        }
        $data['cart'] = CartResource::collection($carts);
        $data['sub_total'] =array_sum($total);
        $data['total'] =array_sum($total);

      return response()->json(msgdata($request, success(), 'success',$data));

    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id' => 'required|exists:services,id',
            'date' => 'required|date|after:'.Carbon::now()->format('Y-m-d'),
            'time' => 'required',
            'lat' => 'nullable',
            'lng' => 'nullable',
            ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        $service = Service::find($request->service_id);
        $cart = new Cart();
        $cart->service_id = $request->service_id;
        $cart->date = $request->date;
        $cart->time = $request->time;
        $cart->lat = $request->lat;
        $cart->lng = $request->lng;
        $cart->provider_id=$service->provider_id;
        $cart->user_id = Auth::guard('api')->id();
        $cart->save();


        return response()->json(msgdata($request, success(), 'success'));
    }

    public function cartRemove(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cart_id' => 'required|exists:carts,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        Cart::where('user_id', Auth::guard('api')->id())->where('id', $request->id)->delete();


        return response()->json(msgdata($request, success(), 'success'));
    }
}
