<?php

require('Enigma.php');
if(isset($_POST['_texto']))
{
Enigma::Encriptar($_POST['_texto']);
}

if(isset($_FILES['_file']))
{
	Enigma::Desencriptar($_FILES['_file']["tmp_name"]);
}

?>