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
            <h1 class="m-0 text-dark">DETAILS RECORD FOR INSPECTION BY LOT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">BY_LOT</a></li>
              <li class="breadcrumb-item active">Inspection</li>
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
                 $ByLot_ID= $_GET['ByLot_ID'];
                 
							   //Query statements to select from view
							   $query = "{CALL SP_ViewDetailByLOT(?)}";
							   $stmt = $conn->prepare($query);
							   $stmt->bindParam(1, $RecordID, PDO::PARAM_INT);
							   $stmt->execute();
                 $result = $stmt->fetchAll();
							   foreach ($result as $row ) {
						   ?>
                <div class="col-md-12">
                <center><b><h2 class="m-0 text-dark">LOT INFORMATION</h2></b></center></br></br>
                </div>
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
                      <label class="col-sm-2 col-form-label">Pallet No.</label>
                      <div class="col-sm-6">
                        <input type="datetime" class="form-control" id="" placeholder="<?php echo $row['PalletNo'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Quantity</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Quantity'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">No of Travelling Form</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['No_TravelForm'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Inspection Date/Time</label>
                      <div class="col-sm-6">
                        <input type="datetime" class="form-control" id="" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($row['Inspection_Date']));?>" disabled>
                      </div>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Rework Remark</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Rework'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Product Code</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['FormerProductCode'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Recieve Date</label>
                      <div class="col-sm-6">
                        <input type="" class="form-control" id="" placeholder="<?php echo date('d/m/Y',strtotime($row['ReceiveDate']));?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Former Height</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Former_Height'];?>" disabled>
                      </div>
                    </div>
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
                      <label class="col-sm-2 col-form-label">Lot Number</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['LotNumber'];?>" disabled>
                      </div>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div></br>

                <div class="col-md-12">
                <center><b><h2 class="m-0 text-dark">INSTRUMENT ID</h2></b></center></br></br>
                </div>
                <!-- /.form 1 -->
                <div class="row">
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
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Weighing Scale ID</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $testInstrument_pivot['Weighing Scale'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Height Scale ID</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $testInstrument_pivot['Height Gauge'];?>" disabled>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Bending Scale ID</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="<?php echo $testInstrument_pivot['Bending Gauge'];?>" disabled>
                      </div>
                    </div>
                  </div>
                </div></br>
                <!-- /.tab-pane -->
                <div class="col-md-12">
                <center><b><h2 class="m-0 text-dark">VISUAL TESTING</h2></b></center></br></br>
                </div>
                <div>
                  <!-- /.form 1 -->
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
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Batch Number for Visual</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="batchNumberVisual" placeholder="<?php echo $row['Batch_NumberVisual'];?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Quantity (pcs)</label>
                        <div class="col-sm-6">
                          <input type="number" class="form-control" name="quantityVisual" placeholder="<?php echo $row['Quantity_Visual'];?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Visual Disposition</label>
                        <div class="col-sm-6">
                          <input type="number" class="form-control" name="quantityVisual" placeholder="<?php echo $row['Disposition_Visual'];?>" disabled>
                        </div>
                      </div>
                    </div>
                  </div></br>
                  <!-- /.tab-pane -->
                  <div class="row">
                    <div class="col-md-4">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="text-center">TEST</th>
                            <th class="text-center">Sample Size (pcs)</th>
                            <th class="text-center">AQL</th>
                            <th class="text-center">ACC</th>
                            <th class="text-center">RESULT</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Visual Defect</td>
                            <td><input type="text" name="visualDefect_SS" class="form-control" placeholder="<?php echo $testVisual_pivot['Visual Defect SS'];?>" disabled></td>
                            <td><input type="text" name="visualDefect_AQL" class="form-control" placeholder="<?php echo $testVisual_pivot['Visual Defect AQL'];?>" disabled></td>
                            <td><input type="text" name="visualDefect_ACC" class="form-control" placeholder="<?php echo $testVisual_pivot['Visual Defect ACC'];?>" disabled></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Bending</td>
                            <td><input type="text" name="Bending_SS" class="form-control" placeholder="<?php echo $testVisual_pivot['Bending SS'];?>" disabled></td>
                            <td><input type="text" name="Bending_AQL" class="form-control" placeholder="<?php echo $testVisual_pivot['Bending AQL'];?>" disabled></td>
                            <td><input type="text" name="Bending_ACC" class="form-control" placeholder="<?php echo $testVisual_pivot['Bending ACC'];?>" disabled></td>
                            <td><input class="form-control" name="Bending_Result" placeholder="<?php echo $testVisual_pivot['Bending Result'];?>" disabled></td>
                          </tr>
                          <tr>
                            <td>Packaging</td>
                            <td colspan="3"></td>
                            <td ><input class="form-control" name="Packaging_Result" placeholder="<?php echo $testVisual_pivot['Packaging Result'];?>" disabled></td>
                          </tr>
                        </tbody>
                      </table></br>
                    </div>
                    <div class="col-md-8">
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
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="text-center" colspan='9'>Defect</th>
                          </tr>
                          <tr>
                            <th class="text-center" colspan='4'>Critical</th>
                            <th class="text-center" colspan='4'>Major</th>
                            <th class="text-center">Minor</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>UB:<?php echo $testDefect_pivot['UB'];?></td>
                            <td>BR:<?php echo $testDefect_pivot['BR'];?></td>
                            <td>CL:<?php echo $testDefect_pivot['CL'];?></td>
                            <td>LH:<?php echo $testDefect_pivot['LH'];?></td>
                            <!---------------------------------------------->
                            <td>BEND:<?php echo $testDefect_pivot['BEND'];?></td>
                            <td>Pits:<?php echo $testDefect_pivot['Pits'];?></td>
                            <td>UW:<?php echo $testDefect_pivot['UW'];?></td>
                            <td>OW:<?php echo $testDefect_pivot['OW'];?></td>
                            <!---------------------------------------------->
                            <td>MF:<?php echo $testDefect_pivot['MF'];?></td>
                          </tr>
                          <tr>
                            <td>IT:<?php echo $testDefect_pivot['IT'];?></td>
                            <td>SS:<?php echo $testDefect_pivot['SS'];?></td>
                            <td>DB:<?php echo $testDefect_pivot['DB'];?></td>
                            <td>CM:<?php echo $testDefect_pivot['CM'];?></td>
                            <!---------------------------------------------->
                            <td>CP:<?php echo $testDefect_pivot['CP'];?></td>
                            <td>CB:<?php echo $testDefect_pivot['CB'];?></td>
                            <td>CPB:<?php echo $testDefect_pivot['CPB'];?></td>
                            <td>NRD:<?php echo $testDefect_pivot['NRD'];?></td>
                            <!---------------------------------------------->
                            <td>DT:<?php echo $testDefect_pivot['DT'];?></td>
                          </tr>
                          <tr>
                            <td>WM:<?php echo $testDefect_pivot['WM'];?></td>
                            <td>FM:<?php echo $testDefect_pivot['FM'];?></td>
                            <td>MR:<?php echo $testDefect_pivot['MR'];?></td>
                            <td>FB:<?php echo $testDefect_pivot['FB'];?></td>
                            <!---------------------------------------------->
                            <td>G.NRD:<?php echo $testDefect_pivot['G.NRD'];?></td>
                            <td>FMT:<?php echo $testDefect_pivot['FMT'];?></td>
                            <td>FS:<?php echo $testDefect_pivot['FS'];?></td>
                            <td>OS:<?php echo $testDefect_pivot['OS'];?></td>
                            <!---------------------------------------------->
                            <td>SL:<?php echo $testDefect_pivot['SL'];?></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>PH:<?php echo $testDefect_pivot['PH'];?></td>
                            <td>SP:<?php echo $testDefect_pivot['SP'];?></td>
                            <td>RWE:<?php echo $testDefect_pivot['RWE'];?></td>
                            <td>BS:<?php echo $testDefect_pivot['BS'];?></td>
                            <!---------------------------------------------->
                            <td>NS:<?php echo $testDefect_pivot['NS'];?></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>BBP:<?php echo $testDefect_pivot['BBP'];?></td>
                            <td>UBP:<?php echo $testDefect_pivot['UBP'];?></td>
                            <td>NBP:<?php echo $testDefect_pivot['NBP'];?></td>
                            <td>IS:<?php echo $testDefect_pivot['IS'];?></td>
                            <!---------------------------------------------->
                            <td>SQ:<?php echo $testDefect_pivot['SQ'];?></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>MW:<?php echo $testDefect_pivot['MW'];?></td>
                            <td>BCD:<?php echo $testDefect_pivot['BCD'];?></td>
                            <td>BH:<?php echo $testDefect_pivot['BH'];?></td>
                            <td>CR:<?php echo $testDefect_pivot['CR'];?></td>
                            <!---------------------------------------------->
                            <td>WS:<?php echo $testDefect_pivot['WS'];?></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>SN:<?php echo $testDefect_pivot['SN'];?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table></br>
                    </div>
                  </div></br>
                  <!-- /.tab-pane -->
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
                        <td><input type="text" class="form-control" name="mouldID_1" placeholder="<?php echo $mouldID['Sample_1'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="mouldID_2" placeholder="<?php echo $mouldID['Sample_2'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="mouldID_3" placeholder="<?php echo $mouldID['Sample_3'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="mouldID_4" placeholder="<?php echo $mouldID['Sample_4'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="mouldID_5" placeholder="<?php echo $mouldID['Sample_5'];?>" disabled></td>
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
                        <td><input type="text" class="form-control" name="productionDate_1"placeholder="<?php echo date('d/m/Y',strtotime($productionDate['Sample_1']));?>" disabled></td>
                        <td><input type="text" class="form-control" name="productionDate_2"placeholder="<?php echo date('d/m/Y',strtotime($productionDate['Sample_2']));?>" disabled></td>
                        <td><input type="text" class="form-control" name="productionDate_3"placeholder="<?php echo date('d/m/Y',strtotime($productionDate['Sample_3']));?>" disabled></td>
                        <td><input type="text" class="form-control" name="productionDate_4"placeholder="<?php echo date('d/m/Y',strtotime($productionDate['Sample_4']));?>" disabled></td>
                        <td><input type="text" class="form-control" name="productionDate_5"placeholder="<?php echo date('d/m/Y',strtotime($productionDate['Sample_5']));?>" disabled></td>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table></br>
                  <!-- /.tab-pane -->
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
                        <td><input type="text" class="form-control" name="formerWeightTest_1" placeholder="<?php echo $testVisual_pivot['Former Weight SS'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerWeightTest_2" placeholder="<?php echo $testVisual_pivot['Former weight AQL'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerWeightTest_3" placeholder="<?php echo $testVisual_pivot['Former weight ACC'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerWeightTest_4" placeholder="<?php echo $testVisual_pivot['Former weight Min'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerWeightTest_5" placeholder="<?php echo $testVisual_pivot['Former weight Mid'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerWeightTest_6" placeholder="<?php echo $testVisual_pivot['Former weight Max'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerWeightTest_7" placeholder="<?php echo $testVisual_pivot['Former weight 1'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerWeightTest_8" placeholder="<?php echo $testVisual_pivot['Former weight 2'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerWeightTest_9" placeholder="<?php echo $testVisual_pivot['Former weight 3'];?>" disabled></td>
                        <td colspan="2"><input type="text"  class="form-control" name="formerWeightTest_10" placeholder="<?php echo $testVisual_pivot['Former weight Result'];?>" disabled></td>
                      </tr>
                      <tr>
                        <td>Former Height (mm)</td>
                        <td><input type="text" class="form-control" name="formerHeightTest_1" placeholder="<?php echo $testVisual_pivot['Former height SS'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerHeightTest_2" placeholder="<?php echo $testVisual_pivot['Former height AQL'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerHeightTest_3" placeholder="<?php echo $testVisual_pivot['Former height ACC'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerHeightTest_4" placeholder="<?php echo $testVisual_pivot['Former height Min'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerHeightTest_5" placeholder="<?php echo $testVisual_pivot['Former height Mid'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerHeightTest_6" placeholder="<?php echo $testVisual_pivot['Former height Max'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerHeightTest_7" placeholder="<?php echo $testVisual_pivot['Former height 1'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerHeightTest_8" placeholder="<?php echo $testVisual_pivot['Former height 2'];?>" disabled></td>
                        <td><input type="text" class="form-control" name="formerHeightTest_9" placeholder="<?php echo $testVisual_pivot['Former height 3'];?>" disabled></td>
                        <td colspan="2"><input type="text"  class="form-control" name="formerHeightTest_10" placeholder="<?php echo $testVisual_pivot['Former height Result'];?>" disabled></td>
                      </tr>
                    </tbody>
                  </table></br> 
                </div>

                <!-- /.tab-pane -->
                <div class="col-md-12">
                <center><b><h2 class="m-0 text-dark">STATUS</h2></b></center></br></br>
                </div>
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
                        <input type="" class="form-control" id="" placeholder="<?php echo date('d/m/Y h:i:s a',strtotime($row['VerifiedDate']));?>" disabled>
                      </div>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  
                  <div class="col-md-12">
                    <center>
                      <a class = "btn btn-primary" href = "summary_lot.php" > Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a class = "btn btn-success" target="_blank" href = "formEdit_lot.php?RecordID=<?php echo $row['RecordID']?>&ByLot_ID=<?php echo $row['ByLot_ID']?>" > Update/Verify</a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- <a class = "btn btn-warning" target="_blank" href = "reinspection_glossiness.php?RecordID=<?php echo $RecordID;?>&Glossiness_ID=<?php echo $Glossiness_ID;?>" > Reinspec</a>&nbsp;&nbsp; -->
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
