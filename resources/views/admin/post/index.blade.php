@extends('admin.layouts.app')
@section('js')
    <script src="{{url('/')}}/admin-assets/js-components/post/index.js"></script>
@endsection
@section('content')
    <div id="index">
    <div class="text-right">
        <a href="{{route('post.create')}}" class="btn btn-primary btn-lg">Yeni Yazı</a>
    </div>
<h4 class="header-title">Yazılar</h4>
    <br>
    <br>
    <table class="table text-left">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Şəkil</th>
            <th scope="col">Adı</th>
            <th scope="col">Əməliyyatlar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td><img src="{{url('/')}}/uploads/post/{{$post->image}}" class="img-thumbnail" width="100px"></td>
            <td>{{$post->title}}</td>
            <td>
                <a href="{{route('post.edit',$post->id)}}" class="btn  btn-primary"><i class="ti-pencil-alt"></i> </a>
                <button @click="deletePost({{$post->id}})" class="btn  btn-danger"><i class="ti-trash"></i> </button>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
    </div>
@endsection