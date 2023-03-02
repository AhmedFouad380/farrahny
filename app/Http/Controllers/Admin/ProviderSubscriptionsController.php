<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use App\Models\ProviderSubscription;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Auth;

class ProviderSubscriptionsController extends Controller
{
    public function index()
    {
        return view('admin.provider_subscriptions.index');
    }

    public function datatable(Request $request)
    {
        $data = ProviderSubscription::orderBy('id', 'desc');
        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->addColumn('provider', function ($row) {
                return $row->provider ? $row->provider->name : '';
            })
            ->addColumn('subscription', function ($row) {
                return $row->subscription ? $row->subscription->name : '';
            })
            ->addColumn('status_btn', function ($row) {

                if ($row->status == 'finished') {
                    return '<span class="btn btn-light-danger">' . trans('lang.' . $row->status) . '</span>';
                } else {
                    return '<span class="btn btn-light-success">' . trans('lang.' . $row->status) . '</span>';
                }
            })
            ->rawColumns(['checkbox', 'provider', 'subscription', 'status_btn'])
            ->make();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $this->validate(request(), [
            'provider_id' => 'required|exists:providers,id',
            'subscription_id' => 'required|exists:subscriptions,id',
        ]);
        $provider = Provider::findOrFail($request->provider_id);
        $subscription = Subscription::findOrFail($request->subscription_id);
        //save provider subscription
        $subscription_data['provider_id'] = $provider->id;
        $subscription_data['subscription_id'] = $request->subscription_id;
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
        return redirect()->back()->with('message', trans('lang.data_added_s'));


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ProviderSubscription::findOrFail($id);
        return view('admin.provider_subscriptions.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $this->validate(request(), [
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'service_count' => 'required|numeric|min:1',
            'service_image_count' => 'required|numeric|min:1',
            'days_count' => 'required|numeric|min:1',
            'is_video' => 'nullable|string',
            'is_active' => 'nullable|string',
        ]);
        ProviderSubscription::whereId($request->id)->update($data);
        return redirect(url('provider_subscriptions'))->with('message', 'تم التعديل بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            ProviderSubscription::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }
}
