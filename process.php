<?php
    include_once 'models/Student.php';
    include_once 'helpers/serialize_unserialize.php';
    include_once 'helpers/upload_image.php';
    include_once 'helpers/redirect_page.php';
    include_once 'components/Title.php';
    include_once 'components/Button.php';

    // Validacion y agregado de un nuevo estudiante
    $upload = validation_image();
    if(!$upload)
        echo 'ERROR / Ocurrio un problema al subir la imagen';
    else if(move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.basename($_FILES['photo']['name']))) {
        $students = unserialize_content();
        $student = new Student(
            $_POST['email'],
            $_POST['name'],
            $_POST['license'],
            $_POST['age'],
            $_POST['course'],
            htmlspecialchars(basename($_FILES['photo']['name']))
        );
        array_push($students, $student);
        $result = serialize_content($students);
        if($result)
            Title::title_with_strong_void('h3', 'Se agregado correctamente el estudiante', 'text-muted');
        else
            Title::title_with_strong_void('h3', 'No se agregado el estudiante', 'text-muted');
    }
    redirect();