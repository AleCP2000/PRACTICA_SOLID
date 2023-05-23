<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        /**
         * include: para agregar vistas, ejemplo: Header, Footer
         * require: para agregar clases, código, archivos php
         */
        require "Planilla.php";
    ?>
    <main class="container">
        <h1>Planilla empleado</h1>
        <form action="" method="POST">
            <label for="">Nombre Completo</label><br>
            <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nobre completo"><br>
            <label for="">Horas trabajadas</label><br>
            <input type="number" class="form-control" name="hora"><br>
            <label for="">Tarifa por hora</label><br>
            <input type="text" class="form-control" name="tarifa"><br>

            <input type="submit" class="btn btn-success mt-2" value="Enviar Datos">        
        </form>
    </main>
    <?php
        if (isset($_POST['nombre'],$_POST['hora'],$_POST['tarifa'])) {
            $planilla = new Planilla($_POST['nombre'],$_POST['hora'],$_POST['tarifa']);
            $planilla->obtenerSueldoBruto();
            $planilla->obtenerISS();
            $planilla->obtenerAFP();
            $planilla->obtenerSueldoNeto();
            echo $planilla->imprimirInfo();
        }
    ?>
</body>
</html>