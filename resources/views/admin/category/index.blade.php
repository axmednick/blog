@extends('admin.layouts.app')
@section('js')
    <script src="{{url('/')}}/admin-assets/js-components/category/index.js"></script>
@endsection
@section('content')
    <div id="index">
        <div class="text-right">
        <a href="{{route('category.create')}}" class="btn btn-primary btn-lg"><i class="ti-plus"></i> Yeni Əlavə et </a>
        </div>
        <h4 class="header-title">Kateqoriyalar</h4>


        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ad</th>
                <th scope="col">Yarlık</th>
                <th scope="col">Əməliyyatlar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr class="general_category">
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>
                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary"><i class="ti-pencil-alt2"></i> </a>
                    <button @click="deleteCategory({{$category->id}})"  class="btn btn-danger"><i class="ti-trash"></i> </button>
                </td>
            </tr>
                @foreach($category->sub_categories as $subcategory)
                    <tr >
                        <th scope="row">{{$subcategory->id}}</th>
                        <td>{{$subcategory->name}}</td>
                        <td>{{$subcategory->slug}}</td>
                        <td>
                            <a href="{{route('category.edit',$subcategory->id)}}" class="btn btn-primary"><i class="ti-pencil-alt2"></i> </a>
                            <button @click="deleteCategory({{$subcategory->id}})"  class="btn btn-danger"><i class="ti-trash"></i> </button>

                        </td>
                    </tr>
                @endforeach
            @endforeach

            </tbody>
        </table>

    </div>


@endsection