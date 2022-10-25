@if ($paginator->hasPages())
<div class="row">
    <div class="blog-pagination">
       
        {{-- @if ($paginator->onFirstPage())
            <li class="disabled"><span>← Previous</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
        @endif --}}


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <div class="disabled"><span>{{ $element }}</span></div>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <div class=""><span>{{ $page }}</span></div>
                    @else
                        <div><a href="{{ $url }}">{{ $page }}</a></div>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        {{-- @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
        @else
            <li class="disabled"><span>Next →</span></li>
        @endif --}}
    </div>
</div>
    
@endif 