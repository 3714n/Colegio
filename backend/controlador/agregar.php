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
        !empty($_POST["EPS"]) && !empty($_POST["discapasidad"]) &&
        !empty($_POST["barrio"]) && !empty($_POST["nombre_Asistente"]) && 
        !empty($_POST["apellidos_Asistente"]) && !empty($_POST["tipo_Identidad_Asistente"]) &&
        !empty($_POST["n_Documento_Asistente"]) && !empty($_POST["Parentesco"]) &&
        !empty($_POST["Telefono_Asistente"]) && !empty($_POST["ocupacion"]) &&
        !empty($_POST["nivel_educativo"]) && !empty($_POST["correo_Asistente"]) &&
        !empty($_POST["direccion_Asistente"]) && !empty($_POST["grado"]) &&
        !empty($_POST["f_Matricula"]) && !empty($_POST["Repitente"]) &&
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
            "discapasidad" => $_POST["discapasidad"]
        ];*/
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
        $discapasidad = mysqli_real_escape_string($conexion, $_POST["discapasidad"]);
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
        $Repitente = mysqli_real_escape_string($conexion, $_POST["Repitente"]);
        $inst_Anterior = mysqli_real_escape_string($conexion, $_POST["inst_Anterior"]);
        $ciudadAnterior = mysqli_real_escape_string($conexion, $_POST["ciudadAnterior"]);
        $observacion = mysqli_real_escape_string($conexion, $_POST["observacion"]);



        $sql = $conexion->query("INSERT INTO estudiantes (nombres, apellidos, 
        tipo_documento, numero_documento, fecha_nacimiento, lugar_nacimiento, 
        genero, grupo_sanguineo, direccion, barrio, ciudad, estrato, telefono, correo, 
        eps, discapacidad) VALUES ('$nombres_Estudiante', '$apellidos_Estudiante',
         '$tipo_Identidad_Estudiante', '$n_Documento_Estudiante', '$f_Nacimiento', 
         '$lugar_Nacimiento', '$genero', '$grupo_sanguineo', '$direccion','$barrio','$ciudad',
          '$estrato', '$telefono', '$correo_Estudiante', '$EPS', '$discapasidad')");

        if ($sql == 1) {
            echo '<div class="alert alert-success">Datos guardados correctamente</div>';
            $conexion->close();
            header("Location: ../nuevo_Registro.php");
            exit();
        } else {
            echo '<div class="alert alert-danger">Error al registrar usuario.</div>' . $conexion->error . '</div>';
        }
    } else {
        echo '<div>Por favor, complete todos los campos.</div>';
    }
}
?>