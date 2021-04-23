<?php
    include_once 'components/Title.php';
    include_once 'components/Button.php';
    include_once 'components/Divs.php';
    include_once 'helpers/serialize_unserialize.php';

    function list_students(): void {
        $students = unserialize_content();

        if(count($students)) {
            CustomLayouts::show_header_titles(array("Imagen", "Informacion", "Acciones"));
            foreach($students as $student)
                CustomLayouts::show_full_content($student);
        } else {
            Title::title_with_strong_void('h2', 'No hay estudiantes registrados', 'text-center');
            Divs::open_div('d-grid gap-2');
                echo Button::button_collapse('btn btn-primary', 'headingOne', 'Registra un nuevo estudiante', 'collapseOne');
            Divs::close_div();
        }
    }