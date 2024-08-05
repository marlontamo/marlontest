jQuery(document).on('ready',function() {
    //card1
    let slider1 = document.getElementById('formControlRange1').value;
    let result1 = document.getElementById('resultForm1');
    let resultP = document.getElementById('resultP1');
      result1.innerHTML = slider1;
      resultP.innerHTML = slider1;
    //card2
    let slider2 = document.getElementById('formControlRange2').value;
    let result2 = document.getElementById('resultForm2');
    let resultP2 = document.getElementById('resultP2');
      result2.innerHTML = slider2;
      resultP2.innerHTML = slider2;
      //card3
      let slider3 = document.getElementById('formControlRange3').value;
      let result3 = document.getElementById('resultForm3');
      let resultP3 = document.getElementById('resultP3');
        result3.innerHTML = slider3;
        resultP3.innerHTML = slider3;

});
//result form1
jQuery('#formControlRange1').on('change',function(){ 
    let slider = document.getElementById('formControlRange1').value;
    let result = document.getElementById('resultForm1');
    let resultP1 = document.getElementById('resultP1');
      result.innerHTML = slider;
      resultP1.innerHTML = slider;

    });
//result form2
jQuery('#formControlRange2').on('change',function(){ 
    let slider = document.getElementById('formControlRange2').value;
    let result = document.getElementById('resultForm2');
    let resultP2 = document.getElementById('resultP2');
      resultP2.innerHTML = slider;
      result.innerHTML = slider;

    });
//result form3
jQuery('#formControlRange3').on('change',function(){ 
    let slider = document.getElementById('formControlRange3').value;
    let result = document.getElementById('resultForm3');
    let resultP3 = document.getElementById('resultP3');
      result.innerHTML = slider;
      resultP3.innerHTML = slider;

    });