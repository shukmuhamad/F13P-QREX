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
      <img src="../../dist/img/F13.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                <a href="../by_KILN_BATCH/form_batch.php" class="nav-link">
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-laptop-code"></i>
              <p>
                Roughness
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form_roughness.php" class="nav-link active">
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
                <a href="form_glossiness.php" class="nav-link">
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
              <li class="breadcrumb-item active">Form_Roughness</li>
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
                            <input name="batchnumber" type="text" class="form-control" id="batchnumberRoughness" onInput="checkresult()" required><span id="check-batchNo"></span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Inspection Date</label>
                          <div class="col-sm-6">
                          <input type='text' value="<?php date_default_timezone_set("Asia/Kuala_Lumpur");
                           echo date('d/m/Y h:i A'); ?>" name="inspectiondate" required='' onfocus="this.type='datetime-local'" onblur="if(this.value==='')this.type='text'" class="form-control" >
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
                            <select name="size" class="form-control select2" required>
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
                              <option type="text" class="form-control" id="" placeholder=""></option>
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
                              <option type="text" class="form-control" id="" placeholder=""></option>
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
                            <input type="text" name="palletnumber" class="form-control" id="" placeholder="">
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
                          <label class="col-sm-2 col-form-label">former Type</label>
                          <div class="col-sm-6">
                            <select name="formertype" class="form-control select2" required>
                              <?php foreach ($fetch as $row) { ?>
                              <option type="text" class="form-control" id="" value="<?php echo $row['Former_TypeKey'];?>"><?php echo $row['FormerTypeCode'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Coating</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="coating" required>
                              <option type="text" class="form-control" id="" value=""></option>
                              <option type="text" class="form-control" id="" value="YES">YES</option>
                              <option type="text" class="form-control" id="" value="NO">NO</option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Rework Remark</label>
                          <div class="col-sm-6">
                            <input type="text" name="rework" class="form-control" id="" placeholder="" required>
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
                            <th class="text-center" rowspan="2">Sample No</th>
                            <th class="text-center" rowspan="2">Production Date</th>
                            <th class="text-center" colspan="3">Roughness Reading (µm)</th>
                          </tr>
                          <tr>
                            <th class="text-center">1</th>
                            <th class="text-center">2</th>
                            <th class="text-center">Average</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td><input name="production_date1" type="date" class="form-control" id=""></td>
                            <td><input name="roughness1_1" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness1_2" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness_average1" type="text" class="form-control resultRough" readonly></td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td><input name="production_date2" type="date" class="form-control" id=""></td>
                            <td><input name="roughness2_1" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness2_2" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness_average2" type="text" class="form-control resultRough" readonly></td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td><input name="production_date3" type="date" class="form-control" id=""></td>
                            <td><input name="roughness3_1" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness3_2" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness_average3" type="text" class="form-control resultRough" readonly></td>
                          </tr>
                          <tr>
                            <td>4.</td>
                            <td><input name="production_date4" type="date" class="form-control" id=""></td>
                            <td><input name="roughness4_1" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness4_2" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness_average4" type="text" class="form-control resultRough" readonly></td>
                          </tr>
                          <tr>
                            <td>5.</td>
                            <td><input name="production_date5" type="date" class="form-control" id=""></td>
                            <td><input name="roughness5_1" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness5_2" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness_average5" type="text" class="form-control resultRough" readonly></td>
                          </tr>
                          <tr>
                            <td>6.</td>
                            <td><input name="production_date6" type="date" class="form-control" id=""></td>
                            <td><input name="roughness6_1" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness6_2" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness_average6" type="text" class="form-control resultRough" readonly></td>
                          </tr>
                          <tr>
                            <td>7.</td>
                            <td><input name="production_date7" type="date" class="form-control" id=""></td>
                            <td><input name="roughness7_1" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness7_2" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness_average7" type="text" class="form-control resultRough" readonly></td>
                          </tr>
                          <tr>
                            <td>8.</td>
                            <td><input name="production_date8" type="date" class="form-control" id=""></td>
                            <td><input name="roughness8_1" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness8_2" type="text" class="form-control inputRough"></td>
                            <td><input name="roughness_average8" type="text" class="form-control resultRough" readonly></td>
                          </tr>
                        </tbody>
                      </table></br>
                      <script>
                          $(document).ready(function() {
                              $(document).on("input", ".inputRough", function() {
                                  $('table tr').each(function() {
                                  // variables for holding total and count
                                  var total = 0,
                                      count = 0;
                                  
                                  // get all input fields and iterate over them
                                  $('.inputRough', this).each(function() {
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
                                  $('.resultRough', this).val(total / count || 0);
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
                              <input name="acceptance" type="text"  class="form-control" id=""  value="0" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Inspected By</label>
                          <div class="col-sm-6">
                            <input name="inspectedBy" type="text" class="form-control" value="<?php echo $session_BadgeID ?>" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Disposition Status</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="disposition" required>
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
                            <input name="verifiedby" type="text" class="form-control" id="" readonly>
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
                <!-- /.tab-content -->
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
                  $coating = $_POST['coating'];
                  // echo "</br>".$coating;
                  $rework = $_POST['rework'];
                  // echo "</br>".$rework;
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
                  $roughness1_1 = $_POST['roughness1_1'];
                  // echo "</br>".$roughness1_1;
                  $roughness1_2 = $_POST['roughness1_2'];
                  // echo "</br>".$roughness1_2;
                  $roughness_average1 = $_POST['roughness_average1'];
                  // echo "</br>".$roughness_average1;

                  $roughness2_1 = $_POST['roughness2_1'];
                  // echo "</br>".$roughness2_1;
                  $roughness2_2 = $_POST['roughness2_2'];
                  // echo "</br>".$roughness2_2;
                  $roughness_average2 = $_POST['roughness_average2'];
                  // echo "</br>".$roughness_average2;

                  $roughness3_1 = $_POST['roughness3_1'];
                  // echo "</br>".$roughness3_1;
                  $roughness3_2 = $_POST['roughness3_2'];
                  // echo "</br>".$roughness3_2;
                  $roughness_average3 = $_POST['roughness_average3'];
                  // echo "</br>".$roughness_average3;

                  $roughness4_1 = $_POST['roughness4_1'];
                  // echo "</br>".$roughness4_1;
                  $roughness4_2 = $_POST['roughness4_2'];
                  // echo "</br>".$roughness4_2;
                  $roughness_average4 = $_POST['roughness_average4'];
                  // echo "</br>".$roughness_average4;

                  $roughness5_1 = $_POST['roughness5_1'];
                  // echo "</br>".$roughness5_1;
                  $roughness5_2 = $_POST['roughness5_2'];
                  // echo "</br>".$roughness5_2;
                  $roughness_average5 = $_POST['roughness_average5'];
                  // echo "</br>".$roughness_average5;

                  $roughness6_1 = $_POST['roughness6_1'];
                  // echo "</br>".$roughness6_1;
                  $roughness6_2 = $_POST['roughness6_2'];
                  // echo "</br>".$roughness6_2;
                  $roughness_average6 = $_POST['roughness_average6'];
                  // echo "</br>".$roughness_average6;

                  $roughness7_1 = $_POST['roughness7_1'];
                  // echo "</br>".$roughness7_1;
                  $roughness7_2 = $_POST['roughness7_2'];
                  // echo "</br>".$roughness7_2;
                  $roughness_average7 = $_POST['roughness_average7'];
                  // echo "</br>".$roughness_average7;

                  $roughness8_1 = $_POST['roughness8_1'];
                  // echo "</br>".$roughness8_1;
                  $roughness8_2 = $_POST['roughness8_1'];
                  // echo "</br>".$roughness8_2;
                  $roughness_average8 = $_POST['roughness_average8'];
                  // echo "</br>".$roughness_average8;


                  $AQL = $_POST['AQL'];
                  // echo "</br>".$AQL;
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

                  $query = "{CALL SP_Register_Roughness(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
                  $stmt = $connect->prepare($query);

                  $stmt->bindParam(1, $batchnumber);
                  $stmt->bindParam(2, $inspectiondate);
                  $stmt->bindParam(3, $size, PDO::PARAM_INT);
                  $stmt->bindParam(4, $productcode, PDO::PARAM_INT);
                  $stmt->bindParam(5, $inspectionstage, PDO::PARAM_INT);
                  $stmt->bindParam(6, $palletnumber);
                  $stmt->bindParam(7, $formerheight, PDO::PARAM_INT);
                  $stmt->bindParam(8, $formertype, PDO::PARAM_INT);
                  $stmt->bindParam(9, $coating);
                  $stmt->bindParam(10, $rework);

                  $stmt->bindParam(11, $production_date1);
                  $stmt->bindParam(12, $production_date2);
                  $stmt->bindParam(13, $production_date3);
                  $stmt->bindParam(14, $production_date4);
                  $stmt->bindParam(15, $production_date5);
                  $stmt->bindParam(16, $production_date6); 
                  $stmt->bindParam(17, $production_date7);
                  $stmt->bindParam(18, $production_date8);

                  $stmt->bindParam(19, $roughness1_1);
                  $stmt->bindParam(20, $roughness1_2);
                  $stmt->bindParam(21, $roughness_average1);

                  $stmt->bindParam(22, $roughness2_1);
                  $stmt->bindParam(23, $roughness2_2);
                  $stmt->bindParam(24, $roughness_average2);

                  $stmt->bindParam(25, $roughness3_1);
                  $stmt->bindParam(26, $roughness3_2);
                  $stmt->bindParam(27, $roughness_average3);

                  $stmt->bindParam(28, $roughness4_1);
                  $stmt->bindParam(29, $roughness4_2);
                  $stmt->bindParam(30, $roughness_average4);

                  $stmt->bindParam(31, $roughness5_1);
                  $stmt->bindParam(32, $roughness5_2);
                  $stmt->bindParam(33, $roughness_average5);

                  $stmt->bindParam(34, $roughness6_1);
                  $stmt->bindParam(35, $roughness6_2);
                  $stmt->bindParam(36, $roughness_average6);

                  $stmt->bindParam(37, $roughness7_1);
                  $stmt->bindParam(38, $roughness7_2);
                  $stmt->bindParam(39, $roughness_average7);

                  $stmt->bindParam(40, $roughness8_1);
                  $stmt->bindParam(41, $roughness8_2);
                  $stmt->bindParam(42, $roughness_average8);
                  
                  $stmt->bindParam(43, $AQL, PDO::PARAM_INT);
                  $stmt->bindParam(44, $acceptance);
                  $stmt->bindParam(45, $inspectedBy);
                  $stmt->bindParam(46, $disposition);
                  $stmt->bindParam(47, $verifiedby);
                  $stmt->bindParam(48, $verified_date);
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
                  toastr["success"]("Roughness Information successfully registered into the system.", "Success!");
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
                  toastr["error"]("Please insert correct data.", "Kindly recheck!");
                  </script>';
                  }

                } else {}
               ?>
               <script>
                function checkresult() {
                
                    jQuery.ajax({
                        url: "../filterBatchNo.php",
                        data: 'batchnumberRoughness=' + $("#batchnumberRoughness").val(),
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
