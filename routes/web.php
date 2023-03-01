<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Provider\AuthProviderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('store_contact',[\App\Http\Controllers\frontController::class,'store_contact']);


Route::get('/', function () {
    return view('front.index');
});


Route::get('/Admin/login', function () {
    return view('auth.login');
});

Route::post('Login', [\App\Http\Controllers\frontController::class, 'login']);
Route::get('logout', [\App\Http\Controllers\frontController::class, 'logout']);
Route::post('LoginUser', [\App\Http\Controllers\frontController::class, 'LoginUser']);
Route::post('registerUser', [\App\Http\Controllers\frontController::class, 'registerUser']);

//provider
Route::get('provider/register', [AuthProviderController::class, 'registerPage'])->name('provider.register');
Route::post('provider/register/store', [AuthProviderController::class, 'register'])->name('provider.register.store');


Route::get('event/{title}', [\App\Http\Controllers\frontController::class, 'event']);
Route::get('category/{title}', [\App\Http\Controllers\frontController::class, 'category']);
Route::get('service/{title}', [\App\Http\Controllers\frontController::class, 'service']);
Route::get('Page/{title}', [\App\Http\Controllers\frontController::class, 'Page']);
Route::get('Provider/{id}', [\App\Http\Controllers\frontController::class, 'Provider']);


