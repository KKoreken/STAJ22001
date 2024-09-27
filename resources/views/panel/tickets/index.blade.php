@extends('layouts.master')
@section('title')
    Yönetici Paneli
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('public/build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('public/build/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('public/build/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('public/build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
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
                        <a href="{{route('add-ticket')}}"><button  class="btn btn-success" id="btn-save-event">Ticket Olustur</button></a>
                    </div>
                    <div class="card-body">

                        <h4 class="card-title">Kullanici Ticketlari</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Ticket Adı</th>
                                <th>Ticket Sahibi</th>
                                <th>Kategori</th>
                                <th>Etiketler</th>
                                <th>Çözüldü Mü</th>
                                <th>Kilitli Mi</th>
                                <th>Açılma Tarihi</th>
                                <th>Güncellenme Tarihi</th>
                                <th>Öncelik</th>
                                <th>Durum</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tickets as $t)
                                <tr>
                                    <td>{{$t->title}}</td>
                                    <td>{{$t->user->name}} - ID : {{$t->user->id}}</td>
                                    <td>@foreach($t->categories as $c){{$c->name}}  @endforeach</td>
                                    <td>@foreach($t->labels as $l)<span class="badge py-1 rounded-pill bg-info">{{$l->name}}</span>  @endforeach</td>
                                    <td>@if($t->is_resolved=='1') <span class="badge font-size-14  text-black badge-soft-success"><i class="ri-checkbox-circle-fill "></i> Evet</span> @else <span class="font-size-14 badge badge-soft-danger"><i class="ri-close-circle-fill"></i> Hayir</span> @endif</td>
                                    <td>@if($t->is_locked=='1') <span class="badge font-size-14 font-size-13 text-black badge-soft-success"><i class="ri-lock-line"></i> Evet</span> @else <span class="badge font-size-14 badge-soft-danger"><i class="ri-lock-unlock-line "></i>Hayir</span> @endif</td>
                                    <td>{{$t->created_at}}</td>
                                    <td>{{$t->updated_at}}</td>
                                    <td><span style="background: @if($t->priority == '1') #780000 @elseif ($t->priority == '2') #c1121f @elseif ($t->priority == 3) #fdf0d5; color: black @elseif ($t->priority == '4') #003049 @elseif ($t->priority == '5') #669bbc  @endif " class="badge font-size-14 rounded-pill float-end">{{$t->priority}}</span></td>
                                    <td> <span class="badge rounded-pill @if($t->status == 'Okunmadı')bg-danger @elseif($t->status == 'Okundu') bg-secondary  @elseif($t->status == 'Cevaplandı') bg-info @elseif($t->status == 'Kapandı') bg-success @endif float-end">{{$t->status}}</span> </td>
                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="{{url('Panel/edit-ticket').'/'.$t->uuid}}" class="px-2 text-primary"><i
                                                        class="ri-pencil-line font-size-18"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="{{url('delete-ticket').'/'.$t->uuid}}" class="px-2 text-danger"><i
                                                        class="ri-delete-bin-line font-size-18"></i></a>
                                            </li>
                                            <li class="list-inline-item dropdown">
                                                <a class="dropdown-toggle font-size-18 px-2" href="#"
                                                   role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    @if($t->status == 'Okunmadı')<a class="dropdown-item" href="{{url('Panel/Ticket-Answer').'/'.$t->uuid}}">Cevapla</a>@endif
                                                    @if($t->status == 'Cevaplandı')<a class="dropdown-item" href="{{url('Panel/Ticket-Answer-History').'/'.$t->uuid}}">Mesaj Detaylari</a>@endif
                                                </div>
                                            </li>
                                        </ul>
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
    @section('scripts')
        <!-- Required datatable js -->
        <script src="{{ URL::asset('public/build/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('public/build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ URL::asset('public/build/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ URL::asset('public/build/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ URL::asset('public/build/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('public/build/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ URL::asset('public/build/libs/pdfmake/build/vfs_fonts.js') }}"></script>
        <script src="{{ URL::asset('public/build/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ URL::asset('public/build/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ URL::asset('public/build/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

        <script src="{{ URL::asset('public/build/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ URL::asset('public/build/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ URL::asset('public/build/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ URL::asset('public/build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

        <!-- Datatable init js -->
        <script src="{{ URL::asset('public/build/js/pages/datatables.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('public/build/js/app.js') }}"></script>
    @endsection

    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('public/build/js/app.js') }}"></script>
@endsection
