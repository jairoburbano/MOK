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
        <div class="contacto--datos">
            <div class="contacto--datos--text">
                <h1 class="title-inside">Contacto MOK</h1>
                <div class="contancto--content">
                    <div class="contacto-content--block">
                        <p class="tit--contact">MULTISERVICIOS OK</p>
                    </div>
                    <div class="contacto-content--block">
                        <p>Av. El Bosque 90, Las Condes, Santiago, Chile</p>
                        <p>Central Tel. <a href="tel:12345678" title="Contáctanos" class="foot-phone"><span>+</span>56 (2) 433 4500</a></p>
                    </div>
                    <div class="contacto-content--block">
                        <p>Horario de Atención</p>
                        <p>(Lunes a viernes de <span style="color: #e51f82;">09:00</span> a <span style="color: #e51f82;">18:00 Hrs.</span>)</p>
                    </div>
                </div>
            </div>
            <div id="map"></div>
        </div>
        <form action="" class="contacto--form formulario--form">
            <h2 class="title-inside title-inside__alignleft">¿Desea contactarnos?</h2>
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    function initialize() {
        //MAPA
        var myLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var thisLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var myOptions = {
            zoom: 15, //nivel de zoom
            center: myLatlng,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        var image = 'localhost/mok/img/marker.svg'; //imagen del marcador
        var marker = new google.maps.Marker({
            position: thisLatlng,
            map: map,
            icon: image
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php include 'footer.php'; ?>