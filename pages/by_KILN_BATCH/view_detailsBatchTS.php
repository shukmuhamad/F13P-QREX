<!DOCTYPE html>
<?php
   include('../../includes/header.php');
   include('../session/session.php');
   include('../../database_connection.php');
?>

<html lang="en">

<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DETAILS RECORD FOR THERMAL SHOCK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">BY_KILN_BATCH</a></li>
              <li class="breadcrumb-item active">Detail Thermal Shock</li>
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
              <div class="card-body"> 
               <?php 
							  if(isset($_GET['RecordID'])){
                
                $RecordID= $_GET['RecordID'];
                $BatchTS_ID= $_GET['BatchTS_ID'];
                
							  //Query statements to select from view
							  $query = "{CALL SP_ViewDetailThermalShock(?)}";
							  $stmt = $conn->prepare($query);
							  $stmt->bindParam(1, $RecordID, PDO::PARAM_INT);
							  $stmt->execute();
                $result = $stmt->fetchAll();
							  foreach ($result as $row ) {
						   ?>
                <!-- /.form 1 -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Factory Customer</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['FactoryCustomer'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Batch Number</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Batch_Number'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Inspection Stage</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['InspectionStage_Name'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Former Height</label>
                      <div class="col-sm-6">
                        <input type="datetime" class="form-control" id="" placeholder="<?php echo $row['Former_Height'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Size</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['FormerSize'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Oven Temperature Setting</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['OvenTemperatureSetting'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Kiln No</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['KilnNo'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">EMS</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['EMS_Setting'];?>" disabled>
                      </div>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Inspection Date/Time</label>
                      <div class="col-sm-6">
                        <input type="datetime" class="form-control" id="" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($row['Inspection_Date']));?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Rework Remark</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Rework'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Former Type</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['FormerTypeCode'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Product Code</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['FormerProductCode'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Firing No</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['FiringNo'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Mould Cycle</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['MouldCycle'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Type Material</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['MaterialTypeName'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Sample Size</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="sampleSize" placeholder="<?php echo $row['Sample_Size'];?>" disabled>
                      </div>
                      <label class="col-sm-1 col-form-label">AQL</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="sampleSize" placeholder="<?php echo $row['AQL_Name'];?>" disabled>
                      </div>
                      <label class="col-sm-2 col-form-label">Acceptance</label>
                      <div class="col-sm-1">
                        <input type="text" class="form-control" placeholder="<?php echo $row['Acceptance'];?>"  disabled>
                      </div>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div></br>

                <!-- /.tab-pane -->
                <div>
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
                      <?php    
                        $BatchTS_ID= $_GET['BatchTS_ID'];
                        $query1 = "SELECT * FROM View_SampleThermalShock WHERE BatchTS_ID = ?";
                        $stmt1 = $conn->prepare($query1);
                        $stmt1->bindParam(1, $BatchTS_ID, PDO::PARAM_INT);
                        $stmt1->execute();
                        $sample = $stmt1->fetchAll();
							          
                        $sample1_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample1_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_1']
                          );
                          $sample1_pivot = array_merge($sample1_pivot, $sample1_pivot_temp);
                        }      
                        $sample2_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample2_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_2']
                          );
                          $sample2_pivot = array_merge($sample2_pivot, $sample2_pivot_temp);
                        }      
                        $sample3_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample3_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_3']
                          );
                          $sample3_pivot = array_merge($sample3_pivot, $sample3_pivot_temp);
                        }      
                        $sample4_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample4_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_4']
                          );
                          $sample4_pivot = array_merge($sample4_pivot, $sample4_pivot_temp);
                        }      
                        $sample5_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample5_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_5']
                          );
                          $sample5_pivot = array_merge($sample5_pivot, $sample5_pivot_temp);
                        }      
                        $sample6_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample6_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_6']
                          );
                          $sample6_pivot = array_merge($sample6_pivot, $sample6_pivot_temp);
                        }      
                        $sample7_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample7_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_7']
                          );
                          $sample7_pivot = array_merge($sample7_pivot, $sample7_pivot_temp);
                        }      
                        $sample8_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample8_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_8']
                          );
                          $sample8_pivot = array_merge($sample8_pivot, $sample8_pivot_temp);
                        }      
                        $sample9_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample9_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_9']
                          );
                          $sample9_pivot = array_merge($sample9_pivot, $sample9_pivot_temp);
                        }      
                        $sample10_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample10_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_10']
                          );
                          $sample10_pivot = array_merge($sample10_pivot, $sample10_pivot_temp);
                        }      
                        $sample11_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample11_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_11']
                          );
                          $sample11_pivot = array_merge($sample11_pivot, $sample11_pivot_temp);
                        }      
                        $sample12_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample12_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_12']
                          );
                          $sample12_pivot = array_merge($sample12_pivot, $sample12_pivot_temp);
                        }      
                        $sample13_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sample13_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Sample_13']
                          );
                          $sample13_pivot = array_merge($sample13_pivot, $sample13_pivot_temp);
                        }
                      ?>
                      <tr>
                        <td>Kiln Zone</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample1_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample2_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample3_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample4_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample5_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample6_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample7_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample8_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample9_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample10_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample11_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample12_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample13_pivot['Kiln Zone Thermal Shock'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td>Production Date</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample1_pivot['Production Date Thermal Shock']));?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample2_pivot['Production Date Thermal Shock']));?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample3_pivot['Production Date Thermal Shock']));?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample4_pivot['Production Date Thermal Shock']));?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample5_pivot['Production Date Thermal Shock']));?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample6_pivot['Production Date Thermal Shock']));?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample7_pivot['Production Date Thermal Shock']));?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample8_pivot['Production Date Thermal Shock']));?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample9_pivot['Production Date Thermal Shock']));?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample10_pivot['Production Date Thermal Shock']));?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample11_pivot['Production Date Thermal Shock']));?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample12_pivot['Production Date Thermal Shock']));?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($sample13_pivot['Production Date Thermal Shock']));?>" disabled></td>
                      </tr>
                      <tr>
                        <td>Former weight (g)</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample1_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample2_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample3_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample4_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample5_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample6_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample7_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample8_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample9_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample10_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample11_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample12_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample13_pivot['Former weight (g) Thermal Shock'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td>Water Temperature before Dipping Standard: 30 ± 3°C</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample1_pivot['Water Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample2_pivot['Water Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample3_pivot['Water Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample4_pivot['Water Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample5_pivot['Water Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample6_pivot['Water Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample7_pivot['Water Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample8_pivot['Water Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample9_pivot['Water Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample10_pivot['Water Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample11_pivot['Water Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample12_pivot['Water Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample13_pivot['Water Temperature before Dipping'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td>Former Temperature before Dipping</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample1_pivot['Former Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample2_pivot['Former Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample3_pivot['Former Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample4_pivot['Former Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample5_pivot['Former Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample6_pivot['Former Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample7_pivot['Former Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample8_pivot['Former Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample9_pivot['Former Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample10_pivot['Former Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample11_pivot['Former Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample12_pivot['Former Temperature before Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample13_pivot['Former Temperature before Dipping'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td>Water Temperature after Dipping (°C)</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample1_pivot['Water Temperature after Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample2_pivot['Water Temperature after Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample3_pivot['Water Temperature after Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample4_pivot['Water Temperature after Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample5_pivot['Water Temperature after Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample6_pivot['Water Temperature after Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample7_pivot['Water Temperature after Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample8_pivot['Water Temperature after Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample9_pivot['Water Temperature after Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample10_pivot['Water Temperature after Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample11_pivot['Water Temperature after Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample12_pivot['Water Temperature after Dipping'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample13_pivot['Water Temperature after Dipping'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td>Disposition</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample1_pivot['Disposition Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample2_pivot['Disposition Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample3_pivot['Disposition Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample4_pivot['Disposition Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample5_pivot['Disposition Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample6_pivot['Disposition Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample7_pivot['Disposition Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample8_pivot['Disposition Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample9_pivot['Disposition Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample10_pivot['Disposition Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample11_pivot['Disposition Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample12_pivot['Disposition Thermal Shock'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample13_pivot['Disposition Thermal Shock'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td>Type of Crack</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample1_pivot['Type of Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample2_pivot['Type of Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample3_pivot['Type of Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample4_pivot['Type of Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample5_pivot['Type of Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample6_pivot['Type of Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample7_pivot['Type of Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample8_pivot['Type of Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample9_pivot['Type of Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample10_pivot['Type of Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample11_pivot['Type of Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample12_pivot['Type of Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample13_pivot['Type of Crack'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td>Area Start to Crack</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample1_pivot['Area Start to Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample2_pivot['Area Start to Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample3_pivot['Area Start to Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample4_pivot['Area Start to Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample5_pivot['Area Start to Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample6_pivot['Area Start to Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample7_pivot['Area Start to Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample8_pivot['Area Start to Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample9_pivot['Area Start to Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample10_pivot['Area Start to Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample11_pivot['Area Start to Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample12_pivot['Area Start to Crack'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sample13_pivot['Area Start to Crack'];?>" disabled></td>
                      </tr>
                    </tbody>
                  </table></br>
                </div>

                <!-- /.tab-pane -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Overall Disposition Status</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Disposition'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Inspected By</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['InspectedBy'];?>" disabled>
                      </div>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Verified By</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['VerifiedBy'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Verified Date</label>
                      <div class="col-sm-6">
                        <input type="datetime" class="form-control" id="" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($row['VerifiedDate']));?>" disabled>
                      </div>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  
                  <div class="col-md-12">
                    <center>
                      <a class = "btn btn-primary" href = "summary_batch.php" > Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a class = "btn btn-success" target="_blank" href = "formEdit_batch.php?RecordID=<?php echo $row['RecordID']?>&BatchTS_ID=<?php echo $row['BatchTS_ID']?>" > Update/Verify</a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- <a class = "btn btn-warning" target="_blank" href = "reinspection_batch.php?RecordID=<?php echo $RecordID;?>&BatchTS_ID=<?php echo $BatchTS_ID;?>" > Reinspec</a>&nbsp;&nbsp; -->
                      <a target="" href="#" role="button" class="btn btn-primary" title="Print" onClick="window.print()"><i class = "glyphicon glyphicon-print"></i>&nbsp;Print</a>
                    </center>
                  </div>
                </div>  
                
                
                <!-- /.tab-content -->
               <?php
                   }//While loop
                 }else{
                 //Close tab if user load page without RecordID parameter
                 echo "<script>window.close();</script>";
                 }
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

  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php
   include('../../includes/footer.php');
  ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>

</body>
</html>
