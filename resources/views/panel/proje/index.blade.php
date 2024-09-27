@extends('layouts.master')
@section('title')
    Yönetici Paneli
@endsection
@section('page-title')
    Yönetici Paneli
@endsection
@section('body')

    <body data-sidebar="colored">
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('panel-project-add')}}"><button  class="btn btn-success" id="btn-save-event">Yeni Ekle</button></a>
                    </div>
                    <div class="card-body">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Proje Adı</th>
                                <th>Başlangıç Tarihi</th>
                                <th>Katılımcı Sayısı</th>
                                <th>İş Sayısı</th>
                                <th>Durumu</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($item as $proje)
                                <tr>
                                    <td>{{$proje->baslik}}</td>
                                    <td>{{$proje->created_at}}</td>
                                    <td>{{$proje->is_sahipligi_count}}</td>
                                    <td>{{$proje->works_count}}</td>
                                    <td>
                                        @if($proje->durumu==0)<span class="badge badge-soft-info font-size-12">Devam Ediyor</span> @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <button type="button" class="btn btn-primary waves-effect waves-light">
                                                    İşlemler <i class="mdi mdi-dots-vertical"></i>
                                                </button>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end " style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-40px, 30px, 0px);" data-popper-placement="bottom-end">
                                                <a class="dropdown-item" href="{{route('panel-project-details',['id'=>$proje->id])}}">İncele</a>
                                                <a class="dropdown-item" href="{{route('panel-project-edit',['id'=>$proje->id])}}">Düzenle</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Sil</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    @endsection
    <!-- App js --><script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

    @section('scripts')
        <link href="{{ url('public/build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/build/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/build/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ url('public/build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ url('public/build/js/app.js') }}"></script>
        <script src="{{ url('public/build/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('public/build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ url('public/build/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('public/build/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ url('public/build/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ url('public/build/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ url('public/build/libs/pdfmake/build/vfs_fonts.js') }}"></script>
        <script src="{{ url('public/build/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ url('public/build/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ url('public/build/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

        <script src="{{ url('public/build/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ url('public/build/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ url('public/build/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ url('public/build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

        <!-- Datatable init js -->
        <script src="{{ url('public/build/js/pages/datatables.init.js') }}"></script>
    @include('includes.js.toastr')
@endsection