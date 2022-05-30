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
            <h1 class="m-0 text-dark">DETAILS RECORD FOR DIMENSION</h1>
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
              <div class="card-body"> 
               <?php 
							  if(isset($_GET['RecordID'])){
                
                $RecordID= $_GET['RecordID'];
                $Dimension_ID= $_GET['Dimension_ID'];
                
							  //Query statements to select from view
							  $query = "{CALL SP_ViewDetailDimension(?)}";
							  $stmt = $conn->prepare($query);
							  $stmt->bindParam(1, $RecordID, PDO::PARAM_INT);
							  $stmt->bindParam(2, $Dimension_ID);
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
                      <label class="col-sm-2 col-form-label">Inspection Stage</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['InspectionStage_Name'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Former Height</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Former_Height'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Inspection date/time</label>
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
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Former Type</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['FormerTypeCode'];?>" disabled>
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
                      <label class="col-sm-2 col-form-label">Product Date</label>
                      <div class="col-sm-6">
                        <input  class="form-control" id="" placeholder="<?php echo date('d/m/Y',strtotime($row['ProductionDate']));?>" disabled>
                      </div>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>

                <!-- /.tab-pane -->
                <div>
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
                        <td><input class="form-control" placeholder="<?php echo $sampleValue['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
                      </tr>
                      <?php }?>

                      <?php    
                        //Query statements to select Job Details
                        $query2 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Former Weight (g) Dimension'";
                        $stmt2 = $conn->prepare($query2);
                        $stmt2->bindParam(1, $Dimension_ID);
                        $stmt2->execute();
                        $sample2 = $stmt2->fetchAll();
							          foreach ($sample2 as $sampleValue2 ) {
                      ?>
                      <tr>
                        <td>2.</td>
                        <td><?php echo $sampleValue2['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue2['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue2['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue2['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue2['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue2['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
                      </tr>
                      <?php }?>

                      <?php    
                        //Query statements to select Job Details
                        $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Bending R Dimension'";
                        $stmt3 = $conn->prepare($query3);
                        $stmt3->bindParam(1, $Dimension_ID);
                        $stmt3->execute();
                        $sample3 = $stmt3->fetchAll();
							          foreach ($sample3 as $sampleValue3 ) {
                      ?>
                      <tr>
                        <td>4.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>5.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>6.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>7.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>8.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>9.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>10.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>11.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>12.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>13.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>14.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>15.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>16.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>17.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>18.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>19.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
                      </tr>
                      <?php }?>

                      <?php    
                        //Query statements to select Job Details
                        $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='	Finger Circumference F4, Ring'";
                        $stmt3 = $conn->prepare($query3);
                        $stmt3->bindParam(1, $Dimension_ID);
                        $stmt3->execute();
                        $sample3 = $stmt3->fetchAll();
							          foreach ($sample3 as $sampleValue3 ) {
                      ?>
                      <tr>
                        <td>20.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>21.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>22.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>23.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>24.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>25.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>26.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>27.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
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
                        <td>28.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
                      </tr>
                      <?php }?>

                      <?php    
                        //Query statements to select Job Details
                        $query3 = "SELECT * FROM View_SampleDimension WHERE Dimension_ID = ? and TestName='Disposition'";
                        $stmt3 = $conn->prepare($query3);
                        $stmt3->bindParam(1, $Dimension_ID);
                        $stmt3->execute();
                        $sample3 = $stmt3->fetchAll();
							          foreach ($sample3 as $sampleValue3 ) {
                      ?>
                      <tr>
                        <td>29.</td>
                        <td><?php echo $sampleValue3['TestName'];?></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_1'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_2'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_3'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_4'];?>" disabled></td>
                        <td><input class="form-control" placeholder="<?php echo $sampleValue3['Sample_5'];?>" disabled></td>
                        <td><span class="badge bg-warning">620-649</span></td>
                        <td><span class="badge bg-primary">650-690</span></td>
                        <td><span class="badge bg-success">691-720</span></td>
                      </tr>
                      <?php }?>

                      
                    </tbody>
                    
                  </table></br>
                </div>

                <!-- /.tab-pane -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Overall Disposition</label>
                      <div class="col-sm-6">
                        <input class="form-control" id="" placeholder="<?php echo $row['Disposition'] ?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Inspected By</label>
                      <div class="col-sm-6">
                        <input  class="form-control" id="" placeholder="<?php echo $row['InspectedBy'] ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Verified By</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['VerifiedBy'] ?>"disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Verified Date</label>
                      <div class="col-sm-6">
                        <input class="form-control" id="" placeholder="<?php echo date('m/d/Y h:i:s a',strtotime($row['VerifiedDate']));?>" disabled>
                      </div>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  
                  <div class="col-md-7">
                      <?php
                        if($session_RoleKey==1){
                      ?>
                      <a class = "btn btn-success" target="_blank" href = "formEdit_dimension.php?RecordID=<?php echo $row['RecordID'];?>&Dimension_ID=<?php echo $row['Dimension_ID']?>" style="float:right"> Update/Verify</a>&nbsp;&nbsp;
                      <?php
                        }
                      ?>
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
