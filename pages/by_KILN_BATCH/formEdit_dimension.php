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
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- profile -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user-cog mr-2"></i> profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="../../login.php" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Log Out
          </a>
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
            <h1 class="m-0 text-dark">PLEASE INSERT CORRECT DATA </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">BY_KILN_BATCH</a></li>
              <li class="breadcrumb-item active">Edit_Dimension</li>
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
                <?php 
							   if(isset($_GET['RecordID'])){
                  
                 $RecordID= $_GET['RecordID'];
                 //echo $RecordID;
							   //Query statements to select from view
							   $query = "{CALL SP_ViewDetailDimension(?)}";
							   $stmt = $conn->prepare($query);
							   $stmt->bindParam(1, $RecordID, PDO::PARAM_INT);
							   $stmt->execute();
                 $result = $stmt->fetchAll();
							   foreach ($result as $row ) {
						    ?>
                <div class="tab-content">
                  <!-- /.tab-pane -->
                  <div class="active tab-pane" id="activity">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Batch Number</label>
                          <div class="col-sm-6">
                            <input type="text" name="batchnumber" class="form-control" value="<?php echo $row['Batch_Number'];?>" readonly>
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
                            <select class="form-control select2" name="inspectionstage">
                              <option type="text" value= "" class="form-control">choose</option>
                              <?php foreach ($fetch as $InspectionStage) { ?>
                              <option type="text" value= "<?php echo $InspectionStage['InspectionStage_Key'];?>" <?php if($row['InspectionStage_Name']==$InspectionStage['InspectionStage_Name']){echo 'selected';}?>><?php echo $InspectionStage['InspectionStage_Name'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Former Height</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="formerheight" value="<?php echo $row['Former_Height'];?>">
                              <option type="" class="form-control" value="<?php echo $row['Former_Height'];?>"><?php echo $row['Former_Height'];?></option>
                              <option type="" class="form-control" value="360">360</option>
                              <option type="" class="form-control" value="400">400</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Inspection date/time</label>
                          <div class="col-sm-6">
                            <input type="datetime-local" name="inspection_date" class="form-control" value="<?php echo date('Y-m-d\TH:i:s',strtotime($row['Inspection_Date']));?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Rework Remark</label>
                          <div class="col-sm-6">
                            <input type="text" name="rework" class="form-control" value="<?php echo $row['Rework'];?>">
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
                            <select name="formertype" class="form-control select2">
                              <option type="text" class="form-control" value="">Choose</option>
                              <?php foreach ($fetch as $former) { ?>
                              <option class="form-control"  value="<?php echo $former['Former_TypeKey'];?>" <?php if($row['FormerTypeCode']==$former['FormerTypeCode']){echo 'selected';}?>><?php echo $former['FormerTypeCode'];}?></option>
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
                            <select class="form-control select2" name="size">
                              <option value="">choose</option>
                              <?php foreach ($fetch as $size) { ?>
                              <option class="form-control" value="<?php echo $size['SizeKey'];?>" <?php if($row['FormerSize']==$size['FormerSize']){echo 'selected';}?>> <?php echo $size['FormerSize'];}?></option>
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
                            <select class="form-control select2" name="productcode">
                              <option type="text"  class="form-control" value="">choose</option>
                              <?php foreach ($fetch as $productCode) { ?>
                              <option class="form-control" value="<?php echo $productCode['ProductCodeKey'];?>" <?php if($row['FormerProductCode']==$productCode['FormerProductCode']){echo 'selected';}?>><?php echo $productCode['FormerProductCode'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Product Date</label>
                          <div class="col-sm-6">
                            <input type="date" name="productDate" class="form-control" value="<?php echo date('Y-m-d',strtotime($row['ProductionDate']));?>">
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
                          <?php    
                            //Query statements to select Job Details
                            $Dimension_ID= $_GET['Dimension_ID'];
                            //echo $Dimension_ID;
                            $query1 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Mould ID Dimension'";
                            $stmt1 = $conn->prepare($query1);
                            $stmt1->bindParam(1, $Dimension_ID);
                            $stmt1->execute();
                            $sample = $stmt1->fetchAll();
                            foreach ($sample as $sampleValue ) {
                          ?>
                          <tr>
                            <td>1.</td>
                            <td><?php echo $sampleValue['TestName'];?></td>
                            <td><input type="text" name="mouldID_1"    class="form-control"  value="<?php echo $sampleValue['Sample_1'];?>" id="disableButton"></td>
                            <td><input type="text" name="mouldID_2"    class="form-control"  value="<?php echo $sampleValue['Sample_2'];?>" id="disableButton"></td>
                            <td><input type="text" name="mouldID_3"    class="form-control"  value="<?php echo $sampleValue['Sample_3'];?>" id="disableButton"></td>
                            <td><input type="text" name="mouldID_4"    class="form-control"  value="<?php echo $sampleValue['Sample_4'];?>" id="disableButton"></td>
                            <td><input type="text" name="mouldID_5"    class="form-control"  value="<?php echo $sampleValue['Sample_5'];?>" id="disableButton"></td>
                            <td><input type="text" name="mouldID_low"  class="form-control"  readonly></td>
                            <td><input type="text" name="mouldID_mid"  class="form-control"  readonly></td>
                            <td><input type="text" name="mouldID_high" class="form-control"  readonly></td>
                          </tr>
                          <?php }?>
                          
                          <?php    
                            //Query statements to select Job Details
                            $Dimension_ID= $_GET['Dimension_ID'];
                            $query2 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? AND TestName='Former Weight (g) Dimension'";
                            $stmt2 = $conn->prepare($query2);
                            $stmt2->bindParam(1, $Dimension_ID);
                            $stmt2->execute();
                            $sample2 = $stmt2->fetchAll();
                            foreach ($sample2 as $sampleValue2 ) {
                          ?>
                          <tr>
                            <td>2.</td>
                            <td><?php echo $sampleValue2['TestName'];?></td>
                            <td><input name="formerWeight_1"    class="form-control" value="<?php echo $sampleValue2['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="formerWeight_2"    class="form-control" value="<?php echo $sampleValue2['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="formerWeight_3"    class="form-control" value="<?php echo $sampleValue2['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="formerWeight_4"    class="form-control" value="<?php echo $sampleValue2['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="formerWeight_5"    class="form-control" value="<?php echo $sampleValue2['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="formerWeight_low"  class="form-control" readonly></td>
                            <td><input name="formerWeight_mid"  class="form-control" readonly></td>
                            <td><input name="formerWeight_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>
                      
                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Bending L Dimension'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>3.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><select class="form-control" name="bendingL_1">
                              <option class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>"><?php echo $sampleValue3['Sample_1'];?></option>
                              <option class="form-control" value="PASS">PASS</option>
                              <option class="form-control" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="bendingL_2">
                              <option class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>"><?php echo $sampleValue3['Sample_2'];?></option>
                              <option class="form-control" value="PASS">PASS</option>
                              <option class="form-control" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="bendingL_3">
                              <option class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>"><?php echo $sampleValue3['Sample_3'];?></option>
                              <option class="form-control" value="PASS">PASS</option>
                              <option class="form-control" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="bendingL_4">
                              <option class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>"><?php echo $sampleValue3['Sample_4'];?></option>
                              <option class="form-control" value="PASS">PASS</option>
                              <option class="form-control" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="bendingL_5">
                              <option class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>"><?php echo $sampleValue3['Sample_5'];?></option>
                              <option class="form-control" value="PASS">PASS</option>
                              <option class="form-control" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Cuff circumference (mm)'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>4.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="cuff_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="cuff_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="cuff_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="cuff_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="cuff_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="cuff_low"  class="form-control" readonly></td>
                            <td><input name="cuff_mid"  class="form-control" readonly></td>
                            <td><input name="cuff_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Former Height (mm)'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>5.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="formerHeight_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="formerHeight_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="formerHeight_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="formerHeight_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="formerHeight_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="formerHeight_low"  class="form-control" readonly></td>
                            <td><input name="formerHeight_mid"  class="form-control" readonly></td>
                            <td><input name="formerHeight_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Outer Base (mm)'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>6.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="outerBase_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="outerBase_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="outerBase_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="outerBase_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="outerBase_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="outerBase_low"  class="form-control" readonly></td>
                            <td><input name="outerBase_mid"  class="form-control" readonly></td>
                            <td><input name="outerBase_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Palm circumference (mm)'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>7.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="palmCircumference_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="palmCircumference_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="palmCircumference_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="palmCircumference_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="palmCircumference_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="palmCircumference_low"  class="form-control" readonly></td>
                            <td><input name="palmCircumference_mid"  class="form-control" readonly></td>
                            <td><input name="palmCircumference_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Span width (mm)'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>8.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="spanWidth_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="spanWidth_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="spanWidth_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="spanWidth_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="spanWidth_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="spanWidth_low"  class="form-control"  readonly></td>
                            <td><input name="spanWidth_mid"  class="form-control"  readonly></td>
                            <td><input name="spanWidth_high" class="form-control"  readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Wrist circumference (mm)'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>9.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="wristCircumference_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="wristCircumference_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="wristCircumference_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="wristCircumference_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="wristCircumference_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="wristCircumference_low"  class="form-control" readonly></td>
                            <td><input name="wristCircumference_mid"  class="form-control" readonly></td>
                            <td><input name="wristCircumference_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Base thickness (mm)'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>10.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="baseThickness_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="baseThickness_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="baseThickness_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="baseThickness_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="baseThickness_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="baseThickness_low"  class="form-control" readonly></td>
                            <td><input name="baseThickness_mid"  class="form-control" readonly></td>
                            <td><input name="baseThickness_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Finger Length F1, Thumb'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>11.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input  name="fingerLengthF1_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input  name="fingerLengthF1_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input  name="fingerLengthF1_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input  name="fingerLengthF1_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input  name="fingerLengthF1_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input  name="fingerLengthF1_low"  class="form-control" readonly></td>
                            <td><input  name="fingerLengthF1_mid"  class="form-control" readonly></td>
                            <td><input  name="fingerLengthF1_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Finger Length F2, Index'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>12.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="fingerLengthF2_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="fingerLengthF2_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="fingerLengthF2_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="fingerLengthF2_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="fingerLengthF2_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="fingerLengthF2_low"  class="form-control" readonly></td>
                            <td><input name="fingerLengthF2_mid"  class="form-control" readonly></td>
                            <td><input name="fingerLengthF2_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Finger Length F3, Middle'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>13.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="firstLengthF3_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF3_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF3_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF3_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF3_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF3_low"  class="form-control" readonly></td>
                            <td><input name="firstLengthF3_mid"  class="form-control" readonly></td>
                            <td><input name="firstLengthF3_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Finger Length F4, Ring'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>14.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td> 
                            <td><input name="firstLengthF4_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF4_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF4_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF4_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF4_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF4_low"  class="form-control" readonly></td>
                            <td><input name="firstLengthF4_mid"  class="form-control" readonly></td>
                            <td><input name="firstLengthF4_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Finger Length F5, Little'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>15.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="firstLengthF5_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF5_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF5_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF5_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF5_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="firstLengthF5_low"  class="form-control" readonly></td>
                            <td><input name="firstLengthF5_mid"  class="form-control" readonly></td>
                            <td><input name="firstLengthF5_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Finger Circumference F1, Thumb'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>16.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td> 
                            <td><input name="firstCircumferenceF1_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF1_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF1_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF1_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF1_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF1_low"  class="form-control" readonly></td>
                            <td><input name="firstCircumferenceF1_mid"  class="form-control" readonly></td>
                            <td><input name="firstCircumferenceF1_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Finger Circumference F2, Index'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>17.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="firstCircumferenceF2_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF2_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF2_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF2_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF2_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF2_low"  class="form-control" readonly></td>
                            <td><input name="firstCircumferenceF2_mid"  class="form-control" readonly></td>
                            <td><input name="firstCircumferenceF2_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Finger Circumference F3, Middle'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>18.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="firstCircumferenceF3_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF3_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF3_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF3_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF3_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF3_low"  class="form-control" readonly></td>
                            <td><input name="firstCircumferenceF3_mid"  class="form-control" readonly></td>
                            <td><input name="firstCircumferenceF3_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Finger Circumference F4, Ring'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>19.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="firstCircumferenceF4_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF4_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF4_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF4_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF4_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF4_low"  class="form-control" readonly></td>
                            <td><input name="firstCircumferenceF4_mid"  class="form-control" readonly></td>
                            <td><input name="firstCircumferenceF4_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Finger Circumference F5, Little'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>20.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="firstCircumferenceF5_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF5_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF5_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF5_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF5_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="firstCircumferenceF5_low"  class="form-control" readonly></td>
                            <td><input name="firstCircumferenceF5_mid"  class="form-control" readonly></td>
                            <td><input name="firstCircumferenceF5_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Textured Length F1, Thumb'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>21.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="textureLengthF1_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF1_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF1_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF1_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF1_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF1_low"  class="form-control" readonly></td>
                            <td><input name="textureLengthF1_mid"  class="form-control" readonly></td>
                            <td><input name="textureLengthF1_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Textured Length F2, Index'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>22.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="textureLengthF2_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF2_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF2_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF2_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF2_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF2_low"  class="form-control" readonly></td>
                            <td><input name="textureLengthF2_mid"  class="form-control" readonly></td>
                            <td><input name="textureLengthF2_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Textured Length F3, Middle'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>23.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="textureLengthF3_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF3_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF3_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF3_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF3_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF3_low"  class="form-control" readonly></td>
                            <td><input name="textureLengthF3_mid"  class="form-control" readonly></td>
                            <td><input name="textureLengthF3_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Textured Length F4, Ring'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>24.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="textureLengthF4_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF4_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF4_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF4_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF4_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF4_low"  class="form-control" readonly></td>
                            <td><input name="textureLengthF4_mid"  class="form-control" readonly></td>
                            <td><input name="textureLengthF4_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Textured Length F5, Little'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>25.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="textureLengthF5_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF5_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF5_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF5_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF5_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="textureLengthF5_low"  class="form-control" readonly></td>
                            <td><input name="textureLengthF5_mid"  class="form-control" readonly></td>
                            <td><input name="textureLengthF5_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Palm Flying Textured'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>26.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="palmFlying_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="palmFlying_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="palmFlying_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="palmFlying_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="palmFlying_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="palmFlying_low"  class="form-control" readonly></td>
                            <td><input name="palmFlying_mid"  class="form-control" readonly></td>
                            <td><input name="palmFlying_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Palm Textured Length'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>27.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><input name="palmTextured_1"    class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>" id="disableButton"></td>
                            <td><input name="palmTextured_2"    class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>" id="disableButton"></td>
                            <td><input name="palmTextured_3"    class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>" id="disableButton"></td>
                            <td><input name="palmTextured_4"    class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>" id="disableButton"></td>
                            <td><input name="palmTextured_5"    class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>" id="disableButton"></td>
                            <td><input name="palmTextured_low"  class="form-control" readonly></td>
                            <td><input name="palmTextured_mid"  class="form-control" readonly></td>
                            <td><input name="palmTextured_high" class="form-control" readonly></td>
                          </tr>
                          <?php }?>

                          <?php    
                            //Query statements to select Job Details
                            $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Disposition Dimension'";
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->bindParam(1, $Dimension_ID);
                            $stmt3->execute();
                            $sample3 = $stmt3->fetchAll();
							              foreach ($sample3 as $sampleValue3 ) {
                          ?>
                          <tr>
                            <td>28.</td>
                            <td><?php echo $sampleValue3['TestName'];?></td>
                            <td><select class="form-control" name="disposition_1">
                              <option class="form-control" value="<?php echo $sampleValue3['Sample_1'];?>"><?php echo $sampleValue3['Sample_1'];?></option>
                              <option class="form-control" value="PASS">PASS</option>
                              <option class="form-control" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="disposition_2">
                              <option class="form-control" value="<?php echo $sampleValue3['Sample_2'];?>"><?php echo $sampleValue3['Sample_2'];?></option>
                              <option class="form-control" value="PASS">PASS</option>
                              <option class="form-control" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="disposition_3">
                              <option class="form-control" value="<?php echo $sampleValue3['Sample_3'];?>"><?php echo $sampleValue3['Sample_3'];?></option>
                              <option class="form-control" value="PASS">PASS</option>
                              <option class="form-control" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="disposition_4">
                              <option class="form-control" value="<?php echo $sampleValue3['Sample_4'];?>"><?php echo $sampleValue3['Sample_4'];?></option>
                              <option class="form-control" value="PASS">PASS</option>
                              <option class="form-control" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td><select class="form-control" name="disposition_5">
                              <option class="form-control" value="<?php echo $sampleValue3['Sample_5'];?>"><?php echo $sampleValue3['Sample_5'];?></option>
                              <option class="form-control" value="PASS">PASS</option>
                              <option class="form-control" value="FAIL">FAIL</option>
                              <select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <?php }?>
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
                            <select class="form-control select2" name="overall_disposition">
                              <option type="text" class="form-control" value="<?php echo $row['Disposition'] ?>"><?php echo $row['Disposition'] ?></option>
                              <option type="text" class="form-control" value="PASS">PASS</option>
                              <option type="text" class="form-control" value="FAIL">FAIL</option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Inspected By</label>
                          <div class="col-sm-6">
                            <input type="text" name="inspectedBY" class="form-control" value="<?php echo $row['InspectedBy'] ?>">
                          </div>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Verified By</label>
                          <div class="col-sm-6">
                            <input type="text" name="verifiedBY" class="form-control" value="<?php echo $row['VerifiedBy'] ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Verified Date</label>
                          <div class="col-sm-6">
                          <input name="verifiedDate" type='datetime-local' placeholder="dd/mm/yyyy --:-- --" style="border:3px solid #E3E3E3;" onfocus="this.type='datetime-local'" onblur="if(this.value==='')this.type='text'" class="form-control" >
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      
                      <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-success" style="float:right">Update/Verify</button>&nbsp;&nbsp;
                      </div>
                    </div>  
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <?php
                    }//While loop
                  }else{
                  //Close tab if user load page without RecordID parameter
                  echo "<script>window.close();</script>";
                  }
                ?> 
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
                    var recordID = <?php echo $RecordID ?>;
                    var Dimension_ID = <?php echo $Dimension_ID ?>;

                    if(error == '')
                    {
                      //console.log(recordID+"siniiiiiiiii");
                      //console.log(Dimension_ID+"siniiiiiiiii");
                    $.ajax({
                    url: "transaction-editDimension-form.php",
                    type: "post",
                    data: {
                    data : form_dimension_input,
                    recordID: recordID,
                    Dimension_ID: Dimension_ID
                    } ,
                    success: function (data) {

                    try {
                    console.log("inside get:"+data);
                    
                    if(data == 'SUCCESS'){
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
                        window.location.href = 'edit_dimension.php';
                        
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
