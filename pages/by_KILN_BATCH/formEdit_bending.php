<!DOCTYPE html>
<?php
   include('../../includes/header.php');
   include('../session/session.php');
   include('../../database_connection.php');
?>
<head>
  <!-- Toast -->
	<link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
	<script src="../../plugins/toastr/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../../plugins/toastr/toastr.js"></script>
	<script type="text/javascript" src="../../plugins/toastr/toastr.min.js"></script>
</head>

<html lang="en">
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
                <a href="form_bending.php" class="nav-link active">
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
            <h1 class="m-0 text-dark">PLEASE UPDATE CORRECT DATA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">BY_KILN_BATCH</a></li>
              <li class="breadcrumb-item active">Form_Update_Bending</li>
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
                <?php 
							   if(isset($_GET['RecordID'])){
                 $RecordID= $_GET['RecordID'];
                 //echo $RecordID;
							   //Query statements to select from view
							   $query = "{CALL SP_ViewDetailBending(?)}";
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
                              $query = $connect->prepare("SELECT * FROM M_FactoryCustomer");
                              $query->execute();
                              $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">Factory Customer</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="factoryCustomer">
                              <?php foreach ($fetch as $factory) { ?>
                              <option  class="form-control" value= "<?php echo $factory['CustomerKey'];?>"<?php if($row['FactoryCustomer']==$factory['FactoryCustomer']){echo 'selected';}?>><?php echo $factory['FactoryCustomer'];}?></option>
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
                            <select class="form-control select2" name="inspectionstage">
                              <?php foreach ($fetch as $InspectionStage) { ?>
                                <option type="text" value= "<?php echo $InspectionStage['InspectionStage_Key'];?>" <?php if($row['InspectionStage_Name']==$InspectionStage['InspectionStage_Name']){echo 'selected';}?>><?php echo $InspectionStage['InspectionStage_Name'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Former Height</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="formerheight">
                              <option type="" class="form-control" value="<?php echo $row['Former_Height'];?>"><?php echo $row['Former_Height'];?></option>
                              <option type="" class="form-control" value="360">360</option>
                              <option type="" class="form-control" value="400">400</option>
                            </select>
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
                            <select name="formertype" class="form-control select2">
                              <?php foreach ($fetch as $former) { ?>
                                <option class="form-control"  value="<?php echo $former['Former_TypeKey'];?>" <?php if($row['FormerTypeCode']==$former['FormerTypeCode']){echo 'selected';}?>><?php echo $former['FormerTypeCode'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_AQL");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">AQL</label>
                            <div class="col-sm-2">
                              <select class="form-control select2" name="AQL">
                                <?php foreach ($fetch as $aql) { ?>
                                <option type="text" class="form-control" value="<?php echo $aql['AQL_Key'];?>"<?php if($row['AQL_Name']==$aql['AQL_Name']){echo 'selected';}?>><?php echo $aql['AQL_Name'];}?></option>
                              </select>
                            </div>
                          <label class="col-sm-2 col-form-label">Acceptance</label>
                          <div class="col-sm-2">
                            <input type="text" name="acceptance" class="form-control"  value="<?php echo $row['Acceptance'];?>" readonly>
                          </div>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Trolley Number</label>
                          <div class="col-sm-6">
                            <input type="text" name="trolleyNumber" class="form-control" value="<?php echo $row['Trolley_Number'];?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Inspection Date/Time</label>
                          <div class="col-sm-6">
                            <input type="datetime-local" name="inspection_date" class="form-control" value="<?php echo date('Y-m-d\TH:i:s',strtotime($row['Inspection_Date']));?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Rework </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="rework" value="<?php echo $row['Rework'];?>">
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
                              <?php foreach ($fetch as $productCode) { ?>
                              <option class="form-control" value="<?php echo $productCode['ProductCodeKey'];?>" <?php if($row['FormerProductCode']==$productCode['FormerProductCode']){echo 'selected';}?>><?php echo $productCode['FormerProductCode'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Sample Size</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="sampleSize" value="<?php echo $row['Sample_Size'];?>" readonly>
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
                     <div class="col-sm-6">  
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="text-center">Sample No</th>
                            <th class="text-center">Mould ID</th>
                            <th class="text-center">Production Date</th>
                            <th class="text-center">Disposition</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php   
                          $Bending_ID= $_GET['Bending_ID']; 
                          $query1 = "SELECT * FROM View_SampleBending WHERE Bending_ID = ?";
                          $stmt1 = $conn->prepare($query1);
                          $stmt1->bindParam(1, $Bending_ID, PDO::PARAM_INT);
                          $stmt1->execute();
                          $sample = $stmt1->fetchAll();
                                
                          $sampleMould_pivot = array();
                          for ($i = 0; $i < count($sample); $i++) {
                            $sampleMould_pivot_temp = array(
                            $sample[$i]['TestName'] => $sample[$i]['SampleValue']
                            );
                            $sampleMould_pivot = array_merge($sampleMould_pivot, $sampleMould_pivot_temp);
                          }
                          $sampleDate_pivot = array();
                          for ($i = 0; $i < count($sample); $i++) {
                            $sampleDate_pivot_temp = array(
                            $sample[$i]['TestName'] => $sample[$i]['SampleDate']
                            );
                            $sampleDate_pivot = array_merge($sampleDate_pivot, $sampleDate_pivot_temp);
                          }
                          $sampleDisposition_pivot = array();
                          for ($i = 0; $i < count($sample); $i++) {
                            $sampleDisposition_pivot_temp = array(
                            $sample[$i]['TestName'] => $sample[$i]['SampleDisposition']
                            );
                            $sampleDisposition_pivot = array_merge($sampleDisposition_pivot, $sampleDisposition_pivot_temp);
                          }
                        ?>
                          <tr>
                            <td>1</td>
                            <td><input type="text" name="mould_1" value="<?php echo $sampleMould_pivot['Bending Mould1'];?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" class="form-control"></td>
                            <td><input type="date" name="production_1" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould1'];?>"></td>
                            <td><select class="form-control" name="disposition_1">
                              <option type="text" class="form-control" id="" value="<?php echo $sampleDisposition_pivot['Bending Mould1'];?>"><?php echo $sampleDisposition_pivot['Bending Mould1'];?></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td><input type="text" name="mould_2" value="<?php echo $sampleMould_pivot['Bending Mould2'];?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" class="form-control"></td>
                            <td><input type="date" name="production_2" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould2'];?>"></td>
                            <td><select class="form-control" name="disposition_2">
                              <option type="text" class="form-control" id="" value="<?php echo $sampleDisposition_pivot['Bending Mould2'];?>"><?php echo $sampleDisposition_pivot['Bending Mould2'];?></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td><input type="text" name="mould_3" value="<?php echo $sampleMould_pivot['Bending Mould3'];?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" class="form-control"></td>
                            <td><input type="date" name="production_3" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould3'];?>"></td>
                            <td><select class="form-control" name="disposition_3">
                              <option type="text" class="form-control" id="" value="<?php echo $sampleDisposition_pivot['Bending Mould3'];?>"><?php echo $sampleDisposition_pivot['Bending Mould3'];?></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td><input type="text" name="mould_4" value="<?php echo $sampleMould_pivot['Bending Mould4'];?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" class="form-control"></td>
                            <td><input type="date" name="production_4" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould4'];?>"></td>
                            <td><select class="form-control" name="disposition_4">
                              <option type="text" class="form-control" id="" value="<?php echo $sampleDisposition_pivot['Bending Mould4'];?>"><?php echo $sampleDisposition_pivot['Bending Mould4'];?></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td><input type="text" name="mould_5" value="<?php echo $sampleMould_pivot['Bending Mould5'];?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" class="form-control"></td>
                            <td><input type="date" name="production_5" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould5'];?>"></td>
                            <td><select class="form-control" name="disposition_5">
                              <option type="text" class="form-control" id="" value="<?php echo $sampleDisposition_pivot['Bending Mould5'];?>"><?php echo $sampleDisposition_pivot['Bending Mould5'];?></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td><input type="text" name="mould_6" value="<?php echo $sampleMould_pivot['Bending Mould6'];?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" class="form-control"></td>
                            <td><input type="date" name="production_6" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould6'];?>"></td>
                            <td><select class="form-control" name="disposition_6">
                              <option type="text" class="form-control" id="" value="<?php echo $sampleDisposition_pivot['Bending Mould6'];?>"><?php echo $sampleDisposition_pivot['Bending Mould6'];?></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td><input type="text" name="mould_7" value="<?php echo $sampleMould_pivot['Bending Mould7'];?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" class="form-control"></td>
                            <td><input type="date" name="production_7" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould7'];?>"></td>
                            <td><select class="form-control" name="disposition_7">
                              <option type="text" class="form-control" id="" value="<?php echo $sampleDisposition_pivot['Bending Mould7'];?>"><?php echo $sampleDisposition_pivot['Bending Mould7'];?></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                          </tr>
                          <tr>
                            <td>8</td>
                            <td><input type="text" name="mould_8" value="<?php echo $sampleMould_pivot['Bending Mould8'];?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" class="form-control"></td>
                            <td><input type="date" name="production_8" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould8'];?>"></td>
                            <td><select class="form-control" name="disposition_8">
                              <option type="text" class="form-control" id="" value="<?php echo $sampleDisposition_pivot['Bending Mould8'];?>"><?php echo $sampleDisposition_pivot['Bending Mould8'];?></option>
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                              <select>
                            </td>
                          </tr>
                        </tbody>
                      </table></br>
                    </div>
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
                              <option type="text" class="form-control" id="" value="PASS">PASS</option>
                              <option type="text" class="form-control" id="" value="FAIL">FAIL</option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Inspected By</label>
                          <div class="col-sm-6">
                            <input type="text" name="inspectedBY" class="form-control" id="" value="<?php echo $row['InspectedBy'] ?>">
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
                            <input type="datetime-local" name="verifiedDate" class="form-control" value="<?php echo date('Y-m-d\TH:i:s',strtotime($row['VerifiedDate']));?>" >
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
                <?php
                    }//While loop
                  }else{
                  //Close tab if user load page without RecordID parameter
                  echo "<script>window.close();</script>";
                  }
                ?> 
                <!-- /.tab-content -->
               </form>
               <?php
                if (isset($_POST['submit'])) {

                  $RecordID = $_GET['RecordID'];
                  // echo "</br>".$RecordID;
                  $Bending_ID = $_GET['Bending_ID'];
                  // echo "</br>".$Bending_ID;
                  $batchnumber = $_POST['batchnumber'];
                  // echo "</br>".$batchnumber;
                  $factoryCustomer = $_POST['factoryCustomer'];
                  // echo "</br>".$factoryCustomer;
                  $inspectionstage = $_POST['inspectionstage'];
                  // echo "</br>".$inspectionstage;
                  $formerheight = $_POST['formerheight'];
                  // echo "</br>".$formerheight;
                  $formertype = $_POST['formertype'];
                  // echo "</br>".$formertype;
                  $AQL = $_POST['AQL'];
                  // echo "</br>".$AQL;
                  $acceptance = $_POST['acceptance'];
                  // echo "</br>".$acceptance;
                  $trolleyNumber = $_POST['trolleyNumber'];
                  // echo "</br>".$trolleyNumber;
                  $inspection_date = $_POST['inspection_date'];
                  // echo "</br>".$inspection_date;
                  $rework = $_POST['rework'];
                  // echo "</br>".$rework;
                  $size = $_POST['size'];
                  // echo "</br>".$size;
                  $productcode = $_POST['productcode'];
                  // echo "</br>".$productcode;
                  $sampleSize = $_POST['sampleSize'];
                  // echo "</br>".$sampleSize;
                  $mould_1 = $_POST['mould_1'];
                  // echo "</br>".$mould_1;
                  $mould_2 = $_POST['mould_2'];
                  // echo "</br>".$mould_2;
                  $mould_3 = $_POST['mould_3'];
                  // echo "</br>".$mould_3;
                  $mould_4 = $_POST['mould_4'];
                  // echo "</br>".$mould_4;
                  $mould_5 = $_POST['mould_5'];
                  // echo "</br>".$mould_5;
                  $mould_6 = $_POST['mould_6'];
                  // echo "</br>".$mould_6;
                  $mould_7 = $_POST['mould_7'];
                  // echo "</br>".$mould_7;
                  $mould_8 = $_POST['mould_8'];
                  // echo "</br>".$mould_8;
                  $production_1 = $_POST['production_1'];
                  // echo "</br>".$production_1;
                  $production_2 = $_POST['production_2'];
                  // echo "</br>".$production_2;
                  $production_3 = $_POST['production_3'];
                  // echo "</br>".$production_3;
                  $production_4 = $_POST['production_4'];
                  // echo "</br>".$production_4;
                  $production_5 = $_POST['production_5'];
                  // echo "</br>".$production_5;
                  $production_6 = $_POST['production_6'];
                  // echo "</br>".$production_6;
                  $production_7 = $_POST['production_7'];
                  // echo "</br>".$production_7;
                  $production_8 = $_POST['production_8'];
                  // echo "</br>".$production_8;
                  $disposition_1 = $_POST['disposition_1'];
                  // echo "</br>".$disposition_1;
                  $disposition_2 = $_POST['disposition_2'];
                  // echo "</br>".$disposition_2;
                  $disposition_3 = $_POST['disposition_3'];
                  // echo "</br>".$disposition_3;
                  $disposition_4 = $_POST['disposition_4'];
                  // echo "</br>".$disposition_4;
                  $disposition_5 = $_POST['disposition_5'];
                  // echo "</br>".$disposition_5;
                  $disposition_6 = $_POST['disposition_6'];
                  // echo "</br>".$disposition_6;
                  $disposition_7 = $_POST['disposition_7'];
                  // echo "</br>".$disposition_7;
                  $disposition_8 = $_POST['disposition_8'];
                  // echo "</br>".$disposition_8;
                  $overall_disposition = $_POST['overall_disposition'];
                  // echo "</br>".$overall_disposition;
                  $inspectedBY = $_POST['inspectedBY'];
                  // echo "</br>".$inspectedBY;
                  $verifiedby = $_POST['verifiedBY'];
                  // echo "</br>".$verifiedby;
                  $verified_date = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$_POST['verifiedDate'])));
                  // echo "</br>".$verified_date;

                  $query = "{CALL SP_Update_Bending(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
                  $stmt = $connect->prepare($query);

                  $stmt->bindParam(1, $RecordID, PDO::PARAM_INT);
                  $stmt->bindParam(2, $Bending_ID, PDO::PARAM_INT);
                  $stmt->bindParam(3, $batchnumber);
                  $stmt->bindParam(4, $factoryCustomer, PDO::PARAM_INT);
                  $stmt->bindParam(5, $inspectionstage, PDO::PARAM_INT);
                  $stmt->bindParam(6, $formerheight, PDO::PARAM_INT);
                  $stmt->bindParam(7, $formertype, PDO::PARAM_INT);
                  $stmt->bindParam(8, $AQL, PDO::PARAM_INT);
                  $stmt->bindParam(9, $acceptance);
                  $stmt->bindParam(10, $trolleyNumber);
                  $stmt->bindParam(11, $inspection_date);

                  $stmt->bindParam(12, $rework);
                  $stmt->bindParam(13, $size, PDO::PARAM_INT);
                  $stmt->bindParam(14, $productcode, PDO::PARAM_INT);
                  $stmt->bindParam(15, $sampleSize);
                  $stmt->bindParam(16, $mould_1);
                  $stmt->bindParam(17, $mould_2); 
                  $stmt->bindParam(18, $mould_3);
                  $stmt->bindParam(19, $mould_4);
                  $stmt->bindParam(20, $mould_5);
                  $stmt->bindParam(21, $mould_6);
                  $stmt->bindParam(22, $mould_7);
                  $stmt->bindParam(23, $mould_8);

                  $stmt->bindParam(24, $production_1);
                  $stmt->bindParam(25, $production_2);
                  $stmt->bindParam(26, $production_3);
                  $stmt->bindParam(27, $production_4);
                  $stmt->bindParam(28, $production_5);
                  $stmt->bindParam(29, $production_6);
                  $stmt->bindParam(30, $production_7); 
                  $stmt->bindParam(31, $production_8);

                  $stmt->bindParam(32, $disposition_1);
                  $stmt->bindParam(33, $disposition_2);
                  $stmt->bindParam(34, $disposition_3);
                  $stmt->bindParam(35, $disposition_4);
                  $stmt->bindParam(36, $disposition_5);
                  $stmt->bindParam(37, $disposition_6);
                  $stmt->bindParam(38, $disposition_7);
                  $stmt->bindParam(39, $disposition_8);
                  
                  $stmt->bindParam(40, $overall_disposition);
                  $stmt->bindParam(41, $inspectedBY);
                  $stmt->bindParam(42, $verifiedby);
                  $stmt->bindParam(43, $verified_date);
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
                  toastr["success"]("Bending Information successfully registered into the system.", "Success!");
                  
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

<!-- REQUIRED SCRIPTS -->
</body>
</html>
