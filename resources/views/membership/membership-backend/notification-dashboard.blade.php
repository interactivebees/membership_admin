@extends('layouts.guest')
@section('content')

<div class="wraper">
    <div class="container-fluid p-0">
        <div class="d-flex">
                @include('layouts.sidebar')
            <div class="right dash-right">
            @include('layouts.user-header')
                <div class="right-dashboard">
                    <div class="main-dash" id="main-dash1">
                        
                        <div class="notification-section">
                            <ul>
                                @foreach ($notifications as $notification)
                                    @php
                                        $message = json_decode($notification->message);
                                    @endphp
                                    <li>
                                        <div class="notification-icon"></div>
                                        <div class="notification-content">
                                            <p><a href="{{ $message->link }}">{!! $message->title !!}</a></p>
                                            <div class="notify-time">{{ $notification->formatted_created_at }}</div>
                                        </div>
                                    </li>
                                    
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
@endsection