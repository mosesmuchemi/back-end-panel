    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->

    <?php if (isset($login)) {?>
    <link href="<?php echo base_url(); ?>assets/themes/custom/login.css" rel="stylesheet" />
    <?php } else {?>
    <link href="<?php echo base_url(); ?>assets/themes/custom/styles.css" rel="stylesheet" />
    <?php }?>
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome/css/all.css" rel="stylesheet">

    <!-- include the jQuery for datables -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
    </script>