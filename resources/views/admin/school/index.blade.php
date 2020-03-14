@extends('dashboards.layout')

@section('menu')
    @include('admin.sidemenu')
@stop

@section('content-header')
<div class="page-header-content row">
    <div class="page-header-meta">
        <div class="page-header-cell">
            <h1 class="title">{{$title ?? ''}} @if(isset($union)) ({{$union->name}} Union) @endif </h1>
            <div class="title-sub">
            </div>
        </div>
    </div>
    @if(Sentinel::getUser()->phone == 'superadmin')
        <div class="page-header-meta">
        	<div class="page-header-cell">
    	      	<ul class="page-header-meta-list">
    	        	<li>
    	            	<a href="/admin/panel/union/{{$union->id}}/school/create" class="btn btn-warning btn-round px-4 text-uppercase fs-14 font-weight-semibold letter-spacing-1 menu-button-update">Create School</a>
    	        	</li>
    	      	</ul>
        	</div>
      	</div>
    @endif
</div>
@stop

@section('content-body')
    @include('common/school/index')
@stop