<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/estilos/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="Titulo">¡Bienvenidos!<br> Registra tu asistencia en Assistpro</h1>
    <h2 id="fecha"></h2>
    <div class="container">
        <a class="acceso" href="vista/login/login.php">Ingresar a la plataforma</a>
        <p class="cedula">Ingrese su Cédula</p>
        <form action="" class=¨Texto¨>
            <input type="text" placeholder="Cédula del Estudiante" name="txtcedula" >
        
            <div class="botones">
                <a class="entrada" href="">ENTRADA</a>
                <a class="salida" href="">SALIDA</a>
            </div>
            
        </form>
    </div>
    <script> 
        setInterval(() => {                                                         
            let fecha=new Date();
            let fechaHora=fecha.toLocaleString();
            document.getElementById("fecha").textContent=fechaHora;
        }, 1000);
    </script>
</body>
</html>
