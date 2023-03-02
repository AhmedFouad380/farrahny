<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class CheckSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (Auth::guard('provider')->check()) {
            if (auth('provider')->user()->current_subscription) {
                if (auth('provider')->user()->current_subscription->status == 'working') {
                    return $next($request);
                } else {
                    return redirect()->route('ProviderDashboard')->with('error_message', trans('lang.subscription_ended_message'));
                }
            } else {
                return redirect()->route('ProviderDashboard')->with('error_message', trans('lang.subscription_ended_message'));
            }
        }else{
            return $next($request);
        }
    }
}
