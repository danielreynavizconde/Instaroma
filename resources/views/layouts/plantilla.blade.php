<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link  rel="icon"   href="{{asset('images/instaroma-icono.jpg')}}" type="image/png" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/10254330b3.js" crossorigin="anonymous"></script>

    <!--menu-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu_topside.css')}}" />

    <link href="{{asset('css/ustora.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">

    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "4305fd04-34ec-4f44-be15-f4a2d94853ca", // The ID of this integration.
            region: "us-south", // The region your integration is hosted in.
            serviceInstanceID: "4482d0e9-9a5f-4253-9a3c-bed15e9f9fc3", // The ID of your service instance.
            onLoad: function(instance) { instance.render(); }
          };
        setTimeout(function(){
          const t=document.createElement('script');
          t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
          document.head.appendChild(t);
        });
      </script>

    <style>
        *{
        padding: 0px;
        margin: 0px;
        }
        #pie
        {
            float: left;
            width: 100%;
            background: red;
        }

    </style>
</head>
<body>
    <div class="container1">
        <div class="menu-wrap">
            <nav class="menu-top">
                <div class="profile"><img src="{{asset('images/user1.png')}}" alt="Foto" style="border-radius: 50%;"/><span>Daniel Reyna</span></div>
                <div class="icon-list">
                    <a href="#"><i class="fa fa-fw fa-star-o"></i></a>
                    <a href="#"><i class="fa fa-fw fa-bell-o"></i></a>
                    <a href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
                    <a href="#"><i class="fa fa-fw fa-comment-o"></i></a>
                </div>
            </nav>
            <nav class="menu-side">
                <a href="{{route('home')}}">Inicio</a>
                <a href="{{route('productos.index')}}">Productos</a>
                <a href="{{route('talleres')}}">Talleres</a>
                <a href="{{route('contacto')}}">Contacto</a>
            </nav>
        </div>
        <!--<button class="menu-button" id="open-button">Open Menu</button>-->
        <div class="content-wrap">
            <div class="content">
                <div class="header-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="user-menu">
                                    <ul>
                                        <!--<li><a href="#"><i class="fa fa-heart"></i> Favoritos</a></li>
                                        <li><a href="cart.html"><i class="fa fa-user"></i> Mi Carrito</a></li>
                                        <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>-->
                                        <li><a href="{{route('admin.home')}}"><i class="fa fa-user"></i> Iniciar Sesión / Registrate</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="header-right">
                                    <ul class="list-unstyled list-inline">
                                        <li class="dropdown dropdown-small">
                                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Moneda: </span><span class="value">PEN </span><b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">PEN</a></li>
                                                <!--<li><a href="#">USD</a></li>-->
                                            </ul>
                                        </li>

                                        <li class="dropdown dropdown-small">
                                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Lenguaje: </span><span class="value">Español </span><b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Español</a></li>
                                                <li><a href="#">English</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End header area -->
                <div class="site-branding-area" style="border-bottom: 5px solid red;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6"><button class="menu-button" id="open-button" style="float: left;">Open Menu</button>
                                <div class="logo">
                                    <a href="{{route('home')}}" style="float: left;"><img class="logo" style="height: 50px;margin:13px 5px;" src="{{asset('images/instaroma-logo.jpg')}}"></a>
                                </div>
                            </div>
                            <!--
                            <div class="col-sm-6">
                                <div class="shopping-item">
                                    <a href=""><i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                                </div>
                                <div class="shopping-item">
                                    <a href="{{route('dashboard')}}"><i class="fa fa-truck"></i></a>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div> <!-- End site branding area -->



@yield('content')

                <div class="footer-top-area">
                    <!--<div class="zigzag-bottom"></div>-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="footer-about-us">
                                    <h2>Instaroma</h2>
                                    <p>Somos un emprendimiento, dedicados a la venta de insumos y jabones artesanales hechos con glicerina, aromas y colores según tu gusto para todo tipo de evento especial para ti.
                                        <br>Celular:945 160 000
                                        <br>Dirección: Zela 311, 2do nivel. Trujillo</p>
                                    <div class="footer-social">
                                        <a href="https://www.facebook.com/InstAroma" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.instagram.com/instaroma.oficial/" target="_blank"><i class="fa fa-instagram"></i></a>
                                        <!--<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>-->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="footer-menu">
                                    <h2 class="footer-wid-title">Atención al cliente</h2>
                                    <ul>
                                        <li><a href="#">Turorial de compra</a></li>
                                        <li><a href="#">Preguntas frecuentes</a></li>
                                        <li><a href="#">Cambios y devoluciones</a></li>
                                        <li><a href="#">Tiendas fisicas</a></li>
                                        <li><a href="#">Pilítica de datos</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="footer-menu">
                                    <h2 class="footer-wid-title">Categorias</h2>
                                    <ul>
                                        <li><a href="#">Insumos</a></li>
                                        <li><a href="#">Jabones</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-newsletter">
                                    <h2 class="footer-wid-title">Talleres</h2>
                                    <p>Suscríbase a nuestro boletín y te avisaremos cuando dictemos talleres por SolTV en su bandeja de entrada.</p>
                                    <div class="newsletter-form">
                                        <form action="#">
                                            <input type="email" placeholder="nombre@correo.com">
                                            <input type="submit" value="Suscribirse">
                                        </form>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div> <!-- End footer top area -->

                <div class="footer-bottom-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="copyright">
                                    <p>&copy; 2021 Instaroma. Todos los derechos reservados. <!--<a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a>--></p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="footer-card-icon">
                                    <i class="fa fa-cc-discover"></i>
                                    <i class="fa fa-cc-mastercard"></i>
                                    <i class="fa fa-cc-paypal"></i>
                                    <i class="fa fa-cc-visa"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End footer bottom area -->


            </div>
        </div><!-- /content-wrap -->
    </div><!-- /container -->

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.sticky.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.easing.1.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bxslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.slider.js')}}"></script>
    <!--menu-->
    <script src="{{asset('js/classie.js')}}"></script>
	<script src="{{asset('js/menu.js')}}"></script>
    <!--inputNumber-->
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{asset('js/handleCounter.js')}}"></script>
    <script>
        $(function ($) {
            var options = {
                minimum: 1,
                maximize: 100,
                onChange: valChanged,
                onMinimum: function(e) {
                    console.log('reached minimum: '+e)
                },
                onMaximize: function(e) {
                    console.log('reached maximize'+e)
                }
            }
            $('#handleCounter').handleCounter(options)
            $('#handleCounter2').handleCounter(options)
			$('#handleCounter3').handleCounter({maximize: 100})
        })
        function valChanged(d) {
            //  console.log(d)
        }
    </script>
    <!-- *********** Whatsapp *********** -->
    <a href="https://web.whatsapp.com/send?phone=573102109040&text=Hola%20estoy%20interesad@%20en%20sus%20productos,%20quisiera%20saber%20m%C3%A1s%20al%20respecto." target="blank" class="whatsapbuttom" style="text-decoration: none;">
        <i class="fa fa-whatsapp"></i>
    </a>
    <a href="https://m.me/InstAroma" target="blank" class="facebookbuttom" style="text-decoration: none;">
        <i class="fa fa-facebook"></i>
    </a>

</body>
</html>
