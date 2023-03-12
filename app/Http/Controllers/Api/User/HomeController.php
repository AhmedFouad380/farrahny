<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\CategoryResource;
use App\Http\Resources\User\EventResource;
use App\Http\Resources\User\ProvidersResource;
use App\Http\Resources\User\ServiceResource;
use App\Http\Resources\User\ServicesResource;
use App\Http\Resources\User\SliderResource;
use App\Models\Category;
use App\Models\Event;
use App\Models\Favorite;
use App\Models\Provider;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
class HomeController extends Controller
{
    public function home(Request $request){

        $data['events'] = EventResource::collection(Event::where('is_active','active')->limit(10)->InRandomOrder()->get());
        $data['slider'] = SliderResource::collection(Slider::where('is_active','active')->limit(6)->InRandomOrder()->get());
        $data['popular_services'] = ServicesResource::collection(Service::where('is_active','active')->limit(4)->InRandomOrder()->get());
        $data['popular_recommended'] = ServicesResource::collection(Service::where('is_active','active')->limit(4)->InRandomOrder()->get());
        $data['top_providers'] = ProvidersResource::collection(Provider::where('is_active','active')->where('is_top','active')->limit(6)->InRandomOrder()->get());

        return response()->json(msgdata($request, success(), 'success', $data));

    }

    public function Categories(Request $request){
        $validator = Validator::make($request->all(), [
            'event_id' => 'required|exists:events,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        $data = CategoryResource::collection(Category::where('is_active','active')->where('event_id',$request->event_id)->get());

        return response()->json(msgdata($request, success(), 'success', $data));
    }

    public function Services(Request $request){
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        $Services = Service::where('is_active','active')->where('category_id',$request->category_id);
        if($request->title){
            $Services->where(function ($query) use($request) {
                $query->where('ar_title','like','%'.$request->title.'%')->orwhere('en_title','like','%'.$request->title.'%');
            });
        }
        $data = $Services->paginate(10);
        $data = ServicesResource::collection($data);

        return response()->json(msgdata($request, success(), 'success', $data));
    }
    public function Service(Request $request){
        $validator = Validator::make($request->all(), [
            'service_id' => 'required|exists:services,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        $data = Service::find($request->service_id);


        return response()->json(msgdata($request, success(), 'success', ServiceResource::make($data)));
    }

    public function favoriteServices(Request $request){


        $Services = Service::where('is_active','active')->join('favorites','favorites.service_id','services.id')->where('favorites.user_id',Auth::guard('api')->id());
        $data = $Services->paginate(10);
        $data = ServicesResource::collection($data);

        return response()->json(msgdata($request, success(), 'success', $data));

    }

    public function addFavorite(Request $request){
        $validator = Validator::make($request->all(), [
            'service_id' => 'required|exists:services,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        if(Favorite::where('service_id',$request->service_id)->where('user_id',Auth::guard('api')->id())->count() > 0 ){
            return response()->json(msgdata($request, success(), 'success'));

        }else{

            $data = new Favorite();
            $data->service_id=$request->service_id;
            $data->user_id=Auth::guard('api')->id();
            $data->save();
            return response()->json(msgdata($request, success(), 'success'));

        }
    }
    public function RemoveFavorite(Request $request){
        $validator = Validator::make($request->all(), [
            'service_id' => 'required|exists:services,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        Favorite::where('service_id',$request->service_id)->where('user_id',Auth::guard('api')->id())->delete();

            return response()->json(msgdata($request, success(), 'success'));
    }
}
