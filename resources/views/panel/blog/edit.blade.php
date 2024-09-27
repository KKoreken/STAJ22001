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

                        <form action="{{route('editInterestPost')}}" method="post" enctype="multipart/form-data">@csrf
                            <input type="hidden" name="id" value="{{$item->id}}" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input value="{{$item->text}}" type="text" class="form-control" name="text" id="floatingFirstnameInput"
                                               placeholder="Enter Your First Name">
                                        <label for="floatingFirstnameInput">Metin</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-6"><div class="my-3">
                                        <label for="customFile"><h5 class="card-title">Logo</h5></label>
                                        <input placeholder='&#xf02b;' name="logo" type="file" class="form-control" id="customFile">
                                    </div></div>
                                <div class="col-md-12 col-lg-6 pt-3">
                                    <h5 class="card-title">Mevcut Logo</h5>
                                    <img src="{{url('storage/app/'.$item->logo)}}"  style="height: 30px; margin-top: 10px" /></div>

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
