<div class="tab-pane fade show active" id="pills-property_info" role="tabpanel" aria-labelledby="pills-property_info-tab">
    <h3> {{ __('admin.property_info') }} </h3>
    <div class="form-group">
        <label for="ar_name"> {{ trans('admin.property') }} / {{ trans('admin.ar_name') }}</label>
        <input id="ar_name" name="ar_name" type="text" class="form-control" placeholder="{{ __('admin.ar_name') }}" value="{{ $property->ar_name }}">
    </div>

    <div class="form-group">
        <label for="en_name"> {{ trans('admin.property') }} / {{ trans('admin.en_name') }}</label>
        <input id="en_name" name="en_name" type="text" class="form-control" placeholder="{{ __('admin.en_name') }}" value="{{ $property->en_name }}">
    </div>

    <div class="form-group">
        <label for="desc"> {{ trans('admin.property') }} / {{ trans('admin.ar_description') }}</label>
        <textarea id="desc" name="ar_description" rows="4" class="form-control" placeholder="{{ trans('admin.property') }} / {{ trans('admin.ar_description') }}...">{{ $property->ar_description }}</textarea>
    </div>
    <div class="form-group">
        <label for="desc"> {{ trans('admin.property') }} / {{ trans('admin.en_description') }}</label>
        <textarea id="desc" name="en_description" rows="4" class="form-control" placeholder="{{ trans('admin.property') }} / {{ trans('admin.en_description') }}...">{{ $property->en_description }}</textarea>
    </div>
</div>

