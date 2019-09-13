

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
        

         <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Buat berita acara">
          <a class="nav-link" href="<?php echo base_url("Witel/getTempW");?>">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Perubahan data AP</span>
          </a>
        </li> -->
       
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data AP saat ini">
          <a class="nav-link" href="<?php echo base_url("Witel/getAP");?>">
            <i class="fa fa-fw fa-table"></i>
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
          </ul>
      </ul>
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
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('Repair'); ?>">Repair</a>
        </li>
        <li class="breadcrumb-item active">Buat berita acara</li>
      </ol>
      <!-- Icon Cards-->
      
<!--     <form method="post" id="statusform" action="<?php echo base_url('make_ba/display_ba'); ?>" enctype="multipart/form-data"> -->

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-file"></i>  Berita Acara</div>
        <div class="card-body">
          <!-- <form method="POST" action="<?php echo base_url('make_ba/display_ba'); ?>">
         <div class="row">
          <div class="col-sm-2 text-right">Dari :</div>
          <div class="col-sm-2 mx-auto"><input type="date" name="from"></div> 
          <div class="col-sm-2 text-right">Hingga :</div>
          <div class="col-sm-2 mx-auto"><input type="date" name="to"></div>

          <div class="col-sm-2 mx-auto"><button type="submit" class="btn btn-primary btn-sm">Buat</button> </div>
         </div> -->
       <!-- </form> -->

         <div class="row justify-content-center"></div>
         <br/>
         <div class="table-responsive" style="overflow:auto;">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              
              <?php $table=$this->session->userdata('table');
               ?>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor BA</th>
                  <th>Pembuat</th>
                  <th>Tanggal</th>
                  <th>Command</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nomor BA</th>
                  <th>Pembuat</th>
                  <th>Tanggal</th>
                  <th>Command</th>
                </tr>
              </tfoot>
               <?php $no=1;
              foreach ($data as $x) {  ?>
            
                <tr>
                  <td> <?php echo $no++; ?> </td>
                  <td><?php echo $x['ID_BA']; ?></td>
                  <td><?php echo $x['PENGIRIM']; ?></td>
                  <td><?php echo $x['TANGGAL']; ?></td>
                  <TD>  
                    <a href="<?php echo base_url('Ba/view_ba_pelaporan?id_ba='.$x['ID_BA']); ?>"><button class="btn btn-primary">Buat</button></a></TD>
                </tr>

              
                <?php } ?>

                </tbody>
               
            </table>
          </div>
        </div>
        <div class="card-footer small"><!-- <button class="btn btn-primary" type="submit" href="">Update</button> --></div>
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
  <!--    <script type="text/javascript" src="<?php echo base_url("vendor/chart.js/Chart.min.js");?>" ></script> -->
     <script type="text/javascript" src="<?php echo base_url("vendor/datatables/jquery.dataTables.js");?>" ></script> 
     <script type="text/javascript" src="<?php echo base_url("vendor/datatables/dataTables.bootstrap4.js");?>" ></script>
    <!-- Custom scripts for all pages-->
     <script type="text/javascript" src="<?php echo base_url("js/sb-admin.min.js"); ?>" ></script>
    <!-- Custom scripts for this page-->
     <script type="text/javascript" src="<?php echo base_url("js/sb-admin-datatables.min.js");?>"></script>
   <!--   <script type="text/javascript" src="<?php echo base_url("js/sb-admin-charts.min.js"); ?>"></script> -->
  </div>

</body>
<!-- <script>
  $(document).ready( function () {
      $('#dataTable').DataTable();
    } );
</script> -->

</html>
