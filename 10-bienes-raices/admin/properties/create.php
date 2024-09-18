


<?php 

    // DB Connection
    // require '../../src/includes/config/database.php';
    // $db = connectDB();

    require '../../src/includes/functions.php';
    getTemplate('header');
?>

    <main class="container">
        <section class="section">
            <h1>Crear</h1>
            <a href="./../index.php" class="btn btn-success">Volver</a>
            <form class="wrap-form mt-2">
                <fieldset>
                    <legend>Información General</legend>
                    <label for="title">Título</label>
                    <input 
                        type="text" 
                        id="title" 
                        placeholder="Título Propiedad">

                    <label for="price">Precio</label>
                    <input 
                        type="number" 
                        id="price" 
                        placeholder="Precio Propiedad">

                    <label for="img">Imagen</label>
                    <input 
                        type="file" 
                        id="img" 
                        placeholder="Imagen Propiedad"
                        accept="image/jpeg, image/png">

                    <label for="description">Descripción</label>
                    <textarea id="description"></textarea>
                </fieldset>

                <fieldset>
                    <legend>Información Propiedad</legend>
                    <label for="rooms">Habitaciones</label>
                    <input 
                        type="text" 
                        id="rooms" 
                        placeholder="Ej: 3"
                        min="1"
                        max="9">

                    <label for="wc">Baños</label> 
                    <input 
                        type="text" 
                        id="wc" 
                        placeholder="Ej: 3"
                        min="1"
                        max="9">

                    <label for="parking">Estacionamientos</label> 
                    <input 
                        type="text" 
                        id="parking" 
                        placeholder="Ej: 3"
                        min="1"
                        max="9">
                </fieldset>

                <fieldset>
                    <legend>Vendedor</legend>
                    <select>
                        <option value="1">Juanma</option>
                        <option value="2">Karen</option>
                    </select>
                </fieldset>

                <div class="wrap-button mt-1">
                    <input type="submit" value="Crear Propiedad" class="btn btn-success">
                </div>
            </form>
        </section>
    </main>

<?php
    getTemplate('footer');
?>