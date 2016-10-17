<?php
session_start();
require_once 'inc/db_config.php';

$nombre = '';
$email = '';
$comentario = '';
$_SESSION ['errors']='';
$correo_fundacion = MAILFUNDACION;

#revisa si se esta enviando e formulario o si solo se visita la pagina para llenar la informacion

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    #se comprueba si el captcha es valido
    if(empty($_SESSION['captcha']) || strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0){
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$_SESSION ['errors'] .= "¡El codigo de verificacion no coincide!\n";
	}
   
    /* CONECTAR CON BASE DE DATOS ****************/
    $con = mysqli_connect(SERVER, USER, PASS, DB);
    if ($con->connect_errno){die("ERROR DE CONEXION CON MYSQL 1: ".$con->connect_error);}
    mysqli_set_charset ( $con , "utf8");
    
    #se guardan los datos del formulario en las variables correspondientes
    $nombre = trim($_POST['nombre']);
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        
    #se sanitiza y se valida el email
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    }else{$_SESSION ['errors'] .="El Email no es valido\n".$_POST['nombre']."\n".$_POST['email']."\n".$_POST['comentario']."\n";}
    
    #se sanitiza el comentario
    $comentario = trim($_POST['comentario']);
    $comentario = filter_var($comentario, FILTER_SANITIZE_STRING);
    
    if(empty($_SESSION ['errors'])){
        $con->query("INSERT INTO Comentarios (nombre, email, comentario) VALUES ('".$nombre."', '".$email."', '".$comentario."');")
            or die("Ocurrio un error al tratar de guardar el comentario nuevo: ".$con->error); 
        
        #se genera el correo a enviar a la fundacion con el comentario
        $titulo = $nombre.' a enviado un comentario';
        $titulo = "=?UTF-8?B?".base64_encode($titulo)."=?=";
        $mensaje='
        <html>
        <head>
        <title>'.$nombre.' a enviado un comentario</title>
        </head>
        <body>
        <h1>'.$nombre.' a enviado un comentario</h1>
         <p><strong>su email es: </strong>'.$email.'</p>
        <p>y nos eniva el siguientw</p>
        <p>'.$comentario.'</p>
        </body>
        </html>';

        //envamos la informacion del interesado a la fundacion
        mail(MAILFUNDACION,$titulo,$mensaje,$cabeceras);
        header('Location: /'); 
    }
}
