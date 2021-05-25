<div class="content">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Agregar </strong> estudiante
                    <a href="?controller=student&method=show" class="btn btn-outline-primary">Volver</a>
                </div>
                <div class="card-body card-block">
                    <form action="?controller=student&method=store" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Nombre(s)</label></div>
                            <div class="col-6 col-md-9"><input type="text" id="nombre" name="nombre" placeholder="Ingrese nombre(s)" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Apellido paterno</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="appat" name="appat" placeholder="Ingrese apellido paterno" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Apellido materno</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="apmat" name="apmat" placeholder="Ingrese apellido materno" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Teléfono</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="telefono" name="telefono" placeholder="Teléfono" class="form-control"></div>
                        </div>
                        <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Crear</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>