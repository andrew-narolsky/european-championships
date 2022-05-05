@extends('admin.master')

@section('title', 'Football Clubs List')

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
                            <span>{{ __('Football Clubs List') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ __('Football Clubs List') }}</div>
                                <select id="select_country" class="form-control" name="country" style="width: 300px">
                                    <option value="0">{{ __('Select country') }}</option>
                                    @foreach($countries as $country)
                                        @if(old('countries') && in_array($country->id, old('countries')) || $country->id == $country_id)
                                            <option selected="" value="{{ $country->id }}">{{ $country->name }}</option>
                                        @else
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-body">
                                @include('admin.messages')
                                @if(!$footballClubs->count())
                                    <div class="card-sub">
                                        {{ __('Nothing found...') }}
                                    </div>
                                @else
                                    <table class="table mt-3">
                                        <thead>
                                            <tr>
                                                <th>{{ __('ID') }}</th>
                                                <th>{{ __('Flag') }}</th>
                                                <th>{{ __('Title') }}</th>
                                                <th>{{ __('Actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($footballClubs as $footballClub)
                                            <tr>
                                                <td>{{ $footballClub->id }}</td>
                                                <td>
                                                    <a href="{{ route('football-clubs', $footballClub->slug) }}">
                                                        <img src="{{ $footballClub->image }}" alt="{{ $footballClub->name }}" height="50">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('football-clubs', $footballClub->slug) }}">
                                                        {{ $footballClub->name }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('football-clubs.edit', $footballClub->id) }}" class="btn btn-primary  btn-xs edit page_block_delete">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <form action="{{ route('football-clubs.destroy', $footballClub->id) }}" method="POST">
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
                @if (!$country_id)
                    <div class="row">
                        <div class="col-auto ml-auto mr-auto pagination">
                            {{ $footballClubs->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
