<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Order;
use App\Models\Provider;
use App\Models\Service;

class HomeController extends Controller
{

    public function index()
    {
        $count['orders'] = Order::get()->count();
        $count['services'] = Service::get()->count();
        $count['events'] = Event::get()->count();
        $count['providers'] = Provider::get()->count();

        return view('admin.index',compact('count'));
    }
    public function indexProvider()
    {
        $count['orders'] = Order::get()->count();
        $count['services'] = Service::get()->count();
        $count['events'] = Event::get()->count();
        $count['providers'] = Provider::get()->count();

        return view('admin.index',compact('count'));
    }

}
