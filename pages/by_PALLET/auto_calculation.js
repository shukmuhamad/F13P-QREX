function average() {
    var avg = 0;
    var sampleValue1 = $('#num1').val();
    var sampleValue2 = $('#num2').val();
    // console.log(txtFirstNo+" and "+txtSecndNo);
    
    if(sampleValue1 == 0 || sampleValue1== "" || sampleValue1== null){
        console.log("if ke 1");
        $('#ResultAverage').val(sampleValue2);
    }
    else if(sampleValue2 == 0 || sampleValue2== "" || sampleValue2== null){
        console.log("if ke 2");
        $('#ResultAverage').val(sampleValue1);
    }
    else{
        // console.log(parseFloat(txtFirstNo) + parseFloat(txtSecndNo));    
        avg= (parseFloat(sampleValue1) + parseFloat(sampleValue2) )/2;
        $('#ResultAverage').val(avg.toFixed(2));
    }
}

function decimal(e,places) {
    var t = e.value;
    e.value = (t.indexOf(".") >= 0) ? (t.substr(0, t.indexOf(".")) + t.substr(t.indexOf("."), places)) : t;
}

