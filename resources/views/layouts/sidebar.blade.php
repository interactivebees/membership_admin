<style>
   header, .footer-last{
   display: none !important;
   }
</style>
<div class="left pt-0">
   <div class="aside-left">
      <div class="logo-left d-flex align-items-center pb-4">
         <img src="{{ asset('images/filter.png') }}" class="toggle-collapse">
         <a href="https://www.caho.in/" class="ml-2">
            <img src="https://www.caho.in/images/caho-main-logo.png" class="main-logo m-auto">
            <img src="{{ asset('images/small-logo.png') }}" class="mobile-logo">
         </a>
      </div>
      <div class="navbar p-0 mb-4">
         <ul class="w-100">
            <li class="@if(Request::is('dashboard')) active @endif">
               <a href="{{ url('dashboard') }}">
                  <img src="{{ asset('images/user-dashboard-2.png') }}" class="mr-2">
                  <img src="{{ asset('images/user-dashboard.png') }}" class="hover-img mr-2">
               Dashboard
               </a>
            </li>
            <li class="@if(Request::is('user-membership')) active @endif">
               <a href="{{ url('user-membership') }}">
                  <img src="{{ asset('images/membership-dashboard.png') }}" class="mr-2">
                  <img src="{{ asset('images/membership-dashboard-white.png') }}" class="hover-img mr-2">
                  Membership
               </a>
            </li>
            <li class="@if(Request::is('membership-calendar')) active @endif">
               <a href="{{ url('membership-calendar') }}">
                  <img src="{{ asset('images/caho-calender-dash.png') }}" class="mr-2">
                  <img src="{{ asset('images/caho-calender-dash-white.png') }}" class="hover-img mr-2">
                  CAHO Calender
               </a>
            </li>
            {{--
            <li><a href="https://register.caho.in/membership-reports"><img src="images/my-reports-dash.png" class="mr-2">My Reports</a></li>
            --}}
            <li class="@if(Request::is('download')) active @endif">
               <a href="{{ url('download') }}">
                  <img src="{{ asset('images/download-dash.png') }}" class="mr-2">
                  <img src="{{ asset('images/download-dash-white.png') }}" class="hover-img mr-2">
                  Downloads
               </a>
            </li>
            <li class="@if(Request::is('membership-resources')) active @endif">
               <a href="{{ url('membership-resources') }}">
                  <img src="{{ asset('images/caho-resource.png') }}" class="mr-2">
                  <img src="{{ asset('images/caho-resource-white.png') }}" class="hover-img mr-2">
                  CAHO Resources
               </a>
            </li>
            <li class="@if(Request::is('faq')) active @endif">
                <a href="{{ url('faq') }}">
                    <img src="{{ asset('images/user-faq.png') }}" class="mr-2">
                    <img src="{{ asset('images/user-faq-hover.png') }}" class="hover-img mr-2">
                    FAQ
                </a>
            </li>
            <li class="@if(Request::is('support-history')) active @endif">
                <a href="{{ url('support-history') }}">
                    <img src="{{ asset('images/get-support-dark.png') }}" class="mr-2">
                    <img src="{{ asset('images/get_support_hover.png') }}" class="hover-img mr-2">
                    Get Support
                </a>
            </li>
            <li class="@if(Request::is('profile')) active @endif">
                <a href="{{ url('profile') }}">
                    <img src="{{ asset('images/profile-edit.png') }}" class="mr-2">
                    <img src="{{ asset('images/profile-edit-hover.png') }}" class="hover-img mr-2">
                    Profile
                </a>
            </li>
            <!-- <li><a href="{{ url('notification-dashboard') }}"><img src="images/notification-dash.png" class="mr-2">Notifications</a></li> -->
            <!-- <li><a href="{{ url('notification-dashboard') }}"><img src="images/notification-dash.png" class="mr-2">Notifications</a></li> -->
            
            <li>
               <a href="#" data-toggle="modal" data-target="#logout-model">
               <img src="{{ asset('images/logout-dash.png') }}" class="mr-2">{{ __('Logout') }}
               </a>
            </li>
         </ul>
      </div>
      <div class="user-information pl-3">

         <!--                 <div class="d-flex">-->
         <!--   <div class="user-photo">-->
         <!--      <img src="images/Ellipse 2.png">-->
         <!--   </div>-->
         <!--    <div class="user-info pl-3">-->
         <!--      <p class="user-name mb-0"><a href="#">{{ Auth()->user()->name }}</a></p>-->
         <!--      <p class="user-email"><a href="mailto:admin@gmail.com">{{ Auth()->user()->email }}</a>-->
         <!--      </p>-->
         <!--   </div>-->
         <!--</div>-->
      </div>
   </div>
</div>
<div class="modal" id="logout-model">
   <div class="modal-dialog">
      <div class="modal-content">
         <!-- Modal body -->
         <div class="modal-body p-4">
            <div class="logout-sec text-center">
               <img src="images/logout-ico.png" class="m-auto mb-3">
               <h3 class="text-black mt-2 mb-2">Are you sure!</h3>
               <p class="text-black">Please confirm if you want logout</p>
               <div class="text-center mt-5 d-flex">
                  <a href="#" class="default-btn-2" data-dismiss="modal">Cancel</a>
                  <a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();" class="common-btn">
                  {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--<div class="side-dashboard">-->
<!--    <ul>-->
<!--       <li class="active"><a href="#"><img src="images/user-dashboard.png">Dashboard</a></li>-->
<!--       <li><a href="#"><img src="images/membership-dashboard.png">Membership</a></li>-->
<!--       <li><a href="https://www.caho.in/caho_calendar"><img src="images/caho-calender-dash.png">CAHO-->
<!--          Calender</a>-->
<!--       </li>-->
<!--       {{-- -->
<!--       <li><a href="#"><img src="images/my-reports-dash.png">My Reports</a></li>-->
<!--       --}}-->
<!--       <li><a href="https://www.caho.in/downloads"><img src="images/download-dash.png">Downloads</a>-->
<!--       </li>-->
<!--       <li><a href="#"><img src="images/caho-resource.png">CAHO Resources</a></li>-->
<!--       <li><a href="#"><img src="images/notification-dash.png">Notifications</a></li>-->
<!--       <li>-->
<!--          <a href="{{ route('logout') }}"-->
<!--             onclick="event.preventDefault();-->
<!--             document.getElementById('logout-form').submit();">-->
<!--          <img src="images/logout-dash.png">{{ __('Logout') }}-->
<!--          </a>-->
<!--          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">-->
<!--             @csrf-->
<!--          </form>-->
<!--       </li>-->
<!--    </ul>-->
<!--    <div class="user-information pb-4 pl-3">-->
<!--       <div class="d-flex">-->
<!--          <div class="user-photo">-->
<!--             <img src="images/Ellipse 2.png">-->
<!--          </div>-->
<!--           <div class="user-info pl-3">-->
<!--             <p class="user-name mb-0"><a href="#">{{ Auth()->user()->name }}</a></p>-->
<!--             <p class="user-email"><a href="mailto:admin@gmail.com">{{ Auth()->user()->email }}</a>-->
<!--             </p>-->
<!--          </div>-->
<!--       </div>-->
<!--    </div>-->
<!-- </div>-->
