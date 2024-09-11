@php
    $membershipCategories = DB::table('membership_categories')
        ->where('membership_type_id', $membership->id)
        ->orderBy('sort')
        ->get();
@endphp
@extends('layouts.guest')
@section('content')
    <style>
        .one-line {
            white-space: nowrap;
        }
    </style>
    <section class="inner-banner-sec image">
        <img src="{{ url('images/membership-detail-banner.jpg') }}" alt="" class="show-desk">
        <img src="{{ url('images/HEALTHCARE INSTITUTIONS-mob.jpg') }}" alt="" class="show-mob">
        <div class="container">
            <div class="heading ub">{{ $membership->name }}</div>
            <h4>Hospitals, medical or teaching institutions, clinics etc</h4>
            <ul class="breadcrumb flex-view fc">
                <li><a href="/">Home</a></li>
                <li>{{ $membership->name }}</li>
            </ul>
        </div>
    </section>
    @php
        $membershipType = DB::table('membership_type')->where('id',$membershipCategories[0]->membership_type_id)->first();
    @endphp
    <style>
        .inner-banner-sec.image:before {
                content: '';
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background: {{ $membershipType->text_color }};
                opacity: 0.5;
            }
    </style>
    <section class="membership-det pb-5">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="healthcare-left">
                    <div class="mem-common-det" style="background-color: {{ $membershipType->background_color_light }}">
                        <div class="heading text-black">{{ $membership->name }}</div>
                        <p>{{ $membership->description }}</p>
                        @if ($membershipCategories[0]->validity === $membershipCategories[1]->validity)
                            <div class="membership-validity">
                                <span class="one-line">
                                    Membership Validity : {{ $membershipCategories[0]->validity > 20 ? "Lifetime" : $membershipCategories[0]->validity .' Year' }}
                                </span>
                            </div>
                        @else
                            <div class="membership-validity">
                                <span class="one-line">
                                    {{ $membershipCategories[0]->type }} Membership Validity : {{ $membershipCategories[0]->validity > 20 ? "Lifetime" : $membershipCategories[0]->validity .' Year' }}
                                </span>
                            </div>
                            <div class="membership-validity">
                                <span class="one-line">
                                    {{ $membershipCategories[1]->type }} Membership Validity : {{ $membershipCategories[1]->validity > 20 ? "Lifetime" : $membershipCategories[1]->validity .' Year' }}
                                </span>
                            </div>
                        @endif

                        <img src="{{ url('images/doctors-team.png') }}">
                    </div>
                </div>
                <div class="membership-right">
                    <div class="mem-flex d-flex">
                        <div class="main-tile regular-tile">
                            <div class="regular-title">
                                <img src="{{ url($membershipCategories[0]->icon) }}" class="mr-2">
                                <div>{{ $membershipCategories[0]->type . ' Membership' }}
                                    <span style="color:{{ $membershipType->text_color }} ">({{ $membershipCategories[0]->validity > 20 ? "Lifetime" : $membershipCategories[0]->validity .' Year' }})</span>
                                </div>
                            </div>
                            @php
                                $membershipTypes0 = DB::table('hospital_categories')
                                    ->where('membership_category_id', $membershipCategories[0]->id)->orderBy('sort')->get();
                            @endphp
                            <p>{!! $membershipCategories[0]->description !!}</p>
                            <ul>
                                @foreach ($membershipTypes0 as $membershipTyp)
                                    <li>{{ $membershipTyp->name }} <b>({{$membershipTyp->currency_symbol .' '.$membershipTyp->price }}/-)</b></li>
                                @endforeach
                            </ul>
                            <div class="member-btn-group">
                                <a href="{{ url('membership-form?membership='.$membershipCategories[0]->id) }}" class="default-btn" style="background-color: {{ $membershipType->text_color }};">Join Now</a>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#regular-term-condition" class="term-condition-btn" style="color: {{ $membershipType->text_color }};border: 1px solid {{ $membershipType->text_color }}">Terms & Conditions</a>
                            </div>
                        </div>

                        <div class="main-tile associate-tile mr-4" style="background-color: {{ $membershipType->text_color }}">
                            <div class="regular-title">
                                <img src="{{ url($membershipCategories[1]->icon) }}" class="mr-2">
                                <div>{{ $membershipCategories[1]->type . ' Membership' }}
                                    <span>({{ $membershipCategories[1]->validity > 20 ? "Lifetime" : $membershipCategories[1]->validity .' Year' }})</span>
                                </div>
                            </div>
                            @php
                                $membershipTypes1 = DB::table('hospital_categories')
                                    ->where('membership_category_id', $membershipCategories[1]->id)->orderBy('sort')->get();
                            @endphp
                            <p>{!! $membershipCategories[1]->description !!}</p>
                            <ul>
                                @foreach ($membershipTypes1 as $membershipTyp)
                                    <li>{{ $membershipTyp->name }} <b>({{$membershipTyp->currency_symbol .' '.$membershipTyp->price }}/-)</b></li>
                                @endforeach
                            </ul>

                            <div class="member-btn-group">
                                <a href="{{ url('membership-form?membership='.$membershipCategories[1]->id) }}" class="default-btn" style="color: {{ $membershipType->text_color }}">Join Now</a>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#associate-term-condition" class="term-condition-btn">Terms & Conditions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('common.benefits')
    
    <div class="anyquery">
        <div class="container">
            <ul class="flex">
                <li>For any query <span>related to membership please contact us </span></li>
                <li class="flex"> <img src="https://www.caho.in/images/mail-c.png" alt="">
                    <p> membership@caho.in</p>
                </li>
                <li class="flex"> <img src="https://www.caho.in/images/cal-c.png" alt="">
                    <p> +91 8130 770 805 <br> +91 9870 318 781</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="modal" id="regular-term-condition">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body p-4">
                    <div class="main-tile w-100 regular-tile border-0 p-0 bg-white">
                        <div class="regular-title">
                            Terms and Conditions
                        </div>
                        <ul>
                            {!! $membershipCategories[0]->terms_and_conditions !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="associate-term-condition">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body p-4">
                    <div class="main-tile w-100 regular-tile border-0 p-0 bg-white">
                        <div class="regular-title">
                            Terms and Conditions
                        </div>
                        <ul>
                            {!! $membershipCategories[1]->terms_and_conditions !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
