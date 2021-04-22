<?php
    include_once 'models/CustomLayouts.php';
    include_once 'constants/constants.php';
    include_once 'helpers/serialize_unserialize.php';
    include_once 'components/Divs.php';
    include_once 'components/Accordion.php';
    include_once 'components/Header.php';
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
    <?php
        Header::header(array('Practica', 'Procesamiento de Formularios'), true);
        Divs::open_div('container');
            Accordion::open_accordion('Formulario Estudiantes', 'headingOne', 'collapseOne');
                CustomLayouts::show_form('process.php');
            Accordion::close_accordion();

            Accordion::open_accordion('Listado Estudiantes', 'headingTwo', 'collapseTwo');
                foreach ($students as $student)
                    CustomLayouts::show_full_content($student);
            Accordion::close_accordion();
        Divs::close_div();
    ?>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/0496ae07d8.js" crossorigin="anonymous"></script>
</body>
</html>