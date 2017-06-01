<?php include('inc/header.php')?>
    <body class="fixed-left">

    <!-- Begin page -->
<div id="wrapper">

<?php include ('inc/top_bar.php')?>


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
<?php $this->load->view('inc/leftbar');  ?>
    </div>

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <?= form_open() ?>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label> Blog Default Image
                            <small> image size ( 540px * 320px )</small>
                        </label>
                    </div>
                    <div class="fileinput-button btn btn-success sepH_b">
                        <i class="fa fa-plus"></i>
                        <span> Add file </span>
                        <input class="image_upload" data-for="#default_img_grid_upload"
                               data-name="Image" type="file" name="userfile">
                    </div>
                    <input type="hidden" name="form[Image]" value="">
                    <ul class="img-grid2 img-grid  clearfix" id="default_img_grid_upload">
                        <?php if ($obj->Image): ?>
                            <li>
                                <div class="upload_img_single thumbnail">
                                    <img src="<?= UPT . $obj->Image ?>"
                                         class="thumbnail img-responsive" alt=""/>

                                    <div class="upload_img_actions">
                                                                <span class=" fa fa-times pull-right btn  btn-danger  "
                                                                      onclick="image_upload.remove($(this))"> </span>
                                        <a style="color: white"
                                           href="<?= UP . $obj->Image ?>"
                                           class="fa fa-search-plus pull-right btn  btn-success">
                                        </a>
                                        <input
                                                type="hidden" name="form[Image]"
                                                value="<?= $obj->Image ?>"></div>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <?= form_error('form[Image]') ?>

                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>



    <?php include ('inc/footer.php')?>
