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
            <h1 class="m-0 text-dark">DETAILS RECORD FOR INSPECTION BY PALLET: ROUGHNESS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">BY_PALLET</a></li>
              <li class="breadcrumb-item active">Roughness</li>
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
                $Roughness_ID= $_GET['Roughness_ID'];
                
							  //Query statements to select from view
							  $query = "{CALL SP_ViewDetailRoughness(?)}";
							  $stmt = $conn->prepare($query);
							  $stmt->bindParam(1, $RecordID, PDO::PARAM_INT);
							  $stmt->bindParam(2, $Roughness_ID);
							  $stmt->execute();
                $result = $stmt->fetchAll();
							  foreach ($result as $row ) {
						   ?> 
                <!-- /.form 1 -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Batch Number</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['Batch_Number'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Inspection Date</label>
                      <div class="col-sm-6">
                        <input type="datetime" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($row['Inspection_Date']));?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Size</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['FormerSize'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Product Code</label>
                      <div class="col-sm-6">
                        <input type="datetime" class="form-control" placeholder="<?php echo $row['FormerProductCode'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Inspection Stage</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['InspectionStage_Name'];?>" disabled>
                      </div>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pallet Number</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['Pallet_Number'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Former Height</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['Former_Height'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">former Type</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['FormerTypeCode'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Coating</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['Coating'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Rework Remark</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['Rework'];?>" disabled>
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
                      <?php     
                        $query1 = "SELECT * FROM View_SampleRoughness WHERE Roughness_ID = ?";
                        $stmt1 = $conn->prepare($query1);
                        $stmt1->bindParam(1, $Roughness_ID, PDO::PARAM_INT);
                        $stmt1->execute();
                        $sample = $stmt1->fetchAll();
							          
                        $sampleDate_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sampleDate_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Roughness_ProductionDate']
                          );
                          $sampleDate_pivot = array_merge($sampleDate_pivot, $sampleDate_pivot_temp);
                        }
                        $sampleValue1_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sampleValue1_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Roughness_reading1']
                          );
                          $sampleValue1_pivot = array_merge($sampleValue1_pivot, $sampleValue1_pivot_temp);
                        }
                        $sampleValue2_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sampleValue2_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Roughness_reading2']
                          );
                          $sampleValue2_pivot = array_merge($sampleValue2_pivot, $sampleValue2_pivot_temp);
                        }
                        $sampleAverage_pivot = array();
                        for ($i = 0; $i < count($sample); $i++) {
                          $sampleAverage_pivot_temp = array(
                          $sample[$i]['TestName'] => $sample[$i]['Average']
                          );
                          $sampleAverage_pivot = array_merge($sampleAverage_pivot, $sampleAverage_pivot_temp);
                        }
                      ?>
                      <tr>
                        <td class="text-center">1.</td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Roughness Reading1']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue1_pivot['Roughness Reading1']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue2_pivot['Roughness Reading1']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleAverage_pivot['Roughness Reading1']?>" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center">2.</td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Roughness Reading2']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue1_pivot['Roughness Reading2']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue2_pivot['Roughness Reading2']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleAverage_pivot['Roughness Reading2']?>" disabled></td>
                      <tr>
                        <td class="text-center">3.</td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Roughness Reading3']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue1_pivot['Roughness Reading3']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue2_pivot['Roughness Reading3']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleAverage_pivot['Roughness Reading3']?>" disabled></td>
                      <tr>
                        <td class="text-center">4.</td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Roughness Reading4']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue1_pivot['Roughness Reading4']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue2_pivot['Roughness Reading4']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleAverage_pivot['Roughness Reading4']?>" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center">5.</td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Roughness Reading5']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue1_pivot['Roughness Reading5']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue2_pivot['Roughness Reading5']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleAverage_pivot['Roughness Reading5']?>" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center">6.</td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Roughness Reading6']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue1_pivot['Roughness Reading6']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue2_pivot['Roughness Reading6']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleAverage_pivot['Roughness Reading6']?>" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center">7.</td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Roughness Reading7']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue1_pivot['Roughness Reading7']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue2_pivot['Roughness Reading7']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleAverage_pivot['Roughness Reading7']?>" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center">8.</td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Roughness Reading8']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue1_pivot['Roughness Reading8']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleValue2_pivot['Roughness Reading8']?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleAverage_pivot['Roughness Reading8']?>" disabled></td>
                      </tr>
                    </tbody>
                  </table></br>
                </div>

                <!-- /.tab-pane -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">AQL</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['AQL_Name'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Acceptance</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['Acceptance'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Inspected By</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['InspectedBy'];?>" disabled>
                      </div>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Disposition Status</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['Disposition'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Verified By</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="<?php echo $row['VerifiedBy'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Verified Date</label>
                      <div class="col-sm-6">
                        <input type="datetime" class="form-control" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($row['VerifiedDate']));?>" disabled>
                      </div>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  
                  <div class="col-md-12">
                    <center>
                      <a class = "btn btn-primary" href = "summary_roughness.php" > Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a class = "btn btn-success" target="_blank" href = "formEdit_Roughness.php?RecordID=<?php echo $row['RecordID']?>&Roughness_ID=<?php echo $row['Roughness_ID']?>" > Update/Verify</a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <a class = "btn btn-warning" target="_blank" href = "formReinspect_roughness.php?RecordID=<?php echo $row['RecordID']?>&Roughness_ID=<?php echo $row['Roughness_ID']?>" > Reinspec</a>&nbsp;&nbsp;
                      <a target="" href="#" role="button" class="btn btn-primary" title="Print" onClick="window.print()"><i class = "glyphicon glyphicon-print"></i>&nbsp;Print</a>
                    </center>
                  </div>
                </div>  
                
               <?php
                   }//While loop
                 }else{
                 //Close tab if user load page without RecordID parameter
                 echo "<script>window.close();</script>";
                 }
               ?> 
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
