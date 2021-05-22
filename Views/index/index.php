<div class="align-content-center">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img class="align-content" src="assets/img/logo.png" alt="">
                </a>
            </div>
            <div class="login-form">
                <p class="text-danger">
                    <?php if (isset($_SESSION['message'])) echo $_SESSION['message']; ?>
                </p>
                <form action="?controller=security&method=login" method="POST">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Introduce tu correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Introduce tu contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>