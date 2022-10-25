    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>

        <nav class="canvas-menu mobile-menu">
            <ul>
                @foreach ($menus as $menu)
                    <li class="{{request()->is($menu->link) ? 'active' : ''}}"><a href="{{route('app.get.content',$menu->link)}}">{{$menu->name}}</a></li>
                @endforeach
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="https://www.linkedin.com/in/muhammed-furkan-aymergen-25646b174" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/StarrkF" target="_blank"><i class="fa fa-github"></i></a>
            <a href="https://furkanaymergen.com" target="_blank"><i class="fa fa-home"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="{{route('app.home')}}">
                            <img src="{{ asset('app/img/app-logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                           
                            @foreach ($menus as $menu)
                                <li class="{{request()->is($menu->link) ? 'active' : ''}}"><a href="{{route('app.get.content',$menu->link)}}">{{$menu->name}}</a></li>
                            @endforeach
                                
                           
                            {{-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about-us.html">About us</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <div class="top-option">
                        <div class="to-social">
                            <a href="https://www.linkedin.com/in/muhammed-furkan-aymergen-25646b174" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="https://github.com/StarrkF" target="_blank"><i class="fa fa-github"></i></a>
                            <a href="https://furkanaymergen.com" target="_blank"><i class="fa fa-home"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->