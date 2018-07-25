<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('assets/plugins/bootstrap/bootstrap.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/pace/pace-theme-big-counter.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/main-style.css');?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url('assets/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
<?php $this->load->view('menu')?>
        <!-- end navbar side -->
<?php $this->load->view($content)?>        <!--  page-wrapper -->



        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url("assets/vendor/jquery/jquery.min.js");?>"></script>
    <script src="<?php echo base_url("assets/plugins/bootstrap/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/plugins/metisMenu/jquery.metisMenu.js");?>"></script>
    <script src="<?php echo base_url("assets/plugins/pace/pace.js");?>"></script>
    <script src="<?php echo base_url("assets/scripts/siminta.js");?>"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url("assets/plugins/morris/raphael-2.1.0.min.js");?>"></script>
    <script src="<?php echo base_url("assets/plugins/morris/morris.js");?>"></script>
    <script src="<?php echo base_url("assets/scripts/dashboard-demo.js");?>"></script>

</body>

</html>
