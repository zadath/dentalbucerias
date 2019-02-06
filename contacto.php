<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dentista Bucerias</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="librerias/jquery-3.2.1.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/tooth.svg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->
   
<body>

    <header id="header">
        <div class="top-bar" style="background-color:  #fff">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p style="color: #333"><a href="tel:013292982527" style="color: #333"></a> <i class="fa fa-phone-square"></i>  01 (52) 329 298 2527</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/DraAlbaNydia/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/dentistabucerias/" title="Instagram" target="_blank"><i class="fa fa-instagram" ></i></a></li>  
                            </ul>  
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner" style="background-color:  #fff;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index"><img src="images/AlbaLogo_2.png" alt="logo" width="130"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index">Inicio</a></li>
                        <li><a href="about-us">Nosotros</a></li>
                        <li><a href="services">Servicios</a></li>
                        <li><a href="precios">Precios</a></li>
                        <li><a href="promos">Promociones</a></li>
                        <li><a href="portfolio">Galería</a></li>                        
                        <li class="active"><a href="contact-us">Solicita una cita</a></li>                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->


    <div class="page-title" style="background-image: url(images/contactanos1.jpg)">
        <h1>Contáctanos</h1>
    </div>

    <section id="contact-page">
        <div class="container">
            <div class="large-title text-center">        
                <h2>Escríbenos</h2>
                <p>Dejanos tu mensaje solicitando información de servicios y costos <br> no olvides ingresar tu télefono para un seguimiento oportuno! P H P</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" action="nmail.php" method="post">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Tu nombre *</label> 
                            <input type="text" name="nombre" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="correo" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="number" name="tel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Datos de tu empresa</label>
                            <input type="text" name="empresa" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Asunto *</label>
                            <input type="text" name="asunto" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mensaje *</label>
                            <textarea name="mensaje" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    
    <section id="bottom">
            <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-md-2">
                        <a href="#" class="footer-logo">
                            <img src="images/AlbaLogo_2.png" alt="logo" width="300">
                        </a>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                    <div class="widget">                                    
                                            <h3>DENTISTA BUCERIAS</h3>
                                            <p>Avenida Pacifico 57 local 5 Centro de Bucerias entre calle Cuauhtémoc e Hidalgo <br> Bucerias Nayarit, México. <br> Teléfono 01  329 29 82527 <br> dentistabucerias@gmail.com</p>                                    
                                        </div>
                            </div>
                            <!--/.col-md-3-->
    
                            <div class="col-md-3 col-sm-6">
                                    <div class="widget">
                                        <h3>Horarios de atención</h3>
                                        <p><strong>Por las mañanas </strong> <br>
                                                Lunes a viernes 9:00am a 4.00pm<br>
                                                Sábados por la mañana previa cita
                                                </p>
                                        <p><strong>Por las tardes </strong><br>
                                                Martes y jueves de 5:00pm a 7:30pm
                                                </p>
                                    </div>
                                </div>
                            <!--/.col-md-3-->
    
                            <div class="col-md-3 col-sm-6">
                                <div class="widget">
                                    <h3>Varios</h3>
                                    <ul>
                                        <li><a href="faqs">Preguntas frecuentes</a></li>
                                        <li><a href="avisoprivacidad">Aviso de privacidad</a></li>
                                        <li><a href="terminos">Términos y condiciones</a></li>
                                        <li><a href="contact-us">Contáctanos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--/.col-md-3-->
    
                            <div class="col-md-3 col-sm-6">
                                <div class="widget">
                                    <h3>Redes sociales</h3>
                                    <ul>
                                        <li><a href="https://www.facebook.com/DraAlbaNydia/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i>  Facebook</a></li>
                                        <li><a href="https://www.instagram.com/dentistabucerias/" title="Instagram" target="_blank"><i class="fa fa-instagram" ></i>  Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--/.col-md-3-->
                        </div>
                    </div>
    
    
                </div>
            </div>
        </section>
        <!--/#bottom-->
    
        <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2019 <a target="_self" href="index" title="Lion Software">Dentista Bucerias</a>. Todos los derechos reservados.
                    </div>
                    <div class="col-sm-6">
                        <ul class="pull-right">
                            <li><a href="index">Inicio</a></li>
                            <li><a href="about-us">Nosotros</a></li>
                            <li><a href="services">Servicios</a></li>
                            <li><a href="contact-us">Contáctanos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/mail.js"></script>
</body>

</html>
