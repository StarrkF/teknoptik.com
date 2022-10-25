@extends('app.index')
@section('app.content')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg " data-setbg="{{ asset('app/img/3.png') }}" > 
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>{{$page->menu->name}}</h2>
                    {{-- <div class="bt-option">
                        <a href="./index.html">Home</a>
                        <span>About</span>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


<!-- About US Section Begin -->
<section class="aboutus-section">
    <div class="container-fluid about-section">

        <div class="row">
            {{-- <div class="col-md-6 col-12">
                <div class="about-video set-bg" data-setbg="{{ asset($page->image ? $page->image : 'app/img/big-mockup.jpg') }}"></div>
            </div> --}}
            <div class="col-12">
                <div class="about-text">
                    <div class="section-title">
                        <h2>{{$page->title}}</h2>
                    </div>
                    <div class="at-desc">
                        
                        <img src="{{ asset($page->image ? $page->image : 'app/img/big-mockup.jpg') }}" class="about-video rounded-lg" alt="">
                       {!!$page->content!!}
                            
                                                        
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="row">
            <div class="col-lg-6 p-0">
                <div class="about-video set-bg" data-setbg="img/about-us.jpg">
                    <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><i
                            class="fa fa-caret-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="about-text">
                    <div class="section-title">
                        <span>About Us</span>
                        <h2>What we have done</h2>
                    </div>
                    <div class="at-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis. aliquip ex ea commodo consequat sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- About US Section End -->



@endsection