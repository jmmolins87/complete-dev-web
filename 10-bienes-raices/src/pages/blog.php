<?php 
    $home = false;
    include './../includes/templates/header.php';
?>

    <main class="wrap-main">
        <div class="container center-content">
            <div class="section">
                <h1>Blog</h1>
                <article class="blog-entry">
                    <div class="wrap-picture">
                        <picture>
                            <source srcset="./../../build/img/blog1.webp" type="iamge/webp">
                            <source srcset="./../../build/img/blog1.jpg" type="iamge/jpeg">
                            <img 
                                src="./../../build/img/blog1.jpg" 
                                alt="Entrada al blog" 
                                title="Entrada al blog" 
                                loading="lazy">
                        </picture>
                    </div>
                    <div class="blog-entry--text">
                        <a href="blog_entry.php">
                            <h4>Terra en el techo de tu casa</h4>
                            <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                            <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                        </a>
                    </div>
                </article>
                <article class="blog-entry">
                    <div class="wrap-picture">
                        <picture>
                            <source srcset="./../../build/img/blog2.webp" type="iamge/webp">
                            <source srcset="./../../build/img/blog2.webp" type="iamge/jpeg">
                            <img 
                                src="./../../build/img/blog2.webp" 
                                alt="Entrada al blog" 
                                title="Entrada al blog" 
                                loading="lazy">
                        </picture>
                    </div>
                    <div class="blog-entry--text">
                        <a href="blog_entry.php">
                            <h4>Guía para la decoración de tu hogar.</h4>
                            <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                            <p>Máximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                        </a>
                    </div>
                </article>
                <article class="blog-entry">
                    <div class="wrap-picture">
                        <picture>
                            <source srcset="./../../build/img/blog3.webp" type="iamge/webp">
                            <source srcset="./../../build/img/blog3.webp" type="iamge/jpeg">
                            <img 
                                src="./../../build/img/blog3.webp" 
                                alt="Entrada al blog" 
                                title="Entrada al blog" 
                                loading="lazy">
                        </picture>
                    </div>
                    <div class="blog-entry--text">
                        <a href="blog_entry.php">
                            <h4>Guía para la decoración de tu hogar.</h4>
                            <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                            <p>Máximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                        </a>
                    </div>
                </article>
                <article class="blog-entry">
                    <div class="wrap-picture">
                        <picture>
                            <source srcset="./../../build/img/blog4.webp" type="iamge/webp">
                            <source srcset="./../../build/img/blog4.webp" type="iamge/jpeg">
                            <img 
                                src="./../../build/img/blog4.webp" 
                                alt="Entrada al blog" 
                                title="Entrada al blog" 
                                loading="lazy">
                        </picture>
                    </div>
                    <div class="blog-entry--text">
                        <a href="blog_entry.php">
                            <h4>Guía para la decoración de tu hogar.</h4>
                            <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                            <p>Máximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </main>

<?php 
    include './../includes/templates/footer.php';
?>