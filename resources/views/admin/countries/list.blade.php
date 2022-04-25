@extends('admin.master')

@section('title', 'Countries List')

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
                            <span>{{ __('Countries') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ __('Countries') }}</div>
                                <a href="{{ route('countries.create') }}" class="btn btn-success">
                                    <i class="fas fa-plus-circle"></i>
                                    {{ __(' New country') }}
                                </a>
                            </div>
                            <div class="card-body">
                                @include('admin.messages')
                                @if(!$countries->count())
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
                                        @foreach($countries as $country)
                                            <tr>
                                                <td>{{ $country->id }}</td>
                                                <td>
                                                    <a href="{{ route('countries', $country->slug) }}">
                                                        <img src="{{ $country->flag }}" alt="{{ $country->name }}" height="50">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('countries', $country->slug) }}">
                                                        {{ $country->name }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-primary  btn-xs edit page_block_delete">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <form action="{{ route('countries.destroy', $country->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('are you sure?')" href="{{ route('countries.destroy', $country->id) }}" class="btn btn-danger  btn-xs edit page_block_delete">
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
                <div class="row">
                    <div class="col-auto ml-auto mr-auto pagination">
                        {{ $countries->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
