<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    // Validar contraseñas
    $p1 = $_POST['pass'];
    $p2 = $_POST['pass2'];

    if ($p1 != $p2) 
    {
        echo "Confirma correctamente tu contraseña";
        exit; // Detiene la ejecución si las contraseñas no coinciden
    }

    // Procesamiento del formulario
    $nombre = !empty($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : "El nombre es requerido";
    $edad = !empty($_POST['edad']) ? htmlspecialchars(trim($_POST['edad'])) : "La edad es requerida";
    $contraseña = !empty($_POST['pass']) ? htmlspecialchars(trim($_POST['pass'])) : "La contraseña es requerida";

    // Verifica si todos los campos requeridos están completos
    if ($nombre != "El nombre es requerido" && $edad != "La edad es requerida" && $contraseña != "La contraseña es requerida") //!= Se usa para comparar si dos valores no son iguales
    {
        // Valida usuario y contraseña
        $nombre = $_POST['nombre'];
        $contraseña = $_POST['pass'];
        $edad = $_POST['edad'];

        if ($nombre !== "luis" || $contraseña !== "mendoza" || $edad < 18)  //!== para comparar si dos valores no son idénticos 
        {
            echo "Verifique que los datos sean los correctos (nombre o password)";
            exit; // Detiene la ejecución si no se cumplen los requisitos de login
        }

        echo "Hola, ¿cómo estás, " . $nombre . "? tu edad exactamente es: " . $edad;
    } 
    else 
    {
        echo "Por favor llena todos los campos solicitados que se encuentran en el formulario...";
    }
}
?>
