<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Order;
use App\Models\Provider;
use App\Models\ProviderSubscription;
use App\Models\Service;
use App\Models\Subscription;

class HomeController extends Controller
{

    public function index()
    {
        $count['completed_orders'] = Order::where('status','completed')->where('provider_id',Auth::guard('provider_id')->id())->count();
        $count['uncompleted_orders'] = Order::where('status','!=','completed')->where('provider_id',Auth::guard('provider_id')->id())->count();
        $count['services'] = Service::where('provider_id',Auth::guard('provider_id')->id())->count();
        $count['subscription'] = ProviderSubscription::where('provider_id',Auth::guard('provider_id')->id())->count();

        return view('admin.index_provider',compact('count'));
    }

    public function renewSubscription()
    {
        $subscriptions = Subscription::active()->orderBy('created_at','desc')->get();
        return view('admin.pricing.index',compact('subscriptions'));
    }

}
