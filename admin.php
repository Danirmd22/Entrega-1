<?php require_once("data.php"); ?>
<?php require("parts/head.php"); ?>
<?php require("parts/menu.php"); ?>

<section class="head-admin">
<h1>Administracion</h1>
</section>



<main class="admin">
        <h1>Coches Disponible</h1>
        <p class="total">Total de juegos en activo: <span><?=count($concesionario)?></span> </p>

        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th colspan="2">Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Año</th>
                        <th>Stock</th>
                        <th colspan="2">Descripción</th>
                        
                    </tr>        
                </thead>
                <tbody>
                <?php foreach($concesionario as $coche):?>
                    <tr>
                        <td><input type="checkbox" name="seleccion[]" value="<?=$coche["id"]; ?>" form="editForm"></td>
                        <td><?=$coche["id"]; ?></td>
                        <td><?=$coche["nombre"]; ?></td>
                        <td><?=$coche["precio"]; ?></td>
                        <td><?=$coche["año"]; ?></td>
                        <td><?=$coche["stock"]; ?></td>
                        <td><?=$coche["descripcion"]; ?></td>
                        <td><img src="<?=$coche["galeria_miniatura"]; ?>"></td>

                        <td class="options">
                            <div> 
                                <button type="submit" form="editForm" name="editar" value="<?=$coche["id"]; ?>" ><img src="img/lapiz.png"  style="width: 16px; height: 16px;"></button>
                                <button type="submit" form="editForm" name="borrar" value="<?=$coche["id"]; ?>"><img src="img/borrar.png"  style="width: 16px; height: 16px;"></button>
                            </div>
                        </td>
                    </tr>    
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8">
                            <button type="submit" form="editForm" name="seleccion[]" value="Borrar" >Borrar la selección</button>
                        </td>
                    </tr>
                </tfoot>

            </table>
        </div>

        <form action="test.php" target="_blank" id="editForm" method="post">

        </form>

    </main>


    <div class="container-tabla">
        
<div class="alumnos-profesor">
<h1>Ultimos Pedidos </h1>
<table>
<tr>
    <th>Coche</th>
    <th>DNI Propietario</th>
    <th>Precio</th>
    <th>Descripción</th>
    <th>Observaciones</th>
</tr>    
<tr>
    <td>Golf</td>
    <td>53967192D</td>
    <td>29.990€</td>
    <td>Es un coche compacto con un motor ágil de 1.8 litros y 140cv. Perfecto para la conducción urbana</td>
    <td>Ninguna</td>
    <td><a href=""><i class="fa-solid fa-plus"></a></i><a href=""><i class="fa-regular fa-pen-to-square"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
</tr>
<tr>
    <td>Audi A3</td>
    <td>53967892F</td>
    <td>27.990€</td>
    <td>Es un coche compacto con un motor potente de 2.0 litros y 140cv. Perfecto para la conducción urbana</td>
    <td>Ninguna</td>
    <td><a href=""><i class="fa-solid fa-plus"></a></i><a href=""><i class="fa-regular fa-pen-to-square"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
</tr>
<tr>
    <td>Audi Q8</td>
    <td>53967644H</td>
    <td>45.990€</td>
    <td>Es un coche SUV con un motor potente de 4.0 litros y 540cv. Perfecto para la conducción Deportiva</td>
    <td>Ninguna</td>
    <td><a href=""><i class="fa-solid fa-plus"></a></i><a href=""><i class="fa-regular fa-pen-to-square"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
</tr>
</table><br>

</div>
</div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            ScrollNav();
        });
    </script>

<script src="js/script.js"></script>
<?php require("parts/footer.php"); ?>