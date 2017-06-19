<?php $this->load->view('inc/header'); ?>
<link href="<?= base_url() ?>plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css"/>
<script src="<?= base_url() ?>js/lightgallery.js"></script>
<link href="<?= base_url() ?>css/lightgallery.css" rel="stylesheet" type="text/css"/>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <?php $this->load->view('inc/top_bar.php'); ?>



    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?php $this->load->view('inc/leftbar'); ?>

    </div>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Inventory Details</b></h4>

                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Rack Number</th>
                                    <th>Current Quantity</th>
                                    <th>Minimum Quantity</th>


                                </tr>
                                </thead>


                                <tbody>
                                <?php
                                if ($pdata->num_rows() > 0) {
                                    foreach ($pdata->result() as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row->pname; ?></td>
                                            <td><?php echo $row->rnum; ?></td>
                                            <td><?php echo $row->qty; ?></td>
                                            <td><?php echo $row->mqty; ?></td>

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
                </div>
                <!-- end row -->



                <?php $this->load->view('inc/footer'); ?>

                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#datatable').DataTable();

                        //Buttons examples
                        var table = $('#datatable-buttons').DataTable({
                            lengthChange: false,
                            buttons: ['copy', 'excel', 'pdf', 'colvis']
                        });

                        table.buttons().container()
                            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
                    });

                </script>

