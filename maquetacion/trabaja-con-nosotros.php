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
        <h1 class="title-inside light">Trabaja con nosotros</h1>
        <form action="" class="contacto--form contacto--form--trabajo formulario--form">
            <div class="contacto--form__left">
                <div class="input-group">
                    <input type="text" placeholder="Nombre">
                    <p class="msg-error">Mensaje error</p>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Rut">
                    <p class="msg-error">Mensaje error</p>
                </div>
                <div class="input-group styled-select">
                    <select>
                        <option value="Pais">País</option>
                        <option value="Chile">Chile</option>
                        <option value="Peru">Perú</option>
                        <option value="Colombia">Colombia</option>
                    </select> 
                    <p class="msg-error">Mensaje error</p>
                </div>
            </div>
            <div class="contacto--form__right">
                <div class="input-group">
                    <input type="text" placeholder="Apellido">
                    <p class="msg-error">Mensaje error</p>
                </div>
                <div class="input-group">
                    <input type="email" placeholder="Email">
                    <p class="msg-error">Mensaje error</p>
                </div>
                <div class="input-group no-border">
                    <input type="file" class="custom-file-input">
                    <p class="msg-error">Mensaje error</p>
                </div>
            </div>
            <div class="input-group input-group--textarea">
                <textarea placeholder="Mensaje" class="with-border"></textarea>
                <p class="msg-error">Mensaje error</p>
            </div>
            <div class="input-group send">
                <input type="submit" class="send--input" value="Enviar">
            </div>
        </form>
    </div>    
</section>
<?php include 'footer.php'; ?>