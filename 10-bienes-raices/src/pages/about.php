<?php 
    require './../includes/functions.php';
    getTemplate('header');
?>

    <main class="container">
        <div class="section">
            <h1>Nosotros</h1>
        </div>
        <div class="wrap-about">
            <div class="wrap-about--img">
                <picture>
                    <source srcset="./../../build/img/nosotros.webp" type="image/webp">
                    <source srcset="./../../build/img/nosotros.jpg" type="image/jpeg">
                    <img 
                        src="./../../build/img/nosotros.jpg" 
                        alt="Sobre nosotros" 
                        title="Sobre nosotros"
                        loading="lazy">
                </picture>
            </div>
            <div class="wrap-about--description">
                <blockquote>25 años de experiencia</blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet consectetur, dolorem error recusandae repudiandae ea adipisci autem perspiciatis, est iure dolor quibusdam? Pariatur, voluptatum! Voluptatem consequatur inventore nemo dolores, corporis tempore provident odio voluptatum illo consequuntur natus optio exercitationem minus sunt aliquid, necessitatibus, reprehenderit adipisci doloremque hic sit ipsa? Optio alias sapiente ipsa exercitationem odit aliquam aperiam excepturi nam et doloribus aliquid vel accusamus minus at quod, quas obcaecati placeat ex nemo officia impedit soluta magnam! Voluptas ea debitis odio aperiam amet nam repellat nobis dolore ratione! Amet laborum ullam beatae optio distinctio natus sint molestias id suscipit ipsam. Esse.</p>
            </div>
        </div>
    </main>

    <section class="container">
        <div class="section">
            <h2>Más sobre nosotros</h2>
            <ul class="wrap-main--icons">
                <li class="icon">
                    <img 
                        src="./../../build/img/icono1.svg" 
                        alt="Icono seguridad"
                        title="Icono seguridad"
                        loading="lazy">
                    <h3>Seguridad</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, dolore!</p>
                </li>
                <li class="icon">
                    <img 
                        src="./../../build/img/icono2.svg" 
                        alt="Icono precio"
                        title="Icono precio"
                        loading="lazy">
                    <h3>Precio</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, dolore!</p>
                </li>
                <li class="icon">
                    <img 
                        src="./../../build/img/icono3.svg" 
                        alt="Icono tiempo"
                        title="Icono tiempo"
                        loading="lazy">
                    <h3>Tiempo</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, dolore!</p>
                </li>
            </ul>
        </div>
    </section>

<?php 
    getTemplate('footer');
?>