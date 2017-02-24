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
$page = 'contacto';
$subpage = '';
$type = 'page';
$title = 'Contacto';
include 'header.php'; ?>
<section class="contacto">
    <div class="contacto--banner">
        <img src="assets/contacto-01.png" alt="contacto">
    </div>
    <div class="container">
       <h1 class="title-inside">Contacto</h1>
        <div class="agradecimiento agradecimiento--border">
            <p class="title">
                Gracias por enviar tu mensaje, texto administrable.
            </p>
            <a href="#" title="¿Quieres enviar otro correo?" class="btn btn--border btn--border__color">¿Quieres enviar otro correo?</a>
        </div>
    </div>    
</section>
<?php include('footer.php'); ?>