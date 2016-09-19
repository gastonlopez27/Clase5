<?php 


if(!isset($_FILES['_file']))
	{
		Echo "no se cargo una imagen";
	}
	else
	{
		if($_FILES['_file']["error"])
		{
			echo "error de imagen";
		}
		else
		{
			$tamanio =$_FILES['_file']["size"];
    		if($tamanio>1024000)
    		{
    				echo "Error: archivo muy grande!"."<br>";
    		}
    		else
    		{
    			//OBTIENE EL TAMAÑO DE UNA IMAGEN, SI EL ARCHIVO NO ES UNA
				//IMAGEN, RETORNA FALSE
				$esImagen = getimagesize($_FILES['_file']['tmp_name']);

				if($esImagen === FALSE) 
				{
							echo "NO ES UNA IMAGEN";
				}
				else
				{
					$NombreCompleto=explode(".", $_FILES['_file']["name"]);
					$Extension=  end($NombreCompleto);
					$arrayDeExtValida = array("jpg", "jpeg", "gif", "bmp","png");  //defino antes las extensiones que seran validas
					if(!in_array($Extension, $arrayDeExtValida))
					{
					   echo "Error archivo de extension invalida";
					}
					else
					{
						
						$destino = "c:/xampp/htdocs/Clase5/foto/".$_FILES['_file']["name"].".".$Extension;
						
						//MUEVO EL ARCHIVO DEL TEMPORAL AL DESTINO FINAL
    					if (move_uploaded_file($_FILES['_file']["tmp_name"],$destino))
    					{		
      						 echo "ok";
      					}
      					else
      					{   
      						echo "error en destino";
      					}
					}
				}
    		}			
		}
	}
	
?>