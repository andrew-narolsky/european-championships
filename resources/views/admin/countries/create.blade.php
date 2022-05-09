@extends('admin.master')

@section('title', 'New Country')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5 text-right">
                    <ul class="breadcrumbs" style="color: #fff">
                        <li class="nav-home">
                            <a href="{{ route('admin') }}" style="color: #fff">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-home">
                            <a href="{{ route('countries.index') }}" style="color: #fff">
                                <span>{{ __('countries.countries_list') }}</span>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <span>{{ __('countries.new_country') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ __('countries.new_country') }}</div>
                            </div>
                            <div class="card-body pb-0">
                                <form action="{{ route('countries.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group @error('name') has-error @enderror">
                                        <label>{{ __('countries.name') }}</label>
                                        <input type="text" class="form-control input-style" name="name" value="{{ old('name') }}">
                                        @error('name')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('countries.notice') }}</label>
                                        <textarea class="form-control ckeditor" id="ckeditor" name="notice" rows="3">{{ old('notice') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('countries.competition_types') }}</label>
                                        <select multiple="" class="form-control" name="competition_types[]">
                                            @foreach($competitionTypes as $competitionType)
                                                <option value="{{ $competitionType->id }}">{{ $competitionType->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('countries.flag') }}</label>
                                        <input type="file" name="flag" class="form-control-file">
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-success btn-style mt-4">{{ __('countries.create') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
