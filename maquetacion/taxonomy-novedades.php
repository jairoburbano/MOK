
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
$page = 'novedades';
$subpage = '';
$type = 'page';
$title = 'Novedades';
include 'header.php'; ?>
<section class="novedades">
    <h1 class="title-inside">Novedades</h1>
    <div class="filters-container">
        <div class="more-items"></div>
        <div class="less-items"></div>
        <div class="filters-content">
            <p class="selector-filtro">Filtrar por</p>
            <ul class="filters slides">
                <li><a href="#" title="titulo" class="active">Multiservicios</a></li>
                <li><a href="#" title="titulo">Assist</a></li>
                <li><a href="#" title="titulo">Garantias</a></li>
                <li><a href="#" title="titulo">Pagos</a></li>
                <li><a href="#" title="titulo">Liquidaciones</a></li>
                <li><a href="#" title="titulo">Travel</a></li>
                <li><a href="#" title="titulo">Legal</a></li>
                <li><a href="#" title="titulo">Prever</a></li>
                <li><a href="#" title="titulo">Callsouth</a></li>
                <li><a href="#" title="titulo">Cotiza OK</a></li>
                <li><a href="#" title="titulo">SOS</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <p class="taxonomy--class">
            Estás viendo Novedades de <span class="taxonomy__color">Multiservicios</span>
        </p>
        <div class="novedades--content">
            <article class="novedades--items">
                <div class="novedades--items--image">
                    <a href="single.php" title="Titulo novedad">
                        <img src="assets/servicios/travel_s.jpg" alt="Travel">
                    </a>
                </div>
                <div class="novedades--items--text">
                    <div class="items--cat">
                        <a href="#" title="multiservicios">Multiservicios</a>
                        <p>| 26 de marzo 2015</p>
                    </div>
                    <div class="estracto">
                        <h3>
                            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                        </h3>
                    </div>
                    <a href="single.php" class="btn btn--border btn--border__color" title="Leer más">Leer Más</a>
                </div>
            </article>
            <article class="novedades--items">
                <div class="novedades--items--image">
                    <a href="single.php" title="Titulo novedad">
                        <img src="assets/servicios/travel_s.jpg" alt="Travel">
                    </a>
                </div>
                <div class="novedades--items--text">
                    <div class="items--cat">
                        <a href="#" title="multiservicios">Multiservicios</a>
                        <p>| 26 de marzo 2015</p>
                    </div>
                    <div class="estracto">
                        <h3>
                            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                        </h3>
                    </div>
                    <a href="single.php" class="btn btn--border btn--border__color" title="Leer más">Leer Más</a>
                </div>
            </article>
            <article class="novedades--items">
                <div class="novedades--items--image">
                    <a href="single.php" title="Titulo novedad">
                        <img src="assets/servicios/travel_s.jpg" alt="Travel">
                    </a>
                </div>
                <div class="novedades--items--text">
                    <div class="items--cat">
                        <a href="#" title="multiservicios">Multiservicios</a>
                        <p>| 26 de marzo 2015</p>
                    </div>
                    <div class="estracto">
                        <h3>
                            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                        </h3>
                    </div>
                    <a href="single.php" class="btn btn--border btn--border__color" title="Leer más">Leer Más</a>
                </div>
            </article>
            <article class="novedades--items">
                <div class="novedades--items--image">
                    <a href="single.php" title="Titulo novedad">
                        <img src="assets/servicios/travel_s.jpg" alt="Travel">
                    </a>
                </div>
                <div class="novedades--items--text">
                    <div class="items--cat">
                        <a href="#" title="multiservicios">Multiservicios</a>
                        <p>| 26 de marzo 2015</p>
                    </div>
                    <div class="estracto">
                        <h3>
                            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                        </h3>
                    </div>
                    <a href="single.php" class="btn btn--border btn--border__color" title="Leer más">Leer Más</a>
                </div>
            </article>
        </div>
        <div class="load-more">
            <button class="btn btn--border btn--border__color">Cargar más entradas</button>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>