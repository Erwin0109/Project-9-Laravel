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
                                <small><a href="#">One Day One Coding</a></small>
                                <h3><a href="blog-single.html" title="">{{$artikel->judul}}</a></h3> 
                                <ul class="list-inline">
                                    <li><span>written by</span><a href="#">{{$artikel->seller->nama}}</a></li>
                                </ul>
                            </div><!-- end blog-meta -->

                            <div class="blog-media">
                                <a href="blog-single.html" title=""><img src="{{url('public')}}/client/upload/blog_01.jpg" alt="" class="img-responsive img-rounded"></a>
                            </div><!-- end media -->

                            <div class="blog-desc-big">
                                <p class="lead">{{$artikel->judul}}</p>
                                <p>{{$artikel->deskripsi}}</p>
                                <a href="{{url('artikel')}}" class="btn btn-primary">Read More</a>
                            </div><!-- end desc -->
                        </div><!-- end blog -->
                    </div>
                    @endforeach 
                    <!-- end content -->
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <ul class="pagination">
                                <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">3</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">&raquo;</a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
                
                <div class="sidebar col-md-4">
                    <div class="widget clearfix">
                        <div class="banner-widget">
                            <img src="{{url('public')}}/client/upload/banner.jpeg" alt="" class="img-responsive img-rounded">
                        </div>
                    </div>
                    <div class="widget clearfix">
                        <h3 class="widget-title">Popular Posts</h3>
                        <div class="post-widget">
                            <div class="media">
                                <img src="{{url('public')}}/client/upload/blog_small_01.jpg" alt="" class="img-responsive alignleft img-rounded">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="blog-single.html">Learning English Like a Pro..</a></h5>
                                    <div class="blog-meta">
                                        <ul class="list-inline">
                                            <li>4 days ago</li>
                                            <li><span>by</span> <a href="#">Edulogy Team</a></li>
                                        </ul>
                                    </div><!-- end blog-meta -->
                                </div>
                            </div>

                            <div class="media">
                                <img src="{{url('public')}}/client/upload/blog_small_02.jpg" alt="" class="img-responsive alignleft img-rounded">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="blog-single.html">How to create a beautiful website with Bootstrap</a></h5>
                                    <div class="blog-meta">
                                        <ul class="list-inline">
                                            <li>5 days ago</li>
                                            <li><span>by</span> <a href="#">Boby DOE</a></li>
                                        </ul>
                                    </div><!-- end blog-meta -->
                                </div>
                            </div>

                            <div class="media">
                                <img src="{{url('public')}}/client/upload/blog_small_03.jpg" alt="" class="img-responsive alignleft img-rounded">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="blog-single.html">Don't forget to update your Google web master tools</a></h5>
                                    <div class="blog-meta">
                                        <ul class="list-inline">
                                            <li>6 days ago</li>
                                            <li><span>by</span> <a href="#">Martin</a></li>
                                        </ul>
                                    </div><!-- end blog-meta -->
                                </div>
                            </div>
                        </div><!-- end post-widget -->
                    </div><!-- end widget -->

                    <div class="widget clearfix">
                        <h3 class="widget-title">Subscribe Our Newsletter</h3>
                        <div class="newsletter-widget">
                            <p>You can opt out of our newsletters at any time. See our <a href="#">privacy policy</a>.</p>
                            <form class="form-inline" role="search">
                                <div class="form-1">
                                    <input type="text" class="form-control" placeholder="Enter email here..">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                                </div>
                            </form>
                        </div><!-- end newsletter -->
                    </div><!-- end widget -->

                    <div class="widget clearfix">
                        <h3 class="widget-title">Popular Tags</h3>
                        <div class="tags-widget">   
                            <ul class="list-inline">
                                <li><a href="#">course</a></li>
                                <li><a href="#">web design</a></li>
                                <li><a href="#">development</a></li>
                                <li><a href="#">language</a></li>
                                <li><a href="#">teacher</a></li>
                                <li><a href="#">speaking</a></li>
                                <li><a href="#">material</a></li>
                                <li><a href="#">css3</a></li>
                                <li><a href="#">html</a></li>
                                <li><a href="#">learning</a></li>
                            </ul>
                        </div><!-- end list-widget -->
                    </div><!-- end widget -->
                </div>
                <!-- end sidebar -->

            </div><!-- end row -->
        </div><!-- end boxed -->
    </div><!-- end container -->
</section>

@endsection