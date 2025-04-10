<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $equipo = htmlspecialchars($_POST['equipo']);
    $pilotos = isset($_POST['pilotos']) ? array_map('htmlspecialchars', $_POST['pilotos']) : [];
    $piloto_principal = isset($_POST['piloto_principal']) ? htmlspecialchars($_POST['piloto_principal']) : '';
    echo "<h2>Datos recibidos:</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Correo Electrónico: " . $email . "<br>";
    echo "Equipo Favorito: " . $equipo . "<br>";
    echo "Pilotos Favoritos: ";
    if (!empty($pilotos)) {
        echo implode(", ", $pilotos) . "<br>";
    } else {
        echo "Ninguno seleccionado<br>";
    }
    echo "Tipo de coche favorito: " . ($piloto_principal ? $piloto_principal : 'Ninguno seleccionado') . "<br>";
} else {
    echo "No se enviaron datos.";
}
?>