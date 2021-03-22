<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $judul ?> | Sistem Ujian Online</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">

    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="container" style="margin-top: 180px; margin-bottom: 30px;">

        <div class="card col-5 mx-auto">
            <div class="card-body">

                <h3 class="text-center mt-0 m-b-15">
                    <a href="index.html" class="logo logo-admin"><img src="<?= base_url() ?>assets/images/logo.png" height="24" alt="logo"></a>
                </h3>

                <div class="p-2">
                    <?= $this->session->flashdata('message'); ?>
                    <form class="form-horizontal m-t-20" method="POST" action="<?= base_url('Auth') ?>">

                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="text" name="username" placeholder="Username">
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="password" name="password" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">M A S U K</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery  -->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/modernizr.min.js"></script>
    <script src="<?= base_url() ?>assets/js/waves.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.nicescroll.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>assets/js/app.js"></script>

</body>

</html>