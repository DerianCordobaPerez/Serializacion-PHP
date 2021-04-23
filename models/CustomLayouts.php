<?php
class CustomLayouts {
    private static array|null $titles = array('Nombre', 'Email', 'Edad', 'Carnet', 'Curso');
    private static array $instance = [];

    private function __construct() {
        include_once 'components/Form.php';
        include_once 'components/Divs.php';
        include_once 'components/Input.php';
        include_once 'components/Label.php';
        include_once 'components/Title.php';
        include_once 'components/Span.php';
        include_once 'components/Button.php';
        include_once 'components/Html.php';
        include_once 'components/Image.php';
        include_once 'components/P.php';
        include_once 'components/A.php';
        include_once 'models/Student.php';
    }


    /**
     * Devuelve una unica instancia de la clase aplicando el patron singleton
     * @param null
     * @return mixed
     */
    public static function get_instance(): mixed {
        $class = static::class;
        if(!isset(self::$instance[$class]))
            self::$instance[$class] = new static();
        return self::$instance[$class];
    }

    /**
     * Inserta el contenido completo para un estudiante, en el apartado de listado de estudiante
     * @param Student $student
     * @return void
     */
    public static function show_full_content(mixed $student): void {
        // Contenedor de las partes correspondientes para el contenido del html
        $content = array(
            self::show_photo_student($student->photo),
            self::get_array_strings($student),
            array(
                Button::button("btn btn-warning d-block mx-auto", "editButton", "<a class='link nav-link' href='edit_student.php?license=$student->license'>Editar</a>"),
                Button::button("btn btn-danger d-block mx-auto my-4", "deleteButton", "<a class='link nav-link' href='delete_student.php?license=$student->license'>Borrar</a>")
            ),
        );
        // Maquetacion del html mediante funciones
        Divs::open_div('row');
        foreach($content as $item) {
            Divs::open_div('col-md-4');
                if(is_array($item)) {
                    foreach($item as $string)
                        echo $string;
                } else  {
                    Divs::open_div('d-grid gap-2');
                        echo $item;
                    Divs::close_div();
                }
            Divs::close_div();
        }
        Divs::close_div();
        echo "<hr />";
    }

    /**
     * Inserta en pantalla de manera automatica los titulos superior del apartado lista de estudiantes
     * @param array|null $titles
     * @return void
     */
    public static function show_header_titles(array|null $titles): void {
        Divs::open_div('row');
        foreach($titles as $title) {
                Divs::open_div('col-md-4');
                    Title::title_void('h3', $title, 'text-center');
                Divs::close_div();
        }
        Divs::close_div();
        echo "<hr />";
    }

    /**
     * Inserta los titulos con su informacion provenientes del estudiante
     * @param string $title
     * @param string $attribute
     * @return string
     */
    public static function show_information_student(string $title, string $attribute): string {
            return "<p class='text'><strong class='text-strong'>$title: </strong> $attribute</p>";
    }

    /**
     * Inserta la imagen del usuario
     * @param string $name
     * @return string
     */
    public static function show_photo_student(string $name): string {
        return "
            <div class='image-shadow'>
                <img class='rounded mx-auto d-block image' src='uploads/$name' alt='Foto de perfil'/>
            </div>
        ";
    }

    /**
     * Maqueta el formulario de registro o edicion
     * @param $file
     * @param Student|null $student
     * @return void
     */
    public static function show_form($file, Student|null $student = null): void {
        echo Title::title_with_strong('h3', (!$student ? 'Agregar' : 'Editar').' Estudiante');
        Title::title_void('h5', !$student ? 'Rellene el formulario con los datos de estudiante' : 'Edite la informacion del usuario '.$student->name);

        if($student) $array_student = self::get_array_strings($student, 1);
        $labels = array('Email', 'Name', 'License', 'Age', 'Course', 'Photo');
        $icons = array('@', "<i class='far fa-user'></i>", "<i class='far fa-id-card'></i>", "18", "<i class='fas fa-graduation-cap'></i>", "<i class='fas fa-images'></i>");
        $types = array('email', 'text', 'text', 'number', 'number', 'file');

        Form::open_form($file, 'post', 'multipart/form-data');
        for($i = 0; $i < count($labels); ++$i) {
            Label::label_void(strtolower($labels[$i]), $labels[$i]);
            if($types === 'file') Input::input_hidden('MAX_FILE_SIZE', '1024000');
            Input::input('form-control', $icons[$i], $types[$i], strtolower($labels[$i]), $labels[$i], $student ? $array_student[$i] : '', true, $student ? $labels[$i] : '');
        }

        Divs::open_div('d-grid gap-2');
            Input::input('btn btn-primary my-2', '', 'submit', 'send', '', 'Enviar', false);
        Divs::close_div();
        Form::close_form();
    }

    private static function get_array_strings(Student $student, $flag = 0): array {
        $information = array();
        $student_information = array($student->email, $student->name, $student->license, $student->age, $student->course, $student->photo);
        if($flag) return $student_information;
        for($i = 0; $i < count(self::$titles); ++$i)
            array_push($information, self::show_information_student(self::$titles[$i], $student_information[$i]));
        return $information;
    }
}