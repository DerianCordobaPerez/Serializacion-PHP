<?php
    include_once 'models/CustomLayouts.php';
    include_once 'constants/constants.php';
    include_once 'helpers/serialize_unserialize.php';
    CustomLayouts::get_instance();

    $students = unserialize_content();
?>

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
            <!-- Primer Acordeon -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Formulario de Alumnos
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php
                            CustomLayouts::show_form('process.php');
                        ?>
                    </div>
                </div>
            </div>
            <!-- Segundo Acordeon -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Listado Alumnos
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php
                            CustomLayouts::show_header_titles(array("Imagen", "Informacion", "Acciones"));
                            foreach ($students as $student)
                                CustomLayouts::show_full_content($student);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/0496ae07d8.js" crossorigin="anonymous"></script>
</body>
</html>