@extends('layouts.app')
@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Ana Səhifə</a></li>
                    <li class="breadcrumb-item"><a href="{{route('categoryView',$post->category->slug)}}">{{$post->category->name}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
                </ol>
                <!-- End of .breadcrumb -->
            </nav>
        </div>
        <!-- End of .container -->
    </div>
    <!-- End of .breadcrumb-container -->
    <!-- post-single-wrapper starts -->
    <div class="post-single-wrapper p-t-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <main class="site-main">
                        <article class="post-details">
                            <div class="single-blog-wrapper">
                                <div class="post-details__social-share mt-3">
                                    <ul class="social-share social-share__with-bg social-share__vertical">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <!-- End of .social-share__no-bg -->
                                </div>
                                <!-- End of .social-share -->
                                <h2 class="axil-post-title hover-line">
                                   {{$post->title}}
                                </h2>

                                <p></p>
                                <p>
                                    {!! $post->content !!}
                                </p>
                                <!-- End of .blockquote -->
                            </div>
                            <!-- End of .single-blog-wrapper -->
                        </article>
                        <!-- End of .post-details -->

                        <!-- End of .post-shares -->
                        <hr class="m-t-xs-50 m-b-xs-60">

                        <!-- End of .post-navigation -->
                    </main>
                    <!-- End of main -->
                </div>
                <!--End of .col-auto  -->
                <div class="col-lg-4">
                    <aside class="post-sidebar">

                        <!-- End of  .newsletter-widget -->
                        <div class="category-widget m-b-xs-40">
                            <div class="widget-title">
                                <h3>{{__('index.categories')}}</h3><br>

                            </div>

                            @foreach($categories as$category)
                                <a href="{{route('categoryView',$category->slug)}}"> <div class="categories">{{$category->name}} <span class="count"> {{$category->posts->count()}}</span></div></a>
                        @endforeach
                        <!-- End of .category-carousel -->
                        </div>
                        <!-- End of .category-widget -->

                        <!-- End of .sidebar-social-share -->
                        <div class="post-widget sidebar-post-widget m-b-xs-40">

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="recent-post">
                                    <div class="axil-content">
                                        @foreach($lastFourPosts as $post)
                                            <div class="media post-block post-block__small">
                                                <a href="{{route('postView',[$post->category->slug,$post->slug])}}" class="align-self-center"><img
                                                            class=" m-r-xs-30" src="{{url('/')}}/uploads/post/{{$post->image}}"
                                                            alt="media image"></a>
                                                <div class="media-body">

                                                    <h4 class="axil-post-title hover-line hover-line"><a
                                                                href="{{route('postView',[$post->category->slug,$post->slug])}}">{{$post->title}}</a></h4>
                                                    <div class="post-metas">
                                                        <ul class="list-inline">
                                                            <li>By <a href="#">Amachea Jajah</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- End of .content -->
                                </div>

                            </div>
                            <!-- End of .tab-content -->
                        </div>
                        <!-- End of .add-block-widget -->
                    </aside>
                    <!-- End of .post-sidebar -->
                </div>
                <!-- End of .col-lg-4 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </div

@endsection