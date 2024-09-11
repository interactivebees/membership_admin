@php
    $notifications = DB::table('podcast_events_notification')->where(function ($query) {
        $query->where('notifiable_id', null)
            ->orWhere('notifiable_id', Auth::id());
    })->latest()->take(5)->get();
@endphp
<style>
    .dropdown-menu{
        min-width: 250px;
        padding: 0;
    }
    #orderInfo li {
        border-bottom: 1px solid #ccc;
    }
    #orderInfo li:last-child{
        border-bottom: 0;
    }
    #orderInfo li a {
        font-weight: 400;
        display: flex;
        justify-content: space-between;
        padding: 8px 10px;
        align-items: center;
    }
    .type-notify {
    background: #a5a4dc;
    border-radius: 10px;
    font-size: 13px;
    padding: 3px 4px;
    display: inline-block;
    color: #fff;
}
.notify-left p {
    margin-bottom: 0 !important;
    margin-top: 6px;
}
.notify-btn a {
    background: #7674c9;
    color: #fff;
    display: block;
    text-align: center;
    padding: 10px;
    font-weight: 400;
}
.notifications-menu ul.dropdown-menu{
    top: 32px !important;
}
</style>
<li class="dropdown notifications-menu">
    <a href="#" class="waves-effect waves-light dropdown-toggle btn-info-light notification-bell" data-bs-toggle="dropdown"
        title="Notifications">
        <i class="fa fa-bell-o" aria-hidden="true"></i>
        <span class="w3-badge badgebadge-pill badge-danger" id="w3-badge">0</span>
    </a>
    <ul class="dropdown-menu animated bounceIn">
        <li>
            <ul class="menu sm-scrol" id="orderInfo">
                @foreach ($notifications as $notification)
                    @php
                        $message = json_decode($notification->message);
                    @endphp
                    <li>
                        <a href="{{ $message->link }}">
                            <div class="notify-left">
                                <div class="type-notify">{{ $notification->type }}</div>
                                <p>{!! $message->title !!}</p>
                            </div>
                            <div class="notify-right">
                                <span><i class="fa fa-eye"></i></span>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="notify-btn">
            <a href="{{ route('notification') }}">View all</a>
        </li>
    </ul>
</li>

<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>
    Pusher.logToConsole = true;
    var pusher = new Pusher('9968710ccd0c3a44ede8', {
        cluster: 'ap2'
    });

    var channel = pusher.subscribe('channel-event');
    channel.bind('channel-event', function(data) {
        if (data.message.notifiable_id == "{{ auth()->user()->id }}" || data.message.notifiable_id == null ||
            data.message.notifiable_id == "") {
            var message = JSON.parse(data.message.message);
            var html = `<li>
                        <a href="#">
                            <i class="fa fa-users text-info"></i>
                            Type :   ${data.message.type},
                            Message: ${message.title},
                            Message: ${message.link}.
                        </a>
                    </li>`;
            document.getElementById('orderInfo').insertAdjacentHTML('afterbegin', html);
        }
    });
</script>
