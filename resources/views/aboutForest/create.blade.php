@extends('voyager::master')  

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <style type="text/css">
    .app-container.expanded .app-footer {
    left: 0;
}
</style>
@stop

@section('page_header')
@stop


@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i> Add About Forest
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create About Forest </h3>
                    </div>
                    <form method="post" id="checkout-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div>

                        <div class="panel-body">
                            <div class="form-group col-md-12" data-aos="">
                                <textarea class="form-control richTextBox" name="description" id="editer">
                                    {{$forest->description}}
                                </textarea>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <input type="submit" class="btn btn-primary">
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')

<script type="text/javascript">
    tinymce.init({
    selector: '#editer',
    height: 400,
    theme: 'modern',
    plugins: [
    'advlist media autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help image code'
    ],
    toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | fontsizeselect',
    toolbar2: '',

    fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
    image_advtab: true,
    file_picker_types: 'file image media',
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'about-forests.index');
        var token = $('[name="csrf-token"]').prop('content');
        xhr.setRequestHeader("X-CSRF-Token", token);
        xhr.onload = function() {
            var json;
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
            success(json.location);
        };
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        xhr.send(formData);
    },
    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/* audio/* video/*');
        input.onchange = function() {
            var file = this.files[0];

            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                // call the callback and populate the Title field with the file name
                cb(blobInfo.blobUri(), { title: file.name });
            };
        };

        input.click();
    }
  });
</script>
@stop