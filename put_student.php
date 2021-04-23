<?php
    include_once 'models/Student.php';
    include_once 'helpers/serialize_unserialize.php';
    include_once 'helpers/redirect_page.php';
    include_once 'components/Title.php';

    if(isset($_POST['delete'])) {
        $students = unserialize_content();
        for($i = 0; $i < count($students); ++$i) {
            if($students[$i]->license == $_POST['license']) {
                unset($students[$i]);
                $students = array_values($students);
                break;
            }
        }
        $result = serialize_content($students);
        if($result)
            Title::title_with_strong_void('h3', 'Se elimino correctamente el estudiante', 'text-muted');
        else
            Title::title_with_strong_void('h3', 'No se eliminar el estudiante', 'text-muted');
    }
    redirect();

