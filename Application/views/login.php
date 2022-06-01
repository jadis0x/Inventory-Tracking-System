<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Otomasyon Giriş | Sahil Giyim</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= BOWER_PATH; ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BOWER_PATH; ?>/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BOWER_PATH; ?>/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= CSS_PATH; ?>/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= PLUGIN_PATH; ?>/iCheck/square/blue.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= SITE_URL; ?>"><b>Sahil Giyim</b></a>
            <span style="font-weight: normal; font-size: 17px; display: block;">Takip Otomasyonu</span>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <br>
            <?php
            if (isset($_SESSION['statu'])) {
            ?>
                <p class="login-box-msg"><?= $_SESSION['statu']; ?></p>
            <?php
            }
            ?>
            <form action="<?= SITE_URL; ?>/login/send" method="post">
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="sifre" class="form-control" placeholder="Şifre">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Giriş Yap</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>

    <script src="<?= BOWER_PATH; ?>/jquery/dist/jquery.min.js"></script>
    <script src="<?= BOWER_PATH; ?>/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= PLUGIN_PATH; ?>/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>