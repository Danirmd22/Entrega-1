<?php require("parts/head.php"); ?>
<?php require("parts/menu.php"); ?>

<section class="contact">
<h1>Contacto</h1>
</section>

<section id="centros" class="centros">
<h2>Nuestros Centros</h2>
<div class="filaCentros">
    <div class="centro">
        
    <i class="fas fa-map-marker-alt"></i>
        <h4>SambaMotor Malaga</h4>
        <p>Calle Secretario Francisco n º 66</p>
        <h3>Teléfono: 96 277 10 21</h3>
        <p>info@sambamotor.es</p>
        
    </div>
    <div class="centro">
    <i class="fas fa-map-marker-alt"></i>
        <h4>SambaMotor Sevilla</h4>
        <p>Calle Eduardo Martinez n º 66</p>
        <h3>Teléfono: 96 879 44 31</h3>
        <p>info@sambamotor.es</p>
    </div>
    
    <div class="centro">
    <i class="fas fa-map-marker-alt"></i>
        <h4>SambaMotor Barcelona</h4>
        <p>Calle Gerard Ramos º 66</p>
        <h3>Teléfono: 96 987 40 67</h3>
        <p>info@sambamotor.es</p>
        
    </div>
    <div class="centro">
    <i class="fas fa-map-marker-alt"></i>
        <h4>SambaMotor Madrid</h4>
        <p>Calle Abogado Ibañez nº99</p>
        <h3>Teléfono: 96 345 45 31</h3>
        <p>info@sambamotor.es</p>
    </div>


</div>
</section>

<iframe style="width: 100%; height: 350px; margin-top:30px; " class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3803.3007459973214!2d-4.365759437972496!3d36.718190870529725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7259120bfc4db3%3A0xec0ecedd8dc61902!2sCesur%20M%C3%A1laga%20Este%20%F0%9F%A5%87%20-%20Formaci%C3%B3n%20Profesional!5e0!3m2!1ses!2ses!4v1700756261834!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    <section class="ContactForm">
   <h1 class="title">Contacta con nosotros</h1>
   <form class="contact-form row">
      <div class="form-field">
         <input id="name"  type="text" required>
         <label class="label" for="name">Name</label>
      </div>
      <div class="form-field ">
         <input id="email" type="email" required>
         <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field ">
         <input id="tel"  type="tel" required>
         <label class="label" for="tel">Teléfono</label>
      </div>
      <div class="form-field-mes">
         <input id="message"  type="text" required>
         <label class="label" for="message">Message</label>
      </div>
       
      <button  type="submit">Enviar</button>
        
      
     
   </form>
</section>
<script>
        document.addEventListener("DOMContentLoaded", () => {
            ScrollNav();
        });
    </script>

<script src="js/script.js"></script>
<?php require("parts/footer.php"); ?>









