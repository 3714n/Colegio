<?php require_once 'vistas/parte_superior.php'; ?>
<div class="container">
    <!-- Inicio de la tabla -->
    <table class="table table-hover">
        <thead class="bg-light">
            <tr>
                <th>ID Estudiante</th>
                <th>Nombre del Estudiante</th>
                <th>Apellido del Estudiante</th>
                <th>Documento</th>
                <th>Teléfono</th>
                <th>Nombre del Acudiente</th>
                <th>Apellido del Acudiente</th>
                <th>Grado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <!-- contenido de la tabla -->
        <tbody>
            <!-- dentro de HTML hago un espacio para el codigo PHP 
                         para dar conexion y hacer un recorrido a los datos obtenido
                         de la conexion-->
            <?php
            // Include database connection, significa que se conecta a la base de datos
            // y luego hace un recorrido a los datos obtenidos de la base de datos
            include 'backend/modelo/conexion.php';

            $sql = $conexion->query("SELECT 
                -- Campos de estudiantes
                e.id_estudiante AS Id_estudiante,
                e.nombres AS estudiante_nombres,
                e.apellidos AS estudiante_apellidos,
                e.tipo_documento AS estudiante_tipo_documento,
                e.numero_documento AS estudiante_documento,
                e.fecha_nacimiento AS estudiante_fecha_nacimiento,
                e.lugar_nacimiento AS estudiante_lugar_nacimiento,
                e.genero AS estudiante_genero,
                e.grupo_sanguineo AS estudiante_grupo_sanguineo,
                e.direccion AS estudiante_direccion,
                e.barrio AS estudiante_barrio,
                e.ciudad AS estudiante_ciudad,
                e.estrato AS estudiante_estrato,
                e.telefono AS estudiante_telefono,
                e.correo AS estudiante_correo,
                e.eps AS estudiante_eps,
                e.discapacidad AS estudiante_discapacidad,
                
                -- Campos de acudientes
                a.id_acudiente AS acudiente_id,
                a.nombres AS acudiente_nombres,
                a.apellidos AS acudiente_apellidos,
                a.tipo_documento AS acudiente_tipo_documento,
                a.numero_documento AS acudiente_documento,
                a.parentesco AS acudiente_parentesco,
                a.nivel_educativo AS acudiente_nivel_educativo,
                a.ocupacion AS acudiente_ocupacion,
                a.direccion AS acudiente_direccion,
                a.telefono AS acudiente_telefono,
                a.correo AS acudiente_correo,
                
                -- Campos de matrícula
                m.id_matricula AS matricula_id,
                m.grado AS matricula_grado,
                m.jornada AS matricula_jornada,
                m.fecha_matricula,
                m.repite_grado AS matricula_repite_grado,
                m.institucion_anterior AS matricula_institucion_anterior,
                m.ciudad_anterior AS matricula_ciudad_anterior,
                m.observaciones AS matricula_observaciones

                FROM estudiantes e
                INNER JOIN estudiante_acudiente ea ON e.id_estudiante = ea.id_estudiante
                INNER JOIN acudientes a ON a.id_acudiente = ea.id_acudiente
                INNER JOIN matricula m ON e.id_estudiante = m.id_estudiante");

            while ($datos = $sql->fetch_object()) { ?>
                <!-- aca termina el codigo PHP pero pero el WHILle sigue abierto
                             agregamos los datos octenidos desde la base de datos -->
                <tr>
                    <th scope="row"><?= $datos->Id_estudiante; ?></th>
                    <td><?= $datos->estudiante_nombres; ?></td>
                    <td><?= $datos->estudiante_apellidos; ?></td>
                    <td><?= $datos->estudiante_documento; ?></td>
                    <td><?= $datos->estudiante_telefono; ?></td>
                    <td><?= $datos->acudiente_nombres; ?></td>
                    <td><?= $datos->acudiente_apellidos; ?></td>
                    <td><?= $datos->matricula_grado; ?></td>

                    <td>
                        <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleDetalles<?= $datos->Id_estudiante; ?>">Detalles</button>
                    </td>
                </tr>
                <!-- Modal para editar usuario específico
                             como esta dentro de la tabla no hay necesidad de volver hacer 
                             la conexion a la base de datos -->
                <div class="modal fade" tabindex="-1" id="exampleDetalles<?= $datos->Id_estudiante; ?>">
                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                        <form method="POST" action="backend/controlador/">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Detalles del Estudiante: <?= $datos->estudiante_nombres; ?> </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body">

                                    <!-- Enviar ID oculto -->
                                    <input type="hidden" name="id" value="<?= $datos->Id_estudiante; ?>">
                                    <div class="containeer">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="list-group list-group-flush">
                                                   
                                                    <li class="list-group-item "><span class="etiqueta_detalles">Nombre:</span> <?= $datos->estudiante_nombres; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Apellido: </span><?= $datos->estudiante_apellidos; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Tipo de Documento: </span><?= $datos->estudiante_tipo_documento; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Número de Documento: </span><?= $datos->estudiante_documento; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Fecha de Nacimiento: </span><?= $datos->estudiante_fecha_nacimiento; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Lugar de Nacimiento: </span><?= $datos->estudiante_lugar_nacimiento; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Género: </span><?= $datos->estudiante_genero; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Grupo Sanguíneo: </span><?= $datos->estudiante_grupo_sanguineo; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Dirección: </span><?= $datos->estudiante_direccion; ?></li>

                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="list-group list-group-flush">

                                                    <li class="list-group-item"><span class="etiqueta_detalles">Barrio: </span><?= $datos->estudiante_barrio; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Ciudad: </span><?= $datos->estudiante_ciudad; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Estrato: </span><?= $datos->estudiante_estrato; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Teléfono: </span><?= $datos->estudiante_telefono; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Correo: </span><?= $datos->estudiante_correo; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">EPS: </span><?= $datos->estudiante_eps; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Discapacidad: </span><?= $datos->estudiante_discapacidad; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Nombre del Acudiente: </span><?= $datos->acudiente_nombres; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Apellido del Acudiente:</span> <?= $datos->acudiente_apellidos; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Tipo de Identidad del Acudiente: </span><?= $datos->acudiente_tipo_documento; ?></li>
                                                    

                                                </ul>
                                            </div>

                                            <div class="col-md-3">
                                                <ul class="list-group list-group-flush">


                                                    <li class="list-group-item"><span class="etiqueta_detalles">Número de Documento del Acudiente: </span><?= $datos->acudiente_documento; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Parentesco: </span><?= $datos->acudiente_parentesco; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Nivel Educativo: </span><?= $datos->acudiente_nivel_educativo; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Ocupación: </span><?= $datos->acudiente_ocupacion; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Teléfono del Acudiente: </span><?= $datos->acudiente_telefono; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Correo del Acudiente: </span><?= $datos->acudiente_correo; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Dirección del Acudiente: </span><?= $datos->acudiente_direccion; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Grado: </span><?= $datos->matricula_grado; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Jornada: </span><?= $datos->matricula_jornada; ?></li>


                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="list-group list-group-flush">

                                                    <li class="list-group-item"><span class="etiqueta_detalles">Fecha de Matrícula: </span><?= $datos->fecha_matricula; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Repitente: </span><?= $datos->matricula_repite_grado ? 'Sí' : 'No'; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Institución Anterior: </span><?= $datos->matricula_institucion_anterior; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Ciudad Anterior: </span><?= $datos->matricula_ciudad_anterior; ?></li>
                                                    <li class="list-group-item"><span class="etiqueta_detalles">Observaciones: </span><?= $datos->matricula_observaciones; ?></li>

                                                </ul>
                                            </div>

                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>


                <!-- y aca se cierra el WHILE dentro de un espacio PHP -->
            <?php } ?>
        </tbody>
    </table>
</div>

<?php require_once 'vistas/parte_inferior.php'; ?>