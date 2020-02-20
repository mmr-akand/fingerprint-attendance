@extends('dashboards.layout')

@section('menu')
    @include('admin.sidemenu')
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
                <a href="/admin/panel/attendance/present">
                    <div class="card-block">
                        <h2 class="stat-card-number">{{$stats['present_percentage'] ?? ''}} %</h2>
                        <div class="stat-card-icon">
                            <i class="icofont icofont-people"></i>
                        </div>
                        <span class="stat-card-name">Present Percentage</span>
                    </div>
                </a>
            </div>
            <div class="card card-site card-lg card-statistics text-center mb-4 booking-cards">
                <a href="/admin/panel/attendance/absent">
                    <div class="card-block">
                        <h2 class="stat-card-number">{{$stats['absent_percentage'] ?? ''}} %</h2>
                        <div class="stat-card-icon">
                            <i class="icofont icofont-not-allowed"></i>
                        </div>
                        <span class="stat-card-name">Absent Percentage</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="card-group">
            <div class="card card-site card-lg card-statistics text-center mb-4 booking-cards">
                <a href="/admin/panel/attendance/absent">
                    <div class="card-block">
                        <h2 class="stat-card-number">{{$stats['on_leaves'] ?? ''}}</h2>
                        <div class="stat-card-icon">
                            <i class="icofont icofont-gift"></i>
                        </div>
                        <span class="stat-card-name">On Leave</span>
                    </div>
                </a>
            </div>
            <div class="card card-site card-lg card-statistics text-center mb-4 booking-cards">
                <a href="/admin/panel/attendance/late-arrival">
                    <div class="card-block">
                        <h2 class="stat-card-number">{{$stats['late_arrivals'] ?? ''}}</h2>
                        <div class="stat-card-icon">
                            <i class="icofont icofont-database-add"></i>
                        </div>
                        <span class="stat-card-name">Late Arrival</span>
                    </div>
                </a>
            </div>            
            <div class="card card-site card-lg card-statistics text-center mb-4 booking-cards">
                <a href="/admin/panel/attendance/early-departure">
                    <div class="card-block">
                        <h2 class="stat-card-number">{{$stats['early_departures'] ?? ''}}</h2>
                        <div class="stat-card-icon">
                            <i class="icofont icofont-database-remove"></i>
                        </div>
                        <span class="stat-card-name">Early Departure</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- <div class="row">            
            <div class="col-sm-12 col-md-6">
                <div class="card-group">
                    <div class="card card-site card-white card-lg header-border-0 mb-4">
                        <div class="card-header mb-2">
                            <h4 class="card-heading-title title-sm">যাত্রা</h4>
                        </div>
                        <ul class="static-lists">
                            <li>
                                <span>ঢাকা</span>
                                <span class="text-center">১০</span>
                                <span class="bullet-span justify-content-end">
                                    <span class="bullet-span-bol" style="background-color: rgba(255, 99, 132, 0.5)"></span>
                                </span>
                            </li>
                            <li>
                                <span>চিটাগাং</span>
                                <span class="text-center">০৮</span>
                                <span class="bullet-span justify-content-end">
                                    <span class="bullet-span-bol" style="background-color: rgba(54, 162, 235, 0.5)"></span>
                                </span>
                            </li>
                            <li>
                                <span>খুলনা</span>
                                <span class="text-center">০৫</span>
                                <span class="bullet-span justify-content-end">
                                    <span class="bullet-span-bol" style="background-color: rgba(255, 206, 86, 0.5)"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card card-site card-lg card-statistics text-center mb-4">
                        <div class="card-block">
                            <div class="chart-vehicle-holder">
                                <canvas id="chartCustomers" width="200" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card-group">
                    <div class="card card-site card-white card-lg header-border-0 mb-4">
                        <div class="card-header mb-2">
                            <h4 class="card-heading-title title-sm">সংক্ষিপ্ত গড়</h4>
                        </div>
                        <table class="table table-profile-avag">
                            <tbody>
                                <tr>
                                    <td><span class="tp-text">পাঁচ তারকা</span></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="tp-text">চার তারকা</span></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="tp-text">তিন  তারকা</span></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="tp-text">দুই তারকা</span></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="tp-text">এক  তারকা</span></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card card-site card-lg card-statistics text-center mb-4">
                        <div class="card-block text-center ">
                            <div class="avg-block">
                                <div>
                                    <h2>৪.২/৫</h2>
                                    <span class="text-lighter">বাবহারকারির প্রোফাইল পরিদর্শন গড়</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
     
    </div>
</div>
@stop

@section('footer')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script> -->
<!-- <script src="https://www.gstatic.com/firebasejs/5.7.2/firebase.js"></script> -->
<!-- <meta name="csrf-token" content="{{ csrf_token() }}"/> -->

<script>
    /*$(function() {
        var ctx = document.getElementById("chartVehicles");
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Truck", "Van", "Microbus"],
                datasets: [{
                    label: 'Vehicles',
                    data: [12, 19, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)'
                    ]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        });
    });

    $(function() {
        var ctx = document.getElementById("chartCustomers");
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Truck", "Van", "Microbus"],
                datasets: [{
                    label: 'Customers',
                    data: [12, 19, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)'
                    ]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        });
    });*/


   /* var config = {
        apiKey: "AIzaSyCpcCajfoD0LBT88TGAyzWUkAEgzOfBWWo",
        authDomain: "heavygari-web.firebaseapp.com",
        databaseURL: "https://heavygari-web.firebaseio.com",
        projectId: "heavygari-web",
        storageBucket: "heavygari-web.appspot.com",
        messagingSenderId: "422142305895"
    };
    firebase.initializeApp(config);
    const messaging = firebase.messaging();
    messaging.usePublicVapidKey("BIpR-a98ybgXNnbbPIxiCCghv63Nhur1xxuzZ4uUAZcz5QULJ5neu34BzxBIxQ-VnpkK9wOJYw7VHMfhC2hCzlI");

    messaging.requestPermission().then(function() {
        return messaging.getToken();
    }).then(function(token){
        updateTokenToHeavygari(token);
    })
    .catch(function(err) {
        updateTokenToHeavygari(null);
    });

    messaging.onTokenRefresh(function() {
        messaging.getToken().then(function(refreshedToken) {
            updateTokenToHeavygari(refreshedToken);
        }).catch(function(err) {
            updateTokenToHeavygari(null);
        });
    });

    function updateTokenToHeavygari(token){
        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
        $.post('update_fcm', { fcm_token: token }, function( response ) {
            if(response.success==true){
                //console.log('updated');
            }
        })
    }*/
    /*$('#myModal').modal('show');
    $('#modalClose').click(function(){
        $('#myModal').modal('toggle');
    })*/
</script> 
@stop