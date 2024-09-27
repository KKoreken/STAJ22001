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
                        <div class="d-flex mb-4 justify-content-between" >
                            <h5 class="card-title ">Ekip Düzenle - Ekip Adı</h5>
                            <button class="btn px-5 btn-primary">Onayla</button>
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
                                            <a href="#uyeler" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" role="tab">
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
                                                    <input value="Ekip Adı" type="text" class="form-control" name="proje_adi" id="floatingFirstnameInput" placeholder="Proje Adı Giriniz">
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
                                <div class="tab-pane" id="uyeler" role="tabpanel">
                                    <h5 class="font-size-14 mb-2">İşler</h5>
                                    <div class="card-body">
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Ad Soyad</th>
                                                <th>Başlangıç Tarihi</th>
                                                <th>Toplam İş</th>
                                                <th>Devam Eden İş</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Ad Soyad</td>
                                                <td>01.01.2020</td>
                                                <td>123</td>
                                                <td>123</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                                                İşlemler <i class="mdi mdi-dots-vertical"></i>
                                                            </button>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end " style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-40px, 30px, 0px);" data-popper-placement="bottom-end">
                                                            <a class="dropdown-item" href="#">İncele</a>
                                                            <a class="dropdown-item" href="{{route('panel-project-edit',['id'=>1])}}">Düzenle</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Ekipten Çıkart</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-floating mb-3">
                                                                Yeni Kullanıcı Ekle
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span  style="width: 100%" class="badge badge-soft-info font-size-12">
                                                        <select multiple style="width: 100%" class="js-example-basic-single" name="state">
                                                            <option selected    >Kullanıcı Seçiniz</option>
                                                          <option value="AL">Kullanıcı 1</option>
                                                          <option value="AL">Kullanıcı 2</option>
                                                          <option value="AL">Kullanıcı 3</option>

                                                        </select>
                                                    </span>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
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
                $('.js-example-basic-single').select2();
            });
        </script>
@endsection
