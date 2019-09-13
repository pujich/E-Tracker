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

   <!--  <script type="text/javascript">
      function SetAllCheckBoxes(FormName, FieldName, CheckValue)
{
  if(!document.forms[FormName])
    return;
  var objCheckBoxes = document.forms[FormName].elements[FieldName];
  if(!objCheckBoxes)
    return;
  var countCheckBoxes = objCheckBoxes.length;
  if(!countCheckBoxes)
    objCheckBoxes.checked = CheckValue;
  else
    // set the check value for all check boxes
    for(var i = 0; i < countCheckBoxes; i++)
      objCheckBoxes[i].checked = CheckValue;
}
</script> -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">E-Tracker Witel Region 5</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
       
       
       
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
      </ul>
        
        
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul></ul>
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
        </li> -->
        <!-- <li class="nav-item dropdown">
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
        </li>  -->
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
     
      <?php $table=$this->session->userdata('table');
               
           if ($table=='AP') {
          
               ?> 
               <div class="col-lg-12">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> AP per status</div>
            <div class="card-body"><div class="row"><div class="col-lg-4" style="float: center">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div><div class="col-lg-8" >
            <div class="row">
            <div class="col-xl-4 col-sm-6   mb-3">
          <div class="card text-white bg-primary o-hidden h-30">
            <div class="card-body">
              <div class="card-body-icon ">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Ready</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('Witel/getPart/READY');?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-30">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Hilang</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('Witel/getPart/HILANG');?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-30">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">REPAIR</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('Witel/getPart/REPAIR');?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
        <div class="row">
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-30">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">On Air</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('Witel/getPart/ONAIR');?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-30">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Scrapped</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('Witel/getPart/SCRAPPED');?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
         <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-30">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Dismantled</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('Witel/getPart/DISMANTLED');?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div></div>
          </div></div>
            <div class="card-footer small text-muted"></div>
          </div>
        </div>
              <!--  <br/>
      <div class="container-fluid">
          <form method="POST" name="formsort" action="<?php echo base_url('witel/sort'); ?>">
         <div class="row">
          <div class="col-sm-2 text-right">Dari :</div>
          <div class="col-sm-2 mx-auto"><input type="date" name="from"></div> 
          <div class="col-sm-2 text-right">Hingga :</div>
          <div class="col-sm-2 mx-auto"><input type="date" name="to"></div>

          <div class="col-sm-2 mx-auto"><button type="submit" name="btnsort" class="btn btn-primary btn-sm">Sort</button> </div>
         </div></form></div><br/> -->
         <?php    
           } ?> 
      <div class="card mb-3">
        <form method="post" name="formba" action="<?php echo base_url("Witel/action_witel"); ?>" enctype="multipart/form-data">
        <div class="card-header">
          <i class="fa fa-table"></i> <?php if ($this->session->userdata('table')=='AP') { ?>Data AP saat ini<?PHP }else{ ?>Histori<?php } ?></div>

        <div class="card-body">
           
          <div class="table-responsive" style="overflow:auto;">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             
              
              
                <thead>
                <tr>
                  <?php if ($table=='AP') { ?>
                 
                  <TH>
                    <!-- <input type="checkbox" name="all" id="checkall"> -->
                  </TH> 

                  <?php } ?>
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
                  <?php if ($table=='AP') { ?>
                  <TH></TH> <?php } ?>
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
                  <?php if ($table=='AP') { ?>
                  <td><input type="checkbox" name="candidate[]" value="<?php echo $x['MAC_ADDRESS']; ?>"></td> <?php } ?>
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
          <?php if ($table=='AP') { ?>
                  <input type="submit" name="btnba" class="btn btn-success" value="Buat Berita Acara">&nbsp;&nbsp;&nbsp;<input type="submit" name="btnrepair" class="btn btn-primary" value="Serahkan ke repair"><?php } ?>
        </div></form>

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
   
     <script type="text/javascript">

      var countV = <?php echo json_encode($count); ?>

     var dynamicColors = function() {
        var r = Math.floor(Math.random() * 255);
        var g = Math.floor(Math.random() * 255);
        var b = Math.floor(Math.random() * 255);
        return "rgb(" + r + "," + g + "," + b + ")";
    };

    var myLabels =[];
    var myData = [];
    var myColors = [];
    for (var i=0; i<countV.length; i++) {
      myLabels[i] = countV[i]['STATUS'];
      myData[i] = countV[i]['TOTAL'];
      myColors[i] = dynamicColors();
    }

    var pieChartDb = {
    labels: myLabels,
    datasets: [{
      label: 'Status AP saat ini',
      backgroundColor: myColors,
      data: myData
    }]  
  }

 

  var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data:  pieChartDb
   
  });

//       var ctx = document.getElementById("myPieChart");
// var myPieChart = new Chart(ctx, {
//   type: 'pie',
//   data: {
//     labels: ["Hilang", "Red", "JMBD", "Green"],
//     datasets: [{
//       data: [12.21, 15.58, 11.25, 8.32],
//       backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
//     }],
//   },
// });
</script>
  </div>


</body>
<!-- <script>
  $(document).ready( function () {
      $('#dataTable').DataTable();
    } );
</script> -->

</html>
