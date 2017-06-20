<?php $this->load->view('inc/header'); ?>
<script src="<?= base_url() ?>js/jquery.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?= base_url() ?>css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8"/>
<script src="<?= base_url() ?>js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>


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
                                    <th><i class="fa fa-camera"></i></th>


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
                                            <td><a href="<?= base_url() . 'upload/' . $row->Image ?>" rel="prettyPhoto"><i
                                                        class="fa fa-camera"></i></a></td>

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
                <script type="text/javascript" charset="utf-8">
                    $(document).ready(function () {
                        $("a[rel^='prettyPhoto']").prettyPhoto();
                    });
                </script>



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

