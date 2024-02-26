<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
<meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
<meta name="author" content="ThemeSelect">
<title>@yield('content-title')</title>
<link rel="apple-touch-icon" href="{{asset('app-assets/images/favicon/apple-touch-icon-152x152.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/favicon/favicon-32x32.png')}}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- BEGIN: VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/data-tables/css/select.dataTables.min.css')}}">
<!-- END: VENDOR CSS-->
<!-- BEGIN: Page Level CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/vertical-menu-nav-dark-template/materialize.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/vertical-menu-nav-dark-template/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/data-tables.css')}}">
<!-- END: Page Level CSS-->
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/custom/custom.css')}}">
<!-- END: Custom CSS-->

<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('content-head')
