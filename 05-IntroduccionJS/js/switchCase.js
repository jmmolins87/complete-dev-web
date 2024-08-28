


console.warn("Switch Case");
const payMethod = "bitcoinvfvcxcxcdseswqa";

switch (payMethod) {
    case "card":
        console.log("Pagaste con tarjeta");
        break;
    case "cash":
        console.log("Pagaste con efectivo");
        break;
    case "transfer":
        console.log("Pagaste con transferencia");
        break;
    default:
        console.log("Método de pago no soportado");
        break;
}