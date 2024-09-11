@extends('layouts.guest')
@section('content')
<style>
header, .footer-last{
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
                        <div class="dash_faq">
                            <ul class="accordion">
                            @foreach ($faqs as $faq)
                                <li>
                                    <a class="">{{ $faq->question }}</a>
                                    <div class="inner-box">
                                        {!! $faq->answer !!}
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
@endsection
