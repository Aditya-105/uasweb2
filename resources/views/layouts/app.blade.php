<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/dt-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:23 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Admin Retina Photo</title>


    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="colorlib" />

    <link rel="icon" href="{{ asset('/image/logo-retina.png') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/admin/waves.min.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/sweetalert.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/icofont.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/component.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/datatables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/buttons.datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/responsive.bootstrap4.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/pages.css') }}">



</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo text-left">
                        <a href="{{ url('/') }}">
                            <img class="img-fluid mr-2" src="{{ asset('image/logo-retina.png') }}" style="width: 20%" alt="Theme-Logo" />
                            Retina Photo
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('image/logo-retina.png') }}" class="img-radius" alt="User-Profile-Image">
                                        <span>Admin</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="auth-sign-in-social.html">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">Menu</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="{{ $title == "Beranda" ? 'active' : '' }}">
                                        <a href="{{ url('home') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Beranda</span>
                                        </a>
                                    </li>
                                    <li class="{{ $title == "Profil" ? 'active' : '' }}">
                                        <a href="{{ url('profil') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                                            <span class="pcoded-mtext">Profil</span>
                                        </a>
                                    </li>
                                    <li class="{{ $title == "Paket" ? 'active' : '' }}">
                                        <a href="{{ url('paket') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-folder"></i></span>
                                            <span class="pcoded-mtext">Paket</span>
                                        </a>
                                    </li>
                                    <li class="{{ $title == "Portofolio" ? 'active' : '' }}">
                                        <a href="{{ url('portofolio') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-photo"></i></span>
                                            <span class="pcoded-mtext">Portofolio</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div class="pcoded-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

    <script type="text/javascript" src="{{ asset('js/admin/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/admin/waves.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/admin/slimscroll.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/admin/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/css-scrollbars.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/admin/sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/modal.js') }}"></script>

    <script src="{{ asset('js/admin/classie.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/admin/modaleffects.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('js/admin/jquery.datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/datatables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/datatables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/datatables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/responsive.bootstrap4.min.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('js/admin/data-table-custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/pcoded.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/vertical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/jquery.mcustomscrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/script.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="text/javascript"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{ asset('js/admin/rocket-loader.min.js') }}" data-cf-settings="|49" defer=""></script>
    <script>
        $(document).ready(function () {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-dark',
                },
                buttonsStyling: false
            }) 

            var flash = "{{ Session::has('sukses') }}";
            if (flash) {
                var pesan = "{{ Session::get('sukses') }}";
                swalWithBootstrapButtons.fire({
                    title: 'Sukses',
                    text: pesan,
                    icon: 'success',
                    confirmButtonText: 'OK'
                })
            }
        });
    </script>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/dt-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:26 GMT -->

</html>
