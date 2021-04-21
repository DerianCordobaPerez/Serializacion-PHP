<?php
    require 'models/Student.php';;

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
        file_put_contents('StudentSerialize.txt', implode(',', $student->get_data()), FILE_APPEND | LOCK_EX);
    }
    header("Location: https://".$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['PHP_SELF']), '/\\')."/index.php");
    exit;