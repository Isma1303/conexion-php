<?php 
$servidor = "localhost";
$usuario = "root";
$clave = ""; 
$bd = "uspg"; 

$conneccion = mysqli_connect($servidor, $usuario, $clave, $bd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea Semana 5</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <form class="contactForm" method="POST" action="">
        <div class="title">Contactanos</div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim excepturi repellat earum quibusdam ipsa animi alias deleniti, dolor quam, a cumque non perspiciatis asperiores ab sit, dicta repellendus. Quibusdam, recusandae?</p>
        <input type="text" name="firstname" placeholder="Nombre" required>
        <input type="text" name="lastname" placeholder="Apellido" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Telefono" required>
        <textarea name="msgdescription" placeholder="Mensaje" required></textarea>
        <input type="submit" name="Enviar" value="Enviar">
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script ></script>
</body>
</html>
<?php


if(isset($_POST['Enviar'])) {
     $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msgdescription = $_POST['msgdescription'];


    
    $insertar = "INSERT INTO tareasemana5 (firstname, lastname, email, phone, msgdescription) VALUES ('$firstname', '$lastname', '$email', '$phone', '$msgdescription')";
    $conneccion = mysqli_query($conneccion, $insertar);

  
}
?>

