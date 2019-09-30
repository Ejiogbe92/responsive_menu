<?php
?>


<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Menu_Responsive</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/font-awesome.css">
    </head>
    <body>

        <header>
                    <!-- Botom Mostrar Menu en JQuery -->
            <span id="button-menu" class="fa fa-bars"></span>
            
                <!-- Mostrar Sub-Men en JQuery -->
                
                <nav class="navegacion">

                <ul class="menu">
                    <li class="title-menu">Todas las categorias</li>
                    <li><a href="#"><span class="fa fa-home"></span>Inicio</a></li>
                    
                    
                    
                      <!-- Ocultar Sub-Men en JQuery -->

                    <li class="item-submenu" menu="1">
                        <a href="#"><span class="fa fa-suitcase"></span>Servicios</a>

                        <ul class="submenu">
                            <li class="title-menu"><span class="fa fa-suitcase"></span>Servicios</li>
                            
                           
                            <li class="go-back">Atras</li>
                                       
                                    
                            <li><a href="">Diseño web</a></li>
                            <li><a href="">Alojamiento web</a></li>
                            <li><a href="">Dominios</a></li>

                        </ul>

                    </li>


                    <li class="item-submenu" menu="2">

                        <a href="#"><span class="fa fa-home"></span>Tienda</a>

                        <ul class="submenu">
                            <li class="title-menu"><span class="fa fa-shopping-bag icon-menu"></span>Tienda</li>
                            
                            <li class="go-back">Atras</li>

                            <li><a href="#">Laptops</a></li>
                            <li><a href="#">Smarphones</a></li>
                            <li><a href="#">Consolas de viejuegos</a></li>
                        </ul>


                           
                    </li>
                    
                            <!--   Fin Ocultar Sub-Men en JQuery  -->
                            
                    <li><a href="#"><span class="fa fa-users"></span>Clientes</a></li>
                    <li><a href="#"><span class="fa fa-tags"></span>Acerca de</a></li>
                    
                    <li class="item-submenu" menu="3">
                    
                    <a href="#"><span class="fa fa-envelope"></span>Contacto</a>
                    
                     <ul class="submenu">
                            <li class="title-menu"><span class="fa fa-envelope"></span>Contacto</li>
                            
                            <li class="go-back">Atras</li>

                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>

                    
                    
                    
                    </li>
                </ul>

            </nav>

       </header>


        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/app.js"></script>

    </body>
</html>

