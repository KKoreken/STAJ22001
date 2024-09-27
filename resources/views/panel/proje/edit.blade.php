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
                    <form action="{{route('panel-project-update')}}" method="post" enctype="multipart/form-data">@csrf
                        <input type="hidden" name="id" value="{{$proje->id}}">
                    <div class="card-body">
                        <div class="d-flex mb-4 justify-content-between" >
                            <h5 class="card-title ">Proje Düzenle - {{$proje->baslik}}</h5>
                            <button class="btn px-5 btn-primary">Onayla</button>
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
                                            <a href="#contact" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                                                <i class="ri-contacts-book-2-line font-size-20"></i>
                                                <span class="mt-2 d-none d-sm-block">Dosyalar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-content pt-4">
                                <div class="tab-pane" id="genelbilgi" role="tabpanel">
                                    <div>
                                        <h5 class="font-size-14 mb-3">Genel Bilgiler</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input value="{{$proje->baslik}}" type="text" class="form-control" name="baslik" id="baslik" placeholder="Enter Your First Name">
                                                    <label for="baslik">Proje Adı</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Durumu">Proje Durumu</label>
                                                <select name="durum" class="form-select">
                                                    <option @if($proje->durum =='0' ) selected @endif  value="0">Pasif</option>
                                                    <option @if($proje->durum =='1') selected @endif  value="1">Devam Ediyor</option>
                                                    <option @if($proje->durum =='2' ) selected @endif  value="2">Tamamlandı</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active show" id="isler" role="tabpanel">
                                    <h5 class="font-size-14 mb-2">İşler</h5>
                                    <div class="card-body">
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>İş Adı</th>
                                                <th>Başlangıç Tarihi</th>
                                                <th>Bitiş Tarihi</th>
                                                <th>Katılımcı</th>
                                                <th>Öncelik</th>
                                                <th>Durumu</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($proje->works as $work)
                                                <tr>
                                                    <td>{{$work->baslik}}</td>
                                                    <td>{{$work->baslangic_tarihi}}</td>
                                                    <td>{{$work->bitis_tarihi}}</td>
                                                    <td>
                                                        <div class="avatar-group">
                                                            @php $i=0; @endphp
                                                            @foreach($work->users as $user)
                                                                @if($i<2)
                                                                    <div class="avatar-group-item">
                                                                        <a href="{{route('panel-user-details',['id'=>$user->id])}}" class="d-inline-block">
                                                                            <img  data-bs-toggle="tooltip" data-bs-placement="top" title="{{$user->name}}" src="{{url('public/build/images/users/avatar-1.png')}}" alt="" class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                @php $i+=1; @endphp
                                                                @endif
                                                            @endforeach
                                                            @if($work->user_count>0)
                                                                <div class="avatar-group-item">
                                                                    <a href="#" class="d-inline-block">
                                                                        <div class="avatar-xs">

                                                            <span class="avatar-title rounded-circle bg-danger text-white font-size-16">
                                                                +{{$work->user_count}}
                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            @endif

                                                        </div>
                                                    </td>
                                                    <td><div style="background-color:#2a9d8f; color: white;" class="w-75  text-center fa-1x py-1" >{{$work->oncelik}}</div></td>
                                                    <td>
                                                        @switch($work->durum)
                                                            @case('0')
                                                                <span class="badge badge-soft-danger font-size-12">Pasif</span>
                                                                @break
                                                            @case('1')
                                                                <span class="badge badge-soft-info font-size-12">Devam Ediyor</span>
                                                                @break
                                                            @case('2')
                                                                <span class="badge badge-soft-success font-size-12">Tamamlandı</span>
                                                                @break
                                                        @endswitch
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <button type="button" class="btn btn-primary waves-effect waves-light">
                                                                    İşlemler <i class="mdi mdi-dots-vertical"></i>
                                                                </button>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end " style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-40px, 30px, 0px);" data-popper-placement="bottom-end">
                                                                <a class="dropdown-item" href="{{route('panel-work-details',['id'=>$work->id])}}">İncele</a>
                                                                <a class="dropdown-item" href="{{route('panel-work-edit',['id'=>$work->id])}}">Düzenle</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Sil</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                                <div class="tab-pane" id="contact" role="tabpanel">
                                    <h5 class="font-size-14 mb-2">Dosyalar</h5>

                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Dosya Adı</th>
                                            <th>Dosya Sahibi</th>
                                            <th>Eklenme Tarihi</th>
                                            <th>İşlem</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-floating mb-3">
                                                            <input name="dosyaAdi" type="text" class="form-control" id="Dosyaadi" placeholder="Dosya Adı Giriniz.">
                                                            <label for="Dosyaadi">Dosya Adı</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <input name="dosya" class="form-control" type="file">

                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        @foreach($proje->dosya as $dosya)
                                            <tr>
                                                <td><a href="{{url('storage/app/'.$dosya->path)}}"><i class="mdi mdi-file-document font-size-16 align-middle text-primary me-2"></i>
                                                        {{$dosya->name}}</a></td>
                                                <td>{{$dosya->user->name}}</td>
                                                <td>{{$dosya->created_at}}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                                                İşlemler <i class="mdi mdi-dots-vertical"></i>
                                                            </button>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end " style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-40px, 30px, 0px);" data-popper-placement="bottom-end">
                                                            <a class="dropdown-item" href="#">Sil</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                    </form>
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