Route::get('login', function () {
    return view('front.login');
});
Route::get('register', function () {
    return view('front.register');
});
Route::get('contact', function () {
    return view('front.contact');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('cart', [\App\Http\Controllers\frontController::class, 'cart']);
    Route::post('cart/store', [\App\Http\Controllers\frontController::class, 'storeCart'])->name('cart.store');
    Route::get('add-cart', [\App\Http\Controllers\frontController::class, 'addCart']);
    Route::get('store-rate', [\App\Http\Controllers\frontController::class, 'stareRate']);
    Route::get('add-wishlist', [\App\Http\Controllers\frontController::class, 'addwishlist']);
    Route::get('wishlist', [\App\Http\Controllers\frontController::class, 'wishlist']);
    Route::get('cart/remove/{id}', [\App\Http\Controllers\frontController::class, 'cartRemove'])->name('cart.remove');
    Route::post('ApplyCoupon', [\App\Http\Controllers\frontController::class, 'ApplyCoupon']);
    Route::get('removeCoupon', [\App\Http\Controllers\frontController::class, 'removeCoupon']);
    Route::get('search', [\App\Http\Controllers\frontController::class, 'search']);
    Route::get('Providers', [\App\Http\Controllers\frontController::class, 'Providers']);

    Route::get('orders', [\App\Http\Controllers\frontController::class, 'myOrders'])->name('my_orders');
    Route::post('order/checkout', [\App\Http\Controllers\frontController::class, 'orderCheckout'])->name('order.checkout');
    Route::get('orders/details/{id}', [\App\Http\Controllers\frontController::class, 'orderDetails'])->name('orders.details');

});
Route::group(['middleware' => ['admin']], function () {

    Route::get('/Dashboard', function () {
        return view('admin.index');
    });

    Route::get('subscriptions', [\App\Http\Controllers\Admin\SubscriptionController::class, 'index'])->name('subscriptions');

//    Route::get('Services_setting', [\App\Http\Controllers\Admin\SubscriptionController::class, 'index']);
    Route::get('subscriptions_datatable', [\App\Http\Controllers\Admin\SubscriptionController::class, 'datatable'])->name('subscriptions.datatable.data');
    Route::get('delete-subscriptions', [\App\Http\Controllers\Admin\SubscriptionController::class, 'destroy']);
    Route::post('store-subscriptions', [\App\Http\Controllers\Admin\SubscriptionController::class, 'store']);
    Route::get('subscriptions-edit/{id}', [\App\Http\Controllers\Admin\SubscriptionController::class, 'edit']);
    Route::post('update-subscriptions', [\App\Http\Controllers\Admin\SubscriptionController::class, 'update']);
    Route::get('/add-button-subscriptions', function () {
        return view('admin/subscriptions/button');
    });


    Route::get('Admin_setting', [\App\Http\Controllers\Admin\AdminController::class, 'index']);
    Route::get('Admin_datatable', [\App\Http\Controllers\Admin\AdminController::class, 'datatable'])->name('Admin.datatable.data');
    Route::get('delete-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'destroy']);
    Route::post('store-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'store']);
    Route::get('Admin-edit/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'edit']);
    Route::post('update-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'update']);
    Route::get('/add-button-Admin', function () {
        return view('admin/Admin/button');
    });

    Route::get('User_setting', [\App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('User_datatable', [\App\Http\Controllers\Admin\UserController::class, 'datatable'])->name('User.datatable.data');
    Route::get('delete-User', [\App\Http\Controllers\Admin\UserController::class, 'destroy']);
    Route::post('store-User', [\App\Http\Controllers\Admin\UserController::class, 'store']);
    Route::get('User-edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::post('update-User', [\App\Http\Controllers\Admin\UserController::class, 'update']);
    Route::get('/add-button-User', function () {
        return view('admin/User/button');
    });

    Route::get('Providers_setting', [\App\Http\Controllers\Admin\ProviderController::class, 'index']);
    Route::get('Provider_datatable', [\App\Http\Controllers\Admin\ProviderController::class, 'datatable'])->name('Provider.datatable.data');
    Route::get('delete-Provider', [\App\Http\Controllers\Admin\ProviderController::class, 'destroy']);
    Route::post('store-Provider', [\App\Http\Controllers\Admin\ProviderController::class, 'store']);
    Route::get('Provider-edit/{id}', [\App\Http\Controllers\Admin\ProviderController::class, 'edit']);
    Route::post('update-Provider', [\App\Http\Controllers\Admin\ProviderController::class, 'update']);
    Route::get('/add-button-Provider', function () {
        return view('admin/Provider/button');
    });


    Route::get('About_setting', [\App\Http\Controllers\Admin\AboutController::class, 'index']);
    Route::post('update-About', [\App\Http\Controllers\Admin\AboutController::class, 'update']);

    Route::get('General_Setting', [\App\Http\Controllers\Admin\SettingController::class, 'index']);
    Route::post('Update_General_Setting', [\App\Http\Controllers\Admin\SettingController::class, 'update']);


    Route::get('Slider_setting', [\App\Http\Controllers\Admin\SliderController::class, 'index']);
    Route::get('Slider_datatable', [\App\Http\Controllers\Admin\SliderController::class, 'datatable'])->name('Slider.datatable.data');
    Route::get('delete-Slider', [\App\Http\Controllers\Admin\SliderController::class, 'destroy']);
    Route::post('store-Slider', [\App\Http\Controllers\Admin\SliderController::class, 'store']);
    Route::get('Slider-edit/{id}', [\App\Http\Controllers\Admin\SliderController::class, 'edit']);
    Route::post('update-Slider', [\App\Http\Controllers\Admin\SliderController::class, 'update']);
    Route::get('/add-button-Slider', function () {
        return view('admin/Slider/button');
    });

    Route::get('Pages_setting', [\App\Http\Controllers\Admin\PageController::class, 'index']);
    Route::get('Page_datatable', [\App\Http\Controllers\Admin\PageController::class, 'datatable'])->name('Page.datatable.data');
    Route::get('delete-Page', [\App\Http\Controllers\Admin\PageController::class, 'destroy']);
    Route::post('store-Page', [\App\Http\Controllers\Admin\PageController::class, 'store']);
    Route::get('Page-edit/{id}', [\App\Http\Controllers\Admin\PageController::class, 'edit']);
    Route::post('update-Page', [\App\Http\Controllers\Admin\PageController::class, 'update']);
    Route::get('/add-button-Page', function () {
        return view('admin/Page/button');
    });

    Route::get('Events_setting', [\App\Http\Controllers\Admin\EventController::class, 'index']);
    Route::get('Event_datatable', [\App\Http\Controllers\Admin\EventController::class, 'datatable'])->name('Event.datatable.data');
    Route::get('delete-Event', [\App\Http\Controllers\Admin\EventController::class, 'destroy']);
    Route::post('store-Event', [\App\Http\Controllers\Admin\EventController::class, 'store']);
    Route::get('Event-edit/{id}', [\App\Http\Controllers\Admin\EventController::class, 'edit']);
    Route::post('update-Event', [\App\Http\Controllers\Admin\EventController::class, 'update']);
    Route::get('/add-button-Event', function () {
        return view('admin/Event/button');
    });
    Route::get('Categories_setting', [\App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('Category_datatable', [\App\Http\Controllers\Admin\CategoryController::class, 'datatable'])->name('Category.datatable.data');
    Route::get('delete-Category', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
    Route::post('store-Category', [\App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('Category-edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::post('update-Category', [\App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('/add-button-Category', function () {
        return view('admin/Category/button');
    });



    Route::get('Messages_setting', [\App\Http\Controllers\Admin\MessagesController::class, 'index']);
    Route::get('Messages_datatable', [\App\Http\Controllers\Admin\MessagesController::class, 'datatable'])->name('Messages.datatable.data');
    Route::get('delete-Messages', [\App\Http\Controllers\Admin\MessagesController::class, 'destroy']);
    Route::post('store-Messages', [\App\Http\Controllers\Admin\MessagesController::class, 'store']);
    Route::get('/add-button-Messages', function () {
        return view('Admin/Message/button');
    });

    Route::get('Coupons_Setting', [\App\Http\Controllers\Admin\CouponController::class, 'index']);
    Route::get('Coupons_datatable', [\App\Http\Controllers\Admin\CouponController::class, 'datatable'])->name('Coupons.datatable.data');
    Route::get('delete-Coupons', [\App\Http\Controllers\Admin\CouponController::class, 'destroy']);
    Route::post('store-Coupons', [\App\Http\Controllers\Admin\CouponController::class, 'store']);
    Route::get('Coupons-edit/{id}', [\App\Http\Controllers\Admin\CouponController::class, 'edit']);
    Route::post('update-Coupons', [\App\Http\Controllers\Admin\CouponController::class, 'update']);
    Route::get('/add-button-Coupons', function () {
        return view('admin/Coupons/button');
    });

    Route::get('Contact_Setting', [\App\Http\Controllers\Admin\ContactController::class, 'index']);
    Route::get('Contact_datatable', [\App\Http\Controllers\Admin\ContactController::class, 'datatable'])->name('Contact.datatable.data');
    Route::get('delete-Contact', [\App\Http\Controllers\Admin\ContactController::class, 'destroy']);

    Route::get('/add-button-Contact', function () {
        return view('admin/Contact/button');
    });

    Route::get('Orders', [\App\Http\Controllers\Admin\OrderController::class, 'index']);
    Route::get('Restaurants-Orders/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'Restaurants_Orders']);
    Route::get('User-Orders/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'User_Orders']);

    Route::get('Order_detail/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'Order_detail']);
    Route::get('Order_datatable', [\App\Http\Controllers\Admin\OrderController::class, 'datatable'])->name('Order.datatable.data');
    Route::get('delete-Order', [\App\Http\Controllers\Admin\OrderController::class, 'destroy']);
    Route::get('/add-button-Order', function () {
        return view('admin/Order/button');
    });
    Route::post('update-Order-states', [\App\Http\Controllers\Admin\OrderController::class, 'updateOrderStates']);

});

Route::group(['middleware' => ['Provider']], function () {
    Route::get('/ProviderDashboard', function () {
        return view('admin.index');
    });


    Route::get('Services_setting', [\App\Http\Controllers\Admin\ServiceController::class, 'index']);
    Route::get('Service_datatable', [\App\Http\Controllers\Admin\ServiceController::class, 'datatable'])->name('Service.datatable.data');
    Route::get('delete-Service', [\App\Http\Controllers\Admin\ServiceController::class, 'destroy']);
    Route::post('store-Service', [\App\Http\Controllers\Admin\ServiceController::class, 'store']);
    Route::get('Service-edit/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'edit']);
    Route::post('update-Service', [\App\Http\Controllers\Admin\ServiceController::class, 'update']);
    Route::get('/add-button-Service', function () {
        return view('admin/Service/button');
    });

    Route::get('ServiceImage/{id}', [\App\Http\Controllers\Admin\ServiceImageController::class, 'index']);
    Route::get('ServiceImage_datatable', [\App\Http\Controllers\Admin\ServiceImageController::class, 'datatable'])->name('ServiceImage.datatable.data');
    Route::get('delete-ServiceImage', [\App\Http\Controllers\Admin\ServiceImageController::class, 'destroy']);
    Route::post('store-ServiceImage', [\App\Http\Controllers\Admin\ServiceImageController::class, 'store']);
    Route::get('/add-button-ServiceImage/{id}', function ($id) {
        return view('admin/ServiceImage/button', compact('id'));
    });

    Route::get('get-Category/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'getCategory']);

});

//this for provider and admin
Route::group(['middleware' => ['admin','Provider']], function () {

});



Route::get('lang/{lang}', function ($lang) {

    if (session()->has('lang')) {
        session()->forget('lang');
    }
    if ($lang == 'en') {
        session()->put('lang', 'en');
    } else {
        session()->put('lang', 'ar');
    }


    return back();
});
