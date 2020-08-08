@extends('admin.layouts.app')
@section('content')
    <h4 class="header-title">{{$gallery->name}} Dəyişdir</h4>
    <br>
    <div class="col-md-6">
        <form action="{{route('gallery.update',$gallery->id)}}" method="POST">
            @CSRF
            @method('put')
            <span class="label">Adı</span>
            <br>
            <input type="text" name="name" value="{{$gallery->name}}" class="form-control">
            <br>
            <input type="submit" class="btn btn-primary"  value="Dəyişdir">
        </form>
    </div>

@endsection