<?php 
$destinatario = 'pinkysguatemala@gmail.com';
// esto es al correo al que se enviará el mensaje
$clente = $_POST['cliente' ];
$correo = $_POST['correo' ];
$listacompra = $_POST[ ' lista-compra' ];
$TOTAL = $_POST[ ' TOTAL ' ];
$header = "Enviado desde la página de AlexCG Design" ;
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
mail($destinatario, $correo, $mensajeCompleto, $header);
mail($destinatario, $correo, $mensajeCompleto, $header);
echo "<script>alert(' correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href= ' index.html'\",100</script>";
?>




