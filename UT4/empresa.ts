import { Empleado } from "./empleado";
import { Programador } from "./programador";

export class Empresa{
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
        for (let i = 0; i < this.empleados.length; i++){
            this.empleados[i].informacion();
        }
    }

    costeAnual(): number {
        let total = 0;
        for (let i = 0; i < this.empleados.length; i++){
            let emp = this.empleados[i];
            total += emp.salarioAnual();
            if (emp instanceof Programador){
                total += emp.bonus();
            }
        }
        return total;
    }
}