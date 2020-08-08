@extends('admin.layouts.app')
@section('js')
    <script src="{{url('/')}}/admin-assets/js-components/page/index.js"></script>
@endsection
@section('content')
    <div id="index">
        <div>
            <div class="text-right">
                <a href="{{route('page.create')}}" class="btn btn-primary btn-lg"><i class="ti-plus"></i>  Yeni Səhifə </a>
            </div>
            <h1 class="header-title"> Səhifələr</h1>
        </div>

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
            @foreach($pages as $page)
            <tr>
                <th scope="row">{{$page->id}}</th>
                <td>{{$page->title}}</td>
                <td>{{$page->slug}}</td>
                <td>
                    <a href="{{route('page.edit',$page->id)}}" class="btn btn-primary">
                        <i class="ti-pencil-alt2"></i>
                    </a>
                    <button class="btn btn-danger" @click="deletePage({{$page->id}})">
                        <i class="ti-trash"></i>
                    </button>

                    <a href="{{route('pageDesign.edit',$page->id)}}" class="btn btn-lg btn-success">
                        <i class="ti-palette"></i>

                    </a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>

    </div>

@endsection