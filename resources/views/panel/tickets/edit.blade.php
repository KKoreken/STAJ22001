@extends('layouts.master')
@section('title')
    Yönetici Paneli
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('public/build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('public/build/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('public/build/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('public/build/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Ticket ID : {{$ticket->uuid}}</h4>
                        <form action="{{route('panel-edit-ticket-post')}}" method="post"> @csrf
                            <input type="hidden" name="id" value="{{$ticket->id}}">
                            <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav">
                                    <li class="nav-item wizard-border">
                                        <a href="#seller-details" class="nav-link" data-toggle="tab">
                                            <span class="step-number">1. Genel Bilgiler</span>
                                        </a>
                                    </li>
                                    <li class="nav-item wizard-border">
                                        <a href="#company-document" class="nav-link" data-toggle="tab">
                                            <span class="step-number">2. Detaylı Bilgiler</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#confirm-detail" class="nav-link" data-toggle="tab">
                                            <span class="step-number">3. Tamamla</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content twitter-bs-wizard-tab-content">

                                    <div class="tab-pane" id="seller-details">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="basicpill-firstname-input">Konu</label>
                                                    <input readonly value="{{$ticket->title}}" name="title" type="text" class="form-control"
                                                           id="basicpill-firstname-input">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="category">Kategori</label>
                                                    <select class="form-control" name="category" id="category">
                                                        @foreach($categories as $c)
                                                            <option @if($ticket->categories[0]->id == $c->id ) selected @endif value="{{$c->id}}">{{$c->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="labels">Etiket</label>
                                                    <select class="select2 form-control select2-multiple" multiple="multiple" name="labels[]" id="labels">
                                                        @foreach($labels as $c)
                                                            <option @foreach($ticket->labels as $l)@if($l->id == $c->id ) selected @endif @endforeach value="{{$c->id}}">{{$c->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="company-document">
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="priority">Öncelik</label>
                                                        <select class="form-control" name="priority" id="priority">
                                                            <option @if($ticket->priority=='1') selected @endif value="1">1</option>
                                                            <option @if($ticket->priority=='2') selected @endif value="2">2</option>
                                                            <option @if($ticket->priority=='3') selected @endif value="3">3</option>
                                                            <option @if($ticket->priority=='4') selected @endif value="4">4</option>
                                                            <option @if($ticket->priority=='5') selected @endif value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="statusselect">Durumu</label>
                                                        <select class="form-control d-inline-block" name="status" id="statusselect">
                                                            <option @if($ticket->status=='Cevaplandı') selected @endif value="Cevaplandı">Cevaplandı</option>
                                                            <option @if($ticket->status=='Cevaplanmadı') selected @endif value="Cevaplanmadı">Cevaplanmadı</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="is_resolved">Çözüldü Mü</label>
                                                        <select class="form-control" name="is_resolved" id="is_resolved">
                                                            <option @if($ticket->is_resolved=='0') selected @endif value="0">Hayır</option>
                                                            <option @if($ticket->is_resolved=='1') selected @endif value="1">Evet</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="is_locked">Kilitli Mi</label>
                                                        <select class="form-control" name="is_locked" id="is_locked">
                                                            <option @if($ticket->is_locked=='0') selected @endif value="0">Hayır</option>
                                                            <option @if($ticket->is_locked=='1') selected @endif value="1">Evet</option>                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="confirm-detail">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="text-center">
                                                    <div class="mb-4">
                                                        <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                    </div>
                                                    <div>
                                                        <h5>Ticket Güncellemesi Hazır</h5>
                                                        <button class="btn btn-primary" type="submit">Onayla</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </form>
                    </div>
                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                        <li class="previous"><a href="javascript: void(0);">Geri</a></li>
                        <li class="next"><a href="javascript: void(0);">Ileri</a></li>
                    </ul>
                </div>
                </form>
            </div>
        </div>
        </div>

        </div>
        <!-- end row -->
    @endsection    @section('scripts')
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
        <script src="{{ URL::asset('public/build/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>

        <script src="{{ URL::asset('public/build/libs/twitter-bootstrap-wizard/prettify.js') }}"></script>
        <script src="{{ URL::asset('public/build/js/app.js') }}"></script>
        <script src="{{ URL::asset('public/build/js/pages/form-wizard.init.js') }}"></script>
        <script src="{{ URL::asset('public/build/libs/select2/js/select2.min.js') }}"></script>

    @endsection

    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('public/build/js/app.js') }}"></script>
@endsection
