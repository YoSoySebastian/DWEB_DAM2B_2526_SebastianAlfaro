import { Empleado } from "./TS-Tarea1-1";
import { Programador } from "./TS-Tarea1-2";

class Empresa{
    nombre: string;
    empleados: Empleado[];

    constructor(nombre: string) {
        this.nombre = nombre;
        this.empleados = [];
    }

    agregarEmpleado(emp: Empleado): void {
        this.empleados.push(emp);
    }

    mostrarEmpleados(): void {
        console.log(`Empleados de ${this.nombre}:`);
    }

    costeAnual(): number {
        let total = 0;
        
        return total;
    }
}

let empleado2 = new Empleado("Persona1", 30, 1500);
let programador2 = new Programador("Persona2", 25, 2000, "TypeScript", 3);

let empresa1 = new Empresa("TechCorp");
empresa1.agregarEmpleado(empleado2);
empresa1.agregarEmpleado(programador2);

empresa1.mostrarEmpleados();
console.log(`Coste anual: ${empresa1.costeAnual()}`);
