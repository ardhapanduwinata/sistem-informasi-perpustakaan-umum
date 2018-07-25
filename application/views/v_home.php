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
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url('assets/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet" />
    <script src="<?php echo base_url("assets/vendor/jquery/jquery.min.js");?>"></script>
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
    
    <script src="<?php echo base_url("assets/plugins/bootstrap/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/plugins/metisMenu/jquery.metisMenu.js");?>"></script>
    <script src="<?php echo base_url("assets/plugins/pace/pace.js");?>"></script>
    <script src="<?php echo base_url("assets/scripts/siminta.js");?>"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url("assets/plugins/morris/raphael-2.1.0.min.js");?>"></script>
    <script src="<?php echo base_url("assets/plugins/morris/morris.js");?>"></script>
    <script src="<?php echo base_url("assets/scripts/dashboard-demo.js");?>"></script>

    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#dataTables-example').DataTable();
            $('#dataTables-export').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
        });
    </script>
</body>

</html>
