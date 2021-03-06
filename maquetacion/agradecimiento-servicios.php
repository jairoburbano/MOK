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
$page = 'servicios';
$subpage = 'mok-travel';
$type = 'single';
$title = 'MOK SOS';
include 'header.php'; ?>
<section class="servicios">
    <div class="container">
        <h1 class="title-inside">Mok SOS</h1>
        <div class="servicios--content">
            <p>
                MOK SOS es parte del grupo Multiservicios OK (MOK), un grupo de empresas cuyo objetivo es la entrega de soluciones integrales a los problemas frecuentes de las personas y de sus bienes. MOK lleva operando en Chile desde 1996. Actualmente lo componen 9 empresas que cubren distintas facetas de asistencia, tanto a personas como a empresas de seguros, llegando a más de 500.000 hogares, 100.000 vehículos, 1,4 millones de liquidaciones de siniestros de seguro al año, 13.000 ventas mensuales vía Tele ventas, y más de medio millón de servicios de extensión de garantías de productos prestados.
            </p>
        </div>
        <div class="servicios--block">
            <div class="servicios--items clearfix">
                <div class="servicios--items--box">
                    <img src="assets/servicios/prever_s.jpg" alt="imagen">
                    <p class="tit">Asistencia en Ruta</p>
                    <span class="border-line"></span>
                </div>
                <div class="servicios--items--slide">
                    <div class="wide-content">
                        <div class="icon-slide-close"></div>
                        <div class="block-left">
                            <h2>Asistencia en ruta</h2>
                            <div class="item-content">
                                <p>
                                    Presta asistencias cubriendo necesidades urgentes de alta frecuencia. Buscamos ser la ayuda en el momento que ocurre la urgencia, contando con profesionales idóneos eb variadas materias. Focalizamos nuestros servicios en la excelencia, basada en el compromiso, calidad, tecnología y recursos humanos capacitados.
                                </p>
                            </div>
                        </div>
                        <div class="block-right">
                            <div class="agradecimiento">
                                <p class="title">
                                    Gracias por enviar tu mensaje, texto administrable.
                                </p>
                                <a href="#" title="¿Quieres enviar otro correo?" class="btn btn--border btn--border__color">¿Quieres enviar otro correo?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>
<?php include 'footer.php'; ?>