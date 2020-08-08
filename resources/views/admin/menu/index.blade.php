@extends('admin.layouts.app')
@section('js')
    <script src="{{url('/')}}/admin-assets/js-components/menu/index.js"></script>
@endsection

@section('content')
    <div id="index">
    <div class="text-right">
        <a href="{{route('menu.create')}}" class="btn btn-primary btn-lg">Yeni Menu</a>
    </div>
<h4 class="header-title">Menyular</h4>

    <br>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Adı</th>
            <th scope="col">Yarlık</th>
            <th scope="col">Əməliyyatlar</th>
        </tr>
        </thead>
        <tbody>

            @foreach($menus as $menu)
                <tr>
                <th scope="row">{{$menu->id}}</th>
                <td><input type="text"  value="{{$menu->name}}" id="{{$menu->id}}" class="form-control" @change="nameChange({{$menu->id}})"></td>
                <td><a href="{{url('/')}}/{{$menu->link}}">{{url('/')}}/{{$menu->link}}</a> </td>
                <td>
                    <button class="btn btn-danger" @click="deleteMenu({{$menu->id}})"><i class="ti-trash"></i> </button>
                </td>
                </tr>
                @endforeach


        </tbody>
    </table>
    </div>
@endsection