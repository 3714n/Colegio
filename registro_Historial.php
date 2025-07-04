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
        e.id_estudiante AS IdEstudiante,
        e.nombres AS nombre_estudiante,
        e.apellidos AS apellido_estudiante,
        e.numero_documento AS numero_documento,
        e.telefono,
        a.nombres AS nombre_acudiente,
        a.apellidos AS apellido_acudiente,
        m.grado
      FROM estudiantes e
      INNER JOIN estudiante_acudiente ea ON e.id_estudiante = ea.id_estudiante
      INNER JOIN acudientes a ON a.id_acudiente = ea.id_acudiente
      INNER JOIN matricula m ON e.id_estudiante = m.id_estudiante");

            while ($datos = $sql->fetch_object()) { ?>
                <!-- aca termina el codigo PHP pero pero el WHILle sigue abierto
                             agregamos los datos octenidos desde la base de datos -->
                <tr>
                    <th scope="row"><?= $datos->IdEstudiante; ?></th>
                    <td><?= $datos->nombre_estudiante; ?></td>
                    <td><?= $datos->apellido_estudiante; ?></td>
                    <td><?= $datos->numero_documento; ?></td>
                    <td><?= $datos->telefono; ?></td>
                    <td><?= $datos->nombre_acudiente; ?></td>
                    <td><?= $datos->apellido_acudiente; ?></td>
                    <td><?= $datos->grado; ?></td>

                    <td>
                        <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#examplEditar<?= $datos->Id; ?>">Editar</button>
                        <a href="controlador/eliminar.php?id=<?= $datos->Id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este registro?');">
                            Eliminar
                        </a>
                    </td>
                </tr>
                <!-- Modal para editar usuario específico
                             como esta dentro de la tabla no hay necesidad de volver hacer 
                             la conexion a la base de datos -->
                <div class="modal fade" tabindex="-1" id="examplEditar<?= $datos->Id; ?>">
                    <div class="modal-dialog">
                        <form method="POST" action="controlador/editar.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modificar Usuario</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body">

                                    <!-- Enviar ID oculto -->
                                    <input type="hidden" name="id" value="<?= $datos->Id; ?>">

                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cedula" class="form-label">Cédula</label>
                                        <input type="text" class="form-control" name="cedula" value="<?= $datos->cedula; ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="btnEditar" value="ok">Modificar</button>
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