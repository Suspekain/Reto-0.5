$(document).ready(function() {
  let nombreMal = document.getElementById("nombreMal");
  let descMal = document.getElementById("descMal");
  let imgMal = document.getElementById("imgMal");
  let stockMal = document.getElementById("stockMal");
  let enlaceMal = document.getElementById("enlaceMal");
  nombreMal.hidden = true;
  descMal.hidden = true;
  imgMal.hidden = true;
  stockMal.hidden = true;
  enlaceMal.hidden = true;

  $('input').change(function(){
    comprobar();
  });

  function comprobar(){
    var bien = 0;
    var nombre = document.getElementById("nombre");
    var desc = document.getElementById("descripcion");
    var img = document.getElementById("img");
    var stock = document.getElementById("stock");
    var enlace = document.getElementById("enlace");
    if (typeof nombre != "string" && nombre.value.length == 0){
        nombreMal.hidden = false;
        bien--;
    }else{
      nombreMal.hidden = true;
      bien++;
    }
    if(desc.value.length === 0){
        descMal.hidden = false;
        bien--;
    }else{
      descMal.hidden = true;
      bien++;
    }
    if(img.files.length == 0){
      imgMal.hidden = false;
      bien--;
    }else{
      imgMal.hidden = true;
      bien++;
    }
    if (typeof stock != "number" && stock.value.length == 0){
        stockMal.hidden = false;
        bien--;
    }else{
      stockMal.hidden = true;
      bien++;
    }
    if (typeof enlace != "string" && enlace.value.length == 0){
        enlaceMal.hidden = false;
        bien--;
    }else{
      enlaceMal.hidden = true;
      bien++;
    }
    if(bien === 5){
      EnableSubmit();
    }else{
      DisableSubmit();
    }
  }

  function EnableSubmit(){
    document.getElementById("submit").disabled = false;
  }

  function DisableSubmit(){
    document.getElementById("submit").disabled = true;
  }
});