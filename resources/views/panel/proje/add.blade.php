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
                            <h5 class="card-title">Yeni Proje Ekle</h5>
                            <button class="btn px-5 btn-primary" id="submitForm">Onayla</button>
                        </div>
                        <div class="chat-leftsidebar me-4">
                            <div class="card mb-0">
                                <div class="chat-leftsidebar-nav">
                                    <ul class="nav nav-pills nav-justified bg-light-subtle" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a href="#genelbilgi" data-bs-toggle="tab" aria-expanded="true" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                                <i class="ri-message-2-line font-size-20"></i>
                                                <span class="mt-2 d-none d-sm-block">Genel Bilgiler</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#isler" data-bs-toggle="tab" aria-expanded="false" class="nav-link active" aria-selected="true" role="tab">
                                                <i class="ri-group-line font-size-20"></i>
                                                <span class="mt-2 d-none d-sm-block">İşler</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#dosyalar" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                                                <i class="ri-contacts-book-2-line font-size-20"></i>
                                                <span class="mt-2 d-none d-sm-block">Dosyalar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <form id="projectForm" method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">

                            <div class="tab-content pt-4">
                                <div class="tab-pane" id="genelbilgi" role="tabpanel">
                                    <div>
                                        <h5 class="font-size-14 mb-3">Genel Bilgiler</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="proje_adi" id="floatingFirstnameInput" placeholder="Proje Adı Giriniz">
                                                    <label for="floatingFirstnameInput">Proje Adı</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active show" id="isler" role="tabpanel">
                                    <h5 class="font-size-14 mb-2">İşler</h5>
                                    <div class="card-body">
                                            @csrf
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>İş Adı</th>
                                                    <th >Başlangıç / Bitiş Tarihi</th>
                                                    <th>Katılımcı</th>
                                                    <th>Öncelik</th>
                                                    <th>Yeni Ekle</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody id="jobTableBody">
                                                <tr>
                                                    <td>
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" name="jobs[0][is_adi]" placeholder="İş Adı Giriniz.">
                                                            <label>İş Adı</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="date" name="jobs[0][baslangic_tarihi]">
                                                        <input class="form-control" type="date" name="jobs[0][bitis_tarihi]">

                                                    </td>
                                                    <td>
                                                        <select style='background-color:#264653'; multiple style="width: 100%" class="js-example-basic-single form-control" name="jobs[0][katilimcilar][departman][]">
                                                            <option selected value="-1">Departman Giriniz</option>
                                                            @foreach($departmanlar as $d) <option  value="{{$d->id}}">{{$d->baslik}}</option> @endforeach
                                                        </select>
                                                        <select  multiple style="width: 100%" class="js-example-basic-single form-control" name="jobs[0][katilimcilar][ekip][]">
                                                            <option selected value="-1">Ekip Giriniz</option>@foreach($ekipler as $d) <option  value="{{$d->id}}">{{$d->baslik}}</option> @endforeach
                                                        </select>
                                                        <select  multiple style="width: 100%" class="js-example-basic-single form-control" name="jobs[0][katilimcilar][kullanici][]">
                                                            <option selected value="-1">Kullanıcı Giriniz</option> @foreach($kullanicilar as $d) <option  value="{{$d->id}}">{{$d->name}}</option> @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-select" name="jobs[0][oncelik]">
                                                            <option value="" disabled selected>Öncelik Seçiniz</option>
                                                            <option value="1" style='background-color:#264653; color: white'>1</option>
                                                            <option value="2" style='background-color:#2a9d8f'>2</option>
                                                            <option value="3" style='background-color:#e9c46a'>3</option>
                                                            <option value="4" style='background-color:#f4a261'>4</option>
                                                            <option value="5" style='background-color:#e76f51'>5</option>
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
                                    </div>
                                </div>
                                <div class="tab-pane" id="dosyalar" role="tabpanel">
                                    <div>
                                        <h5 class="font-size-14 mb-2 mt-4">Dosyalar</h5>
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Dosya Adı</th>
                                                <th>Dosya</th>
                                                <th>Yeni Ekle</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody id="fileTableBody">
                                            <tr>
                                                <td>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="files[0][dosya_adi]" placeholder="Dosya Adı Giriniz.">
                                                        <label>Dosya Adı</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="file" name="files[0][dosya]">
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary dosyaYeniEkleBtn">Yeni Ekle</button>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            </form>

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
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="jobs[${jobCount}][is_adi]" placeholder="İş Adı Giriniz.">
                            <label>İş Adı</label>
                        </div>
                    </td>
                                                     <td>
                                                        <input class="form-control" type="date" name="jobs[${jobCount}][baslangic_tarihi]">
                                                        <input class="form-control" type="date" name="jobs[${jobCount}][bitis_tarihi]">

                                                    </td>
<td>
                                                        <select style='background-color:#264653'; multiple style="width: 100%" class="js-example-basic-single form-control" name="jobs[${jobCount}][katilimcilar][departman][]">
                                                            <option selected value="Ekip 3">Departman Giriniz</option>
                                                            @foreach($departmanlar as $d) <option  value="{{$d->id}}">{{$d->baslik}}</option> @endforeach
                    </select>
                    <select  multiple style="width: 100%" class="js-example-basic-single form-control" name="jobs[${jobCount}][katilimcilar][ekip][]">
                        <option selected value="-1">Ekip Giriniz</option>@foreach($ekipler as $d) <option  value="{{$d->id}}">{{$d->baslik}}</option> @endforeach
                    </select>
                    <select  multiple style="width: 100%" class="js-example-basic-single form-control" name="jobs[${jobCount}][katilimcilar][kullanici][]">
                        <option selected value="-1">Kullanıcı Giriniz</option> @foreach($kullanicilar as $d) <option  value="{{$d->id}}">{{$d->name}}</option> @endforeach
                    </select>
                </td>
<td>
<select class="form-select" name="jobs[${jobCount}][oncelik]">
                            <option value="" disabled selected>Öncelik Seçiniz</option>
                            <option value="1" style='background-color:#264653; color: white'>1</option>
                            <option value="2" style='background-color:#2a9d8f'>2</option>
                            <option value="3" style='background-color:#e9c46a'>3</option>
                            <option value="4" style='background-color:#f4a261'>4</option>
                            <option value="5" style='background-color:#e76f51'>5</option>
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
