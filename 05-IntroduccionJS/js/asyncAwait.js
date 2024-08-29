

console.warn("Async / Await");

function downloadClients() {
    return new Promise((resolve, reject) => {
        console.log("Descargando clientes...");

        setTimeout(() => {
            resolve("Los clientes fueron descargados");
        }, 5000);
    });
}

function downloadOrders() {
    return new Promise((resolve, reject) => {
        console.log("Descargando pedidos...");

        setTimeout(() => {
            resolve("Los pedidos fueron descargados");
        }, 3000);
    });
}

async function app() {
    try {
        // const resultClients = await downloadClients();
        // const resultOrders = await downloadOrders();
        // console.log(resultClients);
        // console.log(resultOrders);
        const result = await Promise.all([downloadClients(), downloadOrders()]);
        console.log(result[0]);
        console.log(result[1]);
    } catch (error) {
        console.error(error);
    }
}
app();