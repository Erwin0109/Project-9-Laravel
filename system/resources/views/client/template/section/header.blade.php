<header class="header header-normal">
    <div class="topbar clearfix">
        <div class="container">
            <div class="row-fluid">
                <div class="col-md-6 col-sm-6 text-left">
                    <p>
                        <strong><i class="fa fa-phone"></i></strong> +268 9694 3583 49 &nbsp;&nbsp;
                        <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:#">erwin09triananda@gmail.com</a>
                    </p>
                </div><!-- end left -->
                <div class="col-md-6 col-sm-6 hidden-xs text-right">
                    <div class="social">
                        <a class="facebook" href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                        <a class="twitter" href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a class="google" href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                        <a class="linkedin" href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        <a class="pinterest" href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                    </div><!-- end social -->
                </div><!-- end left -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end topbar -->

    <div class="container">
        <nav class="navbar navbar-default yamm">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo-normal">
                    <a class="navbar-brand" href="index.html"><img src="{{url('public')}}/client/images/logo-dark.png" alt=""></a>
                </div>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{'home'}}">Home</a></li>
                    <li><a href="{{'contact'}}">Contact</a></li>
                    <li class="dropdown hassubmenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Blog Kategori</a></li>
                            <li><a href="#">Blog Produk</a></li>
                            <li><a href="#">Blog Recomended</a></li>
                        </ul>
                    </li>
                    <li class="iconitem"><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-search"></i></a></li>
                    <li class="dropdown hassubmenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      @if(Auth::check())
                        {{request()->user()->nama}}
                      @else
                          Silahkan Login
                      @endif
                        <i class="fa fa-user"></i>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Profil</a></li>
                            <li><a href="#">Setting</a></li>
                            <li><a href="{{'login'}}">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav><!-- end navbar -->
    </div><!-- end container -->
</header>