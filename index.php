<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Correo</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-xl">
        <div class="row justify-content-center mt-5">

            <form action="envio.php" method="POST" class="form bg-light p-3">
                <div class="mb-3">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Daniel">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="correo">Correo a enviar</label>
                    <input class="form-control" type="email" name="correo" id="correo" placeholder="example@dominio.cl">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="asunto">Asunto</label>
                    <input class="form-control" type="text" name="asunto" id="asunto">
                </div>
                <div class="mb-3">
                    <textarea name="mensaje" id="mensaje" placeholder="Escribe tu mensaje..." cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Enviar mensaje">
            </form>
            
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>