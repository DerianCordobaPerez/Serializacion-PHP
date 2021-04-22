<?php
    include_once 'models/CustomLayouts.php';
    include_once 'constants/constants.php';
    include_once 'helpers/serialize_unserialize.php';
    include_once 'components/Html.php';
    include_once 'components/Divs.php';
    include_once 'components/Accordion.php';
    include_once 'components/Header.php';
    include_once 'list_student.php';
    CustomLayouts::get_instance();

    Html::open_html('Practica #03');
    Header::header(array('Practica', 'Procesamiento de Formularios'), true);
    Divs::open_div('container');
        Accordion::open_accordion('Formulario Estudiantes', 'headingOne', 'collapseOne');
            CustomLayouts::show_form('process.php');
        Accordion::close_accordion();

        Accordion::open_accordion('Listado Estudiantes', 'headingTwo', 'collapseTwo');
            list_students();
        Accordion::close_accordion();
    Divs::close_div();
    Html::close_html();