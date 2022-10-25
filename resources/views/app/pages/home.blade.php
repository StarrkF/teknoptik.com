@extends('app.index')
@section('desc','teknoptik.com')
@section('key','muhammed furkan aymergen')
@section('app.content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('app/img/2.png') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hi-text">
                                <span>TEKNOPTIK</span>
                                <h1>TEKNOLOJİ <strong>BİLİM </strong> EĞLENCE</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Hero Section End -->



    <!-- Team Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Teknoptik</span>
                            <h2>Son Paylaşımlar</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">

                    @foreach ($posts as $post)
                    <a href="{{route('app.get.content.detail',['menu'=>$post->menu->link,'id'=>$post->id])}}">
                        <div class="col-lg-4">
                            <div class="ts-item set-bg" data-setbg="{{ asset($post->image ?? 'app/img/mini-mockup.jpg') }}">
                                <div class="ts_text">
                                    <h4>{{$post->title}}</h4>
                                    <span>{{$post->menu->name}}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    

                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    
    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="{{ asset('app/img/2.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>İLETİŞİM VE ÖNERİLER İÇİN</h2>
                        <div class="bt-tips">For comminication and advice</div>
                        <a href="mailto:faymergen98@gmail.com?subject=İletişim ve Öneri" class="primary-btn  btn-normal">İLETİŞİME GEÇ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->




@endsection