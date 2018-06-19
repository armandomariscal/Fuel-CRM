<?php
	
	$lang = $_GET['lang'];

	if ($lang == 'es') {
		
		$contacto2 = 'Nombre';
		$contacto3 = 'Comentario';
		$contactoSend = 'Enviar';
		
	}

	else {

		$contacto2 = 'Name';
		$contacto3 = 'Comment';
		$contactoSend = 'Send';

	}

	if (isset($_POST["name"])) {

		$name = $_POST['name']; 
		$email = $_POST['email']; 
		$message = $_POST['message']; 

		$remitente = 'contacto@test.com';

		$header = "From: " . $remitente . " \r\n"; 
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
		$header .= "Mime-Version: 1.0 \r\n"; 
		$header .= "Content-Type: text/plain";
		$mensaje .= "Este mensaje fue enviado por: " . $name . " \r\n";
		$mensaje .= "Email: " . $email . " \r\n";
		$mensaje .= "Comentarios: " . $message . " \r\n"; 

		$para = $remitente;
		$asunto = 'Contacto';

		mail($para, $asunto,utf8_decode($mensaje), $header); 

	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
</head>
<body>
	
<form class="contactForm" method="post" action="send.php?lang=<?= $lang ?>"> 
	<div class="row">
		<div class="form-group col-sm-10 name-field">
			<input type="text" class="form form-control requiretop" placeholder="<?= $contacto2 ?>" name="name">
		</div>
		<div class="form-group col-sm-10 email-field">
			<input type="email" class="form form-control email requiretop" placeholder="Email" name="email">
		</div>
		<div class="form-group col-sm-10">
			<textarea rows="3" class="form textarea form-control requiretop" placeholder="<?= $contacto3 ?>" name="message" style="height:100px; resize: none;"></textarea>
		</div>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary" style="background-color:#B8B3AD; border:solid black 1px;">
			<?= $contactoSend ?>
		</button>
	</div>
</form>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
