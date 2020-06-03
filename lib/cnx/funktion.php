<?php

function desencriptar($q){

			$key='PIMUs_LOS_CABOS2020';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
			$result = '';
			$string = base64_decode($q);
			for($i=0; $i<strlen($string); $i++) {
			$char = substr($string, $i, 1);
			$keychar = substr($key, ($i % strlen($key))-1, 1);
			$char = chr(ord($char)-ord($keychar));
			$result.=$char;
			}
			return $result;

	}

?>