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
        <div class="d-lg-flex mb-4">
            <div class="w-100 user-chat mt-4 mt-sm-0 card mb-0">
                <div class="card-body">
                    <div class="pb-3 user-chat-border">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <h5 class="font-size-15 text-uppercase mb-1 text-truncate">{{$creator->user->name}} </h5>
                            </div>
                            <div class="col-md-8 col-6">
                                <ul class="list-inline user-chat-nav text-end mb-0">
                                    <li class="list-inline-item d-inline-block d-sm-none">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </div>
                                    </li>

                                    <li class="list-inline-item m-0 d-none d-sm-inline-block">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-cog"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Profile</a>
                                                <a class="dropdown-item" href="#">Clear chat</a>
                                                <a class="dropdown-item" href="#">Muted</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="chat-conversation py-3">
                        <ul class="list-unstyled mb-0 pe-3" data-simplebar style="max-height: 630px;">

                            <li class="right">
                                <div class="conversation-list">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0">
                                                        {{$firstmessage}}
                                                    <div class="text-muted float-end">{{$creator->created_at}}</div>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @foreach($messages as $m)
                                @if($m->user_id==$user->id)
                                    <li class="right">
                                        <div class="conversation-list">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <div class="ctext-wrap">
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0">
                                                                {{$m->message}}
                                                            </p>
                                                            <div class=" mt-1 mb-0 text-end">{{$m->created_at}}</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @else
                                    <li class="">
                                        <div class="conversation-list mb-2">
                                            <div class="d-flex">
                                                <div class="flex-grow-0">
                                                    <div class="ctext-wrap">
                                                        <div class="ctext-wrap-content">
                                                            <div class="row">
                                                                <p class="mb-0">
                                                                    {{$m->message}}
                                                                </p>
                                                                <div class=" mt-1 mb-0 text-end">{{$m->created_at}}</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach


                        </ul>
                    </div>

                    <div class="px-lg-3">
                        <div class="pt-3">
                            <div class="row">
                                <form method="post" action="{{route('answer-ticket-form-user')}}" > @csrf
                                    <input type="hidden" name="id" value="{{$messages[0]->ticket_id}}">
                                    <div class="col">
                                        <div class="position-relative">
                                            <input name="message" type="text" class="form-control chat-input"
                                                   placeholder="Cevap Giriniz...">

                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit"
                                                class="btn mt-3 btn-primary chat-send w-md waves-effect waves-light"><span
                                                class="d-none d-sm-inline-block me-2">Gonder</span> <i
                                                class="mdi mdi-send"></i></button></form>
                            </div>
                        </div>
                    </div>
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
