  <!-- Get In Touch Section Begin -->
  <div class="gettouch-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="gt-text email">
                    <i class="fa fa-linkedin"></i>
                    <p><a target="_blank" class="a-link " href="https://www.linkedin.com/in/muhammed-furkan-aymergen-25646b174">Muhammed Furkan Aymergen</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text email">
                    <i class="fa fa-github"></i>
                    <p><a target="_blank" class="a-link " href="https://github.com/StarrkF">github/StarrkF</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text email">
                    <i class="fa fa-home"></i>
                    <p><a target="_blank" class="a-link " href="https://furkanaymergen.com/">www.furkanaymergen.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Get In Touch Section End -->
<!-- Footer Section Begin -->
  <section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="fs-about">
                    <div class="fa-logo">
                        <a href="#"><img src="{{ asset('app/img/app-logo.png') }}" alt=""></a>
                    </div>
                    <p>Muhammed Furkan Aymergen <br> Kişisel Blog Sitesi</p>
                    <div class="fa-social">
                        <a href="https://www.linkedin.com/in/muhammed-furkan-aymergen-25646b174" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://github.com/StarrkF" target="_blank"><i class="fa fa-github"></i></a>
                        <a href="https://furkanaymergen.com" target="_blank"><i class="fa fa-home"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-4">
                <div class="fs-widget">
                    <h4>Menü</h4>
                    <ul class="row">
                        @foreach ($menus as $menu)
                           <li class="{{count($menus)>=5 ? 'col-6' : 'col-12'}}"><a href="{{route('app.get.content',$menu->link)}}">{{$menu->name}}</a></li> 
                        @endforeach
                    </ul>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="copyright-text">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->