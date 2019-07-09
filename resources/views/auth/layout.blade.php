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


    <title>Test System</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="/dashboard/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/icofont/css/icofont.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/dashboard/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dashboard/css/style.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>

<body class="log-body">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P58GJH3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="log-wrap">
        <div class="log-container">
            <div class="log-logo">
                <!-- <a href="/"><img src="/dashboard/images/logo.png" class="d-inline-block align-middle logo-large" alt="..." width="100"></a> -->
            </div>

            @if(session('message'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-{{session('message')[0]}} alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{session('message')[1]}}
                        </div>
                    </div>
                </div>
            @endif
            
           @yield('content')
        </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js "></script>
    <!-- Tether does not exist in public folder. added popper.min.js by shakil -->
    <!-- <script src="/dashboard/plugins/bootstrap/js/tether.min.js "></script> -->    
    <script src="/website/plugins/popper/popper.min.js"></script>
    <script src="/dashboard/plugins/bootstrap/js/bootstrap.min.js "></script>

    <script src="/dashboard/js/script.js "></script>
</body>

</html>
