import { Empleado } from "./empleado";
import { Programador } from "./programador";
import { Empresa } from "./empresa";

let empresa1 = new Empresa("TechCorp");

let empleado1 = new Empleado("Persona1", 28, 1800);
let empleado2 = new Empleado("Persona2", 30, 1500);

let programador1 = new Programador("Persona3", 30, 2000, "TypeScript", 3);
let programador2 = new Programador("Persona4", 27, 2200, "Java", 5);

empresa1.agregarEmpleado(empleado1);
empresa1.agregarEmpleado(empleado2);
empresa1.agregarEmpleado(programador1);
empresa1.agregarEmpleado(programador2);

empresa1.mostrarEmpleados();
console.log(`Coste anual: ${empresa1.costeAnual()}€`);