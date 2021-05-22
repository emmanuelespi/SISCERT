<div class="content">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header"><strong>Editar</strong> datos de profesor</div>
                <div class="card-body card-block">
                    <form action="?controller=profesor&method=update&id=<?= $profesor->id ?>" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre(s)" value="<?= $profesor->nombre ?>" required>
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" id="appat" name="appat" class="form-control" placeholder="Apellido paterno" value="<?= $profesor->appat ?>" required>
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" id="apmat" name="apmat" class="form-control" placeholder="Apellido materno" value="<?= $profesor->apmat ?>" required>
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" id="telefono" name="telefono" class="form-control" placeholder="Teléfono" value="<?= $profesor->telefono ?>" required>
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