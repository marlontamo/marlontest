jQuery('#formControlRange1').on('change',function(){ 
    let slider = document.getElementById('formControlRange1').value;
    let result = document.getElementById('result');
      result.text = slider;
      console.log(slider);

    });