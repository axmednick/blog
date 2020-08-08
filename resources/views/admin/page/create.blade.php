@extends('admin.layouts.app')
@section('content')
    <div id="index">
        <div>
            <h1 class="header-title"> Yeni Səhifə Əlavə et</h1>
        </div>

        <div class="col-md-6">
            <form action="{{route('page.store')}}" method="POST">
                @csrf
                <span class="label">Səhifənin adı</span><br>
                <input type="text" name="title" class="form-control" placeholder="Səhifənin adı">
                <br>
                <p><span class="label">Açıqlama</span> (max 130 simvol) <br>
                    <textarea name="description" class="form-control" placeholder="Səhifə haqqında qısa məlumat"></textarea>
                <br><br>
                <input type="submit" value="Dərc et" class="btn  btn-lg btn-primary">
            </form>
        </div>

    </div>

@endsection