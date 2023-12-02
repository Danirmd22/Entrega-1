<?php require("parts/head.php"); ?>

    <?php require("parts/menu.php"); ?>
    <section class="home">
        <h1><span>Samba</span>Motor</h1>
        <p>Concesionario Oficial Grupo Vag</p>
        <a href="nuevos.php"><button class="btn primary">Más Información</button></a>
    </section>

<section id="ocasion" class="ocasion">
<h2>Nuestros Coches de Ocasión</h2>
<div class="filaOcasion">
    <div class="coche">
        <a href="">
        <img src="img/cupra.jpg" alt="CUPRA ATECA 2.0 TSI">
        <h4>CUPRA ATECA 2.0 TSI</h4></a>
        <p><button>-22%</button><del>31.990€</del></p>
        <h3>27.990 €</h3>
        
    </div>
    <div class="coche">
        <a href="">
        <img src="img/a3.jpg" alt="AUDI A3">
        <h4>AUDI A3</h4></a>
        <h3>26.990€</h3>
    </div>
    
    <div class="coche">
        <a href="golf.php">
    
        <img src="img/golf.jpg" alt="VOLKSWAGEN GOLF 8">
        <h4>VOLKSWAGEN GOLF 8</h4></a>
        <p><button>-18%</button><del>26.990 €</del></p>
        <h3>24.990 €</h3>
        
    </div>
    <div class="coche">
        <a href="">
        <img src="img/x5.jpg" alt="BMW X5M COMPETITION">
        <h4>BMW X5M COMPETITION</h4></a>
        <h3>64.990 €</h3>
    </div>


</div>
</section>

<div class="marcas">
    <h2>Nuestras Marcas</h2>
    <div class="fila1">
        <img src="img/volkswagen.png">
        <img src="img/audi.png" >
        <img src="img/seat.png" >
        <img src="img/bmw.png" >

</div>
        <div class="fila2">
        <img src="img/cupra.png" >
        <img src="img/porsche.png" >
        <img src="img/skoda.png" >
        </div>
    
    </div>
    <section class="ocasion">
        </section>

        <h2 class="dt2">Reseñas de nuestros clientes</h2>
<div class="clientes">
<div class="cliente">
    <div class="fotoCliente">
        <img src="img/jambo1.jpg" alt="">
    </div>
    <div class="info">
        <p class="nombre">Avila Heredia</p>
        <p class="reseña">El Volkswagen Golf 8 2.0 TDI ofrece un rendimiento excepcional gracias a su motor diésel eficiente.
             La potencia combinada con un consumo de combustible notablemente bajo lo convierte en una opción ideal para quienes buscan un equilibrio entre rendimiento y economía.</p>
             <span class="icono-estrella">&#9733;</span>
                <span class="icono-estrella">&#9733;</span>
                <span class="icono-estrella">&#9733;</span>
                <span class="icono-estrella">&#9733;</span>
                <span class="icono-estrella">&#9733;</span>
    </div>
</div>

<div class="cliente">
    <div class="fotoCliente">
        <img src="img/jambo2.jpg" alt="">
    </div>
    <div class="info">
        <p class="nombre">Samba Bazalo</p>
        <p class="reseña">Con líneas limpias y un diseño moderno, el Golf 8 2.0 TDI cautiva con su estética contemporánea.
             Su interior bien diseñado, con materiales de calidad y una interfaz intuitiva, brinda una experiencia de conducción cómoda y atractiva.</p>
                <span class="icono-estrella">&#9733;</span>
                <span class="icono-estrella">&#9733;</span>
                <span class="icono-estrella">&#9733;</span>
                <span class="icono-estrella">&#9733;</span>
                <span class="icono-estrella">&#9734;</span>
    </div>
</div>

<div class="cliente">
    <div class="fotoCliente">
        <img src="img/jambo3.jpg" alt="">
    </div>
    <div class="info">
        <p class="nombre">Javier Cotilla</p>
        <p class="reseña"> Equipado con tecnología avanzada, este modelo ofrece una amplia gama de características de seguridad y comodidad. 
            Desde asistentes de conducción hasta sistemas de infoentretenimiento de última generación,
             el Golf 8 2.0 TDI se destaca por su conectividad y funcionalidades innovadoras que mejoran la experiencia del conductor y los pasajeros.</p>

                <span class="icono-estrella">&#9733;</span>
                <span class="icono-estrella">&#9733;</span>
                <span class="icono-estrella">&#9733;</span>
                <span class="icono-estrella">&#9733;</span>
                <span class="icono-estrella">&#9733;</span>
    </div>
</div>
</div>




    <script>
        document.addEventListener("DOMContentLoaded", () => {
            ScrollNav();
        });
    </script>

<script src="js/script.js"></script>
<?php require("parts/footer.php"); ?>
</body>
</html>