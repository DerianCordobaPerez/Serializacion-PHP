<?php
    include_once 'models/Student.php';
    include_once 'constants/constants.php';
    include_once 'helpers/serialize_unserialize.php';
    include_once 'components/Title.php';
    $students = unserialize_content();

    $target = 'uploads/'.basename($_FILES['photo']['name']);
    $upload = true;
    $imageUploadType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    if(isset($_POST['submit'])) {
        $value = getimagesize($_FILES['photo']['tmp_name']);
        if(!$value) $upload = false;
    }

    if(file_exists($target)) {
        echo 'Error, la imagen ingresada ya existe';
        $upload = false;
    }

    if(!$upload)
        echo 'ERROR / Ocurrio un problema al subir la imagen';
    else if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
        $student = new Student(
            $_POST['email'],
            $_POST['name'],
            $_POST['license'],
            $_POST['age'],
            $_POST['course'],
            htmlspecialchars(basename($_FILES['photo']['name']))
        );
        array_push($students, $student);
        if(serialize_content($students))
            Title::title_with_strong_void('h3', 'Se agregado correctamente el estudiante', 'text-muted');
        else
            Title::title_with_strong_void('h3', 'No se agregado el estudiante', 'text-muted');
    }
    header("Location: https://".$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['PHP_SELF']), '/\\')."/index.php");
    exit;