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
    <link rel="apple-touch-icon" sizes="180x180" href="/dashboard/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/dashboard/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/dashboard/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/dashboard/images/favicon/manifest.json">
    <link rel="mask-icon" href="/dashboard/images/favicon/safari-pinned-tab.svg" color="#ee334d">
    <meta name="theme-color" content="#ffffff">


    <title>Education Management & Information System</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="/dashboard/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/icofont/css/icofont.css">

    <link rel="stylesheet" href="/dashboard/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/bs-datetime/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="/dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="/dashboard/plugins/magnific/magnific-popup.css">

    <link rel="stylesheet" href="/dashboard/css/style.css">
    <link rel="stylesheet" href="/css/custom.css">

    @yield('header')

</head>

<body class="dashboard aside-navbar-uncollapse">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P58GJH3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <nav class="navbar navbar-base fixed-top navbar-toggleable-sm navbar-light">
        <div class="navbar-header">
            <button type="button" class="btn nav-toggle-btn navbar-toggle-left aside-toggler hidden-md-up">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{URL::asset('dashboard/images/logo.png')}}" height="28" class="d-inline-block align-middle" alt="">
            </a>
            <button type="button" class="btn nav-toggle-btn nav-more-toggle-btn hidden-md-up" data-toggle="collapse" data-target="#navbar-collapse-mobile" aria-expanded="false" aria-controls="navbar-collapse-mobile">
                <i class="ion-more"></i>
            </button>
        </div>
        <div class="collapse" id="navbar-collapse-mobile">
            <div class="navbar-collapse-mobile-row">
                <ul class="nav justify-content-end">
                                        
                </ul>
            </div>
        </div>
        <div class="collapse navbar-collapse container-fluid" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#" role="button" class="aside-toggler nav-link">
                        <span class="navbar-toggler-icon"></span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link nav-link-mail" href="#"><i class="icofont icofont-user-alt-3"></i></a>
                </li>
                <li class="nav-item dropdown">
                    
                </li>
            </ul>
        </div>
    </nav>

    <aside class="aside-navbar">
        <div class="aside-navbar-header hidden-sm-down">
            <a class="navbar-brand" href="/">
                <img src="{{URL::asset('dashboard/images/logo.png')}}" width="100" class="d-inline-block align-middle logo-large" alt="...">
                <img src="{{URL::asset('dashboard/images/logo.png')}}" width="60" class="d-inline-block align-middle logo-small" alt="...">
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
    </main>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <!-- Tether does not exist in public folder. added popper.min.js by shakil -->
    <!-- <script src="/dashboard/plugins/bootstrap/js/tether.min.js"></script> -->

    <script src="/website/plugins/popper/popper.min.js"></script>
    <script src="/dashboard/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="/dashboard/plugins/moment.min.js"></script>
    <script src="/dashboard/plugins/bs-datetime/js/bootstrap-datetimepicker.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="/dashboard/plugins/datatable/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>

    <script src="/dashboard/plugins/magnific/jquery.magnific-popup.min.js"></script>

    <script src="/dashboard/js/uploaded.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            
            //data tables
            $('#example').DataTable();

            // image popup
            $('.image-popup').magnificPopup({
                type: 'image'
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
                $('.datetimepick-only').datetimepicker();
            });
        });
    </script>

    @yield('footer')

    <script src="/dashboard/js/script.js"></script>
</body>

</html>
