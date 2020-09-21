<div class="tab-pane fade" id="pills-property_setting" role="tabpanel" aria-labelledby="pills-property_setting-tab">
    <h3> {{ __('admin.property_setting') }} </h3>
    <hr/>

    <div class="form-group col-md-6 col-lg-6">
        <label for="type"> {{ trans('admin.property') }} / {{ trans('admin.type') }}</label>
        <select class="form-control select2" name="type">
            @php
                $types = [ __('admin.property'), __('admin.villa'), __('admin.chalet')];
            @endphp
            <option value=""> {{ __('admin.choose_type') }} </option>
            @for($i = 0;$i < count($types); $i++)
                <option value="{{ $i+1 }}" {{ ($i+1) == $property->type ? 'selected' : '' }}> {{ $types[$i] }} </option>
            @endfor
        </select>
    </div>

    <div class="form-group col-md-6 col-lg-6">
        <label for="area"> {{ trans('admin.property') }} / {{ trans('admin.area') }}</label>
        <input id="area" name="area" type="text" class="form-control" placeholder="{{ __('admin.area') }}" value="{{ $property->area }}">
    </div>

    <div class="form-group col-md-6 col-lg-6">
        <label for="status"> {{ trans('admin.property') }} / {{ trans('admin.status') }}</label>
        <select class="form-control select2" name="status">
            <option value=""> {{ __('admin.choose_status') }} </option>
            <option value="1" {{ $property->status == 1 ? 'selected' : '' }}> {{ __('admin.rent') }} </option>
            <option value="2" {{ $property->status == 2 ? 'selected' : '' }}> {{ __('admin.own') }} </option>
        </select>
    </div>

    <div class="form-group col-md-6 col-lg-6">
        <label for="price"> {{ trans('admin.property') }} / {{ trans('admin.price') }}</label>
        <input id="price" name="price" type="text" class="form-control" placeholder="{{ __('admin.price') }}" value="{{ $property->price }}">
    </div>

    <div class="form-group col-md-6 col-lg-6">
        <label for="ar_address"> {{ trans('admin.property') }} / {{ trans('admin.ar_address') }}</label>
        <input id="ar_address" name="ar_address" type="text" class="form-control" placeholder="{{ __('admin.ar_address') }}" value="{{ $property->ar_address }}">
    </div>
    <div class="form-group col-md-6 col-lg-6">
        <label for="en_address"> {{ trans('admin.property') }} / {{ trans('admin.en_address') }}</label>
        <input id="en_address" name="en_address" type="text" class="form-control" placeholder="{{ __('admin.en_address') }}" value="{{ $property->en_address }}">
    </div>

    <div class="form-group">
        <label for="place"> {{ trans('admin.property') }} / {{ trans('admin.place') }}</label>
        <select id="place" class="form-control select2" name="state_id">
            <option value=""> {{ __('admin.choose_location') }} </option>
            @php
                $name = session('lang') . '_name';
            @endphp
            @foreach($states as $state)
                <option value="{{ $state->id }}" {{ $state->id == $property->state_id ? 'selected' : '' }}> {{ $state->$name }} </option>
            @endforeach
        </select>
    </div>
</div>
