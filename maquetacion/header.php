<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		Mok
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <div class="fix-footer">
            <header class="header">
                <div class="container">
                    <div class="header__mobile--icons">
                        <button class="phone">
                            <span class="phone-icon-svg">
                                <img src="img/telefono.svg" alt="Llámanos">
                            </span>
                            <ul class="phone__selector line-up">
                                <li><a href="tel:12345678" title="Chile">Chile</a></li>
                                <li><a href="tel:12345678" title="Peru">Perú</a></li>
                                <li><a href="tel:12345678" title="Colombia">Colombia</a></li>
                            </ul>
                        </button>
                        <button class="phone this-search">
                            <img src="img/lupa-mobile.svg" alt="Buscar">
                        </button>
                    </div><!--Iconos de telefono y buscador NO desktop-->
                    <div class="header__logo">
                        <a href="index.php" title="Inicio">
                            <img src="img/logo.svg" alt="logo">
                        </a>
                    </div><!--Loogo de todas las resoluciones-->
                    <div class="header__mobile--icon-menu">
                        <p class="btn-text open">Menú</p>
                        <p class="btn-text close">Cerrar</p>
                        <div class="content--bar">
                            <div class="bar bar--top"></div>
                            <div class="bar bar--middle"></div>
                            <div class="bar bar--bottom"></div>
                        </div>
                    </div><!--Icono hamburguesa y cerrar menu-->
                    <div class="header__menu">
                        <div class="header__menu--top clearfix">
                            <ul class="header__menu--top--left">
                                <li class="icon--phone">
                                    <img src="img/phone.svg" alt="Llámanos">
                                </li>
                                <li>600 600 7676</li>
                                <li>02-2200 29 00</li>
                                <li class="icon--flag">
                                    <a href="#" title="Chile" class="active">
                                        <img src="img/bandera-chile.svg" alt="Chile">
                                    </a>
                                </li>
                                <li class="icon--flag">
                                    <a href="#" title="Peru">
                                        <img src="img/bandera-peru.svg" alt="Perú">
                                    </a>
                                </li>
                                <li class="icon--flag">
                                    <a href="#" title="Colombia">
                                        <img src="img/bandera-colombia.svg" alt="Colombia">
                                    </a>
                                </li>
                            </ul><!--Temina menu de cambio de pais y telésfonos-->
                            <ul class="header__menu--top--right">
                                <li class="menu-item menu-item-has-children<?php if ( $page == 'nuestros-sitios' ) { echo ' current-menu-item current-page-ancestor'; } ?>"> <span>Nuestros Sitios</span>
                                    <ul class="line-up sub-menu">
                                        <li><a href="#" title="Provedores">primer sitio</a></li>
                                        <li><a href="#" title="Provedores">segundo sitio</a></li>
                                    </ul>
                                </li>
                            </ul><!--Termina menu superior izquierdo-->
                        </div><!--Menu superior-->
                        <ul class="header__menu--nav">
                            <li class="menu-item menu-item-has-children<?php if ( $page == 'nosotros' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                <span>Sobre nosotros</span>
                                <ul class="line-up sub-menu">
                                    <li class="menu-item <?php if ( $subpage == 'que-hacemos' ) { echo 'current_page_item'; } ?>">
                                        <a href="page-que-hacemos.php" title="Que hacemos">Qué hacemos</a>
                                    </li>
                                    <li class="menu-item <?php if ( $subpage == 'equipo' ) { echo 'current_page_item'; } ?>">
                                        <a href="page-equipo.php" title="Equipo">Equipo</a>
                                    </li>
                                    <li class="menu-item <?php if ( $subpage == 'historia' ) { echo 'current_page_item'; } ?>">
                                        <a href="page-historia.php" title="Historia">Historia</a>
                                    </li>
                                    <li class="menu-item <?php if ( $subpage == 'red-internacional' ) { echo 'current_page_item'; } ?>">
                                        <a href="page-red-internacional.php" title="Red internacional">Red internacional</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children<?php if ( $page == 'servicios' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                <span>Servicios a Personas</span>
                                <ul class="line-up sub-menu">
                                    <li class="menu-item <?php if ( $subpage == 'mok-travel' ) { echo 'current_page_item'; } ?>">
                                        <a href="single-servicios.php" title="MOK Travel">MOK Travel</a>
                                    </li>
                                    <li>
                                        <a href="#" title="Prever">Prever</a>
                                    </li>
                                    <li>
                                        <a href="#" title="MOK SOS">MOK SOS</a>
                                    </li>
                                    <li>
                                        <a href="#" title="Cotiza OK">Cotiza OK</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children<?php if ( $page == 'servicios' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                <span>Servicios a Empresas</span>
                                <ul class="line-up sub-menu">
                                    <li>
                                        <a href="#" title="Call Center">Call Center</a>
                                    </li>
                                    <li>
                                        <a href="#" title="Liquidaciones">Liquidaciones</a>
                                    </li>
                                    <li>
                                        <a href="#" title="Administración de seguros">Administración de seguros</a>
                                    </li>
                                    <li>
                                        <a href="#" title="Outsourcing de procesos">Outsourcing de procesos</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children<?php if ( $page == 'servicios' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                <span>Servicios a Bienes</span>
                                <ul class="line-up sub-menu">
                                    <li>
                                        <a href="#" title="Garantía extendida">Garantía extenida</a>
                                    </li>
                                    <li>
                                        <a href="#" title="Asistencia Hogar">Asistencia Hogar</a>
                                    </li>
                                    <li>
                                        <a href="#" title="Asistencia vehicular">Asistencia vehicular</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item<?php if ( $page == 'novedades' ) { echo ' current-menu-item current-page-ancestor'; } ?>"><a href="page-novedades.php" title="novedades"><span>Novedades</span></a></li>
                            <li class="menu-item<?php if ( $page == 'contacto' ) { echo ' current-menu-item current-page-ancestor'; } ?>"><a href="page-contacto.php" title="contacto"><span>Contacto</span></a></li>
                            <li class="icon-search">
                               Buscar
                                <img src="img/lupa-simple.svg" alt="lupa">
                            </li>
                        </ul><!--Menu de navegación-->
                    </div><!--Termina container Header-->
                </div>
            </header>
            <!--Inicia cdigo buscador-->
            <div class="search">
                <div class="back-cover"></div>
                <div class="icon-close"></div>
                <div class="container">
                    <form action="" class="formulario--form search--form">
                        <div class="input-group">
                            <input type="text" class="input-text" placeholder="Buscar...">
                            <input type="submit" value=" " class="input-send">
                        </div>
                    </form>
                    <div class="resultado">
                        <p class="resultado--title">Resultado para <span>"Un Tallarin"</span></p>
                        <div class="resultado--content">
                            <a href="single.php" title="Titulo">Un tallarin, que se mueve por aqui</a>
                            <a href="single.php" title="Titulo">que se mueve por alla</a>
                            <a href="single.php" title="Titulo">Todo pegoteado</a>
                            <a href="single.php" title="Titulo">con un poco de aceite</a>
                            <a href="single.php" title="Titulo">con un poco de sal</a>
                            <a href="single.php" title="Titulo">Y te lo comes tú</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Termina cdigo buscador-->