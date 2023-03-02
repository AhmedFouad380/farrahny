<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Order;
use App\Models\Provider;
use App\Models\ProviderSubscription;
use App\Models\Service;
use App\Models\Subscription;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function index()
    {
        $count['orders'] = Order::get()->count();
        $count['services'] = Service::get()->count();
        $count['events'] = Event::get()->count();
        $count['providers'] = Provider::get()->count();

        //check all subscription history
        ProviderSubscription::where('to_date', '<', Carbon::now())->where('status', 'working')->update(['status'=>'finished']);

        return view('admin.index_provider', compact('count'));
    }

    public function renewSubscription()
    {
        $subscriptions = Subscription::active()->orderBy('created_at', 'desc')->get();
        return view('admin.pricing.index', compact('subscriptions'));
    }

    public function renewNow($id)
    {
        $provider = Provider::where('id', auth('provider')->user()->id)->first();

        $subscription = Subscription::where('id', $id)->first();
        //save provider subscription
        $subscription_data['provider_id'] = $provider->id;
        $subscription_data['subscription_id'] = $id;
        $subscription_data['service_count'] = $subscription->service_count;
        $subscription_data['service_image_count'] = $subscription->service_image_count;
        $subscription_data['days_count'] = $subscription->days_count;
        $subscription_data['price'] = $subscription->price;
        $subscription_data['is_video'] = $subscription->is_video;
        $today = Carbon::now();
        $subscription_data['from_date'] = $today;
        $to_date = Carbon::now()->addDays($subscription->days_count);
        $subscription_data['to_date'] = $to_date;
        $provider_subscription = ProviderSubscription::create($subscription_data);

        $provider->current_provider_subscription_id = $provider_subscription->id;
        $provider->save();
        return redirect()->back()->with('success_message', trans('lang.subscription_done'));
    }

}
