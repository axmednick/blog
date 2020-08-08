@extends('admin.layouts.app')
@section('assets')
    <link href="{{url('/')}}/admin-assets/js-components/summernote/summernote-lite.css" rel="stylesheet">
    <script src="{{url('/')}}/admin-assets/js-components/summernote/summernote-lite.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('content')
    <h4 class="header-title">Yeni məqalə yaz</h4>
    <br>
    <br>
    <br>

        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            <div class="col-md-9">
            @CSRF
            <span class="label">Əsas şəkil</span><br>
            <input type="file" name="image" class="btn btn-primary">
            <br>
            <br>
            <span class="label">Başlıq</span>
            <br>
            <input type="text" name="title" class="form-control" placeholder="Başlıq">
            <br>
                <textarea name="post_content" id="post-content" style="height: 900px!important;"></textarea>



            <br>
            <br>
            <br>
                <div class="big-space"></div>
            <span class="label">Açıqlama</span>
            <input type="text" name="description" class="form-control" placeholder="Açıqlama">
            <br>
            <span class="label">Kateqoriya</span>
            <select name="category"  class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <br>

                <span class="label">Qalereya</span>
                <select name="gallery"  class="form-control">
                    <option value="" selected>Heç biri</option>
                    @foreach($gallery as $gallery)
                        <option value="{{$gallery->id}}">{{$gallery->name}}</option>
                    @endforeach
                </select>
                <br>
                <br>

            <br><br>

            <br>
            <br>
            <input type="submit" value="Dərc et" class="btn btn-primary btn-lg">
            </div>
        </form>


    <script>
        var obje=$('#post-content')
        obje.summernote({
            height: ($(window).height() - 300),
            callbacks: {
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                }
            }
        });

        function uploadImage(image) {
            var data = new FormData();
            data.append("image", image);
            $.ajax({
                url: '/admin/post/imageUpload',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('#token').val()
                },
                data: data,
                type: "post",
                success: function(url) {
                    var image = $('<img>').attr('src',  url);
                    obje.summernote("insertNode", image[0]);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }
    </script>
@endsection