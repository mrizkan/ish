<?php
echo '<pre>';
print_r($data2);
echo '</pre>';
?>

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
                               <!-- --><?php /* foreach ($data2 as $row) {    */?>
                                <div class="m-h-50"></div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table m-t-30">
                                                <thead class="bg-faded">
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Description</th>
                                                    <th>Quantity</th>
                                                    <th>Unit Cost</th>
                                                    <th>Total</th>
                                                </tr></thead>
                                                <tbody>
                                                <tr>

                                                    <td><?= $data2['proname'] ?></td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>1</td>
                                                    <td>$380</td>
                                                    <td>$380</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Mobile</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>5</td>
                                                    <td>$50</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>LED</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>2</td>
                                                    <td>$500</td>
                                                    <td>$1000</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>LCD</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>3</td>
                                                    <td>$300</td>
                                                    <td>$900</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Mobile</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>5</td>
                                                    <td>$80</td>
                                                    <td>$400</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="clearfix m-t-30">
                                            <h5 class="small text-inverse font-600"><b>PAYMENT TERMS AND POLICIES</b></h5>

                                            <small>
                                                All accounts are to be paid within 7 days from receipt of
                                                invoice. To be paid by cheque or credit card or direct payment
                                                online. If account is not paid within 7 days the credits details
                                                supplied as confirmation of work undertaken will be charged the
                                                agreed quoted fee noted above.
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-3">
                                        <p class="text-xs-right"><b>Sub-total:</b> 2930.00</p>
                                        <p class="text-xs-right">Discout: 12.9%</p>
                                        <p class="text-xs-right">VAT: 12.9%</p>
                                        <hr>
                                        <h3 class="text-xs-right">USD 2930.00</h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="hidden-print">
                                    <div class="pull-xs-right">
                                        <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light"><i class="fa fa-print"></i></a>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                        <?php /*} */?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>
    <!-- End content-page -->

<?php include ('inc/footer.php')?>