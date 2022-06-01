<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sahil Giyim Takip Otomasyonu | Panel</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= BOWER_PATH; ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BOWER_PATH; ?>/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BOWER_PATH; ?>/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= CSS_PATH; ?>/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= CSS_PATH; ?>/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?= BOWER_PATH; ?>/morris.js/morris.css">
    <link rel="stylesheet" href="<?= BOWER_PATH; ?>/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?= BOWER_PATH; ?>/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?= BOWER_PATH; ?>/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= PLUGIN_PATH; ?>/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        .main-sidebar {
            padding-top: 10px !important;
        }

        .main-header {
            border-bottom: 0 !important;
        }

        .user-footer {
            background-color: rgb(0 0 0 / 91%) !important;
        }

        .dropdown-menu {
            border: 1px solid #222 !important;
            background: #222 !important;
        }
    </style>
</head>

<body class="hold-transition skin-black-light sidebar-mini">
    <div class="wrapper">

        <header class="main-header">

            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a style="border-left: 0 !important;" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= IMG_PATH; ?>/default.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= $this->myuserinfo['ad']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?= IMG_PATH; ?>/default.png" class="img-circle" alt="User Image">

                                    <p>
                                        <?= $this->myuserinfo['ad']; ?>

                                    </p>
                                </li>

                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="<?= SITE_URL ?>/logout"><button class="pull-right btn btn-default">Çıkış Yap</button></a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>