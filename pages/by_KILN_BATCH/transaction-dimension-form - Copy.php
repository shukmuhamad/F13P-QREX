<?php
                if (isset($_POST['data'])) {

                    $data_form = $_POST['data'];

                    
                  $batchnumber = $_POST['batchnumber'];
                  // echo "</br>".$batchnumber;
                  $inspectionstage = $_POST['inspectionstage'];
                  // echo "</br>".$inspectionstage;
                  $formerheight = $_POST['formerheight'];
                  // echo "</br>".$formerheight;
                  $inspection_date = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$_POST['inspection_date'])));
                  // echo "</br>".$inspection_date;
                  $rework = $_POST['rework'];
                  // echo "</br>".$rework;
                  $formertype = $_POST['formertype'];
                  // echo "</br>".$formertype;
                  $size = $_POST['size'];
                  // echo "</br>".$size;
                  $productcode = $_POST['productcode'];
                  // echo "</br>".$productcode;
                  $productDate = $_POST['productDate'];
                  // echo "</br>".$productDate;

                  $mouldID_1 = $_POST['mouldID_1'];
                  //  echo "</br>".$mouldID_1;
                  $mouldID_2 = $_POST['mouldID_2'];
                  //  echo "</br>".$mouldID_2;
                  $mouldID_3 = $_POST['mouldID_3'];
                  //  echo "</br>".$mouldID_3;
                  $mouldID_4 = $_POST['mouldID_4'];
                  //  echo "</br>".$mouldID_4;
                  $mouldID_5 = $_POST['mouldID_5'];
                  //  echo "</br>".$mouldID_5;
                  $mouldID_low = $_POST['mouldID_low'];
                  //  echo "</br>".$mouldID_low;
                  $mouldID_mid = $_POST['mouldID_mid'];
                  //  echo "</br>".$mouldID_mid;
                  $mouldID_high = $_POST['mouldID_high'];
                  //  echo "</br>".$mouldID_high;

                  $formerWeight_1 = $_POST['formerWeight_1'];
                  //  echo "</br>".$formerWeight_1;
                  $formerWeight_2 = $_POST['formerWeight_2'];
                  //  echo "</br>".$formerWeight_2;
                  $formerWeight_3 = $_POST['formerWeight_3'];
                  //  echo "</br>".$formerWeight_3;
                  $formerWeight_4 = $_POST['formerWeight_4'];
                  //  echo "</br>".$formerWeight_4;
                  $formerWeight_5 = $_POST['formerWeight_5'];
                  //  echo "</br>".$formerWeight_5;
                  $formerWeight_low = $_POST['formerWeight_low'];
                  //  echo "</br>".$formerWeight_low;
                  $formerWeight_mid = $_POST['formerWeight_mid'];
                  //  echo "</br>".$formerWeight_mid;
                  $formerWeight_high = $_POST['formerWeight_high'];
                  //  echo "</br>".$formerWeight_high;

                  $bendingL_1 = $_POST['bendingL_1'];
                  //  echo "</br>".$bendingL_1;
                  $bendingL_2 = $_POST['bendingL_2'];
                  //  echo "</br>".$bendingL_1;
                  $bendingL_3 = $_POST['bendingL_3'];
                  //  echo "</br>".$bendingL_3;
                  $bendingL_4 = $_POST['bendingL_4'];
                  //  echo "</br>".$bendingL_4;
                  $bendingL_5 = $_POST['bendingL_5'];
                  //  echo "</br>".$bendingL_5;
                  $bendingL_low = $_POST['bendingL_low'];
                  //  echo "</br>".$bendingL_low;
                  $bendingL_mid = $_POST['bendingL_mid'];
                  //  echo "</br>".$bendingL_mid;
                  $bendingL_high = $_POST['bendingL_high'];
                  //  echo "</br>".$bendingL_high;

                  $bendingR_1 = $_POST['bendingR_1'];
                  //  echo "</br>".$bendingR_1;
                  $bendingR_2 = $_POST['bendingR_2'];
                  //  echo "</br>".$bendingR_2;
                  $bendingR_3 = $_POST['bendingR_3'];
                  //  echo "</br>".$bendingR_3;
                  $bendingR_4 = $_POST['bendingR_4'];
                  //  echo "</br>".$bendingR_4;
                  $bendingR_5 = $_POST['bendingR_5'];
                  //  echo "</br>".$bendingR_5;
                  $bendingR_low = $_POST['bendingR_low'];
                  //  echo "</br>".$bendingR_low;
                  $bendingR_mid = $_POST['bendingR_mid'];
                  //  echo "</br>".$bendingR_mid;
                  $bendingR_high = $_POST['bendingR_high'];
                  //  echo "</br>".$bendingR_high;
                  
                  $cuff_1 = $_POST['cuff_1'];
                  //  echo "</br>".$cuff_1;
                  $cuff_2 = $_POST['cuff_2'];
                  //  echo "</br>".$cuff_2;
                  $cuff_3 = $_POST['cuff_3'];
                  //  echo "</br>".$cuff_3;
                  $cuff_4 = $_POST['cuff_4'];
                  //  echo "</br>".$cuff_4;
                  $cuff_5 = $_POST['cuff_5'];
                  //  echo "</br>".$cuff_5;
                  $cuff_low = $_POST['cuff_low'];
                  //  echo "</br>".$cuff_low;
                  $cuff_mid = $_POST['cuff_mid'];
                  //  echo "</br>".$cuff_mid;
                  $cuff_high = $_POST['cuff_high'];
                  //  echo "</br>".$cuff_high;
                  
                  $formerHeight_1 = $_POST['formerHeight_1'];
                  //  echo "</br>".$formerHeight_1;
                  $formerHeight_2 = $_POST['formerHeight_2'];
                  //  echo "</br>".$formerHeight_2;
                  $formerHeight_3 = $_POST['formerHeight_3'];
                  //  echo "</br>".$formerHeight_3;
                  $formerHeight_4 = $_POST['formerHeight_4'];
                  //  echo "</br>".$formerHeight_4;
                  $formerHeight_5 = $_POST['formerHeight_5'];
                  //  echo "</br>".$formerHeight_5;
                  $formerHeight_low = $_POST['formerHeight_low'];
                  //  echo "</br>".$formerHeight_low;
                  $formerHeight_mid = $_POST['formerHeight_mid'];
                  //  echo "</br>".$formerHeight_mid;
                  $formerHeight_high = $_POST['formerHeight_high'];
                  //  echo "</br>".$formerHeight_high;
                  
                  $outerBase_1 = $_POST['outerBase_1'];
                  //  echo "</br>".$outerBase_1;
                  $outerBase_2 = $_POST['outerBase_2'];
                  //  echo "</br>".$outerBase_2;
                  $outerBase_3 = $_POST['outerBase_3'];
                  //  echo "</br>".$outerBase_3;
                  $outerBase_4 = $_POST['outerBase_4'];
                  //  echo "</br>".$outerBase_4;
                  $outerBase_5 = $_POST['outerBase_5'];
                  //  echo "</br>".$outerBase_5;
                  $outerBase_low = $_POST['outerBase_low'];
                  //  echo "</br>".$outerBase_low;
                  $outerBase_mid = $_POST['outerBase_mid'];
                  // echo "</br>".$outerBase_mid;
                  $outerBase_high = $_POST['outerBase_high'];
                  // echo "</br>".$outerBase_high;
                  
                  $palmCircumference_1 = $_POST['palmCircumference_1'];
                  // echo "</br>".$palmCircumference_1;
                  $palmCircumference_2 = $_POST['palmCircumference_2'];
                  // echo "</br>".$palmCircumference_2;
                  $palmCircumference_3 = $_POST['palmCircumference_3'];
                  // echo "</br>".$palmCircumference_3;
                  $palmCircumference_4 = $_POST['palmCircumference_4'];
                  // echo "</br>".$palmCircumference_4;
                  $palmCircumference_5 = $_POST['palmCircumference_5'];
                  // echo "</br>".$palmCircumference_5;
                  $palmCircumference_low = $_POST['palmCircumference_low'];
                  // echo "</br>".$palmCircumference_low;
                  $palmCircumference_mid = $_POST['palmCircumference_mid'];
                  // echo "</br>".$palmCircumference_mid;
                  $palmCircumference_high = $_POST['palmCircumference_high'];
                  // echo "</br>".$palmCircumference_high;
                  
                  $spanWidth_1 = $_POST['spanWidth_1'];
                  // echo "</br>".$spanWidth_1;
                  $spanWidth_2 = $_POST['spanWidth_2'];
                  // echo "</br>".$spanWidth_2;
                  $spanWidth_3 = $_POST['spanWidth_3'];
                  // echo "</br>".$spanWidth_3;
                  $spanWidth_4 = $_POST['spanWidth_4'];
                  // echo "</br>".$spanWidth_4;
                  $spanWidth_5 = $_POST['spanWidth_5'];
                  // echo "</br>".$spanWidth_5;
                  $spanWidth_low = $_POST['spanWidth_low'];
                  // echo "</br>".$spanWidth_low;
                  $spanWidth_mid = $_POST['spanWidth_mid'];
                  // echo "</br>".$spanWidth_mid;
                  $spanWidth_high = $_POST['spanWidth_high'];
                  // echo "</br>".$spanWidth_high;
                  
                  $wristCircumference_1 = $_POST['wristCircumference_1'];
                  // echo "</br>".$wristCircumference_1;
                  $wristCircumference_2 = $_POST['wristCircumference_2'];
                  // echo "</br>".$wristCircumference_2;
                  $wristCircumference_3 = $_POST['wristCircumference_3'];
                  // echo "</br>".$wristCircumference_3;
                  $wristCircumference_4 = $_POST['wristCircumference_4'];
                  // echo "</br>".$wristCircumference_4;
                  $wristCircumference_5 = $_POST['wristCircumference_5'];
                  // echo "</br>".$wristCircumference_5;
                  $wristCircumference_low = $_POST['wristCircumference_low'];
                  // echo "</br>".$wristCircumference_low;
                  $wristCircumference_mid = $_POST['wristCircumference_mid'];
                  // echo "</br>".$wristCircumference_mid;
                  $wristCircumference_high = $_POST['wristCircumference_high'];
                  // echo "</br>".$wristCircumference_high;
                  
                  $baseThickness_1 = $_POST['baseThickness_1'];
                  // echo "</br>".$baseThickness_1;
                  $baseThickness_2 = $_POST['baseThickness_2'];
                  // echo "</br>".$baseThickness_2;
                  $baseThickness_3 = $_POST['baseThickness_3'];
                  // echo "</br>".$baseThickness_3;
                  $baseThickness_4 = $_POST['baseThickness_4'];
                  // echo "</br>".$baseThickness_4;
                  $baseThickness_5 = $_POST['baseThickness_5'];
                  // echo "</br>".$baseThickness_5;
                  $baseThickness_low = $_POST['baseThickness_low'];
                  // echo "</br>".$baseThickness_low;
                  $baseThickness_mid = $_POST['baseThickness_mid'];
                  // echo "</br>".$baseThickness_mid;
                  $baseThickness_high = $_POST['baseThickness_high'];
                  // echo "</br>".$baseThickness_high;
                  
                  $fingerLengthF1_1 = $_POST['fingerLengthF1_1'];
                  // echo "</br>".$fingerLengthF1_1;
                  $fingerLengthF1_2 = $_POST['fingerLengthF1_2'];
                  // echo "</br>".$fingerLengthF1_2;
                  $fingerLengthF1_3 = $_POST['fingerLengthF1_3'];
                  // echo "</br>".$fingerLengthF1_3;
                  $fingerLengthF1_4 = $_POST['fingerLengthF1_4'];
                  // echo "</br>".$fingerLengthF1_4;
                  $fingerLengthF1_5 = $_POST['fingerLengthF1_5'];
                  // echo "</br>".$fingerLengthF1_5;
                  $fingerLengthF1_low = $_POST['fingerLengthF1_low'];
                  // echo "</br>".$fingerLengthF1_low;
                  $fingerLengthF1_mid = $_POST['fingerLengthF1_mid'];
                  // echo "</br>".$fingerLengthF1_mid;
                  $fingerLengthF1_high = $_POST['fingerLengthF1_high'];
                  // echo "</br>".$fingerLengthF1_high;
                  
                  $fingerLengthF2_1 = $_POST['fingerLengthF2_1'];
                  // echo "</br>".$fingerLengthF2_1;
                  $fingerLengthF2_2 = $_POST['fingerLengthF2_2'];
                  // echo "</br>".$fingerLengthF2_2;
                  $fingerLengthF2_3 = $_POST['fingerLengthF2_3'];
                  // echo "</br>".$fingerLengthF2_3;
                  $fingerLengthF2_4 = $_POST['fingerLengthF2_4'];
                  // echo "</br>".$fingerLengthF2_4;
                  $fingerLengthF2_5 = $_POST['fingerLengthF2_5'];
                  // echo "</br>".$fingerLengthF2_5;
                  $fingerLengthF2_low = $_POST['fingerLengthF2_low'];
                  // echo "</br>".$fingerLengthF2_low;
                  $fingerLengthF2_mid = $_POST['fingerLengthF2_mid'];
                  // echo "</br>".$fingerLengthF2_mid;
                  $fingerLengthF2_high = $_POST['fingerLengthF2_high'];
                  // echo "</br>".$fingerLengthF2_high;
                  
                  $firstLengthF3_1 = $_POST['firstLengthF3_1'];
                  // echo "</br>".$firstLengthF3_1;
                  $firstLengthF3_2 = $_POST['firstLengthF3_2'];
                  // echo "</br>".$firstLengthF3_2;
                  $firstLengthF3_3 = $_POST['firstLengthF3_3'];
                  // echo "</br>".$firstLengthF3_3;
                  $firstLengthF3_4 = $_POST['firstLengthF3_4'];
                  // echo "</br>".$firstLengthF3_4;
                  $firstLengthF3_5 = $_POST['firstLengthF3_5'];
                  // echo "</br>".$firstLengthF3_5;
                  $firstLengthF3_low = $_POST['firstLengthF3_low'];
                  // echo "</br>".$firstLengthF3_low;
                  $firstLengthF3_mid = $_POST['firstLengthF3_mid'];
                  // echo "</br>".$firstLengthF3_mid;
                  $firstLengthF3_high = $_POST['firstLengthF3_high'];
                  // echo "</br>".$firstLengthF3_high;
                  
                  $firstLengthF4_1 = $_POST['firstLengthF4_1'];
                  // echo "</br>".$firstLengthF4_1;
                  $firstLengthF4_2 = $_POST['firstLengthF4_2'];
                  // echo "</br>".$firstLengthF4_2;
                  $firstLengthF4_3 = $_POST['firstLengthF4_3'];
                  // echo "</br>".$firstLengthF4_3;
                  $firstLengthF4_4 = $_POST['firstLengthF4_4'];
                  // echo "</br>".$firstLengthF4_4;
                  $firstLengthF4_5 = $_POST['firstLengthF4_5'];
                  // echo "</br>".$firstLengthF4_5;
                  $firstLengthF4_low = $_POST['firstLengthF4_low'];
                  // echo "</br>".$firstLengthF4_low;
                  $firstLengthF4_mid = $_POST['firstLengthF4_mid'];
                  // echo "</br>".$firstLengthF4_mid;
                  $firstLengthF4_high = $_POST['firstLengthF4_high'];
                  // echo "</br>".$firstLengthF4_high;
                  
                  $firstLengthF5_1 = $_POST['firstLengthF5_1'];
                  // echo "</br>".$firstLengthF5_1;
                  $firstLengthF5_2 = $_POST['firstLengthF5_2'];
                  // echo "</br>".$firstLengthF5_2;
                  $firstLengthF5_3 = $_POST['firstLengthF5_3'];
                  // echo "</br>".$firstLengthF5_3;
                  $firstLengthF5_4 = $_POST['firstLengthF5_4'];
                  // echo "</br>".$firstLengthF5_4;
                  $firstLengthF5_5 = $_POST['firstLengthF5_5'];
                  // echo "</br>".$firstLengthF5_5;
                  $firstLengthF5_low = $_POST['firstLengthF5_low'];
                  // echo "</br>".$firstLengthF5_low;
                  $firstLengthF5_mid = $_POST['firstLengthF5_mid'];
                  // echo "</br>".$firstLengthF5_mid;
                  $firstLengthF5_high = $_POST['firstLengthF5_high'];
                  // echo "</br>".$firstLengthF5_high;

                  $firstCircumferenceF1_1 = $_POST['firstCircumferenceF1_1'];
                  // echo "</br>".$firstCircumferenceF1_1;
                  $firstCircumferenceF1_2 = $_POST['firstCircumferenceF1_2'];
                  // echo "</br>".$firstCircumferenceF1_2;
                  $firstCircumferenceF1_3 = $_POST['firstCircumferenceF1_3'];
                  // echo "</br>".$firstCircumferenceF1_3;
                  $firstCircumferenceF1_4 = $_POST['firstCircumferenceF1_4'];
                  // echo "</br>".$firstCircumferenceF1_4;
                  $firstCircumferenceF1_5 = $_POST['firstCircumferenceF1_5'];
                  // echo "</br>".$firstCircumferenceF1_5;
                  $firstCircumferenceF1_low = $_POST['firstCircumferenceF1_low'];
                  // echo "</br>".$firstCircumferenceF1_low;
                  $firstCircumferenceF1_mid = $_POST['firstCircumferenceF1_mid'];
                  // echo "</br>".$firstCircumferenceF1_mid;
                  $firstCircumferenceF1_high = $_POST['firstCircumferenceF1_high'];
                  // echo "</br>".$firstCircumferenceF1_high;
                  
                  $firstCircumferenceF2_1 = $_POST['firstCircumferenceF2_1'];
                  // echo "</br>".$firstCircumferenceF2_1;
                  $firstCircumferenceF2_2 = $_POST['firstCircumferenceF2_2'];
                  // echo "</br>".$firstCircumferenceF2_2;
                  $firstCircumferenceF2_3 = $_POST['firstCircumferenceF2_3'];
                  // echo "</br>".$firstCircumferenceF2_3;
                  $firstCircumferenceF2_4 = $_POST['firstCircumferenceF2_4'];
                  // echo "</br>".$firstCircumferenceF2_4;
                  $firstCircumferenceF2_5 = $_POST['firstCircumferenceF2_5'];
                  // echo "</br>".$firstCircumferenceF2_5;
                  $firstCircumferenceF2_low = $_POST['firstCircumferenceF2_low'];
                  // echo "</br>".$firstCircumferenceF2_low;
                  $firstCircumferenceF2_mid = $_POST['firstCircumferenceF2_mid'];
                  // echo "</br>".$firstCircumferenceF2_mid;
                  $firstCircumferenceF2_high = $_POST['firstCircumferenceF2_high'];
                  // echo "</br>".$firstCircumferenceF2_high;
                  
                  $firstCircumferenceF3_1 = $_POST['firstCircumferenceF3_1'];
                  // echo "</br>".$firstCircumferenceF3_1;
                  $firstCircumferenceF3_2 = $_POST['firstCircumferenceF3_2'];
                  // echo "</br>".$firstCircumferenceF3_2;
                  $firstCircumferenceF3_3 = $_POST['firstCircumferenceF3_3'];
                  // echo "</br>".$firstCircumferenceF3_3;
                  $firstCircumferenceF3_4 = $_POST['firstCircumferenceF3_4'];
                  // echo "</br>".$firstCircumferenceF3_4;
                  $firstCircumferenceF3_5 = $_POST['firstCircumferenceF3_5'];
                  // echo "</br>".$firstCircumferenceF3_5;
                  $firstCircumferenceF3_low = $_POST['firstCircumferenceF3_low'];
                  // echo "</br>".$firstCircumferenceF3_low;
                  $firstCircumferenceF3_mid = $_POST['firstCircumferenceF3_mid'];
                  // echo "</br>".$firstCircumferenceF3_mid;
                  $firstCircumferenceF3_high = $_POST['firstCircumferenceF3_high'];
                  // echo "</br>".$firstCircumferenceF3_high;
                  
                  $firstCircumferenceF4_1 = $_POST['firstCircumferenceF4_1'];
                  // echo "</br>".$firstCircumferenceF4_1;
                  $firstCircumferenceF4_2 = $_POST['firstCircumferenceF4_2'];
                  // echo "</br>".$firstCircumferenceF4_2;
                  $firstCircumferenceF4_3 = $_POST['firstCircumferenceF4_3'];
                  // echo "</br>".$firstCircumferenceF4_3;
                  $firstCircumferenceF4_4 = $_POST['firstCircumferenceF4_4'];
                  // echo "</br>".$firstCircumferenceF4_4;
                  $firstCircumferenceF4_5 = $_POST['firstCircumferenceF4_5'];
                  // echo "</br>".$firstCircumferenceF4_5;
                  $firstCircumferenceF4_low = $_POST['firstCircumferenceF4_low'];
                  // echo "</br>".$firstCircumferenceF4_low;
                  $firstCircumferenceF4_mid = $_POST['firstCircumferenceF4_mid'];
                  // echo "</br>".$firstCircumferenceF4_mid;
                  $firstCircumferenceF4_high = $_POST['firstCircumferenceF4_high'];
                  // echo "</br>".$firstCircumferenceF4_high;
                  
                  $firstCircumferenceF5_1 = $_POST['firstCircumferenceF5_1'];
                  // echo "</br>".$firstCircumferenceF5_1;
                  $firstCircumferenceF5_2 = $_POST['firstCircumferenceF5_2'];
                  // echo "</br>".$firstCircumferenceF5_2;
                  $firstCircumferenceF5_3 = $_POST['firstCircumferenceF5_3'];
                  // echo "</br>".$firstCircumferenceF5_3;
                  $firstCircumferenceF5_4 = $_POST['firstCircumferenceF5_4'];
                  // echo "</br>".$firstCircumferenceF5_4;
                  $firstCircumferenceF5_5 = $_POST['firstCircumferenceF5_5'];
                  // echo "</br>".$firstCircumferenceF5_5;
                  $firstCircumferenceF5_low = $_POST['firstCircumferenceF5_low'];
                  // echo "</br>".$firstCircumferenceF5_low;
                  $firstCircumferenceF5_mid = $_POST['firstCircumferenceF5_mid'];
                  // echo "</br>".$firstCircumferenceF5_mid;
                  $firstCircumferenceF5_high = $_POST['firstCircumferenceF5_high'];
                  // echo "</br>".$firstCircumferenceF5_high;

                  $textureLengthF1_1 = $_POST['textureLengthF1_1'];
                  // echo "</br>".$textureLengthF1_1;
                  $textureLengthF1_2 = $_POST['textureLengthF1_2'];
                  // echo "</br>".$textureLengthF1_2;
                  $textureLengthF1_3 = $_POST['textureLengthF1_3'];
                  // echo "</br>".$textureLengthF1_3;
                  $textureLengthF1_4 = $_POST['textureLengthF1_4'];
                  // echo "</br>".$textureLengthF1_4;
                  $textureLengthF1_5 = $_POST['textureLengthF1_5'];
                  // echo "</br>".$textureLengthF1_5;
                  $textureLengthF1_low = $_POST['textureLengthF1_low'];
                  // echo "</br>".$textureLengthF1_low;
                  $textureLengthF1_mid = $_POST['textureLengthF1_mid'];
                  // echo "</br>".$textureLengthF1_mid;
                  $textureLengthF1_high = $_POST['textureLengthF1_high'];
                  // echo "</br>".$textureLengthF1_high;

                  $textureLengthF2_1 = $_POST['textureLengthF2_1'];
                  // echo "</br>".$textureLengthF2_1;
                  $textureLengthF2_2 = $_POST['textureLengthF2_2'];
                  // echo "</br>".$textureLengthF2_2;
                  $textureLengthF2_3 = $_POST['textureLengthF2_3'];
                  // echo "</br>".$textureLengthF2_3;
                  $textureLengthF2_4 = $_POST['textureLengthF2_4'];
                  // echo "</br>".$textureLengthF2_4;
                  $textureLengthF2_5 = $_POST['textureLengthF2_5'];
                  // echo "</br>".$textureLengthF2_5;
                  $textureLengthF2_low = $_POST['textureLengthF2_low'];
                  // echo "</br>".$textureLengthF2_low;
                  $textureLengthF2_mid = $_POST['textureLengthF2_mid'];
                  // echo "</br>".$textureLengthF2_mid;
                  $textureLengthF2_high = $_POST['textureLengthF2_high'];
                  // echo "</br>".$textureLengthF2_high;

                  $textureLengthF3_1 = $_POST['textureLengthF3_1'];
                  // echo "</br>".$textureLengthF3_1;
                  $textureLengthF3_2 = $_POST['textureLengthF3_2'];
                  // echo "</br>".$textureLengthF3_2;
                  $textureLengthF3_3 = $_POST['textureLengthF3_3'];
                  // echo "</br>".$textureLengthF3_3;
                  $textureLengthF3_4 = $_POST['textureLengthF3_4'];
                  // echo "</br>".$textureLengthF3_4;
                  $textureLengthF3_5 = $_POST['textureLengthF3_5'];
                  // echo "</br>".$textureLengthF3_5;
                  $textureLengthF3_low = $_POST['textureLengthF3_low'];
                  // echo "</br>".$textureLengthF3_low;
                  $textureLengthF3_mid = $_POST['textureLengthF3_mid'];
                  // echo "</br>".$textureLengthF3_mid;
                  $textureLengthF3_high = $_POST['textureLengthF3_high'];
                  // echo "</br>".$textureLengthF3_high;

                  $textureLengthF4_1 = $_POST['textureLengthF4_1'];
                  // echo "</br>".$textureLengthF4_1;
                  $textureLengthF4_2 = $_POST['textureLengthF4_2'];
                  // echo "</br>".$textureLengthF4_2;
                  $textureLengthF4_3 = $_POST['textureLengthF4_3'];
                  // echo "</br>".$textureLengthF4_3;
                  $textureLengthF4_4 = $_POST['textureLengthF4_4'];
                  // echo "</br>".$textureLengthF4_4;
                  $textureLengthF4_5 = $_POST['textureLengthF4_5'];
                  // echo "</br>".$textureLengthF4_5;
                  $textureLengthF4_low = $_POST['textureLengthF4_low'];
                  // echo "</br>".$textureLengthF4_low;
                  $textureLengthF4_mid = $_POST['textureLengthF4_mid'];
                  // echo "</br>".$textureLengthF4_mid;
                  $textureLengthF4_high = $_POST['textureLengthF4_high'];
                  // echo "</br>".$textureLengthF4_high;

                  $textureLengthF5_1 = $_POST['textureLengthF5_1'];
                  // echo "</br>".$textureLengthF5_1;
                  $textureLengthF5_2 = $_POST['textureLengthF5_2'];
                  // echo "</br>".$textureLengthF5_2;
                  $textureLengthF5_3 = $_POST['textureLengthF5_3'];
                  // echo "</br>".$textureLengthF5_3;
                  $textureLengthF5_4 = $_POST['textureLengthF5_4'];
                  // echo "</br>".$textureLengthF5_4;
                  $textureLengthF5_5 = $_POST['textureLengthF5_5'];
                  // echo "</br>".$textureLengthF5_5;
                  $textureLengthF5_low = $_POST['textureLengthF5_low'];
                  // echo "</br>".$textureLengthF5_low;
                  $textureLengthF5_mid = $_POST['textureLengthF5_mid'];
                  // echo "</br>".$textureLengthF5_mid;
                  $textureLengthF5_high = $_POST['textureLengthF5_high'];
                  // echo "</br>".$textureLengthF5_high;

                  $palmFlying_1 = $_POST['palmFlying_1'];
                  // echo "</br>".$palmFlying_1;
                  $palmFlying_2 = $_POST['palmFlying_2'];
                  // echo "</br>".$palmFlying_2;
                  $palmFlying_3 = $_POST['palmFlying_3'];
                  // echo "</br>".$palmFlying_3;
                  $palmFlying_4 = $_POST['palmFlying_4'];
                  // echo "</br>".$palmFlying_4;
                  $palmFlying_5 = $_POST['palmFlying_5'];
                  // echo "</br>".$palmFlying_5;
                  $palmFlying_low = $_POST['palmFlying_low'];
                  // echo "</br>".$palmFlying_low;
                  $palmFlying_mid = $_POST['palmFlying_mid'];
                  // echo "</br>".$palmFlying_mid;
                  $palmFlying_high = $_POST['palmFlying_high'];
                  // echo "</br>".$palmFlying_high;

                  $palmTextured_1 = $_POST['palmTextured_1'];
                  // echo "</br>".$palmTextured_1;
                  $palmTextured_2 = $_POST['palmTextured_2'];
                  // echo "</br>".$palmTextured_2;
                  $palmTextured_3 = $_POST['palmTextured_3'];
                  // echo "</br>".$palmTextured_3;
                  $palmTextured_4 = $_POST['palmTextured_4'];
                  // echo "</br>".$palmTextured_4;
                  $palmTextured_5 = $_POST['palmTextured_5'];
                  // echo "</br>".$palmTextured_5;
                  $palmTextured_low = $_POST['palmTextured_low'];
                  // echo "</br>".$palmTextured_low;
                  $palmTextured_mid = $_POST['palmTextured_mid'];
                  // echo "</br>".$palmTextured_mid;
                  $palmTextured_high = $_POST['palmTextured_high'];
                  // echo "</br>".$palmTextured_high;

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

                  $overall_disposition = $_POST['overall_disposition'];
                  // echo "</br>".$inspectedBY;
                  $inspectedBY = $_POST['inspectedBY'];
                  // echo "</br>".$inspectedBY;
                  $verifiedby = $_POST['verifiedBY'];
                  // echo "</br>".$verifiedby;
                  $verified_date = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$_POST['verifiedDate'])));
                  // echo "</br>".$verified_date;

                  $query = "{CALL SP_Register_Dimension(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
                  $stmt = $connect->prepare($query);

                  $stmt->bindParam(1, $batchnumber);
                  $stmt->bindParam(2, $inspectionstage, PDO::PARAM_INT);
                  $stmt->bindParam(3, $formerheight);
                  $stmt->bindParam(4, $inspection_date);
                  $stmt->bindParam(5, $rework);
                  $stmt->bindParam(6, $formertype, PDO::PARAM_INT);
                  $stmt->bindParam(7, $size, PDO::PARAM_INT);
                  $stmt->bindParam(8, $productcode, PDO::PARAM_INT);
                  $stmt->bindParam(9, $productDate);

                  $stmt->bindParam(10, $mouldID_1);
                  $stmt->bindParam(11, $mouldID_2);
                  $stmt->bindParam(12, $mouldID_3);
                  $stmt->bindParam(13, $mouldID_4);
                  $stmt->bindParam(14, $mouldID_5);
                  $stmt->bindParam(15, $mouldID_low); 
                  $stmt->bindParam(16, $mouldID_mid);
                  $stmt->bindParam(17, $mouldID_high);

                  $stmt->bindParam(18, $formerWeight_1);
                  $stmt->bindParam(19, $formerWeight_2);
                  $stmt->bindParam(20, $formerWeight_3);
                  $stmt->bindParam(21, $formerWeight_4);
                  $stmt->bindParam(22, $formerWeight_5);
                  $stmt->bindParam(23, $formerWeight_low);
                  $stmt->bindParam(24, $formerWeight_mid);
                  $stmt->bindParam(25, $formerWeight_high);

                  $stmt->bindParam(26, $bendingL_1);
                  $stmt->bindParam(27, $bendingL_2);
                  $stmt->bindParam(28, $bendingL_3); 
                  $stmt->bindParam(29, $bendingL_4);
                  $stmt->bindParam(30, $bendingL_5);
                  $stmt->bindParam(31, $bendingL_low);
                  $stmt->bindParam(32, $bendingL_mid);
                  $stmt->bindParam(33, $bendingL_high);

                  $stmt->bindParam(34, $bendingR_1);
                  $stmt->bindParam(35, $bendingR_2);
                  $stmt->bindParam(36, $bendingR_3);
                  $stmt->bindParam(37, $bendingR_4);
                  $stmt->bindParam(38, $bendingR_5);
                  $stmt->bindParam(39, $bendingR_low);
                  $stmt->bindParam(40, $bendingR_mid);
                  $stmt->bindParam(41, $bendingR_high);

                  $stmt->bindParam(42, $cuff_1);
                  $stmt->bindParam(43, $cuff_2);
                  $stmt->bindParam(44, $cuff_3);
                  $stmt->bindParam(45, $cuff_4);
                  $stmt->bindParam(46, $cuff_5);
                  $stmt->bindParam(47, $cuff_low);
                  $stmt->bindParam(48, $cuff_mid);
                  $stmt->bindParam(49, $cuff_high);

                  $stmt->bindParam(50, $formerHeight_1);
                  $stmt->bindParam(51, $formerHeight_2);
                  $stmt->bindParam(52, $formerHeight_3);
                  $stmt->bindParam(53, $formerHeight_4);
                  $stmt->bindParam(54, $formerHeight_5);
                  $stmt->bindParam(55, $formerHeight_low);
                  $stmt->bindParam(56, $formerHeight_mid);
                  $stmt->bindParam(57, $formerHeight_high);

                  $stmt->bindParam(58, $outerBase_1);
                  $stmt->bindParam(59, $outerBase_2);
                  $stmt->bindParam(60, $outerBase_3);
                  $stmt->bindParam(61, $outerBase_4);
                  $stmt->bindParam(62, $outerBase_5);
                  $stmt->bindParam(63, $outerBase_low);
                  $stmt->bindParam(64, $outerBase_mid);
                  $stmt->bindParam(65, $outerBase_high);

                  $stmt->bindParam(66, $palmCircumference_1);
                  $stmt->bindParam(67, $palmCircumference_2);
                  $stmt->bindParam(68, $palmCircumference_3);
                  $stmt->bindParam(69, $palmCircumference_4);
                  $stmt->bindParam(70, $palmCircumference_5);
                  $stmt->bindParam(71, $palmCircumference_low);
                  $stmt->bindParam(72, $palmCircumference_mid);
                  $stmt->bindParam(73, $palmCircumference_high);

                  $stmt->bindParam(74, $spanWidth_1);
                  $stmt->bindParam(75, $spanWidth_2);
                  $stmt->bindParam(76, $spanWidth_3);
                  $stmt->bindParam(77, $spanWidth_4);
                  $stmt->bindParam(78, $spanWidth_5);
                  $stmt->bindParam(79, $spanWidth_low);
                  $stmt->bindParam(80, $spanWidth_mid);
                  $stmt->bindParam(81, $spanWidth_high);
                  
                  $stmt->bindParam(82, $wristCircumference_1);
                  $stmt->bindParam(83, $wristCircumference_2);
                  $stmt->bindParam(84, $wristCircumference_3);
                  $stmt->bindParam(85, $wristCircumference_4);
                  $stmt->bindParam(86, $wristCircumference_5);
                  $stmt->bindParam(87, $wristCircumference_low);
                  $stmt->bindParam(88, $wristCircumference_mid);
                  $stmt->bindParam(89, $wristCircumference_high);
                  
                  $stmt->bindParam(90, $baseThickness_1);
                  $stmt->bindParam(91, $baseThickness_2);
                  $stmt->bindParam(92, $baseThickness_3);
                  $stmt->bindParam(93, $baseThickness_4);
                  $stmt->bindParam(94, $baseThickness_5);
                  $stmt->bindParam(95, $baseThickness_low);
                  $stmt->bindParam(96, $baseThickness_mid);
                  $stmt->bindParam(97, $baseThickness_high);

                  $stmt->bindParam(98, $fingerLengthF1_1);
                  $stmt->bindParam(99, $fingerLengthF1_2);
                  $stmt->bindParam(100, $fingerLengthF1_3);
                  $stmt->bindParam(101, $fingerLengthF1_4);
                  $stmt->bindParam(102, $fingerLengthF1_5);
                  $stmt->bindParam(103, $fingerLengthF1_low);
                  $stmt->bindParam(104, $fingerLengthF1_mid);
                  $stmt->bindParam(105, $fingerLengthF1_high);

                  $stmt->bindParam(106, $fingerLengthF2_1);
                  $stmt->bindParam(107, $fingerLengthF2_2);
                  $stmt->bindParam(108, $fingerLengthF2_2);
                  $stmt->bindParam(109, $fingerLengthF2_4);
                  $stmt->bindParam(110, $fingerLengthF2_5);
                  $stmt->bindParam(111, $fingerLengthF2_low);
                  $stmt->bindParam(112, $fingerLengthF2_mid);
                  $stmt->bindParam(113, $fingerLengthF2_high);
                  
                  $stmt->bindParam(114, $fingerLengthF3_1);
                  $stmt->bindParam(115, $fingerLengthF3_2);
                  $stmt->bindParam(116, $fingerLengthF3_2);
                  $stmt->bindParam(117, $fingerLengthF3_4);
                  $stmt->bindParam(118, $fingerLengthF3_5);
                  $stmt->bindParam(119, $fingerLengthF3_low);
                  $stmt->bindParam(120, $fingerLengthF3_mid);
                  $stmt->bindParam(121, $fingerLengthF3_high);
                  
                  $stmt->bindParam(122, $fingerLengthF4_1);
                  $stmt->bindParam(123, $fingerLengthF4_2);
                  $stmt->bindParam(124, $fingerLengthF4_2);
                  $stmt->bindParam(125, $fingerLengthF4_4);
                  $stmt->bindParam(126, $fingerLengthF4_5);
                  $stmt->bindParam(127, $fingerLengthF4_low);
                  $stmt->bindParam(128, $fingerLengthF4_mid);
                  $stmt->bindParam(129, $fingerLengthF4_high);
                  
                  $stmt->bindParam(130, $fingerLengthF5_1);
                  $stmt->bindParam(131, $fingerLengthF5_2);
                  $stmt->bindParam(132, $fingerLengthF5_2);
                  $stmt->bindParam(133, $fingerLengthF5_4);
                  $stmt->bindParam(134, $fingerLengthF5_5);
                  $stmt->bindParam(135, $fingerLengthF5_low);
                  $stmt->bindParam(136, $fingerLengthF5_mid);
                  $stmt->bindParam(137, $fingerLengthF5_high);
                  
                  $stmt->bindParam(138, $firstCircumferenceF1_1);
                  $stmt->bindParam(139, $firstCircumferenceF1_2);
                  $stmt->bindParam(140, $firstCircumferenceF1_3);
                  $stmt->bindParam(141, $firstCircumferenceF1_4);
                  $stmt->bindParam(142, $firstCircumferenceF1_5);
                  $stmt->bindParam(143, $firstCircumferenceF1_low);
                  $stmt->bindParam(144, $firstCircumferenceF1_mid);
                  $stmt->bindParam(145, $firstCircumferenceF1_high);
                  
                  $stmt->bindParam(146, $firstCircumferenceF2_1);
                  $stmt->bindParam(147, $firstCircumferenceF2_2);
                  $stmt->bindParam(148, $firstCircumferenceF2_3);
                  $stmt->bindParam(149, $firstCircumferenceF2_4);
                  $stmt->bindParam(150, $firstCircumferenceF2_5);
                  $stmt->bindParam(151, $firstCircumferenceF2_low);
                  $stmt->bindParam(152, $firstCircumferenceF2_mid);
                  $stmt->bindParam(153, $firstCircumferenceF2_high);
                  
                  $stmt->bindParam(154, $firstCircumferenceF3_1);
                  $stmt->bindParam(155, $firstCircumferenceF3_2);
                  $stmt->bindParam(156, $firstCircumferenceF3_3);
                  $stmt->bindParam(157, $firstCircumferenceF3_4);
                  $stmt->bindParam(158, $firstCircumferenceF3_5);
                  $stmt->bindParam(159, $firstCircumferenceF3_low);
                  $stmt->bindParam(160, $firstCircumferenceF3_mid);
                  $stmt->bindParam(161, $firstCircumferenceF3_high);
                  
                  $stmt->bindParam(162, $firstCircumferenceF4_1);
                  $stmt->bindParam(163, $firstCircumferenceF4_2);
                  $stmt->bindParam(164, $firstCircumferenceF4_3);
                  $stmt->bindParam(165, $firstCircumferenceF4_4);
                  $stmt->bindParam(166, $firstCircumferenceF4_5);
                  $stmt->bindParam(167, $firstCircumferenceF4_low);
                  $stmt->bindParam(168, $firstCircumferenceF4_mid);
                  $stmt->bindParam(169, $firstCircumferenceF4_high);
                  
                  $stmt->bindParam(170, $firstCircumferenceF5_1);
                  $stmt->bindParam(171, $firstCircumferenceF5_2);
                  $stmt->bindParam(172, $firstCircumferenceF5_3);
                  $stmt->bindParam(173, $firstCircumferenceF5_4);
                  $stmt->bindParam(174, $firstCircumferenceF5_5);
                  $stmt->bindParam(175, $firstCircumferenceF5_low);
                  $stmt->bindParam(176, $firstCircumferenceF5_mid);
                  $stmt->bindParam(177, $firstCircumferenceF5_high);

                  $stmt->bindParam(178, $textureLengthF1_1);
                  $stmt->bindParam(179, $textureLengthF1_2);
                  $stmt->bindParam(180, $textureLengthF1_3);
                  $stmt->bindParam(181, $textureLengthF1_4);
                  $stmt->bindParam(182, $textureLengthF1_5);
                  $stmt->bindParam(183, $textureLengthF1_low);
                  $stmt->bindParam(184, $textureLengthF1_mid);
                  $stmt->bindParam(185, $textureLengthF1_high);
                  
                  $stmt->bindParam(186, $textureLengthF2_1);
                  $stmt->bindParam(187, $textureLengthF2_2);
                  $stmt->bindParam(188, $textureLengthF2_3);
                  $stmt->bindParam(189, $textureLengthF2_4);
                  $stmt->bindParam(190, $textureLengthF2_5);
                  $stmt->bindParam(191, $textureLengthF2_low);
                  $stmt->bindParam(192, $textureLengthF2_mid);
                  $stmt->bindParam(193, $textureLengthF2_high);
                   
                  $stmt->bindParam(194, $textureLengthF3_1);
                  $stmt->bindParam(195, $textureLengthF3_2);
                  $stmt->bindParam(196, $textureLengthF3_3);
                  $stmt->bindParam(197, $textureLengthF3_4);
                  $stmt->bindParam(198, $textureLengthF3_5);
                  $stmt->bindParam(199, $textureLengthF3_low);
                  $stmt->bindParam(200, $textureLengthF3_mid);
                  $stmt->bindParam(201, $textureLengthF3_high);
                  
                  $stmt->bindParam(202, $textureLengthF4_1);
                  $stmt->bindParam(203, $textureLengthF4_2);
                  $stmt->bindParam(204, $textureLengthF4_3);
                  $stmt->bindParam(205, $textureLengthF4_4);
                  $stmt->bindParam(206, $textureLengthF4_5);
                  $stmt->bindParam(207, $textureLengthF4_low);
                  $stmt->bindParam(208, $textureLengthF4_mid);
                  $stmt->bindParam(209, $textureLengthF4_high);

                  $stmt->bindParam(210, $textureLengthF5_1);
                  $stmt->bindParam(211, $textureLengthF5_2);
                  $stmt->bindParam(212, $textureLengthF5_3);
                  $stmt->bindParam(213, $textureLengthF5_4);
                  $stmt->bindParam(214, $textureLengthF5_5);
                  $stmt->bindParam(215, $textureLengthF5_low);
                  $stmt->bindParam(216, $textureLengthF5_mid);
                  $stmt->bindParam(217, $textureLengthF5_high);

                  $stmt->bindParam(218, $palmFlying_1);
                  $stmt->bindParam(219, $palmFlying_2);
                  $stmt->bindParam(220, $palmFlying_3);
                  $stmt->bindParam(221, $palmFlying_4);
                  $stmt->bindParam(222, $palmFlying_5);
                  $stmt->bindParam(223, $palmFlying_low);
                  $stmt->bindParam(224, $palmFlying_mid);
                  $stmt->bindParam(225, $palmFlying_high);

                  $stmt->bindParam(226, $palmTextured_1);
                  $stmt->bindParam(227, $palmTextured_2);
                  $stmt->bindParam(228, $palmTextured_3);
                  $stmt->bindParam(229, $palmTextured_4);
                  $stmt->bindParam(230, $palmTextured_5);
                  $stmt->bindParam(231, $palmTextured_low);
                  $stmt->bindParam(232, $palmTextured_mid);
                  $stmt->bindParam(233, $palmTextured_high);
                  
                  $stmt->bindParam(234, $disposition_1);
                  $stmt->bindParam(235, $disposition_2);
                  $stmt->bindParam(236, $disposition_3);
                  $stmt->bindParam(237, $disposition_4);
                  $stmt->bindParam(238, $disposition_5);

                  $stmt->bindParam(239, $overall_disposition);
                  $stmt->bindParam(240, $inspectedBY);
                  $stmt->bindParam(241, $verifiedby);
                  $stmt->bindParam(242, $verified_date);
                  $row = $stmt->rowCount();

                  if ($row == 1) {

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
                  toastr["error"]("User already registered into the system.", "Kindly recheck!");
                  </script>';
                  }

                } else {}
               ?>