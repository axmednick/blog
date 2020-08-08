@extends('admin.layouts.app')

@section('js')
    <script src="{{url('/')}}/admin-assets/js-components/menu/create.js"></script>
@endsection
@section('content')
<div id="create">
<div class="col-md-6">

        @CSRF
        <span class="label">Menyu tipi</span><br>

        <select name="type" class="form-control" v-model="type" @change="change">
            <option value="">Seçin</option>
            <option value="category">Kateqoriya</option>
            <option value="page">Səhifə</option>
        </select>
        <br>
        <select name="item" class="form-control" v-model="item" v-if="type=='category'">
            <option value="">Seçin</option>
            <option v-for="(category,index) in categories" :value="category.id">@{{ category.name}}</option>
        </select>
        <select name="item" class="form-control" v-model="item" v-if="type=='page'">
            <option v-for="(page,index) in pages" :value="page.id">@{{ page.title }}</option>
        </select>
        <br>
        <button @click="save" type="submit" value="Əlavə et" class="btn btn-primary">Əlavə et </button>

</div>
</div>

@endsection