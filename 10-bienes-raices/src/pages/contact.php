<?php 
    include './../includes/templates/header.php';
?>

    <main class="wrap-main-contact">
        <div class="container">
            <div class="section">
                <h1>Contacto</h1>
                <picture>
                    <source srcset="./../../build/img/destacada3.webp" type="image/webp">
                    <source srcset="./../../build/img/destacada3.jpg" type="image/jpeg">
                    <img 
                        loading="lazy"
                        src="./../../build/img/destacada3.jpg" 
                        alt="Imagen de contacto" 
                        title="Imagen de contacto">
                </picture>

                <h2>Llene el formulario de contacto</h2>
                <form class="wrap-form">
                    <fieldset>
                        <legend>Información personal</legend>
                        <label for="name">Nombre</label>
                        <input 
                            type="text" 
                            id="name"
                            placeholder="Tu nombre" 
                            required>
                        <label for="mail">E-mail</label>
                        <input 
                            type="email" 
                            id="mail"
                            placeholder="Tu correo" 
                            required>
                        <label for="phone">Teléfono</label>
                        <input 
                            type="phone" 
                            id="phone"
                            placeholder="Tu Teléfono" 
                            required>
                        <label for="message">Mensaje</label>
                        <textarea id="message"></textarea>
                    </fieldset>
                    <fieldset>
                        <legend>Información sobre Propiedad</legend>
                        <label for="options">Vende o compra</label>
                        <select id="options">
                            <option value="" disabled selected>-- Seleccione --</option>
                            <option value="buy">Comprar</option>
                            <option value="sell">Vender</option>
                        </select>
                        <label for="budget">Precio o presupuesto</label>
                        <input 
                            type="number" 
                            id="budget"
                            placeholder="Tu precio o presupuesto" 
                            required>
                    </fieldset>
                    <fieldset>
                        <legend>Contacto</legend>
                        <p>¿Cómo desea ser contactado?</p>
                        <div class="form-contact">
                            <label for="contact-phone">Teléfono</label>
                            <input
                                name="contact" 
                                type="radio" 
                                value="phone" 
                                id="contact-phone">
                            <label for="contact-mail">E-mail</label>
                            <input
                                name="contact" 
                                type="radio" 
                                value="mail" 
                                id="contact-mail">
                        </div>
                        <p>Si eligió ser contactado por teléfono, elija la fecha y la hora</p>
                        <label for="date">Fecha</label>
                        <input 
                            type="date"
                            id="date">
                        <label for="hour">Hora</label>
                        <input 
                            type="time" 
                            id="hour" 
                            min="09:00" 
                            max="18:00">
                    </fieldset>
                    <div class="wrap-button">
                        <input 
                            type="submit" 
                            value="Enviar" 
                            class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php 
    include './../includes/templates/footer.php';
?>