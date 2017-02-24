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
$subpage = 'que-hacemos';
$type = 'page';
$title = 'Que Hacemos';
include 'header.php'; ?>
<section class="hacemos">
    <div class="hacemos--banner">
        <img src="assets/contacto-01.png" alt="contacto">
    </div>
    <div class="container">
        <h1 class="title-inside">Qué hacemos</h1>
        <div class="cols">
            <div class="cols--container">
                <div class="cols--four">
                    <h2>¿Qué?</h2>
                    <div class="cols--content">
                        <p>
                            Somos una empresa que presenta soluciones integrales a los problemas frecuentes de las personas y de sus bienes.
                        </p>
                    </div>
                </div>
                <div class="cols--four">
                    <h2>¿Cómo?</h2>
                    <div class="cols--content">
                        <p>
                            Mediante una extensa red de proveedores y asociados, proporcionamos servicios de calidad, entregados en forma rápida, garantizada y en condiciones convenientes y transparentes.
                        </p>
                    </div>
                </div>
                <div class="cols--four">
                    <h2>¿Cuándo?</h2>
                    <div class="cols--content">
                        <p>
                            Las 24 horas del día y los 365 días del  año.

                        </p>
                    </div>
                </div>
                <div class="cols--four">
                    <h2>¿Dónde?</h2>
                    <div class="cols--content">
                        <p>
                            En Chile y principales países de América Latina.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hacemos--content">
            <div class="hacemos--img">
                <img src="assets/certificado.png" alt="certificado">
            </div>
            <div class="hacemos--text">
                <p>
                    Somos una empresa con una estructura profesional orientada a la entrega de servicios y soluciones integrales de excelencia. 
                </p>
                <p>
                    Nuestro conocimiento y experiencia en distintos tipos de mercados, nos permite generar negocios de valor. Disponemos de una estructura tecnológica de punta y de largo plazo que nos permite brindar seguridad y confidencialidad de información, además de una excelente disponibilidad de operación.
                </p>
                <p>
                    Nuestra cultura de trabajo potencia la flexibilidad e innovación para adaptar soluciones a nuestros clientes.
                </p>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>