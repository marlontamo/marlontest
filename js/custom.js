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