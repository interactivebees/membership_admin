<style>

    .notification{
        padding: 20px;
        box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }
    div#profile-popup {
        position: absolute;
        right: 20px;
        background: #fff;
        min-width: 270px;
        padding: 20px;
        border: 1px solid #ccc;
        text-align: center;
        top: 70px;
        box-shadow: 0 0 5px rgba(0,0,0,0.1);
        z-index: 1111;
    }
    a:hover{
        color: #7674c9;
    }
    button.btn-submit, .default-btn{
        background: #7674c9;
        color: #fff;
    }
</style>
<div class="membership-user-info d-flex justify-content-between align-items-center py-2 fixed pt-3">
    <div class="log-time">
        <!-- <h4 class="text-black mb-0">Welcome Dashboard</h4> -->
    </div>
<div class="log-right d-flex align-items-center">
    @include('layouts.notification')

    <div class="d-flex mr-4 ml-4 align-items-center user-pro">
        <div class="user-photo">
            @if(getAvatarByUserId(Auth()->user()->id))
            <img src="{{ getAvatarByUserId(Auth()->user()->id) }}" width="48px">
            @else
            <img src="{{ asset('images/user-profile.png') }}" width="48px">
            @endif
            <!-- <p class="text-center mt-2 mb-3"><b>User</b></p> -->
            
        </div>
        <div class="user-info pl-3">
            <p class="user-name mb-0 mt-0" href="#">
                <a href="#">{{ Auth()->user()->name }}</a>
                <span class="float-right">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </span>
                <div id="profile-popup" class="animated bounceIn" style="display: none">
               <div class="profile-sec-d">
                    @if(getAvatarByUserId(Auth()->user()->id))
                    <img src="{{ getAvatarByUserId(Auth()->user()->id) }}" width="80px">
                    @else
                    <img src="{{ asset('images/user-profile.png') }}" width="80px">
                    @endif
                    
                    <h3>Hii {{ Auth()->user()->name }}</h3>
                    <p>{{ getUserDesignation(Auth()->user()->id) }}</p>
                    <p>{{ Auth()->user()->email }}</p>
                    <div class="text-center mt-3 d-flex">
                        <a href="{{ route('profile.edit') }}" class="default-btn-2 d-block w-100">Edit Profile</a>

                        <!--<a href="{{ route('logout') }}"-->
                        <!--    onclick="event.preventDefault();-->
                        <!--    document.getElementById('logout-form').submit();" class="common-btn">-->
                        <!--{{ __('Logout') }}-->
                        <!--</a>-->
                        <!--<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">-->
                        <!--    @csrf-->
                        <!--</form>-->
                    </div>
               </div>
            </div>
            </p>
        </div>
    </div>
    </div>
</div>

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

         $(document).ready(function(){
            $(".user-pro").click(function(e){
                e.stopPropagation(); // Prevents the click event from reaching the document
                $('#profile-popup').toggle();
            });
        
            $(document).click(function(e){
                // Check if the clicked element is not a descendant of #profile-popup
                if (!$(e.target).closest('#profile-popup').length && !$(e.target).hasClass('user-pro')) {
                    $('#profile-popup').hide();
                }
            });
        });
    </script>
