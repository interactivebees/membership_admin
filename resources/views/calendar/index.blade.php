@extends('layouts.guest')
@section('content')

<link rel="stylesheet" href="{{url('css/calender.css')}}" />

<style>
  [class*="col-"]{
      padding: 0;
      float: none;
  }
  .calender-left ul {
    height: 530px;
    overflow-y: scroll;
}
#calendarModal button.close{
    position: absolute;
    right: 0;
    background: #AA2C63;
    opacity: 1;
    color: #fff;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    top: -12px;
    padding: -4px;
    font-size: 25px;
    font-weight: 400;
    padding-bottom: 3px;
}
.fc .fc-popover{
    display: none;
}
.fc .fc-daygrid-day-bottom{
    padding: 8px 3px 0;
    text-align: center;
    font-size: 14px;
}
#calendarModal .modal-dialog{
    max-width: 700px;
}
#calendarModal .modal-content{
    padding: 10px;
}
.fc-header-toolbar .fc-toolbar-chunk:last-child {
    display: none;
}
.fc-daygrid-day{
    cursor: pointer;
}
.cal-des a{
    font-weight: 400;
}
.calender-data-popup {
    position: fixed;
    top: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.4);
    left: 0;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1111;
    display: none;
}
.calender-data-popup.active{
    display: flex;
}
.calender-left {
    max-width: 500px;
    background-color: #fff;
    padding: 30px;
    border-radius: 20px;
    position: relative;
}
.calender-left .close{
    position: absolute;
    color: #fff;
    font-size: 24px;
    border: 1px solid #fff;
    background-color: #9b1c53 !important;
    opacity: 1;
}
.calender-left ul {
    height: 250px;
    max-height: 250px;
    overflow-y: auto;
}
.load-gif{
    width: 200px;
    margin: auto;
    display: none;
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
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
            <!-- Left Section -->
             <div class="calender-data-popup">
                <div class="calender-left" id="clicked_date_data">
                    <img src="images/loading-gif.gif" class="load-gif">
                <button type="button" class="close-button-popup close" data-dismiss="modal">×</button>
                    <div class="calender-head" id="initial_data">
                        <h3>{{ date("F Y", strtotime(date("Y-m"))) }}</h3>
                    </div>
                    <ul id="initial_data">
                        @php
                            function createDateRangeArray($strDateFrom,$strDateTo)
                            {
                                $aryRange = [];

                                $iDateFrom = mktime(1, 0, 0, substr($strDateFrom, 5, 2), substr($strDateFrom, 8, 2), substr($strDateFrom, 0, 4));
                                $iDateTo = mktime(1, 0, 0, substr($strDateTo, 5, 2), substr($strDateTo, 8, 2), substr($strDateTo, 0, 4));

                                if ($iDateTo >= $iDateFrom) {
                                    array_push($aryRange, date('Y-m-d', $iDateFrom)); // first entry
                                    while ($iDateFrom<$iDateTo) {
                                        $iDateFrom += 86400; // add 24 hours
                                        array_push($aryRange, date('Y-m-d', $iDateFrom));
                                    }
                                }
                                return $aryRange;
                            }
                            $allEvent = collect(json_decode($events))->sortBy('start');
                        @endphp
                        @foreach($allEvent as $event)
                            @if(isset($event->end))
                                @if(in_array(date("Y-m-d"),createDateRangeArray($event->start, $event->end)))
                                        <li>
                                            <div class="d-flex">
                                                <!--<div class="calender-date">{{ date_format(date_create($event->start),"d") }}</div>-->
                                                <div class="calender-event-det">
                                                    <div class="onsite">{{ $event->url ?? "Virtual" }}</div>
                                                    <div class="d-flex left-dd">
                                                        <!--<div class="">12:30 PM - 02:45 PM</div> <span> | </span>-->
                                                        <!--<div class="">{{ date("Y F", strtotime($event->start)) }}</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cal-des mt-1">
                                                <a href="{{ $event->form_url }}"><p>{{ $event->title }}</p></a>
                                            </div>
                                        </li>
                                @endif
                            @elseif($event->start == date("Y-m-d"))
                                <li>
                                    <div class="d-flex">
                                        <!--<div class="calender-date">{{ date_format(date_create($event->start),"d") }}</div>-->
                                        <div class="calender-event-det">
                                            <div class="onsite">{{ $event->url ?? "Virtual" }}</div>
                                            <div class="d-flex left-dd">
                                                <!--<div class="">12:30 PM - 02:45 PM</div> <span> | </span>-->
                                                <!--<div class="">{{ date("Y F", strtotime($event->start)) }}</div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cal-des mt-1">
                                        <p>{{ $event->title }}</p>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div> 
            <!-- End Left Section -->
        </div>
    </div>
</div>
<script>

    const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];

    $(document).on('click',".fc-daygrid-day", function(){
        $('.calender-data-popup').addClass('active');
        $('.load-gif').show();
        let clickedVal = $(this).attr('data-date');
        $("[id=initial_data]").remove();
       $.post(window.location.origin + '/ajexDateFilterRequest', {
                _token: '{{ csrf_token() }}',
                clickedDate : clickedVal
            },function(data, status) {
            data = JSON.parse(data);
            let itemHtml = '';
            itemHtml += `<div class="calender-head" id="initial_data">
                            <h3>`+ new Date(clickedVal).getDate() +' '+ monthNames[(new Date(clickedVal).getMonth())] + ' ' + new Date(clickedVal).getFullYear() + `</h3>
                        </div>`;
                    itemHtml += `<ul id="initial_data">`;
            data.forEach(element => {
                itemHtml += `<li id="initial_data">
                                <div class="d-flex">
                                    <div class="calender-event-det">
                                        <div class="onsite">`+ (element.url != null ?  element.url : "Virtual") +`</div>
                                        <div class="d-flex left-dd">
                                        </div>
                                    </div>
                                </div>
                                <div class="cal-des mt-1">
                                    <a href=" ` +element.form_url+ `"><p>`+ element.title +`</p></a>
                                </div>
                            </li>`;

            });
            itemHtml += `</ul>`;
            $('.load-gif').hide();
            $("#clicked_date_data").append(itemHtml);
        });
    });

    $('.close').click(function(){
        $('.calender-data-popup').removeClass('active');
    });
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'false'
            },
            initialDate: Date.now(),
            navLinks: false, // can click day/week names to navigate views
            selectable: false,
            eventLimit: true, // allow "more" link when too many events
            selectMirror: false,
            select: function(arg) {
                var title = prompt('Event Title:');
                if (title) {
                    calendar.addEvent({
                        title: title,
                        start: arg.start,
                        end: arg.end,
                        allDay: arg.allDay
                    })
                }
                calendar.unselect()
            },

            eventClick:  function(event, jsEvent, view) {
                event.jsEvent.preventDefault();
                $('#modalTitle').html(event.event.title);
                $('#address').html(event.event.url);
                $('#startTime').html(event.event.start);
                $('#calendarModal').modal();
            },

            editable: true,
            dayMaxEvents: true,
            events: <?= $events ?>
        });
        calendar.render();
        // $('.fc-daygrid-event-harness a').fancybox({

        // });
    });
</script>
<script defer  src="{{url('js/calender-js.js')}}"></script>
@endsection
