<?php $this->load->view('inc/header'); ?>
<link href="<?= base_url() ?>plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="<?= base_url() ?>plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="<?= base_url() ?>plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="<?= base_url() ?>plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
<link href="<?= base_url() ?>plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">




<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">
    <?php $this->load->view('inc/top_bar'); ?>



    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?php $this->load->view('inc/leftbar');  ?>

    </div>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Sales Details</b></h4>
                            <div class="row">
                                <div class="col-lg-6">
                                <?= form_open('Welcome/total_sales'); ?>
                                        <div class="form-group">
                                            <label>Date Range</label>
                                            <div>
                                                <div class="input-daterange input-group" id="date-range">
                                                    <input type="text" class="form-control datepicker" name="start">
                                                    <span class="input-group-addon bg-custom b-0">to</span>
                                                    <input type="text" class="form-control datepicker" name="end">
                                                </div>

                                            </div>

                                        </div>


                                </div>
                                <div class="col-lg-1">

                                    <button type="submit" class="btn btn-primary" style="margin-top: 43%">Show</button>
                                </div>
                                <?php echo form_close(); ?>
                                <div class="col-lg-5">
                                    <div class="col-xs-6 col-md-6 col-lg-6 col-xl-3">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-layers pull-xs-right text-muted"></i>
                                            <h6 class="text-primary text-uppercase m-b-15 m-t-10"><strong>Total
                                                    Investment
                                                    (Rs.)</strong></h6>

                                            <h2 class="text-pink text-uppercase m-b-15 m-t-10"
                                                data-plugin="counterup"> <?php echo array_sum($qty_cost); ?></h2>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Bill Details</b></h4>



                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Bill ID</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th style="width: 5%">Details</th>
                                </tr>
                                </thead>


                                <tbody>
                                <?php
                                if (count($rdata) > 0) {
                                    foreach ($rdata as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row->bid; ?></td>
                                            <td><?php echo $row->date; ?></td>
                                            <td><?php echo $row->total; ?></td>
                                            <td><a href="<?= base_url() . 'Welcome/bid_details/' . $row->sid ?>">
                                                    <button type="button" class="btn btn-warning-outline waves-effect waves-light">View</button>
                                                </a></td>
                                        </tr>


                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td>No Data Found</td>
                                    </tr>

                                <?php

                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->

                <script src="<?= base_url() ?>plugins/waypoints/lib/jquery.waypoints.js"></script>
                <script src="<?= base_url() ?>plugins/counterup/jquery.counterup.min.js"></script>

                <?php $this->load->view('inc/footer'); ?>

                <script src="<?= base_url() ?>plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
                <script src="<?= base_url() ?>plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
                <script src="<?= base_url() ?>plugins/moment/moment.js"></script>
                <script type="text/javascript">

                    $('.datepicker').datepicker({
                        format: 'yyyy-mm-dd'
                    });

                    $(document).ready(function() {
                        $('#datatable').DataTable();

                        //Buttons examples
                        var table = $('#datatable-buttons').DataTable({
                            lengthChange: false
                        });

                        table.buttons().container()
                            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
                    } );

                </script>

