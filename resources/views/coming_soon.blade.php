@extends('layouts.app')

@section('content')
   <style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background: #fff; /* Change background color to white */
        color: #000; /* Change text color to black */
    }

    .wrapper.coming-soon-new {
        color: #9b1c53ff;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 85vh;
    }

    h1 {
        font-size: 50px;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 0;
        line-height: 1;
        font-weight: 700;
        text-align: center;
    }

    .dot {
        color: #000;
    }

    p {
        text-align: center;
        margin: 18px;
        color: #000;
        font-size: 18px;
    }

    .icons {
        text-align: center;
        margin-top: 28px;
    }

    .icons i {
        color: #000; /* Change icon color to black */
        background: #fff;
        height: 50px;
        width: 50px;
        padding: 13px;
        margin: 0 10px;
        border-radius: 50px;
        border: 2px solid #fff;
        transition: all 200ms ease;
        text-decoration: none;
        position: relative;
    }

    .icons i:hover,
    .icons i:active {
        color: #000; /* Change hover effect color to white */
        background: none;
        cursor: pointer !important;
        transform: scale(1.2);
        -webkit-transform: scale(1.2);
        text-decoration: none;
    }

    .fa-arrow-left:before {
        content: "\f060";
        position: absolute;
        left: 0;
        top: auto;
        bottom: 14px;
        right: 0;
        margin: auto;
        font-size: 20px;
    }
</style>
<div class="wrapper coming-soon-new">
    <div class="coming-soon-text"> <!-- Corrected the class name here -->
        <h1 class="text-uppercase">coming soon<span class="dot">.</span></h1>
        <p>Our website is under construction. Please check back later.</p>
        <div class="icons">
            <a href="{{ url('/') }}" class="common-btn">Go back to home page</a>
        </div>
    </div>
</div>
@endsection
