<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <!-- App Favicon icon -->
    <link rel="shortcut icon" href="vendor/assets/images/favicon.ico">
    <!-- App Title -->
    <title>Ubold - Responsive Admin Dashboard Template</title>

    <link href="vendor/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="vendor/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="vendor/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="vendor/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="vendor/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="vendor/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="vendor/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="vendor/assets/js/modernizr.min.js"></script>

</head>


<body>

@include('common.header')

<div class="wrapper">
    <div class="container">

        @yield('content')

        <!-- Footer -->
        @include('common.footer')
        <!-- End Footer -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->



<!-- jQuery  -->
<script src="vendor/assets/js/jquery.min.js"></script>
<script src="vendor/assets/js/bootstrap.min.js"></script>
<script src="vendor/assets/js/detect.js"></script>
<script src="vendor/assets/js/fastclick.js"></script>
<script src="vendor/assets/js/jquery.slimscroll.js"></script>
<script src="vendor/assets/js/jquery.blockUI.js"></script>
<script src="vendor/assets/js/waves.js"></script>
<script src="vendor/assets/js/wow.min.js"></script>
<script src="vendor/assets/js/jquery.nicescroll.js"></script>
<script src="vendor/assets/js/jquery.scrollTo.min.js"></script>

<!-- App core js -->
<script src="vendor/assets/js/jquery.core.js"></script>
<script src="vendor/assets/js/jquery.app.js"></script>

</body>
</html>