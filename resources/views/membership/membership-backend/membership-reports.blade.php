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
                        <div class="main-info-row d-flex justify-content-between">
                            <div class="dash-col bg-white">
                                <div class="mem-report d-flex">
                                    <div class="report-ico mr-2">
                                        <img src="images/users-ico.png">
                                    </div>
                                    <div class="report-numbers">
                                        <div class="rep-num">25,312</div>
                                        <p>Users</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dash-col bg-white">
                                <div class="mem-report d-flex">
                                    <div class="report-ico mr-2">
                                        <img src="https://www.caho.in/images/active-members.png">
                                    </div>
                                    <div class="report-numbers">
                                        <div class="rep-num">25,312</div>
                                        <p>Active Members</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dash-col bg-white">
                               <div class="mem-report d-flex">
                                    <div class="report-ico mr-2">
                                        <img src="https://www.caho.in/images/subscriber-members.png">
                                    </div>
                                    <div class="report-numbers">
                                        <div class="rep-num">25,312</div>
                                        <p>Subscriber</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dash-col bg-white">
                               <div class="mem-report d-flex">
                                    <div class="report-ico mr-2">
                                        <img src="https://www.caho.in/images/membership-ico.png">
                                    </div>
                                    <div class="report-numbers">
                                        <div class="rep-num">25,312</div>
                                        <p>Membership</p>
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
@endsection
