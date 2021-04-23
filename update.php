<?php
    include_once 'models/Student.php';
    include_once 'helpers/serialize_unserialize.php';
    include_once 'components/Title.php';
    include_once 'helpers/upload_image.php';
    $upload = validation_image();
    if(!$upload)
        echo 'ERROR / Ocurrio un problema al subir la imagen';
    else if(move_uploaded_file($_FILES['photo']['tmp_name'], NAME_FILE)) {
        $students = unserialize_content();
        foreach($students as $student) {
            if($student->license === $_POST['license']) {
                $student->email = $_POST['email'];
                $student->name = $_POST['name'];
                $student->license = $_POST['license'];
                $student->age = $_POST['age'];
                $student->course = $_POST['course'];
                unlink('uploads/'.$student->photo);
                $student->photo = htmlspecialchars(basename($_FILES['photo']['name']));
                break;
            }
        }

        if(serialize_content($students))
            Title::title_with_strong_void('h3', 'Se edito correctamente el estudiante', 'text-muted');
        else
            Title::title_with_strong_void('h3', 'No se pudo editar el estudiante', 'text-muted');
    }
    sleep(1);
    header("Location: https://".$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['PHP_SELF']), '/\\')."/index.php");
    exit;
