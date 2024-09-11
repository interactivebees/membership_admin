@extends('layouts.guest')
@section('content')
    <style>
        header,
        .footer-last {
            display: none !important;
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
                                <div class="text-right mb-4 mt-2">
                                    <a href="{{ route('support.form') }}" class="default-btn user-btn">+ Add New Query</a>
                                </div>
                                <div class="get_support">
                                    @foreach ($lists as $list)
                                    <div class="support_sec">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="support-title">
                                                <h3>{{ $list->title }}</h3>
                                            </div>
                                            <div class="support-btn">
                                                <a href="{{ route('support.view', ['id' => $list->id]) }}" class="default-btn user-btn-2">View</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
