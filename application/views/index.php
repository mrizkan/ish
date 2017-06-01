
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="Rizkan" content="soft">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- App title -->
    <title>Ishra Auto Traders</title>

    <!-- App CSS -->
    <link href="<?= base_url() ?>css/style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.<?= base_url() ?>js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="<?= base_url() ?>js/modernizr.min.js"></script>

</head>


<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">

    <div class="account-bg">
        <div class="card-box m-b-0">
            <div class="text-xs-center m-t-20">
                <a href="index.html" class="logo">
                    <i></i>
                    <span>Ishra Auto Traders</span>
                </a>
            </div>
            <div class="m-t-30 m-b-20">
                <div class="col-xs-12 text-xs-center">

                    <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
                </div>

                <?= form_open('Welcome/pinsert'); ?>


                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-custom">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">
                                    Remember me
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group text-center m-t-30">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <!--<div class="form-group m-t-30 m-b-0">
                        <div class="col-sm-12">
                            <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                    </div>-->

                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
    <!-- end card-box-->



</div>
<!-- end wrapper page -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?= base_url() ?>js/jquery.min.js"></script>
<script src="<?= base_url() ?>js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="<?= base_url() ?>js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/detect.js"></script>
<script src="<?= base_url() ?>js/fastclick.js"></script>
<script src="<?= base_url() ?>js/jquery.blockUI.js"></script>
<script src="<?= base_url() ?>js/waves.js"></script>
<script src="<?= base_url() ?>js/jquery.nicescroll.js"></script>
<script src="<?= base_url() ?>js/jquery.scrollTo.min.js"></script>
<script src="<?= base_url() ?>js/jquery.slimscroll.js"></script>
<script src="plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="<?= base_url() ?>js/jquery.core.js"></script>
<script src="<?= base_url() ?>js/jquery.app.js"></script>

</body>
</html>