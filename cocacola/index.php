<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COCA - COLA</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="carta.css">
    <link rel="icon" href="R.png"/>
</head>
<body>
 <section>
        <div class="circle"></div>
        <header>
         <a href="#"><img src="imagenes/logo copy.png" alt="logo"></a>
         <div class="toggle" oneclick="toggleMenu()"></div>
         <ul class="navegation">
            <li> <a href="#Inicio">Inicio</a></li>
            <li> <a href="#Nosotros">Nosotros</a></li>
            <li> <a href="#Productos">Productos</a></li>
            <li> <a href="#Contacto">Contacto</a></li>
            <li> <a href="http://localhost/tienda/Cocacola.php">Carrito</a></li>
         </ul>
        </header>
        <div class="content">
            <div class="textbox">
                <h2>Bienvenidos</h2>
                <br>
                <p>"Coca-Cola es  un símbolo de alegría y energía que ha refrescado
                     momentos y avivado sonrisas en todo el mundo,
                     trascendiendo sabores para convertirse en un impulso
                      para la felicidad diaria."</p>
                     <br>
                     <a href="http://localhost/cocacola/index.php" class="boton">Aprende más</a>

            </div>
<div class="imgBox">
    <swiper-container class="mySwiper" 
    pagination="true" 
    effect="coverflow" 
    grab-cursor="true" 
    loop="true"
    centered-slides="true"
    slides-per-view="auto"
    coverflow-effect-rotate="0"
    coverflow-effect-stretch="0"
    coverflow-effect-depth="200"
    coverflow-effect-modifier="1" 
    coverflow-effect-slide-shadows="false">
    <swiper-slide><img src="cocacola1.png" /></swiper-slide>
    <swiper-slide><img src="cocacola2.png" /></swiper-slide>
    <swiper-slide><img src="cocacola3.png" /></swiper-slide>
    <swiper-slide><img src="cocacola4.png" /></swiper-slide>
    <swiper-slide><img src="cocacola5.png" /></swiper-slide>
    <swiper-slide><img src="cocacola6.png" /></swiper-slide>
  </swiper-container>
</div>
</div>
</section>


