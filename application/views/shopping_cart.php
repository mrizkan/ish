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
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Add Sales Details</h4>
                        </div>
                        <?php
                        /*                        $noti = $this->session->flashdata('msg');
                                                if (isset($noti)) {
                                                    */?><!--

                            <div class="alert alert-success" role="alert">
                                <?/*= $this->session->flashdata('msg'); */?>
                            </div>

                        --><?php /*} */ ?>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">

                    <div class="col-sm-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-10">
                                    <?= form_open('Shopping_cart/add'); ?>
                                    <div class="row" id="details">
                                        <div class="col-lg-8 ">
                                            <fieldset class="form-group">
                                                <label>Product Name</label>
                                                <input type="text" name="pname" placeholder="Product Name" required=""
                                                       autocomplete="off" data-parsley-id="34"
                                                       class="form-control product_search " id="pname">
                                                <input type="hidden" name="pid"/>
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label>Quantity</label>
                                                <input type="text" data-parsley-type="number" class="form-control"
                                                       id="qty" required="" autocomplete="off" name="qty"
                                                       placeholder="Quantity" data-parsley-id="46">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label><bt><br></bt></b></label><br>
                                                <button type="submit" class="btn btn-warning" id="add">Add</button>
                                            </fieldset>
                                        </div>
                                    </div>


                                </div>
                                <!-- end col -->

                            </div>
                            <!-- end row -->


                            <?php echo form_close(); ?>

                        </div>
                    </div>



                    <div class="col-sm-12">
                        <div class="card-box">
                            <div align="center">
                            <h4 class="page-title">Your Cart Summary <i class="fa fa-shopping-cart"></i></h4>
                            </div>
                            <div class="p-20">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><a><i class="fa fa-camera"></i></a></th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><a><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a><i class="fa fa-camera"></i></a></th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td><a><i class="fa fa-trash"></i></a></td>

                                    </tr>
                                    <tr>
                                        <th scope="row"><a><i class="fa fa-camera"></i></a></th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td><a><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>

                                        <td></td>
                                        <td></td>
                                        <th class="text-success m-t-0 header-title">Total</th>
                                        <th class="text-primary m-t-0 header-title">1000</th>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="button-list">
                                <button type="submit" class="btn btn-primary" style="float:right;" >Check Out</button>

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
    <!-- End content-page -->
    <?php include('inc/footer.php') ?>
    <script src="<?= base_url() ?>plugins/autocomplete/jquery.autocomplete.min.js"></script>
    <script>
        var product = [];
        $(document).ready(function () {

            $.ajax({
                url: "<?=base_url()?>/api/product/getProduct",
                dataType: 'json',
                success: function (response) {
                    product = response;
                    autoComplete($('.product_search'));
                }
            });




        });

        function autoComplete(that) {
            that.autocomplete({
                lookup: product,
                onSelect: function (suggestion) {
                    that.closest('fieldset').find('input[type=hidden]').val(suggestion.data);
                    that.val(suggestion.value)
                }
            });
        }
        /*$('body').on('keyup','.product_search',function(){

         })*/
    </script>