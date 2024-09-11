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
                                <li>
                                    <a class="">Lorem Ipsum is simply dummy text?</a>
                                    <div class="inner-box">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                    </div>
                                </li>
                              
                                <li>   
                                    <a class="">Lorem Ipsum is simply dummy text?</a>
                                    <div class="inner-box">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                    </div>
                                </li>
                                 <li>   
                                    <a class="">Lorem Ipsum is simply dummy text?</a>
                                    <div class="inner-box">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                    </div>
                                </li>
                                <li>   
                                    <a class="">Lorem Ipsum is simply dummy text?</a>
                                    <div class="inner-box">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                    </div>
                                </li>
                                
                        </ul>
                       </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
