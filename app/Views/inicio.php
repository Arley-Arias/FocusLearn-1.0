<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Corso - Training Course Landing Page Template</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html">
       <img src="images/logo.png" alt="alternative" style="width: 200px; height: auto;">
   </a>

 
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
<<<<<<< HEAD
          <nav style="display:flex; gap:25px; align-items:center;">

    <a href="<?= base_url('/registro') ?>" 
       style="color:white; font-weight:bold; text-decoration:none;">
       REGISTRO
    </a>

    <a href="<?= base_url('/curso') ?>" 
       style="color:white; font-weight:bold; text-decoration:none;">
       CURSO
    </a>

    <a href="<?= base_url('/preguntas') ?>" 
       style="color:white; font-weight:bold; text-decoration:none;">
       PREGUNTAS
    </a>

</nav>

=======
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#registro">REGISTRO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#descripcion">DETALLES</a>
                </li>

                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contacto">CONTACTO</a>
                </li>
>>>>>>> 7a33f26d9ffa7583bac48430059228e2ef0a8ad1
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="countdown">
                            <span id="clock"></span>
                        </div>
                        <h1>Focus Learn: Convierte la procrastinación en conocimiento</h1>
                        <p class="p-large">Bienvenido a Focus Learn. Nuestra misión es simple: aprovechar esos momentos muertos (cuando tiendes a procrastinar) para inyectar un poco de cultura general en tu día. Responde preguntas rápidas, mejora tus conocimientos y siéntete un poco más inteligente cada vez que cierras el navegador.</p>
                        <a class="btn-solid-lg page-scroll" href="#register">REGISTRO</a>
                        <a class="btn-outline-lg page-scroll" href="#instructor">DESCUBRIR</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        
        <!-- Image Slider -->
        <div class="outer-container">
            <div class="slider-container">
                <div class="swiper-container image-slider-1">
                    <div class="swiper-wrapper">
                        
                        <!-- Slide -->
                        <div class="swiper-slide" >
                            <img class="img-fluid" src="images/details-slide-1.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/details-slide-2.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/details-slide-3.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                    </div> <!-- end of swiper-wrapper -->
                    
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->
                    
                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
        </div> <!-- end of outer-container -->
        <!-- end of image slider -->

    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Registration -->
    <div id="register" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Register Using The Form</h2>
                        <p>It's easy to register for the course, just fill out the form and click submit. Then you will be registered for one of the best SEO training courses in the industry</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Your information</strong> is required to complete the registration</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>It's safe with us</strong> and will not be used for marketing</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>You will receive</strong> a confirmation email in less than 24h</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Registration Form -->
                    <div class="form-container">
                        <form id="registrationForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rname" name="rname" required>
                                <label class="label-control" for="rname">Complete name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="remail" name="remail" required>
                                <label class="label-control" for="remail">Email address</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rphone" name="rphone" required>
                                <label class="label-control" for="rphone">Phone number</label>
                                <div class="help-block with-errors"></div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">REGISTER</button>
                            </div>
                            <div class="form-message">
                                <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form-container -->
                    <!-- end of registration form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of registration -->

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>