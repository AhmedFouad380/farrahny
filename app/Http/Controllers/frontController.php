<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\AdminForgetPasswordRequest;
use App\Http\Requests\CartRequest;
use App\Http\Requests\OrderCheckoutRequest;
use App\Http\Requests\RatesStoreRequest;
use App\Http\Requests\UserForgetPasswordRequest;
use App\Models\Address;
use App\Models\Admin;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Contact;
use App\Models\ContactForm;
use App\Models\Coupon;
use App\Models\Event;
use App\Models\Favorite;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderDetails;
use App\Models\Page;
use App\Models\PasswordReset;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Region;
use App\Models\Service;
use App\Models\ServiceRate;
use App\Models\Setting;
use App\Models\Shape;
use App\Models\User;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Session;

class frontController extends Controller
{

    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();

            if ($isUser) {
                Auth::guard('web')->login($isUser);
                dd(Auth::guard('web')->id());
                return redirect('/');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'phone' => $user->phone,
                    'fb_id' => $user->id,
                    'password' => encrypt('admin@123')
                ]);

                Auth::guard('web')->login($createUser);
                return redirect('/');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

    public function home()
    {
        return view('front.index');
    }

    public function forgetPassword()
    {
        return view('front.forget_password');
    }

    public function forgetPasswordPost(UserForgetPasswordRequest $request)
    {
        $data = $request->validated();
        //check token first
        //create new row
        $token = 1111;
//        $token = self::quickRandom(30);
        $data['token'] = $token;
        PasswordReset::create($data);
//        Mail::send('mail.reset_password_mail', ['token' => $token, 'email' => $request->email], function ($message) use ($data) {
//            $message->to($data['email']);
//            $message->subject(trans('lang.reset_password'));
//        });
        return redirect(url('/'))->with('message', trans('lang.sent_reset_password_email'));

    }

    public static function quickRandom($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }

    public function LoginUser(Request $request)
    {

        $credentials = $request->only('email', 'password');
        $remember_me = $request->has('remember_me') ? true : false;


        if (Auth::guard('web')->attempt($credentials, $remember_me)) {
            // Authentication passed...
            return redirect()->intended('/');
        } else if (Auth::guard('provider')->attempt($credentials, $remember_me)) {
            return redirect()->intended('/');

        } else {
            return back()->with('error', 'email or password wrong');
        }

    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');
        $remember_me = $request->has('remember_me') ? true : false;


        if (Auth::guard('admin')->attempt($credentials, $remember_me)) {
            // Authentication passed...
            return redirect()->intended('/Dashboard');
        } else if (Auth::guard('provider')->attempt($credentials, $remember_me)) {
            return redirect()->intended('/ProviderDashboard');

        } else if (Auth::guard('web')->attempt($credentials, $remember_me)) {
            return redirect()->intended('/');

        } else {
            return back()->with('error', '');
        }

    }

    public function logout()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }
        if (Auth::guard('provider')->check()) {
            Auth::guard('provider')->logout();
        }
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        }
        return redirect('/');
    }

    public function register()
    {
        return view('front.register');
    }


    public function registerUser(Request $request)
    {
        $data = $this->validate(request(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'phone' => 'required|unique:users|min:8',

        ]);
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->password = Hash::make($request->password);
        $data->save();
        Auth::login($data);
        return redirect('/')->with('message', 'تم التعديل بنجاح ');

    }


    public function UpdateProfile(Request $request)
    {
        $data = $this->validate(request(), [
            'name' => 'required|string',
            'password' => 'nullable|confirmed',
            'phone' => 'required|min:11|unique:users,id,' . $request->id,

        ]);
        $data = User::findOrFail($request->id);
        $data->name = $request->name;
//        $data->email=$request->email;
        $data->phone = $request->phone;
        if ($request->password) {
            $data->password = Hash::make($request->password);
        }
        $data->save();
        return back()->with('message', 'تم التعديل بنجاح ');

    }


    public function event($title)
    {
        $data = Event::where('ar_title', $title)->orWhere('en_title', $title)->firstOrFail();
        $categories = Category::where('is_active', 'active')->Where('event_id', $data->id)->get();

        return view('front.event', compact('data', 'categories'));
    }

    public function category($title)
    {
        $data = Category::where('ar_title', $title)->orWhere('en_title', $title)->firstOrFail();
        $sponsored = Service::where('is_active', 'active')->Where('category_id', $data->id)->Where('is_sponsored', 'active')->inRandomOrder()->paginate(12);
        $services = Service::where('is_active', 'active')->Where('category_id', $data->id)->paginate(12);
        return view('front.category', compact('data', 'services', 'sponsored'));
    }

    public function service($title)
    {
        $reviews = [];
        $data = Service::findOrFail($title);
        if (count($data->Reviews) > 0) {
            foreach ($data->Reviews as $key => $row) {
                $reviews[$key]['id'] = $row->id;
                $reviews[$key]['name'] = $row->user->name;
                $reviews[$key]['job'] = 'job';
                $reviews[$key]['img'] = $row->user->image;
                $reviews[$key]['text'] = 'text';
            }
        }
        $reviews = json_encode($reviews);
        return view('front.service', compact('data', 'reviews'));
    }

    public function product_model(Request $request)
    {
        $data = Product::findOrFail($request->id);
        return view('front.product-model', compact('data'));
    }

    public function product_details($id)
    {
        $data = Product::findOrFail($id);
        return view('front.shop-product-full', compact('data'));
    }


    public function Search(Request $request)
    {


        $data = Service::where('is_active', 'active')->
        where(function ($q) use ($request) {
            $q->where('ar_title', 'like', '%' . $request->search . '%')->
            OrWhere('en_title', 'like', '%' . $request->search . '%')->
            OrWhere('ar_description', 'like', '%' . $request->search . '%')->
            OrWhere('en_description', 'like', '%' . $request->search . '%');
        });

        $Products = $data->paginate(12);
        $sponsored = Service::where('is_active', 'active')->where('is_recommend', 'active')->inRandomOrder()->limit(10)->get();
        return view('front.search', compact('Products', 'sponsored'));
    }

    public function Providers(Request $request)
    {


        $Providers = Provider::where('is_active', 'active')->paginate(12);
        $sponsored = Service::where('is_active', 'active')->where('is_recommend', 'active')->inRandomOrder()->limit(10)->get();
        return view('front.Providers', compact('Providers', 'sponsored'));
    }

    public function HotDeals(Request $request)
    {


        $data = Product::where('is_active', 'active')->where('is_hot', 1)->OrderBy('id', 'desc');
        $Products = $data->paginate(10);
        return view('front.search', compact('Products'));
    }


    public function cartRemove($id)
    {

        $Carts = Cart::where('user_id', Auth::guard('web')->id())->where('id', $id)->delete();


        return response()->json(['count' => Cart::where('user_id', Auth::guard('web')->id())->count()]);
    }

    public function addCart(Request $request)
    {
        $Product = Service::findOrFail($request->id);

        $cart = new Cart();
        $cart->service_id = $Product->id;
        $cart->user_id = Auth::guard('web')->id();
        $cart->save();


        return response()->json(Cart::where('user_id', Auth::guard('web')->id())->count());
    }

    public function addwishlist(Request $request)
    {
        $Product = Service::findOrFail($request->id);
        if (Favorite::where('user_id', Auth::guard('web')->id())->where('service_id', $Product->id)->count() > 0) {
            $cart = Favorite::where('user_id', Auth::guard('web')->id())->where('service_id', $Product->id)->first()->delete();
        } else {
            $cart = new Favorite();
            $cart->service_id = $request->id;
            $cart->user_id = Auth::guard('web')->id();
            $cart->save();
        }
        return response()->json(Favorite::where('user_id', Auth::guard('web')->id())->count());
    }

    public function deleteWithList(Request $request)
    {
        Wishlist::where('id', $request->id)->delete();
        return response()->json(['message' => 'success']);

    }

    public function wishlist()
    {

        return view('front.wishList');
    }

    public function qtyUp(Request $request)
    {
        $cart = Cart::findOrFail($request->id);
        $cart->count = $request->value;
        $cart->save();
        return response()->json(Cart::where('user_id', Auth::guard('web')->id())->sum('count'));

    }

    public function deleteCartItem(Request $request)
    {
        Cart::where('id', $request->id)->delete();
        return response()->json(['message' => 'success']);

    }

    public function deleteALl(Request $request)
    {
        Cart::where('user_id', Auth::guard('web')->id())->delete();
        return response()->json(['message' => 'success']);

    }

    public function ApplyCoupon(Request $request)
    {
        $coupon = Coupon::where('name', $request->coupon)->first();
        if (session()->get('coupon')) {
            return back()->with('CouponMessage', 'AlreadyAdd');

        }
        if (isset($coupon) && $coupon->use_count != $coupon->used_count && $coupon->is_active == 'active' && $coupon->expire_date >= \Carbon\Carbon::now()) {
            session()->put('coupon', $coupon->id);

            return redirect('cart')->with('CouponMessage', 'success');
        } else {
            return back()->with('CouponMessage', 'failed');
        }

    }

    public function Contact()
    {

        return view('front.contact');
    }

    public function Page($id)
    {
        $data = Page::where('en_title', $id)->orWhere('ar_title', $id)->firstOrFail();
        return view('front.about', compact('data'));
    }

    public function removeCoupon()
    {

        session()->forget('coupon');

        return redirect('cart')->with('CouponMessage', 'success');

    }


    public function cancel_order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required|exists:orders,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => validation(), 'msg' => $validator->messages()->first(), 'data' => (object)[]], validation());
        }

        $Order = Order::findOrFail($request->order_id);
        if ($Order->type == 'pending') {
            $Order->type = 'canceled';
            $Order->save();
            return response()->json(msgdata($request, success(), 'success', (object)[]), success());
        } else {
            return response()->json(msgdata($request, error(), 'error', (object)[]), error());
        }

    }

    public function RateOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required|exists:orders,id',
            'rate' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => validation(), 'msg' => $validator->messages()->first(), 'data' => (object)[]], validation());
        }

        $Order = Order::findOrFail($request->order_id);
        $Order->rate = $request->rate;
        $Order->save();

        return response()->json(msgdata($request, success(), 'success', (object)[]), success());

    }


    public function StoreOrder(Request $request)
    {
        $this->validate(request(), [
            'address_id' => 'exists:addresses,id',
            'payment_type' => 'required'
        ]);

        $Carts = Cart::where('user_id', Auth::guard('web')->id())->get();
        if (count($Carts) == 0) {
            return response()->json(msgdata($request, error(), 'cart_empty', (object)[]), success());
        }
        $Order = new Order();
        $Order->order_num = rand(9999999, 999999999);
        $Order->payment_type = $request->payment_type;
        $Order->tax = Setting::find(1)->tax;
        $Order->delivery_fees = Setting::find(1)->delivery_fees;
        $address = Address::find($request->address_id);
        $Order->lat = $address->lat;
        $Order->lng = $address->lng;
        $Order->address_id = $request->address_id;
        $Order->user_id = Auth::guard('web')->id();
        $Order->note = $request->note;
        if (session()->get('coupon')) {
            $coupon = Coupon::findOrFail(session()->get('coupon'));
            $Order->coupon_id = $coupon->id;
            $Order->coupon_percent = $coupon->percent;
        }
        $Order->save();

        $total_price = [];
        foreach ($Carts as $Cart) {
            $Item = Product::findOrFail($Cart->product_id);
            $ItemShape = Shape::findOrFail($Cart->shape_id);
            $OrderDetail = new OrderDetails();
            $OrderDetail->product_id = $Cart->product_id;
            $OrderDetail->shape_id = $Cart->shape_id;
            $OrderDetail->user_id = Auth::guard('web')->id();
            $OrderDetail->note = $Cart->note;
            $OrderDetail->count = $Cart->count;
            $OrderDetail->ar_title = $Item->ar_title;
            $OrderDetail->en_title = $Item->en_title;
            $OrderDetail->ar_title_shape = $ItemShape->ar_title;
            $OrderDetail->en_title_shape = $ItemShape->en_title;
            $OrderDetail->price = $ItemShape->StorageAvaliable->sell_price * $Cart->count;
            $OrderDetail->storage_id = $ItemShape->torageAvaliable->id;
            $OrderDetail->order_id = $Order->id;
            $OrderDetail->save();
            $total_price[] = $Cart->count * $ItemShape->StorageAvaliable->sell_price;
        }
        if (session()->get('coupon')) {
            $coupon = Coupon::findOrFail(session()->get('coupon'));
            $total = array_sum($total_price) - ((array_sum($total_price) * $coupon->percent) / 100);
        } else {
            $total = array_sum($total_price);
        }

        $Order->total_price = $total + Setting::find(1)->tax + Setting::find(1)->delivery_fees;
        $Order->save();


        Cart::where('user_id', Auth::guard('web')->id())->delete();

        return redirect('/Profile/Orders')->with('Message', 'success');
    }

    public function profile()
    {
        $data = User::findOrFail(Auth::guard('web')->id());
        $Orders = Order::where('user_id', $data->id)->OrderBy('id', 'desc')->paginate(10);
//        $addresses = Address::where('user_id', $data->id)->OrderBy('id', 'desc')->get();
        return view('front.profile', compact('data', 'Orders'));
    }

    public function contactForm(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);


        $data = new ContactForm();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();

        return back()->with('message', 'success');
    }

    public function profilePost(Request $request)
    {
        $this->validate(request(), [
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg,webp',
            'name' => 'required',
            'password' => 'nullable|confirmed',
        ]);
        $data['name'] = $request->name;
        if ($request->image) {
            if (is_file($request->image)) {
                $imageFields = upload($request->image, 'users');
                $data['image'] = $imageFields;
            }
        }
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }
        User::whereId(auth('web')->user()->id)->update($data);
        return back()->with('message', 'success');
    }

    public function ShapeView(Request $request)
    {
        $data = Shape::findOrFail($request->id);
        return view('front.shape-view', compact('data'));
    }

    public function Setting()
    {

        $employee = User::findOrFail(Auth::guard('web')->id());
        return view('Admin.Admin.Profile', compact('employee'));
    }

    public function Provider($id)
    {
        $data = Provider::findOrFail($id);
        return view('front.Providers', compact('data'));
    }


