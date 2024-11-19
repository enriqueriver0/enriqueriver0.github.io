<?php
/*
Plugin Name: Formulario
Plugin URI: http://localhost.com
Description: Formulario de registro para wordpress
Version: 1.0
Author: Enrique Rivero
Author URI: https://elcangurovioleta.com
*/


// Shortcode para insertar el formulario en WordPress
function mi_formulario_registro() {
    ob_start();
    ?>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        
        <input type="submit" name="submit" value="Registrarse">
    </form>
    <?php
    // Si el formulario ha sido enviado
    if (isset($_POST['submit'])) {
        // Sanear los datos de entrada
        $nombre = sanitize_text_field($_POST['nombre']);
        $email = sanitize_email($_POST['email']);
        $password = sanitize_text_field($_POST['password']);

        // Verificar que el correo no esté ya registrado
        if (email_exists($email)) {
            echo "Este correo ya está registrado. Por favor, usa otro.";
        } else {
            // Crear el usuario en WordPress
            $user_id = wp_create_user($nombre, $password, $email);
            if (is_wp_error($user_id)) {
                echo "Hubo un error al crear el usuario: " . $user_id->get_error_message();
            } else {
                echo "Usuario registrado exitosamente.";
            }
        }
    }
    return ob_get_clean();
}
add_shortcode('formulario_registro', 'mi_formulario_registro');
// Función que genera el formulario
