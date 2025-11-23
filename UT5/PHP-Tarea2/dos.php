<?php
    include "cabecera.php";

    define("KW", 0.11473);
    define("IVA", 16);
    $consumo = 22;
    $total = constant("KW") * $consumo;
    $IVA16 = ($total / 100) * constant("IVA");
    $totalFactura = $total + $IVA16;

    echo "<table>
            <tr>
                <td>Consumo</td>
                <td>". $consumo." KW</td>
            </tr>
            <tr>
                <td>Precio KW</td>
                <td>". constant("KW")."€</td>
            </tr>
            <tr>
                <td>Total sin IVA</td>
                <td>". round($total, 2)."€</td>
            </tr>
            <tr>
                <td>IVA(16%)</td>
                <td>". round($IVA16, 2)."€</td>
            </tr>
            <tr>
                <td>Total factura</td>
                <td>". round($totalFactura,2)."€</td>
            </tr>
        </table>";

    include "pie.php";
?>