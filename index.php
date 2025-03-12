<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NextGen</title>

    <link rel="stylesheet" href="Css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"

    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
  </head>
  <body>
    <header>
      <a href="index.php" class="logo"
        ><img src="img/nextgenlogosinfondo.png" />NEXTGEN HOME
      </a>

     

      <div class="sesion">
        <a href="indexsesion.php" class="Sesión-botón">Iniciar Sesión </a>
        <i class="ri-moon-clear-fill" id="darkmode"></i>
      </div>
    </header>

    
  <main>
    <!--Carousel-->
  <section id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/salacasa.jpg" class="d-block w-100" alt="casa moderna con piscina" />
      </div>
      <div class="carousel-item">
        <img src="img/Habitacion.png" class="d-block w-100" alt="Habitación" />
      </div>
      <div class="carousel-item">
        <img src="img/Cocina.png" class="d-block w-100" alt="cocina" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </section>
  <!--End of carousel-->
  <section section2>
    <div class="header-content container">
      <div class="header-txt">
        <h1>Vivienda</h1>
        <p>
          El Proyecto NEXTGEN es una iniciativa dedicada a proporcionar
          soluciones habitacionales asequibles y de alta calidad para las
          comunidades necesitadas. Nuestro objetivo es garantizar que cada
          familia tenga acceso a una vivienda digna, segura y cómoda,
          contribuyendo así a mejorar su calidad de vida y fomentar el
          desarrollo sostenible de las comunidades.
        </p>
        <button type="button" class="btn btn-outline-secondary">
          Información
        </button>
      </div>
      <div class="header-img">
        <img src="img/Vivienda1.png" alt="Imagen de Vivienda" />
      </div>
    </div>
  </section>
  <section section3>
    <div class="about-content container">
      <div class="about-img">
        <img
          src="img/ABC-Vivienda-de-interes-prioritario.jpg"
          alt="Vivienda de interés prioritario"
        />
      </div>
      <div class="about-txt">
        <h2>NextGen Home</h2>
        <p>
          En NextGen Home, nos esforzamos por revolucionar la forma en que
          concebimos y construimos viviendas. Creemos en un futuro donde los
          hogares no solo sean estructuras físicas, sino también ecosistemas
          inteligentes que se integren perfectamente con nuestro estilo de
          vida, priorizando la sostenibilidad, la comodidad y la salud de
          quienes los habitan.
        </p>
        <button type="button" class="btn btn-outline-secondary">
          Información
        </button>
      </div>
    </div>
  </section>

  <section class="informacion">
    <div class="informacion-content container">
      <img class="in1" src="img/v3.jpg" alt="Información 1" />
      
    </div>
  </section>
   <!--Accordion-->
   <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿Qué es?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>¿De que se trata?:</strong> Es una iniciativa diseñada para proporcionar vivienda a personas o
          familias que cumplen con ciertos criterios de elegibilidad, como
          bajos ingresos, situación de vulnerabilidad o necesidades
          especiales. Estos proyectos suelen ser implementados por gobiernos,
          organizaciones sin fines de lucro o empresas privadas en
          colaboración con agencias gubernamentales.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ¿Quiénes somos?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>Sobre nosotros:</strong> En NextGen Home, somos un equipo apasionado dedicado a la creación
          de hogares del futuro. Nos enorgullece ser líderes en el diseño y
          construcción de viviendas inteligentes y sostenibles que marcan la
          pauta en innovación y calidad. Con años de experiencia en la
          industria de la construcción y un compromiso inquebrantable con la
          sostenibilidad, hemos reunido un equipo diverso de expertos en
          arquitectura, ingeniería, diseño interior y tecnología para ofrecer
          soluciones innovadoras que transforman la manera en que vivimos.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Subscribete a nuestras noticias
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-content">
            <h2>Subscribete a nuestras noticias</h2>
            <form>
              <input class="campo" type="text" name="name" placeholder="Nombre" />
              <input class="campo" type="email" name="email" placeholder="Correo" />
              <textarea class="campo" placeholder="Mensaje"></textarea>
              <input class="btn-2" type="submit" value="Enviar" />
            </form>
          </div>
      </div>
    </div>
  </div>
  <!--End of Accordion-->

  </main>

  <footer class="footer">
    <div class="container">
      <div class="footer-row">
        <div class="footer-links">
          <h4>Compañía</h4>
          <ul>
            <li><a href="#">Sobre Nosotros</a></li>
            <li><a href="#">Proyectos Actuales</a></li>
            <li><a href="#">Testimonio</a></li>
            <li><a href="#">Afíliate</a></li>
          </ul>
        </div>

        <div class="footer-links">
          <h4>Soporte Técnico y Ayuda</h4>
          <ul>
            <li><a href="#">Centro de Ayuda</a></li>
            <li><a href="#">Guías y Tutoriales</a></li>
            <li>
              Contacto de Soporte:
              <ul>
                <li>Teléfono: +312-551-6598</li>
                <li>
                  Correo Electrónico:
                  <a href="mailto:soporte@NextGenHome.com"
                    >soporte@NextGenHome.com</a
                  >
                </li>
                <li>
                  Horario de Atención: Lunes a Viernes, de 9:00 AM a 6:00 PM
                </li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="footer-links">
          <h4>Recursos</h4>
          <ul>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Foros de la Comunidad</a></li>
            <li><a href="#">Preguntas Frecuentes</a></li>
          </ul>
        </div>

        <div class="footer-links">
          <h4>Conéctate con Nosotros</h4>
          <div class="social-link">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-copy">
        <p>&copy; 2024 NextGen Home</p>
      </div>
    </div>
  </footer>

  <script src="js/app.js"></script>
  </body>

</html>
