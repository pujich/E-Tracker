

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
       
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
          <a class="nav-link" href=<?php echo base_url("Admin/getUser");?>>
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Users</span>
          </a>
        </li>
       
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data AP saat ini">
          <a class="nav-link" href="<?php echo base_url("Admin/getAP");?>">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Data AP saat ini</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Histori">
          <a class="nav-link" href=<?php echo base_url("Admin/getHistory");?>>
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Histori</span>
          </a>
        </li>
       
       

      <!--   <li class="nav-item" data-toggle="tooltip" data-placement="right" title="AP yang belum diproses">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseNotYet" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">AP yang belum diproses</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseNotYet">
            <li>
              <a href="<?php echo base_url("Admin/getTempW");?>">Witel</a>
            </li>
            <li>
              <a href="<?php echo base_url("Admin/getTempR");?>">Repair</a>
            </li> -->
          </ul>
      </ul>
        </li>
        
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li> -->
       <!--  <li class="nav-item">
          <form method="POST" action="<?php echo base_url().'Admin/search'?>" class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input name="key" class="form-control" type="text" placeholder="Search">
              <span class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li> -->
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
          <i class="fa fa-table"></i>  User</div>
        <div class="card-body"><?php $table=$this->session->userdata('table'); if ($table=='USERPASS') {
          # code...
         ?>
          <a class="btn btn-primary" href="" data-toggle="modal" data-target="#modalAdd">Tambah User</a><br/><br/><?php } ?>
          <div class="table-responsive" style="overflow:auto;">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <?php  
              if ($table=='USERPASS') { ?>
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th>Jabatan</th>
                  <th>Witel</th>
                  <th>Command</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th>Jabatan</th>
                  <th>Witel</th>
                  <th>Command</th>
                </tr>
              </tfoot>
                 <tbody>
              <?php $no=1;
              foreach ($data as $x) {  ?>
             
                <tr>
                  <td> <?php echo $no++; ?> </td>
                  <td><?php echo $x['NAMA']; ?></td>
                  <td><?php echo $x['USERNAME']; ?></td>
                  <td><?php echo $x['PASSWORD']; ?></td>
                  <td><?php echo $x['ROLE']; ?></td>
                  <td><?php echo $x['JABATAN']; ?></td>
                  <td><?php echo $x['WITEL']; ?></td>
                  <td><a class="btn btn-primary" href="" data-toggle="modal" data-target="#modalEdit<?php echo $no; ?>">Edit</a>  
                    <a class="btn btn-danger" href="" data-toggle="modal" data-target="#modalDelete<?php echo $no; ?>">Hapus</a></td>
                </tr>

         <div id="modalEdit<?php echo $no; ?>" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal edit-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data User</h4>
                  </div>
                  <form method="POST" action="<?php echo site_url()."Admin/editUser/".$x['ID_USER']; ?>" enctype='multipart/form-data'>
                  <div class="modal-body">
                    <div class="form-group"> 
                  <label for="comment">Nama</label>
                  <input type="text" class="form-control" name="nama" required="" value="<?php echo $x['NAMA']; ?>">
                </div>
                    <div class="form-group">
                  <label for="comment">Username</label>
                  <input type="text" class="form-control" name="user" required="" value="<?php echo $x['USERNAME']; ?>">
                </div>
                    <div class="form-group">
                  <label for="comment">Password</label>
                  <input type="text" class="form-control" name="pass" required="" value="<?php echo $x['PASSWORD']; ?>">
                </div>    
                    <div class="form-group">
                  <label for="comment">Role</label>
                  <textarea type="text" class="form-control" name="role" required="" ><?php echo $x['ROLE']; ?></textarea>   
                </div>       
                <div class="form-group">
                  <label for="comment">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" required="" value="<?php echo $x['JABATAN']; ?>">
                </div>   
                <div class="form-group">
                  <label for="comment">Witel</label>
                  <input type="text" class="form-control" name="witel" required="" value="<?php echo $x['WITEL']; ?>">
                </div>  
                    
    
             </div>
               <div class="modal-footer">
        <button class="btn btn-secondary" href="" data-dismiss="modal">Close</buttons>
        <button class="btn btn-primary" type="submit" href="">Edit</button>
                    </div>
                        </form>
                          </div>

                             </div>
                                   </div>

<div class="modal fade" id="modalDelete<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Apakah anda yakin ingin menghapus user ini?</div>
          <div class="modal-footer">
            <a class="btn btn-secondary" href="" data-dismiss="modal">Cancel</a>
            <a class="btn btn-danger" href="<?php echo base_url('Admin/deleteUser/'.$x['ID_USER']); ?>">Hapus</a>
          </div>
        </div>
      </div>
    </div>

                    <?php } } else { ?>
                <thead>
                <tr>
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
               <?php $no=1;
              foreach ($data as $x) {  ?>
            
                <tr>
                  <td> <?php echo $no++; ?> </td>
                  <td><?php echo $x['AP_SN']; ?></td>
                  <td><?php echo $x['MAC_ADDRESS']; ?></td>
                  <td><?php echo $x['NO_SURATDO']; ?></td>
                  <td><?php echo $x['MERK']; ?></td>
                  <td><?php echo $x['MITRA']; ?></td>
                  <td><?php echo $x['TIPE']; ?></td>
                  <td><?php echo $x['TIPE_AP']; ?></td>
                  <td><?php echo $x['STATUS']; ?></td>
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

              
                <?php }} ?>

                </tbody>
              
            </table>

          <div id="modalAdd" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal edit-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah user</h4>
                  </div>
                  <form method="POST" action="<?php echo site_url()."Admin/add_user"; ?>" enctype='multipart/form-data'>
                  <div class="modal-body">
                    <div class="form-group"> 
                  <label for="comment">Nama</label>
                  <input type="text" class="form-control" name="nama" required="" >
                </div>
                    <div class="form-group">
                  <label for="comment">Username</label>
                  <input type="text" class="form-control" name="user" required="" >
                </div>
                    <div class="form-group">
                  <label for="comment">Password</label>
                  <input type="text" class="form-control" name="pass" required="" >
                </div>    
                     <div class="form-group">
                  <label for="comment">Role</label>
                  <input type="text" class="form-control" name="role" required="" >
                </div>     
                <div class="form-group">
                  <label for="comment">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" required="" >
                </div>   
                <div class="form-group">
                  <label for="comment">Witel</label>
                  <input type="text" class="form-control" name="witel" required="" >
                </div>   
    
             </div>
               <div class="modal-footer">
        <button class="btn btn-secondary" href="" data-dismiss="modal">Close</buttons>
        <button class="btn btn-primary" type="submit" href="">Tambah</button>
                    </div>
                        </form>
                          </div>

                             </div>
                                   </div>

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
