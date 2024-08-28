

console.warn("Control structures");
// * == -> Equal to
// * === -> Equal value and equal type
// * != -> Not equal
// * !== -> Not equal value or not equal type
// * > -> Greater than
// * < -> Less than
// * >= -> Greater than or equal to
// * <= -> Less than or equal to

console.log("Operador de comparación == y === dentro de un if");
const points = "1000";
if(points == 1000) {
    console.log("The points are 1000");
} else {
    console.log("The points are not 1000");
}

console.log("Operador de comparación > y < dentro de un if");
const cash = 1000;
const total = 800;
if(cash > total) {
    console.log("You can buy it");
} else {
    console.log("You can't buy it");
}

const role = "user";
console.log("Operador if else");
if(role === "admin") {
    console.log("Welcome Admin");
} else if(role === "user") {
    console.log("Welcome User");
} else {
    console.log("Welcome Guest");
}