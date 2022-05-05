@extends('admin.master')

@section('title', 'Edit Country')

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
                                <span>{{ __('Countries List') }}</span>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <span>{{ __('Edit Country') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ __('Edit Country') }}</div>
                                <a href="{{ route('football-clubs.create', $country->id) }}" class="btn btn-success">
                                    <i class="fas fa-plus-circle"></i>
                                    {{ __('Add Football Club') }}
                                </a>
                            </div>
                            <div class="card-body pb-0">
                                @include('admin.messages')
                                <form action="{{ route('countries.update', $country->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group @error('name') has-error @enderror">
                                        <label>{{ __('Name') }}</label>
                                        <input type="text" class="form-control input-style" name="name" value="{{ $country->name }}">
                                        @error('name')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('Notice') }}</label>
                                        <textarea class="form-control ckeditor" id="ckeditor" name="notice" rows="3">{{ $country->notice }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('Competition Types') }}</label>
                                        <select multiple="" class="form-control" name="competition_types[]">
                                            @foreach($competitionTypes as $competitionType)
                                                @if($ids->contains($competitionType->id))
                                                    <option selected="" value="{{ $competitionType->id }}">{{ $competitionType->name }}</option>
                                                @else
                                                    <option value="{{ $competitionType->id }}">{{ $competitionType->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-6">
                                            @if($country->flag)
                                                <img src="{{ $country->flag }}" alt="{{ $country->name }}" height="50">
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            <label>{{ __('Flag') }}</label>
                                            <input type="file" name="new_flag" class="form-control-file">
                                        </div>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-success btn-style mt-4">{{ __('Update') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ __('Countries competition') }}</div>
                                <a href="{{ route('competition.create', $country->id) }}" class="btn btn-success">
                                    <i class="fas fa-plus-circle"></i>
                                    {{ __(' New competition') }}
                                </a>
                            </div>
                            <div class="card-body pb-0">
                                <div class="card-body">
                                    @if(!$competitions->count())
                                        <div class="card-sub">
                                            {{ __('Nothing found...') }}
                                        </div>
                                    @else
                                        <table class="table mt-3">
                                            <thead>
                                            <tr>
                                                <th>{{ __('ID') }}</th>
                                                <th>{{ __('Title') }}</th>
                                                <th>{{ __('Actions') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($competitions as $competition)
                                                <tr>
                                                    <td>{{ $competition->id }}</td>
                                                    <td>{{ $competition->name }}</td>
                                                    <td>
                                                        <a href="{{ route('competition.edit', $competition->id) }}" class="btn btn-primary  btn-xs edit page_block_delete">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <form action="{{ route('competition.destroy', $competition->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" onclick="return confirm('are you sure?')" href="{{ route('competition.destroy', $competition->id) }}" class="btn btn-danger  btn-xs edit page_block_delete">
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
