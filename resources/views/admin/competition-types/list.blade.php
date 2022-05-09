@extends('admin.master')

@section('title', 'Competition Types')

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
                            <span>{{ __('competition_types.competition_types') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ __('competition_types.competition_types') }}</div>
                            </div>
                            <div class="card-body">
                                @if(!$competitionTypes->count())
                                    <div class="card-sub">
                                        {{ __('competition_types.nothing_found') }}
                                    </div>
                                @else
                                    <table class="table mt-3">
                                        <thead>
                                            <tr>
                                                <th>{{ __('competition_types.id') }}</th>
                                                <th>{{ __('competition_types.title') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($competitionTypes as $competitionType)
                                            <tr>
                                                <td>{{ $competitionType->id }}</td>
                                                <td>{{ $competitionType->name }}</td>
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
@endsection
