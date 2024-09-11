@extends('layouts.guest')
@section('content')

<div class="wraper">
    <div class="container-fluid p-0">
        <div class="d-flex">
                @include('layouts.sidebar')
            <div class="right dash-right">
                    @include('layouts.user-header')
                <div class="right-dashboard">
                    <div class="main-dash" id="main-dash1">
                        
                        <div class="main-info-row d-flex justify-content-between flex-wrap download-section" id="dataContainer">
                            @if(isset($downloads))
                                @foreach($downloads as $pe)
                                <div class="member-download">
                                    <div class="down-img">
                                       <img src="{{'https://www.caho.in/'.$pe->image}}" alt="{{isset($pe->title) ? $pe->title : ''}}" class="m-auto">
                                    </div>
                                    <h3>{{isset($pe->title) ? $pe->title : ''}}</h3>
                                    @php
                                        $timestamp = strtotime($pe->resource_date);
                                        $formattedDate = date('j F Y', $timestamp);
                                    @endphp
                                    <p>Upload on {{ $formattedDate }}</p>
                                    @if(isset($pe->pdf) && $pe->pdf !='')
                                        <a href="{{'https://www.caho.in/'.$pe->pdf}}" target="_blank" class="common-btn">Download</a>
                                    @endif
                                </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="download-pagination mt-3 mb-3">
                            <ul class="pagination justify-content-center">
                                {{ $downloads->links() }}
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
