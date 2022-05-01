@extends('admin.master')

@section('title', 'Update Competition')

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
                            <a href="{{ route('countries.edit', $country->id) }}" style="color: #fff">
                                <span>{{ $country->name }}</span>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <span>{{ __('Update Competition') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ __('New Competition') }}</div>
                            </div>
                            <div class="card-body pb-0">
                                <form action="{{ route('competition.update', $competition->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group @error('name') has-error @enderror">
                                        <label>{{ __('Name') }}</label>
                                        <input type="text" class="form-control input-style" name="name" value="{{ $competition->name }}">
                                        @error('name')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('Countries') }}</label>
                                        <select class="form-control" name="country_id">
                                            @foreach($countries as $country)
                                                @if($country->id == $competition->country_id)
                                                    <option selected="" value="{{ $country->id }}">{{ $country->name }}</option>
                                                @else
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('Competition Types') }}</label>
                                        <select class="form-control" name="competition_type_id">
                                            @foreach($competitionTypes as $competitionType)
                                                @if($competitionType->id == $competition->competition_type_id)
                                                    <option selected="" value="{{ $competitionType->id }}">{{ $competitionType->name }}</option>
                                                @else
                                                    <option value="{{ $competitionType->id }}">{{ $competitionType->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-success btn-style mt-4">{{ __('Save') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ $competition->name }}</div>
                                <a href="{{ route('seasons.create', $competition->id) }}" class="btn btn-success">
                                    <i class="fas fa-plus-circle"></i>
                                    {{ __(' New season') }}
                                </a>
                            </div>
                            <div class="card-body pb-0">
                                <div class="card-body">
                                    @if(!count($seasons))
                                        <div class="card-sub">
                                            {{ __('Nothing found...') }}
                                        </div>
                                    @else
                                        <table class="table mt-3">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Year') }}</th>
                                                    @foreach($awards as $award)
                                                        <th>{{ $award->name }}</th>
                                                    @endforeach
                                                    @if($isResult)
                                                        <th>{{ __('Result') }}</th>
                                                    @endif
                                                    <th>{{ __('Action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($seasons as $season)
                                                <tr>
                                                    <td>{{ $season['year'] }}</td>
                                                    @if (isset($season['winners']))
                                                        @foreach($season['winners'] as $winners)
                                                            <td>
                                                            @if(!empty($winners))
                                                                @foreach($winners as $key => $winner)
                                                                    {{ $winner['name'] }}
                                                                    @if(count($winners) != ($key + 1))
                                                                        {{ ',' }}
                                                                    @endif
                                                                @endforeach
                                                            @else
                                                                <span>-</span>
                                                            @endif
                                                            </td>
                                                        @endforeach
                                                    @endif
                                                    @if($isResult)
                                                        <th>{{ $season['result'] }}</th>
                                                    @endif
                                                    <td>
                                                        <a href="{{ route('seasons.edit', $season['id']) }}" class="btn btn-primary  btn-xs edit page_block_delete">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <form action="{{ route('seasons.destroy', $season['id']) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" onclick="return confirm('are you sure?')" class="btn btn-danger  btn-xs edit page_block_delete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
