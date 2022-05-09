@extends('admin.master')

@section('title', 'New Competition')

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
                        <li class="nav-item">
                            <span>{{ __('competitions.new_competition') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ __('competitions.new_competition') }}</div>
                            </div>
                            <div class="card-body pb-0">
                                <form action="{{ route('competition.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group @error('name') has-error @enderror">
                                        <label>{{ __('competitions.name') }}</label>
                                        <input type="text" class="form-control input-style" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('competitions.country') }}</label>
                                        <select class="form-control" name="country_id">
                                            @foreach($countries as $country)
                                                @if($country->id == $country_id)
                                                    <option selected="" value="{{ $country->id }}">{{ $country->name }}</option>
                                                @else
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('competitions.competition_type') }}</label>
                                        <select class="form-control" name="competition_type_id">
                                            @foreach($competitionTypes as $competitionType)
                                                <option value="{{ $competitionType->id }}">{{ $competitionType->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-success btn-style mt-4">{{ __('competitions.create') }}</button>
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
