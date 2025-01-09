<!doctype html>
<html lang="es" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ticket</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="./Vista/assets/estilos.css">
    </head>
    <body>
        <div class="container-fluid d-flex align-items-center justify-content-center all">
            <div class="card p-5">
                <div class="d-flex justify-content-end">
                    <a type="button" class="btn-close" href="index.php" aria-label="Close"></a>
                </div>
                <hr>
                <div class="text-center">
                    <h1 class="fuente h3" id="ticket"></h1>
                    <span class="fuente" id="mensaje"></span>
                    <hr>
                    <input type="hidden" id="data" value='<?php echo $datosJSON;?>'>
                    <form action="index.php?controlador=Usuario&metodo=RegistrarAsistencia" method="post" style="display: block;">
                        <div class="form-floating mb-3">
                            <input disabled type="text" id="cedula" name="cedula" class="form-control" placeholder="">
                            <label class="fuente">Cedula</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input disabled type="text" id="nombre" name="nombre" class="form-control" placeholder="">
                            <label class="fuente">Nombre</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
        <script src="./Vista/js/ticket.js"></script>
    </body>
</html>
