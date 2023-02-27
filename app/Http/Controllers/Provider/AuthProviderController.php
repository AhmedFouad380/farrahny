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
            'password' => 'required|confirmed',
            'address' => 'required|string|max:255',
            'lat' => 'required|string|max:255',
            'lng' => 'required|string|max:255',
        ]);
        Provider::create($data);
        return redirect('/')->with('message', 'تم الاضتفة بنجاح ');
    }


}
