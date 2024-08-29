

console.warn("Fetch API");

const getEmployee = () => {
    const file = "data.json";
    fetch(file)
        .then(response => response.json())
        .then(data => {
            const {employees} = data;
            console.log(employees);
            employees.forEach(employee => {
                console.log(`Nombre: ${employee.name} - Puesto: ${employee.rol}`);
            });
        })
};
getEmployee();

async function getEmployeeAsyncAwait() {
    const file = "data.json";
    const result = await fetch(file);
    const data = await result.json();
    console.log("getEmployeeAsyncAwait: ", data);
};
getEmployeeAsyncAwait();