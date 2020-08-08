@extends('admin.layouts.app')
@section('js')
    <script src="{{url('/')}}/admin-assets/js-components/category/create.js"></script>
@endsection
@section('content')
<div id="create">
    <div>
        <h1 class="header-title"> Kateqoriya əlavə et</h1>
    </div>

    <div class="col-md-6">
        <div class="big-space"></div>

        <form action="{{route('category.store')}}" method="POST">
            @CSRF
            <span class="label">Kateqoriya adı</span>
            <br>
            <input type="text" name="name" placeholder="Kateqoriya adı" class="form-control mt-3" @change="getSlug" v-model="name">
            <input type="text" name="slug" placeholder="Yarlık" class="form-control mt-3 input-slug" v-model="slug" >
            <p><span class="label">Açıqlama</span> (maks 130 simvol)</p>

            <textarea name="description" class="form-control"></textarea>
            <br>
            <span class="label">Valideyn Kateqoriya</span>
            <br>
            <br>
            <select name="parent" class="form-control">
                <option value="0">Valideyn Kateqoriya</option>
                @foreach($generalCategories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <input type="submit" value="Əlavə et" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection