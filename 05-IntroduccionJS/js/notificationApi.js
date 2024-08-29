


console.warn("Notification API");
const btnNotification = document.getElementById("btnNotification");
btnNotification.addEventListener("click", () => {
    console.log("Click en el botón de notificación");
    Notification.requestPermission()
        .then(result => console.log(`El resultado es: ${result}`))
})

if(Notification.permission == "granted") {
    new Notification("Esta es una notificación", {
        icon: "./../assets/img/codecode.jpg",
        body: "Código con Udemy"
    });
}