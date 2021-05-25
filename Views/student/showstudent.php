<div class="content">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"></div>Lista de <strong>estudiantes</strong>.
                    <a href="?controller=student&method=create"><button class="btn btn-outline-primary">Crear</button></a>
                    <a href="?controller=user" class="btn btn-outline-danger">Volver</a>
                </div>
                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido paterno</th>
                                <th>Apellido materno</th>
                                <th>Teléfono</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (Student::consultarAlumnos() as $alumno) : ?>
                                <tr>
                                    <td><?= $alumno->id ?></td>
                                    <td><?= $alumno->nombre  ?></td>
                                    <td><?= $alumno->appat ?></td>
                                    <td><?= $alumno->apmat ?></td>
                                    <td><?= $alumno->telefono ?></td>
                                    <td widht="200">
                                        <a href="?controller=student&method=edit&id=<?= $curso->id ?>" alt="Editar">
                                            <button class="btn btn-outline-success"><i class="fa fa-edit" alt="Editar"></i>Editar</button>
                                        </a>
                                        <a href="">
                                            <button class="btn btn-outline-danger"><i class="fa fa-trash-o"></i>Borrar</button>
                                        </a>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>