

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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" >
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
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Status AP per witel">
          <a class="nav-link" href=<?php echo base_url("Recap");?>>
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Status AP per witel</span>
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

    <!--   
    <form method="post" id="statusform" action="<?php echo base_url("repair/editStatus"); ?>" enctype="multipart/form-data"> -->
      <!-- Tabel yang akan ditampilkan -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>  Data AP</div>
        <div class="card-body">
          <a class="btn btn-primary" href="" data-toggle="modal" data-target="#modalAdd">Tambah AP</a><br/><br/>
          <div class="table-responsive" style="overflow:auto;">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            
                <thead>
                <tr>
                  <th>Command</th>
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
                <th>Command</th>
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
             
               <?php $no=1;
              foreach ($data as $x) {  ?>
            
                <tr>
                  <td><a class="btn btn-primary" href="<?php echo base_url('/Region/get_edit/'.$x['MAC_ADDRESS']); ?>"><i class="fa fa-edit"></i></a>  
                    <a class="btn btn-danger" href="<?php echo base_url('/Region/deleteAP/'.$x['MAC_ADDRESS']); ?>"><i class="fa fa-trash"></i></a></td>
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

              
                <?php } ?>

                </tbody>
              
            </table>
          </div>
        </div>
        <div class="card-footer small">
        </div>
      </div>
   </div>
    </div>

    <div id="modalAdd" class="modal fade" role="dialog">
              <div class="modal-dialog ">

                <!-- Modal edit-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah AP</h4>
                  </div>
                  <br/>
                  <div class="row top-buffer">
                    <div class="col-md-5 text-right">
                    <button class="btn btn-primary" href="" data-toggle="modal" data-target="#modalAddManual" >Tambah manual</button></div>
                      <div class="col-md-1 text-center"> atau </div>
                      <div class="col-md-6 text-right"> 
                        
                        <form id="upload" action="<?php echo base_url('Region/upload'); ?>" method="post" enctype="multipart/form-data"> 

    <input type="file" id="input-upload" name="file">
  
    <script type="text/javascript">

document.getElementById("input-upload").onchange = submitAction;
function submitAction()
{
    document.getElementById("upload").submit();
    return false;
}
</script>
   
     </form>
      </div>
             </div><br/>
          
                      
                          </div>
</div>
                             </div>
                              
 <script type="text/javascript">                             
function submitAction()
{
    document.getElementById("upload").submit();
    return false;
}</script>
    <div id="modalAddManual" class="modal fade" role="dialog">
              <div class="modal-dialog">

            
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah AP</h4>
                  </div>
                  <form method="POST" action="<?php echo site_url()."Region/addAP"; ?>" enctype='multipart/form-data'>
                  <div class="modal-body">
                    
                    <div class="form-group"> 
                  <label for="comment">Serial Number</label>
                  <input type="text" class="form-control" name="serial" required >
                </div>
                    <div class="form-group">
                  <label for="comment">Mac address</label>
                  <input type="text" class="form-control" name="mac" required >
                </div>
                    <div class="form-group">
                  <label for="comment">No Surat DO</label>
                  <input type="text" class="form-control" name="no_suratdo" required >
                </div>    
                     <div class="form-group">
                  <label for="comment">Merk</label>
                  <input type="text" class="form-control" name="merk" required >
                </div>     
                <div class="form-group">
                  <label for="comment">Mitra</label>
                  <input type="text" class="form-control" name="mitra" required >
                </div>   
              
               <div class="form-group">
                  <label for="comment">Modified Date</label>
                  <input type="text" class="form-control" name="moddate" value="<?php echo date('d-M-Y'); ?>" readonly>
                </div> 
             
                
                  <div class="form-group">
                  <label for="comment">Perubah</label>
                  <input type="text" class="form-control" name="perubah" value="<?php echo $this->session->userdata('id_user'); ?>" readonly>
                </div> 
                <div class="form-group">
                  <label for="comment">Nomor SP</label>
                  <input type="text" class="form-control" name="no_sp" >
                </div>   
                <div class="form-group">
                  <label for="comment">Witel</label>
                  <input type="text" class="form-control" name="witel" >
                </div>  
             
              </div> 

          <div class="modal-footer">
        <button class="btn btn-secondary" href="" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit" href="">Tambahkan</button>
                    </div>
                    </form>
             </div>
               
                        
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
