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
$type = 'single';
$title = 'Novedades';
include 'header.php'; ?>
<section class="novedades">
    <h2 class="title-inside">Novedades</h2>
    <div class="filters-container">
       <div class="more-items"></div>
       <div class="less-items"></div>
        <div class="filters-content">
            <p class="selector-filtro">Filtrar por</p>
            <ul class="filters slides">
                <li><a href="taxonomy-novedades.php" title="titulo">Multiservicios</a></li>
                <li><a href="taxonomy-novedades.php" title="titulo">Assist</a></li>
                <li><a href="taxonomy-novedades.php" title="titulo">Garantias</a></li>
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
        <article class="novedades--single">
            <p class="date"><a href="page-novedades.php#categoria" title="Titulo categoria" class="date--cat">Cotiza OK</a> | 26 de marzo 2015</p>
            <h1 class="title-post">Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</h1>
            <div class="novedades--single--redes">
                <img src="assets/banner_1.jpg" alt="Imagen" class="featured">
                <div class="novedades--single--text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit sapien ipsum, sit amet lacinia dolor tempus at. Etiam sit amet purus imperdiet, luctus ex quis, varius erat. Praesent in metus ut tortor convallis eleifend. Morbi at lacus metus. Cras et auctor quam. Suspendisse euismod eget odio sit amet finibus. Sed rutrum, lectus id tristique maximus, arcu lectus rutrum nulla, ac ornare erat augue in mauris. Quisque euismod dui urna, ac mollis ipsum auctor nec. Aenean venenatis aliquet euismod. Aliquam nulla ligula, vehicula eget lobortis in, euismod non elit. Praesent vel accumsan nulla. Pellentesque ac mauris ligula.
                    </p>
                    <p>
                        Aenean et faucibus neque. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam vitae condimentum lacus. Maecenas viverra viverra mauris, eget facilisis tellus bibendum ut. Quisque nec sapien justo. Duis ipsum enim, luctus eget faucibus ac, vulputate sit amet arcu. Mauris ultrices ante pharetra urna blandit, nec viverra nunc malesuada. Curabitur eget feugiat nulla. Nulla faucibus est mauris, ut blandit nisl rutrum id. Sed tellus nibh, dictum 
                    </p>
                </div>
                <ul class="share">
                    <li>Compartir</li>
                    <li>
                        <a href="http://facebook.com" title="Siguenos en Facebook" class="share--icon share--icon__face" target="_blank"></a>
                    </li>
                    <li>
                        <a href="http://twitter.com" title="Siguenos en Facebook" class="share--icon share--icon__twitt" target="_blank"></a>
                    </li>
                    <li>
                        <a href="http://google.com" title="Siguenos en Facebook" class="share--icon share--icon__gp" target="_blank"></a>
                    </li>
                    <li>
                        <a href="http://pinterest.com" title="Siguenos en Facebook" class="share--icon share--icon__pint" target="_blank"></a>
                    </li>
                    <li>
                        <a href="http://linkedin.com" title="Siguenos en Facebook" class="share--icon share--icon__link" target="_blank"></a>
                    </li>
                </ul>
            </div>
        </article>
        <hr class="division-especial">
        <div class="noticias-novedades clearfix">
            <a href="single-novedades.php" title="titulo" class="noticias-novedades--box">
                <span class="oscuro">
                    <img src="assets/servicios/news2_s.jpg" alt="imagen">
                    <button class="btn btn--border btn--border__color">Leer noticia anterior</button>
                    <span class="text">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</span>
                    </span>
            </a>
            <a href="single-novedades.php" title="titulo" class="noticias-novedades--box">
                <span class="oscuro">
                    <img src="assets/servicios/seguro.jpg" alt="imagen">
                    <button class="btn btn--border btn--border__color">Leer noticia siguiente</button>
                    <span class="text">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</span>
                </span>
            </a>
        </div>
        <div class="noticias-novedades__mobile">
            <a href="page-novedades.php" title="Volver a novedades" class="btn btn--border btn--border__color">Volver a novedades</a>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>