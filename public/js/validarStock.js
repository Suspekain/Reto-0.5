$(document).ready(function() {
  let stockMal = document.getElementById("stockMal");
  stockMal.hidden = true;

  function EnableSubmit(){
    document.getElementById("submit").disabled = false;
  }

  function DisableSubmit(){
    document.getElementById("submit").disabled = true;
  }

  $('input').change(function(){
    comprobar();
  });

  function comprobar(){
    var bien = 0;
    
    var stock = document.getElementById("stock");

    
    if (typeof stock != "number" && stock.value.length == 0){
        stockMal.hidden = false;
        bien--;
    }else{
      stockMal.hidden = true;
      bien++;
    }

    if(bien === 1){
      EnableSubmit();
    }else{
      DisableSubmit();
    }
  }

  
});