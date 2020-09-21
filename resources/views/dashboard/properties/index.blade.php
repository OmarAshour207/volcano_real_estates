@extends('dashboard.layouts.app')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="material-icons icon-20pt">home</i> {{ trans('admin.home') }} </a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('admin.properties') }}</li>
                        </ol>
                    </nav>
                    <h1 class="m-0"> {{ trans('admin.properties') }} </h1>
                </div>
                <a href="{{ route('properties.create') }}" class="btn btn-success ml-3">{{ trans('admin.create') }} <i class="material-icons">add</i></a>
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="card">
                <div class="table-responsive" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                    <table class="table mb-0 thead-border-top-0 table-striped">
                        <thead>
                        <tr>

                            <th style="width: 18px;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#companies" id="customCheckAll">
                                    <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                </div>
                            </th>

                            <th style="width: 30px;" > {{ trans('admin.id') }} </th>
                            <th style="width: 40px;"> {{ trans('admin.ar_name') }} </th>
                            <th style="width: 40px;"> {{ trans('admin.en_name') }} </th>
                            <th style="width: 40px;"> {{ trans('home.type') }} </th>
                            <th style="width: 40px;"> {{ trans('admin.area') }} </th>
                            <th style="width: 40px;"> {{ trans('admin.status') }} </th>
                            <th style="width: 40px;"> {{ trans('admin.price') }} </th>
                            <th style="width: 40px;"> {{ trans('admin.state') }} </th>
                            <th style="width: 120px;" >{{ trans('admin.image') }}</th>
                            <th style="width: 30px;" > {{ trans('admin.action') }} </th>
                        </tr>
                        </thead>
                        <tbody class="list" id="companies">
                        @if($properties->count() > 0)
                            @foreach($properties as $index => $property)
                                <tr>
                                    <td class="text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_20">
                                            <label class="custom-control-label" for="customCheck1_20"><span class="text-hide">Check</span></label>
                                        </div>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="badge badge-soft-dark"> {{ $index+1 }} </div>
                                    </td>

                                    <td style="width: 40px;">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                {{ $property->ar_name }}
                                            </div>
                                        </div>
                                    </td>

                                    <td style="width: 40px;">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                {{ $property->en_name }}
                                            </div>
                                        </div>
                                    </td>

                                    <td style="width: 40px;">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                @if ($property->type == 1)
                                                    {{ __('home.property') }}
                                                @elseif ($property->type == 2)
                                                    {{ __('home.villa') }}
                                                @else
                                                    {{ __('admin.chalet') }}
                                                @endif
                                            </div>
                                        </div>
                                    </td>

                                    <td style="width: 40px;">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                {{ $property->area }} {{ __('home.sqft') }}
                                            </div>
                                        </div>
                                    </td>

                                    <td style="width: 40px;">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                {{ $property->status == 0 ? __('admin.rent') : __('home.sale') }}
                                            </div>
                                        </div>
                                    </td>

                                    <td style="width: 40px;">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                {{ $property->price }} {{ __('home.le') }}
                                            </div>
                                        </div>
                                    </td>

                                    <td style="width: 40px;">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                @php
                                                    $name = session('lang') . '_name';
                                                @endphp
                                                {{ $property->state->$name }}
                                            </div>
                                        </div>
                                    </td>

                                    <td style="width:120px" class="text-center">
                                        <img src="{{ $property->property_image }}" style="width: 120px; height: 50px">
                                    </td>

                                    <td>
                                        <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-sm btn-link">
                                            <i class="fa fa-edit fa-2x"></i>
                                        </a>
                                        <form action="{{ route('properties.destroy', $property->id) }}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $properties->appends(request()->query())->links() }}
                        @else
                            <h1> {{ trans('admin.no_records') }} </h1>
                        @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- // END drawer-layout__content -->
    </div>
@endsection
