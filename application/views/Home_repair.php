<?php
 //  $role=$this->session->userdata('role');
 
 //  if(isset($role)){
 
 // if($role!='admin'){
 //     redirect('login');}


 //  } else {redirect('login');}
 
?>

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
     <!--  <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol> -->
      <!-- Icon Cards-->

      <form method="post" id="statusform" action="<?php echo base_url("Repair/action_repair"); ?>" enctype="multipart/form-data">
    <!--   
    <form method="post" id="statusform" action="<?php echo base_url("repair/editStatus"); ?>" enctype="multipart/form-data"> -->
      <!-- Tabel yang akan ditampilkan -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>  AP di bagian repair</div>
        <div class="card-body">
          <div class="table-responsive" style="overflow:auto;">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            
                <thead>
                <tr>
                  <th>Serahkan ke witel</th>
                  <th>No</th>
                  <th>AP Serial</th>
                  <th>Mac Address</th>
                  <th>No Surat DO</th>
                  <th>Merk</th>
                  <th>Mitra</th>
                  <th>Tipe</th>
                  <th>Tipe AP</th>
                  <th>Status</th>
                  <th>Location ID</th>
                  <th>Alamat 1</th>
                  <th>Alamat 2</th>
                  <th>Alamat 3</th>
                  <th>Alamat 4</th>
                  <th>Last Modified</th>
                  <th>Perubah</th>
                  <th>Alasan</th>
                  <th>Keterangan</th>
                  <th>No SP</th>
                  <th>Witel</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Serahkan ke witel</th>
                 <th>No</th>
                  <th>AP Serial</th>
                  <th>Mac Address</th>
                  <th>No Surat DO</th>
                  <th>Merk</th>
                  <th>Mitra</th>
                  <th>Tipe</th>
                  <th>Tipe AP</th>
                  <th>Status</th>
                  <th>Location ID</th>
                  <th>Alamat 1</th>
                  <th>Alamat 2</th>
                  <th>Alamat 3</th>
                  <th>Alamat 4</th>
                  <th>Last Modified</th>
                  <th>Perubah</th>
                  <th>Alasan</th>
                  <th>Keterangan</th>
                  <th>No SP</th>
                  <th>Witel</th>
                </tr>
              </tfoot>
                 <tbody>
              <form method="post" id="statusform" action="<?php echo base_url("Repair/action_repair"); ?>" enctype="multipart/form-data">
               <?php $no=1;
              foreach ($data as $x) {  ?>
            
                <tr>
                  <td><input type="checkbox" name="candidate[]" value="<?php echo $x['MAC_ADDRESS']; ?>"></td>
                  <td> <?php echo $no++; ?> </td>
                  <td><?php echo $x['AP_SN']; ?></td>
                  <td><?php echo $x['MAC_ADDRESS']; ?></td>
                  <td><?php echo $x['NO_SURATDO']; ?></td>
                  <td><?php echo $x['MERK']; ?></td>
                  <td><?php echo $x['MITRA']; ?></td>
                  <td><?php echo $x['TIPE']; ?></td>
                  <td><?php echo $x['TIPE_AP']; ?></td>
                  <input type="hidden" name="id[]" value="<?php echo $x['MAC_ADDRESS']; ?>">
                  <td><?php switch ($x['STATUS']){



                  case "REPAIR" :
                  echo '<select form="statusform" name="status[]"><option value='.$x['STATUS'].' selected="selected">'.$x["STATUS"].'</option><option value="READY">READY</option></select>';
                  break;

                  case "READY" :
                  echo '<select form="statusform" name="status[]"><option value='.$x["STATUS"].' selected="selected">'.$x["STATUS"].'</option><option value="REPAIR">REPAIR</option></select>';
                  break;

                  default :
                  echo '<select form="statusform" name="status[]"><option value="null" selected="selected">---</option><option value="REPAIR">REPAIR</option><option value="READY">READY</option></select>';}

                   ?></td>
                  <td><?php echo $x['LOC_ID']; ?></td>
                  <td><?php echo $x['ALAMAT']; ?></td>
                  <td><?php echo $x['ALAMAT2']; ?></td>
                  <td><?php echo $x['ALAMAT3']; ?></td>
                  <td><?php echo $x['ALAMAT4']; ?></td>
                  <td><?php echo $x['MODIFIEDDATE']; ?></td>
                  <td><?php echo $x['PERUBAH']; ?></td>
                  <td><?php echo $x['ALASAN']; ?></td>
                  <td><?php echo $x['KETERANGAN']; ?></td>
                  <td><?php echo $x['NO_SP']; ?></td>
                  <td><?php echo $x['WITEL']; ?></td>
                </tr>

              
                <?php } ?>

                </tbody>
              
            </table>
          </div>
        </div>
        <div class="card-footer small">
          <div class="row">
            <div class="col-md-7">
          <button class="btn btn-primary" name="btnupdate" type="submit" href="">Update</button>
         </div>
          <div class="col-md-1 text-right">
           <p>Ke:  </p>
         </div>
         <div class="col-md-1 text-right">
          <select style="float: right;" form="statusform" name="witel_tujuan">
            <option value='Jakarta' selected="selected">Jakarta</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Denpasar">Denpasar</option>
          </select>
        </div>
         <div class="col-md-3 text-left">
          <button style="float: right" class="btn btn-success" name="btnba" type="submit" href="">Buat BA penyerahan</button>
        </div>
          
       
         </div>
        </div>
      </div>
   
    </div> </form>
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
