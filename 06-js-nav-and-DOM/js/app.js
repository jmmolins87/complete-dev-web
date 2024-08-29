


// querySelector -> Retorna de 0 a 1 elemento
const titleHeaderQuery = document.querySelector('.header__text h2');
console.log(titleHeaderQuery);
titleHeaderQuery.textContent = 'Este texto ha sido cambiado con querySelector';
// querySelectorAll -> Retorna todos los elementos que cumplan con la condición
const linksNavbarQueryAll = document.querySelectorAll('.header__navigation .navbar a');
console.log(linksNavbarQueryAll[2]);
linksNavbarQueryAll[2].textContent = 'Redirigimos a Google y cambiamos texto con querySelectorAll';
linksNavbarQueryAll[2].href = 'https://www.google.com';
linksNavbarQueryAll[2].target = '_blank';
linksNavbarQueryAll[2].classList.add('text-ellipsis');
// getElementById -> Retorna un solo elemento
const headerId = document.getElementById('header');
console.log(headerId);

// Generamos un nuevo link
const newLink = document.createElement('a');
newLink.href = 'https://www.google.com';
newLink.textContent = 'Google';
newLink.target = '_blank';
newLink.classList.add('navbar__link');
// Agregamos el nuevo link al DOM
const navbar = document.querySelector('.header__navigation .navbar');
navbar.appendChild(newLink);
console.log(newLink);

// Eventos
console.log(1);
window.addEventListener('load', () => { // Espera a que cargue todo el contenido de la página
    console.log(2);
});
window.onload = () => { // Espera a que cargue todo el contenido de la página
    console.log(3);
};
document.addEventListener('DOMContentLoaded', () => { // Espera a que cargue el DOM, pero no espera al css o img
    console.log(4)
}) 
console.log(5);

window.onscroll = () => {
    console.log('Scrolling...');
};

// Seleccionar elementos del DOM y asociarles un evento
// const btnSend = document.querySelector('.btn.btn--primary');
// btnSend.addEventListener('click', (ev) => {
//     ev.preventDefault()
//     console.log(ev);
//     console.log('Botón enviar clickeado');
// });
// console.log("Botón enviar", btnSend);

// Eventos de los inputs y textarea
const data = {
    name: '',
    email: '',
    message: ''
};
const inputName = document.querySelector('#name');
inputName.addEventListener('input', readingInputs);
const inputEmail = document.querySelector('#email');
inputEmail.addEventListener('input', readingInputs); 
const textareaMessage = document.querySelector('#message');
textareaMessage.addEventListener('input', readingInputs);

function readingInputs(e) {
    data[e.target.id] = e.target.value;
    console.log(data);
}

// Evento submit
const form = document.querySelector('.form');
form.addEventListener('submit', (ev) => {
    ev.preventDefault();
    // Validar el formulario
    const {name, email, message} = data;
    console.log(name, email, message);
    if(name === '' || email === '' || message === '') {
        showAlert('* Todos los campos son obligatorios', true);
        return; // Detiene la ejecución del código
    }
    // Crear otra alerta
    showAlert('* Mensaje enviado correctamente');
});

// Mostramos una alerta según se envíe el correo o de algún error
function showAlert(message, error = null) {
    const alert = document.createElement('p');
    alert.textContent = message;
    if(error) {
        // Mostramos un error en pantalla
        alert.classList.add('error');
    } else {
        // Mostrar un mensaje en pantalla
        alert.classList.add('success');
    }
    form.appendChild(alert);
    setTimeout(() => {
        alert.remove();
    }, 3000);
}