jQuery('#formControlRange1').on('change',function(){ 
    let slider = document.getElementById('formControlRange1').value;
    let result = document.getElementById('result');
      result.innerHTML = slider;
      console.log(slider);

    });