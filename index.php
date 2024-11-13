<?php include 'destinos.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Por Yucatán</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <h1>Organiza tu viaje feliz y despreocupado</h1>

    <nav>
        <ul>
            <li><a onclick="showSection('inicio')">Inicio</a></li>
            <li><a onclick="showSection('reservas')">Reservas</a></li>
            <li><a onclick="showSection('hoteles')">Hoteles</a></li>
            <li><a onclick="showSection('guias')">Guías</a></li>
            <li><a onclick="showSection('contacto')">Contáctanos</a></li>
            <li><a onclick="showSection('crud')">Destinos</a></li>
        </ul>
    </nav>

    <div id="inicio" class="section active">
        <h2>¡Bienvenido a Tour por Yucatan!</h2>
        <p>Encuentra los mejores destinos turísticos, hospedaje y guías para tu próxima aventura.</p>
    </div>

    <div id="reservas" class="section">
        <h2>Reservas</h2>
        <p>Aquí puedes hacer tus reservas para los mejores destinos turísticos.</p>
    </div>

    <div id="hoteles" class="section">
        <h2>Hoteles Recomendados</h2>
    </div>

    <div id="guias" class="section">
        <h2>Guías Turísticas</h2>
    </div>

    <div id="contacto" class="section">
        <h2>Contáctanos</h2>
        <form action="enviar_contacto.php" method="post">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Mensaje:</label>
            <textarea name="mensaje" rows="4" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <div id="crud" class="section">
        <h2>Administración de Destinos Turísticos</h2>

        <h3>Agregar Destino</h3>
        <form method="post" action="index.php">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
            <label>Descripción:</label>
            <textarea name="descripcion" required></textarea>
            <label>Ubicación:</label>
            <input type="text" name="ubicacion" required>
            <label>Precio Estimado:</label>
            <input type="number" step="0.01" name="precio_estimado" required>
            <button type="submit" name="create">Agregar</button>
        </form>

        <h3>Lista de Destinos Turísticos</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Ubicación</th>
                    <th>Precio Estimado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($destinos as $destino): ?>
                <tr>
                    <td><?php echo $destino["id"]; ?></td>
                    <td><?php echo $destino["nombre"]; ?></td>
                    <td><?php echo $destino["descripcion"]; ?></td>
                    <td><?php echo $destino["ubicacion"]; ?></td>
                    <td><?php echo $destino["precio_estimado"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => section.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active');
        }
    </script>

</body>
</html>
