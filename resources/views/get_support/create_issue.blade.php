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
                                            <h3>Add a new Query</h3>
                                        </div>
                                        <div class="user_flex d-flex align-items-center p-3 border-top">
                                            <div class="user_img mr-3">
                                                <img src="images/user-profile.png">
                                            </div>
                                            <div class="ticket_user_name">
                                                <p class="text-black email_use mb-1">
                                                    <sm>Reply to:</sm><span>caho@gmail.com</span>
                                                </p>
                                            </div>
                                        </div>
                                        <form action="{{ route('support.submit') }}" method="post">
                                            @csrf
                                            <div class="px-4 mx-1 mb-3">
                                                <input name="user_id" value="{{ auth()->user()->id }}" hidden>
                                                <input name="title" class="form-control" placeholder="Subject" value="{{ old('title') }}">
                                            </div>
                                            @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <textarea name="message" id="editor" placeholder="Message">{{ old('message') }}</textarea>
                                            @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="text-right mb-4 pb-4 pr-5">
                                                <button type="submit" class="default-btn user-btn border-0">submit</button>
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
    <script></script>
@endsection
