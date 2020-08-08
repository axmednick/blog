@extends('layouts.app')
@section('content')


    <!-- End of .top-stories -->


    <div class="random-posts section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <main class="axil-content">
                        @foreach($posts as $post)
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
                    <div class="row text-center">
                        <div class="container">
                            <div class="col-md-12">
                                {{$posts->links()}}
                            </div>
                        </div>
                    </div>

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

                                <!-- End of .tab-pane -->
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
