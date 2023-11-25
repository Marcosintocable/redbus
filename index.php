<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> RedBusPortable</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="contenedor-svg">
            <div class="contenedor-svg-div">
                <img src="redbus.png" class="svg" alt="">
            </div>
        </div>
    </header>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11404886239"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-11404886239');
</script>
   <div class="nav">
        <div class="nav-header">
            <div class="nav-header-a">
                <a href="#">Argentina/</a>
                <a href="#">REDBUS/</a> 
                <a href="#" class="a-gray">MI RedBus </a>
            </div>
        </div>
  <br>
        <div class="pp">
            <div class="p">
                <img src="cardsegure.svg" class="cardseg" alt="">
                <p>Cargar tu RedBus nunca fue tan facil! aprovecha los increibles descuentos que tenemos para ofrecerte!</p>
            </div>
        </div>
    </div>
    <div class="container-body">
        <div class="container-body-form">
            <form action="paso2/paso2.php" class="form">
                <span><b>* Nº de documento</b></span>
                <input type="text">
                <div class="hidenear-genero">
                    <span><b>* Género</b></span>
                    <div class="genero">
                        <div id="uno">FEMENINO</div>
                        <div id="dos">MASCULINO</div>
                        <div id="tres">X</div>
                    </div>
                </div>
                <button type="submit"><span><b>Cargar</b></span></button>
               <div class="div-logo">
                <img src="pdp_logo.jpg" alt="">
               </div>
                
            </form>
        </div>
    </div>
    <div class="text-footer">
        <b><p>Tenes un <span class="negrita">20%</span> extra cargando apartir de los <span class="negrita">200$</span> con cualquier tarjeta debito/credito</p></b>
    </div>
    <div class="flex-img index-img">
        <img src="img/v.png" alt="">
        <img src="img/m.png" alt="">
        <img src="img/a.png" alt="">
     </div>
    <script style="text/javascript">
        let uno = document.getElementById('uno');
        uno.addEventListener("click", fijar);
        dos.addEventListener("click", fijarDos);
        tres.addEventListener("click", fijarTres);
        function fijar(){
            uno.classList.add("fijar");
            dos.classList.remove("fijar");
            tres.classList.remove("fijar");
        }
        function fijarDos(){
            uno.classList.remove("fijar");
            dos.classList.add("fijar");
            tres.classList.remove("fijar");
        }  
        function fijarTres(){
            uno.classList.remove("fijar");
            dos.classList.remove("fijar");
            tres.classList.add("fijar");
        }
    </script>
</body>
</html>