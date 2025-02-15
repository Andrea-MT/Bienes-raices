<main class="contenedor seccion">
        <h2>Más Sobre Nosotros</h2>

    <?php
        include "iconos.php";
    ?>
</main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <?php
            $limite = 3;
            include "listado.php";
        ?>

        <div class="alinear-derecha">
            <a class="boton-verde" href="/propiedades">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario para podernos en contacto contigo</p>
        <a class="boton-amarillo-block" href="/contacto">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="/build/img/blog1.webp" type="image/webp">
                        <source srcset="/build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="/build/img/blog1.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="/entrada">
                        <h4>Entrada en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>06/05/2023</span> por: <span>Admin</span></p>

                        <p>Consejos para construir una terraza en el techo de tu casa</p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="/build/img/blog2.webp" type="image/webp">
                        <source srcset="/build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="/build/img/blog2.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>06/05/2023</span> por: <span>Admin</span></p>

                        <p>Maximiza el espacio en tu hogar con esta guia</p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de la mejor manera, muy buena atención y las intalaciones no pudieron estar mejores.
                    <p>- Steven Grant</p>
                </blockquote>
            </div>
        </section>
    </div>