/*
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<center><h3 id="Nosotros"></h3><center/>
    <button class="buy-1">Nosotros </button>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COCA - COLA</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* Estilos CSS */
        .cont {
            max-width: 100vw;
            display: grid;
            grid-template-columns: repeat(3, minmax(300px, 1fr));
            grid-gap: 30px;
            margin: 0 auto;
            padding: 0;
        }

        .Titulo {
            text-align: center;
            font-size: 40px;
            background: #79dfdd;
        }

        .card {
            position: relative;
            width: 300px;
            height: 400px;
            margin: 0 auto;
            background: #eeebeb;
            border-radius: 15px;
            box-shadow: 0 15px 60px rgba(0, 0, 0, 0.5);
        }

        .face {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .face.face1 {
            box-sizing: border-box;
            padding: 20px;
        }

        .face.face1 h2 {
            margin: 0;
            padding: 0;
        }

        .face.face2 {
            transition: 0.5s;
        }

        .face.face2 h2 {
            margin: 0;
            padding: 0;
            font: size 30px;
            color: #fff;
            transition: 0.5s;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        .card:hover .face.face2 {
            height: 60px;
        }

        .card:hover .face.face2 h2 {
            font-size: 2em;
        }

        .card:nth-child(1) .face.face2 {
            background-image: linear-gradient(40deg, #BA1010 0%, #430b0d 45%, #000000 100%);
            border-radius: 15px;
        }

        .card:nth-child(2) .face.face2 {
            background-image: linear-gradient(40deg, #BA1010 0%, #430b0d 45%, #000000 100%);
            border-radius: 15px;
        }

        .card:nth-child(3) .face.face2 {
            background-image: linear-gradient(40deg, #BA1010 0%, #430b0d 45%, #000000 100%);
            border-radius: 15px;
        }

        .java {
            background-color: #121212;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .python {
            background-color: #080809;
            -webkit-background-clip: text;
            background-clip: text;
            color: #121212;
        }

        .cSharp {
            background-color: #fc00ff;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Estilos adicionales */
        .cSharp p {
            margin: 0; /* Para eliminar el espacio entre párrafos */
        }
      
        .cont {
    position: relative; /* Establece posición relativa para que el logo se posicione en relación con este contenedor */
  }

  .cont {
    position: relative; /* Establece posición relativa para que el logo se posicione en relación con este contenedor */
  }

  .logo {
    position: absolute; /* Establece posición absoluta para que el logo se mueva libremente */
    top: -100px; /* Posiciona el logo más arriba del contenido */
    left: 50%; /* Centra horizontalmente el logo */
    transform: translateX(-50%); /* Ajusta la posición horizontal del logo al centro */
    width: 150px; /* Tamaño del logo más grande */
    height: auto;
    margin-bottom: 20px; /* Agrega espacio entre el logo y el texto */
  }

  .python {
    color: #333;
    font-size: 14px;
    text-align: center;
  }
</style>
    </style>
    <br>
    <br>
    <div class="cont">
        <div class="card">
            <div class="face face1">
                <div class="content">
                  <br>
                  <br>
                <img src="R.png" alt="Logo de la Empresa" class="logo">
                <br>
                <br>
                    <span class="stars"></span>
                    <p class="python">Nuestra misión es operar como un embotellador de excelencia bajo
                       licencia de Coca-Cola, comprometido a generar valor sostenible para todos nuestros
                        grupos de interés. Nos esforzamos por mantener los más altos estándares de calidad
                         en la producción y distribución de productos. </p>
                </div>
            </div>
            <div class="face face2">
                <h2>MISIÓN</h2>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                <img src="R.png" alt="Logo de la Empresa" class="logo">
                    <span class="stars"></span>
                    <p class="python">Nuestra visión es consolidarnos como el líder indiscutible
                       en la industria de bebidas, siendo reconocidos por nuestra constante innovación 
                       y excelencia en todos los aspectos de nuestro negocio. Nos esforzamos
                        por inspirar a otros y establecer un estándar de calidad y creatividad
                         que defina la vanguardia de la industria.</p>
                </div>
            </div>
            <div class="face face2">
                <h2>VISIÓN</h2>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                <img src="R.png" alt="Logo de la Empresa" class="logo">
                    <span class="stars"></span>
                    <p class="python">Nos comprometemos a optimizar constantemente nuestros
                       estándares de servicio al cliente para satisfacer de manera óptima las
                        necesidades tanto de nuestros clientes como de los consumidores finales. 
                        Buscamos comprender profundamente sus expectativas y deseos, ofreciendo soluciones innovadoras
                       y experiencias excepcionales que superen sus expectativas. </p>
                </div>
            </div>
            <div class="face face2">
                <h2>SERVICIOS</h2>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
</body>
</html>



  <center><h3 id="Productos"></h3><center/>
    <button class="buy-1">Productos</button>
  <div class="gallery">
    <div class="conte">
        <img src="cocacola1.png" alt="" class="im">
        <h2 class="h2">Sabor Original</h2>
        <p1 class="p1">Bebida refrescante aromatizada.</p1>
        <h6 class="h6">RD$100.00</h6>
        <ul class="ul">
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star"></i></li>
        </ul>
        <a href="http://localhost/tienda/Cocacola.php" class="buy-3">Comprar ahora</a>    
    </div>

    <div class="conte">
        <img src="cocacola3.png" alt="" class="im">
        <h2 class="h2">Diet Coke</h2>
        <p1 class="p1">Sabor refrescante de Coca-Cola Light</p1>
        <h6 class="h6">RD$110.00</h6>
        <ul class="ul">
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star"></i></li>
        </ul>
        <a href="http://localhost/tienda/Cocacola.php" class="buy-3">Comprar ahora</a>
    </div>
    
    <div class="conte">
        <img src="cocacola5.png" alt="" class="im">
        <h2 class="h2">Cherry Vanilla</h2>
        <p1 class="p1">Una combinación única y deliciosa</p1>
        <h6 class="h6">RD$200.00</h6>
        <ul class="ul">
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star"></i></li>
        </ul>
        <a href="http://localhost/tienda/Cocacola.php" class="buy-3">Comprar ahora</a>
    </div>
    <div class="conte">
        <img src="cocacola6.png" alt="" class="im">
        <h2 class="h2"> Energeticas</h2>
        <p1 class="p1">Bebida energética rica en cafeína con el sabor original de Coca-Cola.</p1>
        <h6 class="h6">RD$125.00</h6>
        <ul class="ul">
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star"></i></li>
        </ul>
        <a href="http://localhost/tienda/Cocacola.php" class="buy-3">Comprar ahora</a>
    </div>
  <div class="conte">
    <img src="cocacola2.png" alt="" class="im">
    <h2 class="h2">Coca-Cola Naranja</h2>
    <p1 class="p1">Bebida refrescante aromatizada</p1>
    <h6 class="h6">RD$110.00</h6>
    <ul class="ul">
        <li class="li"><i class="fa fa-star checked"></i></li>
        <li class="li"><i class="fa fa-star checked"></i></li>
        <li class="li"><i class="fa fa-star checked"></i></li>
        <li class="li"><i class="fa fa-star checked"></i></li>
        <li class="li"><i class="fa fa-star"></i></li>
    </ul>
    <a href="http://localhost/tienda/Cocacola.php" class="buy-3">Comprar ahora</a>
    </div>
    <div class="conte">
        <img src="cocacola4.png" alt="" class="im">
        <h2 class="h2">Coca-Cola con Coffee</h2>
        <p1 class="p1">sabor a Coca-Cola impregnado con rico y lujoso sabor a café</p1>
        <h6 class="h6">RD$110.00</h6>
        <ul class="ul">
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star"></i></li>
        </ul>
        <a href="http://localhost/tienda/Cocacola.php" class="buy-3">Comprar ahora</a>
    </div>
    <div class="conte">
        <img src="lime1234.jpg" alt="" class="im">
        <h2 class="h2"> DIET Sabor Lima</h2>
        <p1 class="p1">Sabor a Lima, Disfruta de un sabor único.</p1>
        <h6 class="h6">RD$110.00</h6>
        <ul class="ul">
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star"></i></li>
        </ul>
        <a href="http://localhost/tienda/Cocacola.php" class="buy-3">Comprar ahora</a>
    </div>
    <div class="conte">
        <img src="Coca Cola Cherry Zero..png" alt="" class="im">
        <h2 class="h2">Coca Cola Cherry Zero.</h2>
        <p1 class="p1">Bebida refrescante</p1>
        <h6 class="h6">RD$110.00</h6>
        <ul class="ul">
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star checked"></i></li>
            <li class="li"><i class="fa fa-star"></i></li>
        </ul>
        <a href="http://localhost/tienda/Cocacola.php" class="buy-3">Comprar ahora</a>
    </div>


    <center><h3 id="Contacto"></h3><center/>
    <button class="buy-1">Contacto</button>
  <div class="gallery">
</div>
    
    <!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contacto</title>
<style>
  /* Estilos para el formulario de contacto */
  .formulario {
    max-width: 700px;
    margin: 0 auto;
    padding: 25px;
    background-color: #f8f8f8;
    border-radius: 10px;
  }

  .formulario h2 {
    margin-bottom: 10px;
    font-size: 24px;
    color: #333;
    text-align: center;
  }

  .formulario input[type="text"],
  .formulario input[type="email"],
  .formulario textarea {
    width: 100%;
    margin-bottom: 10px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; 
  }

  .formulario textarea {
    height: 100px;
  }

  .formulario button {
    width: 100%;
    padding: 10px;
    background-color: #A93226 ;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }

  .formulario button:hover {
    background-color:#F72910 ;
  }
</style>
</head>
<body>

<!-- Formulario de contacto -->
<div class="formulario">
  <h2>Contacto</h2>
  <form action="mailto:tu_correo@gmail.com" method="post" enctype="text/plain">
    <input type="text" name="nombre" placeholder="Tu Nombre" required>
    <input type="email" name="email" placeholder="Tu Correo Electrónico" required>
    <textarea name="mensaje" placeholder="Tu Mensaje" required></textarea>
    <button type="submit">Enviar</button>
  </form>
</div>

</body>
</html>
  </div>
    </center>
<br>


        <!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Botón Redireccionamiento</title>
<style>

/* Estilos para el botón */

.buy-3 {
    padding: 10px 20px; 
    background-color: #F72D2D; 
    color: #fff; 
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px; 
    text-decoration: none;
    display: inline-block;
}

/* Cambia el color de fondo al pasar el cursor sobre el botón */
.buy-3:hover {
    background-color:#F72D2D;
}
</style>
</head>
<body>
</body>
</html>
<br>
<br>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Lj4fl2f5yf0TJZsoB1s6GkTbLsw4ENPEOHQ39+UAX5VVd6jupqxZC+so8kb7ZBY0t2RzYXoSv6nX+Pz8otw78g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* Footer */
    footer {
      background-color:#333;
      color: #f8f8f8;
      padding: 50px 0;
    }

    .footer-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .footer-section {
      flex: 1;
      margin-bottom: 20px;
    }

    .footer-section h2 {
      font-size: 18px;
      margin-bottom: 15px;
    }

    .footer-section p {
      font-size: 14px;
      line-height: 1.5;
    }

    .social-icons a {
      color: #fff;
      font-size: 24px;
      margin-right: 10px;
    }

    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid #555;
      font-size: 14px;
    }

    /* Map */
    #map {
      height: 200px;
      width: 100%;
    }
  </style>
</head>
<body>

<footer>
<div class="footer-content">
    <div class="footer-section about"> 
        <img src="imagenes/logo copy.png" alt="Logo de Coca-Cola">
        <br>
        <br>
        <h2>Sobre Nosotros</h2>
       <p>Nuestra misión es refrescar el mundo, inspirar momentos de optimismo y felicidad, 
        y crear valor y hacer la diferencia en todo lo que hacemos.</p>    
</div>
<br>
<br>
    <div class="footer-section contact">
      <h2>Contacto</h2>
      <p>Email: consumidor@coca-cola.com</p>
      <p>Teléfono: +800-704-4400</p>
  <style>
    /* Estilos para el footer */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    footer ul {
      list-style-type: none;
      padding: 0;
    }

    footer ul li {
      display: inline;
    }

    footer ul li a {
      color: #fff;
      text-decoration: none;
      padding: 0 10px;
    }

    footer ul li a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<footer>
  <ul>
    <li><a href="http://localhost/cocacola/index.php">• INICIO</a></li>
  </ul>

  <ul>
    <li><a href="http://localhost/cocacola/index.php#Nosotros">• Nosotros</a></li>
  </ul>

  <ul>
    <li><a href="http://localhost/cocacola/index.php#Productos">• Producto</a></li>
  </ul>

  <ul>
    <li><a href="http://localhost/cocacola/index.php#Contacto">• Contacto</a></li>
  </ul>
  <ul>
    <li><a href="http://localhost/tienda/Cocacola.php">• Carrito</a></li>
  </ul>
 
 
    
</footer>

</body>
</html>


    </div>
    <div class="footer-section social">
        <br>
        <br>
        <br>
        <br>


        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Social Media Icons</title>
<style>
  .social-icons {
    display: flex;
    justify-content: center;
    gap: 15px; /* Adjust the space between icons */
  }

  .social-icon img {
    width: 30px; /* Set a small width for icons */
    height: 30px; /* Set a height to make them square */
    transition: transform 0.3s ease; /* Smooth transition for hover effect */
  }

  .social-icon:hover img {
    transform: scale(1.1); /* Slightly enlarge icons on hover */
  }
</style>
</head>
<body>

<h2>Redes Sociales</h2>
<div class="social-icons">
  <a href="https://www.facebook.com/cocacoladominicanrepublic" class="social-icon" target="_blank" rel="noopener noreferrer">
    <img src="fa3.png" alt="Follow us on Facebook">
  </a>
  <a href="https://www.instagram.com/cocacolard/" class="social-icon" target="_blank" rel="noopener noreferrer">
    <img src="in.png" alt="Follow us on Instagram">
  </a>
  <a href="https://twitter.com/i/flow/login?redirect_after_login=%2FSomosCocaCola" class="social-icon" target="_blank" rel="noopener noreferrer">
    <img src="twitter-icone-2.png" alt="Follow us on Twitter">
  </a>
</div>

</body>
</html>

    </div>
    <div class="footer-section map">
      <h2>Encuéntranos</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481637.7442854895!2d-71.00053050258221!3d19.421266763256913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cfb06045b01d%3A0x8bfc39816eb67006!2sBepensa%20Dominicana%20Santiago!5e0!3m2!1ses!2sdo!4v1710257563953!5m2!1ses!2sdo" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
  </div>
  <div class="footer-bottom">
    &copy; Darianny Garcia #13
  </div>
</footer>

</body>
</html>



    




  


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script>
function toggleMenu(){
    const menuToggle = document.querySelector('toggle');
    const navegation = document.querySelector('navegation')
    menuToggle.classList.toggle('active')
    navegation.classList.toggle('active')

}
</script>
</body>
</html>