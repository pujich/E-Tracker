

<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin - Home</title>
  <!-- Bootstrap core CSS-->
  <link href=<?php echo base_url("vendor/bootstrap/css/bootstrap.min.css");?> rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href=<?php echo base_url("vendor/font-awesome/css/font-awesome.min.css");?> rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href=<?php echo base_url("vendor/datatables/dataTables.bootstrap4.css");?> rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href=<?php echo base_url("css/sb-admin.css");?> rel="stylesheet">

  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">E-Tracker Witel Region 5</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
       
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data AP saat ini">
          <a class="nav-link" href=<?php echo base_url("Region");?>>
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Data AP saat ini</span>
          </a>
        </li>
      
      </ul>
       
        
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
         
     <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Admin/logout'); ?>">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">

    <div class="container-fluid">
      <!-- Breadcrumbs-->
     <!--  <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol> -->
      <!-- Icon Cards-->

      
    <form method="post" id="statusform" action="<?php echo base_url('/Region/editAP'); ?>" enctype="multipart/form-data">
     
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>  Edit AP</div>
        <div class="card-body">
          
          <div class="row">
            <div class="col-lg-6">
              <?php foreach ($data as $x) {
               
              ?>
                    <div class="form-group"> 
                  <label for="comment">Serial Number</label>
                  <input type="text" class="form-control" name="serial" value="<?php echo $x['AP_SN']; ?>" >
                </div>
                    <div class="form-group">
                  <label for="comment">Mac address</label>
                  <input type="text" class="form-control" name="mac" value="<?php echo $x['MAC_ADDRESS']; ?>" >
                </div>
                    <div class="form-group">
                  <label for="comment">No Surat DO</label>
                  <input type="text" class="form-control" name="no_suratdo" value="<?php echo $x['NO_SURATDO']; ?>" >
                </div>    
                     <div class="form-group">
                  <label for="comment">Merk</label>
                  <input type="text" class="form-control" name="merk" value="<?php echo $x['MERK']; ?>" >
                </div>     
                <div class="form-group">
                  <label for="comment">Mitra</label>
                  <input type="text" class="form-control" name="mitra" value="<?php echo $x['MITRA']; ?>" >
                </div>   
               
                <div class="form-group">
                  <label for="comment">Status</label>
                  <input type="text" class="form-control" name="status" value="<?php echo $x['STATUS']; ?>">
                </div>
                 <div class="form-group">
                  <label for="comment">Modified Date</label>
                  <input type="text" class="form-control" name="moddate" value="<?php echo date('d-M-Y'); ?>" readonly>
                </div> 
              </div>
                <div class="col-lg-6">
                  <div class="form-group">
                  <label for="comment">Perubah</label>
                  <input type="text" class="form-control" name="perubah" value="<?php echo $this->session->userdata('id_user'); ?>" readonly>
                </div> 
                
                <div class="form-group">
                  <label for="comment">Alasan</label>
                  <input type="text" class="form-control" name="alasan" value="<?php echo $x['ALASAN']; ?>">
                </div>
                <div class="form-group">
                  <label for="comment">Keterangan</label>
                  <input type="text" class="form-control" name="ket" value="<?php echo $x['KETERANGAN']; ?>">
                </div>
                <div class="form-group">
                  <label for="comment">Nomor SP</label>
                  <input type="text" class="form-control" name="no_sp" value="<?php echo $x['NO_SP']; ?>">
                </div>   
                <div class="form-group">
                  <label for="comment">Witel</label>
                  <input type="text" class="form-control" name="witel" value="<?php echo $x['WITEL']; ?>">
                </div>  
                 <div class="form-group">
                  <label for="comment">Tipe</label>
                  <input type="text" class="form-control" name="tipe" value="<?php echo $x['TIPE']; ?>">
                </div>
              </div>
          </div>

         <?php } ?>

                    </div>
                     <div class="card-footer small">
                       
          <button class="btn btn-primary" style="float: right" type="submit" >Edit</button>
          <a class="btn btn-secondary" style="float: right; margin-right: 8px" href="<?php echo base_url('/Region'); ?>">Back</a>    
        </div></form>
                          </div>

                             </div>
                                   

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Telkom Indonesia 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    
   <!-- Bootstrap core JavaScript-->
   <script type="text/javascript" src=" <?php echo base_url("vendor/jquery/jquery.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("vendor/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
    <!-- Core plugin JavaScript-->
     <script type="text/javascript" src="<?php echo base_url("vendor/jquery-easing/jquery.easing.min.js");?>" ></script>
    <!-- Page level plugin JavaScript-->
     <script type="text/javascript" src="<?php echo base_url("vendor/chart.js/Chart.min.js");?>" ></script>
     <script type="text/javascript" src="<?php echo base_url("vendor/datatables/jquery.dataTables.js");?>" ></script>
     <script type="text/javascript" src="<?php echo base_url("vendor/datatables/dataTables.bootstrap4.js");?>" ></script>
    <!-- Custom scripts for all pages-->
     <script type="text/javascript" src="<?php echo base_url("js/sb-admin.min.js"); ?>" ></script>
    <!-- Custom scripts for this page-->
     <script type="text/javascript" src="<?php echo base_url("js/sb-admin-datatables.min.js");?>"></script>
     <script type="text/javascript" src="<?php echo base_url("js/sb-admin-charts.min.js"); ?>"></script>
  </div>

</body>
<!-- <script>
  $(document).ready( function () {
      $('#dataTable').DataTable();
    } );
</script> -->

</html>
