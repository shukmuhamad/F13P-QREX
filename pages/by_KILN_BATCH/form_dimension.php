<!DOCTYPE html>
<?php
   include('../../includes/header.php');
   include('../session/session.php');
   include('../../database_connection.php');
?>

<html lang="en">
<head>
  <!-- Toast -->
	<link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
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
                <a class="dropdown-item" href="../../logout.php">Logout</a>
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Dimension
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form_dimension.php" class="nav-link active">
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
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
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
                <a href="summary_bending.php" class="nav-link">
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
            <h1 class="m-0 text-dark">PLEASE INSERT CORRECT DATA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">BY_KILN_BATCH</a></li>
              <li class="breadcrumb-item active">Form_Dimension</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Form 1</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Form 2</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Form 3</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
               <form role="form" id="form_dimension" method ="post">
                <div class="tab-content">
                  
                  <!-- /.tab-pane -->
                  <div class="active tab-pane" id="activity">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Batch Number</label>
                          <div class="col-sm-6">
                            <input type="text" name="batchnumber" class="form-control" id="batchnumberDimension" onInput="checkresult()" required><span id="check-batchNo"></span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_InspectionStage");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">Inspection Stage</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="inspectionstage" required>
                              <?php foreach ($fetch as $row) { ?>
                              <option type="text" value= "<?php echo $row['InspectionStage_Key'];?>" class="form-control"><?php echo $row['InspectionStage_Name'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Former Height</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="formerheight" required>
                              <option type="" class="form-control" value=""></option>
                              <option type="" class="form-control" value="360">360</option>
                              <option type="" class="form-control" value="400">400</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Inspection date/time</label>
                          <div class="col-sm-6">
                            <input type="datetime-local" name="inspection_date" class="form-control" value="<?php echo date('Y-m-d\TH:i:s'); ?>" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Rework Remark</label>
                          <div class="col-sm-6">
                            <input type="text" name="rework" class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group row">
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_FormerTypeCode");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">Former Type</label>
                          <div class="col-sm-6">
                            <select name="formertype" class="form-control select2" required>
                              <?php foreach ($fetch as $row) { ?>
                              <option type="text" class="form-control" id="" value="<?php echo $row['Former_TypeKey'];?>"><?php echo $row['FormerTypeCode'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_Size");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">Size</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="size" required>
                              <?php foreach ($fetch as $row) { ?>
                              <option type="text" class="form-control" id="" value="<?php echo $row['SizeKey'];?>"><?php echo $row['FormerSize'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_ProductCode");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">Product Code</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="productcode" required>
                              <?php foreach ($fetch as $row) { ?>
                              <option type="text" class="form-control" id="" value="<?php echo $row['ProductCodeKey'];?>"><?php echo $row['FormerProductCode'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Product Date</label>
                          <div class="col-sm-6">
                            <input type="date" name="productDate" class="form-control" id="" placeholder="" required>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                  </div>

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">No</th>
                            <th class="text-center">Sample No</th>
                            <th class="text-center">1</th>
                            <th class="text-center">2</th>
                            <th class="text-center">3</th>
                            <th class="text-center">4</th>
                            <th class="text-center">5</th>
                            <th class="text-center" style="width: 40px">Low Range Specification</th>
                            <th class="text-center" style="width: 40px">Middle Range Specification</th>
                            <th class="text-center" style="width: 40px">High Range Specification</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td>Mould ID</td>
                            <td><input type="text" name="mouldID_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="mouldID_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="mouldID_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="mouldID_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="mouldID_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="mouldID_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="mouldID_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="mouldID_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td>Former Weight (g)</td>
                            <td><input type="text" name="formerWeight_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="formerWeight_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="formerWeight_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="formerWeight_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="formerWeight_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="formerWeight_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="formerWeight_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="formerWeight_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td>Bending</td>
                            <td><select class="form-control" name="bending_1">
                              <option class="form-control" id="" value=""></option>
                              <option class="form-control" id="" value="PASS">PASS</option>
                              <option class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="bendingL_2">
                              <option class="form-control" id="" value=""></option>
                              <option class="form-control" id="" value="PASS">PASS</option>
                              <option class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="bendingL_3">
                              <option class="form-control" id="" value=""></option>
                              <option class="form-control" id="" value="PASS">PASS</option>
                              <option class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="bendingL_4">
                              <option class="form-control" id="" value=""></option>
                              <option class="form-control" id="" value="PASS">PASS</option>
                              <option class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="bendingL_5">
                              <option class="form-control" id="" value=""></option>
                              <option class="form-control" id="" value="PASS">PASS</option>
                              <option class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>4.</td>
                            <td>Cuff circumference (mm)</td>
                            <td><input type="text" name="cuff_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="cuff_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="cuff_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="cuff_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="cuff_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="cuff_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="cuff_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="cuff_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>5.</td>
                            <td>Former Height (mm)</td>
                            <td><input type="text" name="formerHeight_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="formerHeight_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="formerHeight_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="formerHeight_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="formerHeight_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="formerHeight_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="formerHeight_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="formerHeight_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>6.</td>
                            <td>Outer Base (mm)</td>
                            <td><input type="text"  name="outerBase_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text"  name="outerBase_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text"  name="outerBase_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text"  name="outerBase_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text"  name="outerBase_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text"  name="outerBase_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text"  name="outerBase_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text"  name="outerBase_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>7.</td>
                            <td>Palm circumference (mm)</td>
                            <td><input type="text"  name="palmCircumference_1"    class="form-control" id="disableButton"></td>
                            <td><input type="text"  name="palmCircumference_2"    class="form-control" id="disableButton"></td>
                            <td><input type="text"  name="palmCircumference_3"    class="form-control" id="disableButton"></td>
                            <td><input type="text"  name="palmCircumference_4"    class="form-control" id="disableButton"></td>
                            <td><input type="text"  name="palmCircumference_5"    class="form-control" id="disableButton"></td>
                            <td><input type="text"  name="palmCircumference_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text"  name="palmCircumference_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text"  name="palmCircumference_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>8.</td>
                            <td>Span width (mm)</td>
                            <td><input type="text"  name="spanWidth_1"    class="form-control" id="disableButton"></td>
                            <td><input type="text"  name="spanWidth_2"    class="form-control" id="disableButton"></td>
                            <td><input type="text"  name="spanWidth_3"    class="form-control" id="disableButton"></td>
                            <td><input type="text"  name="spanWidth_4"    class="form-control" id="disableButton"></td>
                            <td><input type="text"  name="spanWidth_5"    class="form-control" id="disableButton"></td>
                            <td><input type="text"  name="spanWidth_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text"  name="spanWidth_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text"  name="spanWidth_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>9.</td>
                            <td>Wrist circumference (mm)</td>
                            <td><input type="text"  name="wristCircumference_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text"  name="wristCircumference_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text"  name="wristCircumference_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text"  name="wristCircumference_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text"  name="wristCircumference_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text"  name="wristCircumference_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text"  name="wristCircumference_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text"  name="wristCircumference_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>10.</td>
                            <td>Base thickness (mm)</td>
                            <td><input type="text" name="baseThickness_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="baseThickness_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="baseThickness_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="baseThickness_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="baseThickness_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="baseThickness_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="baseThickness_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="baseThickness_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>11.</td>
                            <td>Finger Length F1, Thumb</td>
                            <td><input type="text" name="fingerLengthF1_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="fingerLengthF1_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="fingerLengthF1_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="fingerLengthF1_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="fingerLengthF1_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="fingerLengthF1_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="fingerLengthF1_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="fingerLengthF1_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>12.</td>
                            <td>Finger Length F2, Index</td>
                            <td><input type="text" name="fingerLengthF2_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="fingerLengthF2_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="fingerLengthF2_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="fingerLengthF2_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="fingerLengthF2_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="fingerLengthF2_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="fingerLengthF2_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="fingerLengthF2_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>13.</td>
                            <td>Finger Length F3, Middle</td>
                            <td><input type="text" name="firstLengthF3_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstLengthF3_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstLengthF3_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstLengthF3_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstLengthF3_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstLengthF3_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstLengthF3_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstLengthF3_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>14.</td>
                            <td>Finger Length F4, Ring</td>
                            <td><input type="text" name="firstLengthF4_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstLengthF4_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstLengthF4_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstLengthF4_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstLengthF4_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstLengthF4_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstLengthF4_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstLengthF4_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>15.</td>
                            <td>Finger Length F5, Little</td>
                            <td><input type="text" name="firstLengthF5_1"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstLengthF5_2"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstLengthF5_3"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstLengthF5_4"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstLengthF5_5"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstLengthF5_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstLengthF5_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstLengthF5_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>16.</td>
                            <td>Finger Circumference F1, Thumb</td>
                            <td><input type="text" name="firstCircumferenceF1_1"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF1_2"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF1_3"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF1_4"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF1_5"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF1_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstCircumferenceF1_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstCircumferenceF1_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>17.</td>
                            <td>Finger Circumference F2, Index</td>
                            <td><input type="text" name="firstCircumferenceF2_1"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF2_2"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF2_3"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF2_4"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF2_5"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF2_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstCircumferenceF2_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstCircumferenceF2_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>18.</td>
                            <td>Finger Circumference F3, Middle</td>
                            <td><input type="text" name="firstCircumferenceF3_1"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF3_2"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF3_3"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF3_4"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF3_5"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="firstCircumferenceF3_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstCircumferenceF3_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstCircumferenceF3_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>19.</td>
                            <td>Finger Circumference F4, Ring</td>
                            <td><input type="text" name="firstCircumferenceF4_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstCircumferenceF4_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstCircumferenceF4_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstCircumferenceF4_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstCircumferenceF4_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstCircumferenceF4_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstCircumferenceF4_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstCircumferenceF4_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>20.</td>
                            <td>Finger Circumference F5, Little</td>
                            <td><input type="text" name="firstCircumferenceF5_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstCircumferenceF5_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstCircumferenceF5_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstCircumferenceF5_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstCircumferenceF5_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="firstCircumferenceF5_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstCircumferenceF5_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="firstCircumferenceF5_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>21.</td>
                            <td>Textured Length F1, Thumb</td>
                            <td><input type="text" name="textureLengthF1_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF1_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF1_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF1_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF1_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF1_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="textureLengthF1_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="textureLengthF1_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>22.</td>
                            <td>Textured Length F2, Index</td>
                            <td><input type="text" name="textureLengthF2_1"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="textureLengthF2_2"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="textureLengthF2_3"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="textureLengthF2_4"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="textureLengthF2_5"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="textureLengthF2_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="textureLengthF2_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="textureLengthF2_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>23.</td>
                            <td>Textured Length F3, Middle</td>
                            <td><input type="text" name="textureLengthF3_1"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="textureLengthF3_2"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="textureLengthF3_3"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="textureLengthF3_4"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="textureLengthF3_5"    class="form-control" id="disableButton"></td>
                            <td><input type="text" name="textureLengthF3_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="textureLengthF3_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="textureLengthF3_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>24.</td>
                            <td>Textured Length F4, Ring</td>
                            <td><input type="text" name="textureLengthF4_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF4_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF4_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF4_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF4_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF4_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="textureLengthF4_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="textureLengthF4_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>25.</td>
                            <td>Textured Length F5, Little</td>
                            <td><input type="text" name="textureLengthF5_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF5_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF5_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF5_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF5_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="textureLengthF5_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="textureLengthF5_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="textureLengthF5_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>26.</td>
                            <td>Palm Flying Textured</td>
                            <td><input type="text" name="palmFlying_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="palmFlying_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="palmFlying_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="palmFlying_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="palmFlying_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="palmFlying_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="palmFlying_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="palmFlying_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>27.</td>
                            <td>Palm Textured Length</td>
                            <td><input type="text" name="palmTextured_1"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="palmTextured_2"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="palmTextured_3"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="palmTextured_4"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="palmTextured_5"    class="form-control" id="disableButton" ></td>
                            <td><input type="text" name="palmTextured_low"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="palmTextured_mid"  class="form-control" id="disableButton" readonly></td>
                            <td><input type="text" name="palmTextured_high" class="form-control" id="disableButton" readonly></td>
                          </tr>
                          <tr>
                            <td>28.</td>
                            <td>Disposition</td>
                            <td><select class="form-control" name="disposition_1">
                              <option type="text" class="form-control" id="" value=""></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="disposition_2">
                              <option type="text" class="form-control" id="" value=""></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="disposition_3">
                              <option type="text" class="form-control" id="" value=""></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="disposition_4">
                              <option type="text" class="form-control" id="" value=""></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="disposition_5">
                              <option type="text" class="form-control" id="" value=""></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table></br>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Overall Disposition Status</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="overall_disposition" required>
                              <option type="text" class="form-control" id="" value=""></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Inspected By</label>
                          <div class="col-sm-6">
                            <input type="text" name="inspectedBY" class="form-control" value="<?php echo $session_BadgeID ?>" readonly>
                          </div>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Verified By</label>
                          <div class="col-sm-6">
                            <input type="text" name="verifiedBY" class="form-control" id="" placeholder="Badge Number" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Verified Date</label>
                          <div class="col-sm-6">
                          <input name="verifiedDate" type='datetime-local' placeholder="dd/mm/yyyy --:-- --" style="border:3px solid #E3E3E3;" onfocus="this.type='datetime-local'" onblur="if(this.value==='')this.type='text'" class="form-control" readonly>
                        </div>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      
                      <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-primary" style="float:right">Submit</button>&nbsp;&nbsp;
                      </div>
                    </div>  
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
               </form>


               <script>
                 $('#disableButton').on('keyup keypress', function(e) { //disable auto jump to button submit after click button in thickness gauge
                  var keyCode = e.keyCode || e.which;
                  if (keyCode === 13) { 
                    e.preventDefault();
                    return false;
                  }
                 });

                 $('#form_dimension').on('submit', function(event){
                    //code here
                    event.preventDefault();
                    
                    var form_dimension_input = $(this).serializeArray();
                    console.log(form_dimension_input);
                    console.table(form_dimension_input);
                    var error = '';

                    if(error == '')
                    {
                    $.ajax({
                    url: "transaction-dimension-form.php",
                    type: "post",
                    data: {
                    data : form_dimension_input
                    } ,
                    success: function (data) {

                    try {
                    console.log("inside get:"+data);
                    
                    if(data == '1SUCCESS'){
                      toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": true,
                          "progressBar": true,
                          "positionClass": "toast-top-center",
                          "preventDuplicates": true,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "5000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                      }
                      toastr.options.onHidden = function() {
                      }
                      toastr["success"]("User Information successfully registered into the system.", "Success!");
                      setTimeout(function() {
                        window.location.href = 'form_dimension.php';
                        
                      }, 1000);
                    }else{
                      toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": true,
                          "progressBar": true,
                          "positionClass": "toast-top-center",
                          "preventDuplicates": true,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "5000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                      }
                      toastr.options.onHidden = function() {
                      }
                      toastr["error"]("User already registered into the system.", "Kindly recheck!");
                    }


                    // console.table(resData);
                    // alert("Submitted!");
                    }
                    catch(err) {
                    // alert("Error!");
                    console.log(err);
                    }

                    // You will get response from your PHP page (what you echo or print)
                    },
                    error: function(jqXHR, textStatus, errorThrown) {

                    console.log(textStatus, errorThrown);


                    }
                  });

                  }
                    else
                    {
                    // $('#error').html('<div class="alert alert-danger">'+error+'</div>');
                    alert("Form not complete. "+error);
                    event.preventDefault();
                    }
                 });
                 </script>
                 <script>
                  function checkresult() {
                  
                      jQuery.ajax({
                          url: "../filterBatchNo.php",
                          data: 'batchnumberDimension=' + $("#batchnumberDimension").val(),
                          type: "GET",
                          success: function(data) {
                              $("#check-batchNo").html(data);
                          },
                          error: function() {}
                      });
                  }
                 </script>
               
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php
   include('../../includes/footer.php');
  ?>
</div>
<!-- ./wrapper -->

</body>
</html>
