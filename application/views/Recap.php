

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
       <?php $role=$this->session->userdata('role');
       if($role=='repair') {
        ?>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="AP di repair">
          <a class="nav-link" href=<?php echo base_url("Repair");?>>
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">AP di repair</span>
          </a>
        </li>
       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Status AP per witel">
          <a class="nav-link" href=<?php echo base_url("Recap");?>>
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Status AP per witel</span>
          </a>
        </li>

         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Buat berita acara">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseNotYet" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Buat berita acara</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseNotYet">
           
           <li>
              <a href="<?php echo base_url("Make_ba/penyerahan_masuk");?>">Untuk witel</a>
            </li>
             <li>
              <a href="<?php echo base_url("Make_ba/penyerahan_keluar");?>">Dari witel</a>
            </li>
         
      </ul>
        </li>
       
        <?php } else if ($role=='witel') {
       ?>
 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data AP saat ini">
          <a class="nav-link" href="<?php echo base_url("Witel/getAP");?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Data AP saat ini</span>
          </a>
        </li>

         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Histori">
          <a class="nav-link" href=<?php echo base_url("Witel/getHistory");?>>
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Histori</span>
          </a>
        </li> 

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Status AP per witel">
          <a class="nav-link" href=<?php echo base_url("Recap");?>>
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Status AP per witel</span>
          </a>
        </li>
      
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="AP yang belum diproses">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseNotYet" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Buat berita acara</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseNotYet">
            <li>
              <a href="<?php echo base_url("Make_ba/pelaporan");?>">Witel</a>
            </li>
            <li>
              <a href="<?php echo base_url("Make_ba/penyerahan_masuk");?>">Dari repair</a>
            </li>
             <li>
              <a href="<?php echo base_url("Make_ba/penyerahan_keluar");?>">Untuk repair</a>
            </li>
          </ul></li>
          <?php } else if ($role=='regional') {
       ?>

       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data AP saat ini">
          <a class="nav-link" href=<?php echo base_url("Region");?>>
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Data AP saat ini</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Status AP per witel">
          <a class="nav-link" href=<?php echo base_url("Recap");?>>
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Status AP per witel</span>
          </a>
        </li>

        <?php } ?>

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
      
    
      <!-- Tabel yang akan ditampilkan -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>  Rekapitulasi status AP per witel</div>
        <div class="card-body">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Witel</th>
                  <th>Hilang</th>
                  <th>Scrapped</th>
                  <th>On Air</th>
                  <th>Ready</th>
                  <th>Dismantled</th>
                  <th>Repair</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                 <th>No</th>
                  <th>Witel</th>
                  <th>Hilang</th>
                  <th>Scrapped</th>
                  <th>On Air</th>
                  <th>Ready</th>
                  <th>Dismantled</th>
                  <th>Repair</th>
                </tr>
              </tfoot>
              <tbody>
               <?php $no=1;
              foreach ($data as $x) {  ?>
            
                <tr>
                  <td> <?php echo $no++; ?> </td>
                  <td><?php echo $x['WITEL']; ?></td>
                  <td><?php echo $x['HILANG']; ?></td>
                  <td><?php echo $x['SCRAPPED']; ?></td>
                  <td><?php echo $x['ONAIR']; ?></td>
                  <td><?php echo $x['READY']; ?></td>
                  <td><?php echo $x['DISMANTLED']; ?></td>
                  <td><?php echo $x['REPAIR']; ?></td>
                </tr>

              
                <?php } ?>

                </tbody>
              
            </table>

          

          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
     <script type="text/javascript" src="<?php echo base_url("vendor/datatables/jquery.dataTables.js");?>" ></script>; 
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
