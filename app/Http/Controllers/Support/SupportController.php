<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use App\Models\Admin\Support;
use App\Models\Admin\SupportChat;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function getHistory()
    {
        $lists = Support::where('user_id', auth()->user()->id)->get();
        return view('get_support.list', compact('lists'));
    }

    public function supportView($id)
    {
        $data = Support::with('chats')->where('id', $id)->first();
        return view('get_support.get_support_view', compact('data'));
    }

    public function showForm()
    {
        return view('get_support.create_issue');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ], [
            'user_id.required' => 'The user ID field is required.',
            'title.required' => 'The subject field is required.',
            'title.string' => 'The subject must be a string.',
            'title.max' => 'The subject may not be greater than :max characters.',
            'message.required' => 'The message field is required.',
            'message.string' => 'The message must be a string.',
        ]);

        Support::create($request->all());

        return redirect()->route('support.form')->with('success', 'Form submitted successfully!');
    }

    public function submitReply(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'message' => 'required|string',
        ], [
            'id.required' => 'The user ID field is required.',
            'message.required' => 'The message field is required.',
            'message.string' => 'The message must be a string.',
        ]);

        $reply = new SupportChat();
        $reply->message = $request->input('message');
        $reply->support_id = $request->input('id');
        $reply->user_id = auth()->user()->id;
        $reply->save();

        return redirect()->back()->with('success', 'Record updated successfully');
    }
}
