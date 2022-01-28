<?php
require("regisContact.php");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Portafolio Angel</title>
        <link rel="preload" href="CSS/normalize.css" as="style">
        <link rel="stylesheet" href="CSS/normalize.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="icon" href="Imagenes/svg/code-white.svg">
        <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
        <link rel="preload" href="CSS/style.css" as="style">
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
      <header>
        <h1 class="titulo">Angel Resendiz <span class="spantitulo">Frelancer</span></h1>        
      </header>

      <div class="nav-bg">
        <nav class="navegacion contenedor">
          <a href="#Introduccion">Sobre Mi</a>
          <a href="#Servicios">Servicios</a>
          <a href="#Estudios">Estudios</a>
          <a href="#Contacto">Contacto</a>
          <a href="sitios.php">Proyectos</a>
        </nav>
      </div>      

      <section id="Inicio" class="hero">
        <div class="contenido-hero">
          <h2>Desarrollador Freelancer</h2>
          <p>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88" height="88" viewBox="0 0 24 24" stroke-width="1" stroke="#00bfd8" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <circle cx="12" cy="11" r="3" />
              <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
            </svg>
            Tecozautla Hidalgo
          </p>
          <a class="boton" href="#Contacto">Contactar</a>
        </div>
      </section>

      <main class="contenedor sombra">
        
        <section id="Introduccion">
            <div>
              <h2>Sobre Mi</h2>
              <p>Soy Angel de Jesus Resediz Lopez Ingeniero en Sistemas Computacionales titulado por Examen General para el Egreso de la Licenciatura (EGEL) del Instituto 
                Tecnologico Superior de Huichapan, actualmente centrado en brindar un exelente servicio en el desarrollo de 
                software y diseño web utilizando tecnologias actuales.</p>
            </div>
          </section>

          <section id="Estudios">
            <div>
            </div>
          </section>

          <section id="Servicios">
           <div>
           <h2>Mis Servicios</h2>

            <div class="servicios">

               <section class="servicio">
                <h3>Diseño Web</h3>
                <div class="iconos">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 21a9 9 0 1 1 0 -18a9 8 0 0 1 9 8a4.5 4 0 0 1 -4.5 4h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                    <circle cx="7.5" cy="10.5" r=".5" fill="currentColor" />
                    <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
                    <circle cx="16.5" cy="10.5" r=".5" fill="currentColor" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-board" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="4" y="4" width="16" height="16" rx="2" />
                    <path d="M4 9h8" />
                    <path d="M12 15h8" />
                    <path d="M12 4v16" />
                  </svg>
                </div>            
                <p>Te ayudo a diseñar y a crear tu pagina web.  Diseño actual, responsivo, rápido y bonito. Paginas web con la información que requieras, a tu media y a tu gusto.</p>
              </section>

               <section class="servicio">
                <h3>Aplicaciones Moviles</h3>
                <div class="iconos">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-android" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="4" y1="10" x2="4" y2="16" />
                    <line x1="20" y1="10" x2="20" y2="16" />
                    <path d="M7 9h10v8a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-8a5 5 0 0 1 10 0" />
                    <line x1="8" y1="3" x2="9" y2="5" />
                    <line x1="16" y1="3" x2="15" y2="5" />
                    <line x1="9" y1="18" x2="9" y2="21" />
                    <line x1="15" y1="18" x2="15" y2="21" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 7c-3 0 -4 3 -4 5.5c0 3 2 7.5 4 7.5c1.088 -.046 1.679 -.5 3 -.5c1.312 0 1.5 .5 3 .5s4 -3 4 -5c-.028 -.01 -2.472 -.403 -2.5 -3c-.019 -2.17 2.416 -2.954 2.5 -3c-1.023 -1.492 -2.951 -1.963 -3.5 -2c-1.433 -.111 -2.83 1 -3.5 1c-.68 0 -1.9 -1 -3 -1z" />
                    <path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2" />
                  </svg>
                </div>

                <p>Me encargo de diseñar, programar y ejecutar aplicaciones para dispositivos como tabletas o celulares
                  para sistemas operativos como iPhone o Android, haciendo uso de tecnologiuas como xamarin.
                </p>
              </section>

               <section class="servicio">
                <h3>Aplicaciones Web</h3>
                <div class="iconos">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="3" y="5" width="18" height="14" rx="3" />
                    <line x1="3" y1="10" x2="21" y2="10" />
                    <line x1="7" y1="15" x2="7.01" y2="15" />
                    <line x1="11" y1="15" x2="13" y2="15" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-devices-2" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10 15h-6a1 1 0 0 1 -1 -1v-8a1 1 0 0 1 1 -1h6" />
                    <rect x="13" y="4" width="8" height="16" rx="1" />
                    <line x1="7" y1="19" x2="10" y2="19" />
                    <line x1="17" y1="8" x2="17" y2="8.01" />
                    <circle cx="17" cy="16" r="1" />
                    <line x1="9" y1="15" x2="9" y2="19" />
                  </svg>
                </div>

                <p>¿Necesitas una aplicación para tu negocio?<br>  
                  Deja me ayudarte a diseñar y crear esa aplicación que requieres para que administres tui negocio y así aumentes tu productividad.</p>
              </section>
            </div>
           </div> 
          </section>

          <section id="Estudios">
            <h2>Estudios</h2>
              <div class="containerCard">
                <div class="cardd">
                  <h3 class="card-title">Administrador de la nube</h3>  
                  <p class="card-text">Curso realizado en la plataforma aprende.org</p> <br>
                  <a href="#modal1" id="show-modal">Certificado</a>
                </div>

                <div class="cardd">
                  <h3 class="card-title">Asesor de servicios de infraestructura en la nube</h3>  
                  <p class="card-text">Curso realizado en la plataforma aprende.org</p> <br>
                  <a href="#modal2" id="show-modal">Certificado</a>
                </div>

                <div class="cardd">
                  <h3 class="card-title">Desarrollador de aplicaciones en la nube</h3>  
                  <p class="card-text">Curso realizado en la plataforma aprende.org</p> <br>
                  <a href="#modal3" id="show-modal">Certificado</a>
                </div>

                <div class="cardd">
                  <h3 class="card-title">Tecnico en Electronica</h3>  
                  <p class="card-text">Curso realizado en la plataforma aprende.org</p> <br>
                  <a href="#modal4" id="show-modal">Certificado</a>
                </div>

              </div>
          </section>

          <section id="Contacto" class="infoContacto">
            <h2>Contacto</h2>
            <form action="" class="formulario">
              <fieldset>
                <legend>Contactame llenando todos los campos</legend>
                <div class="contenedor-campos">
                  <div class="campo">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" required id="nombre" placeholder="Tu Nombre"/>
                  </div>
                  <div class="campo">
                    <label for="">Telefono</label>
                    <input type="tel" name="telefono" id="telefono" maxlength="10" pattern="[0-9]{10}" required placeholder="Tu Telefono" title="Solo se permiten numeros"/>
                  </div>
                  <div class="campo">
                    <label for="">Correo</label>
                    <input type="email" name="email" required placeholder="ejemplo@ejemplo.com" id="email">
                  </div>
                  <div class="campo">
                    <label for="">Mensaje</label>
                    <textarea class="txarea" name="" id="" cols="30" rows="10"></textarea>
                  </div>
                </div><!-- contenedor-campos -->
                <div class="divboton">
                  <input class="boton w-100" type="submit" value="Enviar">
                </div>
              </fieldset>
            </form>
          </section>

          <section class="Modals">
            <aside id="modal1" class="modal">
              <div class="content-modal">
                <header>
                  <a href="#Servicios" class="close-modal">X</a>
                  <h2>Tecnico en Electronica</h2>
                </header>
                <article>
                  <object class="PDFdoc" width="100%" height="350px" type="application/pdf" data="PDF/Administrador de la nube.pdf"></object><br>
                  <!--<a class="btnverf" href="https://capacitateparaelempleo.org/verifica/q9p1ojstg/" target="_blank">Verfificar</a>-->
                </article>
              </div>
              <!--<a href="#" class="btn-close-modal"></a>-->
            </aside>

            <aside id="modal2" class="modal">
              <div class="content-modal">
                <header>
                  <a href="#Servicios" class="close-modal">X</a>
                  <h2>Asesor de servicios de infraestructura en la nube</h2>
                </header>
                <article>
                  <object class="PDFdoc" width="100%" height="350px" type="application/pdf" data="PDF/Asesor de servicios de infraestructura en la nube.pdf"></object><br>
                  <!--<a class="btnverf" href="https://capacitateparaelempleo.org/verifica/q9p1ojstg/" target="_blank">Verfificar</a>-->
                </article>
              </div>
              <!--<a href="#" class="btn-close-modal"></a>-->
            </aside>

            <aside id="modal3" class="modal">
              <div class="content-modal">
                <header>
                  <a href="#Servicios" class="close-modal">X</a>
                  <h2>Desarrollador de aplicaciones en la nube</h2>
                </header>
                <article>
                  <object class="PDFdoc" width="100%" height="350px" type="application/pdf" data="PDF/Desarrollador de aplicaciones en la nube.pdf"></object><br>
                  <!--<a class="btnverf" href="https://capacitateparaelempleo.org/verifica/q9p1ojstg/" target="_blank">Verfificar</a>-->
                </article>
              </div>
              <!--<a href="#" class="btn-close-modal"></a>-->
            </aside>

            <aside id="modal4" class="modal">
              <div class="content-modal">
                <header>
                  <a href="#Servicios" class="close-modal">X</a>
                  <h2>Tecnico en Electronica</h2>
                </header>
                <article>
                  <object class="PDFdoc" width="100%" height="350px" type="application/pdf" data="PDF/Administrador de la nube.pdf"></object><br>
                  <!--<a class="btnverf" href="https://capacitateparaelempleo.org/verifica/q9p1ojstg/" target="_blank">Verfificar</a>-->
                </article>
              </div>
              <!--<a href="#" class="btn-close-modal"></a>-->
            </aside>

          </section><!--<iframe src="PDF/Administrador de la nube.pdf"style="width:100%; height:700px;" frameborder="0"></iframe>-->


        <!--<section id="Cursos" class="text-center">
          <div class="container">
            <h2 class="section-title" id="subtitulo">Cursos Realizados</h2>
            <div class="row">

              <div class="card shadow-lg m-1" style="width: 17rem;">  
                <div class="card-body"> 
                  <h5 class="card-title">Tecnico en Electronica</h5>  
                  <p class="card-text">Some quick example text to build  on the   card   title and make up the bulk of the card's content.</p>   
                  <a data-toggle="modal" data-target="#electronica" class="btn     btn-primary">Certificado</a>  
                </div>  
              </div>  
    
              <div class="card shadow-lg m-1" style=" width: 17rem;">  
                <div class="card-body"> 
                  <h5 class="card-title">Administrador de la nube</h5>  
                  <p class="card-text">Some quick example text to build  on the ca  rd   title and make up the bulk of the card's content.</p>   
                  <a data-toggle="modal" data-target="#administrador" class=" btn    btn-primary">Certificado</a>  
                </div>
              </div>

              <div class="card shadow-lg m-1" style=" width: 17rem;">  
                <div class="card-body"> 
                  <h5 class="card-title">Desarrollador de aplicaciones en la nube</h5>  
                  <p class="card-text">Some quick example text to build  on the ca  rd   title and make up the bulk of the card's content.</p>   
                  <a data-toggle="modal" data-target="#appnube" class=" btn    btn-primary">Certificado</a>  
                </div>
              </div>

              <div class="card shadow-lg m-1" style=" width: 17rem;">  
                <div class="card-body"> 
                  <h5 class="card-title">Asesor de servicios de infraestructura en la nube</h5>  
                  <p class="card-text">Some quick example text to build  on the ca  rd   title and make up the bulk of the card's content.</p>   
                  <a data-toggle="modal" data-target="#asesor" class=" btn    btn-primary">Certificado</a>  
                </div>
              </div>

            </div>

            <div class="row">

            </div>

          </div>

        </section>-->

        <!--<section id="modals">

          <div class="modal fade" id="electronica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fluid modal-notify modal-info" role="document">
            
              <div class="modal-content">
              
                <div class="modal-header">
                  <p class="heading lead">Tecnico en Electronica</p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <object class="PDFdoc" width="100%" height="500px" type="application/pdf" data="PDF/Tecnico en Electronica.pdf"></object>
                </div>
                
                <div class="modal-footer justify-content-center">
                  <a type="button" class="btn btn-info">Descargar <i class="far fa-file-pdf ml-1 text-white"></i></a>
                  <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Cerrar <i class="fas fa-times ml-1"></i></a>
                </div>
              </div>
              
            </div>
          </div>

          <div class="modal fade" id="appnube" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fluid modal-notify modal-info" role="document">
            
              <div class="modal-content">
              
                <div class="modal-header">
                  <p class="heading lead">Desarrollador de aplicaciones en la nube</p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <object class="PDFdoc" width="100%" height="500px" type="application/pdf" data="PDF/Desarrollador de aplicaciones en la nube.pdf"></object>
                </div>
                
                <div class="modal-footer justify-content-center">
                  <a type="button" class="btn btn-info">Descargar <i class="far fa-file-pdf ml-1 text-white"></i></a>
                  <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Cerrar <i class="fas fa-times ml-1"></i></a>
                </div>
              </div>
              
            </div>
          </div>

          <div class="modal fade" id="asesor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fluid modal-notify modal-info" role="document">
            
              <div class="modal-content">
              
                <div class="modal-header">
                  <p class="heading lead">Asesor de servicios de infraestructura en la nube</p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <object class="PDFdoc" width="100%" height="500px" type="application/pdf" data="PDF/Asesor de servicios de infraestructura en la nube.pdf"></object>
                </div>
                
                <div class="modal-footer justify-content-center">
                  <a type="button" class="btn btn-info">Descargar <i class="far fa-file-pdf ml-1 text-white"></i></a>
                  <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Cerrar <i class="fas fa-times ml-1"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fluid modal-notify modal-info" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p class="heading lead">Administrador de la nube</p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <object class="PDFdoc" width="100%" height="500px" type="application/pdf" data="PDF/Administrador de la nube.pdf"></object>
                </div>

                <div class="modal-footer justify-content-center">
                  <a type="button" class="btn btn-info">Descargar <i class="far fa-file-pdf ml-1 text-white"></i></a>
                  <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Cerrar <i class="fas fa-times ml-1"></i></a>
                </div>
              </div>
            </div>
          </div>
          
        </section>-->


      </main> 
      
      <footer class="footer">
        
        <p>Todos los Derechos Reservados Angel de Jesús Reséndiz López</p>
          
      </footer>
      
    </body>
</html>