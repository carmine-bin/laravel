<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    
    <form action="/recibe-formulario" method="POST">
        @csrf
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>