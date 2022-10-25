@extends('app.index')
@section('desc',$page->desc)
@section('key',$page->key)
@section('app.content')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg " data-setbg="{{ asset('app/img/3.png') }}" > 
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>{{$page->title}}</h2>
                    <div class="bt-option">
                        <a href="{{route('app.home')}}">Anasayfa</a>
                        <a href="{{route('app.get.content',$page->menu->link)}}"> <span>{{$page->menu->name}}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<section class="blog-details-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 p-0">
                <div class="blog-details-text">
                    <div class="blog-details-pic">
                        <div class="blog-details-pic-item">
                            <img src="{{ asset($page->image ?? 'app/img/big-mockup.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="det-text">
                        {!! $page->content !!}
                        @foreach (explode(',',$page->key) as $key)
                        <div class="badge badge-secondary" style="font-size: 14px">{{$key}}</div>
                        @endforeach
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-8 p-0">
                <div class="sidebar-option">
                    <div class="so-latest">
                        <h5 class="title">Diğer Paylaşımlar</h5>
                        @foreach ($posts as $post)
                        <div class="latest-item">
                            <div class="li-pic">
                                <img src="{{ asset($post->image ?? 'app/img/mini-mockup.jpg') }}" alt="">
                            </div>
                            <div class="li-text">
                                <h6><a href="{{route('app.get.content.detail',['menu'=>$post->menu->link,'id'=>$post->id])}}">{{$post->title}}</a></h6>
                                <span class="li-time">{{$post->updated_at->format('H.i d-m-Y')}}</span>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>

            
            
        </div>
        <div class="blog-details-section spad">
            <div class="blog-details-text">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="leave-comment">
                            <h5>Yorum Yap</h5>
                            <form action="{{route('app.post.comment')}}" method="POST">
                                @csrf
                                <input type="hidden" name="menuid" value="{{$page->menuid}}">
                                <input type="hidden" name="pageid" value="{{$page->id}}">
                                <input type="text" name="name" placeholder="Name">
                                <input type="text" name="email" placeholder="Email">
                                <textarea name="comment" placeholder="Comment"></textarea>
                                <button type="submit">Gönder</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="comment-option">
                            <h5 class="co-title">Yorumlar</h5>
                            @foreach ($comments as $comment)
                            <div class="co-item">
                                <div class="co-widget">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                    <a href="#"><i class="fa fa-share-square-o"></i></a>
                                </div>
                                <div class="co-pic">
                                    <img src="{{ asset('app/img/mini-mockup.jpg') }}" alt="">
                                    <h5>{{$comment->name}}</h5>
                                </div>
                                <div class="co-text">
                                    <p>{{$comment->comment}}</p>
                                </div>
                            </div> 
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</section>
<!-- Blog Details Section End -->

@endsection