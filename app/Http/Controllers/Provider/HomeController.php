<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Order;
use App\Models\Provider;
use App\Models\Service;
use App\Models\Subscription;

class HomeController extends Controller
{

    public function index()
    {
        $count['orders'] = Order::get()->count();
        $count['services'] = Service::get()->count();
        $count['events'] = Event::get()->count();
        $count['providers'] = Provider::get()->count();

        return view('admin.index_provider',compact('count'));
    }

    public function renewSubscription()
    {
        $subscriptions = Subscription::active()->orderBy('created_at','desc')->get();
        return view('admin.pricing.index',compact('subscriptions'));
    }

}
