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
        Yonetici Girisi
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('kk/public/build/js/app.js') }}"></script>
@endsection
