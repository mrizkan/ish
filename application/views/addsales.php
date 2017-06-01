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
                        $noti = $this->session->flashdata('msg');
                        if (isset($noti)) {
                            ?>

                            <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('msg'); ?>
                            </div>

                        <?php } ?>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">

                    <div class="col-sm-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-8">
                                    <?= form_open('Welcome/salecal'); ?>
                                    <div class="row" id="details">
                                        <div class="col-lg-10 ">
                                            <fieldset class="form-group">
                                                <label>Product Name</label>
                                                <input type="text" name="pname[]" placeholder="Product Name" required="" autocomplete="off" data-parsley-id="34" class="form-control product_search " id="pname[]">
                                                <input type="hidden" name="pid[]"/>
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label>Quantity</label>
                                                <input type="text" data-parsley-type="number" class="form-control"id="qty[]" required="" autocomplete="off" name="qty[]" placeholder="Quantity" data-parsley-id="46">
                                            </fieldset>
                                        </div>

                                    </div>


                                </div>
                                <!-- end col -->

                            </div>
                            <!-- end row -->
                            <div class="button-list">
                                <button type="submit" class="btn btn-primary" style="float: right">Check Out</button>
                                <button type="button" class="btn btn-warning" id="add" style="float: left">Add</button>
                            </div>

                            <?php echo form_close(); ?>

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
    <script src="<?=base_url()?>plugins/autocomplete/jquery.autocomplete.min.js" ></script>
    <script>
        var product =[];
        $(document).ready(function () {

            $.ajax({
                url: "<?=base_url()?>/api/product/getProduct",
                dataType:'json',
                success:function(response){
                    product = response;
                    autoComplete($('.product_search'));
                }
            });


            var wrapper = $("#details");
            var add_button = $("#add");
            var x = 1;
            $(add_button).click(function (e) {
                e.preventDefault();
                $(wrapper).append('<div class="col-lg-10 "> <fieldset class="form-group">' +
                    ' <input type="text" name="pname[]" required="" autocomplete="off"  placeholder="Product Name" class="form-control product_search " data-parsley-id="34"  />' +
                    ' <input type="hidden" name="pid[]" />' +
                    '</fieldset></div>'); //add input box});
                $(wrapper).append('<div class="col-lg-2 "> <fieldset class="form-group"> <input type="text" class="form-control" required="" data-parsley-type="number" autocomplete="off"   name="qty[]" placeholder="Quantity"/> </fieldset> </div>'); //add input box2});
                $(wrapper).append('<div class="clearfix"></div>');
                autoComplete($(wrapper).find('.product_search').last());
            });
        });

       function autoComplete(that){
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