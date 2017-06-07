
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

                                            <?= form_open('Welcome/bill_data'); ?>

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

                                    for ($r = 0; $r < $result['i']; $r++) {

                                        ?>
                                    <?php /*foreach ($result as $k => $row) { */?>


                                        <div class='row' id='details'>
                                            <div class='col-lg-3'>
                                                <fieldset class='form-group'>

                                                    <input type='text' name='proname[]' class='form-control'
                                                           id='proname[]'
                                                           value='<?= $result['final_array_collection'][$r]['proname'] ?>'
                                                           readonly>
                                                    <input type='text' name='pid[]' hidden="hidden" class='form-control'
                                                           id='pid[]'
                                                           value='<?= $result['final_array_collection'][$r]['pid'] ?>'>

                                                </fieldset>
                                            </div>

                                            <div class='col-lg-3'>
                                                <fieldset class='form-group'>

                                                    <input type='text' class='form-control' id='uprice[]'
                                                           name='uprice[]'
                                                           value='<?= $result['final_array_collection'][$r]['price'] ?>'
                                                           readonly>
                                                </fieldset>
                                            </div>
                                            <div class='col-lg-3'>
                                                <fieldset class='form-group'>

                                                    <input type='text' class='form-control' id='qty[]' name='qty[]'
                                                           value='<?= $result['final_array_collection'][$r]['qty'] ?>'
                                                           readonly>
                                                </fieldset>
                                            </div>
                                            <div class='col-lg-3'>
                                                <fieldset class='form-group'>

                                                    <input type='text' class='form-control' id='total[]' name='total[]'
                                                           value='<?= $result['final_array_collection'][$r]['total'] ?>'
                                                           readonly>
                                                </fieldset>
                                            </div>

                                        </div>

                                    <?php

                                    } ?>
                                   <div class='row'>
                                            <div class='col-lg-8'>
                                            <fieldset class='form-group'>

                                                <input type='text' class='form-control' id='hide[]' name='hide[]' hidden='hidden'>
                                            </fieldset>
                                        </div>
                                        <div class='col-lg-1'>
                                            <fieldset class='form-group'>
                                                <label style='margin-top: 10px'>Discount</label>
                                            </fieldset>
                                        </div>
                                            <div class='col-lg-3'>
                                            <fieldset class='form-group'>

                                                <input type='text' class='form-control' id='discount'name='discount' value="0" autocomplete="off">
                                            </fieldset>
                                        </div>
                                        </div>
                                    <div class='row'>
                                            <div class='col-lg-8'>
                                            <fieldset class='form-group'>

                                                <input type='text' class='form-control' id='hide3[]' name='hide3[]' hidden='hidden'>
                                            </fieldset>
                                        </div>
                                        <div class='col-lg-1'>
                                            <fieldset class='form-group'>
                                                <label style='margin-top: 10px'>Subtotal</label>
                                            </fieldset>
                                        </div>
                                            <div class='col-lg-3'>
                                            <fieldset class='form-group'>

                                                <input type='text' class='form-control' id='subtotal'   readonly name='subtotal' style='text-align: center' value='<?= $result['subtotal']?>'>
                                            </fieldset>
                                        </div>
                                        </div>


                                </div>
                                <!-- end col -->

                            </div>
                            <!-- end row -->
                            <?php /*} */?>
                            <div class="button-list">
                                <button type="submit" class="btn btn-primary" style="float: right">Proceed to Bill
                                </button>
                                <?php echo form_close(); ?>
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




