<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
class REST {
    public static function convertirMoneda($valor,$origen,$destino) {
        $api="https://api.apilayer.com/fixer/convert?to={$destino}&from={$origen}&amount={$valor}";
        $key="gAlDP0FYq8QX2CO0WUPoN4O9VggZ46UF";
    }
}
