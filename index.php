<?php
    $usuario = "Sergio";
    $password= "";
    $servidor = "localhost";
    $bbdd = "curso";
    /*en caso de que no se pueda conectar muere y muestra el mensaje */
    $conexion = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar a la base de datos");
    /*conectarme a la base de datos*/
    $db = mysqli_select_db($conexion, $bbdd) or die ("No se ha encontrado la base de datos");

    /*realizar una consulta, pedir los datos*/
    $consulta = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $consulta) or die("No ha funcionado la consulta");





    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
    
    <title>Inicio</title>
</head>
<body>
    <header class="transparente">
        <a href="index.html"><img src="img/logo.svg" alt="Logo Imperial Real State"></a>
        <nav>
            <a href="#" class="activo">Inicio</a>
            <a href="ventas.html">Ventas</a>
            <a href="#">Alquiler</a>
            <a href="contacto.html">Contacto</a>
        </nav>
    </header>
    <div class="hero">
        <div></div>
        <div></div>
        <div></div>
        <div class="hero-logo">
            <img src="img/logo-frame.svg" alt="Logo Imperial Real State">
        </div>
        <a href="#inicio-texto" class="hero-down"><img src="img/down.svg" alt="flecha abajo"></a>
    </div>
    <div id="burger">
        <div class="barra superior"></div>
        <div class="barra media"></div>
        <div class="barra inferior"></div>
    </div>
    <div class="menu">
        <nav>
            <a href="#">Inicio</a>
            <hr>
            <a href="ventas.html">Ventas</a>
            <hr>
            <a href="#">Alquiler</a>
            <hr>
            <a href="contacto.html">Contacto</a>

        </nav>
        <p class="copyright">&copy; DIFATEC</p>
    </div>
    <div class="fila primera">
        <span  id="inicio-texto">&nbsp;</span>
        <div class="col-66">
            <p>Lorem ipsum  dolor, sit amet consectetur adipisicing elit. Perferendis quas qui natus labore ex? Praesentium repellendus molestias corporis placeat, molestiae optio rem sint quidem delectus.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae explicabo nisi a earum in at!</p>
        </div>
        <div class="col-33">
            <img src="img/thumb4.jpg" alt="imagen casa">
        </div>
    </div>
    <div class="fila">
        <div class="col-50">
            <img src="img/thumb5.jpg" alt="gg">
        </div>
        <div class="col-50">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe tempore quo, minima necessitatibus quos eum ullam error labore! Harum iste id nisi veniam exercitationem magnam vel accusantium accusamus vero! Id fugiat magnam accusamus temporibus non?
        </div>
    </div>
    <div class="fila parallax">
        <div class="col-100">
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
    </div>
    <div class="fila">
        <div class="col-50 caja-nav flex-colum-center">
            <img src="img/comprar.svg" alt="">
            <a href="ventas.html">VENTA</a>
         </div>   
        <div class="col-50  caja-nav flex-colum-center">
            <img src="img/alquilar.svg" alt="">
            <a href="#">ALQUILER</a>
     </div>
    </div>
    <div class="fila">
        <div class="col-100 flex-colum-center">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, adipisci.</p>
            <?php
    echo "<h1>Hola Mundo</h1>";
?>
            <form class="contacto">
                <div class="fila">
                    <input class="usuario" type="text" placeholder="Nombre y Apellido">
                </div>
                <div class="fila">
                    <input class="email" type="email" placeholder="Correo Electronico">
                </div>
                <div class="fila flex-end">
                    <button type="submit">Enviar</button>
                </div>
                <div class="fila flex-center">
                    <input type="checkbox" id="condiciones">
                    <label for="condiciones">
                        Acepto las condiciones legales.
                    </label>
                </div>
            </form>
        </div>
    </div>
    <footer class="fila">
        <div class="col-33">
            <p>Imperial Real State</p>
            <p class="flex-start">
                 <img class="m-r-small" src="img/map.svg" alt="icono de mapa">
                 Paseo de la Constitucion, 12
            </p>
            <p>
                29600 Marbella
            </p>
            <p class="flex-start">
                <img class="m-r-small" src="img/phone.svg" alt="icono de telefono">
                +35915442275585
            </p>
            <p class="flex-start">
                <img class="m-r-small" src="img/mail.svg" alt="icono de email">
                info@imperial.com
            </p>
        </div>
        <div class="col-33">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2753.4674350524238!2d-58.28459147893501!3d-34.84509293554624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4635a32b9061ed89!2sDifatec!5e0!3m2!1ses-419!2sar!4v1674061022279!5m2!1ses-419!2sar" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-33">
            <div class="flex-around">
                <img class="rrss" src="img/facebook.svg" alt="icono de facebook">
                <img class="rrss" src="img/twitter.svg" alt="icono de twitter">
                <img class="rrss" src="img/whatsapp.svg" alt="icono de whatsapp">
                <img class="rrss" src="img/instagram.svg" alt="icono de insgr">
            </div>
            <div class="flex-around m-t">
                <a href="contacto.html#aviso">Aviso legal</a>
                <a href="contacto.html#cookies">Política de Cookies</a>
            </div>
            <p class="copyright m-t">&copy; Imperial Real State All right reserved</p>
        </div>
    </footer>
</body>
</html>