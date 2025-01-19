<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/estilosFinal.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <div class="registro-contenedor">
        <div class="registro-formulario-contenedor">
            <form action="{{ route('registro.store') }}" method="POST" class="registro-formulario">
                @csrf
                <h2 class="registro-titulo">Crea tu cuenta!</h2>
                <div class="registro-grupo-input">
                    <label class="registro-label" for="nombre">NOMBRE</label>
                    <input class="registro-caja" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                    @error('nombre')
                        <span class="registro-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="registro-grupo-input">
                    <label class="registro-label" for="apellido">APELLIDO</label>
                    <input class="registro-caja" type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido">
                    @error('apellido')
                        <span class="registro-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="registro-grupo-input">
                    <label class="registro-label" for="usuario">USUARIO</label>
                    <input class="registro-caja" type="text" id="usuario" name="usuario" placeholder="Ingrese su nombre de usuario">
                    @error('usuario')
                        <span class="registro-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="registro-grupo-input">
                    <label class="registro-label" for="telefono">CEDULA</label>
                    <input class="registro-caja" type="text" id="telefono" name="telefono" placeholder="Ingrese su de cedula">
                    @error('telefono')
                        <span class="registro-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="registro-grupo-input">
                    <label class="registro-label" for="correo">CORREO ELECTRÓNICO</label>
                    <input class="registro-caja" type="email" id="correo" name="correo" placeholder="Ingrese el correo">
                    @error('correo')
                        <span class="registro-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="registro-grupo-input">
                    <label class="registro-label" for="clave">CONTRASEÑA</label>
                    <input class="registro-caja" type="password" id="clave" name="clave" placeholder="Ingrese la contraseña">
                    @error('clave')
                        <span class="registro-error">{{ $message }}</span>
                    @enderror
                </div>
                <button class="registro-btn" type="submit">REGISTRARSE</button>
            </form>
        </div>
        <div class="registro-imagen-contenedor">
            <img src="../storage/app/public/img/inicioSesion.png" alt="Imagen lateral" class="registro-imagen">
        </div>
    </div>
</body>

</html>
