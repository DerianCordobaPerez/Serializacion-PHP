<?php
    include_once 'models/Student.php';
    include_once 'models/CustomLayouts.php';
    include_once 'helpers/get_student.php';
    CustomLayouts::get_instance();

    $student = get_student($_GET['license']);
    $titles = array('Nombre', 'Email', 'Edad', 'Carnet', 'Curso');
    $array_information = array($student->name, $student->email, $student->license, $student->age, $student->course, $student->photo);
    Html::open_html('Delete '.$student->name);
        Form::open_form('put_student.php', 'post', 'multipart/form-data');
            Input::input_hidden('license', $student->license);
            Divs::open_div('container bg-light my-4 p-4');
                Divs::open_div_role('alert alert-warning', 'alert');
                    Title::title_with_strong_void('h3', 'Estas seguro que desea eliminar a '.$student->name.'?', 'text-center');
                Divs::close_div();

                Divs::open_div('row my-4');
                    Divs::open_div('col-md-2');
                    Divs::close_div();
                    Divs::open_div('col-md-4');
                        echo Title::title_with_strong('h3', 'Informacion', '');
                        for($i = 0; $i < count($titles); ++$i)
                            echo CustomLayouts::show_information_student($titles[$i], $array_information[$i]);
                    Divs::close_div();

                    Divs::open_div('col-md-6');
                        echo Title::title_with_strong('h3', 'Imagen', 'text-center');
                        Divs::open_div('d-grid gap-2');
                            Image::image('uploads/'.$student->photo, 'image-shadow image mx-auto d-block');
                        Divs::close_div();
                    Divs::close_div();
                Divs::close_div();

                Divs::open_div('row my-4');
                    Divs::open_div('col'); Divs::close_div();
                    Divs::open_div('col-md-6');
                        echo Input::input_string('btn btn-danger button-width', 'submit', 'delete', 'Si');
                    Divs::close_div();
                    Divs::open_div('col'); Divs::close_div();
                Divs::close_div();
                A::a('text-center nav-link', 'index.php', 'No, volver al inicio');
            Divs::close_div();
        Form::close_form();
    Html::close_html();

