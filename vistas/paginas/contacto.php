<!--=====================================
CONTACTO
======================================-->

<section class="banner">
    
    <div class="banner-content">
        
        <h1 class="banner-content__title center-content">CONTÁCTENOS</h1> 

        <ul class="breadcrumb">

          <li class="breadcrumb-item"><a href="<?php echo $ruta?>">Inicio</a></li>
          <li class="breadcrumb-item">Contacto</li>
          
        </ul>

    </div>  

</section>

<section class="contacto">      
        
    <h2 class="contacto-container__smallTitle center-content">Póngase en contacto</h2>
    <h2 class="contacto-container__title center-content">Informacíón de contacto</h2>
    <p class="contacto-container__text center-content">Si desea ponerse en contacto. Por favor, rellene el siguiente formulario</p>

    <article class="infoContacto">
        
        <div class="infoContacto-container l-container">

            <div class="infoContacto-container__item">

                <i class="fa-brands fa-whatsapp"></i>

                <h2 class="infoContacto-container__item--title">Teléfono<h2>

                <p class="infoContacto-container__item--text">+506 8540-0987</p>

            </div>

            <div class="infoContacto-container__item">
                
                <i class="fa-solid fa-envelope"></i>

                <h2 class="infoContacto-container__item--title">Email<h2>

                <p class="infoContacto-container__item--text">clientes@epic-careawash.com</p>       

            </div>

            <div class="infoContacto-container__item">
                
                <i class="fa-solid fa-clock"></i>

                <h2 class="infoContacto-container__item--title">Horario<h2>

                <p class="infoContacto-container__item--text">Estamos disponibles <br> <br>Sábados 6 p.m - 9 p.m <br> Domingos 7 a.m - 1 p.m</p>
               
            </div>            

        </div>

        <div class="contacto-formulario">

            <div class="contacto-formulario__title center-content">Déjenos su mensaje</div>
        
            <div class="contacto-formulario__container">
                
               <form method="post" onsubmit="return validarCorreo();">
                  
                  <div class="container-inputs l-container">

                    <input type="text" class="input-100"  id="nombre" name="nombre" placeholder="Tu nombre" required>
                     
                     <input type="email" class="input-100" id="email" name="email" placeholder="Tu email" required> 

                     <input type="text" class="input-100"  id="telefono" name="telefono" placeholder="Tu teléfono" required>

                     <select name="servicios" id="servicios" class="input-100">

                        <option value="">Escoge tu servicio de lavado</option>
                        <option value="lavado-basico">Lavado básico</option>
                        <option value="lavado-plus">Lavado plus</option>                     
                        <option value="lavado-premium">Lavado premium</option>

                     </select>

                     <textarea class="input-100" id="mensaje" name="mensaje" cols="30" rows="10" placeholder="Tu mensaje" required></textarea>

                     <div class="btn center-block">
                       
                       <button type="submit" name="submit" class="button-form">ENVIAR</button>  

                     </div>                     

                  </div>  

                </form>

                <?php 

                    $enviarCorreo = CorreoControlador::ctrEnviarCorreo();


                 ?>

            </div>

            <div class="google-map">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.00601269268!2d-84.0346729857491!3d9.933456576903277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3f155b67c49%3A0x418a02aba2713532!2sC.%20Neverman%2C%20San%20Jos%C3%A9%2C%20San%20Pedro!5e0!3m2!1ses!2scr!4v1660693040233!5m2!1ses!2scr" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

    </article>
    
</section>