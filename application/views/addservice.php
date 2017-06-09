<?php include('inc/header.php') ?>


<style>

    .button-list {
        overflow: hidden;
    }
</style>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <?php include('inc/top_bar.php') ?>


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?php $this->load->view('inc/leftbar'); ?>

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">


            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Add Service Details</h4>
                        </div>
                        <?php
/*                        $noti = $this->session->flashdata('msg');
                        if (isset($noti)) {
                            */?><!--

                            <div class="alert alert-success" role="alert">
                                <?/*= $this->session->flashdata('msg'); */?>
                            </div>

                        --><?php /*} */?>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">

                    <div class="col-sm-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-8">
                                    <?= form_open(); ?>
                                    <div class="row" id="details">
                                        <div class="col-lg-10 ">
                                            <fieldset class="form-group">
                                                <label>Service Name</label>
                                                <input type="text" name="sname[]" placeholder="Service Name" required="" autocomplete="off" data-parsley-id="34" class="form-control product_search " id="sname[]">
                                                <input type="hidden" name="pid[]"/>
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label>Amount</label>
                                                <input type="text" data-parsley-type="number" class="form-control"id="amount[]" required="" autocomplete="off" name="amount[]" placeholder="Amount" data-parsley-id="46">
                                            </fieldset>
                                        </div>

                                    </div>


                                </div>
                                <!-- end col -->

                            </div>
                            <!-- end row -->
                            <div class="button-list">
                                <button type="submit" class="btn btn-primary" style="float: right">Check Out</button>
                                <button type="button" class="btn btn-warning" id="add" style="float: left">Add</button>
                            </div>

                            <?php echo form_close(); ?>

                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <!-- end row -->
                <!-- end row -->
            </div>
            <!-- container -->
        </div>
        <!-- content -->
    </div>
    <!-- End content-page -->
    <?php include('inc/footer.php') ?>

    <script>
        var product =[];
        $(document).ready(function () {

            var wrapper = $("#details");
            var add_button = $("#add");
            var x = 1;
            $(add_button).click(function (e) {
                e.preventDefault();
                $(wrapper).append('<div class="col-lg-10 "> <fieldset class="form-group">' +
                    ' <input type="text" name="sname[]" required="" autocomplete="off"  placeholder="Service Name" class="form-control product_search " data-parsley-id="34"  />'
                     +
                    '</fieldset></div>'); //add input box});
                $(wrapper).append('<div class="col-lg-2 "> <fieldset class="form-group"> <input type="text" class="form-control" required="" data-parsley-type="number" autocomplete="off"   name="amount[]" placeholder="Amount"/> </fieldset> </div>'); //add input box2});
                $(wrapper).append('<div class="clearfix"></div>');

            });
        });


    </script>