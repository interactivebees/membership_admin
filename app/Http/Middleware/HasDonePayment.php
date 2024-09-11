<?php

namespace App\Http\Middleware;

use App\Models\Membership\Register;
use Closure;
use Illuminate\Http\Request;

class HasDonePayment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (auth()->check()) {
            $info = Register::with('membershipCategoryget','getLatestMembershipDetail')->where('user_id',auth()->user()->id)->first();
            if( $info->getLatestMembershipDetail->order_status == 'Success' ){
                return $next($request);
            } else {
                return redirect('/offline_payment_process');
            }
        }
        return redirect('/');
    }
}
