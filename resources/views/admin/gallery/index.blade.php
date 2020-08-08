@extends('admin.layouts.app')
@section('content')

    <h4 class="header-title">Qalereya</h4>
    <div class="col-md-6">
        <form action="{{route('gallery.store')}}" method="POST">
            @CSRF
            <span class="label">Adı</span>
            <br>
            <input type="text" name="name" placeholder="Adı daxil edin" class="form-control">
            <br>
            <input type="submit" class="btn btn-primary"  value="Əlavə et">
        </form>
    </div>
    <br>
    <br>
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Adı</th>
                <th scope="col">Əməliyyatlar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($galleries as $gallery)
            <tr>
                <th scope="row">{{$gallery->id}}</th>
                <td>{{$gallery->name}}</td>
                <td>
                <a href="{{route('gallery.edit',$gallery->id)}}" class="btn btn-primary"><i class="ti-pencil-alt"></i> </a>
                <button class="btn btn-danger"><i class="ti-trash"></i> </button>
                <a href="{{route('gallery.show',$gallery->id)}}" class="btn btn-success"><i class="ti-image"></i> </a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection