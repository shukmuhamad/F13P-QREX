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
                <a class="dropdown-item" href="../../home.php">Logout</a>
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                New Batch TS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form_batch.php" class="nav-link active">
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
              <li class="breadcrumb-item active">Form_Termal Shock</li>
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
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_FactoryCustomer");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">Factory Customer</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="factoryCustomer" required>
                              <?php foreach ($fetch as $row) { ?>
                              <option type="text" value= "<?php echo $row['CustomerKey'];?>" class="form-control"><?php echo $row['FactoryCustomer'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Batch Number</label>
                          <div class="col-sm-6">
                            <input type="text" name="batchnumber" class="form-control" id="batchnumberTS" onInput="checkresult()" required><span id="check-batchNo"></span>
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
                            $query = $connect->prepare("SELECT * FROM M_OvenTempSet");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">Oven Temperature Setting</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="OvenTempSet" required>
                              <?php foreach ($fetch as $row) { ?>
                              <option type="text" class="form-control" id="" value="<?php echo $row['OvenTempSetKey'];?>"><?php echo $row['OvenTemperatureSetting'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Kiln No</label>
                          <div class="col-sm-6">
                              <input type="number" class="form-control" name="kiln_No" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_EMS");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">EMS</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="ems" required>
                              <?php foreach ($fetch as $row) { ?>
                              <option type="text" class="form-control" value="<?php echo $row['EMSSetKey'];?>"><?php echo $row['EMS_Setting'];}?></option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Inspection Date/Time</label>
                          <div class="col-sm-6">
                            <input type="datetime-local" name="inspectiondate" class="form-control" value="<?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date('Y-m-d\TH:i:s'); ?>" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Rework Remark</label>
                          <div class="col-sm-6">
                            <input type="text" name="rework" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Former Type </label>
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_FormerTypeCode");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <div class="col-sm-6">
                            <select name="formertype" class="form-control select2" required>
                              <?php foreach ($fetch as $row) { ?>
                              <option type="text" class="form-control" id="" value="<?php echo $row['Former_TypeKey'];?>"><?php echo $row['FormerTypeCode'];}?></option>
                            <select>
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
                            <select class="form-control select2" name="productcode" required>
                              <?php foreach ($fetch as $row) { ?>
                              <option type="text" class="form-control" id="" value="<?php echo $row['ProductCodeKey'];?>"><?php echo $row['FormerProductCode'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Firing No</label>
                          <div class="col-sm-6">
                            <input type="number" name="firing_no" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Mould Cycle</label>
                          <div class="col-sm-6">
                            <input type="text" name="mouldCycle" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_MaterialType");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-2 col-form-label">Type Material</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="type_material" required>
                              <?php foreach ($fetch as $row) { ?>
                              <option type="text" class="form-control" id="" value="<?php echo $row['MaterialTypeKey'];?>"><?php echo $row['MaterialTypeName'];}?></option>
                            <select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Sample Size</label>
                          <div class="col-sm-1">
                            <input type="text" class="form-control" name="sampleSize" Value="13" readonly>
                          </div>

                          <?php 
                            $query = $connect->prepare("SELECT * FROM M_AQL");
                            $query->execute();
                            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                          ?>
                          <label class="col-sm-1 col-form-label">AQL</label>
                          <div class="col-sm-2">
                            <select class="form-control select2" name="AQL" required>
                              <?php foreach ($fetch as $row) { ?>
                              <option type="text" class="form-control" value="<?php echo $row['AQL_Key'];?>"><?php echo $row['AQL_Name'];}?></option>
                            </select>
                          </div>
                          <label class="col-sm-2 col-form-label">Acceptance</label>
                          <div class="col-sm-1">
                            <input type="text" name="acceptance" class="form-control" id="" value="1" readonly>
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
                    <style>
                    table {
                      border-collapse: collapse;
                      border-spacing: 0;
                      width: 100%;
                      border: 1px solid #ddd;
                    }
                    
                    th, td {
                      text-align: left;
                      padding: 8px;
                    }
                    
                    tr:nth-child(even){background-color: #f2f2f2}
                    </style>
                    <div style="overflow-x:auto;">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="text-center">Sample No</th>
                            <th class="text-center">1</th>
                            <th class="text-center">2</th>
                            <th class="text-center">3</th>
                            <th class="text-center">4</th>
                            <th class="text-center">5</th>
                            <th class="text-center">6</th>
                            <th class="text-center">7</th>
                            <th class="text-center">8</th>
                            <th class="text-center">9</th>
                            <th class="text-center">10</th>
                            <th class="text-center">11</th>
                            <th class="text-center">12</th>
                            <th class="text-center">13</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Kiln Zone</td>
                            <?php 
                              $query = $connect->prepare("SELECT * FROM M_KilnZone");
                              $query->execute();
                              $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                            
                            <td><select class="form-control select2" name="KilnZone1"> <option value=""></option> <?php foreach ($fetch as $row1) { ?><option class="form-control" value="<?php echo $row1['KilnZone'];?>"><?php echo $row1['KilnZone'];}?></select></td>
                            <td><select class="form-control select2" name="KilnZone2"> <option value=""></option> <?php foreach ($fetch as $row2) { ?><option class="form-control" value="<?php echo $row2['KilnZone'];?>"><?php echo $row2['KilnZone'];}?></select></td>
                            <td><select class="form-control select2" name="KilnZone3"> <option value=""></option> <?php foreach ($fetch as $row3) { ?><option class="form-control" value="<?php echo $row3['KilnZone'];?>"><?php echo $row3['KilnZone'];}?></select></td>
                            <td><select class="form-control select2" name="KilnZone4"> <option value=""></option> <?php foreach ($fetch as $row4) { ?><option class="form-control" value="<?php echo $row4['KilnZone'];?>"><?php echo $row4['KilnZone'];}?></select></td>
                            <td><select class="form-control select2" name="KilnZone5"> <option value=""></option> <?php foreach ($fetch as $row5) { ?><option class="form-control" value="<?php echo $row5['KilnZone'];?>"><?php echo $row5['KilnZone'];}?></select></td>
                            <td><select class="form-control select2" name="KilnZone6"> <option value=""></option> <?php foreach ($fetch as $row6) { ?><option class="form-control" value="<?php echo $row6['KilnZone'];?>"><?php echo $row6['KilnZone'];}?></select></td>
                            <td><select class="form-control select2" name="KilnZone7"> <option value=""></option> <?php foreach ($fetch as $row7) { ?><option class="form-control" value="<?php echo $row7['KilnZone'];?>"><?php echo $row7['KilnZone'];}?></select></td>
                            <td><select class="form-control select2" name="KilnZone8"> <option value=""></option> <?php foreach ($fetch as $row8) { ?><option class="form-control" value="<?php echo $row8['KilnZone'];?>"><?php echo $row8['KilnZone'];}?></select></td>
                            <td><select class="form-control select2" name="KilnZone9"> <option value=""></option> <?php foreach ($fetch as $row9) { ?><option class="form-control" value="<?php echo $row9['KilnZone'];?>"><?php echo $row9['KilnZone'];}?></select></td>
                            <td><select class="form-control select2" name="KilnZone10"><option value=""></option> <?php foreach ($fetch as $row10) { ?><option class="form-control" value="<?php echo $row10['KilnZone'];?>"><?php echo $row10['KilnZone'];}?></select></td>
                            <td><select class="form-control select2" name="KilnZone11"><option value=""></option> <?php foreach ($fetch as $row11) { ?><option class="form-control" value="<?php echo $row11['KilnZone'];?>"><?php echo $row11['KilnZone'];}?></select></td>
                            <td><select class="form-control select2" name="KilnZone12"><option value=""></option> <?php foreach ($fetch as $row12) { ?><option class="form-control" value="<?php echo $row12['KilnZone'];?>"><?php echo $row12['KilnZone'];}?></select></td>
                            <td><select class="form-control select2" name="KilnZone13"><option value=""></option> <?php foreach ($fetch as $row13) { ?><option class="form-control" value="<?php echo $row13['KilnZone'];?>"><?php echo $row13['KilnZone'];}?></select></td>
                          </tr>
                          <tr>
                            <td>Production Date</td>
                            <td><input name="prodDate1"  type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control"></td>
                            <td><input name="prodDate2"  type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control" ></td>
                            <td><input name="prodDate3"  type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control" ></td>
                            <td><input name="prodDate4"  type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control" ></td>
                            <td><input name="prodDate5"  type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control" ></td>
                            <td><input name="prodDate6"  type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control" ></td>
                            <td><input name="prodDate7"  type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control" ></td>
                            <td><input name="prodDate8"  type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control" ></td>
                            <td><input name="prodDate9"  type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control" ></td>
                            <td><input name="prodDate10" type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control" ></td>
                            <td><input name="prodDate11" type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control" ></td>
                            <td><input name="prodDate12" type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control" ></td>
                            <td><input name="prodDate13" type='text' placeholder="Select Date" style="border:3px solid #E3E3E3;" onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" class="form-control" ></td>
                          </tr>
                          <tr>
                            <td>Former weight (g)</td>
                            <td><input type="text" name="formerWeight1"  class="form-control" ></td>
                            <td><input type="text" name="formerWeight2"  class="form-control" ></td>
                            <td><input type="text" name="formerWeight3"  class="form-control" ></td>
                            <td><input type="text" name="formerWeight4"  class="form-control" ></td>
                            <td><input type="text" name="formerWeight5"  class="form-control" ></td>
                            <td><input type="text" name="formerWeight6"  class="form-control" ></td>
                            <td><input type="text" name="formerWeight7"  class="form-control" ></td>
                            <td><input type="text" name="formerWeight8"  class="form-control" ></td>
                            <td><input type="text" name="formerWeight9"  class="form-control" ></td>
                            <td><input type="text" name="formerWeight10" class="form-control" ></td>
                            <td><input type="text" name="formerWeight11" class="form-control" ></td>
                            <td><input type="text" name="formerWeight12" class="form-control" ></td>
                            <td><input type="text" name="formerWeight13" class="form-control" ></td>
                          </tr>
                          <tr>
                            <td>Water Temperature before Dipping Standard: 30 ± 3°C</td>
                            <td><input type="text" name="waterTempBefore_1"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempBefore_2"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempBefore_3"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempBefore_4"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempBefore_5"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempBefore_6"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempBefore_7"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempBefore_8"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempBefore_9"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempBefore_10" class="form-control" id=""></td>
                            <td><input type="text" name="waterTempBefore_11" class="form-control" id=""></td>
                            <td><input type="text" name="waterTempBefore_12" class="form-control" id=""></td>
                            <td><input type="text" name="waterTempBefore_13" class="form-control" id=""></td>
                          </tr>
                          <tr>
                            <td>Former Temperature before Dipping</td>
                            <td><input type="text" name="formerTemperature_1"  class="form-control" id=""></td>
                            <td><input type="text" name="formerTemperature_2"  class="form-control" id=""></td>
                            <td><input type="text" name="formerTemperature_3"  class="form-control" id=""></td>
                            <td><input type="text" name="formerTemperature_4"  class="form-control" id=""></td>
                            <td><input type="text" name="formerTemperature_5"  class="form-control" id=""></td>
                            <td><input type="text" name="formerTemperature_6"  class="form-control" id=""></td>
                            <td><input type="text" name="formerTemperature_7"  class="form-control" id=""></td>
                            <td><input type="text" name="formerTemperature_8"  class="form-control" id=""></td>
                            <td><input type="text" name="formerTemperature_9"  class="form-control" id=""></td>
                            <td><input type="text" name="formerTemperature_10" class="form-control" id=""></td>
                            <td><input type="text" name="formerTemperature_11" class="form-control" id=""></td>
                            <td><input type="text" name="formerTemperature_12" class="form-control" id=""></td>
                            <td><input type="text" name="formerTemperature_13" class="form-control" id=""></td>
                          </tr>
                          <tr>
                            <td>Water Temperature after Dipping (°C)</td>
                            <td><input type="text" name="waterTempAfter_1"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempAfter_2"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempAfter_3"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempAfter_4"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempAfter_5"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempAfter_6"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempAfter_7"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempAfter_8"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempAfter_9"  class="form-control" id=""></td>
                            <td><input type="text" name="waterTempAfter_10" class="form-control" id=""></td>
                            <td><input type="text" name="waterTempAfter_11" class="form-control" id=""></td>
                            <td><input type="text" name="waterTempAfter_12" class="form-control" id=""></td>
                            <td><input type="text" name="waterTempAfter_13" class="form-control" id=""></td>
                          </tr>
                          <tr>
                            <td>Disposition</td>
                            <td><select class="form-control select2" name="disposition_1" ><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                            <td><select class="form-control select2" name="disposition_2" ><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                            <td><select class="form-control select2" name="disposition_3" ><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                            <td><select class="form-control select2" name="disposition_4" ><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                            <td><select class="form-control select2" name="disposition_5" ><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                            <td><select class="form-control select2" name="disposition_6" ><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                            <td><select class="form-control select2" name="disposition_7" ><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                            <td><select class="form-control select2" name="disposition_8" ><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                            <td><select class="form-control select2" name="disposition_9" ><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                            <td><select class="form-control select2" name="disposition_10"><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                            <td><select class="form-control select2" name="disposition_11"><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                            <td><select class="form-control select2" name="disposition_12"><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                            <td><select class="form-control select2" name="disposition_13"><option value=""></option><option value="PASS">PASS</option><option value="FAIL">FAIL</option></select></td>
                          </tr>
                          <tr>
                            <?php 
                              $query = $connect->prepare("SELECT * FROM M_TypeOfCrack");
                              $query->execute();
                              $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                            <td>Type of Crack</td>
                            <td><select class="form-control select2" name="typeCrack1"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                            <td><select class="form-control select2" name="typeCrack2"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                            <td><select class="form-control select2" name="typeCrack3"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                            <td><select class="form-control select2" name="typeCrack4"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                            <td><select class="form-control select2" name="typeCrack5"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                            <td><select class="form-control select2" name="typeCrack6"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                            <td><select class="form-control select2" name="typeCrack7"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                            <td><select class="form-control select2" name="typeCrack8"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                            <td><select class="form-control select2" name="typeCrack9"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                            <td><select class="form-control select2" name="typeCrack10"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                            <td><select class="form-control select2" name="typeCrack11"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                            <td><select class="form-control select2" name="typeCrack12"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                            <td><select class="form-control select2" name="typeCrack13"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['CrackDefectCode'];?>"><?php echo $row['CrackDefectCode'];}?></option></select></td>
                          </tr>
                          <tr>
                            <?php 
                              $query = $connect->prepare("SELECT * FROM M_HandPart");
                              $query->execute();
                              $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                            <td>Area Start to Crack</td>
                            <td><select class="form-control select2" name="HandPart1"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
                            <td><select class="form-control select2" name="HandPart2"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
                            <td><select class="form-control select2" name="HandPart3"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
                            <td><select class="form-control select2" name="HandPart4"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
                            <td><select class="form-control select2" name="HandPart5"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
                            <td><select class="form-control select2" name="HandPart6"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
                            <td><select class="form-control select2" name="HandPart7"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
                            <td><select class="form-control select2" name="HandPart8"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
                            <td><select class="form-control select2" name="HandPart9"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
                            <td><select class="form-control select2" name="HandPart10"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
                            <td><select class="form-control select2" name="HandPart11"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
                            <td><select class="form-control select2" name="HandPart12"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
                            <td><select class="form-control select2" name="HandPart13"><option value=""></option><?php foreach ($fetch as $row) { ?><option value="<?php echo $row['HandPartcode'];?>"><?php echo $row['HandPartcode'];}?></option></select></td>
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
                          <label class="col-sm-4 col-form-label">Overall Disposition</label>
                          <div class="col-sm-6">
                            <select class="form-control select2" name="overall_disposition">
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
                            <input type="text" class="form-control" name="verifiedBY" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Verified Date</label>
                          <div class="col-sm-6">
                            <input type="datetime-local" name="verifiedDate" class="form-control" value="<?php echo date('Y-m-d\TH:i:s'); ?>" readonly>
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
                
                   $factoryCustomer = $_POST['factoryCustomer'];
                  //  echo "</br>".$factoryCustomer;
                   $batchnumber = $_POST['batchnumber'];
                  //  echo "</br>".$batchnumber;
                   $inspectionstage = $_POST['inspectionstage'];
                  //  echo "</br>".$inspectionstage;
                   $formerheight = $_POST['formerheight'];
                  //  echo "</br>".$formerheight;
                   $size = $_POST['size'];
                  //  echo "</br>".$size;
                   $OvenTempSet = $_POST['OvenTempSet'];
                  //  echo "</br>".$OvenTempSet;
                   $kiln_No = $_POST['kiln_No'];
                  //  echo "</br>".$kiln_No;
                   $ems = $_POST['ems'];
                  //  echo "</br>".$ems;
                   $inspectiondate = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$_POST['inspectiondate'])));
                  // echo "</br>".$inspectiondate;
                   $rework = $_POST['rework'];
                  //  echo "</br>".$rework;
                   $formertype = $_POST['formertype'];
                  //  echo "</br>".$formertype;
                   $productcode = $_POST['productcode'];
                  //  echo "</br>".$productcode;
                   $firing_no = $_POST['firing_no'];
                  //  echo "</br>".$firing_no;
                   $mouldCycle = $_POST['mouldCycle'];
                  //  echo "</br>".$mouldCycle;
                   $type_material = $_POST['type_material'];
                  //  echo "</br>".$type_material;
                   $sampleSize = $_POST['sampleSize'];
                  //  echo "</br>".$sampleSize;
                   $AQL = $_POST['AQL'];
                  //  echo "</br>".$AQL;
                   $acceptance = $_POST['acceptance'];
                  //  echo "</br>".$acceptance;
                   $KilnZone1 = $_POST['KilnZone1'];
                  //  echo "</br>".$KilnZone1;
                   $KilnZone2 = $_POST['KilnZone2'];
                  //  echo "</br>".$KilnZone2;
                   $KilnZone3 = $_POST['KilnZone3'];
                  //  echo "</br>".$KilnZone3;
                   $KilnZone4 = $_POST['KilnZone4'];
                  //  echo "</br>".$KilnZone4;
                   $KilnZone5 = $_POST['KilnZone5'];
                  //  echo "</br>".$KilnZone5;
                   $KilnZone6 = $_POST['KilnZone6'];
                  //  echo "</br>".$KilnZone6;
                   $KilnZone7 = $_POST['KilnZone7'];
                  //  echo "</br>".$KilnZone7;
                   $KilnZone8 = $_POST['KilnZone8'];
                  //  echo "</br>".$KilnZone8;
                   $KilnZone9 = $_POST['KilnZone9'];
                  //  echo "</br>".$KilnZone9;
                   $KilnZone10 = $_POST['KilnZone10'];
                  //  echo "</br>".$KilnZone10;
                   $KilnZone11 = $_POST['KilnZone11'];
                  //  echo "</br>".$KilnZone11;
                   $KilnZone12 = $_POST['KilnZone12'];
                  //  echo "</br>".$KilnZone12;
                   $KilnZone13 = $_POST['KilnZone13'];
                  //  echo "</br>".$KilnZone13;

                   $prodDate1 = $_POST['prodDate1'];
                  //  echo "</br>".$prodDate1;
                   $prodDate2 = $_POST['prodDate2'];
                  //  echo "</br>".$prodDate2;
                   $prodDate3 = $_POST['prodDate3'];
                  //  echo "</br>".$prodDate3;
                   $prodDate4 = $_POST['prodDate4'];
                  //  echo "</br>".$prodDate4;
                   $prodDate5 = $_POST['prodDate5'];
                  //  echo "</br>".$prodDate5;
                   $prodDate6 = $_POST['prodDate6'];
                  //  echo "</br>".$prodDate6;
                   $prodDate7 = $_POST['prodDate7'];
                  //  echo "</br>".$prodDate7;
                   $prodDate8 = $_POST['prodDate8'];
                  //  echo "</br>".$prodDate8;
                   $prodDate9 = $_POST['prodDate9'];
                  //  echo "</br>".$prodDate9;
                   $prodDate10 = $_POST['prodDate10'];
                  //  echo "</br>".$prodDate10;
                   $prodDate11 = $_POST['prodDate11'];
                  //  echo "</br>".$prodDate11;
                   $prodDate12 = $_POST['prodDate12'];
                  //  echo "</br>".$prodDate12;
                   $prodDate13 = $_POST['prodDate13'];
                  //  echo "</br>".$prodDate13;

                   $formerWeight1 = $_POST['formerWeight1'];
                  //  echo "</br>".$formerWeight1;
                   $formerWeight2 = $_POST['formerWeight2'];
                  //  echo "</br>".$formerWeight2;
                   $formerWeight3 = $_POST['formerWeight3'];
                  //  echo "</br>".$formerWeight3;
                   $formerWeight4 = $_POST['formerWeight4'];
                  //  echo "</br>".$formerWeight4;
                   $formerWeight5 = $_POST['formerWeight5'];
                  //  echo "</br>".$formerWeight5;
                   $formerWeight6 = $_POST['formerWeight6'];
                  //  echo "</br>".$formerWeight6;
                   $formerWeight7 = $_POST['formerWeight7'];
                  //  echo "</br>".$formerWeight7;
                   $formerWeight8 = $_POST['formerWeight8'];
                  //  echo "</br>".$formerWeight8;
                   $formerWeight9 = $_POST['formerWeight9'];
                  //  echo "</br>".$formerWeight9;
                   $formerWeight10 = $_POST['formerWeight10'];
                  //  echo "</br>".$formerWeight10;
                   $formerWeight11 = $_POST['formerWeight11'];
                  //  echo "</br>".$formerWeight11;
                   $formerWeight12 = $_POST['formerWeight12'];
                  //  echo "</br>".$formerWeight12;
                   $formerWeight13 = $_POST['formerWeight13'];
                  //  echo "</br>".$formerWeight13;

                   $waterTempBefore_1 = $_POST['waterTempBefore_1'];
                  //  echo "</br>".$waterTempBefore_1;
                   $waterTempBefore_2 = $_POST['waterTempBefore_2'];
                  //  echo "</br>".$waterTempBefore_2;
                   $waterTempBefore_3 = $_POST['waterTempBefore_3'];
                  //  echo "</br>".$waterTempBefore_3;
                   $waterTempBefore_4 = $_POST['waterTempBefore_4'];
                  //  echo "</br>".$waterTempBefore_4;
                   $waterTempBefore_5 = $_POST['waterTempBefore_5'];
                  //  echo "</br>".$waterTempBefore_5;
                   $waterTempBefore_6 = $_POST['waterTempBefore_6'];
                  //  echo "</br>".$waterTempBefore_6;
                   $waterTempBefore_7 = $_POST['waterTempBefore_7'];
                  //  echo "</br>".$waterTempBefore_7;
                   $waterTempBefore_8 = $_POST['waterTempBefore_8'];
                  //  echo "</br>".$waterTempBefore_8;
                   $waterTempBefore_9 = $_POST['waterTempBefore_9'];
                  //  echo "</br>".$waterTempBefore_9;
                   $waterTempBefore_10 = $_POST['waterTempBefore_10'];
                  //  echo "</br>".$waterTempBefore_10;
                   $waterTempBefore_11 = $_POST['waterTempBefore_11'];
                  //  echo "</br>".$waterTempBefore_11;
                   $waterTempBefore_12 = $_POST['waterTempBefore_12'];
                  //  echo "</br>".$waterTempBefore_12;
                   $waterTempBefore_13 = $_POST['waterTempBefore_13'];
                  //  echo "</br>".$waterTempBefore_13;

                   $formerTemperature_1 = $_POST['formerTemperature_1'];
                  //  echo "</br>".$formerTemperature_1;
                   $formerTemperature_2 = $_POST['formerTemperature_2'];
                  //  echo "</br>".$formerTemperature_2;
                   $formerTemperature_3 = $_POST['formerTemperature_3'];
                  //  echo "</br>".$formerTemperature_3;
                   $formerTemperature_4 = $_POST['formerTemperature_4'];
                  //  echo "</br>".$formerTemperature_4;
                   $formerTemperature_5 = $_POST['formerTemperature_5'];
                  //  echo "</br>".$formerTemperature_5;
                   $formerTemperature_6 = $_POST['formerTemperature_6'];
                  //  echo "</br>".$formerTemperature_6;
                   $formerTemperature_7 = $_POST['formerTemperature_7'];
                  //  echo "</br>".$formerTemperature_7;
                   $formerTemperature_8 = $_POST['formerTemperature_8'];
                  //  echo "</br>".$formerTemperature_8;
                   $formerTemperature_9 = $_POST['formerTemperature_9'];
                  //  echo "</br>".$formerTemperature_9;
                   $formerTemperature_10 = $_POST['formerTemperature_10'];
                  //  echo "</br>".$formerTemperature_10;
                   $formerTemperature_11 = $_POST['formerTemperature_11'];
                  //  echo "</br>".$formerTemperature_11;
                   $formerTemperature_12 = $_POST['formerTemperature_12'];
                  //  echo "</br>".$formerTemperature_12;
                   $formerTemperature_13 = $_POST['formerTemperature_13'];
                  //  echo "</br>".$formerTemperature_13;

                   $waterTempAfter_1 = $_POST['waterTempAfter_1'];
                  //  echo "</br>".$waterTempAfter_1;
                   $waterTempAfter_2 = $_POST['waterTempAfter_2'];
                  //  echo "</br>".$waterTempAfter_2;
                   $waterTempAfter_3 = $_POST['waterTempAfter_3'];
                  //  echo "</br>".$waterTempAfter_3;
                   $waterTempAfter_4 = $_POST['waterTempAfter_4'];
                  //  echo "</br>".$waterTempAfter_4;
                   $waterTempAfter_5 = $_POST['waterTempAfter_5'];
                  //  echo "</br>".$waterTempAfter_5;
                   $waterTempAfter_6 = $_POST['waterTempAfter_6'];
                  //  echo "</br>".$waterTempAfter_6;
                   $waterTempAfter_7 = $_POST['waterTempAfter_7'];
                  //  echo "</br>".$waterTempAfter_7;
                   $waterTempAfter_8 = $_POST['waterTempAfter_8'];
                  //  echo "</br>".$waterTempAfter_8;
                   $waterTempAfter_9 = $_POST['waterTempAfter_9'];
                  //  echo "</br>".$waterTempAfter_9;
                   $waterTempAfter_10 = $_POST['waterTempAfter_10'];
                  //  echo "</br>".$waterTempAfter_10;
                   $waterTempAfter_11 = $_POST['waterTempAfter_11'];
                  //  echo "</br>".$waterTempAfter_11;
                   $waterTempAfter_12 = $_POST['waterTempAfter_12'];
                  //  echo "</br>".$waterTempAfter_12;
                   $waterTempAfter_13 = $_POST['waterTempAfter_13'];
                  //  echo "</br>".$waterTempAfter_13;

                   $disposition_1 = $_POST['disposition_1'];
                  //  echo "</br>".$disposition_1;
                   $disposition_2 = $_POST['disposition_2'];
                  //  echo "</br>".$disposition_2;
                   $disposition_3 = $_POST['disposition_3'];
                  //  echo "</br>".$disposition_3;
                   $disposition_4 = $_POST['disposition_4'];
                  //  echo "</br>".$disposition_4;
                   $disposition_5 = $_POST['disposition_5'];
                  //  echo "</br>".$disposition_5;
                   $disposition_6 = $_POST['disposition_6'];
                  //  echo "</br>".$disposition_6;
                   $disposition_7 = $_POST['disposition_7'];
                  //  echo "</br>".$disposition_7;
                   $disposition_8 = $_POST['disposition_8'];
                  //  echo "</br>".$disposition_8;
                   $disposition_9 = $_POST['disposition_9'];
                  //  echo "</br>".$disposition_9;
                   $disposition_10 = $_POST['disposition_10'];
                  //  echo "</br>".$disposition_10;
                   $disposition_11 = $_POST['disposition_11'];
                  //  echo "</br>".$disposition_11;
                   $disposition_12 = $_POST['disposition_12'];
                  //  echo "</br>".$disposition_12;
                   $disposition_13 = $_POST['disposition_13'];
                  //  echo "</br>".$disposition_13;

                   $typeCrack1 = $_POST['typeCrack1'];
                  //  echo "</br>".$typeCrack1;
                   $typeCrack2 = $_POST['typeCrack2'];
                  //  echo "</br>".$typeCrack2;
                   $typeCrack3 = $_POST['typeCrack3'];
                  //  echo "</br>".$typeCrack3;
                   $typeCrack4 = $_POST['typeCrack4'];
                  //  echo "</br>".$typeCrack4;
                   $typeCrack5 = $_POST['typeCrack5'];
                  //  echo "</br>".$typeCrack5;
                   $typeCrack6 = $_POST['typeCrack6'];
                  //  echo "</br>".$typeCrack6;
                   $typeCrack7 = $_POST['typeCrack7'];
                  //  echo "</br>".$typeCrack7;
                   $typeCrack8 = $_POST['typeCrack8'];
                  //  echo "</br>".$typeCrack8;
                   $typeCrack9 = $_POST['typeCrack9'];
                  //  echo "</br>".$typeCrack9;
                   $typeCrack10 = $_POST['typeCrack10'];
                  //  echo "</br>".$typeCrack10;
                   $typeCrack11 = $_POST['typeCrack11'];
                  //  echo "</br>".$typeCrack11;
                   $typeCrack12 = $_POST['typeCrack12'];
                  //  echo "</br>".$typeCrack12;
                   $typeCrack13 = $_POST['typeCrack13'];
                  //  echo "</br>".$typeCrack13;

                   $HandPart1 = $_POST['HandPart1'];
                  //  echo "</br>".$HandPart1;
                   $HandPart2 = $_POST['HandPart2'];
                  //  echo "</br>".$HandPart2;
                   $HandPart3 = $_POST['HandPart3'];
                  //  echo "</br>".$HandPart3;
                   $HandPart4 = $_POST['HandPart4'];
                  //  echo "</br>".$HandPart4;
                   $HandPart5 = $_POST['HandPart5'];
                  //  echo "</br>".$HandPart5;
                   $HandPart6 = $_POST['HandPart6'];
                  //  echo "</br>".$HandPart6;
                   $HandPart7 = $_POST['HandPart7'];
                  //  echo "</br>".$HandPart7;
                   $HandPart8 = $_POST['HandPart8'];
                  //  echo "</br>".$HandPart8;
                   $HandPart9 = $_POST['HandPart9'];
                  //  echo "</br>".$HandPart9;
                   $HandPart10 = $_POST['HandPart10'];
                  //  echo "</br>".$HandPart10;
                   $HandPart11 = $_POST['HandPart11'];
                  // echo "</br>".$HandPart11;
                   $HandPart12 = $_POST['HandPart12'];
                  //  echo "</br>".$HandPart12;
                   $HandPart13 = $_POST['HandPart13'];
                  //  echo "</br>".$HandPart13;

                   $overall_disposition = $_POST['overall_disposition'];
                  //  echo "</br>".$overall_disposition;
                   $inspectedBY = $_POST['inspectedBY'];
                  //  echo "</br>".$inspectedBY;
                   $verifiedBY = $_POST['verifiedBY'];
                  //  echo "</br>".$verifiedBY;
                   $verified_date = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$_POST['verifiedDate'])));
                  // echo "</br>".$verified_date;
                  
                   $query = "{CALL SP_Register_ThermalShock(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
                   $stmt = $connect->prepare($query);
                  
                   $stmt->bindParam(1, $factoryCustomer, PDO::PARAM_INT);
                  //  echo "</br>".$factoryCustomer;
                   $stmt->bindParam(2, $batchnumber);
                  //  echo "</br>".$batchnumber;
                   $stmt->bindParam(3, $inspectionstage, PDO::PARAM_INT);
                  //  echo "</br>".$inspectionstage;
                   $stmt->bindParam(4, $formerheight);
                  //  echo "</br>".$formerheight;
                   $stmt->bindParam(5, $size, PDO::PARAM_INT);
                  //  echo "</br>".$size;
                   $stmt->bindParam(6, $OvenTempSet, PDO::PARAM_INT);
                  //  echo "</br>".$OvenTempSet;
                   $stmt->bindParam(7, $kiln_No);
                  //  echo "</br>".$kiln_No;
                   $stmt->bindParam(8, $ems, PDO::PARAM_INT);
                  //  echo "</br>".$ems;
                   $stmt->bindParam(9, $inspectiondate);
                  //  echo "</br>".$inspectiondate;
                   $stmt->bindParam(10, $rework);
                  //  echo "</br>".$rework;
                   $stmt->bindParam(11, $formertype, PDO::PARAM_INT);
                  //  echo "</br>".$formertype;
                   $stmt->bindParam(12, $productcode, PDO::PARAM_INT);
                  //  echo "</br>".$productcode;
                   $stmt->bindParam(13, $firing_no);
                  //  echo "</br>".$firing_no;
                   $stmt->bindParam(14, $mouldCycle);
                  //  echo "</br>".$mouldCycle;
                   $stmt->bindParam(15, $type_material, PDO::PARAM_INT); 
                  //  echo "</br>".$type_material;
                   $stmt->bindParam(16, $sampleSize);
                  //  echo "</br>".$sampleSize;
                   $stmt->bindParam(17, $AQL, PDO::PARAM_INT);
                  //  echo "</br>".$AQL;
                   $stmt->bindParam(18, $acceptance);
                  //  echo "</br>".$acceptance;

                   $stmt->bindParam(19, $KilnZone1);
                  //  echo "</br>".$KilnZone1;
                   $stmt->bindParam(20, $KilnZone2);
                  //  echo "</br>".$KilnZone2;
                   $stmt->bindParam(21, $KilnZone3); 
                  //  echo "</br>".$KilnZone3;            
                   $stmt->bindParam(22, $KilnZone4);
                  //  echo "</br>".$KilnZone4;
                   $stmt->bindParam(23, $KilnZone5);
                  //  echo "</br>".$KilnZone5;
                   $stmt->bindParam(24, $KilnZone6);
                  //  echo "</br>".$KilnZone6;
                   $stmt->bindParam(25, $KilnZone7);
                  //  echo "</br>".$KilnZone7;
                   $stmt->bindParam(26, $KilnZone8);
                  //  echo "</br>".$KilnZone8;
                   $stmt->bindParam(27, $KilnZone9);
                  //  echo "</br>".$KilnZone9;
                   $stmt->bindParam(28, $KilnZone10); 
                  //  echo "</br>".$KilnZone10;
                   $stmt->bindParam(29, $KilnZone11);
                  //  echo "</br>".$KilnZone11;
                   $stmt->bindParam(30, $KilnZone12);
                  //  echo "</br>".$KilnZone12;
                   $stmt->bindParam(31, $KilnZone13);
                  //  echo "</br>".$KilnZone13;
                  
                   $stmt->bindParam(32, $prodDate1);
                  //  echo "</br>".$prodDate1;
                   $stmt->bindParam(33, $prodDate2);
                  //  echo "</br>".$prodDate2;
                   $stmt->bindParam(34, $prodDate3);
                  //  echo "</br>".$prodDate3;
                   $stmt->bindParam(35, $prodDate4);
                  //  echo "</br>".$prodDate4;
                   $stmt->bindParam(36, $prodDate5);
                  //  echo "</br>".$prodDate5;
                   $stmt->bindParam(37, $prodDate6);
                  //  echo "</br>".$prodDate6;
                   $stmt->bindParam(38, $prodDate7);
                  //  echo "</br>".$prodDate7;
                   $stmt->bindParam(39, $prodDate8);
                  //  echo "</br>".$prodDate8;
                   $stmt->bindParam(40, $prodDate9);
                  //  echo "</br>".$prodDate9;
                   $stmt->bindParam(41, $prodDate10);
                  //  echo "</br>".$prodDate10;
                   $stmt->bindParam(42, $prodDate11);
                  //  echo "</br>".$prodDate11;
                   $stmt->bindParam(43, $prodDate12);
                  //  echo "</br>".$prodDate12;
                   $stmt->bindParam(44, $prodDate13);
                  //  echo "</br>".$prodDate13;

                   $stmt->bindParam(45, $formerWeight1);
                  //  echo "</br>".$formerWeight1;
                   $stmt->bindParam(46, $formerWeight2);
                  //  echo "</br>".$formerWeight2;
                   $stmt->bindParam(47, $formerWeight3);
                  //  echo "</br>".$formerWeight3;
                   $stmt->bindParam(48, $formerWeight4);
                  //  echo "</br>".$formerWeight4;
                   $stmt->bindParam(49, $formerWeight5);
                  //  echo "</br>".$formerWeight5;
                   $stmt->bindParam(50, $formerWeight6);
                  //  echo "</br>".$formerWeight6;
                   $stmt->bindParam(51, $formerWeight7);
                  //  echo "</br>".$formerWeight7;
                   $stmt->bindParam(52, $formerWeight8);
                  //  echo "</br>".$formerWeight8;
                   $stmt->bindParam(53, $formerWeight9);
                  //  echo "</br>".$formerWeight9;
                   $stmt->bindParam(54, $formerWeight10);
                  //  echo "</br>".$formerWeight10;
                   $stmt->bindParam(55, $formerWeight11);
                  //  echo "</br>".$formerWeight11;
                   $stmt->bindParam(56, $formerWeight12);
                  //  echo "</br>".$formerWeight12;
                   $stmt->bindParam(57, $formerWeight13);
                  //  echo "</br>".$formerWeight13;

                   $stmt->bindParam(58, $waterTempBefore_1);
                  //  echo "</br>".$waterTempBefore_1;
                   $stmt->bindParam(59, $waterTempBefore_2);
                  //  echo "</br>".$waterTempBefore_2;
                   $stmt->bindParam(60, $waterTempBefore_3);
                  //  echo "</br>".$waterTempBefore_3;
                   $stmt->bindParam(61, $waterTempBefore_4);
                  //  echo "</br>".$waterTempBefore_4;
                   $stmt->bindParam(62, $waterTempBefore_5);
                  //  echo "</br>".$waterTempBefore_5;
                   $stmt->bindParam(63, $waterTempBefore_6);
                  //  echo "</br>".$waterTempBefore_6;
                   $stmt->bindParam(64, $waterTempBefore_7);
                  //  echo "</br>".$waterTempBefore_7;
                   $stmt->bindParam(65, $waterTempBefore_8);
                  //  echo "</br>".$waterTempBefore_8;
                   $stmt->bindParam(66, $waterTempBefore_9);
                  //  echo "</br>".$waterTempBefore_9;
                   $stmt->bindParam(67, $waterTempBefore_10);
                  //  echo "</br>".$waterTempBefore_10;
                   $stmt->bindParam(68, $waterTempBefore_11);
                  //  echo "</br>".$waterTempBefore_11;
                   $stmt->bindParam(69, $waterTempBefore_12);
                  //  echo "</br>".$waterTempBefore_12;
                   $stmt->bindParam(70, $waterTempBefore_13);
                  //  echo "</br>".$waterTempBefore_13;

                   $stmt->bindParam(71, $formerTemperature_1);
                  //  echo "</br>".$formerTemperature_1;
                   $stmt->bindParam(72, $formerTemperature_2);
                  //  echo "</br>".$formerTemperature_2;
                   $stmt->bindParam(73, $formerTemperature_3);
                  //  echo "</br>".$formerTemperature_3;
                   $stmt->bindParam(74, $formerTemperature_4);
                  //  echo "</br>".$formerTemperature_4;
                   $stmt->bindParam(75, $formerTemperature_5);
                  //  echo "</br>".$formerTemperature_5;
                   $stmt->bindParam(76, $formerTemperature_6);
                  //  echo "</br>".$formerTemperature_6;
                   $stmt->bindParam(77, $formerTemperature_7);
                  //  echo "</br>".$formerTemperature_7;
                   $stmt->bindParam(78, $formerTemperature_8);
                  //  echo "</br>".$formerTemperature_8;
                   $stmt->bindParam(79, $formerTemperature_9);
                  //  echo "</br>".$formerTemperature_9;
                   $stmt->bindParam(80, $formerTemperature_10);
                  //  echo "</br>".$formerTemperature_10;
                   $stmt->bindParam(81, $formerTemperature_11);
                  //  echo "</br>".$formerTemperature_11;
                   $stmt->bindParam(82, $formerTemperature_12);
                  //  echo "</br>".$formerTemperature_12;
                   $stmt->bindParam(83, $formerTemperature_13);
                  //  echo "</br>".$formerTemperature_13;

                   $stmt->bindParam(84, $waterTempAfter_1);
                  //  echo "</br>".$waterTempAfter_1;
                   $stmt->bindParam(85, $waterTempAfter_2);
                  //  echo "</br>".$waterTempAfter_2;
                   $stmt->bindParam(86, $waterTempAfter_3);
                  //  echo "</br>".$waterTempAfter_3;
                   $stmt->bindParam(87, $waterTempAfter_4);
                  //  echo "</br>".$waterTempAfter_4;
                   $stmt->bindParam(88, $waterTempAfter_5);
                  //  echo "</br>".$waterTempAfter_5;
                   $stmt->bindParam(89, $waterTempAfter_6);
                  //  echo "</br>".$waterTempAfter_6;
                   $stmt->bindParam(90, $waterTempAfter_7);
                  //  echo "</br>".$waterTempAfter_7;
                   $stmt->bindParam(91, $waterTempAfter_8);
                  //  echo "</br>".$waterTempAfter_8;
                   $stmt->bindParam(92, $waterTempAfter_9);
                  //  echo "</br>".$waterTempAfter_9;
                   $stmt->bindParam(93, $waterTempAfter_10);
                  //  echo "</br>".$waterTempAfter_10;
                   $stmt->bindParam(94, $waterTempAfter_11);
                  //  echo "</br>".$waterTempAfter_11;
                   $stmt->bindParam(95, $waterTempAfter_12);
                  //  echo "</br>".$waterTempAfter_12;
                   $stmt->bindParam(96, $waterTempAfter_13);
                  //  echo "</br>".$waterTempAfter_13;
                   
                   $stmt->bindParam(97, $disposition_1);
                  //  echo "</br>".$disposition_1;
                   $stmt->bindParam(98, $disposition_2);
                  //  echo "</br>".$disposition_2;
                   $stmt->bindParam(99, $disposition_3);
                  //  echo "</br>".$disposition_3;
                   $stmt->bindParam(100, $disposition_4);
                  //  echo "</br>".$disposition_4;
                   $stmt->bindParam(101, $disposition_5);
                  //  echo "</br>".$disposition_5;
                   $stmt->bindParam(102, $disposition_6);
                  //  echo "</br>".$disposition_6;
                   $stmt->bindParam(103, $disposition_7);
                  //  echo "</br>".$disposition_7;
                   $stmt->bindParam(104, $disposition_8);
                  //  echo "</br>".$disposition_8;
                   $stmt->bindParam(105, $disposition_9);
                  //  echo "</br>".$disposition_9;
                   $stmt->bindParam(106, $disposition_10);
                  //  echo "</br>".$disposition_10;
                   $stmt->bindParam(107, $disposition_11);
                  //  echo "</br>".$disposition_11;
                   $stmt->bindParam(108, $disposition_12);
                  //  echo "</br>".$disposition_12;
                   $stmt->bindParam(109, $disposition_13);
                  //  echo "</br>".$disposition_13;
                   
                   $stmt->bindParam(110, $typeCrack1);
                  //  echo "</br>".$typeCrack1;
                   $stmt->bindParam(111, $typeCrack2);
                  //  echo "</br>".$typeCrack2;
                   $stmt->bindParam(112, $typeCrack3);
                  //  echo "</br>".$typeCrack3;
                   $stmt->bindParam(113, $typeCrack4);
                  //  echo "</br>".$typeCrack4;
                   $stmt->bindParam(114, $typeCrack5);
                  //  echo "</br>".$typeCrack5;
                   $stmt->bindParam(115, $typeCrack6);
                  //  echo "</br>".$typeCrack6;
                   $stmt->bindParam(116, $typeCrack7);
                  //  echo "</br>".$typeCrack7;
                   $stmt->bindParam(117, $typeCrack8);
                  //  echo "</br>".$typeCrack8;
                   $stmt->bindParam(118, $typeCrack9);
                  //  echo "</br>".$typeCrack9;
                   $stmt->bindParam(119, $typeCrack10);
                  //  echo "</br>".$typeCrack10;
                   $stmt->bindParam(120, $typeCrack11);
                  //  echo "</br>".$typeCrack11;
                   $stmt->bindParam(121, $typeCrack12);
                  //  echo "</br>".$typeCrack12;
                   $stmt->bindParam(122, $typeCrack13);
                  //  echo "</br>".$typeCrack13;

                   $stmt->bindParam(123, $HandPart1);
                  //  echo "</br>".$HandPart1;
                   $stmt->bindParam(124, $HandPart2);
                  //  echo "</br>".$HandPart2;
                   $stmt->bindParam(125, $HandPart3);
                  //  echo "</br>".$HandPart3;
                   $stmt->bindParam(126, $HandPart4);
                  //  echo "</br>".$HandPart4;
                   $stmt->bindParam(127, $HandPart5);
                  //  echo "</br>".$HandPart5;
                   $stmt->bindParam(128, $HandPart6);
                  //  echo "</br>".$HandPart6;
                   $stmt->bindParam(129, $HandPart7);
                  //  echo "</br>".$HandPart7;
                   $stmt->bindParam(130, $HandPart8);
                  //  echo "</br>".$HandPart8;
                   $stmt->bindParam(131, $HandPart9);
                  //  echo "</br>".$HandPart9;
                   $stmt->bindParam(132, $HandPart10);
                  //  echo "</br>".$HandPart10;
                   $stmt->bindParam(133, $HandPart11);
                  //  echo "</br>".$HandPart11;
                   $stmt->bindParam(134, $HandPart12);
                  //  echo "</br>".$HandPart12;
                   $stmt->bindParam(135, $HandPart13); 
                  //  echo "</br>".$HandPart13;                 

                   $stmt->bindParam(136, $overall_disposition);
                  //  echo "</br>".$overall_disposition;
                   $stmt->bindParam(137, $inspectedBY);
                  //  echo "</br>".$inspectedBY;
                   $stmt->bindParam(138, $verifiedBY);
                  //  echo "</br>".$verifiedBY;
                   $stmt->bindParam(139, $verified_date);
                  //  echo "</br>".$verified_date;
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
                   toastr["error"]("Please insert true data.", "Kindly recheck!");
                   </script>';
                   }
                  
                 } else {}
                ?>
                <script>
                  function checkresult() {
                  
                      jQuery.ajax({
                          url: "../filterBatchNo.php",
                          data: 'batchnumberTS=' + $("#batchnumberTS").val(),
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

<!-- REQUIRED SCRIPTS -->
</body>


</html>


