
"use strict"; // Se utiliza para que el código sea más seguro y no se puedan hacer cosas que no se deben hacer
console.warn("Strict Mode");
console.warn("Con el modo stricto no podemos añadir propiedades a un objeto que ha sido congelado");
const product = {
    nameProduct: "Monitor HD de 32\"",
    price: 300,
    available: true
}

product.direction = "Velázquez, 3"; // Se puede agregar una propiedad
console.log(product);
Object.seal(product); // No se puede agregar ni eliminar propiedades pero se puede modificar las existentes
product.price = 350; // Se puede modificar una propiedad
console.log(Object.freeze(product));
Object.freeze(product); // Después de esta función no se puede modificar el objeto
product.img = "imagen.jpg"; // No se puede agregar una propiedad
console.info(`Object.freeze no permite que se modifique el objeto:`);
console.log(product);

