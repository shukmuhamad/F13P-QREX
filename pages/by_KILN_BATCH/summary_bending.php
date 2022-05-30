<!DOCTYPE html>
<?php
   include('../../includes/header.php');
   include('../session/session.php');
   include('../../database_connection.php');
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QREX | F13P</title>

  <!-- Favicons -->
  <link href="../../dist/img/F13.jpg" rel="icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">

  

  <!-- Toast -->
	<link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
	<script src="../../plugins/toastr/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../../plugins/toastr/toastr.js"></script>
	<script type="text/javascript" src="../../plugins/toastr/toastr.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>
    <!-- Right navbar links -->
    <h4><?php echo $session_Name?></h4>
    <ul class="navbar-nav ml-auto ml-md-0">
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../index.php">Logout</a>
            </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../home.php" class="brand-link">
      <img src="../../dist/img/F13.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">QREX F13P</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="../home.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-header">BY KILN BATCH</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Dimension
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form_dimension.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="summary_dimension.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Summary</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                New Batch TS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form_batch.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="summary_batch.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Summary</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Bending
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form_bending.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="summary_bending.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Summary</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">BY LOT</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
                Inspection
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../by_LOT/form_lot.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../by_LOT/summary_lot.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Summary</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">BY PALLET</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-laptop-code"></i>
              <p>
                Roughness
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../by_PALLET/form_roughness.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../by_PALLET/summary_roughness.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Summary</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-signature"></i>
              <p>
                Glossiness
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../by_PALLET/form_glossiness.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../by_PALLET/summary_glossiness.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Summary</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Summary Inspection by Kiln Batch: Bending</h1></br>
          </div></br><!-- /.col -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
               <form method="post">
                <div class="row">
                  <div class="input-group col-sm-2">
                     <input type="date" name="startDate" class="form-control text-center" id="daterange" >
                  </div>
                  <div class="input-group col-sm-2">
                    <input type="date" name="endDate" class="form-control text-center" id="daterange" >
                  </div>
                  <div class="input-group col-sm-3">
                    <input type="text" name="batchNo" class="form-control" id="" placeholder="Batch No">
                  </div>
                  
                  <div class="input-group col-sm-3">
                    <?php 
                        $query = $connect->prepare("SELECT * FROM M_InspectionStage");
                        $query->execute();
                        $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                    ?>
                    <select type="text" class="form-control" name="inspectionStage">
                      <?php foreach ($fetch as $row) { ?>
                      <option value="<?php echo $row['InspectionStage_Name'];?>"><?php echo $row['InspectionStage_Name']; }?></option>
                    </select>
                  </div>
                  <div class="input-group col-sm-2">
                  <button type="submit" name="search" class="btn btn-success ">Search</button>
                  </div>
                </div>
               </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Action</th>
                    <th>Batch No</th>
                    <th>Inspection Date</th>
                    <th>Trolley No.</th>
                    <th>Factory Customer</th>
                    <th>Inspection Stage</th>
                    <th>Former Height</th>
                    <th>Size</th>
                    <th>Former Type</th>
                    <th>Product Code</th>
                    <th>Disposition</th>
                    <th>Inspected By</th>
                    <th>Verified By</th>
                    <th>RecordID</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    if(isset($_POST['search'])){
                      //Slicing the start and end date from daterange into sql server format
                      $startDate = date('Y-m-d', strtotime($_POST['startDate']));
                      $endDate = date('Y-m-d', strtotime($_POST['endDate']));
                      $batchNo = $_POST["batchNo"];
                      $inspectionStage = $_POST["inspectionStage"];

                      // echo "</br>".$startDate;
                      // echo "</br>".$endDate;
                      // echo "</br>".$batchNo;
                      // echo "</br>".$inspectionStage;
                      //Query statements to select from view_1
                      $query = "{CALL SP_ViewListBending(?,?,?,?)}";
                      $stmt = $conn->prepare($query);
                      $stmt->bindParam(1, $startDate);
                      $stmt->bindParam(2, $endDate);
                      $stmt->bindParam(3, $batchNo);
                      $stmt->bindParam(4, $inspectionStage);
                      
                      if($stmt->execute()){
                      //Toast success message
                      echo '<script>toastr.success("Data has been fetched from the database successfully!");</script>';
                      $result = $stmt->fetchAll();
      
                      //Loop every row from query
                      foreach ($result as $row ) {
                  ?>
                  <tr>
                    <td><a href="view_detailsBending.php?RecordID=<?php echo $row['RecordID']?>&Bending_ID=<?php echo $row['Bending_ID']?>" class="btn btn-primary" target="_blank">View</a></td>
                    <td><?php echo $row['Batch_Number'];?></td>
                    <td><?php echo date('d/m/Y',strtotime($row['Inspection_Date']));?></td>
                    <td><?php echo $row['Trolley_Number'];?></td>
                    <td><?php echo $row['FactoryCustomer'];?></td>
                    <td><?php echo $row['InspectionStage_Name'];?></td>
                    <td><?php echo $row['Former_Height'];?></td>
                    <td><?php echo $row['FormerSize'];?></td>
                    <td><?php echo $row['FormerTypeCode'];?></td>
                    <td><?php echo $row['FormerProductCode'];?></td>
                    <td><?php echo $row['Disposition'];?></td>
                    <td><?php echo $row['InspectedBy'];?></td>
                    <td><?php echo $row['VerifiedBy'];?></td>
                    <td><?php echo $row['RecordID'];?></td>
                  </tr>
                  </tbody>
                  
                  <?php 
                      }}else{
                      //Toast error message
                      echo '<script>toastr.error("There was a problem encountered when fetching data from the database!")</script>';
                      }
                    }
                  ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->
<?php
  include('../../includes/footer.php');
  include('../../includes/scripts.php'); 
?>

<script>
  $(function () {
    //Table functions
    $("#table").DataTable({ 
      autoWidth: false, 
      lengthChange: false, 
      scrollX: true, 
      pageLength: 10,
      fixedColumns: {
        leftColumns: 2
      },
      buttons: [{
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 1,2,3,4,5,6,7,8,9,10,11,12,13,14]
                }
            },"print", "colvis"]
    }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)')

    //Date range picker
    $('#daterange').daterangepicker({
      locale: {
        format: 'DD/MM/YYYY'
      }
    })
  })
</script>
</body>
</html>
