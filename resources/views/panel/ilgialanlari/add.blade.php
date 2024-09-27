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
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ilgi Alanlari</h5>

                        <form action="{{route('addInterestPost')}}" method="post" enctype="multipart/form-data">@csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="text" id="floatingFirstnameInput"
                                               placeholder="Enter Your First Name">
                                        <label for="floatingFirstnameInput">Metin</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">


                            <div class="my-3">
                                <label for="customFile"><h5 class="card-title">Logo</h5></label>
                                <input placeholder='&#xf02b;' name="logo" type="file" class="form-control" id="customFile">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('public/build/js/app.js') }}"></script>
@endsection
