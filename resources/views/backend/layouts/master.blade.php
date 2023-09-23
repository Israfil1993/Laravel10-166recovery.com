<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Upcube - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{ asset('backend/assets') }}/images/favicon.ico">
    <link href="{{ asset('backend/assets') }}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets') }}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets') }}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body data-topbar="dark">
<div id="layout-wrapper">
   @include('backend.includes.header')
   @include('backend.includes.sidebar')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
      @yield('content')
            </div>
        </div>
  @include('backend.includes.footer')
    </div>
</div>
@include('backend.includes.scripts')
</body>
</html>
