<?php 
    $home = true;
    include './src/includes/templates/header.php'; 
?>

    <!-- Sobre nosotros -->
    <main class="wrap-main">
        <div class="container">
            <div class="section">
                <h1>Más sobre nosotros</h1>
                <ul class="wrap-main--icons">
                    <li class="icon">
                        <img 
                            src="./build/img/icono1.svg" 
                            alt="Icono seguridad"
                            title="Icono seguridad"
                            loading="lazy">
                        <h3>Seguridad</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, dolore!</p>
                    </li>
                    <li class="icon">
                        <img 
                            src="./build/img/icono2.svg" 
                            alt="Icono precio"
                            title="Icono precio"
                            loading="lazy">
                        <h3>Precio</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, dolore!</p>
                    </li>
                    <li class="icon">
                        <img 
                            src="./build/img/icono3.svg" 
                            alt="Icono tiempo"
                            title="Icono tiempo"
                            loading="lazy">
                        <h3>Tiempo</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, dolore!</p>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <!-- Publicaciones -->
    <div class="container">
        <section class="section">
            <h2>Casas y departamentos en venta</h2>
            <div class="wrap-publish">
                <div class="wrapper-publish">
                    <picture class="image-publish">
                        <source srcset="./build/img/anuncio1.webp" type="image/webp">
                        <source srcset="./build/img/anuncio1.jpg" type="image/jpeg">
                        <img 
                            src="./build/img/anuncio1.jpg" 
                            alt="Casa de lujo en el lago" 
                            title="Casa de lujo en el lago"
                            loading="lazy">
                    </picture>
                    <div class="description-publish">
                        <h3>Casa de lujo en el lago</h3>
                        <p>Casa en el lago con excelentes vistas, acabados de lujo a un excelente precio</p>
                        <div class="price-publish">3.000.000€</div>
                        <ul class="properties-publish">
                            <li>
                                <img 
                                    src="./build/img/icono_wc.svg" 
                                    alt="Icono wc"
                                    title="Icono wc"
                                    loading="lazy">
                                <p>3</p>	
                            </li>
                            <li>
                                <img 
                                    src="./build/img/icono_estacionamiento.svg" 
                                    alt="Icono parking"
                                    title="Icono parking"
                                    loading="lazy">
                                <p>3</p>	
                            </li>
                            <li>
                                <img 
                                    src="./build/img/icono_dormitorio.svg" 
                                    alt="Icono habitaciones"
                                    title="Icono habitaciones"
                                    loading="lazy">
                                <p>4</p>	
                            </li>
                        </ul>
                        <a href="./src/pages/publish.php" class="btn btn-warning">Ver anuncio</a>
                    </div>
                </div>
                <div class="wrapper-publish">
                    <picture class="image-publish">
                        <source srcset="./build/img/anuncio2.webp" type="image/webp">
                        <source srcset="./build/img/anuncio2.jpg" type="image/jpeg">
                        <img 
                            src="./build/img/anuncio2.jpg" 
                            alt="Casa con acabados de lujo" 
                            title="Casa con acabados de lujo"
                            loading="lazy">
                    </picture>
                    <div class="description-publish">
                        <h3>Casa con acabados de lujo</h3>
                        <p>Casa con diseño moderno, así como tecnología inteligente y amueblada.</p>
                        <div class="price-publish">2.000.000€</div>
                        <ul class="properties-publish">
                            <li>
                                <img 
                                    src="./build/img/icono_wc.svg" 
                                    alt="Icono wc"
                                    title="Icono wc"
                                    loading="lazy">
                                <p>3</p>	
                            </li>
                            <li>
                                <img 
                                    src="./build/img/icono_estacionamiento.svg" 
                                    alt="Icono parking"
                                    title="Icono parking"
                                    loading="lazy">
                                <p>3</p>	
                            </li>
                            <li>
                                <img 
                                    src="./build/img/icono_dormitorio.svg" 
                                    alt="Icono habitaciones"
                                    title="Icono habitaciones"
                                    loading="lazy">
                                <p>4</p>	
                            </li>
                        </ul>
                        <a href="./src/pages/publish.php" class="btn btn-warning">Ver anuncio</a>
                    </div>
                </div>
                <div class="wrapper-publish">
                    <picture class="image-publish">
                        <source srcset="./build/img/anuncio3.webp" type="image/webp">
                        <source srcset="./build/img/anuncio3.jpg" type="image/jpeg">
                        <img 
                            src="./build/img/anuncio3.jpg" 
                            alt="Casa con alberca" 
                            title="Casa con alberca"
                            loading="lazy">
                    </picture>
                    <div class="description-publish">
                        <h3>Casa con alberca</h3>
                        <p>Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad.</p>
                        <div class="price-publish">3.000.000€</div>
                        <ul class="properties-publish">
                            <li>
                                <img 
                                    src="./build/img/icono_wc.svg" 
                                    alt="Icono wc"
                                    title="Icono wc"
                                    loading="lazy">
                                <p>3</p>	
                            </li>
                            <li>
                                <img 
                                    src="./build/img/icono_estacionamiento.svg" 
                                    alt="Icono parking"
                                    title="Icono parking"
                                    loading="lazy">
                                <p>3</p>	
                            </li>
                            <li>
                                <img 
                                    src="./build/img/icono_dormitorio.svg" 
                                    alt="Icono habitaciones"
                                    title="Icono habitaciones"
                                    loading="lazy">
                                <p>4</p>	
                            </li>
                        </ul>
                        <a href="./src/pages/publish.php" class="btn btn-warning">Ver anuncio</a>
                    </div>
                </div>
            </div>
            <div class="wrap-btn-all">
                <a href="./src/pages/publish.php" class="btn btn-success">Ver todas</a>
            </div>
        </section>
    </div>

    <!-- Contacto -->
    <section class="wrap-contact">
        <div class="container">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
            <div class="wrap-contact-btn">
                <a href="./src/pages/contact.php" class="btn btn-warning">Contáctanos</a>
            </div>
        </div>
    </section>

    <!-- Blog -->
     <div class="container">
        <div class="section">
            <div class="wrap-blog">
                <section class="blog">
                    <h3>Nuestro Blog</h3>
                    <article class="blog-entry">
                        <picture>
                            <source srcset="./build/img/blog1.webp" type="iamge/webp">
                            <source srcset="./build/img/blog1.jpg" type="iamge/jpeg">
                            <img 
                                src="./build/img/blog1.jpg" 
                                alt="Entrada al blog" 
                                title="Entrada al blog" 
                                loading="lazy">
                        </picture>
                        <div class="blog-entry--text">
                            <a href="/10-bienes-raices/src/pages/blog_entry.php">
                                <h4>Terra en el techo de tu casa</h4>
                                <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                                <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                            </a>
                        </div>
                    </article>
                    <article class="blog-entry">
                        <picture>
                            <source srcset="./build/img/blog2.webp" type="iamge/webp">
                            <source srcset="./build/img/blog2.jpg" type="iamge/jpeg">
                            <img 
                                src="./build/img/blog2.jpg" 
                                alt="Entrada al blog" 
                                title="Entrada al blog" 
                                loading="lazy">
                        </picture>
                        <div class="blog-entry--text">
                            <a href="/10-bienes-raices/src/pages/blog_entry.php">
                                <h4>Guía para la decoración de tu hogar.</h4>
                                <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                                <p>Máximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                            </a>
                        </div>
                    </article>
                </section>
                <section class="wrap-testimonies">
                    <h3>Testimonios</h3>
                    <div class="testimony">
                        <blockquote>El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.</blockquote>
                        <p>- Juanma Molins Cortés</p>
                    </div>
                </section>
            </div>
        </div>
     </div>

<?php 
    include './src/includes/templates/footer.php';
?>