<div class="content">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header"><strong>Crear</strong> usuarios
                <a href="?controller=user" class="btn btn-outline-primary">Volver</a>
                </div>
                <div class="card-body card-block">
                    <form action="?controller=user&method=store" method="post" class="">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" id="user" name="user" placeholder="Nombre de usuario" class="form-control">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" id="email" name="email" placeholder="Correo electrónico" class="form-control">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" id="pswd" name="pswd" placeholder="Contraseña" class="form-control">
                                <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                            </div>
                        </div>
                        <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Crear</button></div>
                    </form>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>