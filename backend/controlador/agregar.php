<?php
if (!empty($_POST["btnRegistrar"])) {
    if (
        !empty($_POST["nombres_Estudiante"]) &&
        !empty($_POST["apellidos_Estudiante"]) && !empty($_POST["tipo_Identidad_Estudiante"]) &&
        !empty($_POST["n_Documento_Estudiante"]) && !empty($_POST["f_Nacimiento"]) &&
        !empty($_POST["lugar_Nacimiento"])  && !empty($_POST["genero"]) &&
        !empty($_POST["grupo_Sanguineo"]) && !empty($_POST["direccion"]) &&
        !empty($_POST["ciudad"]) && !empty($_POST["estrato"]) &&
        !empty($_POST["telefono"]) && !empty($_POST["correo_Estudiante"]) &&
        !empty($_POST["EPS"]) && !empty($_POST["discapacidad"]) &&
        !empty($_POST["barrio"]) && !empty($_POST["nombre_Asistente"]) &&
        !empty($_POST["apellidos_Asistente"]) && !empty($_POST["tipo_Identidad_Asistente"]) &&
        !empty($_POST["n_Documento_Asistente"]) && !empty($_POST["Parentesco"]) &&
        !empty($_POST["telefono_Asistente"]) && !empty($_POST["ocupacion"]) &&
        !empty($_POST["nivel_educativo"]) && !empty($_POST["correo_Asistente"])  &&
        !empty($_POST["direccion_Asistente"]) && !empty($_POST["grado"]) &&
        !empty($_POST["f_Matricula"]) && !empty($_POST["repitente"]) &&
        !empty($_POST["inst_Anterior"]) && !empty($_POST["ciudadAnterior"]) &&
        !empty($_POST["observacion"])
    ) {

        /*$datos=[
            "nombres_Estudiante" => $_POST["nombres_Estudiante"],
            "apellidos_Estudiante" => $_POST["apellidos_Estudiante"],
            "tipo_Identidad_Estudiante" => $_POST["tipo_Identidad_Estudiante"],
            "n_Documento_Estudiante" => $_POST["n_Documento_Estudiante"],
            "f_Nacimiento" => $_POST["f_Nacimiento"],
            "lugar_Nacimiento" => $_POST["lugar_Nacimiento"],
            "genero" => $_POST["genero"],
            "grupo_sanguineo" => $_POST["grupo_Sanguineo"],
            "direccion" => $_POST["direccion"],
            "barrio" => $_POST["barrio"],
            "ciudad" => $_POST["ciudad"],
            "estrato" => $_POST["estrato"],
            "telefono" => $_POST["telefono"],
            "correo_Estudiante" => $_POST["correo_Estudiante"],
            "EPS" => $_POST["EPS"],
            "discapacidad" => $_POST["discapacidad"],
            "nombre_Asistente" => $_POST["nombre_Asistente"],
            "apellidos_Asistente" => $_POST["apellidos_Asistente"],
            "tipo_Identidad_Asistente" => $_POST["tipo_Identidad_Asistente"],
            "n_Documento_Asistente" => $_POST["n_Documento_Asistente"],
            "Parentesco" => $_POST["Parentesco"],
            "nivel_educativo" => $_POST["nivel_educativo"],
            "ocupacion" => $_POST["ocupacion"],
            "telefono_Asistente" => $_POST["telefono_Asistente"],
            "correo_Asistente" => $_POST["correo_Asistente"],
            "direccion_Asistente" => $_POST["direccion_Asistente"],
            "grado" => $_POST["grado"],
            "jornada" => $_POST["jornada"],
            "f_Matricula" => $_POST["f_Matricula"],
            "Repitente" => $_POST["Repitente"],
            "inst_Anterior" => $_POST["inst_Anterior"],
            "ciudadAnterior" => $_POST["ciudadAnterior"],
            "observacion" => $_POST["observacion"]
        ];*/

        try {
            include_once "backend/modelo/conexion.php";
            $nombres_Estudiante = mysqli_real_escape_string($conexion, $_POST["nombres_Estudiante"]);
            $apellidos_Estudiante = mysqli_real_escape_string($conexion, $_POST["apellidos_Estudiante"]);
            $tipo_Identidad_Estudiante = $_POST["tipo_Identidad_Estudiante"];
            $n_Documento_Estudiante = mysqli_real_escape_string($conexion, $_POST["n_Documento_Estudiante"]);
            $f_Nacimiento = $_POST["f_Nacimiento"];
            $lugar_Nacimiento = mysqli_real_escape_string($conexion, $_POST["lugar_Nacimiento"]);
            $genero = $_POST["genero"];
            $grupo_sanguineo = $_POST["grupo_Sanguineo"];
            $direccion = mysqli_real_escape_string($conexion, $_POST["direccion"]);
            $barrio = mysqli_real_escape_string($conexion, $_POST["barrio"]);
            $ciudad = mysqli_real_escape_string($conexion, $_POST["ciudad"]);
            $estrato = $_POST["estrato"];
            $telefono = mysqli_real_escape_string($conexion, $_POST["telefono"]);
            $correo_Estudiante = mysqli_real_escape_string($conexion, $_POST["correo_Estudiante"]);
            $EPS = mysqli_real_escape_string($conexion, $_POST["EPS"]);
            $discapacidad = mysqli_real_escape_string($conexion, $_POST["discapacidad"]);
            $nombre_Asistente = mysqli_real_escape_string($conexion, $_POST["nombre_Asistente"]);
            $apellidos_Asistente = mysqli_real_escape_string($conexion, $_POST["apellidos_Asistente"]);
            $tipo_Identidad_Asistente = mysqli_real_escape_string($conexion, $_POST["tipo_Identidad_Asistente"]);
            $n_Documento_Asistente = mysqli_real_escape_string($conexion, $_POST["n_Documento_Asistente"]);
            $Parentesco = mysqli_real_escape_string($conexion, $_POST["Parentesco"]);
            $nivel_educativo = mysqli_real_escape_string($conexion, $_POST["nivel_educativo"]);
            $ocupacion = mysqli_real_escape_string($conexion, $_POST["ocupacion"]);
            $telefono_Asistente = mysqli_real_escape_string($conexion, $_POST["telefono_Asistente"]);
            $correo_Asistente = mysqli_real_escape_string($conexion, $_POST["correo_Asistente"]);
            $direccion_Asistente = mysqli_real_escape_string($conexion, $_POST["direccion_Asistente"]);
            $grado = mysqli_real_escape_string($conexion, $_POST["grado"]);
            $jornada = mysqli_real_escape_string($conexion, $_POST["jornada"]);
            $f_Matricula = mysqli_real_escape_string($conexion, $_POST["f_Matricula"]);
            $Repitente = mysqli_real_escape_string($conexion, $_POST["repitente"]);
            $inst_Anterior = mysqli_real_escape_string($conexion, $_POST["inst_Anterior"]);
            $ciudadAnterior = mysqli_real_escape_string($conexion, $_POST["ciudadAnterior"]);
            $observacion = mysqli_real_escape_string($conexion, $_POST["observacion"]);



            $sql_estudiante = $conexion->query("INSERT INTO estudiantes (nombres, apellidos, 
            tipo_documento, numero_documento, fecha_nacimiento, lugar_nacimiento, 
            genero, grupo_sanguineo, direccion, barrio, ciudad, estrato, telefono, correo, 
            eps, discapacidad) VALUES ('$nombres_Estudiante', '$apellidos_Estudiante',
            '$tipo_Identidad_Estudiante', '$n_Documento_Estudiante', '$f_Nacimiento', 
            '$lugar_Nacimiento', '$genero', '$grupo_sanguineo', '$direccion','$barrio','$ciudad',
            '$estrato', '$telefono', '$correo_Estudiante', '$EPS', '$discapacidad')");
            
            // Captura el ID del estudiante recién insertado
            $id_estudiante = $conexion->insert_id;

            $sql_asistente = $conexion->query("INSERT INTO acudientes (nombres, apellidos, 
            tipo_documento, numero_documento, parentesco, nivel_educativo, ocupacion,
            telefono, correo, direccion) VALUES ('$nombre_Asistente', '$apellidos_Asistente',
            '$tipo_Identidad_Asistente', '$n_Documento_Asistente', '$Parentesco', 
            '$nivel_educativo', '$ocupacion', '$telefono_Asistente', '$correo_Asistente',
            '$direccion_Asistente')");
            // Captura el ID del estudiante recién insertado
            $id_asistente = $conexion->insert_id;

            $sql_matricula = $conexion->query("INSERT INTO matricula (id_estudiante, grado, jornada, fecha_matricula, repite_grado, 
            institucion_anterior, ciudad_anterior, observaciones) VALUES ('$id_estudiante', '$grado', '$jornada', '$f_Matricula', '$Repitente',
            '$inst_Anterior', '$ciudadAnterior', '$observacion')");

            $sql_estudiante_asistente = $conexion->query("INSERT INTO estudiante_acudiente (id_estudiante, id_acudiente) VALUES ('$id_estudiante', '$id_asistente')");


            if($sql_estudiante && $sql_asistente && $sql_matricula) {
                $conexion->close();
                
                exit();
            } else {
                echo '<div class="alert alert-danger">Error al registrar los datos.</div>';
                exit();
            } 
            
        } catch (Exception $e) {
            echo '<div class="alert alert-danger">Error de conexión: ' . $e->getMessage() . $conexion->error . '</div>';
            exit();
        }
    } else {
        echo '<div>Por favor, complete todos los campos.</div>';
        var_dump($_POST);
    }
} 
?>