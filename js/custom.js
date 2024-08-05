$(document).ready(function() {
    //card1
    let slider1 = document.getElementById('formControlRange1').value;
    let result1 = document.getElementById('resultForm1');
      result1.innerHTML = slider1;
    //card2
    let slider2 = document.getElementById('formControlRange2').value;
    let result2 = document.getElementById('resultForm2');
      result2.innerHTML = slider2;
      //card3
      let slider3 = document.getElementById('formControlRange3').value;
      let result3 = document.getElementById('resultForm3');
        result3.innerHTML = slider3;
});
//result form1
jQuery('#formControlRange1').on('change',function(){ 
    let slider = document.getElementById('formControlRange1').value;
    let result = document.getElementById('resultForm1');
      result.innerHTML = slider;

    });
//result form2
jQuery('#formControlRange2').on('change',function(){ 
    let slider = document.getElementById('formControlRange2').value;
    let result = document.getElementById('resultForm2');
      result.innerHTML = slider;

    });
//result form3
jQuery('#formControlRange3').on('change',function(){ 
    let slider = document.getElementById('formControlRange3').value;
    let result = document.getElementById('resultForm3');
      result.innerHTML = slider;

    });