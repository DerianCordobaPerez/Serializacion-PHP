<?php
    include_once 'models/Student.php';
    include_once 'models/CustomLayouts.php';
    include_once 'helpers/get_student.php';
    CustomLayouts::get_instance();

    //Pagina de edicion
    $student = get_student($_GET['license']);
    CustomLayouts::show_edit_student($student);