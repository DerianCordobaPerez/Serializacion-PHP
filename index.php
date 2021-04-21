<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="public/css/index.css">
    <title>Practica #03</title>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <p class="text-center title"><strong>Practica</strong></p>
        <p class="text-center title"><strong>Procesamiento de formularios</strong></p>
    </div>

    <!-- Acordeon -->
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Formulario de Alumnos
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h3><strong>Alumnos</strong></h3>
                        <h5>Rellene el formulario con los datos de estudiante</h5>
                        <form action="process.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="email"><strong>Email</strong></label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required />
                            </div>

                            <div class="form-group">
                                <label for="email"><strong>Nombre</strong></label>
                                <input type="text" name="name" class="form-control" placeholder="Nombre" maxlength="200" required />
                            </div>

                            <div class="form-group">
                                <label for="email"><strong>Carnet</strong></label>
                                <input type="text" name="license" class="form-control" placeholder="Carnet" maxlength="10" required />
                            </div>

                            <div class="form-group">
                                <label for="email"><strong>Edad</strong></label>
                                <input type="number" name="age" class="form-control" placeholder="Edad" min="15" max="50" required />
                            </div>

                            <div class="form-group">
                                <label for="email"><strong>Curso actual</strong></label>
                                <input type="number" name="course" class="form-control" placeholder="Curso actual" min="1" max="5" required>
                            </div>

                            <div class="form-group">
                                <label for="email"><strong>Imagen</strong></label>
                                <input type="file" name="photo" class="form-control" required>
                            </div>

                            <div class="d-grid gap-2">
                                <input type="submit" value="Enviar" class="btn btn-primary my-2" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Listado Alumnos
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php
                            include 'listStudent.php';
                            list_students();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>