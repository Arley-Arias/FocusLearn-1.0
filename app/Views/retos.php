<!DOCTYPE html>
<html>
<head>
    <title>Retos</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <style>
        body { background:#111; color:#eee; font-family:Arial; }
        .container { width:80%; margin:auto; padding:30px; }
        .title { color:#f4d03f; font-size:32px; }
        .card { background:#1a1a1a; padding:20px; margin-top:20px; border-left:5px solid #f4d03f; border-radius:10px; }
        .btn { padding:10px 20px; background:#f4d03f; color:#111; border:none; border-radius:5px; cursor:pointer; }
    </style>
</head>
<body>

<div class="container">
    <h1 class="title">Retos</h1>

    <div class="card">
        <h3>Nuevo Reto</h3>
        <form>
            <input type="text" placeholder="Describe tu reto..." style="width:100%;padding:10px;border-radius:6px;">
            <br><br>
            <button class="btn">Agregar Reto</button>
        </form>
    </div>

    <div class="card">
        <h3>Retos Activos</h3>
        <ul>
            <li> Leer 20 minutos — <button class="btn">Completar</button></li>
            <li> Hacer ejercicio 10 min — <button class="btn">Completar</button></li>
        </ul>
    </div>
</div>

</body>
</html>
