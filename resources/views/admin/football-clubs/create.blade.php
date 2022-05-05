@extends('admin.master')

@section('title', 'New Football Club')

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
                            <a href="{{ route('football-clubs.index') }}" style="color: #fff">
                                <span>{{ __('Football Clubs List') }}</span>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <span>{{ __('New Football Club') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ __('New Football Club') }}</div>
                            </div>
                            <div class="card-body pb-0">
                                <form action="{{ route('football-clubs.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group @error('name') has-error @enderror">
                                        <label>{{ __('Name') }}</label>
                                        <input type="text" class="form-control input-style" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group @error('name') has-error @enderror">
                                        <label>{{ __('Founded') }}</label>
                                        <input type="text" class="form-control input-style" name="founded" value="{{ old('founded') }}">
                                        @error('founded')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('Destroyed') }}</label>
                                        <input type="text" class="form-control input-style" name="destroyed" value="{{ old('destroyed') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('Old names') }}</label>
                                        <input type="text" class="form-control input-style" name="old_names" value="{{ old('old_names') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('Notice') }}</label>
                                        <textarea class="form-control ckeditor" id="ckeditor" name="notice" rows="3">{{ old('notice') }}</textarea>
                                    </div>
                                    <div class="form-group @error('countries') has-error @enderror">
                                        <label>{{ __('Countries') }}</label>
                                        <select multiple="" class="form-control" name="countries[]">
                                            @foreach($countries as $country)
                                                @if(old('countries') && in_array($country->id, old('countries')) || $country->id == $country_id)
                                                    <option selected="" value="{{ $country->id }}">{{ $country->name }}</option>
                                                @else
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('countries')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('Logo') }}</label>
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-success btn-style mt-4">{{ __('Create') }}</button>
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
