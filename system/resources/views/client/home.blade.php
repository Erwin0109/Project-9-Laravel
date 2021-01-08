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
                                <h3><a href="{{url('artikel')}}" title="">{{$artikel->judul}}</a></h3> 
                                <ul class="list-inline">
                                    <li><span>Penulis by</span><a href="#">{{$artikel->seller->nama}}</a></li>
                                </ul>
                            </div><!-- end blog-meta -->

                            <div class="blog-media">
                                <a href="blog-single.html" title=""><img src="{{url('public')}}/ujicobe/c.jpg" alt="" class="img-responsive img-rounded"></a>
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
                @include('client.template.section.sidebar')
            </div><!-- end row -->
        </div><!-- end boxed -->
    </div><!-- end container -->
</section>
@endsection