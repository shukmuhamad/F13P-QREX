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
    <!-- Navbar-->
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
      <img src="../../dist/img/F13.jpg"  class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">F13P QREX</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="../index.php" class="nav-link">
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
                <a href="../by_KILN_BATCH/form_dimension.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../by_KILN_BATCH/summary_dimension.php" class="nav-link">
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
                <a href="../by_KILN_BATCH//form_batch.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../by_KILN_BATCH/summary_batch.php" class="nav-link">
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
                <a href="../by_KILN_BATCH/form_bending.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../by_KILN_BATCH/summary_bending.php" class="nav-link">
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
                <a href="form_roughness.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="summary_roughness.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Summary</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-file-signature"></i>
              <p>
                Glossiness
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form_glossiness.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="summary_glossiness.php" class="nav-link">
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
              <li class="breadcrumb-item"><a href="#">BY_PALLET</a></li>
              <li class="breadcrumb-item active">Form_Glossiness</li>
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
               <form role="form" method ="post">
                <div class="tab-content">
                  <!-- /.tab-pane -->
                  <div class="active tab-pane" id="activity">
                    <div class="row">
                    
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Batch Number</label>
                          <div class="col-sm-6">
                            <input type="text" name="batchnumber" class="form-control" id="batchnumberGlossiness" onInput="checkresult()" required><span id="check-batchNo"></span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Inspection Date</label>
                          <div class="col-sm-6">
                            <input type="datetime-local" name="inspectiondate" class="form-control" value="<?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date('Y-m-d\TH:i:s'); ?>">
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
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Pallet Number</label>
                          <div class="col-sm-6">
                            <input type="text" name="palletnumber" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Former Height</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="formerheight" required>
                              <option type="text" class="form-control" value=""></option>
                              <option type="text" class="form-control" value="360">360</option>
                              <option type="text" class="form-control" value="400">400</option>
                            <select>
                          </div>
                        </div>
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
                          <label class="col-sm-2 col-form-label">Rework Remark</label>
                          <div class="col-sm-6">
                            <input type="text" name="rework" class="form-control"  required>
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
                            <th class="text-center">Sample No</th>
                            <th class="text-center">Production Date</th>
                            <th class="text-center" >Glossiness Reading (µm)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td><input type="date" class="form-control" id="" name="production_date1"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_1" onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td><input type="date" class="form-control" id="" name="production_date2"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_2" onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td><input type="date" class="form-control" id="" name="production_date3"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_3" onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td>4.</td>
                            <td><input type="date" class="form-control" id="" name="production_date4"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_4" onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td>5.</td>
                            <td><input type="date" class="form-control" id="" name="production_date5"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_5" onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td>6.</td>
                            <td><input type="date" class="form-control" id="" name="production_date6"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_6" onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td>7.</td>
                            <td><input type="date" class="form-control" id="" name="production_date7"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_7" onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td>8.</td>
                            <td><input type="date" class="form-control" id="" name="production_date8"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_8" onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td>9.</td>
                            <td><input type="date" class="form-control" id="" name="production_date9"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_9" onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td>10.</td>
                            <td><input type="date" class="form-control" id="" name="production_date10"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_10" onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td>11.</td>
                            <td><input type="date" class="form-control" id="" name="production_date11"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_11" onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td>12.</td>
                            <td><input type="date" class="form-control" id="" name="production_date12"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_12" onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td>13.</td>
                            <td><input type="date" class="form-control" id="" name="production_date13"></td>
                            <td><input type="number" class="form-control glossiness_valueAverage" name="glossiness_13"  onkeyup="average();decimal(this,3);"></td>
                          </tr>
                          <tr>
                            <td colspan="2" class="text-center">Glossiness Average</td>
                            <td><input type="text" class="form-control glossiness_Average" name="glossiness_Average"></td>
                          </tr>
                        </tbody>
                      </table></br>
                      <script>
                          $(document).ready(function() {
                              $(document).on("input", ".glossiness_valueAverage", function() {
                                  $('table tr').each(function() {
                                  // variables for holding total and count
                                  var total = 0,
                                      count = 0;
                                  
                                  // get all input fields and iterate over them
                                  $('.glossiness_valueAverage', this).each(function() {
                                      // check the value is non-empty
                                      if (this.value.trim() != '') {
                                      // increment count for calculating average
                                      count++;
                                      // update total based on input value
                                      // treat input value as 0 if number parsing produces NaN
                                      total += (Number(this.value.trim()) || 0);
                                      }
                                  });
                                  // calculate and update the average although treat as zero if NaN
                                  $('.glossiness_Average', this).val(total / count || 0);
                                  });
                              });
                            
                          });
                      </script>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <?php 
                              $query = $connect->prepare("SELECT * FROM M_AQL");
                              $query->execute();
                              $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">AQL</label>
                            <div class="col-sm-2">
                              <select class="form-control select2" name="AQL">
                                <?php foreach ($fetch as $row) { ?>
                                <option type="text" class="form-control" value="<?php echo $row['AQL_Key'];?>"><?php echo $row['AQL_Name'];}?></option>
                              </select>
                            </div>
                          <label class="col-sm-2 col-form-label">Acceptance</label>
                            <div class="col-sm-2">
                              <input type="text" name="acceptance" class="form-control" id="" value="0" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Inspected By</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" id="" name="inspectedBy" value="<?php echo $session_BadgeID ?>" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Disposition Status</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="disposition">
                              <option type="text" class="form-control" id="" value=""></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                            <select>
                          </div>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Verified By</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="verifiedby" placeholder="Badge Number" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Verified Date</label>
                          <div class="col-sm-6">
                            <input type="datetime-local" class="form-control" name="verified_date" value="<?php echo date('Y-m-d\TH:i:s'); ?>" readonly>
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
               </form>

               <?php
                if (isset($_POST['submit'])) {

                  $batchnumber = $_POST['batchnumber'];
                  // echo "</br>".$batchnumber;
                  $inspectiondate = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$_POST['inspectiondate'])));
                  // echo "</br>".$inspectiondate;
                  $size = $_POST['size'];
                  // echo "</br>".$size;
                  $productcode = $_POST['productcode'];
                  // echo "</br>".$productcode;
                  $inspectionstage = $_POST['inspectionstage'];
                  // echo "</br>".$inspectionstage;
                  $palletnumber = $_POST['palletnumber'];
                  // echo "</br>".$palletnumber;
                  $formerheight = $_POST['formerheight'];
                  // echo "</br>".$formerheight;
                  $formertype = $_POST['formertype'];
                  // echo "</br>".$formertype;
                  $rework = $_POST['rework'];
                  // echo "</br>".$rework;
                  $glossiness_Average = $_POST['glossiness_Average'];
                  // echo "</br>".$glossiness_Average;
                  $production_date1 = $_POST['production_date1'];
                  // echo "</br>".$production_date1;
                  $production_date2 = $_POST['production_date2'];
                  // echo "</br>".$production_date2;
                  $production_date3 = $_POST['production_date3'];
                  // echo "</br>".$production_date3;
                  $production_date4 = $_POST['production_date4'];
                  // echo "</br>".$production_date4;
                  $production_date5 = $_POST['production_date5'];
                  // echo "</br>".$production_date5;
                  $production_date6 = $_POST['production_date6'];
                  // echo "</br>".$production_date6;
                  $production_date7 = $_POST['production_date7'];
                  // echo "</br>".$production_date7;
                  $production_date8 = $_POST['production_date8'];
                  // echo "</br>".$production_date8;
                  $production_date9 = $_POST['production_date9'];
                  // echo "</br>".$production_date9;
                  $production_date10 = $_POST['production_date10'];
                  // echo "</br>".$production_date10;
                  $production_date11 = $_POST['production_date11'];
                  // echo "</br>".$production_date11;
                  $production_date12 = $_POST['production_date12'];
                  // echo "</br>".$production_date12;
                  $production_date13 = $_POST['production_date13'];
                  // echo "</br>".$production_date13;
                  $glossiness_1 = $_POST['glossiness_1'];
                  // echo "</br>".$glossiness_1;
                  $glossiness_2 = $_POST['glossiness_2'];
                  // echo "</br>".$glossiness_2;
                  $glossiness_3 = $_POST['glossiness_3'];
                  // echo "</br>".$glossiness_3;
                  $glossiness_4 = $_POST['glossiness_4'];
                  // echo "</br>".$glossiness_4;
                  $glossiness_5 = $_POST['glossiness_5'];
                  // echo "</br>".$glossiness_5;
                  $glossiness_6 = $_POST['glossiness_6'];
                  // echo "</br>".$glossiness_6;
                  $glossiness_7 = $_POST['glossiness_7'];
                  // echo "</br>".$glossiness_7;
                  $glossiness_8 = $_POST['glossiness_8'];
                  // echo "</br>".$glossiness_8;
                  $glossiness_9 = $_POST['glossiness_9'];
                  // echo "</br>".$glossiness_9;
                  $glossiness_10 = $_POST['glossiness_10'];
                  // echo "</br>".$glossiness_10;
                  $glossiness_11 = $_POST['glossiness_11'];
                  // echo "</br>".$glossiness_11;
                  $glossiness_12 = $_POST['glossiness_12'];
                  // echo "</br>".$glossiness_12;
                  $glossiness_13 = $_POST['glossiness_13'];
                  // echo "</br>".$glossiness_13;
                  $AQL = $_POST['AQL'];
                  // echo "</br>".$aql;
                  $acceptance = $_POST['acceptance'];
                  // echo "</br>".$acceptance;
                  $inspectedBy = $_POST['inspectedBy'];
                  // echo "</br>".$inspectedBy;
                  $disposition = $_POST['disposition'];
                  // echo "</br>".$disposition;
                  $verifiedby = $_POST['verifiedby'];
                  // echo "</br>".$verifiedby;
                  $verified_date = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$_POST['verified_date'])));
                  // echo "</br>".$verified_date;

                  $query = "{CALL SP_Register_Glossiness(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
                  $stmt = $connect->prepare($query);

                  $stmt->bindParam(1, $batchnumber);
                  // echo "</br>".$batchnumber;
                  $stmt->bindParam(2, $inspectiondate);
                  // echo "</br>".$inspectiondate;
                  $stmt->bindParam(3, $size, PDO::PARAM_INT);
                  // echo "</br>".$size;
                  $stmt->bindParam(4, $productcode, PDO::PARAM_INT);
                  // echo "</br>".$productcode;
                  $stmt->bindParam(5, $inspectionstage, PDO::PARAM_INT);
                  // echo "</br>".$inspectionstage;
                  $stmt->bindParam(6, $palletnumber);
                  // echo "</br>".$palletnumber;
                  $stmt->bindParam(7, $formerheight, PDO::PARAM_INT);
                  // echo "</br>".$formerheight;
                  $stmt->bindParam(8, $formertype, PDO::PARAM_INT);
                  // echo "</br>".$formertype;
                  $stmt->bindParam(9, $rework);
                  // echo "</br>".$rework;
                  $stmt->bindParam(10, $glossiness_Average);
                  // echo "</br>".$glossiness_Average;

                  $stmt->bindParam(11, $production_date1);
                  // echo "</br>".$production_date1;
                  $stmt->bindParam(12, $production_date2);
                  // echo "</br>".$production_date2;
                  $stmt->bindParam(13, $production_date3);
                  // echo "</br>".$production_date3;
                  $stmt->bindParam(14, $production_date4);
                  // echo "</br>".$production_date4;
                  $stmt->bindParam(15, $production_date5);
                  // echo "</br>".$production_date5;
                  $stmt->bindParam(16, $production_date6); 
                  // echo "</br>".$production_date6;
                  $stmt->bindParam(17, $production_date7);
                  // echo "</br>".$production_date7;
                  $stmt->bindParam(18, $production_date8);
                  // echo "</br>".$production_date8;
                  $stmt->bindParam(19, $production_date9);
                  // echo "</br>".$production_date9;
                  $stmt->bindParam(20, $production_date10);
                  // echo "</br>".$production_date10;
                  $stmt->bindParam(21, $production_date11);
                  // echo "</br>".$production_date11;
                  $stmt->bindParam(22, $production_date12);
                  // echo "</br>".$production_date12;
                  $stmt->bindParam(23, $production_date13);
                  // echo "</br>".$production_date13;

                  $stmt->bindParam(24, $glossiness_1);
                  // echo "</br>".$glossiness_1;
                  $stmt->bindParam(25, $glossiness_2);
                  // echo "</br>".$glossiness_2;
                  $stmt->bindParam(26, $glossiness_3);
                  // echo "</br>".$glossiness_3;
                  $stmt->bindParam(27, $glossiness_4);
                  // echo "</br>".$glossiness_4;
                  $stmt->bindParam(28, $glossiness_5);
                  // echo "</br>".$glossiness_5;
                  $stmt->bindParam(29, $glossiness_6); 
                  // echo "</br>".$glossiness_6;
                  $stmt->bindParam(30, $glossiness_7);
                  // echo "</br>".$glossiness_7;
                  $stmt->bindParam(31, $glossiness_8);
                  // echo "</br>".$glossiness_8;
                  $stmt->bindParam(32, $glossiness_9);
                  // echo "</br>".$glossiness_9;
                  $stmt->bindParam(33, $glossiness_10);
                  // echo "</br>".$glossiness_10;
                  $stmt->bindParam(34, $glossiness_11);
                  // echo "</br>".$glossiness_11;
                  $stmt->bindParam(35, $glossiness_12);
                  // echo "</br>".$glossiness_12;
                  $stmt->bindParam(36, $glossiness_13);
                  // echo "</br>".$glossiness_13;
                  
                  $stmt->bindParam(37, $AQL, PDO::PARAM_INT);
                  // echo "</br>".$AQL;
                  $stmt->bindParam(38, $acceptance);
                  // echo "</br>".$acceptance;
                  $stmt->bindParam(39, $inspectedBy);
                  // echo "</br>".$inspectedBy;
                  $stmt->bindParam(40, $disposition);
                  // echo "</br>".$disposition;
                  $stmt->bindParam(41, $verifiedby);
                  // echo "</br>".$verifiedby;
                  $stmt->bindParam(42, $verified_date);
                  // echo "</br>".$verified_date;
                  $stmt->execute();


                  $row = $stmt->rowCount();

                  if ($row == 0) {

                  echo '<script>
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
                  </script>';

                  }else {
                  echo '<script>
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
                  </script>';
                  }

                } else {}
              ?>
              <script>
                function checkresult() {
                
                    jQuery.ajax({
                        url: "../filterBatchNo.php",
                        data: 'batchnumberGlossiness=' + $("#batchnumberGlossiness").val(),
                        type: "GET",
                        success: function(data) {
                            $("#check-batchNo").html(data);
                        },
                        error: function() {}
                    });
                }
              </script>
                <!-- /.tab-content -->
                
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
