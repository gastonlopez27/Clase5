<?php

class Enigma
{
/*
<?php

$archivo = fopen($_FILES['_file']["tmp_name"], "r");
			while(!feof($archivo))
			{
			$renglon = fgets($archivo);

			//la funcion explode es un parseador
			$auto = explode("=>", $renglon);

			$listadoDeAutos[] = $auto;

			}
			fclose($archivo);

?>*/
	public static function Encriptar($mensaje)
	{
		for ($i= 0; $i < strlen($mensaje); $i++)
		 { 

			$valor = ord($mensaje[$i]);
			$valor = ($valor + 200);
			$letra = chr($valor);
			$mensaje[$i]=$letra;

		}

		$archivo = fopen("codigo.txt","a");

		fwrite($archivo, "$mensaje");

		fclose($archivo);

	}

	public static function Desencriptar($ruta)
	{
		$archivo = fopen("$ruta", "r");
	
	$aLeer = "";
	while(!feof($archivo))
	{

		$aLeer .= fgets($archivo);

	}
	
	
		for ($i=0; $i < strlen($aLeer); $i++)
		{ 
			$valor = ord($aLeer[$i]);
			$valor = ($valor - 200);
			$letra = chr($valor);
			echo "$letra";	
		}

	}
}



?>