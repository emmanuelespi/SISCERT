<div class="content">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"></div>Lista de <strong>profesores</strong>
                    <a href="?controller=profesor&method=create"><button class="btn btn-outline-success">Crear</button></a>
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
                            <?php foreach (Profesor::consultarProfesores() as $profesor) : ?>
                                <tr>
                                    <td><?= $profesor->id ?></td>
                                    <td><?= $profesor->nombre  ?></td>
                                    <td><?= $profesor->appat ?></td>
                                    <td><?= $profesor->apmat ?></td>
                                    <td><?= $profesor->telefono ?></td>
                                    <td>
                                        <a href="?controller=profesor&method=edit&id=<?= $profesor->id ?>">
                                            <button class="btn btn-outline-success"><i class="fa fa-edit"></i>Editar</button>
                                        </a>
                                        <a href="?controller=profesor&method=delete&id=<?= $profesor->id ?>">
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
        <div class="col-lg-2"></div>
    </div>
</div>