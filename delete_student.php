<?php
    include_once 'models/Student.php';
    include_once 'models/CustomLayouts.php';
    include_once 'helpers/get_student.php';
    CustomLayouts::get_instance();

    // Construccion de la pagina eliminar
    $student = get_student($_GET['license']);
    $titles = array('Nombre', 'Email', 'Edad', 'Carnet', 'Curso');
    $array_information = array($student->name, $student->email, $student->license, $student->age, $student->course, $student->photo);
    CustomLayouts::show_delete_student($student, $titles, $array_information);

