<div class="tab-pane fade" id="pills-property_seo" role="tabpanel" aria-labelledby="pills-property_seo-tab">
    <h3> {{ __('admin.property_seo') }} </h3>
    <div class="form-group">
        <label for="ar_meta"> {{ trans('admin.property') }} / {{ trans('admin.ar_meta_tag') }}</label>
        <input id="ar_meta" name="ar_meta" type="text" class="form-control" placeholder="{{ trans('admin.ar_meta_tag') }}" value="{{ $property->ar_meta }}">
    </div>
    <div class="form-group">
        <label for="en_meta"> {{ trans('admin.property') }} / {{ trans('admin.en_meta_tag') }}</label>
        <input id="en_meta" name="en_meta" type="text" class="form-control" placeholder="{{ trans('admin.en_meta_tag') }}" value="{{ $property->en_meta }}">
    </div>
</div>
