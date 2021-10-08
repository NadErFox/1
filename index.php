<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Formulario de Contacto </title>
        <link href="estilo.css" rel="stylesheet" />
    </head>
    <body>
        <!-- FRONT END -->
        <h2>Formulario de Contactos</h2>

        <form class="clientes" action="guardar.php" method="POST" id="Contact_form" runat="server" enctype="multipart/form-data">

            <label for="Nombre">Nombre:</label><br>
            <input type="text" id="Nombre" name="Nombre" maxlength="30"required><br>

            <label for="Apellidos">Apellidos:</label><br>
            <input type="text" id="Apellidos" name="Apellidos" maxlength="60"required><br><br>

            <label for="Calle">Calle:</label><br>
            <input type="text" id="Calle" name="Calle" maxlength="60"required><br><br>

            <button class="submit" type="submit">Enviar Registro</button>
        </form>


    </body>
</html>