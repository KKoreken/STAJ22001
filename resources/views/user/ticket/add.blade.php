@extends('layouts.master-without-nav')
@section('title')
    Anasayfa
@endsection
@include('layouts.usertopbar')
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('public/build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('public/build/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('public/build/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('public/build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('page-title')
    Ticketlarım
@endsection
@section('body')
    <body data-sidebar="colored">
    @endsection
    @section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Ticket Olustur</h4>
                        <form action="{{route('add-ticket-post')}}" method="post"> @csrf

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
                                                    <input name="title" type="text" class="form-control"
                                                           id="basicpill-firstname-input">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="category">Kategori</label>
                                                    <select class="form-control" name="category" id="category">
                                                        @foreach($categories as $c)
                                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="labels">Etiket</label>
                                                    <select multiple class="form-control" name="labels[]" id="labels">
                                                        @foreach($labels as $c)
                                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <div class="tab-pane" id="company-document">
                                    <div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="message">Mesaj</label>
                                                        <textarea id="message" name="message" class="form-control" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basicpill-companyuin-input">Öncelik</label>
                                                        <select class="form-control" name="priority" id="priority">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
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
                                                    <h5>Ticket Hazir</h5>
                                                    <button class="btn btn-primary" type="submit">Gonder</button>
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
    @endsection
    @section('scripts')
        <!-- twitter-bootstrap-wizard js -->
        <script src="{{ URL::asset('public/build/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>

        <script src="{{ URL::asset('public/build/libs/twitter-bootstrap-wizard/prettify.js') }}"></script>

        <!-- form wizard init -->
        <script src="{{ URL::asset('public/build/js/pages/form-wizard.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('public/build/js/app.js') }}"></script>
@endsection
