<?php

include('../../database_connection.php');

                if (isset($_POST['data'])) {

                    $data_loop = $_POST['data'];
                    $data_form = $_POST['data'];

                    $index = 0;
                    $count = 0;
                    foreach($data_loop as $data){
                        if($data['value'] == ''){
                            $data_form[$index]['value'] = null;
                            $count++;
                        }

                        $index++;
                    }
                    // echo $count;
                  $RecordID= $_POST['recordID'];  
                  echo "</br> <script>console.log(".$RecordID.") </script>";
                  $Dimension_ID= $_POST['Dimension_ID'];
                  //echo "</br> <script>console.log(".$Dimension_ID.") </script>";

                  $batchnumber = $data_form[0]['value'];
                  //echo "</br> <script>console.log(".$batchnumber.") </script>";
                  $inspectionstage = $data_form[1]['value'];
                  //echo "</br> <script>console.log(".$inspectionstage.") </script>";
                  $formerheight = $data_form[2]['value'];
                  //echo "</br> <script>console.log(".$formerheight.") </script>";
                  $inspection_date = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$data_form[3]['value'])));
                  //echo "</br> <script>console.log(".$inspection_date.") </script>";
                  $rework = $data_form[4]['value'];
                  //echo "</br> <script>console.log(".$rework.") </script>";
                  $formertype = $data_form[5]['value'];
                  //echo "</br> <script>console.log(".$formertype.") </script>";
                  $size = $data_form[6]['value'];
                  //echo "</br> <script>console.log(".$size.") </script>";
                  $productcode = $data_form[7]['value'];
                  //echo "</br> <script>console.log(".$productcode.") </script>";
                  $productDate = $data_form[8]['value'];
                  //echo "</br> <script>console.log(".$productDate.") </script>";

                  $mouldID_1 = $data_form[9]['value'];
                  //echo "</br> <script>console.log(".$mouldID_1.") </script>";
                  $mouldID_2 = $data_form[10]['value'];
                  //echo "</br> <script>console.log(".$mouldID_2.") </script>";
                  $mouldID_3 = $data_form[11]['value'];
                  //echo "</br> <script>console.log(".$mouldID_3.") </script>";
                  $mouldID_4 = $data_form[12]['value'];
                  //echo "</br> <script>console.log(".$mouldID_4.") </script>";
                  $mouldID_5 = $data_form[13]['value'];
                  //echo "</br> <script>console.log(".$mouldID_5.") </script>";
                  $mouldID_low = $data_form[14]['value'];
                  //echo "</br> <script>console.log(".$mouldID_low.") </script>";
                  $mouldID_mid = $data_form[15]['value'];
                  //echo "</br> <script>console.log(".$mouldID_mid.") </script>";
                  $mouldID_high = $data_form[16]['value'];
                  //echo "</br> <script>console.log(".$mouldID_high.") </script>";


                  $formerWeight_1 = $data_form[17]['value'];
                  //echo "</br> <script>console.log(".$formerWeight_1.") </script>";
                  $formerWeight_2 = $data_form[18]['value'];
                  //echo "</br> <script>console.log(".$formerWeight_2.") </script>";
                  $formerWeight_3 = $data_form[19]['value'];
                  //echo "</br> <script>console.log(".$formerWeight_3.") </script>";
                  $formerWeight_4 = $data_form[20]['value'];
                  //echo "</br> <script>console.log(".$formerWeight_4.") </script>";
                  $formerWeight_5 = $data_form[21]['value'];
                  //echo "</br> <script>console.log(".$formerWeight_5.") </script>";
                  $formerWeight_low = $data_form[22]['value'];
                  //echo "</br> <script>console.log(".$formerWeight_low.") </script>";
                  $formerWeight_mid = $data_form[23]['value'];
                  //echo "</br> <script>console.log(".$formerWeight_mid.") </script>";
                  $formerWeight_high = $data_form[24]['value'];
                  //echo "</br> <script>console.log(".$formerWeight_high.") </script>";

                  $bendingL_1 = $data_form[25]['value'];
                  //echo "</br> <script>console.log(".$bendingL_1.") </script>";
                  $bendingL_2 = $data_form[26]['value'];
                  //echo "</br> <script>console.log(".$bendingL_2.") </script>";
                  $bendingL_3 = $data_form[27]['value'];
                  //echo "</br> <script>console.log(".$bendingL_3.") </script>";
                  $bendingL_4 = $data_form[28]['value'];
                  //echo "</br> <script>console.log(".$bendingL_4.") </script>";
                  $bendingL_5 = $data_form[29]['value'];
                  //echo "</br> <script>console.log(".$bendingL_5.") </script>";
                  $bendingL_low = null;
                  //echo "</br> <script>console.log(".$bendingL_low.") </script>";
                  $bendingL_mid = null;
                  //echo "</br> <script>console.log(".$bendingL_mid.") </script>";
                  $bendingL_high = null;
                  //echo "</br> <script>console.log(".$bendingL_high.") </script>";
                  
                  $cuff_1 = $data_form[30]['value'];
                  //echo "</br> <script>console.log(".$cuff_1.") </script>";
                  $cuff_2 = $data_form[31]['value'];
                  //echo "</br> <script>console.log(".$cuff_2.") </script>";
                  $cuff_3 = $data_form[32]['value'];
                  //echo "</br> <script>console.log(".$cuff_3.") </script>";
                  $cuff_4 = $data_form[33]['value'];
                  //echo "</br> <script>console.log(".$cuff_4.") </script>";
                  $cuff_5 = $data_form[34]['value'];
                  //echo "</br> <script>console.log(".$cuff_5.") </script>";
                  $cuff_low = $data_form[35]['value'];
                  //echo "</br> <script>console.log(".$cuff_low.") </script>";
                  $cuff_mid = $data_form[36]['value'];
                  //echo "</br> <script>console.log(".$cuff_mid.") </script>";
                  $cuff_high = $data_form[37]['value'];
                  //echo "</br> <script>console.log(".$cuff_high.") </script>";
                  
                  $formerHeight_1 = $data_form[38]['value'];
                  //echo "</br> <script>console.log(".$formerHeight_1.") </script>";
                  $formerHeight_2 = $data_form[39]['value'];
                  //echo "</br> <script>console.log(".$formerHeight_2.") </script>";
                  $formerHeight_3 = $data_form[40]['value'];
                  //echo "</br> <script>console.log(".$formerHeight_3.") </script>";
                  $formerHeight_4 = $data_form[41]['value'];
                  //echo "</br> <script>console.log(".$formerHeight_4.") </script>";
                  $formerHeight_5 = $data_form[42]['value'];
                  //echo "</br> <script>console.log(".$formerHeight_5.") </script>";
                  $formerHeight_low = $data_form[43]['value'];
                  //echo "</br> <script>console.log(".$formerHeight_low.") </script>";
                  $formerHeight_mid = $data_form[44]['value'];
                  //echo "</br> <script>console.log(".$formerHeight_mid.") </script>";
                  $formerHeight_high = $data_form[45]['value'];
                  //echo "</br> <script>console.log(".$formerHeight_high.") </script>";
                  
                  $outerBase_1 = $data_form[46]['value'];
                  //echo "</br> <script>console.log(".$outerBase_1.") </script>";
                  $outerBase_2 = $data_form[47]['value'];
                  //echo "</br> <script>console.log(".$outerBase_2.") </script>";
                  $outerBase_3 = $data_form[48]['value'];
                  //echo "</br> <script>console.log(".$outerBase_3.") </script>";
                  $outerBase_4 = $data_form[49]['value'];
                  //echo "</br> <script>console.log(".$outerBase_4.") </script>";
                  $outerBase_5 = $data_form[50]['value'];
                  //echo "</br> <script>console.log(".$outerBase_5.") </script>";
                  $outerBase_low = $data_form[51]['value'];
                  //echo "</br> <script>console.log(".$outerBase_low.") </script>";
                  $outerBase_mid = $data_form[52]['value'];
                  //echo "</br> <script>console.log(".$outerBase_mid.") </script>";
                  $outerBase_high = $data_form[53]['value'];
                  //echo "</br> <script>console.log(".$outerBase_high.") </script>";
                  
                  $palmCircumference_1 = $data_form[54]['value'];
                  //echo "</br> <script>console.log(".$palmCircumference_1.") </script>";
                  $palmCircumference_2 = $data_form[55]['value'];
                  //echo "</br> <script>console.log(".$palmCircumference_2.") </script>";
                  $palmCircumference_3 = $data_form[56]['value'];
                  //echo "</br> <script>console.log(".$palmCircumference_3.") </script>";
                  $palmCircumference_4 = $data_form[57]['value'];
                  //echo "</br> <script>console.log(".$palmCircumference_4.") </script>";
                  $palmCircumference_5 = $data_form[58]['value'];
                  //echo "</br> <script>console.log(".$palmCircumference_5.") </script>";
                  $palmCircumference_low = $data_form[59]['value'];
                  //echo "</br> <script>console.log(".$palmCircumference_low.") </script>";
                  $palmCircumference_mid = $data_form[60]['value'];
                  //echo "</br> <script>console.log(".$palmCircumference_mid.") </script>";
                  $palmCircumference_high = $data_form[61]['value'];
                  //echo "</br> <script>console.log(".$palmCircumference_high.") </script>";
                  
                  $spanWidth_1 = $data_form[62]['value'];
                  //echo "</br> <script>console.log(".$spanWidth_1.") </script>";
                  $spanWidth_2 = $data_form[63]['value'];
                  //echo "</br> <script>console.log(".$spanWidth_2.") </script>";
                  $spanWidth_3 = $data_form[64]['value'];
                  //echo "</br> <script>console.log(".$spanWidth_3.") </script>";
                  $spanWidth_4 = $data_form[65]['value'];
                  //echo "</br> <script>console.log(".$spanWidth_4.") </script>";
                  $spanWidth_5 = $data_form[66]['value'];
                  //echo "</br> <script>console.log(".$spanWidth_5.") </script>";
                  $spanWidth_low = $data_form[67]['value'];
                  //echo "</br> <script>console.log(".$spanWidth_low.") </script>";
                  $spanWidth_mid = $data_form[68]['value'];
                  //echo "</br> <script>console.log(".$spanWidth_mid.") </script>";
                  $spanWidth_high = $data_form[69]['value'];
                  //echo "</br> <script>console.log(".$spanWidth_high.") </script>";
                  
                  $wristCircumference_1 = $data_form[70]['value'];
                  //echo "</br> <script>console.log(".$wristCircumference_1.") </script>";
                  $wristCircumference_2 = $data_form[71]['value'];
                  //echo "</br> <script>console.log(".$wristCircumference_2.") </script>";
                  $wristCircumference_3 = $data_form[72]['value'];
                  //echo "</br> <script>console.log(".$wristCircumference_3.") </script>";
                  $wristCircumference_4 = $data_form[73]['value'];
                  //echo "</br> <script>console.log(".$wristCircumference_4.") </script>";
                  $wristCircumference_5 = $data_form[74]['value'];
                  //echo "</br> <script>console.log(".$wristCircumference_5.") </script>";
                  $wristCircumference_low = $data_form[75]['value'];
                  //echo "</br> <script>console.log(".$wristCircumference_low.") </script>";
                  $wristCircumference_mid = $data_form[76]['value'];
                  //echo "</br> <script>console.log(".$wristCircumference_mid.") </script>";
                  $wristCircumference_high = $data_form[77]['value'];
                  //echo "</br> <script>console.log(".$wristCircumference_high.") </script>";
                  
                  $baseThickness_1 = $data_form[78]['value'];
                  //echo "</br> <script>console.log(".$baseThickness_1.") </script>";
                  $baseThickness_2 = $data_form[79]['value'];
                  //echo "</br> <script>console.log(".$baseThickness_2.") </script>";
                  $baseThickness_3 = $data_form[80]['value'];
                  //echo "</br> <script>console.log(".$baseThickness_3.") </script>";
                  $baseThickness_4 = $data_form[81]['value'];
                  //echo "</br> <script>console.log(".$baseThickness_4.") </script>";
                  $baseThickness_5 = $data_form[82]['value'];
                  //echo "</br> <script>console.log(".$baseThickness_5.") </script>";
                  $baseThickness_low = $data_form[83]['value'];
                  //echo "</br> <script>console.log(".$baseThickness_low.") </script>";
                  $baseThickness_mid = $data_form[84]['value'];
                  //echo "</br> <script>console.log(".$baseThickness_mid.") </script>";
                  $baseThickness_high = $data_form[85]['value'];
                  //echo "</br> <script>console.log(".$baseThickness_high.") </script>";
                  
                  $fingerLengthF1_1 = $data_form[86]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF1_1.") </script>";
                  $fingerLengthF1_2 = $data_form[87]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF1_2.") </script>";
                  $fingerLengthF1_3 = $data_form[88]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF1_3.") </script>";
                  $fingerLengthF1_4 = $data_form[89]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF1_4.") </script>";
                  $fingerLengthF1_5 = $data_form[90]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF1_5.") </script>";
                  $fingerLengthF1_low = $data_form[91]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF1_low.") </script>";
                  $fingerLengthF1_mid = $data_form[92]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF1_mid.") </script>";
                  $fingerLengthF1_high = $data_form[93]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF1_high.") </script>";

                  $fingerLengthF2_1 = $data_form[94]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF2_1.") </script>";
                  $fingerLengthF2_2 = $data_form[95]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF2_2.") </script>";
                  $fingerLengthF2_3 = $data_form[96]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF2_3.") </script>";
                  $fingerLengthF2_4 = $data_form[97]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF2_4.") </script>";
                  $fingerLengthF2_5 = $data_form[98]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF2_5.") </script>";
                  $fingerLengthF2_low = $data_form[99]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF2_low.") </script>";
                  $fingerLengthF2_mid = $data_form[100]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF2_mid.") </script>";
                  $fingerLengthF2_high = $data_form[101]['value'];
                  //echo "</br> <script>console.log(".$fingerLengthF2_high.") </script>";
                  
                  $firstLengthF3_1 = $data_form[102]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF3_1.") </script>";
                  $firstLengthF3_2 = $data_form[103]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF3_2.") </script>";
                  $firstLengthF3_3 = $data_form[104]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF3_3.") </script>";
                  $firstLengthF3_4 = $data_form[105]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF3_4.") </script>";
                  $firstLengthF3_5 = $data_form[106]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF3_5.") </script>";
                  $firstLengthF3_low = $data_form[107]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF3_low.") </script>";
                  $firstLengthF3_mid = $data_form[108]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF3_mid.") </script>";
                  $firstLengthF3_high = $data_form[109]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF3_high.") </script>";
                  
                  $firstLengthF4_1 = $data_form[110]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF4_1.") </script>";
                  $firstLengthF4_2 = $data_form[111]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF4_2.") </script>";
                  $firstLengthF4_3 = $data_form[112]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF4_3.") </script>";
                  $firstLengthF4_4 = $data_form[113]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF4_4.") </script>";
                  $firstLengthF4_5 = $data_form[114]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF4_5.") </script>";
                  $firstLengthF4_low = $data_form[115]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF4_low.") </script>";
                  $firstLengthF4_mid = $data_form[116]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF4_mid.") </script>";
                  $firstLengthF4_high = $data_form[117]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF4_high.") </script>";
                  
                  $firstLengthF5_1 = $data_form[118]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF5_1.") </script>";
                  $firstLengthF5_2 = $data_form[119]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF5_2.") </script>";
                  $firstLengthF5_3 = $data_form[120]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF5_3.") </script>";
                  $firstLengthF5_4 = $data_form[121]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF5_4.") </script>";
                  $firstLengthF5_5 = $data_form[122]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF5_5.") </script>";
                  $firstLengthF5_low = $data_form[123]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF5_low.") </script>";
                  $firstLengthF5_mid = $data_form[124]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF5_mid.") </script>";
                  $firstLengthF5_high = $data_form[125]['value'];
                  //echo "</br> <script>console.log(".$firstLengthF5_high.") </script>";

                  $firstCircumferenceF1_1 = $data_form[126]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF1_1.") </script>";
                  $firstCircumferenceF1_2 = $data_form[127]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF1_2.") </script>";
                  $firstCircumferenceF1_3 = $data_form[128]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF1_3.") </script>";
                  $firstCircumferenceF1_4 = $data_form[129]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF1_4.") </script>";
                  $firstCircumferenceF1_5 = $data_form[130]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF1_5.") </script>";
                  $firstCircumferenceF1_low = $data_form[131]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF1_low.") </script>";
                  $firstCircumferenceF1_mid = $data_form[132]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF1_mid.") </script>";
                  $firstCircumferenceF1_high = $data_form[133]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF1_high.") </script>";
                  
                  $firstCircumferenceF2_1 = $data_form[134]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF2_1.") </script>";
                  $firstCircumferenceF2_2 = $data_form[135]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF2_2.") </script>";
                  $firstCircumferenceF2_3 = $data_form[136]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF2_3.") </script>";
                  $firstCircumferenceF2_4 = $data_form[137]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF2_4.") </script>";
                  $firstCircumferenceF2_5 = $data_form[138]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF2_5.") </script>";
                  $firstCircumferenceF2_low = $data_form[139]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF2_low.") </script>";
                  $firstCircumferenceF2_mid = $data_form[140]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF2_mid.") </script>";
                  $firstCircumferenceF2_high = $data_form[141]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF2_high.") </script>";
                  
                  $firstCircumferenceF3_1 = $data_form[142]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF3_1.") </script>";
                  $firstCircumferenceF3_2 = $data_form[143]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF3_2.") </script>";
                  $firstCircumferenceF3_3 = $data_form[144]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF3_3.") </script>";
                  $firstCircumferenceF3_4 = $data_form[145]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF3_4.") </script>";
                  $firstCircumferenceF3_5 = $data_form[146]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF3_5.") </script>";
                  $firstCircumferenceF3_low = $data_form[147]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF3_low.") </script>";
                  $firstCircumferenceF3_mid = $data_form[148]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF3_mid.") </script>";
                  $firstCircumferenceF3_high = $data_form[149]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF3_high.") </script>";
                  
                  $firstCircumferenceF4_1 = $data_form[150]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF4_1.") </script>";
                  $firstCircumferenceF4_2 = $data_form[151]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF4_2.") </script>";
                  $firstCircumferenceF4_3 = $data_form[152]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF4_3.") </script>";
                  $firstCircumferenceF4_4 = $data_form[153]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF4_4.") </script>";
                  $firstCircumferenceF4_5 = $data_form[154]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF4_5.") </script>";
                  $firstCircumferenceF4_low = $data_form[155]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF4_low.") </script>";
                  $firstCircumferenceF4_mid = $data_form[156]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF4_mid.") </script>";
                  $firstCircumferenceF4_high = $data_form[157]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF4_high.") </script>";
                  
                  $firstCircumferenceF5_1 = $data_form[158]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF5_1.") </script>";
                  $firstCircumferenceF5_2 = $data_form[159]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF5_2.") </script>";
                  $firstCircumferenceF5_3 = $data_form[160]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF5_3.") </script>";
                  $firstCircumferenceF5_4 = $data_form[161]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF5_4.") </script>";
                  $firstCircumferenceF5_5 = $data_form[162]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF5_5.") </script>";
                  $firstCircumferenceF5_low = $data_form[163]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF5_low.") </script>";
                  $firstCircumferenceF5_mid = $data_form[164]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF5_mid.") </script>";
                  $firstCircumferenceF5_high = $data_form[165]['value'];
                  //echo "</br> <script>console.log(".$firstCircumferenceF5_high.") </script>";

                  
                  $textureLengthF1_1 = $data_form[166]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF1_1.") </script>";
                  $textureLengthF1_2 = $data_form[167]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF1_2.") </script>";
                  $textureLengthF1_3 = $data_form[168]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF1_3.") </script>";
                  $textureLengthF1_4 = $data_form[169]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF1_4.") </script>";
                  $textureLengthF1_5 = $data_form[170]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF1_5.") </script>";
                  $textureLengthF1_low = $data_form[171]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF1_low.") </script>";
                  $textureLengthF1_mid = $data_form[172]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF1_mid.") </script>";
                  $textureLengthF1_high = $data_form[173]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF1_high.") </script>";

                  $textureLengthF2_1 = $data_form[174]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF2_1.") </script>";
                  $textureLengthF2_2 = $data_form[175]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF2_2.") </script>";
                  $textureLengthF2_3 = $data_form[176]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF2_3.") </script>";
                  $textureLengthF2_4 = $data_form[177]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF2_4.") </script>";
                  $textureLengthF2_5 = $data_form[178]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF2_5.") </script>";
                  $textureLengthF2_low = $data_form[179]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF2_low.") </script>";
                  $textureLengthF2_mid = $data_form[180]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF2_mid.") </script>";
                  $textureLengthF2_high = $data_form[181]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF2_high.") </script>";

                  $textureLengthF3_1 = $data_form[182]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF3_1.") </script>";
                  $textureLengthF3_2 = $data_form[183]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF3_2.") </script>";
                  $textureLengthF3_3 = $data_form[184]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF3_3.") </script>";
                  $textureLengthF3_4 = $data_form[185]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF3_4.") </script>";
                  $textureLengthF3_5 = $data_form[186]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF3_5.") </script>";
                  $textureLengthF3_low = $data_form[187]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF3_low.") </script>";
                  $textureLengthF3_mid = $data_form[188]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF3_mid.") </script>";
                  $textureLengthF3_high = $data_form[189]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF3_high.") </script>";

                  $textureLengthF4_1 = $data_form[190]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF4_1.") </script>";
                  $textureLengthF4_2 = $data_form[191]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF4_2.") </script>";
                  $textureLengthF4_3 = $data_form[192]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF4_3.") </script>";
                  $textureLengthF4_4 = $data_form[193]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF4_4.") </script>";
                  $textureLengthF4_5 = $data_form[194]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF4_5.") </script>";
                  $textureLengthF4_low = $data_form[195]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF4_low.") </script>";
                  $textureLengthF4_mid = $data_form[196]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF4_mid.") </script>";
                  $textureLengthF4_high = $data_form[197]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF4_high.") </script>";

                  $textureLengthF5_1 = $data_form[198]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF5_1.") </script>";
                  $textureLengthF5_2 = $data_form[199]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF5_2.") </script>";
                  $textureLengthF5_3 = $data_form[200]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF5_3.") </script>";
                  $textureLengthF5_4 = $data_form[201]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF5_4.") </script>";
                  $textureLengthF5_5 = $data_form[202]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF5_5.") </script>";
                  $textureLengthF5_low = $data_form[203]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF5_low.") </script>";
                  $textureLengthF5_mid = $data_form[204]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF5_mid.") </script>";
                  $textureLengthF5_high = $data_form[205]['value'];
                  //echo "</br> <script>console.log(".$textureLengthF5_high.") </script>";

                  $palmFlying_1 = $data_form[206]['value'];
                  //echo "</br> <script>console.log(".$palmFlying_1.") </script>";
                  $palmFlying_2 = $data_form[207]['value'];
                  //echo "</br> <script>console.log(".$palmFlying_2.") </script>";
                  $palmFlying_3 = $data_form[208]['value'];
                  //echo "</br> <script>console.log(".$palmFlying_3.") </script>";
                  $palmFlying_4 = $data_form[209]['value'];
                  //echo "</br> <script>console.log(".$palmFlying_4.") </script>";
                  $palmFlying_5 = $data_form[210]['value'];
                  //echo "</br> <script>console.log(".$palmFlying_5.") </script>";
                  $palmFlying_low = $data_form[211]['value'];
                  //echo "</br> <script>console.log(".$palmFlying_low.") </script>";
                  $palmFlying_mid = $data_form[212]['value'];
                  //echo "</br> <script>console.log(".$palmFlying_mid.") </script>";
                  $palmFlying_high = $data_form[213]['value'];
                  //echo "</br> <script>console.log(".$palmFlying_high.") </script>";

                  $palmTextured_1 = $data_form[214]['value'];
                  //echo "</br> <script>console.log(".$palmTextured_1.") </script>";
                  $palmTextured_2 = $data_form[215]['value'];
                  //echo "</br> <script>console.log(".$palmTextured_2.") </script>";
                  $palmTextured_3 = $data_form[216]['value'];
                  //echo "</br> <script>console.log(".$palmTextured_3.") </script>";
                  $palmTextured_4 = $data_form[217]['value'];
                  //echo "</br> <script>console.log(".$palmTextured_4.") </script>";
                  $palmTextured_5 = $data_form[218]['value'];
                  //echo "</br> <script>console.log(".$palmTextured_5.") </script>";
                  $palmTextured_low = $data_form[219]['value'];
                  //echo "</br> <script>console.log(".$palmTextured_low.") </script>";
                  $palmTextured_mid = $data_form[220]['value'];
                  //echo "</br> <script>console.log(".$palmTextured_mid.") </script>";
                  $palmTextured_high = $data_form[221]['value'];
                  //echo "</br> <script>console.log(".$palmTextured_high.") </script>";

                  $disposition_1 = $data_form[222]['value'];
                  //echo "</br> <script>console.log(".$disposition_1.") </script>";
                  $disposition_2 = $data_form[223]['value'];
                  //echo "</br> <script>console.log(".$disposition_2.") </script>";
                  $disposition_3 = $data_form[224]['value'];
                  //echo "</br> <script>console.log(".$disposition_3.") </script>";
                  $disposition_4 = $data_form[225]['value'];
                  //echo "</br> <script>console.log(".$disposition_4.") </script>";
                  $disposition_5 = $data_form[226]['value'];
                  //echo "</br> <script>console.log(".$disposition_5.") </script>";
                  $disposition_low = null;
                  //echo "</br> <script>console.log(".$disposition_low.") </script>";
                  $disposition_mid = null;
                  //echo "</br> <script>console.log(".$disposition_mid.") </script>";
                  $disposition_high = null;
                  //echo "</br> <script>console.log(".$disposition_high.") </script>";


                  
                  $sampleResult_arr = array(
                    array( 
                        'TestID'=> '1',
                        'Sample_1'=> $mouldID_1,
                        'Sample_2'=> $mouldID_2,
                        'Sample_3'=> $mouldID_3,
                        'Sample_4'=> $mouldID_4,
                        'Sample_5'=> $mouldID_5,
                        'Sample_low'=> $mouldID_low,
                        'Sample_mid'=> $mouldID_mid,
                        'Sample_high'=> $mouldID_high,
                    )
                    ,array( 
                        'TestID'=> '2',
                        'Sample_1'=> $formerWeight_1,
                        'Sample_2'=> $formerWeight_2,
                        'Sample_3'=> $formerWeight_3,
                        'Sample_4'=> $formerWeight_4,
                        'Sample_5'=> $formerWeight_5,
                        'Sample_low'=> $formerWeight_low,
                        'Sample_mid'=> $formerWeight_mid,
                        'Sample_high'=> $formerWeight_high,
                    )
                    ,array( 
                        'TestID'=> '3',
                        'Sample_1'=> $bendingL_1,
                        'Sample_2'=> $bendingL_2,
                        'Sample_3'=> $bendingL_3,
                        'Sample_4'=> $bendingL_4,
                        'Sample_5'=> $bendingL_5,
                        'Sample_low'=> $bendingL_low,
                        'Sample_mid'=> $bendingL_mid,
                        'Sample_high'=> $bendingL_high,
                    )
                    ,array( 
                        'TestID'=> '5',
                        'Sample_1'=> $cuff_1,
                        'Sample_2'=> $cuff_2,
                        'Sample_3'=> $cuff_3,
                        'Sample_4'=> $cuff_4,
                        'Sample_5'=> $cuff_5,
                        'Sample_low'=> $cuff_low,
                        'Sample_mid'=> $cuff_mid,
                        'Sample_high'=> $cuff_high,
                    )
                    ,array( 
                        'TestID'=> '6',
                        'Sample_1'=> $formerHeight_1,
                        'Sample_2'=> $formerHeight_2,
                        'Sample_3'=> $formerHeight_3,
                        'Sample_4'=> $formerHeight_4,
                        'Sample_5'=> $formerHeight_5,
                        'Sample_low'=> $formerHeight_low,
                        'Sample_mid'=> $formerHeight_mid,
                        'Sample_high'=> $formerHeight_high,
                    )
                    ,array( 
                        'TestID'=> '7',
                        'Sample_1'=> $outerBase_1,
                        'Sample_2'=> $outerBase_2,
                        'Sample_3'=> $outerBase_3,
                        'Sample_4'=> $outerBase_4,
                        'Sample_5'=> $outerBase_5,
                        'Sample_low'=> $outerBase_low,
                        'Sample_mid'=> $outerBase_mid,
                        'Sample_high'=> $outerBase_high,
                    )
                    ,array( 
                        'TestID'=> '8',
                        'Sample_1'=> $palmCircumference_1,
                        'Sample_2'=> $palmCircumference_2,
                        'Sample_3'=> $palmCircumference_3,
                        'Sample_4'=> $palmCircumference_4,
                        'Sample_5'=> $palmCircumference_5,
                        'Sample_low'=> $palmCircumference_low,
                        'Sample_mid'=> $palmCircumference_mid,
                        'Sample_high'=> $palmCircumference_high,
                    )
                    ,array( 
                        'TestID'=> '9',
                        'Sample_1'=> $spanWidth_1,
                        'Sample_2'=> $spanWidth_2,
                        'Sample_3'=> $spanWidth_3,
                        'Sample_4'=> $spanWidth_4,
                        'Sample_5'=> $spanWidth_5,
                        'Sample_low'=> $spanWidth_low,
                        'Sample_mid'=> $spanWidth_mid,
                        'Sample_high'=> $spanWidth_high,
                    )
                    ,array( 
                        'TestID'=> '10',
                        'Sample_1'=> $wristCircumference_1,
                        'Sample_2'=> $wristCircumference_2,
                        'Sample_3'=> $wristCircumference_3,
                        'Sample_4'=> $wristCircumference_4,
                        'Sample_5'=> $wristCircumference_5,
                        'Sample_low'=> $wristCircumference_low,
                        'Sample_mid'=> $wristCircumference_mid,
                        'Sample_high'=> $wristCircumference_high,
                    )
                    ,array( 
                        'TestID'=> '11',
                        'Sample_1'=> $baseThickness_1,
                        'Sample_2'=> $baseThickness_2,
                        'Sample_3'=> $baseThickness_3,
                        'Sample_4'=> $baseThickness_4,
                        'Sample_5'=> $baseThickness_5,
                        'Sample_low'=> $baseThickness_low,
                        'Sample_mid'=> $baseThickness_mid,
                        'Sample_high'=> $baseThickness_high,
                    )
                    ,array( 
                        'TestID'=> '12',
                        'Sample_1'=> $fingerLengthF1_1,
                        'Sample_2'=> $fingerLengthF1_2,
                        'Sample_3'=> $fingerLengthF1_3,
                        'Sample_4'=> $fingerLengthF1_4,
                        'Sample_5'=> $fingerLengthF1_5,
                        'Sample_low'=> $fingerLengthF1_low,
                        'Sample_mid'=> $fingerLengthF1_mid,
                        'Sample_high'=> $fingerLengthF1_high,
                    )
                    ,array( 
                        'TestID'=> '13',
                        'Sample_1'=> $fingerLengthF2_1,
                        'Sample_2'=> $fingerLengthF2_2,
                        'Sample_3'=> $fingerLengthF2_3,
                        'Sample_4'=> $fingerLengthF2_4,
                        'Sample_5'=> $fingerLengthF2_5,
                        'Sample_low'=> $fingerLengthF2_low,
                        'Sample_mid'=> $fingerLengthF2_mid,
                        'Sample_high'=> $fingerLengthF2_high,
                    )
                    ,array( 
                        'TestID'=> '14',
                        'Sample_1'=> $firstLengthF3_1,
                        'Sample_2'=> $firstLengthF3_2,
                        'Sample_3'=> $firstLengthF3_3,
                        'Sample_4'=> $firstLengthF3_4,
                        'Sample_5'=> $firstLengthF3_5,
                        'Sample_low'=> $firstLengthF3_low,
                        'Sample_mid'=> $firstLengthF3_mid,
                        'Sample_high'=> $firstLengthF3_high,
                    )
                    ,array( 
                        'TestID'=> '15',
                        'Sample_1'=> $firstLengthF4_1,
                        'Sample_2'=> $firstLengthF4_2,
                        'Sample_3'=> $firstLengthF4_3,
                        'Sample_4'=> $firstLengthF4_4,
                        'Sample_5'=> $firstLengthF4_5,
                        'Sample_low'=> $firstLengthF4_low,
                        'Sample_mid'=> $firstLengthF4_mid,
                        'Sample_high'=> $firstLengthF4_high,
                    )
                    ,array( 
                        'TestID'=> '16',
                        'Sample_1'=> $firstLengthF5_1,
                        'Sample_2'=> $firstLengthF5_2,
                        'Sample_3'=> $firstLengthF5_3,
                        'Sample_4'=> $firstLengthF5_4,
                        'Sample_5'=> $firstLengthF5_5,
                        'Sample_low'=> $firstLengthF5_low,
                        'Sample_mid'=> $firstLengthF5_mid,
                        'Sample_high'=> $firstLengthF5_high,
                    )
                    ,array( 
                        'TestID'=> '17',
                        'Sample_1'=> $firstCircumferenceF1_1,
                        'Sample_2'=> $firstCircumferenceF1_2,
                        'Sample_3'=> $firstCircumferenceF1_3,
                        'Sample_4'=> $firstCircumferenceF1_4,
                        'Sample_5'=> $firstCircumferenceF1_5,
                        'Sample_low'=> $firstCircumferenceF1_low,
                        'Sample_mid'=> $firstCircumferenceF1_mid,
                        'Sample_high'=> $firstCircumferenceF1_high,
                    )
                    ,array( 
                        'TestID'=> '18',
                        'Sample_1'=> $firstCircumferenceF2_1,
                        'Sample_2'=> $firstCircumferenceF2_2,
                        'Sample_3'=> $firstCircumferenceF2_3,
                        'Sample_4'=> $firstCircumferenceF2_4,
                        'Sample_5'=> $firstCircumferenceF2_5,
                        'Sample_low'=> $firstCircumferenceF2_low,
                        'Sample_mid'=> $firstCircumferenceF2_mid,
                        'Sample_high'=> $firstCircumferenceF2_high,
                    )
                    ,array( 
                        'TestID'=> '19',
                        'Sample_1'=> $firstCircumferenceF3_1,
                        'Sample_2'=> $firstCircumferenceF3_2,
                        'Sample_3'=> $firstCircumferenceF3_3,
                        'Sample_4'=> $firstCircumferenceF3_4,
                        'Sample_5'=> $firstCircumferenceF3_5,
                        'Sample_low'=> $firstCircumferenceF3_low,
                        'Sample_mid'=> $firstCircumferenceF3_mid,
                        'Sample_high'=> $firstCircumferenceF3_high,
                    )
                    ,array( 
                        'TestID'=> '20',
                        'Sample_1'=> $firstCircumferenceF4_1,
                        'Sample_2'=> $firstCircumferenceF4_2,
                        'Sample_3'=> $firstCircumferenceF4_3,
                        'Sample_4'=> $firstCircumferenceF4_4,
                        'Sample_5'=> $firstCircumferenceF4_5,
                        'Sample_low'=> $firstCircumferenceF4_low,
                        'Sample_mid'=> $firstCircumferenceF4_mid,
                        'Sample_high'=> $firstCircumferenceF4_high,
                    )
                    ,array( 
                        'TestID'=> '21',
                        'Sample_1'=> $firstCircumferenceF5_1,
                        'Sample_2'=> $firstCircumferenceF5_2,
                        'Sample_3'=> $firstCircumferenceF5_3,
                        'Sample_4'=> $firstCircumferenceF5_4,
                        'Sample_5'=> $firstCircumferenceF5_5,
                        'Sample_low'=> $firstCircumferenceF5_low,
                        'Sample_mid'=> $firstCircumferenceF5_mid,
                        'Sample_high'=> $firstCircumferenceF5_high,
                    )
                    ,array( 
                        'TestID'=> '22',
                        'Sample_1'=> $textureLengthF1_1,
                        'Sample_2'=> $textureLengthF1_2,
                        'Sample_3'=> $textureLengthF1_3,
                        'Sample_4'=> $textureLengthF1_4,
                        'Sample_5'=> $textureLengthF1_5,
                        'Sample_low'=> $textureLengthF1_low,
                        'Sample_mid'=> $textureLengthF1_mid,
                        'Sample_high'=> $textureLengthF1_high,
                    )
                    ,array( 
                        'TestID'=> '23',
                        'Sample_1'=> $textureLengthF2_1,
                        'Sample_2'=> $textureLengthF2_2,
                        'Sample_3'=> $textureLengthF2_3,
                        'Sample_4'=> $textureLengthF2_4,
                        'Sample_5'=> $textureLengthF2_5,
                        'Sample_low'=> $textureLengthF2_low,
                        'Sample_mid'=> $textureLengthF2_mid,
                        'Sample_high'=> $textureLengthF2_high,
                    )
                    ,array( 
                        'TestID'=> '24',
                        'Sample_1'=> $textureLengthF3_1,
                        'Sample_2'=> $textureLengthF3_2,
                        'Sample_3'=> $textureLengthF3_3,
                        'Sample_4'=> $textureLengthF3_4,
                        'Sample_5'=> $textureLengthF3_5,
                        'Sample_low'=> $textureLengthF3_low,
                        'Sample_mid'=> $textureLengthF3_mid,
                        'Sample_high'=> $textureLengthF3_high,
                    )
                    ,array( 
                        'TestID'=> '25',
                        'Sample_1'=> $textureLengthF4_1,
                        'Sample_2'=> $textureLengthF4_2,
                        'Sample_3'=> $textureLengthF4_3,
                        'Sample_4'=> $textureLengthF4_4,
                        'Sample_5'=> $textureLengthF4_5,
                        'Sample_low'=> $textureLengthF4_low,
                        'Sample_mid'=> $textureLengthF4_mid,
                        'Sample_high'=> $textureLengthF4_high,
                    )
                    ,array( 
                        'TestID'=> '26',
                        'Sample_1'=> $textureLengthF5_1,
                        'Sample_2'=> $textureLengthF5_2,
                        'Sample_3'=> $textureLengthF5_3,
                        'Sample_4'=> $textureLengthF5_4,
                        'Sample_5'=> $textureLengthF5_5,
                        'Sample_low'=> $textureLengthF5_low,
                        'Sample_mid'=> $textureLengthF5_mid,
                        'Sample_high'=> $textureLengthF5_high,
                    )
                    ,array( 
                        'TestID'=> '27',
                        'Sample_1'=> $palmFlying_1,
                        'Sample_2'=> $palmFlying_2,
                        'Sample_3'=> $palmFlying_3,
                        'Sample_4'=> $palmFlying_4,
                        'Sample_5'=> $palmFlying_5,
                        'Sample_low'=> $palmFlying_low,
                        'Sample_mid'=> $palmFlying_mid,
                        'Sample_high'=> $palmFlying_high,
                    )
                    ,array( 
                        'TestID'=> '28',
                        'Sample_1'=> $palmTextured_1,
                        'Sample_2'=> $palmTextured_2,
                        'Sample_3'=> $palmTextured_3,
                        'Sample_4'=> $palmTextured_4,
                        'Sample_5'=> $palmTextured_5,
                        'Sample_low'=> $palmTextured_low,
                        'Sample_mid'=> $palmTextured_mid,
                        'Sample_high'=> $palmTextured_high,
                    )
                    ,array( 
                        'TestID'=> '29',
                        'Sample_1'=> $disposition_1,
                        'Sample_2'=> $disposition_2,
                        'Sample_3'=> $disposition_3,
                        'Sample_4'=> $disposition_4,
                        'Sample_5'=> $disposition_5,
                        'Sample_low'=> $disposition_low,
                        'Sample_mid'=> $disposition_mid,
                        'Sample_high'=> $disposition_high,
                    )
                );

                $sampleResult_JSON = json_encode($sampleResult_arr);

                  // "</br> <script>console.log(".$sampleResult_JSON.") </script>";


                  $overall_disposition = $data_form[227]['value'];
                //   echo "</br> <script>console.log(".$overall_disposition.") </script>";
                  $inspectedBY = $data_form[228]['value'];
                //   echo "</br> <script>console.log(".$inspectedBY.") </script>";
                  $verifiedby = $data_form[229]['value'];
                //   echo "</br> <script>console.log(".$verifiedby.") </script>";
                  $verified_date = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$data_form[230]['value'])));
                //   echo "</br> <script>console.log(".$verified_date.") </script>";

                  $query = "{CALL SP_Update_Dimension(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
                  echo "</br> <script>console.log(".$query.") </script>";  
                  $stmt = $connect->prepare($query);
                  $stmt->bindParam(1, $RecordID, PDO::PARAM_INT);
                  echo "</br> <script>console.log(".$RecordID.") </script>";
                  $stmt->bindParam(2, $Dimension_ID, PDO::PARAM_INT);
                  echo "</br> <script>console.log(".$Dimension_ID.") </script>";
                  $stmt->bindParam(3, $batchnumber);
                  echo "</br> <script>console.log(".$batchnumber.") </script>";
                  $stmt->bindParam(4, $inspectionstage, PDO::PARAM_INT);
                  echo "</br> <script>console.log(".$inspectionstage.") </script>";
                  $stmt->bindParam(5, $formerheight);
                  echo "</br> <script>console.log(".$formerheight.") </script>";
                  $stmt->bindParam(6, $inspection_date);
                  echo "</br> <script>console.log(".$inspection_date.") </script>";
                  $stmt->bindParam(7, $rework);
                  echo "</br> <script>console.log(".$rework.") </script>";
                  $stmt->bindParam(8, $formertype, PDO::PARAM_INT);
                  echo "</br> <script>console.log(".$formertype.") </script>";
                  $stmt->bindParam(9, $size, PDO::PARAM_INT);
                  echo "</br> <script>console.log(".$size.") </script>";
                  $stmt->bindParam(10, $productcode, PDO::PARAM_INT);
                  echo "</br> <script>console.log(".$productcode.") </script>";
                  $stmt->bindParam(11, $productDate);
                  echo "</br> <script>console.log(".$productDate.") </script>";
                  $stmt->bindParam(12, $sampleResult_JSON);
                  echo "</br> <script>console.log(".$sampleResult_JSON.") </script>";
                  $stmt->bindParam(13, $overall_disposition);
                  echo "</br> <script>console.log(".$overall_disposition.") </script>";
                  $stmt->bindParam(14, $inspectedBY);
                  echo "</br> <script>console.log(".$inspectedBY.") </script>";
                  $stmt->bindParam(15, $verifiedby);
                  echo "</br> <script>console.log(".$verifiedby.") </script>";
                  $stmt->bindParam(16, $verified_date);
                  echo "</br> <script>console.log(".$verified_date.") </script>";
                  $submit = $stmt->execute();

                if($submit == 1){
                    echo 'SUCCESS';
                }else{
                    echo 'ERROR';
                }
                } else {}
               ?>