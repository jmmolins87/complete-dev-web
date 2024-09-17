    
    
    <!-- Footer -->
    <footer class="wrap-footer">
        <div class="section">
            <div class="container">
                <div class="wrapper-footer">
                    <nav class="wrapper-footer--navigation">
                        <a href="/10-bienes-raices/src/pages/about.php" class="link">Nosotros</a>
                        <a href="/10-bienes-raices/src/pages/publish.php" class="link">Anuncios</a>
                        <a href="/10-bienes-raices/src/pages/blog.php" class="link">Blog</a>
                        <a href="/10-bienes-raices/src/pages/contact.php" class="link">Contacto</a>
                    </nav>
                    <a href="/10-bienes-raices/index.php" class="wrapper-footer--logo">
                        <img 
                            loading="lazy"
                            src="/10-bienes-raices/build/img/logo.svg" 
                            alt="Logo de Bienes Raíces" 
                            title="Logo de Bienes Raíces">
                    </a>
                    <p class="wrapper-footer--copy">Todos los derechos reservados <span id="date"></span>&copy;</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const year = new Date().getFullYear();
        document.getElementById('date').textContent = year;
    </script>
    <script src="/10-bienes-raices/build/js/bundle.min.js"></script>
    <script src="/10-bienes-raices/src/js/app.js"></script>
</body>
</html>