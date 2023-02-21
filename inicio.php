<?php 
	session_start();

	if(isset($_SESSION['user'])){
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TATTO MOTION</title>
       <link rel="stylesheet" >
       
       
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
		<a class="header.masthead"><img src="img/header-bg.jpg"  alt="..." ></a>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
      
        <link href="styles.css" rel="stylesheet" />
     
    </head>
    
    <body id="page-top">
       

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
			
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Album</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Acerca de </a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#preguntas">Preguntas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#login">Certificados</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                       
                    </ul>
                </div>
            </div>
        </nav>
      
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase">Para todo el barrio que se quiere tatuar</div>
            <br>
            <br>
                <div class="masthead-subheading">BIENVENIDO A TATTO MOTION</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Ver Página</a>
            </div>
        </header>
      
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios que ofrecemos.</h2>
                </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/servicios/4.jpg" alt="..." />
                        <h4>Tatuajes</h4>
                        <p class="text-muted">Tendrás comunicación directa en todo momento con el artista de tatuaje. Crearemos juntos el tatuaje de tus sueños.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/servicios/5.jpg" alt="..." />
                        <h4>Perforaciones</h4>
                        <p class="text-muted">Los piercings se caracterizan por dar personalidad y estilo a cualquier oreja, pudiendo hacer cientos de combinaciones diferentes.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/servicios/6.jpg" alt="..." />
                        <h4>skateboard</h4>
                        <p class="text-muted">Existen grandes diferencias entre las tablas skateboards,mucho más de lo que uno se imagina.
                             Una tabla skateboard no es una tabla común con ruedas debajo.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                
               
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Album</h2>
                    <h3 class="section-subheading text-muted">Nuestros trabajos hablan por si solos.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tatuaje</div>
                                <div class="portfolio-caption-subheading text-muted">Area Especifica</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tatuaje</div>
                                <div class="portfolio-caption-subheading text-muted">Manga</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Perforaciones</div>
                                <div class="portfolio-caption-subheading text-muted">Area Lateral</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Perforaciones</div>
                                <div class="portfolio-caption-subheading text-muted">Area Facial</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">skateboard</div>
                                <div class="portfolio-caption-subheading text-muted">Para  niños y adolecentes </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">skateboard</div>
                                <div class="portfolio-caption-subheading text-muted">Profecionales</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Mi Historia</h2>
                    <h3 class="section-subheading text-muted">Arturo Xinaxtle Mejia</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1990</h4>
                                <h4 class="subheading">Quién soy </h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Mi nombre es Arturo Xinaxtle y soy de ciudad Juarez Chihuahua, México, naci aqui y aqui me crie en el barrio del centro de la ciudad.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2010</h4>
                                <h4 class="subheading">Estados Unidos</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">En el 2010 me fui a vivir a Estados Unidos con mi padre al estado de Californa , donde trabaje como ayudante de Tatuador.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2014</h4>
                                <h4 class="subheading">México</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Cuando volvi a México tenia experiencia tatuado ya que mi primo me enseño todo lo que se tenia que saber como tatuador y meses despues entre a una escuela para certificarme profecionalmente.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2015-2021</h4>
                                <h4 class="subheading">Tatto Motion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">En el 2015 abri mi primer Estudio de tatuajes en el barrio donde vivia, comenze solo pero conoci a dos buenos amigos alejandra perforadora profecional y a hector experto en skateboard.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Mi
                                <br />
                                Historia
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Equipo Tatto Motion</h2>
                    <h3 class="section-subheading text-muted">El trio perfecto</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="..." />
                            <h4>Arturo Xinaxtle</h4>
                            <p class="text-muted">Tatuador Estrella</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/antony.d.campos"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="..." />
                            <h4>Alejandra Huerta</h4>
                            <p class="text-muted">Perforadora Principal</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="..." />
                            <h4>Hector Mercado</h4>
                            <p class="text-muted">Experto en skateboard</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Clients-->
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"></p><h3>PREGUNTAS FRECUENTES SOBRE TATUAJES</h3></div>
        </div>
        <div class="py-5" id="preguntas">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"> </p>
            <details>
                <summary>¿Como se clasifican los tatuajes?</summary>
                    <p><h5>Por la profundidad:</h5> Según la profundidad de los tatuajes, estos pueden ser: Temporales, que pueden ser removidos una vez  que los pigmentos son colocados en la capa córnea.
                        Por el contrario, cuando los pigmentos son implantados en la dermis  no pueden ser  removidos y los tatuajes pasan a ser permanentes. </p>
                    <p><h5>Según la técnica y herramientas empleadas:</h5> Los profesionales se realizan con una máquina hecha específicamente para tatuar.Los amateurs por el contrario son hechos con bolígrafos, tinta de rotular o cualquier elemento punzante.  </p> 
                    <p><h5>Según los pigmentos :</h5>Es de gran importancia conocer los pigmentos que son usados en tu piel a la hora de querer eliminarlos o realizar cualquier retoque. Dentro de la clasificación de los tatuajes algunos son inorgánicos, que son opacos,
                        insolubles y estables al ser expuestos a la luz y el calor. Los orgánicos, por otra parte, son brillantes, solubles, sintéticos y menos estables.  </p>     
            </details>    
            <details>
                <summary>¿Cuantos tipos de tatuajes existen?</summary>
                <p>Realista</p>
                <p>Acuarela</p>
                <p>Tribal</p>
                <p>Grafiti</p>
                <p>Tradicional</p>
                <p>Neotradicional</p>
                <p>Góticos</p>
                <p>Escritos</p>
                <p>Geométricos</p>
                <p>Dotworks</p>
                <p>Japonés</p>
            </details>
            <details>
                <summary>¿Hace falta cita?</summary>
                <p>En estos momentos debido a la situación sanitaria provocada por la Covid 19, es imprescindible perdirla, para garantizar tu seguridad y la de nuestro equipo.</p>
             </details>
             <details>
                <summary>¿Cuál es la edad mínima para tatuarse?</summary>
                <p>Cómo edad mínima legal son los 18 años, los menores pueden tatuarse siempre que vengan acompañados por uno de sus padres.</p>
             </details>
             <details>
                <summary>¿Que tipo de materiales utilizás?</summary>
                <p>Los materiales que se utilizan en Tatto Motion son de primera calidad, las agujas y grips son estériles, desechables y de un sólo uso, al igual que el resto del material necesario para la realización del tatuaje; en nuestro estudio no tenemos autoclave, con lo cuál no esterilizamos material, 
                    todo viene directamente esterilizado desde el distribuidor, y se abre delante del cliente, conforme a la legislación vigente.</p>
             </details>
             <details>
                <summary>¿Y las tintas?</summary>
                <p>Las tintas utilizadas son las homologadas y permitidas por Cofepris.</p>
             </details>
             <details>
                <summary>¿Antes de tatuarme puedo beber alcohol?</summary>
                <p>No puedes beber antes, ni inmediatamente después de tatuarte. Beber alcohol puede afectar en tu toma de decisiones, no provocará una disminución del dolor, 
                    aumentará el sangrado e influirá en el acabado del tatuaje y su cicatrización.</p>
             </details>
             <details>
                <summary>¿Cómo debo cuidar mi tatuaje?</summary>
                <p>1)Retira el plástico dentro de 8 horas.</p>
                <p>2)Lava tu tattoo con jabón antibacterial una vez al día.</p>
                <p>3)Aplica la crema para tatuaje 2 veces al día en capa muy delgada, durante 4 días.</p>
                <p>4)Al 5º día cambia a crema lubricante, úsala 1 vez al día en capa muy delgada, durante 7 días.</p>
                <p>5)Usa ropa limpia y holgada.</p>
                <p>6)Evita exponerte al sol, mar, albercas, vapor y sauna y hacer ejercicio durante 10 días.</p>
             </details>
             <br>
             <br>
             <!-- login-->
        <section class="page-section" id="login">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Certificados</h2>
                    
                    <h3 class="section-heading text-uppercase">Somos una empresa 100% certificada por cofepris</h3>
                    <h4 class="section-heading text-uppercase">Targeta de control sanitario </h4>
                    <img class="" src="img/cer/tatuador.png" alt="..." />
                    <br>
                    <br>
                    <h4 class="section-heading text-uppercase">Certificado de calidad </h4>
                    <img class="" src="img/cer/diplo.png" alt="..." />
                    <br>
                    <br>
                    <h4 class="section-heading text-uppercase">Diploma de la escuela EOMTP</h4>
                    <img class="" src="img/cer/dip.png" alt="..." />
                    <br>
                    <br>
                    <h4 class="section-heading text-uppercase">Página oficial de la escula</h4>
                    <img class="" src="img/cer/esc.png" alt="..." />
                    <br>
                    <br>
                    <A HREF="https://eomtp.com/escuela-de-tatuaje.php"> Link de la página web oficial de la ecuela EOMTP </A>
                </div>
                <br>
                <br>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contactanos</h2>
                    <h3 class="section-subheading text-muted">Si quieres empezar a modificar tu cuerpo somos tu mejor opción en Ciudad Juarez.</h3>
                    <h3 class="section-subheading text-muted">Mandonos un mensaje por WHATSAPP y te contactaremos lo antes posible, si tienes alguna pregunta ve a la area de preguntas frecuentes y buscala.</h3>
                    <h2 class="section-heading text-uppercase">"Nunca se tienen tatuajes suficientes”</h2>
                </div>
                


               
                
                  
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error de envio!</div></div>
                    <!-- Submit Button-->
                    
                </form>
            </div>
        </section>






        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Tatto Motion 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Politicas de privacidad</a>
                        <a class="link-dark text-decoration-none" href="#!">Terminos de uso</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Tatuaje Medio</h2>
                                    <p class="item-intro text-muted">Cualquier area del cuerpo</p>
                                    <img class="img-fluid d-block mx-auto" src="img/portfolio/1.jpg" alt="..." />
                                    <p>Dependiendo del area a tatuar dependera el costo,tiempo y dolor que estaras dispuesto aguantar.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                            2000
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Tatuajes
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar pestaña
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Tatuajes Manga Completa</h2>
                                    <p class="item-intro text-muted">Brazos o Piernas.</p>
                                    <img class="img-fluid d-block mx-auto" src="img/portfolio/2.jpg" alt="..." />
                                    <p>Los tatuajes de manga completa comienzan en la parte superior del brazo o el hombro y se extienden hasta la muñeca. Dependiendo del diseño, algunas mangas completas también incorporan la mano e incluso los dedos.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>precio:</strong>
                                            5000
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Tatuajes
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar pestaña
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Perforaciones Areas Laterales</h2>
                                    <p class="item-intro text-muted">Orejas</p>
                                    <img class="img-fluid d-block mx-auto" src="img/portfolio/3.jpg" alt="..." />
                                    <p>El piercing de moda que más está triunfando este último año es el piercing de oreja hélix o de cartílago, uno de los más complicados en cuanto a su curación, pero una vez curado es el más versátil y que mejor queda con cualquier recogido.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                            350
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Perforaciones
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar pestaña
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Piercing Rostro</h2>
                                    <p class="item-intro text-muted">Nariz,labios,cejas.</p>
                                    <img class="img-fluid d-block mx-auto" src="img/portfolio/4.jpg" alt="..." />
                                    <p>El bridge piercing y vertical brigde, el septum piercing, high nostril piercing o los microdermales son otras de las opciones a elegir cuando se habla de perforaciones en la cara.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                            150
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Perforaciones
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar pestaña
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">skateboard Fanaticos</h2>
                                    <p class="item-intro text-muted">No requiere montaje</p>
                                    <img class="img-fluid d-block mx-auto" src="img/portfolio/5.jpg" alt="..." />
                                    <p>Metroller Skateboards, 31 x 8 tablas de skate estándar completas para niñas niños principiantes, 7 capas de arce canadiense doble patada cóncava monopatín para niños jóvenes y adolescentes</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                            1100
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            skateboard
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar pestaña
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">skateboard profecionales</h2>
                                    <p class="item-intro text-muted">Diferencias entre longboard y skate</p>
                                    <img class="img-fluid d-block mx-auto" src="img/portfolio/6.jpg" alt="..." />
                                    <p>Estas tablas de longboard y skate son de la marca BeXtreme, una marca de Barcelona creada por riders que hace las cosas de manera diferente. </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                            2500
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            skateboard
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar pestaña
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

 

<?php
} else {
	header("location:index.php");
	}
 ?>
