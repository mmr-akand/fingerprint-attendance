@extends('dashboards.layout')

@section('menu')
    @include('admin.sidemenu')
@stop

@section('content-header')
<div class="page-header-content">
    <div class="page-header-meta">
        <div class="page-header-cell">
            <h3 class="title">{{$title ?? ''}}</h3>
            <div class="title-sub">
            </div>
        </div>
    </div>
</div>
@stop

@section('content-body')
    @include('common/school/create')
@stop