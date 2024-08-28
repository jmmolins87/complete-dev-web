


console.warn("Arrow Functions");
// Funciones normales
console.log("Funciones normales")
function addNormal(a, b) {
    return a + b;
}
console.log(`Suma con una función normal: ${addNormal(5, 5)}`);
const learnTechnology = function(technology) {
    console.log(`Aprendiendo ${technology}`);
}
learnTechnology("JavaScript");

// Funciones de flecha
console.log("Funciones de flecha")
const addArrow = (a, b) => a + b;
console.log(`Suma con una función de flecha: ${addArrow(5, 5)}`);
const learnTechnologyArrow = technology => console.log(`Aprendiendo ${technology}`);
learnTechnologyArrow("JavaScript");

// Funciones de flecha con un solo parámetro
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Dicember"];
console.table(months);
const shop = [
    { name: "Monitor 27 pulgadas", price: 500 },
    { name: "Television", price: 700 },
    { name: "Tablet", price: 300 },
    { name: "Audifonos", price: 200 },
    { name: "Teclado", price: 50 },
    { name: "Celular", price: 500 }
]
console.table(shop);
months.forEach((month, index) => console.log(`${index + 1} - ${month}`));