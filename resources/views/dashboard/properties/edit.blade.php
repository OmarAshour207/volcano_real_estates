@push('admin_scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('click', '.save_and_continue', function(){
                var form_data = $('#property_form').serialize();
                console.log(form_data);
                $.ajax({
                    url: '{{ route('properties.update', $property->id) }}',
                    dataType: 'json',
                    type: 'post',
                    data: form_data,
                    beforeSend: function(){
                        $('.loading_save_c').removeClass('d-none');
                        $('.data_error').html('');
                        $('.error_message').addClass('d-none');
                        $('.success_message').html('').addClass('d-none');
                    }, success: function(data) {
                        if(data.status == true){
                            $('.loading_save_c').addClass('d-none');
                            $('.success_message').html('<h1>' + data.message + '</h1>').removeClass('d-none');
                        }
                    }, error: function(response){
                        $('.loading_save_c').addClass('d-none');
                        var error_li = '';
                        $.each(response.responseJSON.errors, function(index, value){
                            error_li += '<li>' + value + '</li>'
                        });
                        $('.data_error').html(error_li);
                        $('.error_message').removeClass('d-none');
                    }
                });
                return false;
            });
        });
    </script>
@endpush

@extends('dashboard.layouts.app')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="material-icons icon-20pt">home</i> {{ trans('admin.home') }} </a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('admin.edit') }}</li>
                        </ol>
                    </nav>
                    <h1 class="m-0"> {{ trans('admin.property') }} </h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="card card-form__body card-body">
                <form method="post" action="{{ route('properties.update', $property->id) }}" enctype="multipart/form-data" id="property_form">
                    @csrf

                    @method('put')
                    @include('dashboard.partials._errors')

                    <a href="#" class="btn btn-primary save"> {{ trans('admin.save') }} <i class="fas fa-save"></i> <i class="fa fa-spin fa-spinner loading_save d-none"></i> </a>
                    <a href="#" class="btn btn-success save_and_continue"> {{ trans('admin.save_and_continue') }} <i class="fas fa-save"></i> <i class="fa fa-spin fa-spinner loading_save_c d-none"></i>
                    </a>

                    <hr/>
                    <div class="alert alert-danger error_message d-none">
                        <ul class="data_error">

                        </ul>
                    </div>
                    <div class="alert alert-success success_message d-none">

                    </div>
                    <hr/>

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-property_info-tab" data-toggle="pill" href="#pills-property_info" role="tab" aria-controls="pills-property_info" aria-selected="true">
                                {{ trans('admin.property_info') }}
                                <i class="fa fa-info"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-property_setting-tab" data-toggle="pill" href="#pills-property_setting" role="tab" aria-controls="pills-property_setting" aria-selected="false">
                                {{ trans('admin.property_setting') }}
                                <i class="fa fa-cog"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-property_media-tab" data-toggle="pill" href="#pills-property_media" role="tab" aria-controls="pills-property_media" aria-selected="false">
                                {{ trans('admin.property_media') }}
                                <i class="far fa-image"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-property_seo-tab" data-toggle="pill" href="#pills-property_seo" role="tab" aria-controls="pills-property_seo" aria-selected="false">
                                {{ trans('admin.property_seo') }}
                                <i class="fa fa-info"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-other_data-tab" data-toggle="pill" href="#pills-other_data" role="tab" aria-controls="pills-other_data" aria-selected="false">
                                {{ trans('admin.other_data') }}
                                <i class="fa fa-database"></i>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        @include('dashboard.properties.tabs.property_info')
                        @include('dashboard.properties.tabs.property_settings')
                        @include('dashboard.properties.tabs.property_media')
                        @include('dashboard.properties.tabs.property_seo')
                        @include('dashboard.properties.tabs.other_data')
                    </div>

                    <hr/>
                    <a href="#" class="btn btn-primary save"> {{ trans('admin.save') }} <i class="fas fa-save"></i> </a>
                    <a href="#" class="btn btn-success save_and_continue"> {{ trans('admin.save_and_continue') }} <i class="fas fa-save"></i> <i class="fa fa-spin fa-spinner loading_save_c d-none"></i> </a>

                </form>
            </div>
        </div>
        <!-- // END drawer-layout__content -->
    </div>
@endsection
