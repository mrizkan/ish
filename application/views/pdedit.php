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
            <fieldset class="form-group">
                <input type="text" class="form-control" name="pid" data-parsley-id="34" hidden="hidden" value="<?php echo $row->pid; ?>">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" required="" name="pname" placeholder="Product Name" autocomplete="off" data-parsley-id="34" value="<?php echo $row->pname; ?>">

                <!--<small class="text-muted">We'll never share your email with anyone
                    else.
                </small>-->
            </fieldset>
        </div>
        <div class="col-lg-6 ">
            <fieldset class="form-group">
                <label for="exampleInputEmail1">Rack Number</label>
                <input data-parsley-type="number" type="text" class="form-control" required="" name="rnum" autocomplete="off" placeholder="Rack Number" data-parsley-id="46" value="<?php echo $row->rnum; ?>">
                <!--<small class="text-muted">We'll never share your email with anyone
                    else.
                </small>-->
            </fieldset>
        </div>


        <div class="col-lg-4 ">
            <fieldset class="form-group">
                <label for="exampleInputPassword1">Quantity</label>
                <input data-parsley-type="number" type="text" class="form-control" name="qty" required="" placeholder="Quantity" autocomplete="off" data-parsley-id="46" value="<?php echo $row->qty; ?>">
            </fieldset>

        </div>
        <div class="col-lg-2 ">
            <fieldset class="form-group">
                <label for="exampleInputPassword1">Minimum Quantity</label>
                <input data-parsley-type="number" type="text" class="form-control" name="mqty" required="" placeholder="Minumum Quantity" autocomplete="off" data-parsley-id="46" value="<?php echo $row->mqty; ?>">
            </fieldset>

        </div>
        <div class="col-lg-4 ">
            <fieldset class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input data-parsley-type="number" type="text" class="form-control" required="" name="price" autocomplete="off" placeholder="Price" data-parsley-id="46" value="<?php echo $row->price; ?>">
            </fieldset>
        </div>
        <div class="col-lg-2 ">
            <fieldset class="form-group">
                <label for="exampleInputPassword1">Cost</label>
                <input data-parsley-type="number" type="text" class="form-control" required="" name="cost" autocomplete="off" placeholder="Cost" data-parsley-id="46" value="<?php echo $row->cost; ?>">
            </fieldset>
        </div>
        <div class="col-lg-6 ">
            <fieldset class="form-group">
                <label for="exampleTextarea">Description</label>
                <textarea class="form-control" id="description" name="description"
                          rows="3" placeholder="Description"><?php echo $row->description; ?></textarea>
            </fieldset>
        </div>
        <div class="col-lg-6" >
            <div class="form-group">
                <label>  Default Image  <small> image size ( 540px * 540px ) </small>  </label>
            </div>

            <div class="fileinput-button btn btn-success sepH_b">
                <i class="fa fa-plus"></i>
                <span> Add file </span>
                <input class="image_upload"   id="file"  type="file" name="file">

            </div>
            <span id="uploaded_image"><image src="<?= base_url() ?>/upload/<?php echo $row->Image; ?>" height="150" width="150" class ="img-thumbnail" /></span>

            <ul class="img-grid2 img-grid  clearfix" id="default_img_grid_upload">
            </ul>

        </div>

    </div>
                                    <?php } ?>


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
    <script>
        $(document).ready(function(){
            $(document).on('change','#file', function(){

                var property = document.getElementById("file").files[0];

                var image_name = property.name;

                var image_extension = image_name.split('.').pop();
                if(jQuery.inArray(image_extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert("Invalid Image File");

                }
                var image_size = property.size;
                if(image_size > 2000000)
                {
                    alert("Image File Size is very big");
                }
                else
                {

                    var form_data = new FormData();
                    form_data.append("file", property);
                    $.ajax({
                        url:"<?= base_url() ?>Welcome/upload_pro_image",
                        method:"post",
                        data:form_data,
                        contentType:false,
                        cache:false,
                        processData:false,
                        beforeSend:function(){
                            $('#uploaded_image').html("<lable class='text-success'>Image Uploding...</lable>");
                        },
                        success:function(data)
                        {
                            $('#uploaded_image').html(data);
                        }

                    })
                }
            });
        });

    </script>






<?php include ('inc/footer.php')?>