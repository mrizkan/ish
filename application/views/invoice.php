<?php include('inc/header.php')?>
<body class="fixed-left">

    <!-- Begin page -->
<div id="wrapper">

<?php include ('inc/top_bar.php')?>


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?php $this->load->view('inc/leftbar');  ?>

    </div>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="card-box">
                            <!-- <div class="panel-heading">
                                <h4>Invoice</h4>
                            </div> -->
                            <?php
                            echo '<pre>';
                            print_r($final_result);
                            echo '</pre>';
                            ?>
                           <!-- -->
                            <div class="panel-body">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3 class="logo">Ishra Auto Traders</h3>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12">
                                      <?php  foreach($final_result as $row){?>
                                        <div class="pull-xs-left m-t-30">
                                            <address>
                                                <strong>Ishra Auto Traders</strong><br>
                                                101, Galles Road<br>Horethuduwa<br>
                                                Moratuwa.<br>
                                                <abbr class="icon-phone"></abbr> +94 766 767 418
                                            </address>
                                        </div>
                                        <div class="pull-xs-right m-t-30">
                                            <p><strong>Order Date: </strong><?php echo date("d/M/Y") ?></p>
                                            <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-success">Ready</span></p>
                                            <!--<p class="m-t-10"><strong>Order ID: </strong> #123456</p>-->
                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="m-h-50"></div>


                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="table-responsive">

                                            <table class="table m-t-30">
                                                <thead class="bg-faded">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product Name</th>
                                                    <th>Unit Price</th>
                                                    <th>Quantity</th>

                                                    <th>Total</th>

                                                </tr></thead>
                                                <tbody>
                                                <tr>

                                                    <td><?= $row['pid']; ?></td>
                                                    <td>proname</td>
                                                    <td>upprice</td>
                                                    <td>qty</td>
                                                    <td>Total</td>
                                                </tr>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-3">
                                        <p class="text-xs-right"><b>Sub-total:</b> Rs. <?= $data2['subtotal'] ?></p>
                                        <p class="text-xs-right">Discout:  Rs. <?= $data2['discount'] ?></p>

                                        <hr>
                                        <h3 class="text-xs-right"> Rs. <?= $data2['subtotal'] ?></h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="hidden-print">
                                    <div class="pull-xs-right">
                                        <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light"><i class="fa fa-print"></i></a>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
<?php } ?>
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

        </div> <!-- content -->

    </div>
    <!-- End content-page -->

<?php include ('inc/footer.php')?>