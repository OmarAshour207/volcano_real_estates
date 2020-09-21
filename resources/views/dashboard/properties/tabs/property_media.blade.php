
@push('admin_scripts')
<script type="text/javascript">
Dropzone.autoDiscover = false;
    $(document).ready(function () {
        $('#dropzonefileupload').dropzone({
            url: '{{ url("admin/upload/image/" . $property->id) }}',
            paramName:'file',
            autoDiscover: false,
            uploadMultiple: false,
            maxFiles:4,
            acceptedFiles: 'image/*',
            dictDefaultMessage: '{{ __("admin.upload_other_files") }}',
            dictRemoveFile: '<button class="btn btn-danger"> <i class="fa fa-trash"></i></button>',
            params: {
                _token: '{{ csrf_token() }}',
                width: 760,
                height: 390
            },
            addRemoveLinks:true,
            removedfile: function(file)
            {
                $.ajax({
                    dataType: 'json',
                    type: 'post',
                    url:'{{ url("admin/delete/image") }}',
                    data:{
                        _token: '{{ csrf_token() }}',
                        id: file.fid,
                    }
                });
                var fmock;
                return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement): void 0;
            },
            init: function(){
                    @foreach($property->files()->get() as $file)
                var mock = {
                        name: '{{ $file->original_name }}',
                        fid:'{{ $file->id }}',
                        size: '{{ $file->size }}',
                        type: 'jpg',
                    };
                this.emit('addedfile',mock);
                this.options.thumbnail.call(this,mock, '{{ Storage::url("public/" . $file->full_file) }}');
                $('.dz-progress').remove();
                @endforeach

                    this.on('sending', function(file, xhr, formData){
                    formData.append('fid','');
                    file.fid = '';
                });

                this.on('success', function(file, response){
                    file.fid = response.id;
                });

            }
        });

        $('#mainphoto').dropzone({
            url: '{{ url('admin/update/image/' . $property->id) }}',
            paramName:'image',
            autoDiscover: false,
            uploadMultiple: false,
            maxFiles: 1,
            acceptedFiles: 'image/*',
            dictDefaultMessage: '{{ __('admin.upload_photo') }}',
            dictRemoveFile: '<button class="btn btn-danger"> <i class="fa fa-trash center"></i></button>',
            params: {
                _token: '{{ csrf_token() }}',
                width: 760,
                height: 390
            },
            addRemoveLinks: true,
            removedfile:function (file) {
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    url: '{{ url('admin/remove/image/' . $property->id) }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                    }
                });
                var fmock;
                return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement): void 0;
            },
            init: function () {
                @if(!empty($property->image))
                    @php
                        $name = session('lang') . '_name';
                    @endphp
                    var mock = { name: '{{ $property->$name }}', size: '', type: 'jpg'};
                    this.emit('addedfile', mock);
                    this.options.thumbnail.call(this,mock, '{{ $property->property_image }}');
                    $('.dz-progress').remove();
                @endif

                this.on('sending', function(file, xhr, formData){
                    formData.append('fid','');
                    file.fid = '';
                });
                this.on("success", function (file, response) {
                    file.fid = response.id;
                })
            }
        });

    });

</script>
    <style>
        #mainphoto {
            width: 200px;
            height: 205px;
        }
    </style>
@endpush

    <div class="tab-pane fade" id="pills-property_media" role="tabpanel" aria-labelledby="pills-property_media-tab">
    <h3> {{ __('admin.property_media') }} </h3>
    <hr/>
    <h3> {{ trans('admin.main_photo') }} </h3>
    <div class="dropzone" id="mainphoto"></div>
    <div class="form-group">
        <input class="image_name" type="hidden" name="image" value="{{ $property->image }}">
    </div>
    <hr/>
    <h3> {{ trans('admin.other_files') }} </h3>
    <div class="dropzone" id="dropzonefileupload"></div>
</div>
