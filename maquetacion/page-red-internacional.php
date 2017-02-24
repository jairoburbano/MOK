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
$page = 'nosotros';
$subpage = 'red-internacional';
$type = 'page';
$title = 'Assistance';
include 'header.php'; ?>
<section class="assistance">
    <div class="container">
        <h1 class="title-inside">IAG Assistance</h1>
        <article>
            <p>
                MOK es parte de INTERNATIONAL ASSISTANCE GROUP, una de las mayores redes de asistencia que cuenta con presencia global. 
            </p>
        </article>
        <div class="description-box">
            <img src="assets/iag.png" alt="iag">
            <p>
                MOK, como Assistance Partner, forma parte activa de esta red permitiendo asegurar altos estándares de servicio.
            </p>
            <a href="http://www.google.cl" title="IAG" class="btn btn--border btn--border__color" target="_blank">international-assistance-group.com</a>
        </div>
        <article class="assistance--content">
            <p>
                International Assistance Group® cuenta con 53 Empresas asociadas y 59 centros de atención médica y atención en ruta, ofreciendo una amplia gama de servicios de asistencia tales como emergencia médica, asistencia en viaje y apoyo en la seguridad, atención en ruta y en el hogar, como tambien servicios de asistencia jurídica y de otro tipo. Constituyen una red mundial de ayuda única. Su experiencia, presencia internacional y la gama de servicios le permiten satisfacer las necesidades de unos 77 millones de beneficiarios en todo el mundo. Contar con 6.800 empleados dedicados a servir a sus clientes en más de 180 países, hacen de International Assistance Group® una de las empresas de asistencia más importantes del mundo.
            </p>
        </article>
    </div>
    <div class="special-box">
        <h2>Mok Perú</h2>
        <table cellpading="0" cellspacing="'0" class="special-box--table">
            <tr>
                <td colspan="2" class="special-box--table__left">Acceso a clientes</td>
            </tr>
            <tr>
                <td>
                    <a href="#" title="acceso a clientes" class="special-box--button">
                        <span  class="button--text">Acceso a clientes</span>
                        <span class="btn btn--border">ir</span>
                    </a>
                </td>
                <td>
                    <a href="#" title="acceso a clientes" class="special-box--button">
                        <span  class="button--text">Acceso a clientes</span>
                        <span class="btn btn--border">ir</span>
                    </a>
                </td>
            </tr>
        </table>
    </div>
</section>
<?php include 'footer.php'; ?>