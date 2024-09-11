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
                        
                        <div class="main-info-row d-flex justify-content-between flex-wrap">
                            <div class="member-download">
                                <div class="down-img">
                                    <img src="https://www.caho.in/images/mem-presentation.png" class="m-auto">
                                </div>
                                <h3>Presentation</h3>
                                <a href="https://www.caho.in/presentation" target="_blank" class="res-btn">View All</a>
                            </div>
                            <div class="member-download">
                                <div class="down-img">
                                    <img src="images/download-ico.png" class="m-auto">
                                </div>
                                <h3>Download</h3>
                                <a href="https://www.caho.in/downloads" target="_blank" class="res-btn">View All</a>
                            </div>
                            <div class="member-download">
                                <div class="down-img">
                                    <img src="images/friday-update-ico.png" class="m-auto">
                                </div>
                                <h3>Friday Update</h3>
                                <a href="https://www.caho.in/friday-updates" target="_blank" class="res-btn">View All</a>
                            </div>
                            <div class="member-download">
                                <div class="down-img">
                                    <img src="images/videos-ico.png" class="m-auto">
                                </div>
                                <h3>Videos</h3>
                                <a href="https://www.caho.in/videos" target="_blank" class="res-btn">View All</a>
                            </div>
                            <div class="member-download">
                                <div class="down-img">
                                    <img src="images/article-ico.png" class="m-auto">
                                </div>
                                <h3>Articles</h3>
                                <a href="https://www.caho.in/articles" target="_blank" class="res-btn">View All</a>
                            </div>
                            <div class="member-download">
                                <div class="down-img">
                                    <img src="images/convert-ico.png" class="m-auto">
                                </div>
                                <h3>Convert</h3>
                                <a href="https://www.caho.in/convert" target="_blank" class="res-btn">View All</a>
                            </div>
                            <div class="member-download">
                                <div class="down-img">
                                    <img src="images/p4psi.png" class="m-auto">
                                </div>
                                <h3>P4PSI</h3>
                                <a href="https://p4psi.in/" target="_blank" class="res-btn">View All</a>
                            </div>
                            <div class="member-download">
                                <div class="down-img">
                                    <img src="images/dialog.png" class="m-auto">
                                </div>
                                <h3>Dialog</h3>
                                <a href="https://executivedialog.com/" target="_blank" class="res-btn">View All</a>
                            </div>
                            <div class="member-download">
                                <div class="down-img">
                                    <img src="images/clap.png" class="m-auto">
                                </div>
                                <h3>Clapp</h3>
                                <a href="https://www.caho.in/clapp" target="_blank" class="res-btn">View All</a>
                            </div>
                            <div class="member-download">
                                <div class="down-img">
                                    <img src="images/caho-talks-1.png" class="m-auto">
                                </div>
                                <h3>Caho Talks</h3>
                                <a href="https://open.spotify.com/show/6Yq9ymiAkv5FJe5X5xqkx6?si=83c09a86dc1d4cff&nd=1" target="_blank" class="res-btn">View All</a>
                            </div>
                            <div class="member-download">
                                <div class="down-img">
                                    <img src="images/fire-safety-ico.png" class="m-auto">
                                </div>
                                <h3>Fire Safety Audit</h3>
                                <a href="https://www.caho.in/files/fire-safety-audit.pdf" target="_blank" class="res-btn">View All</a>
                            </div>
                            <div class="member-download">
                                <div class="down-img">
                                    <img src="images/caho-publication.png" class="m-auto">
                                </div>
                                <h3>Caho Publication</h3>
                                <a href="https://www.caho.in/caho-publication" target="_blank" class="res-btn">View All</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection