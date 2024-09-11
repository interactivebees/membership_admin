@php
    $hospitalCategories = DB::table('hospital_categories')->where('status',1)->get();
@endphp

@extends('layouts.guest')
@section('content')
<style>
    .mem-cate li a{
        position: relative;
        width: 49%;
    }
</style>

<section class="inner-banner-sec image">
    <img src="https://www.caho.in/images/fa41649f10bf6475e8fa0a922a3245f3.jpg" alt="" class="show-desk">
    <img src="images/HEALTHCARE INSTITUTIONS-mob.jpg" alt="" class="show-mob">
    <div class="container">
        <div class="heading ub"><b>join </b> Now</div>
        <h4>Hospitals, medical or teaching institutions, clinics etc</h4>
        <ul class="breadcrumb flex-view fc">
            <li><a href="/">Home</a></li>
            <li>Join Now</li>
        </ul>
    </div>
</section>

<div class="mem-cate">
    <div class="container">
        <h3 class="text-center mb-3">MEMBERSHIP CATEGORIES</h3>
        <ul class="flex-start mb-4">
            <li>
                <h3>Healthcare Institutions</h3>
                <img alt="" src="https://www.caho.in/images/group549.jpg" />
                <div class="member-btn d-flex justify-content-between">
                    <a href="#">Regular</a>
                    <a href="#">Associate</a>
                </div>            
            </li>
            <li>
                <h3>Diagnostic Centres</h3>
                <img alt="" src="https://www.caho.in/images/group550.jpg" />
                <div class="member-btn d-flex justify-content-between">
                    <a href="#">Regular</a>
                    <a href="#">Associate</a>
                </div>
            </li>
            <li>
                <h3>Quality Professionals</h3>
                <img alt="" src="https://www.caho.in/images/group551.jpg" />
                <div class="member-btn d-flex justify-content-between">
                    <a href="#">Regular</a>
                    <a href="#">Associate</a>
                </div> 
            </li>
            <li>
                <h3>International Affiliation</h3>
                <img alt="" src="https://www.caho.in/images/group552.jpg" />
                <div class="member-btn d-flex justify-content-between">
                    <a href="#">Institutional</a>
                    <a href="#">Individual</a>
                </div>
            </li>
        </ul>
   </div>
</div>
@endsection
