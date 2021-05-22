<div class="content">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Agregar </strong> curso
                    <a href="?controller=curse&method=show" class="btn btn-outline-primary">Volver</a>
                </div>
                <div class="card-body card-block">
                    <form action="?controller=curse&method=store" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Nombre</label></div>
                            <div class="col-6 col-md-9"><input type="text" id="nombre" name="nombre" placeholder="Ingrese nombre del curso" class="form-control"></div>
                        </div>
                        <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Agregar</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>