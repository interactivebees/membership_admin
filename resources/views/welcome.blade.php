@php
    $membershipCategories = DB::table('membership_type')->where('status',1)
                ->orderBy('sort')->get();
@endphp

@extends('layouts.guest')
@section('content')

<style>
    .mem-cate li a{
        position: relative;
        width: 49%;
    }
    .main-membership li a{
        margin: 10px 12px;
        border-radius: 10px;
        font-size: 13px;
    }
    .main-membership li h3{
        font-weight: 500;
        padding: 0px 14px;
    }
    .main-membership li{
        border: 1px solid #ccc;
        border-radius: 10px;
    }
    .main-membership li img{
        border-radius: 10px 10px 0px 0px;
    }
    .m-txt li{
        list-style: disc;
        padding-left: 0;
        margin-left: 20px;
    }
</style>

<section class="inner-banner-sec image">
    <img src="images/join-us-banner.jpg" alt="" class="show-desk">
    <img src="images/HEALTHCARE INSTITUTIONS-mob.jpg" alt="" class="show-mob">
    <div class="container">
        <div class="heading ub text-black"><b>join </b> Now</div>
        <h4 class="text-black">Hospitals, medical or teaching institutions, clinics etc</h4>
        <ul class="breadcrumb flex-view fc">
            <li><a href="/">Home</a></li>
            <li class="text-black">Join Now</li>
        </ul>
    </div>
</section>
<section class="pleadges-data-sec main-membership-sec pt-5 pb-4">
   <div class="container">
      <div class="d-flex new-row">
        @foreach ($membershipCategories as $membershipCategorie)
            <div class="data">
                <div class="inner" style="background-color: {{ $membershipCategorie->background_color }}">
                    <div class="card-icon-img">
                        <img src="{{ 'https://www.caho.in/'.$membershipCategorie->image }}" alt="pledge" width="65" height="65" loading="lazy">
                    </div>
                    <div class="title" style="color: {{ $membershipCategorie->text_color }}">
                        {{ $membershipCategorie->name }}
                    </div>
                    <p>{{ $membershipCategorie->description }}</p>
                    <a href="{{ url('membership/'.$membershipCategorie->slug) }}" style="background-color: {{ $membershipCategorie->text_color }}">Explore</a>
                </div>
            </div>
        @endforeach
      </div>
   </div>
</section>

@include('common.benefits')

@endsection
