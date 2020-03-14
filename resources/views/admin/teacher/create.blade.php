@extends('dashboards.layout')

@section('menu')
    @include('admin.sidemenu')
@stop

@section('content-header')
<div class="page-header-content">
    <div class="page-header-meta">
        <div class="page-header-cell">
            <h1 class="title">{{$title ?? ''}} </h1>
            <div class="title-sub">
            </div>
        </div>
    </div>
</div>
@stop

@section('content-body')
    @include('common/teacher/create')
@stop