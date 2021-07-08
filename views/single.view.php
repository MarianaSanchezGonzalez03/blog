<?php require 'header.php'; ?>
                


                <div class="contenedor">
                <div class="post">
                <article>
                <h2 class="titulo">Titulo del articulo</h2>
                <p class="fecha">5 de Julio de 2021</p>
                <div class="thumb">
                <a href="#">
                <img src="<?php echo RUTA; ?>/imagenes/1.jpeg" alt="">
                </a>

                 </div>
                 <p class="extracto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, 
                 perferendis ratione dicta explicabo, quidem sint reiciendis qui excepturi quod doloribus provident cupiditate ad eos,
                  veniam saepe cumque. Impedit, rem praesentium!</p>
                 <a href="#" class="continuar">Continuar leyendo</a>
                </article>
                </div>
            
                <?php require 'paginacion.php';?>
                </div>
                <?php require 'footer.php'; ?>    