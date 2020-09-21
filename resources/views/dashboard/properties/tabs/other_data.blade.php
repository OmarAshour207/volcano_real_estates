@push('admin_scripts')
    <script type="text/javascript">
        var x = 1;
        $(document).on('click', '.add_input', function(){
            var max_input = 10;
            if(x < max_input) {
                $('.input_tag').append(
                    '<div>' +
                    '<div class="col-md-6">'+
                        '<label for="input_key"> {{ __('admin.property') }} / {{ __('admin.input_key') }}</label>'+
                        '<input id="input_key" name="input_key[]" type="text" class="form-control" placeholder="{{ __('admin.input_key') }}">'+
                    '</div>'+
                    '<div class="col-md-6">'+
                        '<label for="input_value"> {{ __('admin.property') }} / {{ __('admin.input_value') }}</label>'+
                        '<input id="input_value" name="input_value[]" type="text" class="form-control" placeholder="{{ __('admin.input_value') }}">'+
                    '</div>'+
                    '<div class="clearfix"></div>'+
                    '<br>'+
                    '<a href="#" class="remove_input btn btn-danger"> <i class="fa fa-trash"></i> </a>'+
                    '</div>');
                x++;
            }
            if(x > max_input || x == max_input) {
                $('.add_input').hide();
            } else {
                $('.add_input').show();
            }
            return false;
        });
        $(document).on('click', '.remove_input', function(){
            $(this).parent('div').remove();
            x--;
            $('.add_input').show();
            return false;
        });
    </script>
@endpush
<div class="tab-pane fade" id="pills-other_data" role="tabpanel" aria-labelledby="pills-other_data-tab">
    <h3> {{ __('admin.other_data') }} </h3>
    <div class="input_tag col-md-12 col-lg-12 col-sm-12">
        @foreach($property->other_data()->get() as $other)
            <div>
                <div class="col-md-6">
                    <label for="input_key"> {{ trans('admin.property') }} / {{ trans('admin.input_key') }}</label>
                    <input id="input_key" name="input_key[]" type="text" class="form-control" placeholder="{{ __('admin.input_key') }}" value="{{ $other->data_key }}">
                </div>
                <div class="col-md-6">
                    <label for="input_value"> {{ trans('admin.property') }} / {{ trans('admin.input_value') }}</label>
                    <input id="input_value" name="input_value[]" type="text" class="form-control" placeholder="{{ __('admin.input_value') }}" value="{{ $other->data_value }}">
                </div>
                <div class="clearfix"></div>
                <br>
                <a href="#" class="remove_input btn btn-danger"> <i class="fa fa-trash"></i> </a>
            </div>
        @endforeach
    </div>
    <div class="clearfix"></div>
    <br>
    <a href="#" class="add_input btn btn-info"> <i class="fa fa-plus"></i> </a>
    <div class="clearfix"></div>
    <br>
</div>
