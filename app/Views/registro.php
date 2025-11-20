<form action="<?= base_url('/registro/guardar') ?>" method="post">
    <input type="text" name="usuario" placeholder="Nombre">
    <input type="email" name="correo" placeholder="Correo">
    <input type="password" name="password" placeholder="Contraseña">
    <button>Registrarse</button>
</form>

<?php if(session('msg')): ?>
    <p><?= session('msg') ?></p>
<?php endif; ?>
