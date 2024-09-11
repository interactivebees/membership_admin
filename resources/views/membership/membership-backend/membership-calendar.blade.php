@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{url('css/calender.css')}}" />
<style>
  [class*="col-"]{
      padding: 0;
        float: none !important;
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
</style>
<body data-new-gr-c-s-check-loaded="14.1117.0" data-gr-ext-installed="">

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>bracket<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto ps ps--theme_default ps--active-y" data-ps-id="cbc6154c-7a1a-2359-a4d8-ed69a0a21d4c">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
      <div class="br-sideleft-menu">
        <a href="index.html" class="br-menu-link active">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="mailbox.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Mailbox</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="card-dashboard.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Cards &amp; Widgets</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">UI Elements</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column" style="display: none;">
          <li class="nav-item"><a href="accordion.html" class="nav-link">Accordion</a></li>
          <li class="nav-item"><a href="alerts.html" class="nav-link">Alerts</a></li>
          <li class="nav-item"><a href="buttons.html" class="nav-link">Buttons</a></li>
          <li class="nav-item"><a href="cards.html" class="nav-link">Cards</a></li>
          <li class="nav-item"><a href="icons.html" class="nav-link">Icons</a></li>
          <li class="nav-item"><a href="modal.html" class="nav-link">Modal</a></li>
          <li class="nav-item"><a href="pagination.html" class="nav-link">Pagination</a></li>
          <li class="nav-item"><a href="popups.html" class="nav-link">Tooltip &amp; Popover</a></li>
          <li class="nav-item"><a href="progress.html" class="nav-link">Progress</a></li>
          <li class="nav-item"><a href="spinners.html" class="nav-link">Spinners</a></li>
          <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
        </ul>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
            <span class="menu-item-label">Navigation</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column" style="">
          <li class="nav-item"><a href="navigation.html" class="nav-link">Basic Nav</a></li>
          <li class="nav-item"><a href="navigation-layouts.html" class="nav-link">Nav Layouts</a></li>
        </ul>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Charts</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column" style="">
          <li class="nav-item"><a href="chart-morris.html" class="nav-link">Morris Charts</a></li>
          <li class="nav-item"><a href="chart-flot.html" class="nav-link">Flot Charts</a></li>
          <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Chart JS</a></li>
          <li class="nav-item"><a href="chart-rickshaw.html" class="nav-link">Rickshaw</a></li>
          <li class="nav-item"><a href="chart-chartist.html" class="nav-link">Chartist</a></li>
          <li class="nav-item"><a href="chart-sparkline.html" class="nav-link">Sparkline</a></li>
          <li class="nav-item"><a href="chart-peity.html" class="nav-link">Peity</a></li>
        </ul>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Forms</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column" style="">
          <li class="nav-item"><a href="form-elements.html" class="nav-link">Form Elements</a></li>
          <li class="nav-item"><a href="form-layouts.html" class="nav-link">Form Layouts</a></li>
          <li class="nav-item"><a href="form-validation.html" class="nav-link">Form Validation</a></li>
          <li class="nav-item"><a href="form-wizards.html" class="nav-link">Form Wizards</a></li>
          <li class="nav-item"><a href="form-editor-code.html" class="nav-link">Code Editor</a></li>
          <li class="nav-item"><a href="form-editor-text.html" class="nav-link">Text Editor</a></li>
        </ul>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Tables</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column" style="">
          <li class="nav-item"><a href="table-basic.html" class="nav-link">Basic Table</a></li>
          <li class="nav-item"><a href="table-datatable.html" class="nav-link">Data Table</a></li>
        </ul>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
            <span class="menu-item-label">Maps</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column" style="">
          <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
          <li class="nav-item"><a href="map-leaflet.html" class="nav-link">Leaflet Maps</a></li>
          <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
        </ul>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
            <span class="menu-item-label">Utilities</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column" style="">
          <li class="nav-item"><a href="background.html" class="nav-link">Background</a></li>
          <li class="nav-item"><a href="border.html" class="nav-link">Border</a></li>
          <li class="nav-item"><a href="height.html" class="nav-link">Height</a></li>
          <li class="nav-item"><a href="margin.html" class="nav-link">Margin</a></li>
          <li class="nav-item"><a href="padding.html" class="nav-link">Padding</a></li>
          <li class="nav-item"><a href="position.html" class="nav-link">Position</a></li>
          <li class="nav-item"><a href="typography-util.html" class="nav-link">Typography</a></li>
          <li class="nav-item"><a href="width.html" class="nav-link">Width</a></li>
        </ul>
        <a href="pages.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Apps &amp; Pages</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="layouts.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-book-outline tx-22"></i>
            <span class="menu-item-label">Layouts</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="sitemap.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-list-outline tx-22"></i>
            <span class="menu-item-label">Sitemap</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
      </div><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Information Summary</label>

      <div class="info-list">
        <div class="d-flex align-items-center justify-content-between pd-x-15">
          <div>
            <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Memory Usage</p>
            <h5 class="tx-lato tx-white tx-normal mg-b-0">32.3%</h5>
          </div>
          <span class="peity-bar" data-peity="{ &quot;fill&quot;: [&quot;#336490&quot;], &quot;height&quot;: 35, &quot;width&quot;: 60 }" style="display: none;">8,6,5,9,8,4,9,3,5,9</span><svg class="peity" height="35" width="60"><rect fill="#336490" x="0.6" y="3.8888888888888893" width="4.800000000000001" height="31.11111111111111"></rect><rect fill="#336490" x="6.6" y="11.666666666666668" width="4.800000000000001" height="23.333333333333332"></rect><rect fill="#336490" x="12.6" y="15.555555555555554" width="4.799999999999999" height="19.444444444444446"></rect><rect fill="#336490" x="18.6" y="0" width="4.799999999999997" height="35"></rect><rect fill="#336490" x="24.599999999999998" y="3.8888888888888893" width="4.800000000000001" height="31.11111111111111"></rect><rect fill="#336490" x="30.6" y="19.444444444444443" width="4.799999999999997" height="15.555555555555557"></rect><rect fill="#336490" x="36.6" y="0" width="4.799999999999997" height="35"></rect><rect fill="#336490" x="42.6" y="23.333333333333336" width="4.799999999999997" height="11.666666666666664"></rect><rect fill="#336490" x="48.6" y="15.555555555555554" width="4.799999999999997" height="19.444444444444446"></rect><rect fill="#336490" x="54.6" y="0" width="4.799999999999997" height="35"></rect></svg>
        </div><!-- d-flex -->

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
          <div>
            <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">CPU Usage</p>
            <h5 class="tx-lato tx-white tx-normal mg-b-0">140.05</h5>
          </div>
          <span class="peity-bar" data-peity="{ &quot;fill&quot;: [&quot;#1C7973&quot;], &quot;height&quot;: 35, &quot;width&quot;: 60 }" style="display: none;">4,3,5,7,12,10,4,5,11,7</span><svg class="peity" height="35" width="60"><rect fill="#1C7973" x="0.6" y="23.333333333333336" width="4.800000000000001" height="11.666666666666664"></rect><rect fill="#1C7973" x="6.6" y="26.25" width="4.800000000000001" height="8.75"></rect><rect fill="#1C7973" x="12.6" y="20.416666666666664" width="4.799999999999999" height="14.583333333333336"></rect><rect fill="#1C7973" x="18.6" y="14.583333333333332" width="4.799999999999997" height="20.416666666666668"></rect><rect fill="#1C7973" x="24.599999999999998" y="0" width="4.800000000000001" height="35"></rect><rect fill="#1C7973" x="30.6" y="5.833333333333332" width="4.799999999999997" height="29.166666666666668"></rect><rect fill="#1C7973" x="36.6" y="23.333333333333336" width="4.799999999999997" height="11.666666666666664"></rect><rect fill="#1C7973" x="42.6" y="20.416666666666664" width="4.799999999999997" height="14.583333333333336"></rect><rect fill="#1C7973" x="48.6" y="2.9166666666666714" width="4.799999999999997" height="32.08333333333333"></rect><rect fill="#1C7973" x="54.6" y="14.583333333333332" width="4.799999999999997" height="20.416666666666668"></rect></svg>
        </div><!-- d-flex -->

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
          <div>
            <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Disk Usage</p>
            <h5 class="tx-lato tx-white tx-normal mg-b-0">82.02%</h5>
          </div>
          <span class="peity-bar" data-peity="{ &quot;fill&quot;: [&quot;#8E4246&quot;], &quot;height&quot;: 35, &quot;width&quot;: 60 }" style="display: none;">1,2,1,3,2,10,4,12,7</span><svg class="peity" height="35" width="60"><rect fill="#8E4246" x="0.6666666666666666" y="32.083333333333336" width="5.333333333333333" height="2.9166666666666643"></rect><rect fill="#8E4246" x="7.333333333333333" y="29.166666666666668" width="5.333333333333333" height="5.833333333333332"></rect><rect fill="#8E4246" x="14" y="32.083333333333336" width="5.333333333333332" height="2.9166666666666643"></rect><rect fill="#8E4246" x="20.666666666666668" y="26.25" width="5.333333333333332" height="8.75"></rect><rect fill="#8E4246" x="27.33333333333333" y="29.166666666666668" width="5.333333333333336" height="5.833333333333332"></rect><rect fill="#8E4246" x="34" y="5.833333333333332" width="5.333333333333336" height="29.166666666666668"></rect><rect fill="#8E4246" x="40.666666666666664" y="23.333333333333336" width="5.333333333333336" height="11.666666666666664"></rect><rect fill="#8E4246" x="47.333333333333336" y="0" width="5.333333333333329" height="35"></rect><rect fill="#8E4246" x="54" y="14.583333333333332" width="5.333333333333336" height="20.416666666666668"></rect></svg>
        </div><!-- d-flex -->

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
          <div>
            <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Daily Traffic</p>
            <h5 class="tx-lato tx-white tx-normal mg-b-0">62,201</h5>
          </div>
          <span class="peity-bar" data-peity="{ &quot;fill&quot;: [&quot;#9C7846&quot;], &quot;height&quot;: 35, &quot;width&quot;: 60 }" style="display: none;">3,12,7,9,2,3,4,5,2</span><svg class="peity" height="35" width="60"><rect fill="#9C7846" x="0.6666666666666666" y="26.25" width="5.333333333333333" height="8.75"></rect><rect fill="#9C7846" x="7.333333333333333" y="0" width="5.333333333333333" height="35"></rect><rect fill="#9C7846" x="14" y="14.583333333333332" width="5.333333333333332" height="20.416666666666668"></rect><rect fill="#9C7846" x="20.666666666666668" y="8.75" width="5.333333333333332" height="26.25"></rect><rect fill="#9C7846" x="27.33333333333333" y="29.166666666666668" width="5.333333333333336" height="5.833333333333332"></rect><rect fill="#9C7846" x="34" y="26.25" width="5.333333333333336" height="8.75"></rect><rect fill="#9C7846" x="40.666666666666664" y="23.333333333333336" width="5.333333333333336" height="11.666666666666664"></rect><rect fill="#9C7846" x="47.333333333333336" y="20.416666666666664" width="5.333333333333329" height="14.583333333333336"></rect><rect fill="#9C7846" x="54" y="29.166666666666668" width="5.333333333333336" height="5.833333333333332"></rect></svg>
        </div><!-- d-flex -->
      </div><!-- info-lst -->

      <br>
    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 537px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 335px;"></div></div></div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-email-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
              <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
                <a href="" class="tx-11">+ Add New Message</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="" class="media-list-link">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                        <span class="tx-11 tx-gray-500">2 minutes ago</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                        <span class="tx-11 tx-gray-500">3 hours ago</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Robert Walker</p>
                        <span class="tx-11 tx-gray-500">5 hours ago</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Larry Smith</p>
                        <span class="tx-11 tx-gray-500">Yesterday</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="pd-y-10 tx-center bd-t">
                  <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
              <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
                <a href="" class="tx-11">Mark All as Read</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span class="tx-12">October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                      <span class="tx-12">October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                      <span class="tx-12">October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                      <span class="tx-12">October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="pd-y-10 tx-center bd-t">
                  <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">Katherine</span>
              <img src="../img/img1.jpg" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-chatboxes-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="br-sideright">
      <ul class="nav nav-tabs sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i class="icon ion-ios-folder-outline tx-22"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto active ps ps--theme_default ps--active-y" id="contacts" role="tabpanel" data-ps-id="e96bb5ad-61d3-0b39-3c13-a4506525d8db">
          <label class="sidebar-label pd-x-25 mg-t-25">Online Contacts</label>
          <div class="contact-list pd-x-10">
            <a href="" class="contact-list-link new">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img2.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Marilyn Tarter</p>
                  <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                </div>
                <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0 ">Belinda Connor</p>
                  <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link new">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Britanny Cevallos</p>
                  <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                </div>
                <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 3 new</span>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link new">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Brandon Lawrence</p>
                  <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
                </div>
                <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img6.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Andrew Wiggins</p>
                  <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Theodore Gristen</p>
                  <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Deborah Miner</p>
                  <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
          </div><!-- contact-list -->


          <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
          <div class="contact-list pd-x-10">
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img2.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-gray-500"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Marilyn Tarter</p>
                  <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-gray-500"></div>
                </div>
                <div class="mg-l-10">
                  <p class="mg-b-0">Belinda Connor</p>
                  <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-gray-500"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Britanny Cevallos</p>
                  <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-gray-500"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Brandon Lawrence</p>
                  <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img6.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-gray-500"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Andrew Wiggins</p>
                  <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-gray-500"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Theodore Gristen</p>
                  <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-gray-500"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Deborah Miner</p>
                  <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
          </div><!-- contact-list -->

        <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 537px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 308px;"></div></div></div><!-- #contacts -->


        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto ps ps--theme_default" id="attachments" role="tabpanel" data-ps-id="d59a58a6-7672-5cce-f304-bf0da944acb8">
          <label class="sidebar-label pd-x-25 mg-t-25">Recent Attachments</label>
          <div class="media-file-list">
            <div class="media">
              <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-image-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">IMG_43445</p>
                <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                <p class="mg-b-0 tx-12 op-5">1.2mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-video-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">VID_6543</p>
                <p class="mg-b-0 tx-12 op-5">MP4 Video</p>
                <p class="mg-b-0 tx-12 op-5">24.8mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-word-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">Tax_Form</p>
                <p class="mg-b-0 tx-12 op-5">Word Document</p>
                <p class="mg-b-0 tx-12 op-5">5.5mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">Getting_Started</p>
                <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                <p class="mg-b-0 tx-12 op-5">12.7mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">Introduction</p>
                <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                <p class="mg-b-0 tx-12 op-5">7.7mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-image-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">IMG_43420</p>
                <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                <p class="mg-b-0 tx-12 op-5">2.2mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-image-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">IMG_43447</p>
                <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                <p class="mg-b-0 tx-12 op-5">3.2mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-video-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">VID_6545</p>
                <p class="mg-b-0 tx-12 op-5">AVI Video</p>
                <p class="mg-b-0 tx-12 op-5">14.8mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-word-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">Secret_Document</p>
                <p class="mg-b-0 tx-12 op-5">Word Document</p>
                <p class="mg-b-0 tx-12 op-5">4.5mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
          </div><!-- media-list -->
        <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div><!-- #history -->
        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto ps ps--theme_default" id="calendar" role="tabpanel" data-ps-id="5a2c6917-f5b8-64e1-f15b-df46691c42ca">
          <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
          <div class="pd-x-25">
            <h2 id="brTime" class="tx-white tx-lato mg-b-5">04:57:06 PM</h2>
            <h6 id="brDate" class="tx-white tx-light op-3">August 02, 2023 WED</h6>
          </div>

          <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
          <div class="datepicker sidebar-datepicker hasDatepicker" id="dp1690975546896"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">August</span>&nbsp;<span class="ui-datepicker-year">2023</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">1</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">4</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">5</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">11</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">12</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">18</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">19</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">25</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">26</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2023"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></div>


          <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
          <div class="pd-x-25">
            <div class="list-group sidebar-event-list mg-b-20">
              <div class="list-group-item">
                <div>
                  <h6 class="tx-white tx-13 mg-b-5 tx-normal">Roven's 32th Birthday</h6>
                  <p class="mg-b-0 tx-white tx-12 op-2">2:30PM</p>
                </div>
                <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
              </div><!-- list-group-item -->
              <div class="list-group-item">
                <div>
                  <h6 class="tx-white tx-13 mg-b-5 tx-normal">Regular Workout Schedule</h6>
                  <p class="mg-b-0 tx-white tx-12 op-2">7:30PM</p>
                </div>
                <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
              </div><!-- list-group-item -->
            </div><!-- list-group -->

            <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">+ Add Event</a>
            <br>
          </div>

        <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto ps ps--theme_default" id="settings" role="tabpanel" data-ps-id="9a8f23a7-9d1f-ffa8-75a8-3658cabf0d88">
          <label class="sidebar-label pd-x-25 mg-t-25">Quick Settings</label>

          <div class="pd-y-20 pd-x-25 tx-white">
            <h6 class="tx-13 tx-normal">Sound Notification</h6>
            <p class="op-5 tx-13">Play an alert sound everytime there is a new notification.</p>
            <div class="pos-relative">
              <input type="checkbox" name="checkbox" class="switch-button" checked="" style="display: none;"><span class="switch-button-label off">OFF</span><div class="switch-button-background checked" style="width: 25px; height: 11px;"><div class="switch-button-button" style="width: 12px; height: 11px; left: 27px;"></div></div><span class="switch-button-label on">ON</span><div style="clear: left;"></div>
            </div>
          </div>

          <div class="pd-y-20 pd-x-25 tx-white">
            <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
            <p class="op-5 tx-13">Sign in using a two step verification by sending a verification code to your phone.</p>
            <div class="pos-relative">
              <input type="checkbox" name="checkbox2" class="switch-button" style="display: none;"><span class="switch-button-label on">OFF</span><div class="switch-button-background" style="width: 25px; height: 11px;"><div class="switch-button-button" style="width: 12px; height: 11px; left: -1px;"></div></div><span class="switch-button-label off">ON</span><div style="clear: left;"></div>
            </div>
          </div>

          <div class="pd-y-20 pd-x-25 tx-white">
            <h6 class="tx-13 tx-normal">Location Services</h6>
            <p class="op-5 tx-13">Allowing us to access your location</p>
            <div class="pos-relative">
              <input type="checkbox" name="checkbox3" class="switch-button" style="display: none;"><span class="switch-button-label on">OFF</span><div class="switch-button-background" style="width: 25px; height: 11px;"><div class="switch-button-button" style="width: 12px; height: 11px; left: -1px;"></div></div><span class="switch-button-label off">ON</span><div style="clear: left;"></div>
            </div>
          </div>

          <div class="pd-y-20 pd-x-25 tx-white">
            <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
            <p class="op-5 tx-13">Enables you to send us news and updates send straight to your email.</p>
            <div class="pos-relative">
              <input type="checkbox" name="checkbox4" class="switch-button" checked="" style="display: none;"><span class="switch-button-label off">OFF</span><div class="switch-button-background checked" style="width: 25px; height: 11px;"><div class="switch-button-button" style="width: 12px; height: 11px; left: 27px;"></div></div><span class="switch-button-label on">ON</span><div style="clear: left;"></div>
            </div>
          </div>

          <div class="pd-y-20 pd-x-25 tx-white">
            <h6 class="tx-13 tx-normal">Your email</h6>
            <div class="pos-relative">
              <input type="email" name="email" class="form-control form-control-inverse transition pd-y-10" value="janedoe@domain.com">
            </div>
          </div>

          <div class="pd-y-20 pd-x-25">
            <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
            <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Account Settings</a>
            <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Privacy Settings</a>
          </div>

        <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
      </div><!-- tab-content -->
    </div><!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel" style="position: relative;">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
        <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today's Visits</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                  <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-danger rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today Sales</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">$329,291</p>
                  <span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">% Unique Visits</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">54.45%</p>
                  <span class="tx-11 tx-roboto tx-white-6">23% average duration</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-br-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p>
                  <span class="tx-11 tx-roboto tx-white-6">65.45% on average time</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-8">
            <div class="card pd-0 bd-0 shadow-base">
              <div class="pd-x-30 pd-t-30 pd-b-15">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Network Performance</h6>
                    <p class="mg-b-0">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
                  </div>
                  <div class="tx-13">
                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-purple mg-r-10"></span> TCP Reset Packets</p>
                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-pink mg-r-10"></span> TCP FIN Packets</p>
                  </div>
                </div><!-- d-flex -->
              </div>
              <div class="pd-x-15 pd-b-15">
                <div id="ch1" class="br-chartist br-chartist-2 ht-200 ht-sm-300"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="127.76116071428571" x2="127.76116071428571" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="215.52232142857142" x2="215.52232142857142" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="303.2834821428571" x2="303.2834821428571" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="391.04464285714283" x2="391.04464285714283" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="478.80580357142856" x2="478.80580357142856" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="566.5669642857142" x2="566.5669642857142" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="654.328125" x2="654.328125" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line y1="270" y2="270" x1="40" x2="654.328125" class="ct-grid ct-vertical"></line><line y1="227.5" y2="227.5" x1="40" x2="654.328125" class="ct-grid ct-vertical"></line><line y1="185" y2="185" x1="40" x2="654.328125" class="ct-grid ct-vertical"></line><line y1="142.5" y2="142.5" x1="40" x2="654.328125" class="ct-grid ct-vertical"></line><line y1="100" y2="100" x1="40" x2="654.328125" class="ct-grid ct-vertical"></line><line y1="57.5" y2="57.5" x1="40" x2="654.328125" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="40" x2="654.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,270L40,227.5C69.254,216.167,98.507,193.5,127.761,193.5C157.015,193.5,186.269,210.5,215.522,210.5C244.776,210.5,274.03,202,303.283,202C332.537,202,361.791,220.7,391.045,227.5C420.298,234.3,449.552,244.5,478.806,244.5C508.06,244.5,537.313,227.5,566.567,227.5C595.821,227.5,625.074,233.167,654.328,236L654.328,270Z" class="ct-area"></path><path d="M40,227.5C69.254,216.167,98.507,193.5,127.761,193.5C157.015,193.5,186.269,210.5,215.522,210.5C244.776,210.5,274.03,202,303.283,202C332.537,202,361.791,220.7,391.045,227.5C420.298,234.3,449.552,244.5,478.806,244.5C508.06,244.5,537.313,227.5,566.567,227.5C595.821,227.5,625.074,233.167,654.328,236" class="ct-line"></path><line x1="40" y1="227.5" x2="40.01" y2="227.5" class="ct-point" ct:value="5"></line><line x1="127.76116071428571" y1="193.5" x2="127.77116071428571" y2="193.5" class="ct-point" ct:value="9"></line><line x1="215.52232142857142" y1="210.5" x2="215.5323214285714" y2="210.5" class="ct-point" ct:value="7"></line><line x1="303.2834821428571" y1="202" x2="303.2934821428571" y2="202" class="ct-point" ct:value="8"></line><line x1="391.04464285714283" y1="227.5" x2="391.0546428571428" y2="227.5" class="ct-point" ct:value="5"></line><line x1="478.80580357142856" y1="244.5" x2="478.81580357142855" y2="244.5" class="ct-point" ct:value="3"></line><line x1="566.5669642857142" y1="227.5" x2="566.5769642857142" y2="227.5" class="ct-point" ct:value="5"></line><line x1="654.328125" y1="236" x2="654.338125" y2="236" class="ct-point" ct:value="4"></line></g><g class="ct-series ct-series-b"><path d="M40,270L40,185C69.254,170.833,98.507,142.5,127.761,142.5C157.015,142.5,186.269,185,215.522,185C244.776,185,274.03,125.5,303.283,125.5C332.537,125.5,361.791,202,391.045,202C420.298,202,449.552,187.125,478.806,176.5C508.06,165.875,537.313,134,566.567,134C595.821,134,625.074,168,654.328,185L654.328,270Z" class="ct-area"></path><path d="M40,185C69.254,170.833,98.507,142.5,127.761,142.5C157.015,142.5,186.269,185,215.522,185C244.776,185,274.03,125.5,303.283,125.5C332.537,125.5,361.791,202,391.045,202C420.298,202,449.552,187.125,478.806,176.5C508.06,165.875,537.313,134,566.567,134C595.821,134,625.074,168,654.328,185" class="ct-line"></path><line x1="40" y1="185" x2="40.01" y2="185" class="ct-point" ct:value="10"></line><line x1="127.76116071428571" y1="142.5" x2="127.77116071428571" y2="142.5" class="ct-point" ct:value="15"></line><line x1="215.52232142857142" y1="185" x2="215.5323214285714" y2="185" class="ct-point" ct:value="10"></line><line x1="303.2834821428571" y1="125.5" x2="303.2934821428571" y2="125.5" class="ct-point" ct:value="17"></line><line x1="391.04464285714283" y1="202" x2="391.0546428571428" y2="202" class="ct-point" ct:value="8"></line><line x1="478.80580357142856" y1="176.5" x2="478.81580357142855" y2="176.5" class="ct-point" ct:value="11"></line><line x1="566.5669642857142" y1="134" x2="566.5769642857142" y2="134" class="ct-point" ct:value="16"></line><line x1="654.328125" y1="185" x2="654.338125" y2="185" class="ct-point" ct:value="10"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="275" width="87.76116071428571" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 88px; height: 20px;">1</span></foreignObject><foreignObject style="overflow: visible;" x="127.76116071428571" y="275" width="87.76116071428571" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 88px; height: 20px;">2</span></foreignObject><foreignObject style="overflow: visible;" x="215.52232142857142" y="275" width="87.7611607142857" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 88px; height: 20px;">3</span></foreignObject><foreignObject style="overflow: visible;" x="303.2834821428571" y="275" width="87.76116071428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 88px; height: 20px;">4</span></foreignObject><foreignObject style="overflow: visible;" x="391.04464285714283" y="275" width="87.76116071428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 88px; height: 20px;">5</span></foreignObject><foreignObject style="overflow: visible;" x="478.80580357142856" y="275" width="87.76116071428567" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 88px; height: 20px;">6</span></foreignObject><foreignObject style="overflow: visible;" x="566.5669642857142" y="275" width="87.76116071428578" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 88px; height: 20px;">7</span></foreignObject><foreignObject style="overflow: visible;" x="654.328125" y="275" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">8</span></foreignObject><foreignObject style="overflow: visible;" y="227.5" x="0" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="185" x="0" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">5</span></foreignObject><foreignObject style="overflow: visible;" y="142.5" x="0" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="100" x="0" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">15</span></foreignObject><foreignObject style="overflow: visible;" y="57.5" x="0" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="0" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">25</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">30</span></foreignObject></g></svg></div>
              </div>
            </div><!-- card -->

            <div class="card bd-0 shadow-base pd-30 mg-t-20">
              <div class="d-flex align-items-center justify-content-between mg-b-30">
                <div>
                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Newly Registered Users</h6>
                  <p class="mg-b-0"><i class="icon ion-calendar mg-r-5"></i> From October 2017 - December 2017</p>
                </div>
                <a href="" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">See more</a>
              </div><!-- d-flex -->

              <table class="table table-valign-middle mg-b-0">
                <tbody>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Deborah Miner</h6>
                      <span class="tx-12">@deborah.miner</span>
                    </td>
                    <td>Nov 01, 2017</td>
                    <td><span id="sparkline1"><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span></td>
                    <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Belinda Connor</h6>
                      <span class="tx-12">@belinda.connor</span>
                    </td>
                    <td>Oct 28, 2017</td>
                    <td><span id="sparkline2"><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span></td>
                    <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="../img/img6.jpg" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Andrew Wiggins</h6>
                      <span class="tx-12">@andrew.wiggins</span>
                    </td>
                    <td>Oct 27, 2017</td>
                    <td><span id="sparkline3"><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span></td>
                    <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Brandon Lawrence</h6>
                      <span class="tx-12">@brandon.lawrence</span>
                    </td>
                    <td>Oct 27, 2017</td>
                    <td><span id="sparkline4"><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span></td>
                    <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Marilyn Tarter</h6>
                      <span class="tx-12">@marilyn.tarter</span>
                    </td>
                    <td>Oct 27, 2017</td>
                    <td><span id="sparkline5"><canvas width="100" height="30" style="display: inline-block; width: 100px; height: 30px; vertical-align: top;"></canvas></span></td>
                    <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- card -->

            <div class="card shadow-base card-body pd-25 bd-0 mg-t-20">
              <div class="row">
                <div class="col-sm-6">
                  <h6 class="card-title tx-uppercase tx-12">Statistics Summary</h6>
                  <p class="display-4 tx-medium tx-inverse mg-b-5 tx-lato">25%</p>
                  <div class="progress mg-b-10">
                    <div class="progress-bar bg-primary progress-bar-xs wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div><!-- progress -->
                  <p class="tx-12">Nulla consequat massa quis enim. Donec pede justo, fringilla vel...</p>
                  <p class="tx-11 lh-3 mg-b-0">You can also use other progress variant found in <a href="progress.html" target="blank">progress section</a>.</p>
                </div><!-- col-6 -->
                <div class="col-sm-6 mg-t-20 mg-sm-t-0 d-flex align-items-center justify-content-center">
                  <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#0866C6&quot;, &quot;#E9ECEF&quot;],  &quot;innerRadius&quot;: 60, &quot;radius&quot;: 90 }" style="display: none;">30/100</span><svg class="peity" height="180" width="180"><path d="M 90 0 A 90 90 0 0 1 175.59508646656383 117.81152949374527 L 147.06339097770922 108.54101966249684 A 60 60 0 0 0 90 30" fill="#0866C6"></path><path d="M 175.59508646656383 117.81152949374527 A 90 90 0 1 1 89.99999999999999 0 L 89.99999999999999 30 A 60 60 0 1 0 147.06339097770922 108.54101966249684" fill="#E9ECEF"></path></svg>
                </div><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->


          </div><!-- col-9 -->
          <div class="col-4">


            <div class="card bd-0 shadow-base pd-30">
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Server Status</h6>
              <p class="mg-b-25">Summary of the status of your server.</p>

              <label class="tx-12 tx-gray-600 mg-b-10">CPU Usage (40.05 - 32 cpus)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Memory Usage (32.2%)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-teal wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Disk Usage (82.2%)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-danger wd-70p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Databases (63/100)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Domains (30/50)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-info wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Email Account (13/50)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-purple wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <div class="mg-t-20 tx-13">
                <a href="" class="tx-gray-600 hover-info">Generate Report</a>
                <a href="" class="tx-gray-600 hover-info bd-l mg-l-10 pd-l-10">Print Report</a>
              </div>
            </div><!-- card -->

            <div class="card bg-transparent shadow-base bd-0 mg-t-20">
              <div class="bg-primary rounded-top">
                <div class="pd-x-30 pd-t-30">
                  <h6 class="tx-13 tx-uppercase tx-white tx-semibold tx-spacing-1">Sale Status</h6>
                  <p class="mg-b-20 tx-white-6">As of October 10 - 17, 2017</p>
                  <h3 class="tx-lato tx-white mg-b-0">$12, 201 <i class="icon ion-android-arrow-up tx-white-5"></i></h3>
                </div>
                <div id="chartLine1" class="wd-100p ht-150 rickshaw_graph"><svg width="339" height="150"><g><path d="M0,56.25Q22.6,30.999999999999993,26.076923076923077,29.999999999999993C31.29230769230769,28.499999999999993,46.93846153846154,36.75,52.15384615384615,41.25S73.01538461538463,74.25,78.23076923076924,75S99.0923076923077,49.68749999999999,104.3076923076923,48.74999999999999S125.16923076923077,62.0625,130.3846153846154,65.625S151.24615384615387,82.5,156.46153846153848,84.375S177.3230769230769,86.25,182.53846153846152,84.375S203.4,68.4375,208.6153846153846,65.625S229.47692307692307,56.25,234.69230769230768,56.25S255.55384615384617,63.75,260.7692307692308,65.625S281.63076923076926,76.875,286.84615384615387,75S307.70769230769235,49.6875,312.92307692307696,46.875Q316.40000000000003,45,339,46.875L339,75Q316.40000000000003,83.125,312.92307692307696,84.375C307.70769230769235,86.25,292.0615384615385,90.9375,286.84615384615387,93.75S265.9846153846154,113.4375,260.7692307692308,112.5S239.9076923076923,85.3125,234.69230769230768,84.375S213.83076923076922,100.3125,208.6153846153846,103.125S187.75384615384613,112.5,182.53846153846152,112.5S161.6769230769231,106.875,156.46153846153848,103.125S135.6,76.3125,130.3846153846154,75S109.52307692307691,86.25,104.3076923076923,90S83.44615384615385,112.125,78.23076923076924,112.5S57.36923076923077,96.5625,52.15384615384615,93.75S31.29230769230769,84.375,26.076923076923077,84.375Q22.6,84.375,0,93.75Z" class="area" fill="rgba(255,255,255,0.4)"></path></g><g><path d="M0,93.75Q22.6,84.375,26.076923076923077,84.375C31.29230769230769,84.375,46.93846153846154,90.9375,52.15384615384615,93.75S73.01538461538463,112.875,78.23076923076924,112.5S99.0923076923077,93.75,104.3076923076923,90S125.16923076923077,73.6875,130.3846153846154,75S151.24615384615387,99.375,156.46153846153848,103.125S177.3230769230769,112.5,182.53846153846152,112.5S203.4,105.9375,208.6153846153846,103.125S229.47692307692307,83.4375,234.69230769230768,84.375S255.55384615384617,111.5625,260.7692307692308,112.5S281.63076923076926,96.5625,286.84615384615387,93.75S307.70769230769235,86.25,312.92307692307696,84.375Q316.40000000000003,83.125,339,75L339,150Q316.40000000000003,150,312.92307692307696,150C307.70769230769235,150,292.0615384615385,150,286.84615384615387,150S265.9846153846154,150,260.7692307692308,150S239.9076923076923,150,234.69230769230768,150S213.83076923076922,150,208.6153846153846,150S187.75384615384613,150,182.53846153846152,150S161.6769230769231,150,156.46153846153848,150S135.6,150,130.3846153846154,150S109.52307692307691,150,104.3076923076923,150S83.44615384615385,150,78.23076923076924,150S57.36923076923077,150,52.15384615384615,150S31.29230769230769,150,26.076923076923077,150Q22.6,150,0,150Z" class="area" fill="#1061b4"></path></g></svg></div>
              </div>
              <div class="bg-white pd-20 rounded-bottom d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-start">
                  <div><span id="sparkline6"><canvas width="41" height="40" style="display: inline-block; width: 41px; height: 40px; vertical-align: top;"></canvas></span></div>
                  <div class="mg-l-15">
                    <label class="tx-uppercase tx-10 tx-medium tx-spacing-1 mg-b-0">Average Sales</label>
                    <h6 class="tx-inverse mg-b-0 tx-lato tx-bold">$603, 201</h6>
                  </div>
                </div><!-- d-flex -->
                <div class="d-flex align-items-center">
                  <div><span id="sparkline7"><canvas width="41" height="40" style="display: inline-block; width: 41px; height: 40px; vertical-align: top;"></canvas></span></div>
                  <div class="mg-l-15">
                    <label class="tx-uppercase tx-10 tx-medium tx-spacing-1 mg-b-0">Total Sales</label>
                    <h6 class="tx-inverse mg-b-0 tx-lato tx-bold">$822, 677</h6>
                  </div>
                </div><!-- d-flex -->
              </div><!-- d-flex -->
            </div><!-- card -->

            <div class="card bd-0 mg-t-20">
              <div id="carousel2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel2" data-slide-to="1" class=""></li>
                  <li data-target="#carousel2" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="bg-br-primary pd-30 ht-300 pos-relative d-flex align-items-center rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="" class="tx-white-5 hover-info"><i class="icon ion-edit tx-16"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-stats-bars tx-20"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-gear-a tx-20"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-medium tx-mont tx-spacing-2 tx-white-5">Recent Article</p>
                        <h5 class="lh-5 mg-b-20">20 Best Travel Tips After 5 Years Of Traveling The World</h5>
                        <nav class="nav flex-row tx-13">
                          <a href="" class="tx-white-8 hover-white pd-l-0 pd-r-5">12K+ Views</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">234 Shares</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">43 Comments</a>
                        </nav>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                  <div class="carousel-item">
                    <div class="bg-info pd-30 ht-300 pos-relative d-flex align-items-center rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="" class="tx-white-5 hover-info"><i class="icon ion-edit tx-16"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-stats-bars tx-20"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-gear-a tx-20"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-medium tx-mont tx-spacing-2 tx-white-5">Recent Article</p>
                        <h5 class="lh-5 mg-b-20">How I Flew Around the World in Business Class for $1,340</h5>
                        <nav class="nav flex-row tx-13">
                          <a href="" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Delete</a>
                        </nav>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                  <div class="carousel-item">
                    <div class="bg-purple pd-30 ht-300 d-flex pos-relative align-items-center rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="" class="tx-white-5 hover-info"><i class="icon ion-edit tx-16"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-stats-bars tx-20"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-gear-a tx-20"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-medium tx-mont tx-spacing-2 tx-white-5">Recent Article</p>
                        <h5 class="lh-5 mg-b-20">10 Reasons Why Travel Makes You a Happier Person</h5>
                        <nav class="nav flex-row tx-13">
                          <a href="" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Delete</a>
                        </nav>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                </div><!-- carousel-inner -->
              </div><!-- carousel -->
            </div><!-- card -->

          </div><!-- col-3 -->
        </div><!-- row -->

      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright © 2017. Bracket. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>

  

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body>
<section class="dashborad-section">
    <div class="container">
        <div class="d-flex">
            <div class="dash-left">
                <div class="side-dashboard">
                    <ul>
                        <li class="active"><a href="#"><img src="images/user-dashboard.png">Dashboard</a></li>
                        <li><a href="#"><img src="images/membership-dashboard.png">Membership</a></li>
                        <li><a href="#"><img src="images/caho-calender-dash.png">CAHO Calender</a></li>
                        <li><a href="#"><img src="images/my-reports-dash.png">My Reports</a></li>
                        <li><a href="#"><img src="images/download-dash.png">Downloads</a></li>
                        <li><a href="#"><img src="images/caho-resource.png">CAHO Resources</a></li>
                        <li><a href="#"><img src="images/notification-dash.png">Notifications</a></li>
                        <li><a href="#"><img src="images/logout-dash.png">Logout</a></li>
                    </ul>
                    <div class="user-information pb-4">
                        <div class="d-flex">
                            <div class="user-photo">
                                <img src="images/Ellipse 2.png">
                            </div>
                            <div class="user-info pl-3">
                                <p class="user-name mb-0"><a href="#">User</a></p>
                                <p class="user-email"><a href="mailto:admin@gmail.com">admin@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dash-right">
                <div class="right-dashboard">
                    <div class="main-dash" id="main-dash1">
                        <div class="membership-user-info d-flex justify-content-between">
                            <div class="log-time">
                                <h4>Good Morning, <span>Alok!</span></h4>
                                <p><b>13:20 Monday, 30 May 2023</b></p>
                            </div>
                            <div class="get-support">
                                <a href="" class="default-btn">Get Support</a>
                            </div>
                        </div>
                        <div id='calendar'></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
 <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });
    </script>
    
<script src="{{url('js/calender-js.js')}}"></script>

@section('scripts')

@endsection