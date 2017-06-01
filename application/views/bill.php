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

                    <div class="col-sm-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class='row' id='details'>
                                        <div class='col-lg-3'>
                                            <fieldset class='form-group'>
                                                <label>Product Name</label>
                                            </fieldset>
                                        </div>

                                        <div class='col-lg-3'>
                                            <fieldset class='form-group'>
                                                <label>Unit Price</label>
                                            </fieldset>
                                        </div>
                                        <div class='col-lg-3'>
                                            <fieldset class='form-group'>
                                                <label>Quantity</label>
                                            </fieldset>
                                        </div>
                                        <div class='col-lg-3'>
                                            <fieldset class='form-group'>
                                                <label>Total</label>
                                            </fieldset>
                                        </div>

                                    </div>
                                    <?php
                                    for ($r = 0; $r <$i;  $r++){

                                        echo"<div class='row' id='details'>
                                        <div class='col-lg-3'>
                                            <fieldset class='form-group'>

                                                <input type='text' name='pname[]' placeholder='Product Name' required='' autocomplete='off' data-parsley-id='34' class='form-control' id='pname[]'>

                                            </fieldset>
                                        </div>

                                        <div class='col-lg-3'>
                                            <fieldset class='form-group'>

                                                <input type='text' class='form-control' id='qty[]' required='' autocomplete='off' name='qty[]' placeholder='Quantity' data-parsley-id='46'>
                                            </fieldset>
                                        </div>
                                        <div class='col-lg-3'>
                                            <fieldset class='form-group'>

                                                <input type='text' class='form-control' id='qty[]' required='' autocomplete='off' name='qty[]' placeholder='Quantity' data-parsley-id='46'>
                                            </fieldset>
                                        </div>
                                        <div class='col-lg-3'>
                                            <fieldset class='form-group'>

                                                <input type='text' class='form-control' id='qty[]' required='' autocomplete='off' name='qty[]' placeholder='Quantity' data-parsley-id='46'>
                                            </fieldset>
                                        </div>

                                    </div>"; ///this is the end div

                                        }
                                    ?>
                                </div>
                                <!-- end col -->

                            </div>
                            <!-- end row -->
                            <div class="button-list">
                                <button type="submit" class="btn btn-primary" style="float: right">Proceed to Bill</button>

                            </div>



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
    </div>

    <!-- End content-page -->
    <?php include('inc/footer.php') ?>




