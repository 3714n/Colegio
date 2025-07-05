<?php require_once 'vistas/parte_superior.php'; ?>
<div class="container overflow-auto" style="max-height: 90vh; overflow-y: auto;">
    <form id="info" method="POST">
        <div class="row justify-content-center">

            <div class="col-md-3">
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded w-100">
                    <h3 class="text-center">Información</h3>


                    <!-- Datos del estudiante -->
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Nombres" id="nombres_Estudiante" name="nombres_Estudiante">
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Apellidos" id="apellidos_Estudiante" name="apellidos_Estudiante">
                    </div>
                    <div class="input-group-sm mb-2">
                        <select class="form-select form-control" id="tipo_Identidad_Estudiante" name="tipo_Identidad_Estudiante">
                            <option selected>Tipo de identidad</option>
                            <option value="Regístro Civíl">Regístro Civíl</option>
                            <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                            <option value="Cedula de ciudadanía">Cedula de ciudadanía</option>
                            <option value="Cedula de extrangería">Cedula de extrangería</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Numero de Documento" id="n_Documento_Estudiante" name="n_Documento_Estudiante">
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="date" class="form-control" placeholder="Fecha de nacimiento" id="f_Nacimiento" name="f_Nacimiento">
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Lugar de nacimiento" id="lugar_Nacimiento" name="lugar_Nacimiento">
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="femenino" value="femenino">
                            <label class="form-check-label" for="femenino">
                                Femenino
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="masculino" value="masculino">
                            <label class="form-check-label" for="masculino">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="otro" value="otro">
                            <label class="form-check-label" for="otro">
                                Otro
                            </label>
                        </div>
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Grupo sanguineo" id="grupo_Sanguineo" name="grupo_Sanguineo">
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Dirección" id="Direccion" name="direccion">
                    </div>

                </div>
            </div>



            <div class="col-md-3">
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded w-100">
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Barrio" id="barrio" name="barrio">
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Ciudad" id="ciudad" name="ciudad">
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Telefono" id="telefono" name="telefono">
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Correo" id="correo_Estudiante" name="correo_Estudiante">
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="number" class=" form-control" placeholder="Estrato" id="estrato" name="estrato">
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="EPS" id="EPS" name="EPS">
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Discapacidad" id="discapacidad" name="discapacidad">
                    </div>


                    <h3 class="text-center">Asistente</h3>
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Nombres" id="nombre_Asistente" name="nombre_Asistente">
                    </div>
                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Apellidos" id="apellidos_Asistente" name="apellidos_Asistente">
                    </div>
                    <div class="input-group-sm mb-2">
                        <select class="form-select form-control" id="tipo_Identidad_Asistente" name="tipo_Identidad_Asistente">
                            <option selected>Tipo de identidad</option>
                            <option value="Regístro Civíl">Regístro Civíl</option>
                            <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                            <option value="Cedula de ciudadanía">Cedula de ciudadanía</option>
                            <option value="Cedula de extrangería">Cedula de extrangería</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded w-100">
                    <div class="input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Numero de Documento" id="n_Documento_Asistente" name="n_Documento_Asistente">
                    </div>
                    <div class="input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Parentesco" id="Parentesco" name="Parentesco">
                    </div>
                    <div class="input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Nivel educativo" id="nivel_educativo" name="nivel_educativo">
                    </div>
                    <div class="input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Ocupación" id="ocupacion" name="ocupacion">
                    </div>
                    <div class="input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Telefono" id="telefono_Asistente" name="telefono_Asistente">
                    </div>
                    <div class="input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Correo" id="correo_Asistente" name="correo_Asistente">
                    </div>
                    <div class="input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Dirección" id="direccion_Asistente" name="direccion_Asistente">
                    </div>


                    <h3 class="text-center">Matricula</h3>
                    <div class="input-group-sm mb-2">
                        <select class="form-select form-control" id="grado" name="grado">
                            <option selected>Grado</option>
                            <option value="6 Y 7">6 Y 7</option>
                            <option value="8 Y 9">8 Y 9</option>
                            <option value="10 Y 11">10 Y 11</option>
                        </select>
                    </div>

                    <div class="input-group-sm mb-2">
                        <input type="text" class="form-control" placeholder="Jornada" id="jornada" name="jornada">
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="input-group-sm mb-3">
                        <input type="date" class="form-control" placeholder="Fecha de matricula" id="f_Matricula" name="f_Matricula">
                    </div>

                    <div class="input-group-sm mb-3">
                        <div class="form-check form-check-inline w-100">
                            <input class="form-check-input" type="radio" name="repitente" id="si">
                            <label class="form-check-label" for="si">
                                Si
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="repitente" id="no">
                            <label class="form-check-label" for="no">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Instituto anterior" id="inst_Anterior" name="inst_Anterior">
                    </div>
                    <div class="input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Ciudad anterior" id="ciudadAnterior" name="ciudadAnterior">
                    </div>
                    <div class="input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Oberbación" id="observacion" name="observacion">
                    </div>
                    <h3 class="text-center">Documentos</h3>
                    <div class="input-group-sm mb-3">
                        <input type="file" class="form-control" id="doc_Estudiante" name="doc_Estudiante">
                        <label class="input-group-text" for="Documento1">Docuemnto Estudiante</label>
                    </div>
                    <div class="input-group-sm mb-3">
                        <input type="file" class="form-control" id="doc_Acudiente" name="doc_Acudiente">
                        <label class="input-group-text" for="Documento2">Documento Acudiente</label>
                    </div>
                </div>
            </div>
                
            </div>
            <div class="row d-md-flex justify-content-center">
                   <div class="col-auto">
                <?php
                include 'backend/modelo/conexion.php';
                include 'backend/controlador/agregar.php';
                ?>
                </div>
                </div>
                <div class="row d-md-flex justify-content-center">
                <div class="col-auto">
                    <button type="button" class="btn btn-danger">cancelar</button>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-success" name="btnRegistrar" value="ok">Guardar</button>
                </div>
                </div>

    </form>

</div>
<?php require_once 'vistas/parte_inferior.php'; ?>