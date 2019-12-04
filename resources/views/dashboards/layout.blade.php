<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P58GJH3');</script>
    <!-- End Google Tag Manager -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Attendance Management</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> 
    <meta name="msapplication-TileColor" content="#ffffff"> 
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png"> 
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="/dashboard/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="/dashboard/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/icofont/css/icofont.css">    
    <link rel="stylesheet" href="/dashboard/plugins/bs-datetime/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/magnific/magnific-popup.css">
    <link rel="stylesheet" href="/dashboard/plugins/rating/css/star-rating.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/rating/themes/krajee-uni/theme.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/scrollbar/jquery.scrollbar.css">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet"> 
    <link rel="stylesheet" href="/dashboard/css/style.css">
    <link rel="stylesheet" href="/css/custom.css?v=138">

    @yield('header')

</head>

<body class="dashboard aside-navbar-uncollapse">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P58GJH3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <nav class="navbar navbar-base fixed-top navbar-expand-md navbar-light -is-mobile">

        <div class="navbar-header">
            <button type="button" class="btn nav-toggle-btn navbar-toggle-left aside-toggler d-block d-md-none">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <span>Attendance Management</span>
            </a>
            <div class="navbar-header-actions">   
                <button type="button" class="btn nav-toggle-btn nav-more-toggle-btn d-block d-md-none" data-toggle="collapse" data-target="#navbar-collapse-mobile" aria-expanded="false" aria-controls="navbar-collapse-mobile">
                    <i class="ion-more"></i>
                </button>
            </div>
        </div>
        <div class="collapse -collapse-mobile" id="navbar-collapse-mobile">
            <div class="navbar-collapse-mobile-row">
                <ul class="nav flex-column text-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">{{ Sentinel::getUser()->name}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ Sentinel::getUser()->phone}}</a>                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/session/logout">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="collapse navbar-collapse container-fluid" id="navbarNavDropdown">           
            <ul class="navbar-nav nav-asideToggler mr-auto">
                <li class="nav-item">
                    <a href="#" role="button" class="aside-toggler nav-link">
                        <span class="navbar-toggler-icon"></span>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav nav-users">
                
                <li class="nav-item">
                    <a class="nav-link nav-link-mail" href="#"><i class="icofont icofont-user-alt-3"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Sentinel::getUser()->name}}</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="nav-link booking-cards" href="#">{{ Sentinel::getUser()->phone}}</a>
                        <a class="nav-link booking-cards" href="/session/logout">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <aside class="aside-navbar aside-scrollable">
        <div class="aside-navbar-header hidden-sm-down">
            <a class="navbar-brand" href="/">
                <span width="120" class="d-inline-block align-middle logo-large" alt="...">Attendance Management</span>
                <span width="60" class="d-inline-block align-middle logo-small" alt="...">Attendance Management</span>
            </a>
        </div>
        <div class="aside-navbar-body">
            <div class="aside-navbar-content">
                @yield('menu')
            </div>
        </div>
        <div class="aside-navbar-footer"></div>
    </aside>

    <main class="main-content">
        <div class="container-fluid main-content-inner">
            <div class="page-header">
                @yield('content-header')
            </div>

            <div class="content-body">
                @if(session('message'))
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="alert alert-{{session('message')[0]}} alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{session('message')[1]}}
                            </div>
                        </div>
                    </div>
                @endif

                @yield('content-body')
            </div>
        </div>

        <footer class="footer container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <span class="copyright">Copyright is reserved by Boda upazila, Panchagarh.</span>
                </div>
            </div>
        </footer>
    </main>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="/dashboard/plugins/popper/popper.min.js"></script>
    <script src="/dashboard/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="/dashboard/plugins/moment.min.js"></script>
    <script src="/dashboard/plugins/bs-datetime/js/bootstrap-datetimepicker.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="/dashboard/plugins/datatable/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>

    <script src="/dashboard/plugins/magnific/jquery.magnific-popup.min.js"></script>

    <script src="/dashboard/plugins/rating/js/star-rating.min.js"></script>
    
    <script src="/dashboard/plugins/rating/themes/krajee-uni/theme.min.js"></script>
    <script src="/dashboard/plugins/scrollbar/jquery.scrollbar.min.js"></script>

    <script src="/dashboard/js/uploaded.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            jQuery('.aside-scrollable').scrollbar();
            $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            });
            //data tables
            $('#example').DataTable( {
                "ordering": false
            });

            //driver-payments-table data tables
            $('#driver-payments-table').DataTable( {
                "ordering": false
            } );


            //booking data tables
            $('#booking-table').DataTable( {
                "ordering": false
            } );

            //transaction data tables
            $('#transaction-table').DataTable( {
                "ordering": false
            } );

            // image popup
            $('.image-popup').magnificPopup({
                type: 'image'
            });

            $(function () {
                var nUserW = $('.nav-users').outerWidth(),
                    nUTotal = nUserW * 2,
                    navCollapseW = $('.navbar-collapse').outerWidth() - (nUTotal + 100);

                if ($(window).width() >= 768) {
                    $('.nav-asideToggler').css({
                        "width": nUserW
                    });
                    $('.searchbar-desktop .form-control').css({
                        "width": navCollapseW
                    });
                }
            });

            

            $('.btn-search-mobile').on('click', function(){
                $(this).closest('.navbar').find('.search-box-mobile').addClass('open');
            });
            $('.btn-searchbox-close').on('click', function(){
                $(this).closest('.navbar').find('.search-box-mobile').removeClass('open');
            });

            //Date Pickers
            $(function() {
                $('.datepick-only').datetimepicker({
                    format: 'YYYY-MM-DD'
                });
            });

            $(function() {
                $('.timepick-only').datetimepicker({
                    format: 'LT'
                });
            });

            $(function() {
                $('.datetimepick-only').datetimepicker({
                    format: 'DD/MM/YYYY h:mm A'
                });
            });

            $('.kv-uni-star').rating({
                theme: 'krajee-uni',
                filledStar: '&#x2605;',
                emptyStar: '&#x2606;'
            });
        });
    </script>

    @yield('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="/dashboard/js/utils.js"></script>
    <script src="/dashboard/js/script.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $('#paid').click(function() {
        if ($(this).is(':checked')) {
            $("#submitButton").prop('disabled', false);
          }
        }) 
        $('#paid').click(function() {
        if (!$(this).is(':checked')) {
            $("#submitButton").prop('disabled', true);
          }
        })
          
        });
    </script>
</body>

</html>
