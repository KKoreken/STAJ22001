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
                        <div class="d-flex mb-4 justify-content-between">
                            <h5 class="card-title">Yeni Ekip Ekle</h5>
                            <button class="btn px-5 btn-primary" id="submitForm">Onayla</button>
                        </div>
                        <div class="chat-leftsidebar me-4">
                            <div class="card mb-0">
                                <div class="chat-leftsidebar-nav">
                                    <ul class="nav nav-pills nav-justified bg-light-subtle" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a href="#genelbilgi" data-bs-toggle="tab" aria-expanded="true" class="nav-link active" aria-selected="false" role="tab" tabindex="-1">
                                                <i class="ri-message-2-line font-size-20"></i>
                                                <span class="mt-2 d-none d-sm-block">Genel Bilgiler</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#isler" data-bs-toggle="tab" aria-expanded="false" class="nav-link " aria-selected="true" role="tab">
                                                <i class="ri-group-line font-size-20"></i>
                                                <span class="mt-2 d-none d-sm-block">Ekip Üyeleri</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-content pt-4">
                                <div class="tab-pane active show" id="genelbilgi" role="tabpanel">
                                    <div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="proje_adi" id="floatingFirstnameInput" placeholder="Proje Adı Giriniz">
                                                    <label for="floatingFirstnameInput">Ekip Adı</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <select name="" id="floatingFirstnameInput" class="form-control">
                                                        <option value="">Departman 1</option>
                                                        <option value="">Departman 2</option>
                                                        <option value="">Departman 3</option>
                                                    </select>
                                                    <label for="floatingFirstnameInput">Departman</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="isler" role="tabpanel">
                                    <div class="card-body">
                                        <form id="projectForm" method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Kullanici</th>
                                                    <th>Yeni Ekle</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody id="jobTableBody">
                                                <tr>
                                                    <td>
                                                        <select class="form-select" name="jobs[0][oncelik]">
                                                            <option value="" disabled selected>Kullanici Seçiniz</option>
                                                            <option value="1" >1</option>
                                                            <option value="2" >2</option>
                                                            <option value="3" >3</option>
                                                            <option value="4" >4</option>
                                                            <option value="5" >5</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary isYeniEkleBtn">Yeni Ekle</button>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="{{ URL::asset('public/build/js/app.js') }}"></script>
        <script>
            $(document).ready(function() {
                var jobCount = 1;
                var fileCount = 1;

                $('.js-example-basic-single').select2();

                $(document).on('click', '.isYeniEkleBtn', function() {
                    var newRow = `
                <tr>
                    <td>
                        <select class="form-select" name="jobs[${jobCount}][oncelik]">
                            <option value="" disabled selected>Kullanici Seçiniz</option>
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                        </select>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary isYeniEkleBtn">Yeni Ekle</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger removeRowBtn">Sil</button>
                    </td>
                </tr>
            `;
                    $('#jobTableBody').append(newRow);
                    jobCount++;
                    $('.js-example-basic-single').select2();
                });

                $(document).on('click', '.removeRowBtn', function() {
                    $(this).closest('tr').remove();
                });

                $(document).on('click', '.dosyaYeniEkleBtn', function() {
                    var newRow = `
                <tr>
                    <td>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="files[${fileCount}][dosya_adi]" placeholder="Dosya Adı Giriniz.">
                            <label>Dosya Adı</label>
                        </div>
                    </td>
                    <td>
                        <input class="form-control" type="file" name="files[${fileCount}][dosya]">
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary dosyaYeniEkleBtn">Yeni Ekle</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger removeFileRowBtn">Sil</button>
                    </td>
                </tr>
            `;
                    $('#fileTableBody').append(newRow);
                    fileCount++;
                });

                $(document).on('click', '.removeFileRowBtn', function() {
                    $(this).closest('tr').remove();
                });

                $('#submitForm').click(function() {
                    $('#projectForm').submit();
                });
            });
        </script>
@endsection
