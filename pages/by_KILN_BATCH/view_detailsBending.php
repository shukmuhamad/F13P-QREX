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
            <h1 class="m-0 text-dark">DETAILS RECORD FOR BENDING</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">BY_KILN_BATCH</a></li>
              <li class="breadcrumb-item active">Detail Bending</li>
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
                $Bending_ID= $_GET['Bending_ID'];
                
							  //Query statements to select from view
							  $query = "{CALL SP_ViewDetailBending(?)}";
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
                      <label class="col-sm-2 col-form-label">Batch Number</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Batch_Number'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Factory Customer</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['FactoryCustomer'];?>" disabled>
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
                      <label class="col-sm-2 col-form-label">Former Type</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['FormerTypeCode'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">AQL</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['AQL_Name'];?>" disabled>
                      </div>
                      <label class="col-sm-2 col-form-label">Acceptance</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Acceptance'];?>" disabled>
                      </div>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Trolley Number</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Trolley_Number'];?>" disabled>
                      </div>
                    </div>
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
                      <label class="col-sm-2 col-form-label">Size</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['FormerSize'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Product Code</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['FormerProductCode'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Sample Size</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Sample_Size'];?>" disabled>
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
                        <th class="text-center">Mould ID</th>
                        <th class="text-center">Production Date</th>
                        <th class="text-center">Disposition</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php    
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
                        <td class="text-center">1</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleMould_pivot['Bending Mould1'];?>" disabled></td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould1'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleDisposition_pivot['Bending Mould1'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center">2</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleMould_pivot['Bending Mould2'];?>" disabled></td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould2'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleDisposition_pivot['Bending Mould2'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center">3</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleMould_pivot['Bending Mould3'];?>" disabled></td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould3'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleDisposition_pivot['Bending Mould3'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center">4</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleMould_pivot['Bending Mould4'];?>" disabled></td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould4'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleDisposition_pivot['Bending Mould4'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center">5</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleMould_pivot['Bending Mould5'];?>" disabled></td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould5'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleDisposition_pivot['Bending Mould5'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center">6</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleMould_pivot['Bending Mould6'];?>" disabled></td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould6'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleDisposition_pivot['Bending Mould6'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center">7</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleMould_pivot['Bending Mould7'];?>" disabled></td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould7'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleDisposition_pivot['Bending Mould7'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center">8</td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleMould_pivot['Bending Mould8'];?>" disabled></td>
                        <td><input type="date" class="form-control" value="<?php echo $sampleDate_pivot['Bending Mould8'];?>" disabled></td>
                        <td><input type="text" class="form-control" placeholder="<?php echo $sampleDisposition_pivot['Bending Mould8'];?>" disabled></td>
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
                  </br></br></br>
                  </br></br></br>
                  
                  <div class="col-md-12">
                    <center>
                      <a class = "btn btn-primary" href = "summary_bending.php" > Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a class = "btn btn-success" target="_blank" href = "formEdit_bending.php?RecordID=<?php echo $row['RecordID']?>&Bending_ID=<?php echo $row['Bending_ID']?>" > Update/Verify</a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- <a class = "btn btn-warning" target="_blank" href = "reinspection_glossiness.php?RecordID=<?php echo $RecordID;?>&Glossiness_ID=<?php echo $Glossiness_ID;?>" > Reinspec</a>&nbsp;&nbsp; -->
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

<!-- disabled SCRIPTS -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>

</body>
</html>
