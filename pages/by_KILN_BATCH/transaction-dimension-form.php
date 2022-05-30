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
                    
                  $batchnumber = $data_form[0]['value'];
                   echo "</br>".$batchnumber;
                  $inspectionstage = $data_form[1]['value'];
                  // echo "</br>".$inspectionstage;
                  $formerheight = $data_form[2]['value'];
                  // echo "</br>".$formerheight;
                  $inspection_date = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$data_form[3]['value'])));
                  // echo "</br>".$inspection_date;
                  $rework = $data_form[4]['value'];
                  // echo "</br>".$rework;
                  $formertype = $data_form[5]['value'];
                  // echo "</br>".$formertype;
                  $size = $data_form[6]['value'];
                  // echo "</br>".$size;
                  $productcode = $data_form[7]['value'];
                  // echo "</br>".$productcode;
                  $productDate = $data_form[8]['value'];
                  // echo "</br>".$productDate;

                  $mouldID_1 = $data_form[9]['value'];
                  //  echo "</br>".$mouldID_1;
                  $mouldID_2 = $data_form[10]['value'];
                  //  echo "</br>".$mouldID_2;
                  $mouldID_3 = $data_form[11]['value'];
                  //  echo "</br>".$mouldID_3;
                  $mouldID_4 = $data_form[12]['value'];
                  //  echo "</br>".$mouldID_4;
                  $mouldID_5 = $data_form[13]['value'];
                  //  echo "</br>".$mouldID_5;
                  $mouldID_low = $data_form[14]['value'];
                  //  echo "</br>".$mouldID_low;
                  $mouldID_mid = $data_form[15]['value'];
                  //  echo "</br>".$mouldID_mid;
                  $mouldID_high = $data_form[16]['value'];
                  //  echo "</br>".$mouldID_high;


                  $formerWeight_1 = $data_form[17]['value'];
                  //  echo "</br>".$formerWeight_1;
                  $formerWeight_2 = $data_form[18]['value'];
                  //  echo "</br>".$formerWeight_2;
                  $formerWeight_3 = $data_form[19]['value'];
                  //  echo "</br>".$formerWeight_3;
                  $formerWeight_4 = $data_form[20]['value'];
                  //  echo "</br>".$formerWeight_4;
                  $formerWeight_5 = $data_form[21]['value'];
                  //  echo "</br>".$formerWeight_5;
                  $formerWeight_low = $data_form[22]['value'];
                  //  echo "</br>".$formerWeight_low;
                  $formerWeight_mid = $data_form[23]['value'];
                  //  echo "</br>".$formerWeight_mid;
                  $formerWeight_high = $data_form[24]['value'];
                  //  echo "</br>".$formerWeight_high;

                  $bendingL_1 = $data_form[25]['value'];
                  //  echo "</br>".$bendingL_1;
                  $bendingL_2 = $data_form[26]['value'];
                  //  echo "</br>".$bendingL_1;
                  $bendingL_3 = $data_form[27]['value'];
                  //  echo "</br>".$bendingL_3;
                  $bendingL_4 = $data_form[28]['value'];
                  //  echo "</br>".$bendingL_4;
                  $bendingL_5 = $data_form[29]['value'];
                  //  echo "</br>".$bendingL_5;
                  $bendingL_low = null;
                  //  echo "</br>".$bendingL_low;
                  $bendingL_mid = null;
                  //  echo "</br>".$bendingL_mid;
                  $bendingL_high = null;
                  //  echo "</br>".$bendingL_high;
                  
                  $cuff_1 = $data_form[30]['value'];
                  //  echo "</br>".$cuff_1;
                  $cuff_2 = $data_form[31]['value'];
                  //  echo "</br>".$cuff_2;
                  $cuff_3 = $data_form[32]['value'];
                  //  echo "</br>".$cuff_3;
                  $cuff_4 = $data_form[33]['value'];
                  //  echo "</br>".$cuff_4;
                  $cuff_5 = $data_form[34]['value'];
                  //  echo "</br>".$cuff_5;
                  $cuff_low = $data_form[35]['value'];
                  //  echo "</br>".$cuff_low;
                  $cuff_mid = $data_form[36]['value'];
                  //  echo "</br>".$cuff_mid;
                  $cuff_high = $data_form[37]['value'];
                  //  echo "</br>".$cuff_high;
                  
                  $formerHeight_1 = $data_form[38]['value'];
                  //  echo "</br>".$formerHeight_1;
                  $formerHeight_2 = $data_form[39]['value'];
                  //  echo "</br>".$formerHeight_2;
                  $formerHeight_3 = $data_form[40]['value'];
                  //  echo "</br>".$formerHeight_3;
                  $formerHeight_4 = $data_form[41]['value'];
                  //  echo "</br>".$formerHeight_4;
                  $formerHeight_5 = $data_form[42]['value'];
                  //  echo "</br>".$formerHeight_5;
                  $formerHeight_low = $data_form[43]['value'];
                  //  echo "</br>".$formerHeight_low;
                  $formerHeight_mid = $data_form[44]['value'];
                  //  echo "</br>".$formerHeight_mid;
                  $formerHeight_high = $data_form[45]['value'];
                  //  echo "</br>".$formerHeight_high;
                  
                  $outerBase_1 = $data_form[46]['value'];
                  //  echo "</br>".$outerBase_1;
                  $outerBase_2 = $data_form[47]['value'];
                  //  echo "</br>".$outerBase_2;
                  $outerBase_3 = $data_form[48]['value'];
                  //  echo "</br>".$outerBase_3;
                  $outerBase_4 = $data_form[49]['value'];
                  //  echo "</br>".$outerBase_4;
                  $outerBase_5 = $data_form[50]['value'];
                  //  echo "</br>".$outerBase_5;
                  $outerBase_low = $data_form[51]['value'];
                  //  echo "</br>".$outerBase_low;
                  $outerBase_mid = $data_form[52]['value'];
                  // echo "</br>".$outerBase_mid;
                  $outerBase_high = $data_form[53]['value'];
                  // echo "</br>".$outerBase_high;
                  
                  $palmCircumference_1 = $data_form[54]['value'];
                  // echo "</br>".$palmCircumference_1;
                  $palmCircumference_2 = $data_form[55]['value'];
                  // echo "</br>".$palmCircumference_2;
                  $palmCircumference_3 = $data_form[56]['value'];
                  // echo "</br>".$palmCircumference_3;
                  $palmCircumference_4 = $data_form[57]['value'];
                  // echo "</br>".$palmCircumference_4;
                  $palmCircumference_5 = $data_form[58]['value'];
                  // echo "</br>".$palmCircumference_5
                  $palmCircumference_low = $data_form[59]['value'];
                  // echo "</br>".$palmCircumference_low;
                  $palmCircumference_mid = $data_form[60]['value'];
                  // echo "</br>".$palmCircumference_mid;
                  $palmCircumference_high = $data_form[61]['value'];
                  // echo "</br>".$palmCircumference_high;
                  
                  $spanWidth_1 = $data_form[62]['value'];
                  // echo "</br>".$spanWidth_1;
                  $spanWidth_2 = $data_form[63]['value'];
                  // echo "</br>".$spanWidth_2;
                  $spanWidth_3 = $data_form[64]['value'];
                  // echo "</br>".$spanWidth_3;
                  $spanWidth_4 = $data_form[65]['value'];
                  // echo "</br>".$spanWidth_4;
                  $spanWidth_5 = $data_form[66]['value'];
                  // echo "</br>".$spanWidth_5;
                  $spanWidth_low = $data_form[67]['value'];
                  // echo "</br>".$spanWidth_low;
                  $spanWidth_mid = $data_form[68]['value'];
                  // echo "</br>".$spanWidth_mid;
                  $spanWidth_high = $data_form[69]['value'];
                  // echo "</br>".$spanWidth_high;
                  
                  $wristCircumference_1 = $data_form[70]['value'];
                  // echo "</br>".$wristCircumference_1;
                  $wristCircumference_2 = $data_form[71]['value'];
                  // echo "</br>".$wristCircumference_2;
                  $wristCircumference_3 = $data_form[72]['value'];
                  // echo "</br>".$wristCircumference_3;
                  $wristCircumference_4 = $data_form[73]['value'];
                  // echo "</br>".$wristCircumference_4;
                  $wristCircumference_5 = $data_form[74]['value'];
                  // echo "</br>".$wristCircumference_5;
                  $wristCircumference_low = $data_form[75]['value'];
                  // echo "</br>".$wristCircumference_low;
                  $wristCircumference_mid = $data_form[76]['value'];
                  // echo "</br>".$wristCircumference_mid;
                  $wristCircumference_high = $data_form[77]['value'];
                  // echo "</br>".$wristCircumference_high;
                  
                  $baseThickness_1 = $data_form[78]['value'];
                  // echo "</br>".$baseThickness_1;
                  $baseThickness_2 = $data_form[79]['value'];
                  // echo "</br>".$baseThickness_2;
                  $baseThickness_3 = $data_form[80]['value'];
                  // echo "</br>".$baseThickness_3;
                  $baseThickness_4 = $data_form[81]['value'];
                  // echo "</br>".$baseThickness_4;
                  $baseThickness_5 = $data_form[82]['value'];
                  // echo "</br>".$baseThickness_5;
                  $baseThickness_low = $data_form[83]['value'];
                  // echo "</br>".$baseThickness_low;
                  $baseThickness_mid = $data_form[84]['value'];
                  // echo "</br>".$baseThickness_mid;
                  $baseThickness_high = $data_form[85]['value'];
                  // echo "</br>".$baseThickness_high;
                  
                  $fingerLengthF1_1 = $data_form[86]['value'];
                  // echo "</br>".$fingerLengthF1_1;
                  $fingerLengthF1_2 = $data_form[87]['value'];
                  // echo "</br>".$fingerLengthF1_2;
                  $fingerLengthF1_3 = $data_form[88]['value'];
                  // echo "</br>".$fingerLengthF1_3;
                  $fingerLengthF1_4 = $data_form[89]['value'];
                  // echo "</br>".$fingerLengthF1_4;
                  $fingerLengthF1_5 = $data_form[90]['value'];
                  // echo "</br>".$fingerLengthF1_5;
                  $fingerLengthF1_low = $data_form[91]['value'];
                  // echo "</br>".$fingerLengthF1_low;
                  $fingerLengthF1_mid = $data_form[92]['value'];
                  // echo "</br>".$fingerLengthF1_mid;
                  $fingerLengthF1_high = $data_form[93]['value'];
                  // echo "</br>".$fingerLengthF1_high;
                  
                  $fingerLengthF2_1 = $data_form[94]['value'];
                  // echo "</br>".$fingerLengthF2_1;
                  $fingerLengthF2_2 = $data_form[95]['value'];
                  // echo "</br>".$fingerLengthF2_2;
                  $fingerLengthF2_3 = $data_form[96]['value'];
                  // echo "</br>".$fingerLengthF2_3;
                  $fingerLengthF2_4 = $data_form[97]['value'];
                  // echo "</br>".$fingerLengthF2_4;
                  $fingerLengthF2_5 = $data_form[98]['value'];
                  // echo "</br>".$fingerLengthF2_5;
                  $fingerLengthF2_low = $data_form[99]['value'];
                  // echo "</br>".$fingerLengthF2_low;
                  $fingerLengthF2_mid = $data_form[100]['value'];
                  // echo "</br>".$fingerLengthF2_mid;
                  $fingerLengthF2_high = $data_form[101]['value'];
                  // echo "</br>".$fingerLengthF2_high;
                  
                  $firstLengthF3_1 = $data_form[102]['value'];
                  // echo "</br>".$firstLengthF3_1;
                  $firstLengthF3_2 = $data_form[103]['value'];
                  // echo "</br>".$firstLengthF3_2;
                  $firstLengthF3_3 = $data_form[104]['value'];
                  // echo "</br>".$firstLengthF3_3;
                  $firstLengthF3_4 = $data_form[105]['value'];
                  // echo "</br>".$firstLengthF3_4;
                  $firstLengthF3_5 = $data_form[106]['value'];
                  // echo "</br>".$firstLengthF3_5;
                  $firstLengthF3_low = $data_form[107]['value'];
                  // echo "</br>".$firstLengthF3_low;
                  $firstLengthF3_mid = $data_form[108]['value'];
                  // echo "</br>".$firstLengthF3_mid;
                  $firstLengthF3_high = $data_form[109]['value'];
                  // echo "</br>".$firstLengthF3_high;
                  
                  $firstLengthF4_1 = $data_form[110]['value'];
                  // echo "</br>".$firstLengthF4_1;
                  $firstLengthF4_2 = $data_form[111]['value'];
                  // echo "</br>".$firstLengthF4_2;
                  $firstLengthF4_3 = $data_form[112]['value'];
                  // echo "</br>".$firstLengthF4_3;
                  $firstLengthF4_4 = $data_form[113]['value'];
                  // echo "</br>".$firstLengthF4_4;
                  $firstLengthF4_5 = $data_form[114]['value'];
                  // echo "</br>".$firstLengthF4_5;
                  $firstLengthF4_low = $data_form[115]['value'];
                  // echo "</br>".$firstLengthF4_low;
                  $firstLengthF4_mid = $data_form[116]['value'];
                  // echo "</br>".$firstLengthF4_mid;
                  $firstLengthF4_high = $data_form[117]['value'];
                  // echo "</br>".$firstLengthF4_high;
                  
                  $firstLengthF5_1 = $data_form[118]['value'];
                  // echo "</br>".$firstLengthF5_1;
                  $firstLengthF5_2 = $data_form[119]['value'];
                  // echo "</br>".$firstLengthF5_2;
                  $firstLengthF5_3 = $data_form[120]['value'];
                  // echo "</br>".$firstLengthF5_3;
                  $firstLengthF5_4 = $data_form[121]['value'];
                  // echo "</br>".$firstLengthF5_4;
                  $firstLengthF5_5 = $data_form[122]['value'];
                  // echo "</br>".$firstLengthF5_5;
                  $firstLengthF5_low = $data_form[123]['value'];
                  // echo "</br>".$firstLengthF5_low;
                  $firstLengthF5_mid = $data_form[124]['value'];
                  // echo "</br>".$firstLengthF5_mid;
                  $firstLengthF5_high = $data_form[125]['value'];
                  // echo "</br>".$firstLengthF5_high;

                  $firstCircumferenceF1_1 = $data_form[126]['value'];
                  // echo "</br>".$firstCircumferenceF1_1;
                  $firstCircumferenceF1_2 = $data_form[127]['value'];
                  // echo "</br>".$firstCircumferenceF1_2;
                  $firstCircumferenceF1_3 = $data_form[128]['value'];
                  // echo "</br>".$firstCircumferenceF1_3;
                  $firstCircumferenceF1_4 = $data_form[129]['value'];
                  // echo "</br>".$firstCircumferenceF1_4;
                  $firstCircumferenceF1_5 = $data_form[130]['value'];
                  // echo "</br>".$firstCircumferenceF1_5;
                  $firstCircumferenceF1_low = $data_form[131]['value'];
                  // echo "</br>".$firstCircumferenceF1_low;
                  $firstCircumferenceF1_mid = $data_form[132]['value'];
                  // echo "</br>".$firstCircumferenceF1_mid;
                  $firstCircumferenceF1_high = $data_form[133]['value'];
                  // echo "</br>".$firstCircumferenceF1_high;
                  
                  $firstCircumferenceF2_1 = $data_form[134]['value'];
                  // echo "</br>".$firstCircumferenceF2_1;
                  $firstCircumferenceF2_2 = $data_form[135]['value'];
                  // echo "</br>".$firstCircumferenceF2_2;
                  $firstCircumferenceF2_3 = $data_form[136]['value'];
                  // echo "</br>".$firstCircumferenceF2_3;
                  $firstCircumferenceF2_4 = $data_form[137]['value'];
                  // echo "</br>".$firstCircumferenceF2_4;
                  $firstCircumferenceF2_5 = $data_form[138]['value'];
                  // echo "</br>".$firstCircumferenceF2_5;
                  $firstCircumferenceF2_low = $data_form[139]['value'];
                  // echo "</br>".$firstCircumferenceF2_low;
                  $firstCircumferenceF2_mid = $data_form[140]['value'];
                  // echo "</br>".$firstCircumferenceF2_mid;
                  $firstCircumferenceF2_high = $data_form[141]['value'];
                  // echo "</br>".$firstCircumferenceF2_high;
                  
                  $firstCircumferenceF3_1 = $data_form[142]['value'];
                  // echo "</br>".$firstCircumferenceF3_1;
                  $firstCircumferenceF3_2 = $data_form[143]['value'];
                  // echo "</br>".$firstCircumferenceF3_2;
                  $firstCircumferenceF3_3 = $data_form[144]['value'];
                  // echo "</br>".$firstCircumferenceF3_3;
                  $firstCircumferenceF3_4 = $data_form[145]['value'];
                  // echo "</br>".$firstCircumferenceF3_4;
                  $firstCircumferenceF3_5 = $data_form[146]['value'];
                  // echo "</br>".$firstCircumferenceF3_5;
                  $firstCircumferenceF3_low = $data_form[147]['value'];
                  // echo "</br>".$firstCircumferenceF3_low;
                  $firstCircumferenceF3_mid = $data_form[148]['value'];
                  // echo "</br>".$firstCircumferenceF3_mid;
                  $firstCircumferenceF3_high = $data_form[149]['value'];
                  // echo "</br>".$firstCircumferenceF3_high;
                  
                  $firstCircumferenceF4_1 = $data_form[150]['value'];
                  // echo "</br>".$firstCircumferenceF4_1;
                  $firstCircumferenceF4_2 = $data_form[151]['value'];
                  // echo "</br>".$firstCircumferenceF4_2;
                  $firstCircumferenceF4_3 = $data_form[152]['value'];
                  // echo "</br>".$firstCircumferenceF4_3;
                  $firstCircumferenceF4_4 = $data_form[153]['value'];
                  // echo "</br>".$firstCircumferenceF4_4;
                  $firstCircumferenceF4_5 = $data_form[154]['value'];
                  // echo "</br>".$firstCircumferenceF4_5;
                  $firstCircumferenceF4_low = $data_form[155]['value'];
                  // echo "</br>".$firstCircumferenceF4_low;
                  $firstCircumferenceF4_mid = $data_form[156]['value'];
                  // echo "</br>".$firstCircumferenceF4_mid;
                  $firstCircumferenceF4_high = $data_form[157]['value'];
                  // echo "</br>".$firstCircumferenceF4_high;
                  
                  $firstCircumferenceF5_1 = $data_form[158]['value'];
                  // echo "</br>".$firstCircumferenceF5_1;
                  $firstCircumferenceF5_2 = $data_form[159]['value'];
                  // echo "</br>".$firstCircumferenceF5_2;
                  $firstCircumferenceF5_3 = $data_form[160]['value'];
                  // echo "</br>".$firstCircumferenceF5_3;
                  $firstCircumferenceF5_4 = $data_form[161]['value'];
                  // echo "</br>".$firstCircumferenceF5_4;
                  $firstCircumferenceF5_5 = $data_form[162]['value'];
                  // echo "</br>".$firstCircumferenceF5_5;
                  $firstCircumferenceF5_low = $data_form[163]['value'];
                  // echo "</br>".$firstCircumferenceF5_low;
                  $firstCircumferenceF5_mid = $data_form[164]['value'];
                  // echo "</br>".$firstCircumferenceF5_mid;
                  $firstCircumferenceF5_high = $data_form[165]['value'];
                  // echo "</br>".$firstCircumferenceF5_high;

                  
                  $textureLengthF1_1 = $data_form[166]['value'];
                  // echo "</br>".$textureLengthF1_1;
                  $textureLengthF1_2 = $data_form[167]['value'];
                  // echo "</br>".$textureLengthF1_2;
                  $textureLengthF1_3 = $data_form[168]['value'];
                  // echo "</br>".$textureLengthF1_3;
                  $textureLengthF1_4 = $data_form[169]['value'];
                  // echo "</br>".$textureLengthF1_4;
                  $textureLengthF1_5 = $data_form[170]['value'];
                  // echo "</br>".$textureLengthF1_5;
                  $textureLengthF1_low = $data_form[171]['value'];
                  // echo "</br>".$textureLengthF1_low;
                  $textureLengthF1_mid = $data_form[172]['value'];
                  // echo "</br>".$textureLengthF1_mid;
                  $textureLengthF1_high = $data_form[173]['value'];
                  // echo "</br>".$textureLengthF1_high;

                  $textureLengthF2_1 = $data_form[174]['value'];
                  // echo "</br>".$textureLengthF2_1;
                  $textureLengthF2_2 = $data_form[175]['value'];
                  // echo "</br>".$textureLengthF2_2;
                  $textureLengthF2_3 = $data_form[176]['value'];
                  // echo "</br>".$textureLengthF2_3;
                  $textureLengthF2_4 = $data_form[177]['value'];
                  // echo "</br>".$textureLengthF2_4;
                  $textureLengthF2_5 = $data_form[178]['value'];
                  // echo "</br>".$textureLengthF2_5;
                  $textureLengthF2_low = $data_form[179]['value'];
                  // echo "</br>".$textureLengthF2_low;
                  $textureLengthF2_mid = $data_form[180]['value'];
                  // echo "</br>".$textureLengthF2_mid;
                  $textureLengthF2_high = $data_form[181]['value'];
                  // echo "</br>".$textureLengthF2_high;

                  $textureLengthF3_1 = $data_form[182]['value'];
                  // echo "</br>".$textureLengthF3_1;
                  $textureLengthF3_2 = $data_form[183]['value'];
                  // echo "</br>".$textureLengthF3_2;
                  $textureLengthF3_3 = $data_form[184]['value'];
                  // echo "</br>".$textureLengthF3_3;
                  $textureLengthF3_4 = $data_form[185]['value'];
                  // echo "</br>".$textureLengthF3_4;
                  $textureLengthF3_5 = $data_form[186]['value'];
                  // echo "</br>".$textureLengthF3_5;
                  $textureLengthF3_low = $data_form[187]['value'];
                  // echo "</br>".$textureLengthF3_low;
                  $textureLengthF3_mid = $data_form[188]['value'];
                  // echo "</br>".$textureLengthF3_mid;
                  $textureLengthF3_high = $data_form[189]['value'];
                  // echo "</br>".$textureLengthF3_high;

                  $textureLengthF4_1 = $data_form[190]['value'];
                  // echo "</br>".$textureLengthF4_1;
                  $textureLengthF4_2 = $data_form[191]['value'];
                  // echo "</br>".$textureLengthF4_2;
                  $textureLengthF4_3 = $data_form[192]['value'];
                  // echo "</br>".$textureLengthF4_3;
                  $textureLengthF4_4 = $data_form[193]['value'];
                  // echo "</br>".$textureLengthF4_4;
                  $textureLengthF4_5 = $data_form[194]['value'];
                  // echo "</br>".$textureLengthF4_5;
                  $textureLengthF4_low = $data_form[195]['value'];
                  // echo "</br>".$textureLengthF4_low;
                  $textureLengthF4_mid = $data_form[196]['value'];
                  // echo "</br>".$textureLengthF4_mid;
                  $textureLengthF4_high = $data_form[197]['value'];
                  // echo "</br>".$textureLengthF4_high;

                  $textureLengthF5_1 = $data_form[198]['value'];
                  // echo "</br>".$textureLengthF5_1;
                  $textureLengthF5_2 = $data_form[199]['value'];
                  // echo "</br>".$textureLengthF5_2;
                  $textureLengthF5_3 = $data_form[200]['value'];
                  // echo "</br>".$textureLengthF5_3;
                  $textureLengthF5_4 = $data_form[201]['value'];
                  // echo "</br>".$textureLengthF5_4;
                  $textureLengthF5_5 = $data_form[202]['value'];
                  // echo "</br>".$textureLengthF5_5;
                  $textureLengthF5_low = $data_form[203]['value'];
                  // echo "</br>".$textureLengthF5_low;
                  $textureLengthF5_mid = $data_form[204]['value'];
                  // echo "</br>".$textureLengthF5_mid;
                  $textureLengthF5_high = $data_form[205]['value'];
                  // echo "</br>".$textureLengthF5_high;

                  $palmFlying_1 = $data_form[206]['value'];
                  // echo "</br>".$palmFlying_1;
                  $palmFlying_2 = $data_form[207]['value'];
                  // echo "</br>".$palmFlying_2;
                  $palmFlying_3 = $data_form[208]['value'];
                  // echo "</br>".$palmFlying_3;
                  $palmFlying_4 = $data_form[209]['value'];
                  // echo "</br>".$palmFlying_4;
                  $palmFlying_5 = $data_form[210]['value'];
                  // echo "</br>".$palmFlying_5;
                  $palmFlying_low = $data_form[211]['value'];
                  // echo "</br>".$palmFlying_low;
                  $palmFlying_mid = $data_form[212]['value'];
                  // echo "</br>".$palmFlying_mid;
                  $palmFlying_high = $data_form[213]['value'];
                  // echo "</br>".$palmFlying_high;

                  $palmTextured_1 = $data_form[214]['value'];
                  // echo "</br>".$palmTextured_1;
                  $palmTextured_2 = $data_form[215]['value'];
                  // echo "</br>".$palmTextured_2;
                  $palmTextured_3 = $data_form[216]['value'];
                  // echo "</br>".$palmTextured_3;
                  $palmTextured_4 = $data_form[217]['value'];
                  // echo "</br>".$palmTextured_4;
                  $palmTextured_5 = $data_form[218]['value'];
                  // echo "</br>".$palmTextured_5;
                  $palmTextured_low = $data_form[219]['value'];
                  // echo "</br>".$palmTextured_low;
                  $palmTextured_mid = $data_form[220]['value'];
                  // echo "</br>".$palmTextured_mid;
                  $palmTextured_high = $data_form[221]['value'];
                  // echo "</br>".$palmTextured_high;

                  $disposition_1 = $data_form[222]['value'];
                  // echo "</br>".$disposition_1;
                  $disposition_2 = $data_form[223]['value'];
                  // echo "</br>".$disposition_2;
                  $disposition_3 = $data_form[224]['value'];
                  // echo "</br>".$disposition_3;
                  $disposition_4 = $data_form[225]['value'];
                  // echo "</br>".$disposition_4;
                  $disposition_5 = $data_form[226]['value'];
                  // echo "</br>".$disposition_5;
                  $disposition_low = null;
                  // echo "</br>".$disposition_3;
                  $disposition_mid = null;
                  // echo "</br>".$disposition_4;
                  $disposition_high = null;
                  // echo "</br>".$disposition_5;


                  
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
                        'Sample_1'=> $bendingL_1, //using bendingL as a main bending
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

                // echo $sampleResult_JSON;


                  $overall_disposition = $data_form[227]['value'];
                  // echo "</br>".$inspectedBY;
                  $inspectedBY = $data_form[228]['value'];
                  // echo "</br>".$inspectedBY;
                  $verifiedby = $data_form[229]['value'];
                  // echo "</br>".$verifiedby;
                  $verified_date = date('Y-m-d H:i:s', strtotime(str_replace("/","-",$data_form[230]['value'])));
                  //   echo "</br>".$verified_date;

                 $query = "{CALL SP_Register_Dimension(?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
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
                 $stmt->bindParam(10, $sampleResult_JSON);
                 $stmt->bindParam(11, $overall_disposition);
                 $stmt->bindParam(12, $inspectedBY);
                 $stmt->bindParam(13, $verifiedby);
                 $stmt->bindParam(14, $verified_date);
                 $submit = $stmt->execute();

                if($submit == 1){
                    echo 'SUCCESS';
                    echo "</br> <script>console.log('berjaya') </script>";
                    
                }else{
                    echo 'ERROR';
                    echo "</br> <script>console.log('tak berjaya') </script>";
                }
                } else {}
               ?>