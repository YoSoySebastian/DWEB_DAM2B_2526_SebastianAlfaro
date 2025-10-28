"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Empleado = void 0;
var Empleado = /** @class */ (function () {
    function Empleado(nombre, edad, salario) {
        this.nombre = nombre;
        this.edad = edad;
        this.salario = salario;
    }
    Empleado.prototype.informacion = function () {
        console.log("Nombre: ".concat(this.nombre, ", Edad: ").concat(this.edad, ", Salario: ").concat(this.salario));
    };
    Empleado.prototype.salarioAnual = function () {
        return this.salario * 12;
    };
    return Empleado;
}());
exports.Empleado = Empleado;
var empleado1 = new Empleado("Sebastian", 20, 1200);
empleado1.informacion();
empleado1.salarioAnual();
