<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventNotificationController extends Controller
{

    public function index(Request $request){
        $notifications = DB::table('notifications')
            ->where('notifiable_id', $request->user_id)
            ->whereNull('read_at')->get();

        $notificationCount = DB::table('notifications')
            ->where('notifiable_id', $request->user_id)
            ->whereNull('read_at')->count();

        $notificationCount = str_pad($notificationCount, 2, '0', STR_PAD_LEFT);

        return response()->json([
            'notifications' => $notifications,
            'notificationCount' => $notificationCount,
            'auth' => $request->user_id
        ]);
    }
}