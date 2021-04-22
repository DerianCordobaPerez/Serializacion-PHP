<?php
    include_once 'models/Student.php';
    include_once 'helpers/get_student.php';
    include_once 'models/CustomLayouts.php';
    CustomLayouts::get_instance();

    $student = get_student($_GET['license']);
    Html::open_html('Edit: '.$student->name);
        Divs::open_div('container bg-light my-4 p-4');
            CustomLayouts::show_form('update.php', $student);
        Divs::close_div();
    Html::close_html();