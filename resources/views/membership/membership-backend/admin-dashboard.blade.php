@extends('layouts.guest')
@section('content')
<style>
header, .footer-last{
    display: none;
}
</style>
<div class="wraper">
    <div class="container-fluid pl-0">
        <div class="d-flex">
        @include('layouts.sidebar')
            <div class="right dash-right">
                <div class="admin-right">
                <div class="toggle-collapse mb-3">
                        <img src="images/collapse.png">
                    </div>
                    <div class="admin-head d-flex justify-content-between">
                        <div class="head-title">
                            <h2>Good Morning, <span>Admin</span></h2>
                            <div class="admin-date-time d-flex align-items-center">
                                <img src="images/caho-calender-dash.png"><span>13:20 Monday, 30 May 2023</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <div class="member-statics">
                            <div class="mem-stats-ico">
                                <img src="images/users-ico.png" class="mr-2">
                            </div>
                            <div class="stats-cont">
                                <div class="stat-mem">Total Members</div>
                                <h3>25,312</h3>
                                <div class="stat-percent"><span>30.10%</span> Members</div>
                            </div>
                        </div>
                        <div class="member-statics bg2">
                            <div class="mem-stats-ico">
                                <img src="images/users-ico.png" class="mr-2">
                            </div>
                            <div class="stats-cont">
                                <div class="stat-mem">Total Members</div>
                                <h3>25,312</h3>
                                <div class="stat-percent"><span>30.10%</span> Members</div>
                            </div>
                        </div>
                        <div class="member-statics bg3">
                            <div class="mem-stats-ico">
                                <img src="images/users-ico.png" class="mr-2">
                            </div>
                            <div class="stats-cont">
                                <div class="stat-mem">Total Members</div>
                                <h3>25,312</h3>
                                <div class="stat-percent"><span>30.10%</span> Members</div>
                            </div>
                        </div>
                        <div class="member-statics bg4">
                            <div class="mem-stats-ico">
                                <img src="images/users-ico.png" class="mr-2">
                            </div>
                            <div class="stats-cont">
                                <div class="stat-mem">Total Members</div>
                                <h3>25,312</h3>
                                <div class="stat-percent"><span>30.10%</span> Members</div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="pie-1">

                        </div>
                        <div class="pie-1"></div>
                    </div>

                    <div class="table-responsive activity-table mt-4">
                        <div class="table-head d-flex justify-content-between">
                            <div class="table-title">
                                <h4>Recent Activity</h4>
                            </div>
                            <div class="table-links">
                                <a href="">View All Category</a>
                            </div>
                        </div>
                        
                        <table class="table">
                            <thead class="thead-light">
                                <th>Name</th>
                                <th>Category</th>
                                <th>Activity Details</th>
                                <th>Date & Time</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vineet Kumar</td>
                                    <td>Category</td>
                                    <td>Activity Details</td>
                                    <td>30 May 2023 2:10 Pm</td>
                                </tr>
                                <tr>
                                    <td>Jyoti Prakash</td>
                                    <td>Category</td>
                                    <td>Activity Details</td>
                                    <td>30 May 2023 2:10 Pm</td>
                                </tr>
                                <tr>
                                    <td>Anjali Gaur</td>
                                    <td>Category</td>
                                    <td>Activity Details</td>
                                    <td>30 May 2023 2:10 Pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>  
            </div>
        </div>
        
    </div>
</div>
@endsection