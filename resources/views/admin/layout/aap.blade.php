<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Inbox</title>

    <!-- Fontfaces CSS-->
 @include('admin.layout.css')

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
       @include('admin.layout.header')
        <!-- END HEADER MOBILE-->
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">

                    <li >
                        <a  href="/_admin/dashboard">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>

                    <li >
                        <a  href="category">
                            <i class="fas fa-tachometer-alt"></i>Category</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

        <!-- MENU SIDEBAR-->
        @include('admin.layout.sidber')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->



            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        @yield('cantent')

            </div>
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    </div>
@include('admin.layout.js')

</body>

</html>
<!-- end document-->
