@extends('layouts.guest')
@section('content')
    <style>
        header,
        .footer-last {
            display: none;
        }

        .upcoming_prog li {
            padding: 10px;
        }
    </style>
    <div class="wraper">
        <div class="container-fluid pl-0 pr-0">
            <div class="d-flex">
                @include('layouts.sidebar')
                <div class="right dash-right pt-0">
                    @include('layouts.user-header')
                    <div class="admin-right right-dashboard">
                        <div class="main-dash" id="main-dash1">
                            <div class="dashboard-banner">
                                <div class="welcome-banner">
                                    <div class="wel-image">
                                        <img src="images/welcome-2.jpg" class="h-auto">
                                    </div>
                                    <div class="welcome-content">
                                        <?php
                                        date_default_timezone_set('Asia/Kolkata');
                                        // date_default_timezone_get();
                                        $currentHour = date('H');
                                        if ($currentHour >= 5 && $currentHour < 12) {
                                            $greeting = 'Good Morning';
                                        } elseif ($currentHour >= 12 && $currentHour < 18) {
                                            $greeting = 'Good Afternoon';
                                        } else {
                                            $greeting = 'Good Evening';
                                        }
                                        ?>
                                        <h2 class="mb-2">{{ $greeting }}, <span>{{ Auth::user()->name }}!</span></h2>
                                        <p></p>
                                        <p class="mb-3"><b id="current-time"></b></p>
                                        <!--<div class="today-not mb-3">Today You have 9 Notification. </div>-->
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/cahoclabcon.jpg">
                                </div>
                                <div class="item">
                                    <img src="images/cahocon.jpg">
                                </div>
                            </div>
                            <div class="main-info-row d-flex justify-content-between">
                                <div class="dash-col">
                                    <div class="progrm-icon">
                                        <img src="images/quality-icon.png">
                                    </div>
                                    <div class="mem-cat">Membership Category</div>
                                    <div class="mem-name">{{ $membershipData->membershipCategoryget->type .' '. $membershipData->membershipCategoryget->name }}</div>
                                    @php
                                        $date = new DateTime($membershipData->getLatestMembershipDetail->e_date);
                                        $formattedDate = $date->format('d M Y');
                                    @endphp
                                    <div class="valid-time">Valid till: {{ $formattedDate }}</div>
                                </div>
                                <div class="dash-col bg-2">
                                    <div class="progrm-icon">
                                        <img src="images/quality2.png">
                                    </div>
                                    <div class="mem-cat">Membership Reports</div>
                                    <div class="mem-name">Access: Activity, Revenue, and Status</div>
                                    <div class="valid-time"><a href="{{ url('user-membership') }}">View More</a></div>
                                </div>
                                <div class="dash-col bg-3">
                                    <div class="progrm-icon">
                                        <img src="images/download-certificate.png">
                                    </div>
                                    <div class="mem-cat">Download Certificate</div>
                                    <div class="mem-name">{{ $membershipData->membershipCategoryget->type .' '. $membershipData->membershipCategoryget->name }}</div>
                                    @if ($membershipData->status == 1)
                                        <a class="valid-time" href="{{ route('membership.certificate') }}"
                                            target="_blank">Download Now</a>
                                    @else
                                        <div class="tooltip-container">
                                            <div class="valid-time" disabled>Download Now</div>
                                            <div class="tooltip">
                                                <p>Your Membership is still under verification. Please come back in 72 hours
                                                    to download your certificate.</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="dash-col bg-4">
                                    <div class="progrm-icon">
                                        <img src="images/glimpess.png">
                                    </div>
                                    <div class="mem-cat">News & Notifications</div>
                                    <div class="mem-name">Glimpses of Latest Happening’s</div>
                                    <div class="valid-time"><a href="{{ url('download') }}">View More</a></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap mt-4 dasbord-info">
                                <div class="payment-det-sec">
                                    <h5>CAHO Anthem</h5>
                                    <iframe width="100%" height="340"
                                        src="https://www.youtube.com/embed/YaVmHmBwsJM?si=4l20ynBb3qLyB0ci"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="payment-det-sec">
                                    <h5>Upcoming Events</h5>
                                    <div class="annual_events caho-today bg-white">
                                        <div class="event_slider bg-white">
                                            @foreach ($medias as $media)
                                                <div class="card rounded-0 border-0">
                                                    <div class="imghgt">
                                                        <img class="card-img-top rounded-0"
                                                            src="{{ 'https://www.caho.in/' . $media->image }}"
                                                            alt="Card image cap" width="360" height="363"
                                                            loading="lazy">
                                                    </div>
                                                    <div class="card-body pb-0 pl-0">
                                                        <div class="card-text mb-3"><strong>{{ $media->title }}</strong>
                                                        </div>
                                                        <div class="d-flex justify-content-start align-items-center mb-3">
                                                            <div class="events_date d-flex align-items-center mb-3 mr-4">
                                                                <i class="fa fa-calendar mr-1" aria-hidden="true"></i>
                                                                {{ date('d M Y', strtotime($media->date)) }}
                                                            </div>
                                                        </div>
                                                        <!--<p class="card-text mb-3">Reference site about ipsum, giving information on origins, as well as a random Lipsum generator.</p>-->
                                                        @if ($media->pdf)
                                                            <a href="{{ 'https://www.caho.in/' . $media->pdf }}"
                                                                target="_blank"
                                                                class="btn btn-primary pt-2 pb-2 pl-4 pr-4 event_explore_btn"
                                                                tabindex="-1">Explore</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="payment-det-sec mt-4 w-100">
                                <h5>Register for our upcoming Training Programs</h5>
                                <div class="annual_events caho-today bg-white">
                                    <div class="upcoming_prog bg-white">
                                        @foreach ($data as $key => $value)
                                            @foreach ($value as $tp)
                                                <?php
                                                $banner = '';
                                                if ($tp->program != null) {
                                                    if ($tp->program->extra_data) {
                                                        $extra_data = json_decode($tp->program->extra_data, 1);
                                                    }

                                                    if (@$extra_data['banner_image'] != '' && @$extra_data['banner_image'] != null) {
                                                        $banner = 'https://cpm.caho.in/public/upload/' . $extra_data['banner_image'];
                                                    }

                                                    if (@$extra_data['program_time'] != '' && @$extra_data['program_time'] != null) {
                                                        $time = $extra_data['program_time'] ?? '';
                                                    }

                                                    if (isset($extra_data['pdf'])) {
                                                        $datafree = explode('load/', $extra_data['pdf'], 2);
                                                        if (isset($datafree[1])) {
                                                            $pdf = 'https://cpm.caho.in/public/' . $extra_data['pdf'];
                                                        } else {
                                                            $pdf = 'https://cpm.caho.in/public/upload/' . $extra_data['pdf'];
                                                        }
                                                    } else {
                                                        $pdf = '#';
                                                    }
                                                } else {
                                                    continue;
                                                }

                                                if ($tp->banner_img != null && $tp->banner_img != '' && $banner == '') {
                                                    $banner = 'https://cpm.caho.in/' . $tp->banner_img;
                                                }
                                                if ($banner == '' || $banner == null) {
                                                    $banner = 'https://caho.in/images/nc-closer.jpg';
                                                }
                                                ?>

                                                <li>
                                                    <div class="image mb-2">
                                                        <img src="{{ $banner }}" alt="">
                                                    </div>
                                                    <div class="detail">
                                                        <div class="type-of flex-view mb-2">
                                                            <span
                                                                class="{{ $key }}">{{ @$tp->program->registered_user_count == 0 ? @$extra_data['batch'] : @$tp->program->registered_user_count . ' Professionals enrolled' }}</span>
                                                            <h6>
                                                                @if (@$tp->program->regis == 0)
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                    Registration Open <br>
                                                                @else
                                                                    @if (@$tp->program->program_startdate)
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                        {{ @$tp->program->program_startdate }}<br>
                                                                    @endif
                                                                @endif

                                                                @if (@$time != null)
                                                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                    {{ $time }}
                                                                @endif

                                                                @if (@$tp->program->venueaddress)
                                                                    <br>
                                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                    {{ @$tp->program->venueaddress }}
                                                                @endif

                                                            </h6>
                                                        </div>

                                                        <div class="btn-sec mb-4">
                                                            <a href="{{ @$pdf }}" class="default-btn" target='_BLANK'>Explore</a>
                                                            @if (isset($extra_data['faq']))
                                                                <a href="{{ env('LMSURL') }}/public/upload/{{ $extra_data['faq'] }}"
                                                                    target='_BLANK' class="default-btn d-inline">FAQs</a>
                                                            @endif

                                                            @if (@$tp->program != null)
                                                                <a class="blue default-btn" target='_BLANK'
                                                                    href="{{ url('/programform/' . $tp->program->id . '/' . Str::slug(@$tp->maintitle == null || @$tp->maintitle == '' ? @$tp->title : @$tp->maintitle)) }}">Register</a>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </li>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $.get(('https://www.caho.in/ajexDateFilterByThisMonts'), function(data, status) {
                data = JSON.parse(data);
                let itemHtml = '';

                data.forEach(element => {
                    itemHtml += `<li>
                               <div class="d-flex">
                                   <div class="calender-event-det">
                                       <div class="onsite">` + (element.url != null ? element.url : "Virtual") + `</div>
                                       <div class="d-flex left-dd">
                                       </div>
                                   </div>
                               </div>
                               <div class="cal-des mt-1">
                                   <a href=" ` + element.form_url + `" target="_blank"><p>` + element.title + `</p></a>
                               </div>
                           </li>`;

                });
                itemHtml += `</ul>`;

                $("#current_months_data").append(itemHtml);
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });
    </script>
    <script>
        function updateTime() {
            var now = new Date();
            var formattedDateTime = now.toLocaleTimeString([], {
                hour: '2-digit',
                minute: '2-digit'
            }) + " " + now.toLocaleDateString([], {
                weekday: 'long',
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById("current-time").innerHTML = formattedDateTime;
        }
        setInterval(updateTime, 1000); // Update every 1000 milliseconds (1 second)

        $(document).ready(function() {
            $(".popov").popover({
                html: true,
                content: function() {
                    return $('.hf, .notify').html();
                }
            });
        });
    </script>
    <style>
        .tooltip-container {
            position: relative;
            display: inline-block;
            cursor: pointer;
            width: 100%;
        }

        .tooltip {
            position: absolute;
            top: 28px;
            left: 0;
            background-color: #FFE;
            color: #000;
            padding: 5px 10px;
            border-radius: 4px;
            opacity: 0;
            transition: opacity 0.3s;
            pointer-events: none;
            margin: auto;
            right: auto;
            bottom: auto;
            font-size: 12px;
        }

        .tooltip p {
            text-align: justify;
            margin: 0;
        }

        .tooltip-container:hover .tooltip {
            opacity: 1;
        }

        .tooltip:before {
            position: absolute;
            content: '';
            right: auto;
            top: -9px;
            border-bottom: solid 10px #ffffff;
            border-right: solid 8px transparent;
            border-left: solid 8px transparent;
        }
    </style>
    <!-- The Modal -->
    <!--<div class="modal fade-in" id="myModal">-->
    <!--  <div class="modal-dialog">-->
    <!--    <div class="modal-content">-->
    <!-- Modal Header -->
    <!--      <div class="modal-header">-->
    <!--        <h4 class="modal-title">Modal Heading</h4>-->
    <!--        <button type="button" class="close" data-dismiss="modal">&times;</button>-->
    <!--      </div>-->
    <!-- Modal body -->
    <!--      <div class="modal-body">-->
    <!--        Modal body..-->
    <!--      </div>-->
    <!-- Modal footer -->
    <!--      <div class="modal-footer">-->
    <!--        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
@endsection
