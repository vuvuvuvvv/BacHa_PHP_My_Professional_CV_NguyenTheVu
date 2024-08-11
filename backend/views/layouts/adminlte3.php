<?php
$frontendUrl = Params::$frontend;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../favicon.ico">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../adminlte3/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../adminlte3/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../adminlte3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../adminlte3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../adminlte3/plugins/daterangepicker/daterangepicker.css">
    <!-- jQuery -->
    <script src="../adminlte3/plugins/jquery/jquery.min.js"></script>
    <!-- swal 2  -->
    <link rel="stylesheet" href="../adminlte3/plugins/sweetalert2/sweetalert2.min.css">
    <script src="../adminlte3/plugins/sweetalert2/sweetalert2.min.js"></script>
     

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= $frontendUrl ?>" class="nav-link">Back to Homepage</a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../adminlte3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= (isset($user['fullname']) ? $user['fullname'] : "404 Notfound") ?></a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="javascript:void(0)" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Profile Management
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $frontendUrl ?>" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Homepage
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <?php require_once $web_content ?>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <footer class="main-footer">
            <strong>Copyright &copy; <?= date("Y") ?> <a href="https://adminlte.io">404 Notfound</a>.</strong> All rights reserved.
        </footer>
    </div>
    <script src="../adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../adminlte3/dist/js/adminlte.min.js"></script>
</body>

</html>