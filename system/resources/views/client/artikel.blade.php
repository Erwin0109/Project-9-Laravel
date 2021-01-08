@extends('client.template.base')

@section('content')
<section class="section db p120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tagline-message page-title text-center">
                    <h3>Blog & News</h3>
                    <ul class="breadcrumb">
                        <li><a href="javascript:void(0)">Edulogy</a></li>
                    </ul>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end section -->

<section class="section gb nopadtop">
    <div class="container">
        <div class="boxed">
            <div class="row">
                <div class="col-md-8">
                    @foreach($list_artikel as $artikel)
                    <div class="content blog-list">
                        <div class="blog-wrapper clearfix">
                            <div class="blog-meta">
                                <small><a href="#">Tips & Tricks</a></small>
                                <h3>
                                   {{$artikel->judul}} 
                                </h3>
                                <ul class="list-inline">
                                    <li><span>Penulis</span> <a href="#">{{$artikel->seller->nama}}</a></li>
                                </ul>
                            </div><!-- end blog-meta -->

                            <div class="blog-media">
                                <img src="{{url('public')}}/ujicobe/c.jpg" alt="" class="img-responsive img-rounded">
                            </div><!-- end media -->

                            <div class="blog-desc-big">
                                <p class="lead">WEB Depeloper Itu Apasih</p>
                                <p>{{$artikel->konten}}</p>

                                <blockquote class="text-center">
                                    "One Day One Coding...!!!"
                                </blockquote>

                                <hr class="invis">

                                <div class="tags-widget">   
                                    <ul class="list-inline">
                                        <li><a href="#">course</a></li>
                                        <li><a href="#">web design</a></li>
                                        <li><a href="#">development</a></li>
                                        <li><a href="#">language</a></li>
                                    </ul>
                                </div><!-- end list-widget -->

                            </div><!-- end desc -->
                        </div><!-- end blog -->
                    </div>
                    @endforeach
                    <!-- end content -->

                    <div class="authorbox">
                        <div class="site-publisher clearfix">
                            <img src="{{url('public')}}/client/upload/people_10.jpeg" alt="" class="img-responsive img-circle">
                            <a href="single-agency.html" title=""><h4><small>about</small> <span>{{$artikel->seller->nama}}</span></h4></a>
                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth.</p>

                            <div class="authorbox-social">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                </ul><!-- end list -->
                            </div><!-- end share -->
                        </div><!-- end publisher -->
                    </div><!-- end details -->

                    <div class="content boxed-comment clearfix">
                        <h3 class="small-title">2 Komentar</h3>
                        <div class="comments-list">
                            <div class="media">
                                <a class="media-left" href="#">
                                    <img src="{{url('public')}}/client/upload/people_12.jpeg" alt="" class="img-circle">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading user_name">Erwin Tri Ananda</h4>
                                    <p>Artikel Yang Sangat Unfaedah</p>
                                    <a href="#" class="btn btn-primary btn-sm">Balas</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end content -->

                    <div class="content boxed-comment clearfix">
                        <h3 class="small-title">Tinggalkan Komentar</h3>
                        <form class="big-contact-form" action="{{url('admin/komentar')}}" method="post">
                            @csrf
                            <div class="col-md-4">
                                <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="nama">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Tulis Komentar" class="form-control"></textarea>
                                <button class="btn btn-primary" type="submit">KIRIM KOMENTAR</button>
                            </div>
                        </form>
                    </div><!-- end content -->
                </div>
                <!-- end col -->
                @include('client.template.section.sidebar')
            </div><!-- end row -->
        </div><!-- end boxed -->
    </div><!-- end container -->
</section>
@endsection