<div class="content">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header"><strong>Editar</strong> datos de usuario</div>
                <div class="card-body card-block">
                    <form action="?controller=user&method=update&id=<?= $user->id ?>" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" id="user" name="user" class="form-control" placeholder="Nombre de usuario" value="<?= $user->usuario ?>" required>
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Contraseña" value="<?= $user->email ?>" required>
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            </div>
                        </div>
                        <div class="form-actions form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Modificar</button><a href="?controller=user&method=show" class="btn btn-outline-danger ml-2">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-5"></div>
    </div>
</div>