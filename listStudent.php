<?php
    include 'constants/constants.php';
    function list_students(): void {
        $students = unserialize(file_get_contents(FILE_SERIALIZE));

        CustomLayouts::show_header_titles(array("Imagen", "Informacion", "Acciones"));
        foreach($students as $student)
            CustomLayouts::show_full_content($student);
    }