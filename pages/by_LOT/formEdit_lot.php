<!DOCTYPE html>
<?php
   include('../../includes/header.php');
   include('../session/session.php');
   include('../../database_connection.php');
?>

<html lang="en">
<head>
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
            <a href="#" class="nav-link">
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
                Inspection
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form_lot.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="summary_lot.php" class="nav-link">
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
              <li class="breadcrumb-item"><a href="#">BY_LOT</a></li>
              <li class="breadcrumb-item active">Form_Update_InspectionLot</li>
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
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Lot Information</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Instrument ID</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Visual Testing</a></li>
                  <li class="nav-item"><a class="nav-link" href="#status" data-toggle="tab">Status</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
               <form role="form" method ="post">
                <?php 
							    if(isset($_GET['RecordID'])){
                  $RecordID= $_GET['RecordID'];
                  $ByLot_ID= $_GET['ByLot_ID'];
                  //echo $RecordID;
							    //Query statements to select from view
							    $query = "{CALL SP_ViewDetailByLOT(?)}";
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
                          <label class="col-sm-2 col-form-label">Pallet No.</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="palletNO" value="<?php echo $row['PalletNo'];?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Quantity</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="quantity" value="<?php echo $row['Quantity'];?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">No of Travelling Form</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="NoTravellingForm" value="<?php echo $row['No_TravelForm'];?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Inspection Date/Time</label>
                          <div class="col-sm-6">
                            <input type="datetime-local" class="form-control" name="inspection_date" value="<?php echo date('Y-m-d\TH:i:s',strtotime($row['Inspection_Date']));?>">
                          </div>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Rework Remark</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="rework" value="<?php echo $row['Rework'];?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Product Code</label>
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_ProductCode");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="productcode">
                              <?php foreach ($fetch as $productCode) { ?>
                              <option class="form-control" value="<?php echo $productCode['ProductCodeKey'];?>" <?php if($row['FormerProductCode']==$productCode['FormerProductCode']){echo 'selected';}?>><?php echo $productCode['FormerProductCode'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Receive Date</label>
                          <div class="col-sm-6">
                            <input type="date" class="form-control" name="receiveDate" value="<?php echo $row['ReceiveDate'];?>">
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
                          <label class="col-sm-2 col-form-label">Former Type</label>
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_FormerTypeCode");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <div class="col-sm-6">
                            <select name="formertype" class="form-control select2">
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
                              <?php foreach ($fetch as $size) { ?>
                              <option class="form-control" value="<?php echo $size['SizeKey'];?>" <?php if($row['FormerSize']==$size['FormerSize']){echo 'selected';}?>> <?php echo $size['FormerSize'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Lot Number</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="lotNumber" value="<?php echo $row['LotNumber'];?>">
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
                    <div class="row">
                      <div class="col-md-6">
                      <?php 
                        $query1 = "SELECT * FROM View_ListByLotInstrument WHERE Bylot_ID = ?";
                        $stmt1 = $conn->prepare($query1);
                        $stmt1->bindParam(1, $ByLot_ID, PDO::PARAM_INT);
                        $stmt1->execute();
                        $View_ListByLotInstrument = $stmt1->fetchAll();
                        $stmt1->nextRowset();

                        $testInstrument_pivot = array();
                        for ($i = 0; $i < count($View_ListByLotInstrument); $i++) {
                          $testInstrument_pivot_temp = array(
                            $View_ListByLotInstrument[$i]['Instrument_Name'] => $View_ListByLotInstrument[$i]['EquipmentID']
                          );
                          $testInstrument_pivot = array_merge($testInstrument_pivot, $testInstrument_pivot_temp);
                        }
                      ?>
                        <div class="form-group row">
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_Equipment");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">Weighing Scale ID</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="weighing_ScaleID">
                              <?php foreach ($fetch as $weighing) { ?>
                              <option class="form-control" value="<?php echo $weighing['EquipmentKey'];?>"<?php if($testInstrument_pivot['Weighing Scale']==$weighing['EquipmentID']){echo 'selected';}?>><?php echo $weighing['EquipmentID'];}?></option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_Equipment");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">Height Scale ID</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="height_ScaleID">
                              <?php foreach ($fetch as $equipment) { ?>
                              <option class="form-control" value="<?php echo $equipment['EquipmentKey'];?>" <?php if($testInstrument_pivot['Height Gauge']==$equipment['EquipmentID']){echo 'selected';}?>><?php echo $equipment['EquipmentID'];}?></option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group row">
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_Equipment");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">Bending Scale ID</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="bending_ScaleID">
                              <?php foreach ($fetch as $bendingScale) { ?>
                              <option class="form-control" value="<?php echo $bendingScale['EquipmentKey'];?>" <?php if($testInstrument_pivot['Bending Gauge']==$bendingScale['EquipmentID']){echo 'selected';}?>><?php echo $bendingScale['EquipmentID'];}?></option>
                            </select>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <?php 
                   $query2 = "SELECT * FROM View_ListBylotVisual WHERE Bylot_ID = ?";
                   $stmt2 = $conn->prepare($query2);
                   $stmt2->bindParam(1, $ByLot_ID, PDO::PARAM_INT);
                   $stmt2->execute();
                   $View_ListBylotVisual = $stmt2->fetchAll();
                   $stmt2->nextRowset();

                   $testVisual_pivot = array();
                   for ($i = 0; $i < count($View_ListBylotVisual); $i++) {
                     $testVisual_pivot_temp = array(
                       $View_ListBylotVisual[$i]['VisualTestingName'] => $View_ListBylotVisual[$i]['VisualTestingValue']
                     );
                     $testVisual_pivot = array_merge($testVisual_pivot, $testVisual_pivot_temp);
                   }
                  ?>
                  <div class="tab-pane" id="settings">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Batch Number for Visual</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="batchNumberVisual" value="<?php echo $row['Batch_NumberVisual'];?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Quantity (pcs)</label>
                          <div class="col-sm-6">
                            <input type="number" class="form-control" name="quantityVisual" value="<?php echo $row['Quantity_Visual'];?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Visual Disposition</label>
                          <div class="col-sm-6">
                            <select class="form-control" name="visualDisposition">
                              <option class="form-control" value="<?php echo $row['Disposition_Visual'];?>"><?php echo $row['Disposition_Visual'];?></option>
                              <option class="form-control" value="PASS">PASS</option>
                              <option class="form-control" value="FAIL">FAIL</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div></br>

                    <div class="row">
                      <div class="col-md-12">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th class="text-center">TEST</th>
                              <th class="text-center">Sample Size (pcs)</th>
                              <th class="text-center">AQL</th>
                              <th class="text-center">ACC</th>
                              <th class="text-center" colspan="4">RESULT</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Visual Defect</td>
                              <td><input type="text" name="visualDefect_SS" class="form-control" value="<?php echo $testVisual_pivot['Visual Defect SS'];?>"></td>
                              <td><input type="text" name="visualDefect_AQL" class="form-control" value="<?php echo $testVisual_pivot['Visual Defect AQL'];?>"></td>
                              <td><input type="text" name="visualDefect_ACC" class="form-control" value="<?php echo $testVisual_pivot['Visual Defect ACC'];?>"></td>
                              <td class="text-center">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-critical">Critical</button>
                              </td>
                              <td class="text-center">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-major">Major</button>
                              </td>
                              <td class="text-center">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-minor">Minor</button>
                              </td>
                              <td><input type="text" class="form-control" id="result_Defect" readonly></td>
                            </tr>
                            <tr>
                              <td>Bending</td>
                              <td><input type="text" name="Bending_SS" class="form-control" value="<?php echo $testVisual_pivot['Bending SS'];?>"></td>
                              <td><input type="text" name="Bending_AQL" class="form-control" value="<?php echo $testVisual_pivot['Bending AQL'];?>"></td>
                              <td><input type="text" name="Bending_ACC" class="form-control" value="<?php echo $testVisual_pivot['Bending ACC'];?>"></td>
                              <td colspan="4"><select class="form-control" name="Bending_Result">
                                    <option class="form-control" value="<?php echo $testVisual_pivot['Bending Result'];?>"><?php echo $testVisual_pivot['Bending Result'];?></option>
                                    <option class="form-control" value="PASS">PASS</option>
                                    <option class="form-control" value="FAIL">FAIL</option>
                                  </select>
                              </td>
                            </tr>
                            <tr>
                              <td>Packaging</td>
                              <td colspan="3"></td>
                              <td colspan="4"><select class="form-control" name="Packaging_Result">
                                    <option type="text" class="form-control" value="<?php echo $testVisual_pivot['Packaging Result'];?>"><?php echo $testVisual_pivot['Packaging Result'];?></option>
                                    <option type="text" class="form-control" value="PASS">PASS</option>
                                    <option type="text" class="form-control" value="FAIL">FAIL</option>
                                  </select>
                              </td>
                            </tr>
                          </tbody>
                        </table></br>
                      </div>
                      <div class="col-md-12">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th class="text-center">Sample No</th>
                              <th class="text-center">1</th>
                              <th class="text-center">2</th>
                              <th class="text-center">3</th>
                              <th class="text-center">4</th>
                              <th class="text-center">5</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php    
                              $query5 = "SELECT * FROM View_ListByLotSample WHERE ByLot_ID = ? and TestName='ByLot Moulding'";
                              $stmt1 = $conn->prepare($query5);
                              $stmt1->bindParam(1, $ByLot_ID);
                              $stmt1->execute();
                              $sample = $stmt1->fetchAll();
							                foreach ($sample as $mouldID ) {
                            ?>
                            <tr>
                              <td>Mould ID</td>
                              <td><input type="text" class="form-control" name="mouldID_1" value="<?php echo $mouldID['Sample_1'];?>"></td>
                              <td><input type="text" class="form-control" name="mouldID_2" value="<?php echo $mouldID['Sample_2'];?>"></td>
                              <td><input type="text" class="form-control" name="mouldID_3" value="<?php echo $mouldID['Sample_3'];?>"></td>
                              <td><input type="text" class="form-control" name="mouldID_4" value="<?php echo $mouldID['Sample_4'];?>"></td>
                              <td><input type="text" class="form-control" name="mouldID_5" value="<?php echo $mouldID['Sample_5'];?>"></td>
                            </tr>
                            <?php }?>

                            <?php    
                              $query6 = "SELECT * FROM View_ListByLotSample WHERE ByLot_ID = ? and TestName='ByLot Production Date'";
                              $stmt1 = $conn->prepare($query6);
                              $stmt1->bindParam(1, $ByLot_ID);
                              $stmt1->execute();
                              $sample = $stmt1->fetchAll();
							                foreach ($sample as $productionDate ) {
                            ?>
                            <tr>
                              <td>production Date</td>
                              <td><input type="date" class="form-control" name="productionDate_1" value="<?php echo $productionDate['Sample_1'];?>"></td>
                              <td><input type="date" class="form-control" name="productionDate_2" value="<?php echo $productionDate['Sample_2'];?>"></td>
                              <td><input type="date" class="form-control" name="productionDate_3" value="<?php echo $productionDate['Sample_3'];?>"></td>
                              <td><input type="date" class="form-control" name="productionDate_4" value="<?php echo $productionDate['Sample_4'];?>"></td>
                              <td><input type="date" class="form-control" name="productionDate_5" value="<?php echo $productionDate['Sample_5'];?>"></td>
                            </tr>
                            <?php }?>
                          </tbody>
                        </table></br>
                      </div>
                    </div>

                      <table class="table table-bordered" border="1" width="100%">
                        <col style="width:5%">
                        <col style="width:5%">
                        <col style="width:5%">
                        <col style="width:5%">
                        <col style="width:5%">
                        <col style="width:5%">
                        <col style="width:5%">
                        <col style="width:5%">
                        <col style="width:5%">
                        <col style="width:5%">
                        <col style="width:20%">
                        <thead>
                          <tr>
                            <th style="width: 10px">TEST</th>
                            <th class="text-center">Sample Size</th>
                            <th class="text-center">AQL</th>
                            <th class="text-center">ACC</th>
                            <th class="text-center">Min</th>
                            <th class="text-center">Mid</th>
                            <th class="text-center">Max</th>
                            <th class="text-center">1</th>
                            <th class="text-center">2</th>
                            <th class="text-center">3</th>
                            <th class="text-center">Result</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Former weight (g)</td>
                            <td><input type="text" class="form-control" name="formerWeightTest_1" value="<?php echo $testVisual_pivot['Former Weight SS'];?>"></td>
                            <td><input type="text" class="form-control" name="formerWeightTest_2" value="<?php echo $testVisual_pivot['Former weight AQL'];?>"></td>
                            <td><input type="text" class="form-control" name="formerWeightTest_3" value="<?php echo $testVisual_pivot['Former weight ACC'];?>"></td>
                            <td><input type="text" class="form-control" name="formerWeightTest_4" value="<?php echo $testVisual_pivot['Former weight Min'];?>"></td>
                            <td><input type="text" class="form-control" name="formerWeightTest_5" value="<?php echo $testVisual_pivot['Former weight Mid'];?>"></td>
                            <td><input type="text" class="form-control" name="formerWeightTest_6" value="<?php echo $testVisual_pivot['Former weight Max'];?>"></td>
                            <td><input type="text" class="form-control" name="formerWeightTest_7" value="<?php echo $testVisual_pivot['Former weight 1'];?>"></td>
                            <td><input type="text" class="form-control" name="formerWeightTest_8" value="<?php echo $testVisual_pivot['Former weight 2'];?>"></td>
                            <td><input type="text" class="form-control" name="formerWeightTest_9" value="<?php echo $testVisual_pivot['Former weight 3'];?>"></td>
                            <td colspan="2"><select class="form-control" name="formerWeightTest_10">
                                  <option class="form-control" value="<?php echo $testVisual_pivot['Former weight Result'];?>"><?php echo $testVisual_pivot['Former weight Result'];?></option>
                                  <option class="form-control" value="PASS">PASS</option>
                                  <option class="form-control" value="FAIL">FAIL</option>
                                </select>
                            </td>
                          </tr>
                          <tr>
                            <td>Former Height (mm)</td>
                            <td><input type="text" class="form-control" name="formerHeightTest_1" value="<?php echo $testVisual_pivot['Former height SS'];?>"></td>
                            <td><input type="text" class="form-control" name="formerHeightTest_2" value="<?php echo $testVisual_pivot['Former height AQL'];?>"></td>
                            <td><input type="text" class="form-control" name="formerHeightTest_3" value="<?php echo $testVisual_pivot['Former height ACC'];?>"></td>
                            <td><input type="text" class="form-control" name="formerHeightTest_4" value="<?php echo $testVisual_pivot['Former height Min'];?>"></td>
                            <td><input type="text" class="form-control" name="formerHeightTest_5" value="<?php echo $testVisual_pivot['Former height Mid'];?>"></td>
                            <td><input type="text" class="form-control" name="formerHeightTest_6" value="<?php echo $testVisual_pivot['Former height Max'];?>"></td>
                            <td><input type="text" class="form-control" name="formerHeightTest_7" value="<?php echo $testVisual_pivot['Former height 1'];?>"></td>
                            <td><input type="text" class="form-control" name="formerHeightTest_8" value="<?php echo $testVisual_pivot['Former height 2'];?>"></td>
                            <td><input type="text" class="form-control" name="formerHeightTest_9" value="<?php echo $testVisual_pivot['Former height 3'];?>"></td>
                            <td colspan="2"><select class="form-control" name="formerHeightTest_10">
                                  <option class="form-control" value="<?php echo $testVisual_pivot['Former height Result'];?>"><?php echo $testVisual_pivot['Former height Result'];?></option>
                                  <option class="form-control" value="PASS">PASS</option>
                                  <option class="form-control" value="FAIL">FAIL</option>
                                </select>
                            </td>
                          </tr>
                        </tbody>
                      </table></br> 
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="status">
                    <!-- The timeline -->
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
                            <input type="text" class="form-control" name="inspectedBY" value="<?php echo $row['InspectedBy'] ?>">
                          </div>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Verified By</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="verifiedBY" value="<?php echo $row['VerifiedBy'] ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Verified Date</label>
                          <div class="col-sm-6">
                            <input type="datetime-local" class="form-control" name="verifiedDate" value="<?php echo date('Y-m-d\TH:i:s',strtotime($row['VerifiedDate']));?>" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                          <button type="submit" name="submit" class="btn btn-primary" style="float:right">Submit</button>
                    </div>
                  </div>

                </div>
                <!-- /.tab-content -->
                <?php 
                  $query3 = "SELECT * FROM View_ListByLotDefect WHERE Bylot_ID = ?";
                  $stmt3 = $conn->prepare($query3);
                  $stmt3->bindParam(1, $ByLot_ID, PDO::PARAM_INT);
                  $stmt3->execute();
                  $View_ListByLotDefect = $stmt3->fetchAll();
                  $stmt3->nextRowset();

                  $testDefect_pivot = array();
                  for ($i = 0; $i < count($View_ListByLotDefect); $i++) {
                    $testDefect_pivot_temp = array(
                      $View_ListByLotDefect[$i]['DefectCode'] => $View_ListByLotDefect[$i]['DefectValue']
                    );
                    $testDefect_pivot = array_merge($testDefect_pivot, $testDefect_pivot_temp);
                  }
                ?>
                <!------------------------------------------------------------------------------------------------------ modal critical ----------------------------------------------------------------------------------------------->
                <div class="modal fade" id="modal-critical">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Critical</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <table class="table table-bordered" id="dataTable" width="30%" cellspacing="0">
                        <tr>
                          <th scope="col" class="info">UB:</th>
                          <td><input class="form-control" value="<?php echo $testDefect_pivot['UB'];?>" name="UB" id="UB" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                          <th scope="col" class="info">BR:</th>
                          <td><input class="form-control" value="<?php echo $testDefect_pivot['BR'];?>" name="BR" id="BR" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" > </td>

                          <th scope="col" class="info">CL:</th>
                          <td><input class="form-control" value="<?php echo $testDefect_pivot['CL'];?>" name="CL" id="CL" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                          <th scope="col" class="info">LH:</th>
                          <td><input class="form-control" value="<?php echo $testDefect_pivot['LH'];?>" name="LH" id="LH" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>
                        </tr>

                        <tr>
                          <th scope="col" class="info">IT:</th>
                          <td><input class="form-control" value="<?php echo $testDefect_pivot['IT'];?>" name="IT" id="IT" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                          <th scope="col" class="info">SS:</th>
                          <td><input class="form-control" value="<?php echo $testDefect_pivot['SS'];?>" name="SS" id="SS" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                          <th scope="col" class="info">DB:</th>
                          <td><input class="form-control" value="<?php echo $testDefect_pivot['DB'];?>" name="DB" id="DB" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                          <th scope="col" class="info">CM:</th>
                          <td><input class="form-control" value="<?php echo $testDefect_pivot['CM'];?>" name="CM" id="CM" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>
                        </tr>

                        <tr>
                          <th scope="col" class="info">WM:</th>
                          <td><input class="form-control" value="<?php echo $testDefect_pivot['WM'];?>" name="WM" id="WM" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                          <th scope="col" class="info">FM</th>
                          <td><input class="form-control" value="<?php echo $testDefect_pivot['FM'];?>" name="FM" id="FM" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                          <th scope="col" class="info">MR</th>
                          <td><input class="form-control" value="<?php echo $testDefect_pivot['MR'];?>" name="MR" id="MR" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                          <th scope="col" class="info">FB:</th>
                          <td><input class="form-control" value="<?php echo $testDefect_pivot['FB'];?>" name="FB" id="FB" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>
                        </tr>
                      </table>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>

                <!------------------------------------------------------------------------------------------------------ modal critical ----------------------------------------------------------------------------------------------->
                <div class="modal fade" id="modal-major">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Major</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <table class="table table-bordered" id="dataTable" width="30%" cellspacing="0">
                          <tr>
                            <th scope="col" class="info">BEND:</th>
                            <td><input class="form-control" id="BEND" value="<?php echo $testDefect_pivot['BEND'];?>" name="BEND" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">Pits:</th>
                            <td><input class="form-control" id="Pits" value="<?php echo $testDefect_pivot['Pits'];?>" name="Pits" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" > </td>

                            <th scope="col" class="info">UW:</th>
                            <td><input class="form-control" id="UW" value="<?php echo $testDefect_pivot['UW'];?>" name="UW" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">OW:</th>
                            <td><input class="form-control" id="OW" value="<?php echo $testDefect_pivot['OW'];?>" name="OW" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>
                          </tr>

                          <tr>
                            <th scope="col" class="info">CP:</th>
                            <td><input class="form-control" id="CP" value="<?php echo $testDefect_pivot['CP'];?>" name="CP" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">CB:</th>
                            <td><input class="form-control" id="CB" value="<?php echo $testDefect_pivot['CB'];?>" name="CB" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">CPB:</th>
                            <td><input class="form-control" id="CPB" value="<?php echo $testDefect_pivot['CPB'];?>" name="CPB" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">NRD:</th>
                            <td><input class="form-control" id="NRD" value="<?php echo $testDefect_pivot['NRD'];?>" name="NRD" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>
                          </tr>

                          <tr>
                            <th scope="col" class="info">G.NRD:</th>
                            <td><input class="form-control" id="G_NRD" value="<?php echo $testDefect_pivot['G.NRD'];?>" name="G_NRD" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">FMT</th>
                            <td><input class="form-control" id="FMT" value="<?php echo $testDefect_pivot['FMT'];?>" name="FMT" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">FS</th>
                            <td><input class="form-control" id="FS" value="<?php echo $testDefect_pivot['FS'];?>" name="FS" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">OS:</th>
                            <td><input class="form-control" id="OS" value="<?php echo $testDefect_pivot['OS'];?>" name="OS" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>
                          </tr>

                          <tr>
                            <th scope="col" class="info">PH:</th>
                            <td><input class="form-control" id="PH" value="<?php echo $testDefect_pivot['PH'];?>" name="PH" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">SP</th>
                            <td><input class="form-control" id="SP" value="<?php echo $testDefect_pivot['SP'];?>" name="SP" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">RWE</th>
                            <td><input class="form-control" id="RWE" value="<?php echo $testDefect_pivot['RWE'];?>" name="RWE" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">BS:</th>
                            <td><input class="form-control" id="BS" value="<?php echo $testDefect_pivot['BS'];?>" name="BS" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>
                          </tr>
                          
                          <tr>
                            <th scope="col" class="info">BBP:</th>
                            <td><input class="form-control" id="BBP" value="<?php echo $testDefect_pivot['BBP'];?>" name="BBP" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">UBP</th>
                            <td><input class="form-control" id="UBP" value="<?php echo $testDefect_pivot['UBP'];?>" name="UBP" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">NBP</th>
                            <td><input class="form-control" id="NBP" value="<?php echo $testDefect_pivot['NBP'];?>" name="NBP" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">IS:</th>
                            <td><input class="form-control" id="IS" value="<?php echo $testDefect_pivot['IS'];?>" name="IS" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''"  ></td>
                          </tr>
                          
                          <tr>
                            <th scope="col" class="info">MW:</th>
                            <td><input class="form-control" id="MW" value="<?php echo $testDefect_pivot['MW'];?>" name="MW" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">BCD</th>
                            <td><input class="form-control" id="BCD" value="<?php echo $testDefect_pivot['BCD'];?>" name="BCD" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">BH</th>
                            <td><input class="form-control" id="BH" value="<?php echo $testDefect_pivot['BH'];?>" name="BH" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">CR:</th>
                            <td><input class="form-control" id="CR" value="<?php echo $testDefect_pivot['CR'];?>" name="CR" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>
                          </tr>

                          <tr>
                            <th scope="col" class="info">SN:</th>
                            <td><input class="form-control" id="SN" value="<?php echo $testDefect_pivot['SN'];?>" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info"></th>
                            <td><input class="form-control" name="" placeholder="" readonly></td>

                            <th scope="col" class="info"></th>
                            <td><input class="form-control" name="" placeholder="" readonly></td>

                            <th scope="col" class="info"></th>
                            <td><input class="form-control" name="" placeholder="" readonly></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>

                <!------------------------------------------------------------------------------------------------------ modal critical ----------------------------------------------------------------------------------------------->
                <div class="modal fade" id="modal-minor">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Minor</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <table class="table table-bordered" id="dataTable" width="30%" cellspacing="0">
                          <tr>
                            <th scope="col" class="info">MF:</th>
                            <td><input class="form-control" value="<?php echo $testDefect_pivot['MF'];?>" name="MF" id="MF" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">DT:</th>
                            <td><input class="form-control" value="<?php echo $testDefect_pivot['DT'];?>" name="DT" id="DT" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" > </td>

                            <th scope="col" class="info">SL:</th>
                            <td><input class="form-control" value="<?php echo $testDefect_pivot['SL'];?>" name="SL" id="SL" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>
                          </tr>

                          <tr>
                            <th scope="col" class="info">NS:</th>
                            <td><input class="form-control" value="<?php echo $testDefect_pivot['NS'];?>" name="NS" id="NS" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">SQ:</th>
                            <td><input class="form-control" value="<?php echo $testDefect_pivot['SQ'];?>" name="SQ" id="SQ" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>

                            <th scope="col" class="info">WS:</th>
                            <td><input class="form-control" value="<?php echo $testDefect_pivot['WS'];?>" name="WS" id="WS" onkeyup="defect1()" onkeydown="javascript:return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" onfocus="this.value=''" ></td>
                          </tr>

                          <tr>
                            <th scope="col" class="info"></th>
                            <td><input class="form-control" name="" placeholder="" readonly></td>

                            <th scope="col" class="info"></th>
                            <td><input class="form-control" name="" placeholder="" readonly></td>

                            <th scope="col" class="info"></th>
                            <td><input class="form-control" name="" placeholder="" readonly></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-------------------------------------------------------calculation defect------------------------------------------------------------------------------------------------------------------->
                <script>
                    function defect1() {
                        var UB = document.getElementById("UB").value;
                        var BR = document.getElementById("BR").value;
                        var CL = document.getElementById("CL").value;
                        var LH = document.getElementById("LH").value;
                        var IT = document.getElementById("IT").value;
                        var SS = document.getElementById("SS").value;
                        var DB = document.getElementById("DB").value;
                        var CM = document.getElementById("CM").value;
                        var WM = document.getElementById("WM").value;
                        var FM = document.getElementById("FM").value;
                        var MR = document.getElementById("MR").value;
                        var FB = document.getElementById("FB").value;

                        var BEND = document.getElementById("BEND").value;
                        var Pits = document.getElementById("Pits").value;
                        var UW = document.getElementById("UW").value;
                        var OW = document.getElementById("OW").value;
                        var CP = document.getElementById("CP").value;
                        var CB = document.getElementById("CB").value;
                        var CPB = document.getElementById("CPB").value;
                        var NRD = document.getElementById("NRD").value;
                        var G_NRD = document.getElementById("G_NRD").value;
                        var FMT = document.getElementById("FMT").value;
                        var FS = document.getElementById("FS").value;
                        var OS = document.getElementById("OS").value;
                        var PH = document.getElementById("PH").value;
                        var SP = document.getElementById("SP").value;
                        var RWE = document.getElementById("RWE").value;
                        var BS = document.getElementById("BS").value;
                        
                        var BBP = document.getElementById("BBP").value;
                        var UBP = document.getElementById("UBP").value;
                        var NBP = document.getElementById("NBP").value;
                        var IS = document.getElementById("IS").value;
                        var MW = document.getElementById("MW").value;
                        var BCD = document.getElementById("BCD").value;
                        var BH = document.getElementById("BH").value;
                        var CR = document.getElementById("CR").value;
                        var SN = document.getElementById("SN").value;

                        var MF = document.getElementById("MF").value;
                        var DT = document.getElementById("DT").value;
                        var SL = document.getElementById("SL").value;
                        var NS = document.getElementById("NS").value;
                        var SQ = document.getElementById("SQ").value;
                        var WS = document.getElementById("WS").value;
                        var b = +UB + +BR + +CL + +LH + +IT + +SS + +DB + +CM + +WM + +FM + +MR + +FB + 
                                +BEND + +Pits + +UW + +OW + +CP + +CB + +CPB + +NRD + +G_NRD + +FMT + +FS + +OS + +PH + +SP + +RWE + +BS +
                                +BBP + +UBP + +NBP + +IS + +MW + +BCD + +BH + +CR + +SN + 
                                +MF + +DT + +SL + +NS + +SQ + +WS;
                    
                        document.getElementById("result_Defect").value = b;
                    }
                </script>
                <!-------------------------------------------------------end calculation defect------------------------------------------------------------------------------------------------------------------->
                <?php
                    }//While loop
                  }else{
                  //Close tab if user load page without RecordID parameter
                  echo "<script>window.close();</script>";
                  }
                ?>
               </form>
               <?php
                if (isset($_POST['submit'])) {

                  $RecordID = $_GET['RecordID'];
                  // echo "</br>".$RecordID;
                  $ByLot_ID = $_GET['ByLot_ID'];
                  // echo "</br>".$ByLot_ID;
                  $batchnumber = $_POST['batchnumber'];
                  // echo "</br>".$batchnumber;
                  $factoryCustomer = $_POST['factoryCustomer'];
                  // echo "</br>".$factoryCustomer;
                  $inspectionstage = $_POST['inspectionstage'];
                  // echo "</br>".$inspectionstage;
                  $palletNO = $_POST['palletNO'];
                  // echo "</br>".$palletNO;
                  $quantity = $_POST['quantity'];
                  // echo "</br>".$quantity;
                  $NoTravellingForm = $_POST['NoTravellingForm'];
                  // echo "</br>".$NoTravellingForm;
                  $inspection_date = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$_POST['inspection_date'])));
                  // echo "</br>".$inspection_date;
                  $rework = $_POST['rework'];
                  // echo "</br>".$rework;
                  $productcode = $_POST['productcode'];
                  // echo "</br>".$productcode;
                  $receiveDate = date('Y-m-d', strtotime(str_replace("/","-",$_POST['receiveDate'])));
                  // echo "</br>".$receiveDate;
                  $formerheight = $_POST['formerheight'];
                  // echo "</br>".$formerheight;
                  $formertype = $_POST['formertype'];
                  // echo "</br>".$formertype;
                  $size = $_POST['size'];
                  // echo "</br>".$size;
                  $lotNumber = $_POST['lotNumber'];
                  // echo "</br>".$lotNumber;

                  $weighing_ScaleID = $_POST['weighing_ScaleID'];
                  // echo "</br>".$weighing_ScaleID;
                  $height_ScaleID = $_POST['height_ScaleID'];
                  // echo "</br>".$height_ScaleID;
                  $bending_ScaleID = $_POST['bending_ScaleID'];
                  // echo "</br>".$bending_ScaleID;

                  $batchNumberVisual = $_POST['batchNumberVisual'];
                  // echo "</br>".$batchNumberVisual;
                  $quantityVisual = $_POST['quantityVisual'];
                  // echo "</br>".$quantityVisual;
                  $visualDisposition = $_POST['visualDisposition'];
                  // echo "</br>".$visualDisposition;

                  $visualDefect_SS = $_POST['visualDefect_SS'];
                  // echo "</br>".$visualDefect_SS;
                  $visualDefect_AQL = $_POST['visualDefect_AQL'];
                  // echo "</br>".$visualDefect_AQL;
                  $visualDefect_ACC = $_POST['visualDefect_ACC'];
                  // echo "</br>".$visualDefect_ACC;
                  $Bending_SS = $_POST['Bending_SS'];
                  // echo "</br>".$Bending_SS;
                  $Bending_AQL = $_POST['Bending_AQL'];
                  // echo "</br>".$Bending_AQL;
                  $Bending_ACC = $_POST['Bending_ACC'];
                  // echo "</br>".$Bending_ACC;
                  $Bending_Result = $_POST['Bending_Result'];
                  // echo "</br>".$Bending_Result;
                  $Packaging_Result = $_POST['Packaging_Result'];
                  // echo "</br>".$Packaging_Result;

                  $mouldID_1 = $_POST['mouldID_1'];
                  // echo "</br>".$mouldID_1;
                  $mouldID_2 = $_POST['mouldID_2'];
                  // echo "</br>".$mouldID_2;
                  $mouldID_3 = $_POST['mouldID_3'];
                  // echo "</br>".$mouldID_3;
                  $mouldID_4 = $_POST['mouldID_4'];
                  // echo "</br>".$mouldID_4;
                  $mouldID_5 = $_POST['mouldID_5'];
                  // echo "</br>".$mouldID_5;

                  $productionDate_1 = $_POST['productionDate_1'];
                  // echo "</br>".$productionDate_1;
                  $productionDate_2 = $_POST['productionDate_2'];
                  // echo "</br>".$productionDate_2;
                  $productionDate_3 = $_POST['productionDate_3'];
                  // echo "</br>".$productionDate_3;
                  $productionDate_4 = $_POST['productionDate_4'];
                  // echo "</br>".$productionDate_4;
                  $productionDate_5 = $_POST['productionDate_5'];
                  // echo "</br>".$productionDate_5;

                  $formerWeightTest_SS = $_POST['formerWeightTest_1'];
                  // echo "</br>".$formerWeightTest_1;
                  $formerWeightTest_AQL = $_POST['formerWeightTest_2'];
                  // echo "</br>".$formerWeightTest_2;
                  $formerWeightTest_ACC = $_POST['formerWeightTest_3'];
                  // echo "</br>".$formerWeightTest_3;
                  $formerWeightTest_Min = $_POST['formerWeightTest_4'];
                  // echo "</br>".$formerWeightTest_4;
                  $formerWeightTest_Mid = $_POST['formerWeightTest_5'];
                  // echo "</br>".$formerWeightTest_5;
                  $formerWeightTest_Max = $_POST['formerWeightTest_6'];
                  // echo "</br>".$formerWeightTest_6;
                  $formerWeightTest_1 = $_POST['formerWeightTest_7'];
                  // echo "</br>".$formerWeightTest_7;
                  $formerWeightTest_2 = $_POST['formerWeightTest_8'];
                  // echo "</br>".$formerWeightTest_8;
                  $formerWeightTest_3 = $_POST['formerWeightTest_9'];
                  // echo "</br>".$formerWeightTest_9;
                  $formerWeightTest_Result = $_POST['formerWeightTest_10'];
                  // echo "</br>".$formerWeightTest_10;

                  $formerHeightTest_SS = $_POST['formerHeightTest_1'];
                  // echo "</br>".$formerHeightTest_1;
                  $formerHeightTest_AQL = $_POST['formerHeightTest_2'];
                  // echo "</br>".$formerHeightTest_2;
                  $formerHeightTest_ACC = $_POST['formerHeightTest_3'];
                  // echo "</br>".$formerHeightTest_3;
                  $formerHeightTest_Min = $_POST['formerHeightTest_4'];
                  // echo "</br>".$formerHeightTest_4;
                  $formerHeightTest_Mid = $_POST['formerHeightTest_5'];
                  // echo "</br>".$formerHeightTest_5;
                  $formerHeightTest_Max = $_POST['formerHeightTest_6'];
                  // echo "</br>".$formerHeightTest_6;
                  $formerHeightTest_1 = $_POST['formerHeightTest_7'];
                  // echo "</br>".$formerHeightTest_7;
                  $formerHeightTest_2 = $_POST['formerHeightTest_8'];
                  // echo "</br>".$formerHeightTest_8;
                  $formerHeightTest_3 = $_POST['formerHeightTest_9'];
                  // echo "</br>".$formerHeightTest_9;
                  $formerHeightTest_Result = $_POST['formerHeightTest_10'];
                  // echo "</br>".$formerHeightTest_10;

                  $UB = $_POST['UB'];
                  // echo "</br>".$UB;
                  $BR = $_POST['BR'];
                  // echo "</br>".$BR;
                  $CL = $_POST['CL'];
                  // echo "</br>".$CL;
                  $LH = $_POST['LH'];
                  // echo "</br>".$LH;
                  $IT = $_POST['IT'];
                  // echo "</br>".$IT;
                  $SS = $_POST['SS'];
                  // echo "</br>".$SS;
                  $DB = $_POST['DB'];
                  // echo "</br>".$DB;
                  $CM = $_POST['CM'];
                  // echo "</br>".$CM;
                  $WM = $_POST['WM'];
                  // echo "</br>".$WM;
                  $FM = $_POST['FM'];
                  // echo "</br>".$FM;
                  $MR = $_POST['MR'];
                  // echo "</br>".$MR;
                  $FB = $_POST['FB'];
                  // echo "</br>".$FB;

                  $BEND = $_POST['BEND'];
                  // echo "</br>".$BEND;
                  $Pits = $_POST['Pits'];
                  // echo "</br>".$Pits;
                  $UW = $_POST['UW'];
                  // echo "</br>".$UW;
                  $OW = $_POST['OW'];
                  // echo "</br>".$OW;
                  $CP = $_POST['CP'];
                  // echo "</br>".$CP;
                  $CB = $_POST['CB'];
                  // echo "</br>".$CB;
                  $CPB = $_POST['CPB'];
                  // echo "</br>".$CPB;
                  $NRD = $_POST['NRD'];
                  // echo "</br>".$NRD;
                  $G_NRD = $_POST['G_NRD'];
                  // echo "</br>".$WM;
                  $FMT = $_POST['FMT'];
                  // echo "</br>".$FM;
                  $FS = $_POST['FS'];
                  // echo "</br>".$FS;
                  $OS = $_POST['OS'];
                  // echo "</br>".$OS;
                  $PH = $_POST['PH'];
                  // echo "</br>".$PH;
                  $SP = $_POST['SP'];
                  // echo "</br>".$SP;
                  $RWE = $_POST['RWE'];
                  // echo "</br>".$RWE;
                  $BS = $_POST['BS'];
                  // echo "</br>".$BS;
                  $BBP = $_POST['BBP'];
                  // echo "</br>".$BBP;
                  $UBP = $_POST['UBP'];
                  // echo "</br>".$UBP;
                  $NBP = $_POST['NBP'];
                  // echo "</br>".$NBP;
                  $IS = $_POST['IS'];
                  // echo "</br>".$IS;
                  $MW = $_POST['MW'];
                  // echo "</br>".$MW;
                  $BCD = $_POST['BCD'];
                  // echo "</br>".$BCD;
                  $BH = $_POST['BH'];
                  // echo "</br>".$BH;
                  $CR = $_POST['CR'];
                  // echo "</br>".$CR;
                  $SN = $_POST['SN'];
                  // echo "</br>".$SN;

                  $MF = $_POST['MF'];
                  // echo "</br>".$MF;
                  $DT = $_POST['DT'];
                  // echo "</br>".$DT;
                  $SL = $_POST['SL'];
                  // echo "</br>".$SL;
                  $NS = $_POST['NS'];
                  // echo "</br>".$NS;
                  $SQ = $_POST['SQ'];
                  // echo "</br>".$SQ;
                  $WS = $_POST['WS'];
                  // echo "</br>".$WS;

                  $overall_disposition = $_POST['overall_disposition'];
                  // echo "</br>".$overall_disposition;
                  $inspectedBY = $_POST['inspectedBY'];
                  // echo "</br>".$inspectedBY;
                  $verifiedBY = $_POST['verifiedBY'];
                  // echo "</br>".$verifiedBY;
                  $verified_date = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$_POST['verifiedDate'])));
                  // echo "</br>".$verified_date;

                  $query = "{CALL SP_Update_ByLOT(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                                                    ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                                                    ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                                                    ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                                                    ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                                                    ?,?,?,?,?,?,?)}";
                  $stmt = $connect->prepare($query);

                  
                  $stmt->bindParam(1, $RecordID, PDO::PARAM_INT);
                  $stmt->bindParam(2, $ByLot_ID, PDO::PARAM_INT);
                  $stmt->bindParam(3, $batchnumber);
                  $stmt->bindParam(4, $factoryCustomer, PDO::PARAM_INT);
                  $stmt->bindParam(5, $inspectionstage, PDO::PARAM_INT);
                  $stmt->bindParam(6, $palletNO);
                  $stmt->bindParam(7, $quantity);
                  $stmt->bindParam(8, $NoTravellingForm);
                  $stmt->bindParam(9, $inspection_date);
                  $stmt->bindParam(10, $rework);
                  $stmt->bindParam(11, $productcode, PDO::PARAM_INT);
                  $stmt->bindParam(12, $receiveDate);
                  $stmt->bindParam(13, $formerheight, PDO::PARAM_INT);
                  $stmt->bindParam(14, $formertype, PDO::PARAM_INT);
                  $stmt->bindParam(15, $size, PDO::PARAM_INT);
                  $stmt->bindParam(16, $lotNumber);

                  $stmt->bindParam(17, $weighing_ScaleID, PDO::PARAM_INT); 
                  $stmt->bindParam(18, $height_ScaleID, PDO::PARAM_INT);
                  $stmt->bindParam(19, $bending_ScaleID, PDO::PARAM_INT);

                  $stmt->bindParam(20, $batchNumberVisual);
                  $stmt->bindParam(21, $quantityVisual);
                  $stmt->bindParam(22, $visualDisposition);

                  $stmt->bindParam(23, $visualDefect_SS);
                  $stmt->bindParam(24, $visualDefect_AQL);
                  $stmt->bindParam(25, $visualDefect_ACC);
                  $stmt->bindParam(26, $Bending_SS);
                  $stmt->bindParam(27, $Bending_AQL);
                  $stmt->bindParam(28, $Bending_ACC);
                  $stmt->bindParam(29, $Bending_Result);
                  $stmt->bindParam(30, $Packaging_Result); 

                  $stmt->bindParam(31, $mouldID_1);
                  $stmt->bindParam(32, $mouldID_2);
                  $stmt->bindParam(33, $mouldID_3);
                  $stmt->bindParam(34, $mouldID_4);
                  $stmt->bindParam(35, $mouldID_5);
                  $stmt->bindParam(36, $productionDate_1);
                  $stmt->bindParam(37, $productionDate_2);
                  $stmt->bindParam(38, $productionDate_3);
                  $stmt->bindParam(39, $productionDate_4);
                  $stmt->bindParam(40, $productionDate_5);
                  
                  $stmt->bindParam(41, $formerWeightTest_SS);
                  $stmt->bindParam(42, $formerWeightTest_AQL);
                  $stmt->bindParam(43, $formerWeightTest_ACC);
                  $stmt->bindParam(44, $formerWeightTest_Min);
                  $stmt->bindParam(45, $formerWeightTest_Mid);
                  $stmt->bindParam(46, $formerWeightTest_Max);
                  $stmt->bindParam(47, $formerWeightTest_1);
                  $stmt->bindParam(48, $formerWeightTest_2);
                  $stmt->bindParam(49, $formerWeightTest_3);
                  $stmt->bindParam(50, $formerWeightTest_Result);
                  
                  $stmt->bindParam(51, $formerHeightTest_SS);
                  $stmt->bindParam(52, $formerHeightTest_AQL);
                  $stmt->bindParam(53, $formerHeightTest_ACC);
                  $stmt->bindParam(54, $formerHeightTest_Min);
                  $stmt->bindParam(55, $formerHeightTest_Mid);
                  $stmt->bindParam(56, $formerHeightTest_Max);
                  $stmt->bindParam(57, $formerHeightTest_1);
                  $stmt->bindParam(58, $formerHeightTest_2);
                  $stmt->bindParam(59, $formerHeightTest_3);
                  $stmt->bindParam(60, $formerHeightTest_Result);
                  
                  $stmt->bindParam(61, $UB);
                  $stmt->bindParam(62, $BR);
                  $stmt->bindParam(63, $CL);
                  $stmt->bindParam(64, $LH);
                  $stmt->bindParam(65, $IT);
                  $stmt->bindParam(66, $SS);
                  $stmt->bindParam(67, $DB);
                  $stmt->bindParam(68, $CM);
                  $stmt->bindParam(69, $WM);
                  $stmt->bindParam(70, $FM);
                  $stmt->bindParam(71, $MR);
                  $stmt->bindParam(72, $FB);

                  $stmt->bindParam(73, $BEND);
                  $stmt->bindParam(74, $Pits);
                  $stmt->bindParam(75, $UW);
                  $stmt->bindParam(76, $OW);
                  $stmt->bindParam(77, $CP);
                  $stmt->bindParam(78, $CB);
                  $stmt->bindParam(79, $CPB);
                  $stmt->bindParam(80, $NRD);
                  $stmt->bindParam(81, $G_NRD);
                  $stmt->bindParam(82, $FMT);
                  $stmt->bindParam(83, $FS);
                  $stmt->bindParam(84, $OS);
                  $stmt->bindParam(85, $PH);
                  $stmt->bindParam(86, $SP);
                  $stmt->bindParam(87, $RWE);
                  $stmt->bindParam(88, $BS);
                  $stmt->bindParam(89, $BBP);
                  $stmt->bindParam(90, $UBP);
                  $stmt->bindParam(91, $NBP);
                  $stmt->bindParam(92, $IS);
                  $stmt->bindParam(93, $MW);
                  $stmt->bindParam(94, $BCD);
                  $stmt->bindParam(95, $BH);
                  $stmt->bindParam(96, $CR);
                  $stmt->bindParam(97, $SN);
                  
                  $stmt->bindParam(98, $MF);
                  $stmt->bindParam(99, $DT);
                  $stmt->bindParam(100, $SL);
                  $stmt->bindParam(101, $NS);
                  $stmt->bindParam(102, $SQ);
                  $stmt->bindParam(103, $WS);
                  
                  $stmt->bindParam(104, $overall_disposition);
                  $stmt->bindParam(105, $inspectedBY);
                  $stmt->bindParam(106, $verifiedBY);
                  $stmt->bindParam(107, $verified_date);
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
</html>



