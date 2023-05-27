<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>PROMEDIO DE NOTAS</title>
</head>
<body>
    <form name="formulario" method="post" action="operacion.php">
    <div class="mb-3">
    <h1>Promedio de Notas de Estudiantes Unicaes</h1>
        </div>
        <div class="mb-2">
            <label for="nombre" class="form-label">Nombre Alumno:</label>
            <input type="text-justify" class=p-3 mb-2 bg-secondary text-white" name="nombre" id="nombre">
        </div>
        <div class="mb-2">
            <label for="nota1" class="form label">Laboratorio 1:</label>
            <input type="number" class=p-3 mb-2 bg-secondary text-blue" name="nota1" id="nota1">
        </div>
        <div class="mb-2">
            <label for="nota2" class="form-label">Laboratorio 2:</label>
            <input type="number" class=p-3 mb-2 bg-secondary text-white" name="nota2" id="nota2">
        </div>
        <div class="mb-2">
            <label for="parcial" class="form-label">Parcial:</label>
            <input type="number" class=p-3 mb-2 bg-secondary text-white" name="parcial" id="parcial">
        </div>
        <input type="submit" value="Calcular"><br></br>
    </form>

</body>
</html>

