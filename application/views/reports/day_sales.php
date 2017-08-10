<?php $this->load->view('inc/header'); ?>

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
                            <h4 class="text-warning">Total Sales Between
                                <i>
                                    <?php echo $data2['sdate']; ?>
                                    - <?php echo $data2['edate']; ?>
                                </i>
                            </h4>

                            <div class="row">
                                <div class="col-lg-6">


                                    <!--<h4>Total Sales for the day is : Rs.  <?php /*echo $data2['total']; */ ?></h4>-->
                                    <div class="col-xs-6 col-md-6 col-lg-6 col-xl-3">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-rocket pull-xs-right text-muted"></i>
                                            <h6 class="text-primary text-uppercase m-b-15 m-t-10"><strong>Total sales
                                                    (Rs.)</strong></h6>
                                            <h2 class="text-success text-uppercase m-b-15 m-t-10"
                                                data-plugin="counterup"><?php echo round($data2['total'], 2) ?></h2>

                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
                </div>

                <!--<div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Bill Details</b></h4>

                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Bill ID</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Total</th>
                                    <th style="width: 5%">Details</th>
                                </tr>
                                </thead>


                                <tbody>
                                <?php
/*                              if ($rdata->num_rows() > 0) {
                                                    foreach ($rdata->result() as $row) {
                                                        */?>
                                        <tr>
                                            <td><?php /*echo $row->bid;  */?></td>
                                            <td><?php /*echo $row->date;  */?></td>
                                            <td><?php /*echo $row->total;  */?></td>
                                            <td><?php /*echo $row->total;  */?></td>
                                            <td><?php /*echo $row->total;  */?></td>
                                            <td><a href="">
                                                    <button type="button" class="btn btn-warning-outline waves-effect waves-light">View</button>
                                                </a></td>
                                        </tr>


                                    <?php
/*                                            }
                                                } else {
                                                    */?>
                                    <tr>
                                        <td>No Data Found</td>
                                    </tr>

                                <?php
/*
                                                }
                                                */?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>--> <!-- end row-->

                <script src="<?= base_url() ?>plugins/waypoints/lib/jquery.waypoints.js"></script>
                <script src="<?= base_url() ?>plugins/counterup/jquery.counterup.min.js"></script>

                <?php $this->load->view('inc/footer'); ?>

                <script type="text/javascript">

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

