<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		Mok
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<section class="banner loading">
    <ul class="banner__slides slides">
        <li class="slide">
            <img class="slide__image" src="assets/banner_1.jpg" alt="This picture loads on non-supporting browsers.">
            <div class="slide__message">
                <h2>Botón de pánico Mok-SOS</h2>
                <p>La nueva forma de resolver tus emergencias</p>
                <a href="single.php" title="Conoce más" class="btn btn--standard">Conoce más</a>
            </div>
        </li>
        <li class="slide">
            <div class="slide__image">
                <img src="assets/banner_1.jpg" alt="This picture loads on non-supporting browsers.">
            </div>
            <div class="slide__message">
                <h2>Este es el segundo boton</h2>
                <p>Y no resuelve emergencias pero si muestra el segundo slider ;)</p>
                <a href="single.php" title="Conoce más" class="btn btn--standard">Conoce más</a>
            </div>
        </li>
    </ul>
</section><!--Banner Home-->
<div class="container">
    <section class="servicios servicios--home">
        <h2 class="title-inside">Conoce Nuestros servicios</h2>
        <div class="controls">
            <ul class="controls--list">
                <li>Personas</li>
                <li>Bienes</li>
            </ul>
        </div>
        <div class="servicios--slider">
            <ul class="slides">
                <li class="service-images">
                    <div class="service-images--right">
                        <div class="service-images--box clearfix">
                            <a href="single-servicios.php" title="MOK Travel" class="image__text">
                                <img src="assets/servicios/travel_s.jpg" alt="imagen 1">
                                <span>MOK Travel</span>
                            </a>
                        </div>
                    </div>
                    <div class="service-images--left">
                        <div class="service-images--box clearfix">
                            <a href="#" title="Prever" class="image__text">
                                <img src="assets/servicios/prever_s.jpg" alt="imagen 2">
                                <span>Prever</span>
                            </a>
                        </div>
                        <div class="service-images--box clearfix">
                            <a href="#" title="MOK SOS" class="image__text">
                                <img src="assets/servicios/moksos2_s.jpg" alt="imagen 3">
                                <span>MOK SOS</span>
                            </a>
                        </div>
                        <div class="service-images--box service-images--wide clearfix">
                            <a href="#" title="Cotiza OK" class="image__text">
                                <img src="assets/servicios/seguro.jpg" alt="imagen 4">
                                <span>Cotiza OK</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="service-images">
                    <div class="service-images--right">
                        <div class="service-images--box clearfix">
                            <a href="#" title="MOK Travel" class="image__text">
                                <img src="assets/servicios/travel_s.jpg" alt="imagen 1">
                                <span>Call Center</span>
                            </a>
                        </div>
                    </div>
                    <div class="service-images--left">
                        <div class="service-images--box clearfix">
                            <a href="#" title="Prever" class="image__text">
                                <img src="assets/servicios/prever_s.jpg" alt="imagen 2">
                                <span>Liquidaciones</span>
                            </a>
                        </div>
                        <div class="service-images--box clearfix">
                            <a href="#" title="MOK SOS" class="image__text">
                                <img src="assets/servicios/moksos2_s.jpg" alt="imagen 3">
                                <span>Administración de seguros</span>
                            </a>
                        </div>
                        <div class="service-images--box clearfix">
                            <a href="#" title="Prever" class="image__text">
                                <img src="assets/servicios/prever_s.jpg" alt="imagen 2">
                                <span>Liquidaciones</span>
                            </a>
                        </div>
                        <div class="service-images--box clearfix">
                            <a href="#" title="MOK SOS" class="image__text">
                                <img src="assets/servicios/moksos2_s.jpg" alt="imagen 3">
                                <span>Administración de seguros</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="noticias">
        <h2 class="title-inside">Novedades</h2>
        <div class="box-news">
            <a href="#" title="imagen noticia" class="box-news__image">
                <img src="assets/servicios/news1.jpg" alt="Noticia 1">
            </a>
            <div class="box-news__content">
                <p class="date"><span>22/06/2015 -</span> <a href="#" title="categoria">Categoria</a></p>
                <h3>
                    <a href="#" title="Titulo noticia">La Copa América en alerta médica ante tragedias con MOK SOS</a>
                </h3>
                <p>Exitoso cónclave en vistas a la Copa América</p>
            </div>
        </div>
        <div class="box-news">
            <a href="#" title="imagen noticia" class="box-news__image">
                <img src="assets/servicios/news2_s.jpg" alt="Noticia 1">
            </a>
            <div class="box-news__content">
                <p class="date"><span>22/06/2015 -</span> <a href="#" title="categoria">Categoria</a></p>
                <h3>
                    <a href="#" title="Titulo noticia">La Copa América en alerta médica ante tragedias con MOK SOS</a>
                </h3>
                <p>Exitoso cónclave en vistas a la Copa América</p>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>