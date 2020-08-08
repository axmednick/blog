@extends('admin.layouts.app')
@section('js')
    <script src="{{url('/')}}/admin-assets/js-components/category/edit.js"></script>
@endsection
@section('content')
<div id="edit">
    <div>
        <h1 class="header-title"> Kateqoriya Dəyişdirilməsi</h1>
    </div>

    <div class="col-md-6">
        <div class="big-space"></div>

        <form action="{{route('category.update',$category->id)}}" method="POST">
            @method('put')
            @CSRF
            <span class="label">Kateqoriya adı</span>
            <br>
            <input type="text" name="name"  placeholder="Kateqoriya adı" class="form-control mt-3" value="{{$category->name}}"  @change="getSlug"  >
            <input id="slug" type="text" name="slug" placeholder="Yarlık" class="form-control mt-3 input-slug"  value="{{$category->slug}}" >
            <br>
            <p><span class="label">Açıqlama</span> (maks 130 simvol)</p>

            <textarea name="description" class="form-control">{{$category->description}}</textarea>
            <br>

            <span class="label">Valideyn Kateqoriya</span>
            <br>
            <br>
            <select name="parent" class="form-control">
                <option value="0">Valideyn Kateqoriya</option>
                @foreach($generalCategories as $gcategory)
                    <option value="{{$gcategory->id}}" {{$category->parent==$gcategory->id ? 'selected' : ''}}>{{$gcategory->name}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <input type="submit" value="Dəyişdir" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection