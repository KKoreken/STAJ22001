@extends('layouts.master')
@section('title')
    Yönetici Paneli
@endsection
@section('css')
    <link href="{{ URL::asset('public/build/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
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
                        <h5 class="card-title">Blog Postu</h5>

                        <form action="{{route('addBlogPost')}}" method="post" enctype="multipart/form-data">@csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input name='baslik' type="text" class="form-control" name="text" id="floatingFirstnameInput"
                                               placeholder="Enter Your First Name">
                                        <label for="floatingFirstnameInput">Başlık</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Kategori </label>
                                            <select name='kategori' class="form-control select2">
                                                @foreach($cats as $c)
                                                    <option value="{{$c->id}}" >{{$c->name}}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">Etiketler</label>

                                            <select name='etiket[]' class="select2 form-control select2-multiple" multiple="multiple"
                                                    data-placeholder="Choose ...">
                                                <option value="0">tag0</option>
                                                <option value="1">tag1</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="thumbnail2"><h5 class="card-title">Kapak</h5></label>
                                <div class="input-group">
                                  <span class="input-group-btn">
                                    <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
                                      <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                  </span>
                                    <input id="thumbnail2" class="form-control" type="text" name="filepath">
                                </div>
                                <div id="holder2" style="margin-top:15px;max-height:100px;"></div>
                                <div>
                                    <textarea id="elm1" name="text"></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="btn my-3 btn-primary w-md">Submit</button>
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
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <script>
            var route_prefix = "/filemanager";
        </script>
        <script src="{{ URL::asset('public/build/libs/tinymce/tinymce.min.js') }}"></script>

        <!-- init js -->
        <script src="{{ URL::asset('public/build/js/pages/form-editor.init.js') }}"></script>

        <script>
            {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
        </script>
        <script>
            $('#lfm').filemanager('image', {prefix: route_prefix});
            // $('#lfm').filemanager('file', {prefix: route_prefix});
        </script>

        <script>
            var lfm = function(id, type, options) {
                let button = document.getElementById(id);

                button.addEventListener('click', function () {
                    var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
                    var target_input = document.getElementById(button.getAttribute('data-input'));
                    var target_preview = document.getElementById(button.getAttribute('data-preview'));

                    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
                    window.SetUrl = function (items) {
                        var file_path = items.map(function (item) {
                            return item.url;
                        }).join(',');

                        // set the value of the desired input to image url
                        target_input.value = file_path;
                        target_input.dispatchEvent(new Event('change'));

                        // clear previous preview
                        target_preview.innerHtml = '';

                        // set or change the preview image src
                        items.forEach(function (item) {
                            let img = document.createElement('img')
                            img.setAttribute('style', 'height: 5rem')
                            img.setAttribute('src', item.thumb_url)
                            target_preview.appendChild(img);
                        });

                        // trigger change event
                        target_preview.dispatchEvent(new Event('change'));
                    };
                });
            };

            lfm('lfm2', 'file', {prefix: route_prefix});
        </script>

        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
        <style>
            .popover {
                top: auto;
                left: auto;
            }
        </style>
        <script>
            $(document).ready(function(){
                // Define function to open filemanager window
                var lfm = function(options, cb) {
                    var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
                    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
                    window.SetUrl = cb;
                };

                // Select2'yi başlat
                $('.select2').select2();
                $('.select2-multiple').select2();
            });
        </script>
        <script src="{{ URL::asset('public/build/libs/select2/js/select2.min.js') }}"></script>
@endsection
