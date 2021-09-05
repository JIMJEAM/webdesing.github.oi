<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script defer src="./main.js"></script>
    <title>By Jimmy</title>
</head>

<body>
    <div class="navigation">
        <div class="menu-btn" onclick="showMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="links">
            <div class="link">
                <a href="#">Inicio</a>
            </div>
            <div class="link">
                <a href="#">Acerca de</a>
            </div>
            <div class="link">
                <a href="#">Portafolio</a>
            </div>
            <div class="link">
                <a href="#">Contacto</a>
            </div>
        </nav>
    </div>
    <div class="content">
        <h1 class="titulo">Lorem, ipsum.</h1>
        <p class="titulo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur impedit quaerat repellendus, ipsa consequuntur eos voluptatibus excepturi officia ea magni, quisquam minus, dolorum rem at ducimus ratione dolore quas necessitatibus.</p>
    </div>
    <header>
        <div class="contenedor">
            <nav class="menu">
                <a href="">Inicio</a>
                <a href="">Acerca de</a>
                <a href="">Portafolio</a>
                <a href="">Contacto</a>
            </nav>
            <div class="contenido-header">
                <h1 class="titulo-header animate__animated animate__pulse">Desarollo Web</h1>
                <span class="linea-header"></span>
                <h2 class="texto-header">Lorem ipsum, dolor sit amet consectetur <span class="desaparecer">adipisicing elit. Nobis esse odit commodi, ipsa optio quos!</span></h2>
                <a href="" class="action-header">Call to action</a>
            </div>
        </div>
    </header>
    <main>
        <section class="quienes">
            <div class="contenedor">
                <h3 class="quienes-titulo">Simple & puro diseño</h3>
                <p class="quienes-parrafo">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt, quia recusandae dolor cum, eveniet voluptate itaque voluptatibus iure perspiciatis sequi quisquam inventore. Necessitatibus quasi voluptatem iusto, ea suscipit blanditiis
                    ab architecto, eveniet autem dolore fugiat laborum optio dicta in. Eligendi harum repellendus amet provident placeat quas distinctio neque dolores magni!</p>
            </div>
        </section>
        <section class="quehacemos">
            <div class="contenedor">
                <div class="contenido-cajas">
                    <div class="tarjeta">
                        <img src="img/icono1.png" alt="" class="imagen-tarjeta">
                        <div class="contenido-tarjeta">
                            <h3 class="titulo-tarjeta">Lorem ipsum dolor sit.</h3>
                            <p class="parrafo-tarjeta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, blanditiis quaerat pariatur minima a veritatis.</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <img src="img/icono2.png" alt="" class="imagen-tarjeta">
                        <div class="contenido-tarjeta">
                            <h3 class="titulo-tarjeta">Lorem ipsum dolor sit.</h3>
                            <p class="parrafo-tarjeta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, blanditiis quaerat pariatur minima a veritatis.</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <img src="img/icono3.png" alt="" class="imagen-tarjeta">
                        <div class="contenido-tarjeta">
                            <h3 class="titulo-tarjeta">Lorem ipsum dolor sit.</h3>
                            <p class="parrafo-tarjeta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, blanditiis quaerat pariatur minima a veritatis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <div class="portafolio-textos">
                    <h2>Haz de tu trabajo algo extraordinario</h2>
                    <p>Contactame si estás preparado</p>
                </div>
                <section class="galeria">
                    <div class="fotos">
                        <img src="img/1.jpg" alt="">
                    </div>
                    <div class="fotos">
                        <img src="img/2.jpg" alt="">
                    </div>
                    <div class="fotos">
                        <img src="img/3.jpg" alt="">
                    </div>
                    <div class="fotos">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="fotos">
                        <img src="img/5.jpg" alt="">
                    </div>
                    <div class="fotos">
                        <img src="img/6.jpg" alt="">
                    </div>
                </section>
            </div>
        </section>
    </main>
    <footer>
        <section class="contacto">
            <div class="contenedor">
                <div class="footer-textos">
                    <h2>Contacta con nosostros</h2>
                    <p>Lorem, ipsum dolor.</p>
                </div>
                <form action="enviar.php" class="formulario" method="post">
                    <input type="text" placeholder="Nombre" id="nombre" name="nombre" required value="">
                    <input type="text" placeholder="Correo" id="correo" name="correo" required value="" class="email">
                    <textarea name="mensaje" id="mensaje" placeholder="Mensaje:"></textarea>
                    <div class="derecha">
                        <input class="boton derecha" type="submit" value="Contactar" name="submmit">
                    </div>
                </form>
            </div>
        </section>
    </footer>
    <?php
    include("enviar.php");
    git?>
</body>

</html>