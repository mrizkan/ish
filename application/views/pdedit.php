<?php include('inc/header.php')?>
    <body class="fixed-left">

    <!-- Begin page -->
<div id="wrapper">

<?php include ('inc/top_bar.php')?>


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?php $this->load->view('inc/leftbar');  ?>

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
                            <h4 class="page-title">Update Product Details</h4>
                        </div>
                        <?php
                        $noti=$this->session->flashdata('msg');
                        if(isset($noti)){
                            ?>

                            <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('msg'); ?>
                            </div>

                        <?php }  ?>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-12 ">
                                    <?= form_open('Welcome/update'); ?>
                                    <?php  foreach ($data["fetch_data"]->result() as $row) {    ?>
                                    <div class="row">
                                        <div class="col-lg-6 ">

                                                <input type="text" name="pid" class="form-control" id="pid" hidden="hidden" data-parsley-id="4" value="<?php echo $row->pid; ?>">

                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Product Name</label>
                                                <input type="text" name="pname" required="" placeholder="Product Name" class="form-control" id="pname" data-parsley-id="4" value="<?php echo $row->pname; ?>">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Quantity</label>
                                                <input type="text" name="qty" required="" placeholder="Quantity" class="form-control" id="qty" data-parsley-id="4" value="<?php echo $row->qty; ?>">
                                            </fieldset>

                                        </div>

                                        <div class="col-lg-6 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Rack Number</label>
                                                <input type="text" name="rnum" required="" placeholder="Enter Rack Number" class="form-control" id="rnum" data-parsley-id="4" value="<?php echo $row->rnum; ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Price</label>
                                                <input data-parsley-type="number" type="text" class="form-control" required="" placeholder="Price" name="price" id="price" data-parsley-id="46" value="<?php echo $row->price; ?>">
                                            </fieldset>


                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset class="form-group">
                                                <label for="exampleTextarea">Description</label>
                                                <textarea class="form-control" id="description" name="description"
                                                          rows="3" placeholder="Description"><?php echo $row->description; ?></textarea>
                                            </fieldset>
                                        </div>

                                        <?php } ?>

                                    </div>


                                    <button type="submit" class="btn btn-danger waves-effect waves-light" style="float: right">Update</button>
                                    <?php echo form_close(); ?>
                                </div><!-- end col -->



                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->



                <!-- end row -->



                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

    </div>
    <!-- End content-page -->






<?php include ('inc/footer.php')?>