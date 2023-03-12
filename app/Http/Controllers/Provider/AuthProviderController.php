<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Http\Requests\OrderCheckoutRequest;
use App\Models\Address;
use App\Models\Admin;
use App\Models\Cart;
use App\Models\Category;
use App\Models\ContactForm;
use App\Models\Coupon;
use App\Models\Event;
use App\Models\Favorite;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderDetails;
use App\Models\Page;
use App\Models\Product;
use App\Models\Provider;
use App\Models\ProviderSubscription;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Shape;
use App\Models\User;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthProviderController extends Controller
{

    public function registerPage()
    {
        return view('front.provider.register');
    }


    public function register(Request $request)
    {
        $data = $this->validate(request(), [
            'ar_name' => 'required|string|max:255',
            'en_name' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'subscription_id' => 'required|exists:subscriptions,id',
            'email' => 'required|email|unique:providers,email',
            'phone' => 'required|unique:providers,phone|min:8',
            'username' => 'required|unique:providers,username|min:6',
            'password' => 'required|confirmed',
            'address' => 'required|string|max:255',
            'city_id' => 'required|exists:cities,id',
            'region_id' => 'required|exists:regions,id',
            'lat' => 'required|string|max:255',
            'lng' => 'required|string|max:255',
        ]);
        $data['password'] = Hash::make($request->password);
        $provider = Provider::create($data);

        //save provider subscription
        $subscription_data['provider_id'] = $provider->id;
        $subscription_data['subscription_id'] = $request->subscription_id;
        $subscription_data['service_count'] = $provider->subscription->service_count;
        $subscription_data['service_image_count'] = $provider->subscription->service_image_count;
        $subscription_data['days_count'] = $provider->subscription->days_count;
        $subscription_data['price'] = $provider->subscription->price;
        $subscription_data['is_video'] = $provider->subscription->is_video;
        $today = Carbon::now();
        $subscription_data['from_date'] = $today;
        $to_date = Carbon::now()->addDays($provider->subscription->days_count);
        $subscription_data['to_date'] = $to_date;
        $provider_subscription = ProviderSubscription::create($subscription_data);

        $provider->current_provider_subscription_id = $provider_subscription->id;
        $provider->save();

        return redirect('/')->with('message', trans('lang.data_added_s'));
    }

//    public function verifyEmail()
//    {
//        return view('front.provider.verify_email');
//    }

}
