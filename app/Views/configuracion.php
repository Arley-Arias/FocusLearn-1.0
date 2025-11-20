<!DOCTYPE html>
<html>
<head>
    <title>Configuración</title>
    <style>
        body { background:#111; color:#eee; font-family:Arial; }
        .container { width:80%; margin:auto; padding:30px; }
        .title { color:#f4d03f; font-size:32px; }
        .setting { margin-top:20px; background:#1a1a1a; padding:20px; border-radius:10px; }
        .btn { margin-top:20px; padding:10px 20px; background:#f4d03f; border-radius:6px; border:none; }
    </style>
</head>
<body>

<div class="container">
    <h1 class="title">Configuración</h1>

    <div class="setting">
        <label>Notificaciones:</label>
        <br>
        <input type="checkbox" checked> Activar
    </div>

    <div class="setting">
        <label>Modo:</label>
        <br>
        <select style="padding:10px; border-radius:6px;">
            <option>Oscuro</option>
            <option>Claro</option>
        </select>
    </div>

    <button class="btn">Guardar Cambios</button>

</div>

</body>
</html>

