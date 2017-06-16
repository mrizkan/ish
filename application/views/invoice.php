<?php include('inc/header.php') ?>
<body class="fixed-left">

    <!-- Begin page -->
<div id="wrapper">

<?php include('inc/top_bar.php') ?>


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?php $this->load->view('inc/leftbar'); ?>

    </div>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="card-box">

                            <div class="panel-body">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3 class="logo">Ishra Auto Traders</h3>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12">

                                        <div class="pull-xs-left m-t-30">
                                            <address>
                                                <strong>Ishra Auto Traders</strong><br>
                                                472/a, Galle Road<br>Horethuduwa<br>
                                                Moratuwa.<br>
                                                <abbr class="icon-phone"></abbr> +94 766 767 418
                                            </address>
                                        </div>
                                        <div class="pull-xs-right m-t-30">
                                            <p><strong>Order Date: </strong><?php echo date("d/M/Y") ?></p>

                                            <p class="m-t-10"><strong>Bill Number: </strong> <span
                                                    class="label label-success">IAT-<?php echo $final_result['bill_id'] ?></span>
                                            </p>
                                            <!--<p class="m-t-10"><strong>Order ID: </strong> #123456</p>-->
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="m-h-50"></div>


                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="table-responsive">

                                            <table class="table m-t-30">
                                                <thead class="bg-faded">
                                                <tr>

                                                    <th>Product Name</th>
                                                    <th>Description</th>
                                                    <th>Unit Price</th>
                                                    <th>Quantity</th>

                                                    <th>Total</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php for ($r = 0; $r < $final_result['a']; $r++) { ?>
                                                    <tr>

                                                        <td><?php echo $final_result['proname'][$r] ?></td>
                                                        <td><?php echo $final_result['prodescription'][$r] ?></td>
                                                        <td><?php echo $final_result['uprice'][$r] ?></td>
                                                        <td><?php echo $final_result['qty'][$r] ?></td>
                                                        <td><?php echo $final_result['total'][$r] ?></td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-3">
                                        <!--<p class="text-xs-right"><b>Sub-total:</b> Rs. <?php /*echo $final_result['subtotal']*/?></p>-->
                                        <p class="text-xs-right">Discout:
                                            Rs. <?php echo $final_result['discount'] ?></p>

                                        <hr>
                                        <h3 class="text-xs-right"> Rs. <?php echo $final_result['subtotal'] ?></h3>
                                    </div>
                                </div>

                                <hr>
                                <div class="hidden-print">
                                    <div class="pull-xs-right">
                                        <a href="javascript:window.print()"
                                           class="btn btn-dark waves-effect waves-light"><i class="fa fa-print"></i></a>
                                        <a href="<?php echo base_url(); ?>Welcome/addsale"
                                           class="btn btn-primary waves-effect waves-light">Add Another Bill</a>

                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end row -->

            </div>
            <!-- container -->

        </div>
        <!-- content -->

    </div>
    <!-- End content-page -->

<?php include('inc/footer.php') ?>