@extends('layouts.guest')
@section('content')
    <style>
        header,
        .footer-last {
            display: none !important;
        }

        .ck-editor {
            padding: 0px 30px 30px !important;
        }

        .ck-editor__editable {
            min-height: 200px !important;
        }
    </style>
    <div class="wraper">
        <div class="container-fluid p-0">
            <div class="d-flex">
                @include('layouts.sidebar')
                <div class="right dash-right">
                    @include('layouts.user-header')
                    <div class="admin-right right-dashboard">
                        <div class="main-dash" id="main-dash1">
                            <div class="main-info-row">
                                <div class="main-support-sec">
                                    <div class="msg_view">
                                        <div class="issue_title">
                                            <h3>{{ $data->title }}</h3>
                                        </div>
                                        <div class="user_flex d-flex p-3">
                                            <div class="user_img mr-3">
                                                <img src="{{ asset('images/user-profile.png') }}">
                                            </div>
                                            <div class="">
                                                <div class="ticket_user_name">
                                                    <h5 class="text-black mb-1">{{ auth()->user()->name }}</h5>
                                                    <p>{{ humanReadableDateDiff($data->created_at) }}</p>
                                                </div>
                                                <div class="msg_body">
                                                    {!! $data->message !!}
                                                </div>
                                            </div>
                                        </div>


                                        @foreach ($data->chats as $chat)
                                            <div class="user_flex d-flex p-3">
                                                <div class="user_img mr-3">
                                                    <img src="{{ asset('images/user-profile.png') }}">
                                                </div>
                                                <div class="">
                                                    <div class="ticket_user_name">
                                                        @if ($chat->admin_id != null || $chat->admin_id != '')
                                                            <h5 class="text-black mb-1">Admin</h5>
                                                        @else
                                                            <h5 class="text-black mb-1">{{ auth()->user()->name }}</h5>
                                                        @endif
                                                        <p>{{ humanReadableDateDiff($data->created_at) }}</p>
                                                    </div>
                                                    <div class="msg_body">
                                                        {!! $chat->message !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                        <div class="user_flex d-flex p-3 border-top">
                                            <div class="user_img mr-3">
                                                <img src="{{ asset('images/user-profile.png') }}">
                                            </div>
                                            <div class="ticket_user_name">
                                                <p class="text-black email_use mb-1">
                                                    <sm>Reply to:</sm><span>caho@gmail.com</span>
                                                </p>
                                                <p>{{ dateFormate(date('Y-m-d')) }}</p>
                                            </div>
                                        </div>
                                        <form action="{{ route('support.reply') }}" method="post">
                                            @csrf
                                            <input name="id" value="{{ $data->id }}" hidden>
                                            <textarea name="message" id="editor"></textarea>
                                            @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="text-right mb-4 pb-4 pr-5">
                                                <button type="submit" class="default-btn user-btn">submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <script></script>
@endsection
