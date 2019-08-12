<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>



<?php
//Saber si pulso el boton enviar
  if(isset($_POST["enviando"])){
    $usuario = $_POST["nombre_usuario"];
    $edad = $_POST["edad_usuario"];

    if($usuario == "Angel" && $edad >= 18) {
      echo "<p class='validado'> Puedes entrar camarada</p>";
    }else{
      echo "<p class='no_validado'> Quien eres? $usuario?, nani core.</p>";
    }
  }

?>