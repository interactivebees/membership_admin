<?php

namespace App\Http\Controllers\Download;

use App\Http\Controllers\Controller;
use App\Models\Leads\ResourcesCenter;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download(Request $request)
    {
        $perPage = $request->input('per_page', 12);
        $page = $request->input('page', 1);
        $downloads = ResourcesCenter::where('status','1')
            ->where('resource_type','Download')
            ->orderBy('resource_date','desc')
            ->paginate($perPage, ['*'], 'page', $page);
        return view('membership.membership-backend.download',compact('downloads'));
    }
}
