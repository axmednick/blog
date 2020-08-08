@extends('admin.layouts.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div>
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2"><i class="text-primary mdi mdi-access-point-network mr-2"></i> <b>{{$userTypes[0]['sessions']}}</b></h2>
                                <p class="text-muted mb-0">Yeni istifadəçilər</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2"><i class="text-teal mdi mdi-airplay mr-2"></i> <b>{{$userTypes[1]['sessions']}}</b></h2>
                                <p class="text-muted mb-0">Geri dönən istifadəçilər</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2"><i class="text-info mdi mdi-black-mesa mr-2"></i> <b>{{count($pageViews)}}</b></h2>
                                <p class="text-muted mb-0">Baxılan səhifələr</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6">
                            <div class="text-center p-3">
                                <h2 class="mt-2"><i class="text-danger mdi mdi-cellphone-link mr-2"></i> <b>{{$userTypes[0]['sessions']+$userTypes[1]['sessions']}}</b></h2>
                                <p class="text-muted mb-0">Bütün istifadəçilər</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h5 class="mt-0 font-14 mb-3">Ən çox baxılan 10 səhifə</h5>
            <div class="table-responsive">
                <table class="table table-hover mails m-0 table table-actions-bar table-centered">
                    <thead>
                    <tr>

                        <th>Başlıq</th>
                        <th>Baxış Sayı</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($topVisitedPages as $page)
                    <tr>
                        <td>
                            {{$page['pageTitle']}}
                        </td>

                        <td>
                           {{$page['pageViews']}}
                        </td>

                    </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection