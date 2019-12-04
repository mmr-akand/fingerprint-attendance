@extends('dashboards.layout')

@section('menu')
    @include('adpeo.sidemenu')
@stop

@section('content-header')
<div class="page-header-content">
    <div class="page-header-meta">
        <div class="page-header-cell">
            <h1 class="title">{{$title ?? ''}}</h1>
            <div class="title-sub">
            </div>
        </div>
    </div>
</div>
@stop

@section('content-body')
<div class="row">
    <div class="col-sm-12">
        <div class="card-group">
            <div class="card card-site card-lg card-statistics text-center mb-4 booking-cards">
                <a href="/customer/panel/bookings?filter=ongoing">
                    <div class="card-block">
                        <h2 class="stat-card-number">343</h2>
                        <div class="stat-card-icon">
                            <i class="icofont icofont-university"></i>
                        </div>
                        <span class="stat-card-name">Total - Schools </span>
                    </div>
                </a>
            </div>
            <div class="card card-site card-lg card-statistics text-center mb-4 booking-cards">
                <a href="/customer/panel/bookings?filter=upcoming">
                    <div class="card-block">
                        <h2 class="stat-card-number">45</h2>
                        <div class="stat-card-icon">
                            <i class="icofont icofont-teacher"></i>
                        </div>
                        <span class="stat-card-name">Total Teachers</span>
                    </div>
                </a>
            </div>
            <div class="card card-site card-lg card-statistics text-center mb-4 booking-cards">
                <a href="/customer/panel/bookings?filter=open">
                    <div class="card-block">
                        <h2 class="stat-card-number">55</h2>
                        <div class="stat-card-icon">
                            <i class="icofont icofont-hand"></i>
                        </div>
                        <span class="stat-card-name">Present - Today </span>
                    </div>
                </a>
            </div>
            <div class="card card-site card-lg card-statistics text-center mb-4 booking-cards">
                <a href="/customer/panel/bookings?filter=completed">
                    <div class="card-block">
                        <h2 class="stat-card-number">333</h2>
                        <div class="stat-card-icon">
                            <i class="icofont icofont-not-allowed"></i>
                        </div>
                        <span class="stat-card-name">Absent - Today </span>
                    </div>
                </a>
            </div>            
            <div class="card card-site card-lg card-statistics text-center mb-4 booking-cards">
                <a href="/customer/panel/transactions">
                    <div class="card-block">
                        <h2 class="stat-card-number">555 টাকা </h2>
                        <div class="stat-card-icon">
                            <i class="icofont icofont-people"></i>
                        </div>
                        <span class="stat-card-name">Present Percentage</span>
                    </div>
                </a>
            </div>
        </div>     
    </div>
</div>
@stop