@extends('app.index')
@section('desc','teknoptik.com')
@section('key','muhammed furkan aymergen')
@section('app.content')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg " data-setbg="{{ asset('app/img/3.png') }}" > 
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>{{$pages->first()->menu->name}}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

 <!-- Blog Section Begin -->
 <section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-12">
               @foreach ($pages as $page)
               {{-- @dd($page->menu->link,$page->id) --}}
               <a href="{{route('app.get.content.detail',['menu'=>$page->menu->link,'id'=>$page->id])}}">
                <div class="blog-item">
                     <div class="bi-pic">
                         <img src="{{ asset($page->image ?? 'app/img/mini-mockup.jpg') }}" alt="">
                     </div>
                     <div class="bi-text">
                         <h5>{{$page->title}}</h5>
                         <ul>
                             <li>{{$page->updated_at->format('H.i d-m-y')}}</li>
                             <li>{{$comment->where('pageid',$page->id)->count() }} Yorum</li>
                         </ul>
                         {!! Str::length(strip_tags($page->content))>150 ? Str::substr(strip_tags($page->content), 0, 150).'...' : strip_tags($page->content)  !!}
                     </div>
                 </div>
                </a>
               @endforeach 
                
               {{ $pages->links('vendor.pagination.bootstrap-4') }}

            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->



@endsection