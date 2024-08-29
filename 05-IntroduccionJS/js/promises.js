



console.warn("Promises");
const authUser = new Promise((resolve, reject) => {
    const auth = true;

    if(auth) {
        resolve("User Authenticated"); // Se ejecuta si la promesa se cumple
    } else {
        reject("User not authenticated"); // Se ejecuta si la promesa no se cumple
    }
});
authUser
    .then(result => console.log(result))
    .catch(error => console.error(error));

// En las promesas existen tres valores posibles:
// Pending: No se ha cumplido ni rechazado
// Fulfilled: Se ha cumplido
// Rejected: Se ha rechazado