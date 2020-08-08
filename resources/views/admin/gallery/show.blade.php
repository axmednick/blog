@extends('admin.layouts.app')
@section('js')
<script src="{{url('/')}}/admin-assets/js-components/dropzonejs/dropzone.min.js"></script>
<link rel="stylesheet" href="{{url('/')}}/admin-assets/js-components/dropzonejs/dropzone.min.css">
<link rel="stylesheet" href="{{url('/')}}/admin-assets/js-components/dropzonejs/basic.min.css">
<script src="{{url('/')}}/admin-assets/js-components/gallery/show.js"> </script>

@endsection
@section('content')
<div id="show">
    <form action="{{route('galleryImages.store')}}" method="POST" id="my-awesome-dropzone" enctype="multipart/form-data" class="dropzone">
        @CSRF
        <div class="fallback">
            <input name="file" type="file" multiple />
        </div>
        <input type="hidden" name="gallery" value="{{$id}}">
    </form>
    <br>
    <br>
    <br>

    <div class="col-md-12">
        <div class="row text-center">
            @php
            $counter=0
            @endphp
            @foreach($images as $image)
                @if($counter%4==0)
        </div><hr><div class="row text-center">
                @endif
            <div class="col-md-3">
                <img src="{{url('/')}}/uploads/gallery/{{$image->name}}" class="img-thumbnail">
                <br>
                <button class="btn btn-danger" @click="deleteImage({{$image->id}})"><i class="ti-trash"></i> </button>
            </div>
                @php($counter++)
                @endforeach
        </div>
    </div>
</div>
@endsection