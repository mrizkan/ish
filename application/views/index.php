<!DOCTYPE html>
<html >
<?php include('inc/header.php') ?>
<head>
    <meta charset="UTF-8">
    <title>Ishra Auto Traders</title>



    <link rel="stylesheet" href="<?= base_url() ?>css/flog.css">


</head>

<body>
<div class="wrapper">
    <div class="container">
        <!--<img src="<?php /*echo base_url(); */?>images/logo.png" width="200px" height="120px">-->
        <h1>Ishra Auto Traders</h1>

        <?= form_open('Welcome/login'); ?>
        <div class="form-group center-block text-center   " >

            <strong class="text-danger " >
                <?= $this->session->flashdata("error"); ?>
            </strong>
            <!--<strong class="text-danger " > <?/*= @$error  */?> </strong>-->


        </div>

        <input type="text" required="" name="username" autocomplete="off" placeholder="User Name" data-parsley-id="34">
        <!--   <input type="text" name="username" autocomplete="off" placeholder="Username">
  <input type="password" name="password" autocomplete="off" placeholder="Password">-->
        <input type="password" required="" name="password" autocomplete="off" placeholder="Password" data-parsley-id="34">
        <button type="submit">Login</button>
        <?php echo form_close(); ?>
    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



</body>
</html>
