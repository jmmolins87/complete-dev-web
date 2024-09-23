


<?php 
    // DB Connection
    require '../../src/includes/config/database.php';
    $db = connectDB();

    // Error messages
    $errors = [];

    // Variables
    $title = '';
    $price = '';
    $description = '';
    $rooms = '';
    $wc = '';
    $parking = '';
    $sellerId = '';

    // Execute code after submit    
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $rooms = $_POST['rooms'];
    $wc = $_POST['wc'];
    $parking = $_POST['parking'];
    $sellerId = $_POST['seller'];

    if(!$title) {
        $errors[] = "Debes añadir un título";
    }
    if(!$price) {
        $errors[] = "Debes añadir un precio";
    }
    if(strlen($description) < 50) {
        $errors[] = "Debes añadir una descripción y debe tener al menos 50 caracteres";
    }
    if(!$rooms) {
        $errors[] = "Debes añadir un número de habitaciones";
    }
    if(!$wc) {
        $errors[] = "Debes añadir un número de baños";
    }
    if(!$parking) {
        $errors[] = "Debes añadir un número de estacionamientos";
    }
    if(!$sellerId) {
        $errors[] = "Debes añadir un vendedor";
    }

    // check array errors is empty
    if(empty($errors)) {
        // Insert in DB
        $query = "INSERT INTO properties (title, price, description, rooms, wc, parking, sellerId) VALUES ('$title', '$price', '$description', '$rooms', '$wc', '$parking', '$sellerId')";
    
        $result = mysqli_query($db, $query);
        if($result) {
            echo "Insertado correctamente";
        } else {
            echo "Error";
        }
    }

    require '../../src/includes/functions.php';
    getTemplate('header');
?>

    <main class="container">
        <section class="section">
            <h1>Crear</h1>
            <a href="./../index.php" class="btn btn-success">Volver</a>
            <div class="wrap-alerts mt-2">
                <?php foreach($errors as $error): ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <form 
                method="POST" 
                action="/admin/properties/create.php" 
                id="form"
                class="wrap-form mt-2">
                <fieldset>
                    <legend>Información General</legend>
                    <label for="title">Título</label>
                    <input 
                        name="title"
                        type="text" 
                        id="title" 
                        value="<?php echo $title; ?>"
                        placeholder="Título Propiedad">

                    <label for="price">Precio</label>
                    <input 
                        name="price"
                        type="number" 
                        id="price" 
                        value="<?php echo $price; ?>"
                        placeholder="Precio Propiedad">

                    <label for="img">Imagen</label>
                    <input 
                        name="img"
                        type="file" 
                        id="img" 
                        value="<?php echo $img; ?>"
                        placeholder="Imagen Propiedad"
                        accept="image/jpeg, image/png">

                    <label for="description">Descripción</label>
                    <textarea id="description"></textarea>
                </fieldset>

                <fieldset>
                    <legend>Información Propiedad</legend>
                    <label for="rooms">Habitaciones</label>
                    <input 
                        name="rooms"
                        type="text" 
                        id="rooms" 
                        value="<?php echo $rooms; ?>"
                        placeholder="Ej: 3"
                        min="1"
                        max="9">

                    <label for="wc">Baños</label> 
                    <input 
                        name="wc"
                        type="text" 
                        id="wc" 
                        value="<?php echo $wc; ?>"
                        placeholder="Ej: 3"
                        min="1"
                        max="9">

                    <label for="parking">Estacionamientos</label> 
                    <input 
                        name="parking"
                        type="text" 
                        id="parking" 
                        value="<?php echo $parking; ?>"
                        placeholder="Ej: 3"
                        min="1"
                        max="9">
                </fieldset>

                <fieldset>
                    <legend>Vendedor</legend>
                    <select>
                        <option selected="selected" disabled value="">-- Seleccione --</option>
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