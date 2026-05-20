<?php
session_start();

// Verificación de seguridad: SOLO ADMIN
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Don Toño</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-screwdriver-wrench"></i> Admin - Don Toño
            </a>
            
            <div class="ms-auto">
                <span class="text-white me-3">Bienvenido, <?= htmlspecialchars($_SESSION['rol']); ?></span>
                <a class="btn btn-outline-danger btn-sm" href="../php/logout.php">
                    <i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión
                </a>
            </div>
        </div>
    </nav>

  <div class="container mt-5"> 
    <h2 class="mb-4">Panel de Administración</h2> 
    <div class="row"> 
        
        <div class="col-md-4 mb-4"> 
            <div class="card text-center shadow"> 
                <div class="card-body"> 
                    <i class="fa-solid fa-box fa-3x mb-3 text-primary"></i> 
                    <h5 class="card-title">Ver Productos</h5> 
                    <a href="ver-productos.php" class="btn btn-primary">Todos los productos</a> 
                </div> 
            </div> 
        </div> 

        <div class="col-md-4 mb-4"> 
            <div class="card text-center shadow"> 
                <div class="card-body"> 
                    <i class="fa-solid fa-plus fa-3x mb-3 text-success"></i> 
                    <h5 class="card-title">Agregar Producto</h5> 
                    <a href="crear-producto.php" class="btn btn-success">Crear</a> 
                </div> 
            </div> 
        </div> 

    </div> 
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>