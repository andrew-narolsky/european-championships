@extends('admin.master')

@section('title', 'New Season')

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
                            <a href="{{ route('competition.edit', $competition->id) }}" style="color: #fff">
                                <span>{{ $competition->name }}</span>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <span>{{ __('New Season') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ __('New Season') }}</div>
                            </div>
                            <div class="card-body pb-0">
                                <form action="{{ route('seasons.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group @error('year') has-error @enderror">
                                        <label>{{ __('Year') }}</label>
                                        <input type="text" class="form-control input-style" name="year" value="{{ old('year') }}">
                                        @error('year')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    @foreach($awards as $award)
                                        <div class="form-group">
                                            <label>{{ $award->name }}</label>
                                            <input type="hidden" class="form-control input-style" name="award[{{ $award->id }}][award_id]" value="{{ $award->id }}">
                                            <select @if(!$isResult) multiple="" @endif class="form-control" name="award[{{ $award->id }}][football_club_id][]">
                                                @foreach($footballClubs as $footballClub)
                                                    <option value="{{ $footballClub->id }}">{{ $footballClub->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endforeach
                                    @if($isResult)
                                        <div class="form-group">
                                            <label>{{ __('Result') }}</label>
                                            <input type="text" class="form-control input-style" name="result" value="{{ old('result') }}">
                                        </div>
                                    @endif
                                    <div class="form-group text-right">
                                        <input type="hidden" class="form-control input-style" name="competition_id" value="{{ $competition->id }}">
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
