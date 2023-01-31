<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
class REST {
    public static function convertirMoneda($valor,$origen,$destino) {
        $salida=false;
        $key="93bc5e8364eba8c0e754e910";
        $req_url = "https://v6.exchangerate-api.com/v6/{$key}/latest/{$origen}";
$response_json = file_get_contents($req_url);
		// Decoding
		$response = json_decode($response_json);
		// Check for success
		if('success' === $response->result) {
			
			$salida = round(($valor * $response->conversion_rates->$destino), 2);
		}
    return $salida;
}
  
}
