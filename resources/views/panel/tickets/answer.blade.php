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
                         Ticket Yanitla - ID : <span class="badge p-2 badge-soft-info text-primary">{{$ticket->uuid}}</span>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{route('answer-ticket-form')}}" > @csrf
                            <input type="hidden" name="id" value="{{$ticket->id}}">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="message">Mesaj</label>
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary my-3 w-md">Gonder</button>
                            </div>
                        </form>
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
