<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PodcastEventNotificationController extends Controller
{

    public function index(){
        $notifications = DB::table('podcast_events_notification')->where(function ($query) {
            $query->where('notifiable_id', null)
                ->orWhere('notifiable_id', Auth::id());
        })->latest()->get()->map(function ($notification) {
            $notification->formatted_created_at = \Carbon\Carbon::parse($notification->created_at)->format('j F Y h:i A');
            return $notification;
        });
        return view('membership.membership-backend.notification-dashboard',compact('notifications'));
    }
}