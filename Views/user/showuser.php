<div class="content">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"></div>Lista de <strong>usuarios</strong>.
                    <a href="?controller=user&method=create"><button class="btn btn-outline-primary">Crear</button></a>
                    <a href="?controller=user" class="btn btn-outline-danger">Volver</a>
                </div>
                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre de usuario</th>
                                <th>Email</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (User::consultarTodo() as $user) : ?>
                                <tr>
                                    <td><?= $user->id ?></td>
                                    <td><?= $user->usuario  ?></td>
                                    <td><?= $user->email ?></td>
                                    <td widht="200">
                                        <a href="?controller=user&method=edit&id=<?= $user->id ?>">
                                            <button class="btn btn-outline-success"><i class="fa fa-edit" alt="Editar"></i>Editar</button>
                                        </a>
                                        <a href="?controller=user&method=delete&id=<?= $user->id ?>">
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