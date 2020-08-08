@extends('layouts.app')
@section('content')
    <div class="recent-news-wrapper section-gap p-t-xs-15 p-t-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="axil-latest-post">
                        <div class="media post-block m-b-xs-20">
                            <figure class="fig-container">
                                <a href="{{route('postView',[$lastOne->category->slug,$lastOne->slug])}}"><img src="/uploads/post/{{$lastOne->image}}"
                                                                         alt="latest post"></a>
                                <div class="post-cat-group m-b-xs-10">
                                    <a href="{{route('categoryView',$lastOne->category->slug)}}"
                                       class="post-cat cat-btn bg-color-blue-one">{{$lastOne->category->name}}</a>
                                </div>
                            </figure>
                            <div class="media-body">
                                <h3 class="axil-post-title hover-line hover-line"><a
                                            href="{{route('postView',[$lastOne->category->slug,$lastOne->slug])}}">{{  $lastOne->title}}</a></h3>
                                <div class="post-metas">
                                    <ul class="list-inline">
                                        <li>By <a href="#" class="post-author">Ashley Graham</a></li>
                                        <li><i class="dot">.</i>July 23, 2019</li>
                                        <li><a href="#"><i class="feather icon-activity"></i>5k Views</a></li>
                                        <li><a href="#"><i class="feather icon-share-2"></i>230 Shares</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of .post-block -->
                    </div>
                    <!-- End of .latest-post -->
                </div>
                <!-- End of .col-lg-6 -->
                <div class="col-lg-6">
                    <div class="axil-recent-news">
                        <div class="section-title d-flex m-b-xs-30">
                            <h2 class="axil-title">{{__('index.last_posts')}}</h2>

                        </div>
                        <!-- End of .section-title -->
                        <div class="axil-content">
                            @foreach($lastFourPosts as $post)
                            <div class="media post-block m-b-xs-30">
                                <a href="{{route('postView',[$post->category->slug,$post->slug])}}" class="align-self-center"><img
                                            class=" m-r-xs-30" src="uploads/post/{{$post->image}}" alt=""></a>
                                <div class="media-body">
                                    <div class="post-cat-group m-b-xs-10">
                                        <a href="{{route('categoryView',$post->category->slug)}}"
                                           class="post-cat cat-btn bg-color-purple-one">{{$post->category->name}}</a>
                                    </div>
                                    <h3 class="axil-post-title hover-line hover-line"><a
                                                href="{{route('postView',[$post->category->slug,$post->slug])}}">{{$post->title}}</a></h3>
                                    <div class="post-metas">
                                        <ul class="list-inline">
                                            <li>By <a href="#">Amachea Jajah</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End of .post-block -->
                            @endforeach
                        </div>
                        <!-- End of .content -->
                    </div>
                    <!-- End of .recent-news -->
                </div>
                <!-- End of .col-lg-6 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </div>
    <!-- End of .section-gap -->
    <section class="section-gap section-gap-top__with-text top-stories bg-grey-light-three">
        <div class="container">
            <div class="section-title m-b-xs-40">
                <h2 class="axil-title">{{__('index.random_posts')}}</h2>
                <a href="#" class="btn-link">All Top Stories</a>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="axil-img-container m-b-xs-30">
                        <a href="{{route('postView',[$randomOne[0]->category->slug,$randomOne[0]->slug])}}" class="d-block">
                            <img src="/uploads/post/{{$randomOne[0]->image}}" alt="gallery images"
                                 class="w-100">
                            <div class="grad-overlay"></div>
                        </a>
                        <div class="media post-block position-absolute">
                            <div class="media-body media-body__big">
                                <div class="post-cat-group m-b-xs-10">
                                    <a href="{{route('categoryView',$randomOne[0]->category->slug)}}" class="post-cat cat-btn bg-color-purple-one">{{$randomOne[0]->category->name}}</a>
                                </div>
                                <div class="axil-media-bottom">
                                    <h3 class="axil-post-title hover-line hover-line"><a
                                                href="{{route('postView',[$randomOne[0]->category->slug,$randomOne[0]->slug])}}">{{$randomOne[0]->title}}</a></h3>
                                    <div class="post-metas">
                                        <ul class="list-inline">
                                            <li>By <a href="#" class="post-author">Ashley Graham</a></li>
                                            <li><i class="dot">.</i>July 17, 2019</li>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of .post-block -->
                    </div>
                    <!-- End of .axil-img-container -->
                </div>
                <!-- End of .grid-item -->
                <div class="col-lg-4">
                    @foreach($randomTo as $post)
                    <div class="axil-img-container m-b-xs-30">
                        <a href="{{route('postView',[$post->category->slug,$post->slug])}}" class="d-block">
                            <img src="/uploads/post/{{$post->image}}" alt="gallery images"
                                 class="w-100">
                            <div class="grad-overlay"></div>
                        </a>
                        <div class="media post-block position-absolute">
                            <div class="media-body">
                                <div class="post-cat-group m-b-xs-10">
                                    <a href="business.html"
                                       class="post-cat cat-btn btn-mid bg-color-purple-two">{{$post->Category->name}}</a>
                                </div>
                                <div class="axil-media-bottom">
                                    <h3 class="axil-post-title hover-line hover-line"><a
                                                href="{{route('postView',[$post->category->slug,$post->slug])}}">{{$post->title}}</a></h3>
                                    <div class="post-metas">
                                        <ul class="list-inline">
                                            <li><a href="{{route('postView',[$post->category->slug,$post->slug])}}"
                                                   class="d-flex align-items-center"><span>By Amachea
															Jajah</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of .post-block -->
                    </div>
                    @endforeach
                </div>
                <!-- End of .col-lg-4 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .top-stories -->


    <div class="random-posts section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="add-container m-b-xs-60">
                        <a href="#"><img src="assets/images/clientbanner/clientbanner.jpg" alt="add one"
                                         class="img-fluid"></a>
                    </div>
                    <main class="axil-content">
                        @foreach($lastPosts as $post)
                        <div class="media post-block post-block__mid m-b-xs-30">
                            <a href="{{route('postView',[$post->category->slug,$post->slug])}}" class="align-self-center"><img class=" m-r-xs-30" src="/uploads/post/{{$post->image}}" alt=""></a>
                            <div class="media-body">
                                <div class="post-cat-group m-b-xs-10">
                                    <a href="{{route('categoryView',$post->category->slug)}}" class="post-cat cat-btn bg-color-blue-one">{{$post->category->name}}</a>
                                </div>
                                <h3 class="axil-post-title hover-line hover-line"><a
                                            href="{{route('postView',[$post->category->slug,$post->slug])}}">{{$post->title}}</a></h3>
                                <p class="mid">{{$post->description}}</p>
                                <div class="post-metas">
                                    <ul class="list-inline">
                                        <li>By <a href="#">Amachea Jajah</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{$lastPosts->links()}}
                    </main>
                    <!-- End of .axil-content -->
                </div>
                <!-- End of .col-lg-8 -->
                <div class="col-lg-4">
                    <aside class="post-sidebar">

                        <!-- End of  .newsletter-widget -->
                        <div class="category-widget m-b-xs-40">
                            <div class="widget-title">
                                <h3>{{__('index.categories')}}</h3><br>

                            </div>

                                @foreach($categories as$category)
                                <div class="categories">{{$category->name}} <span class="count"> {{$category->posts->count()}}</span></div>
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
                                                        class=" m-r-xs-30" src="uploads/post/{{$post->image}}"
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
                        <!-- End of .sidebar-post-widget -->

                        <!-- End of .instagram-widget -->
                    </aside>
                    <!-- End of .post-sidebar -->
                </div>
                <!-- End of .col-lg-4 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </div>



@endsection