//cart
    public function cart(Request $request)
    {
        $Carts = Cart::where('user_id', Auth::guard('web')->id())->orderBy('created_at', 'desc')->get();
        return view('front.cart', compact('Carts'));
    }

    public function storeCart(CartRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::guard('web')->id();
        $service = Service::whereId($data['service_id'])->first();

        $provider_id = $service->provider_id;
        $data['provider_id'] = $provider_id;
        Cart::create($data);
        return redirect()->back()->with('message', 'تم الاضافة للسلة بنجاح ');
    }

    public function ratesStore(RatesStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::guard('web')->id();
        $order_details = OrderDetail::whereId($data['order_details_id'])->first();

        $data['service_id'] = $order_details->service_id;
        $data['provider_id'] = $order_details->order->provider_id;
        ServiceRate::create($data);

        $order_details->is_rated = $data['rate'];
        $order_details->save();


        $target = Service::findOrFail($order_details->service_id);
        $count_rates = $target->Reviews->count();
        if ($count_rates == 0) {
            $rate = 0;
        } else {
            $sum_rates = $target->Reviews->sum('rate');
            $rate = $sum_rates / $count_rates;
        }
        $target->rate = (integer)$rate;
        $target->save();
        return redirect()->back()->with('message', 'تم الاضافة للسلة بنجاح ');
    }

    //order section ...
    public function myOrders(Request $request)
    {
        $orders = Order::with('provider')->where('user_id', Auth::guard('web')->id())->orderBy('created_at', 'desc')->get();
        return view('front.orders', compact('orders'));
    }

    public function orderDetails($id)
    {
        $order = Order::findOrFail($id);
        $Carts = OrderDetail::where('order_id', $id)->orderBy('created_at', 'desc')->get();
        return view('front.order_details', compact('Carts', 'order'));
    }

    public function service_date(Request $request)
    {
        $service = Service::findOrFail($request->id);
        return $service->requires_location;
    }

    public function orderCheckout(OrderCheckoutRequest $request)
    {
        $data = $request->validated();
        $cart_providers = Cart::where('user_id', Auth::guard('web')->id())->get()->groupBy('provider_id');
        foreach ($cart_providers as $cart_provider) {
            $total = 0;
            $total_deposit = 0;
            foreach ($cart_provider as $cart) {
                $total = $total + $cart->Service->price;
                $total_deposit = $total_deposit + $cart->Service->deposit;
            }
            $remain = $total - $total_deposit;

            $data['total'] = $total;
            $data['total_deposit'] = $total_deposit;
            $data['remain'] = $remain;
            $data['user_id'] = Auth::guard('web')->id();
            $data['provider_id'] = $cart_provider->first()->provider_id;
            $order = Order::create($data);

            //save order details
            foreach ($cart_provider as $cart) {
                $detail_data['service_id'] = $cart->service_id;
                $detail_data['service_name'] = $cart->Service->title;
                $detail_data['deposit'] = $cart->Service->deposit;
                $detail_data['price'] = $cart->Service->price;
                $remain = $cart->Service->price - $cart->Service->deposit;
                $detail_data['time'] = $cart->time;
                $detail_data['date'] = $cart->date;
                $detail_data['lat'] = $cart->lat;
                $detail_data['lng'] = $cart->lng;
                $detail_data['order_id'] = $order->id;
                OrderDetail::create($detail_data);
            }

        }
        Cart::where('user_id', Auth::guard('web')->id())->delete();
        return redirect()->back()->with('message', 'تم حفظ الفاتورة بنجاح ');
    }

    public function store_contact(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);


        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();

        return back()->with('message', 'success');
    }


    public function getRegion($id)
    {
        $data = Region::where('city_id', $id)->get();
        return view('front.provider.regions', compact('data'));
    }

}
