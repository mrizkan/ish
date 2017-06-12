<?php $this->load->view('inc/header'); ?>
<link href="<?= base_url() ?>plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />
<script src="<?= base_url() ?>js/lightgallery.js"></script>
<link href="<?= base_url() ?>css/lightgallery.css" rel="stylesheet" type="text/css" />




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
                            <h4 class="m-t-0 header-title"><b>Daily Sales Details</b></h4>

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
                                if ($rdata->num_rows() > 0) {
                                    foreach ($rdata->result() as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row->bid; ?></td>
                                            <td><?php echo $row->date; ?></td>
                                            <td><?php echo $row->total; ?></td>
                                            <td><a href="">
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
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <h4>Total Sales for the day :</h4>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div> <!-- end row -->


               <?php $this->load->view('inc/footer'); ?>


                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#datatable').DataTable();

                        //Buttons examples
                        var table = $('#datatable-buttons').DataTable({
                            lengthChange: false,
                            buttons: ['copy', 'excel', 'pdf', 'colvis']
                        });

                        table.buttons().container()
                            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
                    } );

                </script>

